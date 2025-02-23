<?php
   require 'includes/settings.php';
   require 'includes/konnektive.php';

   $konnektive = new Konnektive();
   $konnektive->click('checkoutPage');
   
   if(!isset($_GET['product'])){
    header('Location: selection.php');
   }

   switch($_GET['product']) {
      case '5sub':
         $product = '5sub';
         $qty = '5';
         $perPrice = '$63.99';
         $name = '5 Bottle Subscription';
         $subtotal = '$319.95';
         $savings = '180';
         $shipping = 'FREE';
         $total = '$319.95';
      break;
      case '3sub':
         $product = '3sub';
         $qty = '3';
         $perPrice = '$69.99';
         $name = '3 Bottle Subscription';
         $subtotal = '$209.97';
         $savings = '90';
         $shipping = 'FREE';
         $total = '$209.97';
      break;
      case '1sub':
         $product = '1sub';
         $qty = '1';
         $perPrice = '$74.99';
         $name = '1 Bottle Subscription';
         $subtotal = '$74.99';
         $savings = '25';
         $shipping = 'FREE';
         // $shipping = '$4.95';
         // $total = '49.94';
         $total = '$74.99';
      break;
      case '5reg':
         $product = '5reg';
         $qty = '5';
         $perPrice = '$64.79';
         $name = '5 Bottle';
         $subtotal = '$323.95';
         $savings = '176';
         $shipping = 'FREE';
         $total = '$323.95';
      break;
      case '3reg':
         $product = '3reg';
         $qty = '3';
         $perPrice = '$71.99';
         $name = '3 Bottle';
         $subtotal = '$215.97';
         $savings = '84';
         $shipping = 'FREE';
         $total = '$215.97';
      break;
      case '1reg':
         $product = '1reg';
         $qty = '1';
         $perPrice = '$79.99';
         $name = '1 Bottle';
         $subtotal = '$79.99';
         $savings = '20';
         $shipping = '$4.95';
         $total = '$84.94';

      break;
      default:
         $product = '5sub';
         $qty = '5';
         $perPrice = '$63.99';
         $name = '5 Bottle Subscription';
         $subtotal = '$319.95';
         $savings = '180';
         $shipping = 'FREE';
         $total = '$319.95';
      break;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>DNA Complex</title>
    <!-- Font Awsome Kit -->
    <script src="https://kit.fontawesome.com/6e565221c4.js" crossorigin="anonymous"></script>
    <!-- css  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/loading.css">

    <style>
      #country, #ship-country {
        color: #000;
      }
      .input_box input {
        text-transform: none;
      }
      
      .dna_complex_img h3 {
        text-align: left;
      }

      .product-type {
        font-size: 90%;
        font-weight: normal !important;
      }

      .payment_input_sec .select i,
      .payment_input_sec .icon_question img {
        position: absolute;
        width: 27px;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
        z-index: 99;
        font-weight: 900;
        color: #9e9e9e;
        font-size: 29px;
        cursor: pointer;
      }

      /*CSS FOR MODAL*/
      #app_common_modal,
      #error_handler_overlay {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        z-index: 2147483647;
        background: #333;
        background: rgba(255, 255, 255, .8);
        display: none;
        overflow-x: hidden;
        -webkit-overflow-scrolling: touch
      }

      #app_common_modal .app_modal_body,
      #error_handler_overlay .error_handler_body {
        max-width: 600px;
        -webkit-background-clip: padding-box;
        font-family: Verdana, Geneva, sans-serif;
        box-sizing: border-box;
        outline: 0
      }

      #error_handler_overlay .error_handler_body {
        margin: 100px auto;
        width: 95%;
        padding: 20px;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box
      }

      #app_common_modal_close,
      #error_handler_overlay_close {
        position: absolute;
        right: -10px;
        top: -10px;
        color: #FFF;
        background-color: #333;
        border: 2px solid #FFF;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        font-weight: 700;
        line-height: 26px;
        padding: 0;
        margin: 0
      }

      #app_common_modal .app_modal_body {
        margin: 100px auto;
        min-width: inherit;
        width: 95%;
        min-height: 400px;
        padding: 2.5%;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box
      }

      #app_common_modal .app_modal_body iframe {
        min-height: 400px;
        width: 100%;
        border: 1px solid #d5d6ef
      }

      .exitpop-content {
        position: fixed;
        height: 400px;
        width: 708px;
        margin: -200px 0 0 -354px;
        top: 50%;
        left: 50%;
        text-align: left;
        padding: 0;
        border: none;
        z-index: 2147483647
      }

      .exitpopup-overlay {
        background: rgba(0, 0, 0, .6);
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 2147483647;
        display: none
      }

      .exitpop-content img {
        display: block;
        margin: 0 auto;
        position: relative;
        text-align: center;
        max-width: 100%;
        height: auto
      }

      .exitpop-discountbar {
        background-color: red;
        border-bottom: 4px dashed #fff;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        font-weight: 700;
        height: 50px;
        line-height: 50px;
        position: fixed;
        text-align: center;
        top: 0;
        width: 100%;
        z-index: 9999;
        display: none
      }

      .app-load-spinner {
        display: none;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100px;
        height: 100px;
        margin: auto;
        background-color: #333;
        border-radius: 100%
      }

      #loading-indicator::after,
      #loading-indicator::before {
        box-sizing: border-box;
        left: 50%;
        position: absolute;
        top: 50%
      }

      .all-card-types li {
        float: left;
        margin-right: 20px
      }

      #loading-indicator {
        background-color: rgba(0, 0, 0, .5);
        bottom: 0;
        box-sizing: border-box;
        font-size: 1px;
        height: 100%;
        left: 0;
        margin: 0 !important;
        padding: 0 !important;
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 2147483646
      }

      #loading-indicator::before {
        background: url(../images/loading.gif) center center no-repeat rgba(0, 0, 0, 0);
        content: "";
        height: 70px;
        margin-left: -35px;
        margin-top: -70px;
        width: 70px;
        z-index: 2
      }

      #loading-indicator::after {
        background: #fff;
        border-radius: 5px;
        color: #000;
        content: "Processing, one moment please... ";
        font-family: arial;
        font-size: 17px;
        height: 110px;
        line-height: 98px;
        margin-left: -150px;
        margin-top: -75px;
        padding-top: 35px;
        text-align: center;
        width: 300px;
        z-index: 1
      }

      #popImg {
        cursor: pointer;
      }

      @-webkit-keyframes scaleout {
        0% {
          -webkit-transform: scale(0)
        }

        100% {
          -webkit-transform: scale(1);
          opacity: 0
        }
      }

      @keyframes scaleout {
        0% {
          transform: scale(0);
          -webkit-transform: scale(0)
        }

        100% {
          transform: scale(1);
          -webkit-transform: scale(1);
          opacity: 0
        }
      }

      @media screen and (max-device-width:767px) and (orientation:landscape) {

        #app_common_modal .app_modal_body,
        #error_handler_overlay .error_handler_body {
          margin: 20px auto;
        }

        #app_common_modal .app_modal_body iframe {
          min-height: 360px;
        }
      }

      @media(max-device-width:767px) {
        #app_common_modal .app_modal_body {
          margin: 2% auto
        }
      }

      .payment_input_sec .select i, .payment_input_sec .icon_question img {
        pointer-events: auto!important;
      }
	  @media (max-width: 767px) {
		  .d-flex.align-items-center.justify-content-between.border-b {
			  width: 100%;
		  }
	  }
    </style>
