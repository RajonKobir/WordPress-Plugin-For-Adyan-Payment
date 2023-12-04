<?php

// if posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // if posted certain values
    if( isset($_POST["paymentMethod"]) ){

        // assigning
        $paymentMethod = json_decode($_POST["paymentMethod"]);

        // assigning
        $AdyenWoocommerceMerchantAccount = 'HealthxchangePharmacy_CleverBeauty_TEST';
        $AdyenWoocommerceApiKey = 'AQE3hmfxLonHaRVEw0m/n3Q5qf3VYI5MAYdCQGZex3asm1ZDn9V7EcV4lCzxTxBjdtTJnDSma9VJURDBXVsNvuR83LVYjEgiTGAH-nBUwjZckH9irl2dI7NdoVtFO228FHIDiQMVHpbR10ig=-4.s}gqhZyN5>XyTp';
        $AdyenWoocommerceApplicationName = 'Clever Beauty Adyen';
        $ApiEnvironment = 'test';
        $AdyenWoocommerceClientKey = 'test_WRAX5X23YRBIREPD7XHQIKAKS425NROU';
        $AdyenWoocommerceCurrentPageLink = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // loading the web SDK
        require_once  'vendor/autoload.php';

        $client = new \Adyen\Client();
        $client->setApplicationName($AdyenWoocommerceApplicationName);
        
        if($ApiEnvironment == "live"){
            $client->setEnvironment(\Adyen\Environment::LIVE);
        }else{
            $client->setEnvironment(\Adyen\Environment::TEST);
        }
        
        $client->setXApiKey($AdyenWoocommerceApiKey);
        $service = new \Adyen\Service\Checkout($client);

        // to get the options values
        require_once '../../../wp-config.php';

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

        $params = array(
            "paymentMethod" => array(
                "type" => $paymentMethod->type,
                "encryptedCardNumber" => $paymentMethod->encryptedCardNumber,
                "encryptedExpiryMonth" => $paymentMethod->encryptedExpiryMonth,
                "encryptedExpiryYear" => $paymentMethod->encryptedExpiryYear,
                "encryptedSecurityCode" => $paymentMethod->encryptedSecurityCode
            ),
            'amount' => array(
                'currency' => $currency,
                'value' => $rounded_value,
            ),
            'countryCode' => get_user_geo_country_code(),
            'merchantAccount' => $AdyenWoocommerceMerchantAccount,
            'reference' => $reference,
            'returnUrl' => $AdyenWoocommerceCurrentPageLink,
            "allowedPaymentMethods" => ["visa", "mc"]
        );


        try {
            $result = $service->payments($params);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }finally{
            if(isset($result['resultCode'])){
                echo $result['resultCode'];
            }else{
                echo 'error';
            }
        }

        


    }  // if posted certain values ends

}   // if posted ends

?>