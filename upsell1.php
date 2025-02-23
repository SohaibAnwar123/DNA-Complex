<?php
  require_once('includes/settings.php');
  require_once('includes/konnektive.php');
  
  $konnektive = new Konnektive();
  $konnektive->click('upsellPage1');

  	if(isset($_COOKIE['product'])) {
		$data['product'] = $_COOKIE['product'];
		$data = array_merge( $data, $catalog[$data['product']] );
  	} else if (isset($_SESSION['product'])) {
		$data['product'] = $_SESSION['product'];
		$data = array_merge( $data, $catalog[$data['product']] );
	}

  	if(isset($_COOKIE['bump'])) {
		$data['bump']['order1']['product'] = $_COOKIE['bump'];
		$data['bump']['order1']['purchase'] = 'YES';
  	} else if (isset($_SESSION['bump'])) {
		$data['bump']['order1']['purchase'] = 'YES';
		$data['bump']['order1']['product'] = $_SESSION['bump'];
	}
 
 if(isset($_GET['paypalAccept']) && $_GET['paypalAccept'] == '1') {
    if(!isset($_COOKIE['paypalPurchase']) && !isset($_SESSION['paypalPurchase']) && isset($_SESSION['previousOrderId'])) {
      $data = getAffiliateString( $data );

       $data['paypalAccept'] = $_GET['paypalAccept'] ?? '';
       $data['token'] = $_GET['token'] ?? '';
       $data['baToken'] = $_GET['ba_token'] ?? '';
       $data['payerId'] = $_GET['PayerID'] ?? '';
       $data['orderId'] = $_SESSION[ 'previousOrderId' ] ?? '';

       $response = $konnektive->transaction($data, 'paypalConfirm');

       if( !empty( $response['result'] ) && $response['result'] == "SUCCESS" ) {
          $_COOKIE['paypalPurchase'] = 'YES';
          $_SESSION['paypalPurchase'] = 'YES';
       } else {
			header('Location: index.php');
		}
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- All Meta Tag  -->
<meta charset="UTF-8">
<meta name="description" content="">      
<meta name="keywords" content="">
<meta name="author" content="">  
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Get Nicole Kidman's Exclusive Nighttime Routine! - Seratopical Revolution</title>
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
<link rel="stylesheet" type="text/css" href="css/loading.css">

<?php if (isset($_SESSION[ 'previousOrderId' ]) && isset($_SESSION['amt'])) { ?>


<?php unset($_SESSION['amt']); }?>


</head>

<body>
<!-- Menu On Overle BG Strat  -->
<div class="menu-overle"></div>
<!-- Menu On Overle BG End  -->

<!-- Header Html Strat -->
<header class="">
<div class="bg-pink">
	<h5 class="offer-title semi-bold"> Special Offer Unlocked - Do No Close This Page </h5>
</div>
<div class="web-logo">
	<a href="#0"> <img src="./images/img/st_rev_logo.png" alt="" class="img-fluid header-logo"></a>
</div>
</header>
<!-- Header Html End -->
<main>
<section class="sterper-box"> 
	<div class="container">
		<div class="step-sec desktop-show">
			<ul class="d-flex gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-1 p-0">
				<li class="d-flex semi-bold text-light-gray">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img/cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 1:
					</span>
					Order Confirmation
					<i class="fa fa-angle-right ps-2 ps-xxl-4 ps-xl-4 ps-lg-2 ps-md-2 d-flex align-items-center" aria-hidden="true"></i>
				</li>
				<li class="d-flex semi-bold">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img//cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 2:
					</span>
					Add On Options
					<i class="fa fa-angle-right ps-2 ps-xxl-4 ps-xl-4 ps-lg-2 ps-md-2 d-flex align-items-center" aria-hidden="true"></i>
				</li>
				<li class="d-flex semi-bold text-light-gray">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img//cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 3:
					</span>
					Order Summary
				</li>
			</ul>
		</div>
		<div class="step-sec mobile-show">
			<ul class="d-flex gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-1 p-0">
				<li class="d-flex semi-bold text-light-gray">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img/cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 1:
					</span>
					Confirmation
					<i class="fa fa-angle-right ps-2 ps-xxl-4 ps-xl-4 ps-lg-2 ps-md-2 d-flex align-items-center" aria-hidden="true"></i>
				</li>
				<li class="d-flex semi-bold">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img//cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 2:
					</span>
					Add On Options
					<i class="fa fa-angle-right ps-2 ps-xxl-4 ps-xl-4 ps-lg-2 ps-md-2 d-flex align-items-center" aria-hidden="true"></i>
				</li>
				<li class="d-flex semi-bold text-light-gray">
					<span class="d-none d-lg-flex pe-1">
						<img src="./images/img//cheack-icon.svg" alt="" class="pe-xxl-3 pe-xl-3 pe-lg-2 pe-1">Step 3:
					</span>
					Summary
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="main-banner-sec">
	<div class="hero-sec nighttime-banner-sec">
		<div class="container">
			<div class="row banner-sec">
				<div class="col-5 col-xxl-6 col-xl-6 col-lg-6"></div>
				<div class="col-7 col-xxl-6 col-xl-6 col-lg-6 d-flex flex-column text-end">
					<h2 class="title banner-title text-green"> ORDER UPDATE: <br> One-Time Offer Gets You <br class="d-md-block d-none"> Looking Even Younger. </h2>
					<p class="banner-desc semi-bold mt-3 d-xxl-block d-xl-block d-lg-block d-md-block d-none"> Only Available Today As An <br> Add-On To Your Existing Order </p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container video-sec-box text-center">
		<h2 class="title appoiment-demo-sec text-center">Select Nicole Kidman’s Nighttime Routine & <br> Save 40% Today Only... </h2>
		<div class="order-check order-check-two bg-yellow">
			<p class="d-flex gap-2 text-start"><img src="./images/img//cheack-icon.svg" alt=""> Your order will start
				processing at the end of this video! </p>
		</div>
		<div class="about-sec">
			<div class="about-video-sec">
				<script src="https://fast.wistia.com/embed/medias/awr2v5h1tz.jsonp" async></script>
				<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
				<div class="wistia_responsive_padding" style="padding:57.0% 0 0 0;position:relative;">
					<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
						<div class="wistia_embed wistia_async_awr2v5h1tz videoFoam=true" style="height:100%;position:relative;width:100%">
							<div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
								<img src="https://fast.wistia.com/embed/medias/awr2v5h1tz/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="discount-coupen d-flex justify-content-center semi-bold">
					<p> New Member Discount <span> SAVINGS </span>&nbsp;:</p> 
					<div class="d-flex ms-2 activit-icon"> <img src="images/icon/check-icon.svg" alt="">&nbsp;Activated</div>
				</div>
				<a class="offer-btn offer-btn-two bg-pink text-white font-bold d-flex align-items-center yes-want-more"> Yes! I Want More Youth! <img src="./images/icon/right-arrowwhite.svg" alt=""class="align-items-center" style="width:30px"> </a>
				<a href="downsell1.php" class="offer-link-desc mt-3 mt-xs-3 d-block no-thanks">No thanks, I don't want more youth & want to
					skip this one time offer!</a>
			</div>
			<div class="modal fade p-0" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9xwazD5SyVg"
							title="YouTube video player"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							allowfullscreen></iframe>
						<button type="button" class="btn-close" data-bs-dismiss="modal"
							aria-label="Close">
						</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>	

<section class="lab-promise">
	<div class="container">
		<div class="bothside-labpart bothside-labpart-two">
			<div class="right-side-box-two right-side-box">
				<div class="d-flex item-logo">
					<div class="linetop"></div>
					<div class="logo"><img src="./images/img//money-seal.png" alt=""></div>
					<div class="linebottom"></div>
				</div>
				<div class="rightside-textdetails">
					<h3 class="lab-heading font-bold sub-title mb-xxl-3 mb-xl-3 mb-lg-3 mb-2">About the creator:</h3>
					<p class="semi-bold lab-text">Rob Davidson is one of the world’s leading pharmaceutical researchers and the Lead Developer of breakthrough pharmaceutical products such as ZICAM and Chloraseptic. He has lectured at University of Cambridge and for the past two decades he has been a leading innovator in the development and science powering new ways to deliver active ingredients into the body.</p>
					<p class="semi-bold lab-text">  He is the Chief Science Officer of Seratopical Revolution, and has spent the past three years developing this revolutionary new wrinkle reduction system that will not only reduce signs of aging in real time, but can provide lasting results with ongoing use. </p>
					<p class="semi-bold lab-text"> His research has even caught the attention of Hollywood a-listers as a new ‘secret weapon’ that doesn’t require the pain, expense and recovery time of lasers, injections, or risky surgery!</p>
					<div class="iab-univercity">
						<a href="#0"><img src="./images/img//villanova.png" alt=""></a>
						<a href="#0"><img src="./images/img//university.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="businessman-image">
				<img src="./images/img//businessman-with-arms.png" alt="businessman-with-arms" class="w-100 h-100">
			</div>
		</div>
	</div>
</section>

<section class="saving-offers">
	<div class="container">
		<div class="offers-details">
			<p class="semi-bold limited-stock-title">Limited Time Stock Up & Save Offer</p>
			<div class="discount-text discount-text-two bg-green nighttime-time mt-3">
				<p class="semi-bold">Your Discounted Bottles Are Reserved For <span class="extra-bold" id="stopwatch">00:00 Minutes</span></p>
			</div>
			<h2 class="title save-offer save-offer-two">Secure Your Package Package & <br> Save Up To 40% Today Only</h2>
			<div class="product-box">
				<div class="addjar">
					<p class="sub-title sub-title-two">SECURE NOW!</p>
					<div class="down-aarrow"> <img src="images/icon/caret-down.svg" alt="" style="width:14px;"> </div>
					<div class="product-desc">
						<img src="./images/img//product-img.png" alt="" class="product-img">
						<ul class="prod-info m-auto mt-2 p-0 mobile-ul-fixed">
							<li class="semi-bold"> <img src="./images/img//cheack-icon.svg" alt=""> 1 Month Supply </li>
							<li class="semi-bold"> <img src="./images/img//cheack-icon.svg" alt=""> 40% Discount </li>
							<li class="semi-bold"> <img src="./images/img//cheack-icon.svg" alt=""> Free Shipping </li>
						</ul>
						<div class="product-price bg-white">
							<span class="semi-bold"> Retail Price: <s> $139 </s> </span>
							<h2 class="semi-bold"> $89.00 </h2>
							<p class="text-green semi-bold mt-1"> You Save: $50 </p>
							<a href="#0" class="add-order bg-pink text-white mt-2"> Yes! Add To My Order </a>
							<p class="semi-bold mt-3"> 30 Day Money-Back Guarantee </p>
							<a href="#0"> <img src="./images/img//payment-card.png" alt="" class="mt-2" style="width:100%;">
							</a>
						</div>
					</div>
				</div>
			</div>
			<a href="downsell1.php" class="offer-link font-light mt-4 font-Light no-thanks"> No thanks, I don't want more youth &
				want to skip this one time offer! </a>
		</div>
	</div>
</section>

<section class="bg-light-gray">
	<div class="product-review-sec container">
		<div class="product-review-title">
			<h2 class="title text-center"> These Ladies Did It For 6 Months & <br class="d-md-block d-none"> Enjoyed A Complete Youthful Transformation </h2>
		</div>
		<div class="review-product">
			<div class="product-review-box">
				<div class="rate-name d-xxl-none d-xl-none d-lg-none d-md-none d-flex align-items-center justify-content-between mb-2">
					<p> Sadie Smith </p>
					<ul class="p-0 d-flex stars-sec">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li> 						
					</ul>
				</div> 
				<div class="review-box">
					<div class="review-img"> <img src="./images/img/amy-with-products-on-counter.png" alt="" style="width:100%;"> </div>
				</div>	
				<h4 class="semi-bold"> Does Everything It Says & More </h4>
				<div class="rating-sec d-flex align-items-center">
					<ul class="p-0">
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li> 						
					</ul>
					<span class="ps-1"> Verified Purchase </span>
				</div>
				<p class="semi-bold"> "10 days use and I can see its already smoothed out lines and hydrated the skin around my eyes. Feels good and soft and was not at all irritating which is perfect for me as I have very sensitive skin. Will definitely order again." </p>
				<p class="semi-bold m-0 text-green d-none d-md-block d-lg-block d-xl-block d-xxl-block"> Sadie Smith </p>
			</div>
			<div class="product-review-box"> 
				<div class="rate-name d-xxl-none d-xl-none d-lg-none d-md-none d-flex align-items-center justify-content-between mb-2">
					<p> Jenna Lofts </p>
					<ul class="p-0 d-flex stars-sec">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li> 						
					</ul>
				</div> 
				<div class="review-box">
					<div class="review-img"> <img src="./images/img/diane-post.png" alt="" style="width:100%;"> </div>
				</div>	
				<h4 class="semi-bold"> My Crow’s Feet Are Almost Non-Existent </h4>
				<div class="rating-sec d-flex align-items-center">
					<ul class="p-0">
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li> 						
					</ul>
					<span class="ps-1"> Verified Purchase </span>
				</div>
				<p class="semi-bold"> "I have less puffiness and dark circles too. It’s like me and my eyes woke up. I don’t look tired all the time and absolutely love this product. It’s now a staple in my daily skin care regimen." </p>
				<p class="semi-bold m-0 text-green d-none d-md-block d-lg-block d-xl-block d-xxl-block"> Jenna Lofts </p>
			</div>
			<div class="product-review-box">
				<div class="rate-name d-xxl-none d-xl-none d-lg-none d-md-none d-flex align-items-center justify-content-between mb-2">
					<p> Ellen Archer </p>
					<ul class="p-0 d-flex stars-sec">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li> 						
					</ul>
				</div>  
				<div class="review-box">
					<div class="review-img"> <img src="images/img/patricia-clarity.png" alt="" style="width:100%;"> </div>
				</div>	
				<h4 class="semi-bold"> My Friends Are Jealous </h4>
				<div class="rating-sec d-flex align-items-center">
					<ul class="p-0">
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li> 						
					</ul>
					<span class="ps-1"> Verified	Purchase </span>
				</div>
				<p class="semi-bold"> "I’m 60 next year. Most of my girlfriends are in their forties or early fifties and after 3 weeks they wanted to know what my secret was. I’d been buried in work for a few months so my eyes had become horribly stressed looking and in no time at all the dark circles and crow’s feet had gone. Now a month later, they still don’t believe I haven’t had botox!" </p>
				<p class="semi-bold m-0 text-green d-none d-md-block d-lg-block d-xl-block d-xxl-block"> Ellen Archer </p>
			</div>
			<div class="product-review-box"> 
				<div class="rate-name d-xxl-none d-xl-none d-lg-none d-md-none d-flex align-items-center justify-content-between mb-2">
					<p> Rhian Eversberg </p>
					<ul class="p-0 d-flex stars-sec">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li> 						
					</ul>
				</div> 
				<div class="review-box">
					<div class="review-img"> <img src="images/img/stcey-using-freedom.png" alt="" style="width:100%;"> </div>
				</div>	
				<h4 class="semi-bold"> The Eye Serum Brought Back My Youth </h4>
				<div class="rating-sec d-flex align-items-center">
					<ul class="p-0">
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li> 						
					</ul>
					<span class="ps-1"> Verified	Purchase </span>
				</div>
				<p class="semi-bold"> "I use Freedom and Adoring. They’re my 2 favorite beauty products at the moment. How I look now compared to just a month ago is astonishing. I was almost out of hope but the Seratopical team proves aging is a choice!" </p>
				<p class="semi-bold m-0 text-green d-none d-md-block d-lg-block d-xl-block d-xxl-block"> Rhian Eversberg </p>
			</div>
			<!-- <div class="product-review-box"> 
				<div class="rate-name d-xxl-none d-xl-none d-lg-none d-md-none d-flex align-items-center justify-content-between mb-2">
					<p> Sadie Smith </p>
					<ul class="p-0 d-flex stars-sec">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star" aria-hidden="true"></i></li> 						
					</ul>
				</div> 
				<div class="review-box">
					<div class="review-img"> <img src="images/img/amy-with-products-on-counter.png" alt="" style="width:100%;"> </div>
				</div>	
				<h4 class="semi-bold"> Does Everything It Says & More </h4>
				<div class="rating-sec d-flex align-items-center">
					<ul class="p-0">
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>					
						<li><i class="fa fa-star text-yellow" aria-hidden="true"></i></li> 						
					</ul>
					<span class="ps-1"> Verified	Purchase </span>
				</div>
				<p class="semi-bold"> "10 days use and I can see its already smoothed out lines and hydrated the skin around my eyes. Feels good and soft and was not at all irritating which is perfect for me as I have very sensitive skin. Will definitely order again." </p>
				<p class="semi-bold m-0 text-green d-none d-md-block d-lg-block d-xl-block d-xxl-block"> Sadie Smith </p>
			</div> -->
		</div>
	</div>
</section>

</main>
<!-- Footer Section Start -->
<footer class="footer-main footer-main-two semi-bold">
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
		<div class="copyright-main text-center d-md-block d-none">
			<p class="ftrtxt">© <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>  
      Seratopical Revolution Intl., LLC. <br class="show-479">All rights reserved.</p>
		</div>
	</div>
	<div class="d-md-none d-block">
		<div class="copyright-main">
			<p class="ftrtxt">© <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>  
      Seratopical Revolution Intl., LLC. <br class="show-479">All rights reserved.</p>
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

<section id="loading-indicator-new" class="popup-loading-wrapper" style="display: none">
  <div class="popup">
    <img src="https://app.cloudcheap.io/file/2c/icon-lock_zudnet.png" alt="" class="lock-image" />
    <p>Please wait a moment</p>
    <h3>Your Order is Now Being Processed</h3>
    <img src="https://app.cloudcheap.io/file/2a/animated-gif.gif" alt="" class="loading-image" />
  </div>
</section>

<form method="post" data-uitype="upsell_form" id="upsellform">
  <input type="hidden" name="method" id="method" value="upsell">
  <input type="hidden" name="product" id="product" value="upsell1">
</form>

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

$('.review-product').slick({
slidesToShow: 4,
slidesToScroll: 1,
arrows: true,
adaptiveHeight: true,
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

$('.offer-btn').on('click', () => {
	document.querySelector('.offers-details').scrollIntoView();
})

$('.add-order').on('click', function(e) {
	e.preventDefault();
	submitOrder();
});

function submitOrder() {
    $('#loading-indicator-new').css('display', 'block');
    $('.upbtn').attr('disabled', 'disabled');

    $.ajax({
        type: 'POST',
        url: 'includes/submit_order.php',
        data: $('#upsellform').serialize()
      })
      .always(function() {
        console.log("success");
        window.location.href = 'upsell2.php';
      });
  }
  history.pushState(null, null, window.location);
  window.addEventListener('popstate', function(event) {
    history.pushState(null, null, window.location);
  });

var spd = 100;
var spdVal = 10;
var cntDown = 5 * 60 * spdVal;
setInterval(function () {
	var mn, sc, ms;
	cntDown--;
	if(cntDown < 0) {
		return false;
	}
	mn = Math.floor((cntDown / spdVal) / 60 );
	mn = (mn < 10 ? '0' + mn : mn);
	sc = Math.floor((cntDown / spdVal) % 60);
	sc = (sc < 10 ? '0' + sc : sc);
	ms = Math.floor(cntDown % spdVal);
	ms = (ms < 10 ? '0' + ms : ms);
	var result = mn + ':' + sc;
	document.getElementById('stopwatch').innerHTML = result;
}, spd);
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