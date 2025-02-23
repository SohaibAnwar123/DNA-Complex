var threeDsForm = $('[data-uitype="upsell_form"]');
var konnektive = {}

var count = 0;
var initial_sdk;
var rebill_sdk;
var apiKey = PAYMENT_3DS_API_KEY;

var options = {
    //endpoint:"https://api-sandbox.3dsintegrator.com/v2",
    verbose:false,
    showChallenge:false,
    protocolVersion:"2.1.0",
    autoSubmit:false,
    forcedTimeout: 6,
    prompt: function () {
        setTimeout(
            function () {
                threeDsForm.submit();
            }, 1500
        )

    },
    resolve: function () {
        setTimeout(
            function () {
                threeDsForm.submit();
            }, 1500
        )
    },
    reject: function () {
        setTimeout(
            function () {
                threeDsForm.submit();
            }, 1500
        )
    }
}

initial_sdk = new ThreeDS("upsellform",apiKey,null,options);
rebill_sdk = new ThreeDS("upsellform",apiKey,null,options);

var submitButtonClick = function() {

    var initial_amount = UPSELL_PRICE_3DS;
    var rebill_amount = UPSELL_PRICE_3DS;
    var failed = false;

    //initial callback functions
    var authentication_completed_initial = function (response) {
        console.log("initial success!")
        console.log(response)
        konnektive.dsTransId = response.dsTransId
        konnektive.authenticationValue = response.authenticationValue
        konnektive.eci = response.eci
        initial_and_rebill_complete()
    }
    var authentication_failed_initial = function (response) {
        console.log("initial failure!")
        console.log(response);

        if (!failed) {
            threeDsForm.submit();
        }
        failed = true;
    }


    //rebill callback functions
    var authentication_completed_rebill = function (response) {
        console.log("rebill success!")
        console.log(response)
        konnektive.rebill_dsTransId = response.dsTransId
        konnektive.rebill_authenticationValue = response.authenticationValue
        konnektive.rebill_eci = response.eci
        initial_and_rebill_complete()
    }
    var authentication_failed_rebill = function (response) {
        console.log("rebill failure!")
        console.log(response);

        if (!failed) {
            threeDsForm.submit();
        }
        failed = true;
    }

    console.log("Starting submit")

    // authenticates using the verify method through initial_sdk instance
    initial_sdk.verify(authentication_completed_initial, authentication_failed_initial, {
        amount: parseFloat(initial_amount)
    });

    //authenticates using the verify method through rebill_sdk instance
    rebill_sdk.verify(authentication_completed_rebill,authentication_failed_rebill, {
        amount: parseFloat(rebill_amount)
    });

    // info in resolve and reject functions  https://docs.3dsintegrator.com/docs/verify-method#3-creating-the-event
};

//this function waits for both callbacks to complete before being satisfied
function initial_and_rebill_complete() {
    count++
    //this function only displays once both callbacks have returned
    if (count === 2) {
        console.log("hit 2 times");
        var myJSON = JSON.stringify(konnektive);
        $("[name=verification_data]").val(myJSON);
        console.log(myJSON);
        threeDsForm.submit();
    }
}