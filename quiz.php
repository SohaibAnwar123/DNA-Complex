<?php
  require 'includes/settings.php';
  require 'includes/konnektive.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- All Meta Tag  -->
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Answer 3 Quick Questions to Secure Your Discount!</title>

    <!-- favicon link -->
    <link rel="icon" type="image" href="./images/icon/favicon.svg" />
    <!-- Fonts Awesome Css -->
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css" />
    <!-- wow animation Css -->
    <link rel="stylesheet" type="text/css" href="./css/animate.css" />
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <!-- Responsive Css -->
    <link rel="stylesheet" type="text/css" href="./css/responsive.css" />
</head>

<body>
    <main>
        <!-- Header Html Strat -->
        <header class="container">
            <div class="header-wrapper">
                <a href=""><img src="./images/img/DNA.png" alt="DNALogo"></a>
                <ul class="header-wrapper-inner section-header">
                    <li>
                        <a class="d-flex gap-2 semi-bold" href="tel:800-625-4211"><img
                                src="./images/icon/phone-call.svg" alt="Phone-Link"> 800-625-4211</a>
                    </li>
                    <li>
                        <a href="#0" class="d-flex gap-2 semi-bold"><img src="./images/icon/clock.svg" alt="Clock-Link">
                            9am-9pm EST Mon-Sun</a>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Header Html End -->
        <!-- quiz area start -->
        <div class="quiz-section">
            <div class="quiz-container">
                <div class="quiz-area">
                    <h2 class="font-bold pt-5" >Answer these 3 questions to claim up to 40% off:</h2>
                    <form class="fieldset-form" action="">
                        <h2>
                            <span>1
                                <svg height="10" width="11">
                                    <path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"
                                        fill="#13a89e"></path>
                                    <path d="M8 4v2H0V4z" fill="#13a89e"></path>
                                </svg>
                            </span>
                            How old are you?
                        </h2>
                        <div class="quiz-list quiz-question">
                            <ul class="quiz-items">
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        A
                                    </div>
                                    <p>Under 30 years</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        B
                                    </div>
                                    <p>30-39 years</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        C
                                    </div>
                                    <p>40-49 years</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        D
                                    </div>
                                    <p>50-59 years</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        E
                                    </div>
                                    <p>Over 60 years</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <h2>
                            <span>2
                                <svg height="10" width="11">
                                    <path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"
                                        fill="#13a89e"></path>
                                    <path d="M8 4v2H0V4z" fill="#13a89e"></path>
                                </svg>
                            </span>
                            What is your biggest skin-related concern?
                        </h2>
                        <div class="quiz-list skin-related-concern">
                            <ul class="quiz-items">
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        A
                                    </div>
                                    <p>Wrinkles</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        B
                                    </div>
                                    <p>Fine lines</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        C
                                    </div>
                                    <p>Crêpe skin</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        D
                                    </div>
                                    <p>
                                        Saggy skin</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        E
                                    </div>
                                    <p>Patchy skin</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        F
                                    </div>
                                    <p>Other</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <h2>
                            <span>3
                                <svg height="10" width="11">
                                    <path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"
                                        fill="#13a89e"></path>
                                    <path d="M8 4v2H0V4z" fill="#13a89e"></path>
                                </svg>
                            </span>
                            I want to...
                        </h2>
                        <div class="quiz-list quiz-question">
                            <ul class="quiz-items">
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        A
                                    </div>
                                    <p>
                                        Maintain my skin</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        B
                                    </div>
                                    <p>Visibly reduce signs of aging</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="list-key">
                                        <span>key</span>
                                        C
                                    </div>
                                    <p>Banish my aging skin altogether</p>
                                    <span class="list-icon">
                                        <svg height="13" width="16">
                                            <path d="M14.293.293l1.414 1.414L5 12.414.293 7.707l1.414-1.414L5 9.586z"
                                                fill="#13a89e"></path>
                                        </svg>
                                    </span>
                                </li>
                            </ul>

                        </div>
                        <div class="form-submit">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- quiz area end -->

        <!-- Footer Section Start -->
        <footer class="footer-main semi-bold">
            <div class="container">
                <div class="footer-sec">
                  <div class="text-center">
                       <a href="#0" class="d-inline-block"><img src="images/img/footerdnalogo.png" alt="Footer Logo"
                                class="w-100 footer-logo"></a>
                    </div>
                    <div class="wrapper-link">
                        <ul class="ps-0">
                            <li>
                                <a class="footerLinks" id="privacy" data-bs-toggle="modal" data-bs-target="#modal"
                                    href="#0">Privacy Policy | </a>
                            </li>
                            <li>
                                <a class="footerLinks" id="terms" data-bs-toggle="modal" data-bs-target="#modal"
                                    href="#0"> Terms and Conditions | </a>
                            </li>
                            <li>
                                <a class="footerLinks" id="contact" data-bs-toggle="modal" data-bs-target="#modal"
                                    href="#0"> Contact us | </a>
                            </li>
                            <li>
                                <a target="_blank" href="/Citations.php">Citations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3 footer-details">
                        <ul class="contact-link flex-lg-row flex-column ps-0">
                            <li>
                                <a href="tel:800-625-4211" class="d-flex gap-2 justify-content-center"><img
                                        src="./images/icon/phone-call.svg" alt="Phone-Link"> 800-625-4211</a>
                            </li>
                            <li>
                                <a href="#0" class="d-flex gap-2 justify-content-center"><img
                                        src="./images/icon/clock.svg" alt="Clock-Link"> 9am-9pm EST Mon-Sun</a>
                            </li>
                            <li>
                                <a href="mailto:customercare@SeratopicalRevolution.com"
                                    class="d-flex gap-2 justify-content-center text-break"><img
                                        src="./images/icon/mail.svg" alt="Mail-link">
                                    customercare@SeratopicalRevolution.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-light-gray footer-detail d-md-block d-none">
                        <p>The information presented on this website is not intended as specific medical advice and is
                            not a substitute for professional treatment or diagnosis. These statements have not been
                            evaluated by the Food and Drug Administration. This product is not intended to diagnose,
                            treat, cure, or prevent any disease.</p>
                    </div>
                    <div class="copyright-main text-center d-md-block d-none">
                        <p>2023 © DNA Complex. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <div class="d-md-none d-block">
                <div class="bg-light-gray footer-detail d-none">
                    <p>Make sure to get final disclosures and terms from Greg in legal for ALL pages. Should just be a
                        blanket disclosure section across the entire funnel</p>
                </div>
                <div class="copyright-main">
                    <p>2023 © DNA Complex. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
        <!-- loading start-->
        <p id="loading-indicator" style="display: none;">Processing...</p>
        <!-- loading end-->
    </main>

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
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 4 jqeury -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow.min jqeury -->
    <script src="js/wow.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- custom jqeury -->

    <script src="js/custom.js"></script>
    <script src="js/footerLinks.js"></script> 


    <script>
        $(".submit-btn").click(function (e) {
            e.preventDefault();
            $('#loading-indicator').show();
            setTimeout(function () {
                window.location.href='./selection.php'+window.location.search;
            }, 3000);
        });
        $('.quiz-question li').on('click', function () {
            $(this).toggleClass('active').siblings().removeClass('active');
        });
        $('.skin-related-concern li').on('click', function () {
            $(this).toggleClass('active');
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