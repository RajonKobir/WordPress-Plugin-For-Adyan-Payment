<?php
/*
 * Plugin Name: Adyen WooCommerce Integration
 * Plugin URI: 
 * Description: Adyen integration for WooCommerce.
 * Author: Kenny
 * Version: 1.0.0
 * Author URI: 
 * Text Domain: WoocommercePrimexApi
 * License: GPL2+
 * Domain Path: 
*/

//  no direct access 
if( !defined('ABSPATH') ) : exit(); endif;

// if no woocommerce
if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;

// Define plugin constants 
define( 'ADYEN_WOOCOMMERCE_PLUGIN_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );
define( 'ADYEN_WOOCOMMERCE_PLUGIN_URL', trailingslashit( plugins_url('/', __FILE__) ) );
define( 'ADYEN_WOOCOMMERCE_PLUGIN_NAME', 'adyen_woocommerce_plugin' );

// assigning
$AdyenWoocommerceMerchantAccount = 'HealthxchangePharmacy_CleverBeauty_TEST';
$AdyenWoocommerceApiKey = 'AQE3hmfxLonHaRVEw0m/n3Q5qf3VYI5MAYdCQGZex3asm1ZDn9V7EcV4lCzxTxBjdtTJnDSma9VJURDBXVsNvuR83LVYjEgiTGAH-nBUwjZckH9irl2dI7NdoVtFO228FHIDiQMVHpbR10ig=-4.s}gqhZyN5>XyTp';
$AdyenWoocommerceApplicationName = 'Clever Beauty Adyen';
$AdyenWoocommerceApiEnvironment = 'test';
$AdyenWoocommerceClientKey = 'test_WRAX5X23YRBIREPD7XHQIKAKS425NROU';
$AdyenWoocommerceCurrentPageLink = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$AdyenWoocommercePostUrl = ADYEN_WOOCOMMERCE_PLUGIN_URL . 'post.php';

// user country code
function get_user_geo_country_code(){
    $geo      = new WC_Geolocation(); 
    $user_ip  = $geo->get_ip_address(); 
    $user_geo = $geo->geolocate_ip( $user_ip ); 
    $country  = $user_geo['country']; 
    return $country; 
}


// registering required css and js
add_action('wp_enqueue_scripts', 'enqueue_adyen_scripts');
function enqueue_adyen_scripts() {

    global $AdyenWoocommerceMerchantAccount;
    global $AdyenWoocommerceApiKey;
    global $AdyenWoocommerceApplicationName;
    global $AdyenWoocommerceApiEnvironment;
    global $AdyenWoocommerceClientKey;
    global $AdyenWoocommerceCurrentPageLink;
    global $AdyenWoocommercePostUrl;

    wp_register_script('adyen-js', 'https://checkoutshopper-test.adyen.com/checkoutshopper/sdk/3.12.0/adyen.js', array('jquery'), '3.12.0', true);

    wp_register_style('adyen-css', 'https://checkoutshopper-test.adyen.com/checkoutshopper/sdk/3.12.0/adyen.css');

    wp_register_script('adyen-custom', ADYEN_WOOCOMMERCE_PLUGIN_URL . 'assets/js/adyen-dropin.js', array('jquery', 'adyen-js'), '1.0', true);

    // if logged in
    if ( is_user_logged_in() ) {

        $cart = WC()->cart;
        $original_subtotal = WC()->cart->get_subtotal(); 
        $current_vat = WC()->cart->get_total_tax(); 
        $original_vat = WC()->cart->get_subtotal_tax();
        $original_total = $original_subtotal + $original_vat; 
        $cart_total = WC()->cart->get_total( '', '', false ); 
        $total_amount = number_format($cart_total, 2); 
        $rounded_value = round($total_amount * 100);
        $currency = get_woocommerce_currency();

        $user = get_current_user_id();
        if (function_exists('get_field')) {
            $account_reference = get_field('account_reference', 'user_'.$user );
        }else{
            $account_reference = get_user_by( 'id', $user )->display_name;
        }

        // creating data to send over Adyen API
        $reference = 'CB--' . $account_reference . '--' . $rounded_value . '--' . date("Y-m-d") . '--' . date("h:i:s A");
        $countryCode = get_user_geo_country_code();

        // creating new Adyen client
        $client = new \Adyen\Client();
        $client->setApplicationName($AdyenWoocommerceApplicationName);

        if($AdyenWoocommerceApiEnvironment == "live"){
            $client->setEnvironment(\Adyen\Environment::LIVE);
        }else{
            $client->setEnvironment(\Adyen\Environment::TEST);
        }
        
        $client->setXApiKey($AdyenWoocommerceApiKey);
        $service = new \Adyen\Service\Checkout($client);

        $params = array(
        'amount' => array(
            'currency' => $currency,
            'value' => $rounded_value
        ),
        'countryCode' => $countryCode,
        'merchantAccount' => $AdyenWoocommerceMerchantAccount,
        'reference' => $reference,
        'returnUrl' => $AdyenWoocommerceCurrentPageLink
        );

        try {
            $result = $service->sessions($params);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }finally{
            if(isset($result["id"]) && isset($result["sessionData"])){
                wp_localize_script('adyen-custom', 'woocommerce_order', array(
                    'rounded_value' => $rounded_value,
                    'currency' => $currency,
                    'reference' => $reference,
                    'session_id' => $result["id"],
                    'sessionData' => $result["sessionData"],
                    'countryCode' => $countryCode,
                    'merchantAccount' => $AdyenWoocommerceMerchantAccount,
                    'returnUrl' => $AdyenWoocommerceCurrentPageLink,
                    'ApiEnvironment' => $AdyenWoocommerceApiEnvironment,
                    'clientKey' => $AdyenWoocommerceClientKey,
                    'postUrl' => $AdyenWoocommercePostUrl,
                ));

            }

        }
    
    }
    // if logged in ends here

}



// adding a new payment gateway to WC
add_filter('woocommerce_payment_gateways', 'add_custom_adyen_payment_gateway');
function add_custom_adyen_payment_gateway($gateways) {

    // loading the web SDK
    require_once __DIR__ . '/vendor/autoload.php';

    // if the class not exists
    if(!class_exists('WC_Adyen_Gateway')){

        class WC_Adyen_Gateway extends WC_Payment_Gateway {

            private $environment = '';
            private $test_api_key = '';
            private $test_merchant_account = '';
            private $test_hmac_key = '';
            private $live_api_key = '';
            private $live_merchant_account = '';
            private $live_url_prefix = '';
            private $live_hmac_key = '';


            public function __construct() {
                $this->id = 'adyen';
                $this->method_title = 'Adyen';
                // $this->method_description = 'Adyen Direct Payment Gateway';
                $this->has_fields = true; 
                $this->init_form_fields();
                $this->init_settings();
                // $this->payment_fields();
                $this->title = $this->get_option( 'title' );
                $this->description = $this->get_option( 'description' );
                $this->enabled = $this->get_option( 'enabled' );

                $this->environment = $this->get_option('environment');

                $this->test_api_key = $this->get_option('test_api_key');
                $this->test_merchant_account = $this->get_option('test_merchant_account');
                $this->test_hmac_key = $this->get_option('test_hmac_key');
                
                $this->live_api_key = $this->get_option('live_api_key');
                $this->live_merchant_account = $this->get_option('live_merchant_account');
                $this->live_url_prefix = $this->get_option('live_url_prefix');
                $this->live_hmac_key = $this->get_option('live_hmac_key');
                
                // This action hook saves the settings
                add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
                
                // Add the necessary actions and filters
                add_action('woocommerce_receipt_adyen', array($this, 'receipt_page'));
                add_action('woocommerce_api_process_adyen_payment', array($this, 'process_payment_response'));
            }

            public function init_form_fields() {
                // Set up admin settings etc.
                $this->form_fields = array(
                'enabled' => array(
                'title'       => 'Enable/Disable',
                'label'       => 'Enable Adyen Payment Gateway',
                'type'        => 'checkbox',
                'description' => '',
                'default'     => 'no'
                ),
                'title' => array(
                'title'       => 'Title',
                'type'        => 'text',
                'description' => 'This controls the title which the user sees during checkout.',
                'default'     => 'Adyen Payment',
                'desc_tip'    => true,
                ),
                'description' => array(
                'title'       => 'Description',
                'type'        => 'textarea',
                'description' => 'This controls the description which the user sees during checkout.',
                'desc_tip'    => true,
                'default'     => 'Pay with your Adyen account payment gateway.',
                ),
                'environment' => array(
                    'title'       => 'Environment',
                    'type'        => 'select',
                    'default'     => 'live',
                    'options'     => array(
                        'live' => 'Live',
                        'test' => 'Test',
                    ),
                ),
                'test_environment_heading' => array(
                    'title'       => 'Test environment',
                    'type'        => 'title',
                    'description' => 'This section is for configuring the Test environment.',
                    'desc_tip'    => true,
                ),
                'test_api_key' => array(
                    'title'       => 'Test API Key',
                    'type'        => 'text',
                    'description' => 'Enter your Test API Key here.',
                    'desc_tip'    => true,
                ),
                'test_merchant_account' => array(
                    'title'       => 'Test Merchant Account',
                    'type'        => 'text',
                    'description' => 'Enter your Test Merchant Account here.',
                    'desc_tip'    => true,
                ),
                'test_hmac_key' => array(
                    'title'       => 'Test HMAC Key',
                    'type'        => 'text',
                    'description' => 'Enter your Test HMAC Key.',
                    'desc_tip'    => true,
                ),
                'live_environment_heading' => array(
                    'title'       => 'Live environment',
                    'type'        => 'title',
                    'description' => 'This section is for configuring the Live environment.',
                    'desc_tip'    => true,
                ),
                'live_api_key' => array(
                    'title'       => 'Live API Key',
                    'type'        => 'text',
                    'description' => 'Enter your Live API Key here.',
                    'desc_tip'    => true,
                ),
                'live_merchant_account' => array(
                    'title'       => 'Live Merchant Account',
                    'type'        => 'text',
                    'description' => 'Enter your Live Merchant Account here.',
                    'desc_tip'    => true,
                ),
                'live_url_prefix' => array(
                    'title'       => 'Live URL Prefix',
                    'type'        => 'text',
                    'description' => 'Enter your Live URL Prefix here.',
                    'desc_tip'    => true,
                ),
                'live_hmac_key' => array(
                    'title'       => 'Live HMAC Key',
                    'type'        => 'text',
                    'description' => 'Enter your Live HMAC Key.',
                    'desc_tip'    => true,
                ),
            );
            
            }

            public function process_payment($order_id) {

                global $AdyenWoocommerceMerchantAccount;
                global $AdyenWoocommerceApiKey;
                global $AdyenWoocommerceApplicationName;
                global $AdyenWoocommerceApiEnvironment;
                global $AdyenWoocommerceClientKey;
                global $AdyenWoocommerceCurrentPageLink;
                global $AdyenWoocommercePostUrl;

                global $woocommerce;
                $order = wc_get_order($order_id);
                
                $returnUrl = $order->get_checkout_order_received_url();
                $total = $order->get_total(); // Get the raw total without formatting
                $total_amount = number_format($total, 2); // Format for display
                $rounded_value = round($total_amount * 100);
                $customer_id = $order->get_customer_id();
                $customer_email = $order->get_billing_email();
                $currency = get_woocommerce_currency();
                $country = $order->get_billing_country();

                $user = get_current_user_id();
                if (function_exists('get_field')) {
                    $account_reference = get_field('account_reference', 'user_'.$user );
                }else{
                    $account_reference = get_user_by( 'id', $user )->display_name;
                }

                $reference = 'CB--' . $account_reference . '--' . $order_id . '--' . date("Y-m-d") . '--' . date("h:i:s A");


                $params = array(
                    'amount' => array(
                        'currency' => $currency,
                        'value' => $rounded_value,
                    ),
                    'countryCode' => $country,
                    'merchantAccount' => $AdyenWoocommerceMerchantAccount,
                    'reference' => $reference,
                    'returnUrl' => $returnUrl,
                    "allowedPaymentMethods" => ["visa", "mc"]
                );

                return [
                    'result'              => 'success',
                    'order_number'        => $order_id,
                    'amount'              => (float) $order->get_total(),
                    'checkout_order_pay'  => $order->get_checkout_payment_url(),
                    'redirect'            => $this->get_return_url( $order ),
                    'create_payment_data' => $params,
                ];

            }


            public function payment_fields() {

                // if logged in
                if ( is_user_logged_in() ) {

                    wp_enqueue_script('adyen-js');
                    wp_enqueue_style('adyen-css');

                    echo '<div style="display: block; width:300px; height:auto;">';
                    echo '<div id="dropin-container"></div>';
                    echo '<div id="adyen-results"></div>';
                    echo '</div>';

                    wp_enqueue_script('adyen-custom');
                
                }else{
                    echo '<div style="display: block; width:300px; height:auto;">';
                    echo '<p>Please login</p>';
                    echo '</div>';
                }
                // if logged in ends here

                ?>
                <script type="text/javascript">
                    (function($){
                        $( document ).ready(function() {
                            let payment_method = $('form.checkout').find('input[name^="payment_method"]:checked').val();
                            if(payment_method == 'adyen'){
                                $('#place_order').attr('disabled', true);
                            }else{
                                $('#place_order').attr('disabled', false);
                            }
                        });
                    })(jQuery);
                </script>
                <?php

            }

        }

    }
    // if class exists ends here

    // Register the custom payment gateway class with WooCommerce
    $gateways[] = 'WC_Adyen_Gateway';
    return $gateways;

}


// on changing payment methods on checkout page
add_action( 'woocommerce_review_order_before_payment', 'refresh_payment_methods' );
function refresh_payment_methods(){
    ?>
    <script type="text/javascript">
        (function($){
            $( document ).ready(function() {
                $( 'form.checkout' ).on( 'change', 'input[name^="payment_method"]', function(event) {
                    let payment_method = $('form.checkout').find('input[name^="payment_method"]:checked').val();
                    if(payment_method == 'adyen'){
                        $('#place_order').attr('disabled', true);
                    }else{
                        $('#place_order').attr('disabled', false);
                    }
                });
            });
        })(jQuery);
    </script>
    <?php
}