</head>

<body>
    <script type="text/javascript" src="https://www.sl99trk.com/scripts/sdk/everflow.js"></script>
    <script type="text/javascript">
      EF.click({
        offer_id: EF.urlParameter('oid'),
        affiliate_id: EF.urlParameter('sid'),
        sub1: EF.urlParameter('sub1'),
        sub2: EF.urlParameter('sub2'),
        sub3: EF.urlParameter('sub3'),
        sub4: EF.urlParameter('sub4'),
        sub5: EF.urlParameter('sub5'),
        uid: EF.urlParameter('uid'),
        source_id: EF.urlParameter('source_id'),
        transaction_id: EF.urlParameter('_ef_transaction_id'),
      });
    </script>
    <!-- navbar start  -->
    <header class="navWrap">
        <div class="container">
            <div class="navInner">
                <div class="mainLogo">
                    <img src="./assets/img/DNA_Logo.png" alt="" />
                </div>
                <ul class="contactInfo">
                    <li>
                        <img src="./assets/img/phone-call.svg" alt="" />
                        <h2>800-625-4211</h2>
                    </li>
                    <li>
                        <img src="./assets/img/clock-img.svg" alt="" />
                        <h2>9am-9pm EST Mon-Sun</h2>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- navbar end -->
    <!-- checkout section start  -->
    <section class="checkoutWrap">
        <div class="container">
            <div class="row customGap">
                <div class="col-lg-6">
                    <div class="GuarantyWrap flex_align d-lg-none">
                        <div>
                            <h2 class="fw600">🔒 100% Money Back Guarantee</h2>
                        </div>
                        <p>
                            If you’re not satisfied, we’ll happily refund your purchase
                            <span> (less any fees). </span>
                        </p>
                    </div>
                    <div class="orderSummaryAccordin d-lg-none">
                        <div class="accordion" id="accordionOrdersummary">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <p class="showOrderSummary">Show Order Summary</p>
                                        <p class="hideOrderSummary">Hide Order Summary</p>
                                        <p class="fw600"><?= $total ?></p>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionOrdersummary">
                                    <div class="accordion-body">
                                        <ul class="quantityWrap d-lg-none">
                                            <li>
                                                <div>
                                                    <div class="bottlesImg">
                                                        <span class="bottlesTag">1</span>
                                                        <img src="./assets/img/bottle1.png" alt="" />
                                                    </div>
                                                    <div>
                                                        <h2 class="fw700 mb-2">DNA Complex</h2>
                                                        <p>1 bottle</p>
                                                    </div>
                                                </div>
                                                <h2 class="fw600"><?= $subtotal ?></h2>
                                            </li>
                                            <li class="flex-column gap-2 align-items-start">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <h2 class="fw500">Subtotal</h2>
                                                    <p class="subtotal"><?= $subtotal ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <h2 class="fw500">Shipping</h2>
                                                    <p class="shipping"><?= $shipping ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="fw500">Total</h2>
                                                <div class="totalAmount">
                                                    <h3>USD</h3>
                                                    <h2><?= $total ?></h2>
                                                </div>
                                            </li>
                                            <li>
                                                <p class="payment_type">
                                                    This is a one-time payment
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="checoutTimer flex_align">
                        <!-- <h4>Your Order is Reserved For The Next:</h4>
                        <img src="./assets/img/clock-pink.svg" alt="">
                        <h3 id="desk-stopwatch">00:00</h3> -->
                        <p>180,000+ Wrinkles Gone, Say Goodbye to Yours </p>
                    </div>
                    <div class="checkoutLeft">
                        <h1 class="fs36">Shipping Information</h1>
                        <h2 class="fw500 mt-2">Where do we send your DNA Complex</h2>
                        <form action="post" id="orderForm" class="formInner">
                            <input type="hidden" name="method" id="method" value="order">
                            <input type="hidden" name="product" id="product" value="<?= $product ?>">
                            <input type="hidden" id="bump1" name="bump[order1][purchase]" value="NO" />
                            <input type="hidden" id="bonus_product1" name="bump[order1][product]" value="priority" />

                            <input type="hidden" name="_token" value="<?= $csrf_token ?>">
                            <input type="hidden" name="billShipSame" value="1">

                            <div class="form_group labelHide w50">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="First name" name="firstName" required />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" name="lastName" required />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="emailAddress" required />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">Phone</label>
                                <input type="tel" class="form-control" placeholder="Phone" id="phone" name="phoneNumber" required />
                            </div>
                            <div class="form_group labelHide w-100">
                                <label for="">Address</label>
                                <input type="text" class="form-control" placeholder="Address" id="address" name="address1" required />
                            </div>
                            <div class="form_group labelHide w-100">
                                <label for="">Apartment, suite, etc. (optional)</label>
                                <input type="text" class="form-control" placeholder="Apartment, suite, etc. (optional)
                                " name="address2" />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control" placeholder="Zip code" id="zip" name="postalCode" maxlength="5" required />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">City</label>
                                <input type="text" class="form-control" placeholder="City" id="city" name="city" required />
                            </div>
                            <div class="form_group labelHide w50">
                                <label for="">State</label>
                                <select class="form-select" aria-label="Default select example" id="state" name="state" required>
                                    <option value="" selected>Select State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                           
                            <div class="form_group labelHide w50">
                                <label for="">country</label>
                                <select id="country" class="form-select" name="country" required autocomplete="off">
                                    <option value="US" selected>USA</option>
                                </select>
                            </div>
                        <!-- </form> -->
                        <div class="checkBox">
                            <input type="checkbox" name="priority" id="priority_shipping" />
                            <p>
                                <b class="mb-1 d-block">Want to get it even FASTER?</b>
                                Add on Priority Shipping to ensure speedy processing and handling of this order for the low cost of $14.95
                            </p>
                        </div>
                        <div class="paymentInfo" style="width: 100%;">
                            <h1 class="fs36 mb-1">Payment Information</h1>
                            <h2 class="fw500">Final step to complete your purchase</h2>
                            <div class="paymentForm">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="payment_according">
                                            <h1 class="accordion-header fs36" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <input type="radio" id="credit-card" name="payment-methods"
                                                        value="creditCard" checked />
                                                    <label for="credit-card" class="ps-2">Credit Card</label>
                                                    <!-- <img src="./assets/img/payment.png" alt="payment"
                                                        class="payment-card"> -->
                                                    <ul class="payment-card flex_align">
                                                        <li>
                                                            <img src="./assets/img/visaIcon.png" alt="" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/masterCard.png" alt="" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/discoverIcon.png" alt="" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/americanExpress.png" alt="" />
                                                        </li>
                                                    </ul>
                                                </button>
                                            </h1>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body formInner payment_form_box" id="cc-form-box">
                                                <div class="form_group w-100">
                                                    <label for="">Card Number</label>
                                                    <input type="tel" id="card" class="form-control"
                                                        placeholder="1234 1234 1234 1234" maxlength="16" minlength="15" name="cardNumber" required autocomplete="off" />
                                                </div>
                                                <div class="form_group w50">
                                                    <label for="">Valid Through</label>
                                                    <input type="text" class="form-control" id="cardExpiration" minlength="0" maxlength="5" placeholder="MM/YY" />
                                                    <input id="cardMonth" type="hidden" name="cardMonth">
                                                    <input id="cardYear" type="hidden" name="cardYear">
                                                </div>
                                                <div class="form_group w50">
                                                    <label for="">CVV</label>
                                                    <input type="tel" class="form-control" placeholder="CVV" maxlength="4" minlength="3" name="cardSecurityCode" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h1 class="accordion-header fs36" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <input type="radio" id="paypal" name="payment-methods" value="paypal" class="inactive" autocomplete="off" />
                                                <label for="paypal">
                                                    <img src="./assets/img/paypal.png" alt="paypal"
                                                        class="paypal-img" />
                                                </label>
                                            </button>
                                        </h1>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="text-center accordion-body payment_form_box">
                                                <img src="assets/img/paypal-box.svg" alt="" class="paypalBox" />
                                                <h2 class="fw500 text-center">
                                                    After clicking "Complete Checkout", You Will be
                                                    redirected to PayPal to Complete your purchase
                                                    securely
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="checkoutBtn flex_align" type="submit">Place Your Secure Order <span
                                    class="chevronRight"></span></button>
                            </form>
                            <div class="securityIcons text-center">
                                <img src="assets/img/security.png" alt="" />
                            </div>
                            <!-- <div class="checkBox__ flex_align">
                                <input type="checkbox" />
                                <p>
                                    As a special gift you will be enrolled in the monthly
                                    Cosmetic Digital Magazine for the discounted rate only
                                    $19.93, save 35%
                                </p>
                            </div> -->
                            <a href="" class="flex_align securePayment"><svg xmlns="http://www.w3.org/2000/svg"
                                height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                            </svg>Secure Payment</a>
                        </div>
                        <footer class="checkoutFooter d-lg-block d-none">
                            <!-- <ul>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul> -->
                            <ul>
                                <li><a class="footerLinks font-regular" id="privacy" data-bs-toggle="modal" data-bs-target="#modal" href= "#0">Privacy Policy</a></li>
                                <li>-</li>
                                <li><a class="footerLinks font-regular" id="terms" data-bs-toggle="modal" data-bs-target="#modal" href="#0">Terms & Conditions</a></li>
                            </ul>
                            <!-- <p>
                                © 2023 Seratopical Revolution Intl., LLC. All rights reserved.
                            </p> -->
                        </footer>
                    </div>
                </div>
                <div class="col-lg-6 orderSummaryBg">
                    <div class="checkoutRight">
                        <ul class="quantityWrap d-lg-block d-none">
                            <li>
                                <div>
                                    <div class="bottlesImg">
                                        <span class="bottlesTag">1</span>
                                        <img src="./assets/img/bottle1.png" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="fw700 mb-2">DNA Complex</h2>
                                        <p>1 bottle</p>
                                    </div>
                                </div>
                                <h2 class="fw700"><?= $subtotal ?></h2>
                            </li>
                            <li class="flex-column gap-2 align-items-start">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <h2 class="fw500">Subtotal</h2>
                                    <p class="subtotal"><?= $subtotal ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <h2 class="fw500">Shipping</h2>
                                    <p class="shipping"><?= $shipping ?></p>
                                </div>
                            </li>
                            <li>
                                <h2 class="fw500">Total</h2>
                                <div class="totalAmount">
                                    <h3>USD</h3>
                                    <h2><?= $total ?></h2>
                                </div>
                            </li>
                            <li>
                                <p>
                                  <!--  Ships in 7 to 10 days <br /> -->
                                    <span class="payment_type">This is a one-time payment</span>
                                </p>
                            </li>
                        </ul>
                        <div class="GuarantyWrap flex_align d-lg-flex d-none">
                            <div>
                                <h1 class="fs36">100%</h1>
                                <h2>Guaranteed</h2>
                            </div>
                            <p>
                                If you’re not satisfied, we’ll happily refund your purchase
                                <span> (less any fees). </span>
                            </p>
                        </div>
                        <!-- <div class="whyDNA">
                            <h1 class="fs36">Why Choose DNA Complex</h1>
                            <ul class="ingredientsWrap">
                                <li class="ingredients-detail">
                                    <img src="./assets/img/money.png" alt="" />
                                    <div>
                                        <h1 class="fs32">
                                            The Seratopical 60 Day Money Back Guarantee
                                        </h1>
                                        <h2>
                                            We offer a simple 60 day, no-questions-asked-guarantee
                                            (less S&P). If you decide DNA Complex isn’t for you,
                                            just contact our customer support team by phone or email
                                            & drop the product in the mail back to us and we will
                                            process a full refund (less S&P) with ZERO headaches or
                                            hassles.
                                        </h2>
                                    </div>
                                </li>
                                <li class="ingredients-detail">
                                    <img src="./assets/img/lock .png" alt="" />
                                    <div>
                                        <h1 class="fs32">Shop With Confidence</h1>
                                        <h2>
                                            Safe & Secure Guaranteed! You'll pay nothing if
                                            unauthorized charges are made to your credit card as a
                                            result of shopping!
                                        </h2>
                                    </div>
                                </li>
                                <li class="ingredients-detail">
                                    <img src="./assets/img/private.png" alt="" />
                                    <div>
                                        <h1 class="fs32">Your Privacy Is Important</h1>
                                        <h2>
                                            All information is encrypted and transmitted without
                                            risk using a Secure Socket Layer (SSL) protocol.
                                        </h2>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                      <!--  <div class="whyDNA">
                            <h1 class="fs36">Customer reviews</h1>
                            <ul class="testimonialsInner">
                                <li>
                                    <div class="customerImg flex_align d-md-flex d-none">S</div>
                                    <div>
                                        <h1 class="fs32">Seeing Some Results</h1>
                                        <div>
                                            <ul class="starsWrap d-md-flex d-none">
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <h2 class="text-yellow">Verified Purchase</h2>
                                                </li>
                                            </ul>
                                            <h2 class="fw500 mb15">
                                                So easy to apply and does not interfere with my other
                                                skin care routine. I've only used this for a short
                                                time but I am excited to see the long term results.
                                                Does not feel oily, stick or heavy and does not
                                                irritate my sensitive skin. I have not had to add or
                                                reduce my current products to use this one and so far
                                                I have not noticed any breakouts or other pesky things
                                                when you add a new product to your skin care regimen.
                                            </h2>
                                            <h2>
                                                <div>
                                                    <div class="customerImg flex_align d-md-none">
                                                        S
                                                    </div>
                                                    Shannon C.
                                                </div>
                                                <img src="./assets/img/starsRowGreen.svg" alt="" class="d-md-none" />
                                            </h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="customerImg flex_align d-md-flex d-none">A</div>
                                    <div>
                                        <h1 class="fs32">HEALING</h1>
                                        <div>
                                            <ul class="starsWrap d-md-flex d-none">
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <a href="#0"><img src="./assets/img/star.svg" alt="star" /></a>
                                                </li>
                                                <li>
                                                    <h2 class="text-yellow">Verified Purchase</h2>
                                                </li>
                                            </ul>
                                            <h2 class="fw500 mb15">
                                                My M.D. diagnosed a seborrheic keratosis on my nose
                                                last Thursday. I used this to heal it within two days.
                                                Yesterday, a week later, he was amazed and pleased
                                                that it was gone ! Thank you.
                                            </h2>
                                            <h2>
                                                <div>
                                                    <div class="customerImg flex_align d-md-none">
                                                        A
                                                    </div>
                                                    Anne S.
                                                </div>
                                                <img src="./assets/img/starsRowGreen.svg" alt="" class="d-md-none" />
                                            </h2>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <footer class="checkoutFooter d-lg-none">
                            <ul>
                                <li><a class="footerLinks" id="privacy" data-bs-toggle="modal" data-bs-target="#modal"
                                    href="#0">Privacy Policy</a></li>
                                <li>-</li>
                                <li><a class="footerLinks" id="terms" data-bs-toggle="modal" data-bs-target="#modal"
                                    href="#0">Terms & Conditions</a></li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> ... </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
            <section id="loading-indicator-new" class="popup-loading-wrapper" style="display: none">
            <div class="popup">
              <img src="https://app.cloudcheap.io/file/2c/icon-lock_zudnet.png" alt="" class="lock-image" />
              <p>Please wait a moment</p>
              <h3 id="checkStatus">Your Order is Now Being Processed</h3>
              <img src="https://app.cloudcheap.io/file/2a/animated-gif.gif" alt="" class="loading-image" />
            </div>
          </section>
        </div>
    </section>
    <!-- checkout section end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://fast.wistia.com/embed/medias/nxlagcfnzz.jsonp" async></script>
    <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="assets/js/main.js?ver=1"></script>
    <script src="js/footerLinks.js"></script> 

    <script>
        $(document).ready(function() {
            if($('#zip').val().length == 5) {
                let zip = $('#zip').val();
                var settings = {
                    "url": `https://secure.shippingapis.com/ShippingAPI.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID=\"02THESE82I817\"><ZipCode ID=\"0\"><Zip5>${zip}</Zip5></ZipCode></CityStateLookupRequest>`,
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function (response) {
                        if($(response).find("City")[0] === undefined 
                            || $(response).find("State")[0] === undefined) {
                                alert('Not a valid zipcode');
                                $('#city').val('');
                                $('#state').val('');
                                $('#zip').val('');
                                $('#zip').focus();
                        } else {
                            $('#city').val($(response).find("City")[0].innerHTML);
                            $('#state').val($(response).find("State")[0].innerHTML);
                        }
                });
            }
        });

        $(document).on('click', '#card', function() {

            if(!window.sessionStorage.partial) {
            if(
                $('input[name="firstName"]').val().length > 0 && 
                $('input[name="lastName"]').val().length > 0 && 
                $('input[name="emailAddress"]').val().length > 0
            ){
                let token = $('input[name="_token"]').val();
                $.ajax({
                    type: 'POST',
                    url: 'includes/submit_order.php',
                    dataType: "json",
                    data: { 
                        _token: token,
                        method: 'partial', 
                        firstName: $('input[name="firstName"]').val(), 
                        lastName: $('input[name="lastName"]').val(), 
                        emailAddress: $('input[name="emailAddress"]').val(), 
                        phoneNumber: $('input[name="phoneNumber"]').val(), 
                        address1: $('input[name="address1"]').val(), 
                        address2: $('input[name="address2"]').val(), 
                        city: $('input[name="city"]').val(), 
                        postalCode: $('input[name="postalCode"]').val(), 
                        state: $('select[name="state"]').find(":selected").val(), 
                        country: 'US', 
                        product: $('input[name="product"]').val()
                    }
                })
                .always(function(response) {
                    window.sessionStorage.partial = true;
                });
            }
            }

        })

        $('#zip').on('keyup', function() {
            if($(this).val().length == 5) {
                let zip = $('#zip').val();
                var settings = {
                    "url": `https://secure.shippingapis.com/ShippingAPI.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID=\"02THESE82I817\"><ZipCode ID=\"0\"><Zip5>${zip}</Zip5></ZipCode></CityStateLookupRequest>`,
                    "method": "GET",
                    "timeout": 0,
                };

                     $.ajax(settings).done(function (response) {
                        if($(response).find("City")[0] === undefined 
                            || $(response).find("State")[0] === undefined) {
                                alert('Not a valid zipcode');
                                $('#city').val('');
                                $('#state').val('');
                                $('#zip').val('');
                                $('#zip').focus();
                        } else {
                            $('#city').val($(response).find("City")[0].innerHTML);
                            $('#state').val($(response).find("State")[0].innerHTML);
                        }
                });
            }
        });

        $(document).ready(function(){
            $('#phone').mask('(000) 000-0000');
        });

        $('#card').mask('0000 0000 0000 0000');
        $('#cardExpiration').mask('00/00');

        // let cardExp = document.querySelector('#cardExpiration');

        // cardExp.addEventListener('keyup', function(e) {
        //     let len = cardExp.value.length;

        //     if(len == 2 && e.key !== 'Backspace') {
        //         e.stopPropagation();
                
        //         cardExp.value = cardExp.value + '/';
        //     }
        //     if(len == 2 && e.key == 'Backspace') {
        //         e.stopPropagation();
        //         let cardExpr = cardExp.value.split('');
        //         cardExpr.pop();

        //         cardExp.value = cardExpr.join('');
        //     }
    
        // })

        $('.bottlesTag').text(<?= $qty ?>);

        let bottle_txt;
        let payment_txt;
        let product = '<?= $product ?>';
        if(<?= $qty ?> == '5') {
            bottle_txt = 'bottles';
            if(product.includes('sub')) {
                payment_txt = 'This bills every 150 days - cancel anytime.';
            }
            $('.bottlesImg img').attr('src', './assets/img/bottle2.png')
        } else if(<?= $qty ?> == '3') {
            bottle_txt = 'bottles';
            if(product.includes('sub')) {
                payment_txt = 'This bills every 90 days - cancel anytime.';
            }
            $('.bottlesImg img').attr('src', './assets/img/bottle3.png')
        } else if (<?= $qty ?> == '1') {
            bottle_txt = 'bottle';
            if(product.includes('sub')) {
                payment_txt = 'This bills every 30 days - cancel anytime.';
            }
        }

        $('.quantityWrap div div p').text(<?= $qty ?> + ' ' + bottle_txt);
        $('.payment_type').text(payment_txt);

        $('.accordion-button').click(function() {
            if($(this).children('input').val() == 'paypal') {
                $('input#method').val('paypal');
                $('#cc-form-box').html('');
            } else {
                $('#method').val('order');
                $('#cc-form-box').html(`
                    <div class="form_group w-100">
                        <label for="">Card Number</label>
                        <input type="tel" id="card" class="form-control"
                            placeholder="1234 1234 1234 1234" maxlength="16" minlength="15" name="cardNumber" required autocomplete="off" />
                    </div>
                    <div class="form_group w50">
                        <label for="">Valid Through</label>
                        <input type="text" class="form-control" id="cardExpiration" minlength="0" maxlength="5" placeholder="MM/YY" />
                        <input id="cardMonth" type="hidden" name="cardMonth">
                        <input id="cardYear" type="hidden" name="cardYear">
                    </div>
                    <div class="form_group w50">
                        <label for="">CVV</label>
                        <input type="tel" class="form-control" placeholder="CVV" maxlength="4" minlength="3" name="cardSecurityCode" required />
                    </div>
                `);
                $('#card').mask('0000 0000 0000 0000');
                $('#cardExpiration').mask('00/00');
            }
        })

        function submitOrder() {
            let expiration = $('#cardExpiration').val();
            expiration = expiration.split('/');

            console.log(expiration);

            $('#cardMonth').val(expiration[0]);
            $('#cardYear').val(expiration[1]);

            // expiration.forEach((elem, i) => {
            //     if(i == 0 && elem >= 1 && elem < 13) {
            //         $('#cardMonth').val(elem);
            //     } 
            //     if(i == 1 && elem > 23) {
            //         $('#cardYear').val(elem);
            //     }
            // });

            if($('#cardMonth').val() == '' || $('#cardYear').val() == '') {
                alert('Invalid Card Expiration');
                return;
            }

            $('#checkStatus').text('Your Order is Now Being Processed');

            $('#loading-indicator-new').css('display', 'block');
            $('#submit_btn').attr('disabled', 'disabled');

            $.ajax({
               type: 'POST',
               url: 'includes/submit_order.php',
               dataType: "json",
               data: $('#orderForm').serialize()
            })
            .done(function() {
               console.log("success");
               window.location.href = 'upsell1.php';
            })
            .fail(function(response) {
               let data = response.responseJSON;
               let error = '';
               switch (response.status) {
                  case 418:
                    error = response.responseText;
                  break;
                  case 400:
                    error = response.responseText;
                  break;
                  case 422:
                    $.each(data, function(key, value) {
                        console.log(value);
                        error += value + '\n';
                    });
                  break;
               }
               $('#cardMonth').val('');
               $('#cardYear').val('');
               $('#loading-indicator-new').css('display', 'none');
               $('#submit_btn').removeAttr('disabled');
               alert(error);
            });
         }

         function paypal() {
            console.log('got it - paypal baby')
            $('#loading-indicator-new').css('display', 'block');
            $('#submit_btn').attr('disabled', 'disabled');

            $('#checkStatus').text('Redirecting...');

            $.ajax({
               type: 'POST',
               url: 'includes/submit_order.php',
               dataType: "json",
               data: $('#orderForm').serialize()
            })
            .done(function(response) {
               console.log("success");
               window.location.href = response;
            })
            .fail(function(response) {
               let data = response.responseJSON;
               let error = '';
               switch (response.status) {
                  case 418:
                     error = response.responseText;
                  break;
                  case 400:
                     error = response.responseText;
                  break;
                  case 422:
                     $.each(data, function(key, value) {
                        console.log(value);
                        error += value + '\n';
                     });
                  break;
               }
               alert(error);
               $('#loading-indicator-new').css('display', 'none');
               $('#submit_btn').removeAttr('disabled');
            });
        }

         
        $('#priority_shipping').on('change', function() {
            if($(this).is(':checked')) {
            $('#bump1').val('YES');
            } else {
            $('#bump1').val('NO');
            }
        })

        $('#orderForm').on('submit', function(e) {
          e.preventDefault();
          if($('#method').val() == 'order') {
            submitOrder();
          } else {
            paypal();
          }
      });
    </script>

    <script type="text/javascript">
      window._mfq = window._mfq || [];
      (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript";
        mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/11160a34-0fd5-45ff-8d3d-029432d6a8b6.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script>
</body>

</html>