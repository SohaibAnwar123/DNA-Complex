<?php
   require 'includes/settings.php';
   require 'includes/konnektive.php';

   $konnektive = new Konnektive();
   $konnektive->click('upsellPage3', $catalog[array_key_first($catalog)]['campaignId']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>Shipping</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/upsells/bootstrap20.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link href="assets/upsells/css.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/upsells/stylesheet20.css">
   <link rel="icon" href="https://getseralabs.com/d/gummy/upsells/images/sera_favicon.png" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="assets/upsells/magnific-popup.css">
   <link rel="stylesheet" type="text/css" href="assets/loading.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
   <style>
      .checkout_btn {
         min-height: 48px;
      }

      .loading-screen {
         position: fixed;
         top: 0;
         bottom: 0;
         width: 100%;
         left: 0;
         background: rgba(0, 0, 0, 0.7);
         z-index: 999;
         display: -webkit-box;
         display: -moz-box;
         display: -ms-flexbox;
         display: -webkit-flex;
         display: flex;
         align-items: center;
      }

      .loading-pop {
         float: left;
         width: 100%;
         padding: 25px 0;
         text-align: center;
      }

      .pop-content {
         display: inline-block;
         vertical-align: middle;
         width: 90%;
         max-width: 500px;
         background: #fff;
         border-radius: 10px;
         padding: 10px;
      }

      .loading-img {
         display: inline-block;
         vertical-align: middle;
         margin-right: 10px;
      }

      ul.pop-list {
         display: inline-block;
         vertical-align: middle;
         width: 240px;
         margin: 10px 0;
      }

      ul.pop-list li {
         float: left;
         width: 100%;
         color: #134f7a;
         font-size: 19px;
         line-height: 24px;
         letter-spacing: 0.5px;
         text-align: left;
         margin: 3px 0;
         padding-left: 30px;
         opacity: 0.5;
         position: relative;
         transition: all ease 0.6s;

      }

      ul.pop-list li img {
         position: absolute;
         left: 0;
         top: 6px;
         width: 20px;
         opacity: 0;
         transform: translateX(-10px);
      }

      ul.pop-list li.active {
         opacity: 1;

         transition: all ease 0.5s;
      }

      ul.pop-list li.active img {
         opacity: 1;
         transition: all ease 0.2s;
         transform: translateX(0);
      }

      .modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .btn-close{padding:.5rem .5rem;margin:-.5rem -.5rem -.5rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;flex-shrink:0;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{height:calc(100% - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.modal-fullscreen{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen .modal-header{border-radius:0}.modal-fullscreen .modal-body{overflow-y:auto}.modal-fullscreen .modal-footer{border-radius:0}@media (max-width:575.98px){.modal-fullscreen-sm-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-sm-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-sm-down .modal-header{border-radius:0}.modal-fullscreen-sm-down .modal-body{overflow-y:auto}.modal-fullscreen-sm-down .modal-footer{border-radius:0}}@media (max-width:767.98px){.modal-fullscreen-md-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-md-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-md-down .modal-header{border-radius:0}.modal-fullscreen-md-down .modal-body{overflow-y:auto}.modal-fullscreen-md-down .modal-footer{border-radius:0}}@media (max-width:991.98px){.modal-fullscreen-lg-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-lg-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-lg-down .modal-header{border-radius:0}.modal-fullscreen-lg-down .modal-body{overflow-y:auto}.modal-fullscreen-lg-down .modal-footer{border-radius:0}}@media (max-width:1199.98px){.modal-fullscreen-xl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xl-down .modal-header{border-radius:0}.modal-fullscreen-xl-down .modal-body{overflow-y:auto}.modal-fullscreen-xl-down .modal-footer{border-radius:0}}@media (max-width:1399.98px){.modal-fullscreen-xxl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xxl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xxl-down .modal-header{border-radius:0}.modal-fullscreen-xxl-down .modal-body{overflow-y:auto}.modal-fullscreen-xxl-down .modal-footer{border-radius:0}}
      .btn-close{box-sizing:content-box;width:1em;height:1em;padding:.25em .25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:.25rem;opacity:.5}.btn-close:hover{color:#000;text-decoration:none;opacity:.75}.btn-close:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);opacity:1}.btn-close.disabled,.btn-close:disabled{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;opacity:.25}.btn-close-white{filter:invert(1) grayscale(100%) brightness(200%)}.toast{width:350px;max-width:100%;font-size:.875rem;pointer-events:auto;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .5rem 1rem rgba(0,0,0,.15);border-radius:.25rem}.toast:not(.showing):not(.show){opacity:0}.toast.hide{display:none}.toast-container{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:100%;pointer-events:none}.toast-container>:not(:last-child){margin-bottom:.75rem}.toast-header{display:flex;align-items:center;padding:.5rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-header .btn-close{margin-right:-.375rem;margin-left:.75rem}
      .btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5c636a;border-color:#565e64}.btn-check:focus+.btn-secondary,.btn-secondary:focus{color:#fff;background-color:#5c636a;border-color:#565e64;box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-check:active+.btn-secondary,.btn-check:checked+.btn-secondary,.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#565e64;border-color:#51585e}.btn-check:active+.btn-secondary:focus,.btn-check:checked+.btn-secondary:focus,.btn-secondary.active:focus,.btn-secondary:active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-success{color:#fff;background-color:#198754;border-color:#198754}.btn-success:hover{color:#fff;background-color:#157347;border-color:#146c43}.btn-check:focus+.btn-success,.btn-success:focus{color:#fff;background-color:#157347;border-color:#146c43;box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}
      
   </style>
</head>

<body>
<?php if (isset($_COOKIE['affId']) && $_COOKIE['affId'] != 'INTERNAL') { ?>
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
<?php } ?>
   <div class="container " style="max-width: 1000px">
      <div class="mailbg">
         <div class="clearfix"></div>
         <div class="borderbox ">
            <div class="row">
               <div class="col-12 text-center">
                  <h2> PRIORITY PROCESSING</h2>
                  <img src="assets/upsells/ups.jpg" class="pt-4 pb-4">
                  <p>Due to HIGH DEMAND this time of year, regular
                     delivery can take up to 2 - 3 weeks. But if you would like, we can
                     prioritize your order and move it to the front of the line allowing it
                     to ship out the door within 48 hours for only $14.95.
                  </p>
                  <p><b>Click the Green Button below to take advantage of priority processing. </b>
                  </p>
                  <p>
                  </p>
                  <div class="row row-eq-height">
                     <div class="col-md-6 align-middle  mt-3">
                        <form action="" method="post" data-uitype="upsell_form" id="upsellform">
                           <input type="hidden" name="method" id="method" value="upsell">
                           <input type="hidden" name="product" id="product" value="priority">
                           <a href="javascript:void(0)" onclick="submitOrder();" class="btn btn-lg align-middle pulse">
                              YES! Move My Shipment To The Front Of The Line For Just $14.95
                           </a>
                        </form>
                     </div>
                     <div class="col-md-6 align-middle align-self-center  mt-3">
                        <a href="thankyou.php?order_id=<?= $_SESSION['previousOrderId'] ?? '' ?>" class="btn btn-lg align-middle align-self-center thanksbtn">No Thanks!</a>
                     </div>
                  </div>
                  <p></p>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <br>
   <footer>
      <div class="text-center">
         <p class="policy-links">
            <a class="footerLinks" id="terms" href="#" data-bs-toggle="modal" data-bs-target="#modal">Terms & Conditions</a> |
            <a class="footerLinks" id="privacy" href="#" data-bs-toggle="modal" data-bs-target="#modal">Privacy Policy</a> |
            <a class="footerLinks" id="contact" href="#" data-bs-toggle="modal" data-bs-target="#modal">Contact Us</a>
         </p>
      </div>
      <div class="text-center">
         <p>©<span class="copy-right-year">2023 </span>Seratopical Revolution Intl. All Rights Reserved.</p>
      </div>
   </footer>

   <!-- Modal -->
   <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
         ...
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
   </div>

   <!--popup processing wrapper-->
   <section id="loading-indicator" class="popup-loading-wrapper" style="display: none">
      <div class="popup">
         <img src="https://app.cloudcheap.io/file/2c/icon-lock_zudnet.png" alt="" class="lock-image" />
         <p>Please wait a moment</p>
         <h3>Your Order is Now Being Processed</h3>
         <img src="https://app.cloudcheap.io/file/1U/icon-loading_fqv5fd.png" alt="" class="loading-image" />
      </div>
   </section>
   <!--end popup processing wrapper-->


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="js/footerLinks.js"></script>
   

   <script>
      $('#upsellform').on('submit', function(e) {
         e.preventDefault();
         submitOrder();
      });

      function submitOrder() {
         $('#loading-indicator').css('display', 'block');
         $('#submit_btn').attr('disabled', 'disabled');

         $.ajax({
               type: 'POST',
               url: 'includes/submit_order.php',
               data: $('#upsellform').serialize()
            })
            .always(function() {
               console.log("success");
               window.location.href = 'thankyou.php?order_id=<?= $_SESSION['previousOrderId'] ?? '' ?>';
            });
      }
      history.pushState(null, null, window.location);
      window.addEventListener('popstate', function(event) {
         history.pushState(null, null, window.location);
      });
   </script>
</body>

</html>