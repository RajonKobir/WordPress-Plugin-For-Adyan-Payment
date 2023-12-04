(function($){
document.addEventListener("DOMContentLoaded", function () {

  const configuration = {
    environment: woocommerce_order.ApiEnvironment, // Change to 'live' for the live environment.
    clientKey: woocommerce_order.clientKey, // Your Adyen client key
    analytics: {
      enabled: true // Set to false to not send analytics data to Adyen.
    },
    session: {
      id: woocommerce_order.session_id, // Unique identifier for the payment session.
      sessionData: woocommerce_order.sessionData
    },
    onPaymentCompleted: (result, component) => {
      console.info(result, component);
    },
    onError: (error) => {
        if(error){
          // document.getElementById("adyen-results").innerHTML = error.name + ', ' + error.message + ', ' +  error.stack + ', ' +  component;
          document.getElementById("adyen-results").innerHTML = error.error;
        }
    },
    paymentMethodsConfiguration: {
      card: {
        hasHolderName: true,
        holderNameRequired: true,
        billingAddressRequired: false,
      },
    },
  };

  // Create an instance of AdyenCheckout and mount the Drop-in component
  const checkout = new AdyenCheckout(configuration);

  // console.log("checkout", checkout);

  // Create a configuration object for Drop-in specific settings
  const dropinConfig = {
    // showPayButton: false,
    onReady: () => {
      console.log("Drop-in is ready");
    },
    onSelect: (activeComponent) => {
      // console.log(activeComponent);
    },

    onSubmit: async (state, component) => {
      try {
        if (state.isValid) {
          const paymentData = {
            amount: {
              currency: woocommerce_order.currency,
              value: woocommerce_order.rounded_value,
            },
            reference: woocommerce_order.reference,
            // returnUrl: woocommerce_order.redirect_url,
            paymentMethod: "card",
            // Include other necessary payment data
          };

          // console.log(state.data);
          // console.log(state.data.paymentMethod);

          var paymentMethod = JSON.stringify(state.data.paymentMethod);

          $.ajax({
            type: "POST",
            url: woocommerce_order.postUrl,
            data: {paymentMethod}, 
            success: function(result){
              if(result){
                if(result.toString() == "Authorised"){
                  document.getElementById("dropin-container").innerHTML = "";
                  document.getElementById("adyen-results").innerHTML = result;
                  // click the Place Order button
                  let place_order_button = document.getElementById("place_order");
                  place_order_button.disabled = false;
                  place_order_button.click();
                }else{
                  document.getElementById("adyen-results").innerHTML = "Error processing payment: " + result;
                }
              }else{
                document.getElementById("adyen-results").innerHTML = "Something went wrong...";
              }
            }

          });

        } else {
          document.getElementById("adyen-results").innerHTML = "Invalid payment state";
        }
      } catch (error) {
        document.getElementById("adyen-results").innerHTML = "Error processing payment: " + error;
      }
    },

    paymentMethods: [
      {
        name: "Credit Card",
        type: "card",
        brands: ["visa", "mc"],
      },
    ],
  };

  // Mount the Drop-in component with the Drop-in configuration


    const myTimeout = setTimeout(function(){

      const dropin = checkout
      .create("dropin", dropinConfig)
      .mount("#dropin-container");

    }, 3000);

    // window.addEventListener("load", function () {
    //   const dropin = checkout
    //     .create("dropin", dropinConfig)
    //     .mount("#dropin-container");
    // });


});
})(jQuery);