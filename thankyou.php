<?php
   require 'includes/settings.php';
   require 'includes/konnektive.php';

   $konnektive = new Konnektive();
   $konnektive->click('thankyouPage', $catalog[array_key_first($catalog)]['campaignId']);

   if(isset($_GET['order_id'])){
      $konnektive = new Konnektive();
      $prospect = $konnektive->transaction(['orderId' => $_GET['order_id']], 'thankyou');
      // dump($prospect);
      if ( !empty( $prospect['result'] ) && $prospect['result'] == "SUCCESS" ) {
         $prospect = $prospect['message']['data'][0];
      }else{
         header('Location: index.php');
      }
   }else{
      header('Location: index.php');
   }

   $subtotal = 0.00;
   $shipping = 0.00;
   $taxes = 0.00;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- All Meta Tag  -->
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank you for your Purchase! - DNA Complex</title>
<!-- favicon link -->
<link rel="icon" href="./images/icon/favicon.svg">
<!-- Fonts Awesome Css -->
<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
<!-- wow animation Css -->
<link rel="stylesheet" type="text/css" href="./css/animate.css">
<!-- Bootstrap 5 Css -->
<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<!-- slick slider Css -->
<link rel="stylesheet" type="text/css" href="./css/slick.css">
<link rel="stylesheet" type="text/css" href="./css/slick-theme.css">	
<!-- Style Css -->
<link rel="stylesheet" type="text/css" href="./css/style.css">
<!-- Responsive Css -->
<link rel="stylesheet" type="text/css" href="./css/responsive.css">
<script>
	function printDate() {
		const date = new Date();

		let day = date.getDate();
		let month = date.getMonth() + 1;
		let year = date.getFullYear();

		let spelledMonth;

		switch(month) {
			case 1: spelledMonth = 'January'
			break;
			case 2: spelledMonth = 'February'
			break;
			case 3: spelledMonth = 'March'
			break;
			case 4: spelledMonth = 'April'
			break;
			case 5: spelledMonth = 'May'
			break;
			case 6: spelledMonth = 'June'
			break;
			case 7: spelledMonth = 'July'
			break;
			case 8: spelledMonth = 'August'
			break;
			case 9: spelledMonth = 'September'
			break;
			case 10: spelledMonth = 'October'
			break;
			case 11: spelledMonth = 'November'
			break;
			case 12: spelledMonth = 'December'
			break;
		}
		document.querySelector('.order-placed').innerHTML = `<span>${spelledMonth} ${day}, ${year}</span>`;
	}
</script>
</head>

<body>
<!-- Menu On Overle BG Strat  -->
<div class="menu-overle"></div>
<!-- Menu On Overle BG End  -->

<!-- Header Html Strat --> 
<header>
	<div class="container">
		<div class="d-flex justify-content-between align-items-start pt-lg-4 pt-md-3 pt-2 pb-md-0 pb-2 px-md-0 px-2">
			<div class="seratopical-logo">
				<a href="#0"> <img src="./images/img/st_rev_logo.png" alt="" class=""></a>
			</div>
			<div class="customer-contact text-end d-block d-xxl-none d-xl-none d-lg-none d-md-none">
				<p class="font-bold"> Customer Service </p>
				<a href="tel: 800-625-4211" class="semi-bold"> 800-625-4211 </a>
			</div>
		</div>
    </div>
</header>
<!-- Header Html End -->
<main>
<div class="container">
	<div class="conform-order-sec">
		<div class="order-detls-box bg-green">   
			<h2 class="text-white font-bold"> THANK YOU FOR YOUR PURCHASE! </h2>
			<p class="text-white font-regular"> We hope you enjoy the benefits of <b class="font-bold"> DNA Complex. </b> Your order is scheduled to arrive by <b class="font-bold" id="order-scheduled"> </b> </p>
		</div>
		<div class="order-recipt-sec bg-light-gray">  
			<div class="row mx-0 product-order mobile-hide align-items-center d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex"> 
				<div class="col-12 col-xxl-5 col-xl-5 col-lg-5 col-md-5 p-0 dna-product-img">
					<img src="images/img/dns-bottle-mockup-two.png" alt="">
				</div>
				<div class="col-12 col-xxl-7 col-xl-7 col-lg-7 col-md-7 p-0 dna-product-contact">
					<div class="order-recipt">
						<h3 class="sub-title font-bold"> ORDER RECEIPT </h3>
						<P class="font-regular"> Order placed: <span class="font-bold order-placed"> <script>printDate()</script> </span> </P>
						<p class="font-regular"> Order Number:  <?= $prospect['orderId'] ?? '' ?></p>
					</div>
					<div class="order-recipt-two">
						<h3 class="font-bold"> ITEMS ORDERED </h3>
						<div class="order-box">
							<?php foreach($prospect['items'] as $product){ ?>
							<div class="order-item d-flex justify-content-between">
								<p class="font-regular"> <?= $product['name'] ?> </p> 
								<span class="font-regular"> $<?= $product['price'] ?> </span>
							</div>
							<?php } ?>
							<div class="order-item d-flex justify-content-between">
								<p class="font-regular"> Shipping & Handling </p> 
								<span class="font-regular"> $<?= number_format($prospect['baseShipping'], 2) ?> </span>
							</div>
							<div class="order-item-2 bg-green text-white d-flex justify-content-between">
								<p class="font-bold total-prc"> TOTAL </p> 
								<span class="font-bold total-prc"> $<?= number_format($prospect['totalAmount'], 2) ?> </span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mob-order-dtls-box mobile-show">
				<div class="order-recipt-box"> 
					<div class="row order-recipt m-0">
						<div class="col-8 p-0">
							<h3 class="sub-title font-bold"> ORDER RECEIPT </h3>
							<P class="font-regular"> Order placed: <b class="font-bold"> <script>printDate()</script> </b> </P>
							<p class="font-regular"> Order Number: <?= $prospect['orderId'] ?></p>
						</div>
						<div class="col-4 p-0 text-end mob-product-img">
							<img src="images/img/dns-bottle-mockup-two.png" alt="" width="40%">
						</div>
					</div>
					<div class="order-recipt-two">
						<h3 class="font-bold"> ITEMS ORDERED </h3>
						<div class="order-box">
							<?php foreach($prospect['items'] as $product){ ?>
							<div class="order-item d-flex justify-content-between">
								<p class="font-regular"> <?= $product['name'] ?> </p> 
								<span class="font-regular"> $<?= $product['price'] ?> </span>
							</div>
							<?php } ?>
							<div class="order-item d-flex justify-content-between">
								<p class="font-regular"> Shipping & Handling </p> 
								<span class="font-regular"> $<?= number_format($prospect['baseShipping'], 2) ?> </span>
							</div>
							<div class="order-item-2 bg-green text-white d-flex justify-content-between">
								<p class="font-bold total-prc"> TOTAL </p> 
								<span class="font-bold total-prc"> $<?= number_format($prospect['totalAmount'], 2) ?> </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- <div class="shipping-section bg-light-gray">
			<div class="row mx-0">
				<div class="shipping-info-sec col-12 col-xxl-5 col-xl-5 col-lg-5 col-md-5 p-0">
					<div class="shipping-info">
						<h3 class="font-bold"> SHIPPING INFO </h3>
						<ul class="shipping-menu p-0">
							<li> First Name: </li>
							<li> Last Name: </li>
							<li> Address: </li>
							<li> City: </li>
							<li> State: </li>
							<li> Zip Code: </li>
							<li> Phone: </li>
							<li> Email: </li>
						</ul>
					</div>
				</div>
				<div class="shipping-info-sec col-12 col-xxl-7 col-xl-7 col-lg-7 col-md-7 mt-3 mt-xxl-0 mt-4 mt-md-0 p-0">
					<div class="shipping-info">
						<h3 class="font-bold"> BILLING INFO </h3>
						<ul class="shipping-menu p-0">
							<li> First Name: </li>
							<li> Last Name: </li>
							<li> Address: </li>
							<li> City: </li>
							<li> State: </li>
							<li> Zip Code: </li>
							<li> Phone: </li>
							<li> Email: </li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>	
</main>
<!-- Footer Section Start -->
<footer class="footer-main order-footer-main semi-bold">
<div class="container">			
<div class="text-center">
	<a href="#0" class="d-inline-block ">
		<img src="images/img/seratopicallogo.png" alt="Footer Logo" class="w-100 footer-logo">
	</a>		
</div>
<div class="wrapper-link">
	<ul class="ps-0">
		<li>
			<a class="footerLinks" id="privacy" data-bs-toggle="modal" data-bs-target="#modal" href= "#0">Privacy Policy | </a>
		</li>
		<li>
			<a class="footerLinks" id="terms" data-bs-toggle="modal" data-bs-target="#modal" href="#0"> Terms and Conditions | </a>
		</li>
		<li>
			<a class="footerLinks" id="contact" data-bs-toggle="modal" data-bs-target="#modal" href="#0"> Contact us | </a>
		</li>
		<li>
			<a target="_blank" href="Citations.php">Citations</a>
		</li>
	</ul>					
</div>
<div class="pt-3">
	<ul class="contact-link flex-lg-row flex-column ps-0">
		<li>
			<a href= "tel:800-625-4211" class="d-flex gap-2 justify-content-center">
				<img src="./images/icon/phone-call.svg" alt="Phone-Link">
				800-625-4211
			</a>
		</li>
		<li>
			<a href= "#0" class="d-flex gap-2 justify-content-center">
				<img src="./images/icon/clock.svg" alt="Clock-Link">
				9am-9pm EST Mon-Sun
			</a>
		</li>
		<li>
			<a href= "mailto:customercare@SeratopicalRevolution.com" class="d-flex gap-2 justify-content-center text-break">
				<img src="./images/icon/mail.svg" alt="Mail-link">
				customercare@SeratopicalRevolution.com
			</a>
		</li>
	</ul>
</div>
<div class="bg-light-gray footer-detail">
	<p>The information presented on this website is not intended as specific medical advice and is not a substitute for professional treatment or diagnosis. These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
</div>
<div class="copyright-main text-center">
	<p>2023 © Seratopical Revolution. All rights reserved.</p>
</div>
</div>
</footer>
<!-- Footer Section End -->

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

<!-- main jqeury -->
<script src="./js/jquery-3.6.0.min.js"></script>
<!-- bootstrap 4 jqeury -->
<script src="./js/bootstrap.min.js"></script>
<!-- wow.min jqeury -->
<script src="./js/wow.min.js"></script>
<!-- slick slider -->
<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>   
<!-- custom jqeury -->
<script src="./js/custom.js"></script>
<script src="js/footerLinks.js"></script>

<script>
$('.makeup-item').slick({
dots: true,
});  
$('.product-result').slick({			
});  
$('.review-product').slick({
slidesToShow: 4,
slidesToScroll: 1,
arrows: true,
responsive: [
{
breakpoint: 1400,
settings: {
	slidesToShow: 3
}
},
{
breakpoint: 992,
settings: {
	slidesToShow: 2
}
},
{
breakpoint: 768,
settings: {
	slidesToShow: 1
}
}
]
}); 

</script>
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/11160a34-0fd5-45ff-8d3d-029432d6a8b6.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
</body>

</html>