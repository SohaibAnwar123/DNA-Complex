<?php
require 'includes/settings.php';
require 'includes/konnektive.php';

//   $konnektive = new Konnektive();
//   $konnektive->click('leadPage', $catalog[array_key_first($catalog)]['campaignId']);

$nextPage = 'quiz.php';
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
    <title>Introducing DNA Complex</title>
    <!-- favicon link -->
    <link rel="icon" href="./images/icon/favicon.svg">
    <!-- Fonts Awesome Css -->
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    <!-- wow animation Css -->
    <link rel="stylesheet" type="text/css" href="./css/animate.css">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Responsive Css -->
    <link rel="stylesheet" type="text/css" href="./css/responsive.css">
    <style>
    #show-button {
        position: relative;
        z-index: 9999;
    }
    </style>
</head>

<body>
    <main>
        <!-- Header Html Start -->
        <header class="header_sec">
            <a href="#0"><img src="./images/img/DNA.png" class="vsl-logo" alt="logo" /></a>
        </header>
        <!-- welcome video sec start  -->
        <section class="welcomeVideo">
            <div class="welcomeContainer">
                <div class="hero_bg">
                    <div class="hero_sec">
                        <p>breaking news: nicole kidman's oscar 2023 routine that had her glowing revealed inside</p>
                    </div>
                </div>
                <div class="welcomeInner">
                    <div class="welcomeEmbeb desktopVersion">
                        <script src="https://fast.wistia.com/embed/medias/kn8p1b7l24.jsonp" async></script>
                        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper"
                                style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <div class="wistia_embed wistia_async_kn8p1b7l24 seo=false videoFoam=true"
                                    style="height:100%;position:relative;width:100%">
                                    <div class="wistia_swatch"
                                        style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                        <img src="https://fast.wistia.com/embed/medias/kn8p1b7l24/swatch"
                                            style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt=""
                                            aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="welcomeEmbeb mobileVersion">
                        <script src="https://fast.wistia.com/embed/medias/6uj3fpd7nk.jsonp" async></script>
                        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                        <div class="wistia_responsive_padding" style="padding:125.0% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper"
                                style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <div class="wistia_embed wistia_async_6uj3fpd7nk seo=false videoFoam=true"
                                    style="height:100%;position:relative;width:100%">
                                    <div class="wistia_swatch"
                                        style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                        <img src="https://fast.wistia.com/embed/medias/6uj3fpd7nk/swatch"
                                            style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt=""
                                            aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- welcome video sec end -->
        <!-- Header Html End -->
        <section class="main_sec">
            <!-- Hero Html start -->
            <div class="hero_bg">
                <div class="hero_container">
                    <div class="hero_img">
                        <div class="d-flex align-items-center view_sec mt-0">
                            <img src="./images/img/view.svg" alt="view">
                            <h4 class="">7,200,000 views</h4>
                        </div>
                        <div class="hero_btn" id="show-button">
                            <a href="<?= $nextPage ?>" class="white-color text-white">next step</a>
                        </div>
                        <div class="round_main_sec">
                            <div class="round_img_info">
                                <div class="round_img"><img src="./images/img/rob-headshot.png" alt="rob-headshot">
                                </div>
                                <div class="round_cliant_contant">
                                    <h3 class="black-color">rob davidson, PhD</h3>
                                    <h4>Chief Science Officer Seratopical Revolution</h4>
                                </div>
                            </div>
                            <div class="round_contant">
                                <p class="black-color">Rob Davidson is one of the world’s leading pharmaceutical
                                    researchers and
                                    the Lead Developer of breakthrough pharmaceutical products such as ZICAM and
                                    Chloraseptic.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Html close -->
        </section>
    </main>

    <!-- The modal -->
    <div id="documentLeavingMd">
        <div class="modalOverlay"></div>
        <div class="modal-body">
            <h1>WAIT!</h1>
            <h3>Before you go… </h3>
            <p>Do you want to know the <span class="acc">exact juice</span> that <span class="acc">Melted
                    62LBs</span> of deadly fat from my body?<br><span class="rev">Juice Revealed in: <span
                        class="countDown"></span></span>
            </p>
            <a href="" class="flex_align modalBtn">YES! KEEP WATCHING</a>
        </div>
    </div>

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
                                href="#">Privacy
                                Policy | </a>
                        </li>
                        <li>
                            <a class="footerLinks" id="terms" data-bs-toggle="modal" data-bs-target="#modal" href="#">
                                Terms
                                and Conditions | </a>
                        </li>
                        <li>
                            <a class="footerLinks" id="contact" data-bs-toggle="modal" data-bs-target="#modal" href="#">
                                Contact us | </a>
                        </li>
                        <li>
                            <a class="footerLinks" id="" data-bs-toggle="modal" data-bs-target="#modal"
                                href="#">Citations</a>
                        </li>
                    </ul>
                </div>
                <div class="pt-3">
                    <ul class="contact-link flex-lg-row flex-column ps-0">
                        <li>
                            <a href="tel:800-625-4211" class="d-flex gap-2 justify-content-center"><img
                                    src="./images/icon/phone-call.svg" alt="Phone-Link"> 800-625-4211</a>
                        </li>
                        <li>
                            <a href="#0" class="d-flex gap-2 justify-content-center"><img src="./images/icon/clock.svg"
                                    alt="Clock-Link"> 9am-9pm EST Mon-Sun</a>
                        </li>
                        <li>
                            <a href="mailto:customercare@SeratopicalRevolution.com"
                                class="d-flex gap-2 justify-content-center text-break"><img src="./images/icon/mail.svg"
                                    alt="Mail-link"> customercare@SeratopicalRevolution.com</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-light-gray footer-detail d-md-block d-none">
                    <p>The information presented on this website is not intended as specific medical advice and is not a
                        substitute for professional treatment or diagnosis. These statements have not been evaluated by
                        the
                        Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent
                        any
                        disease.</p>
                </div>
                <div class="copyright-main text-center d-md-block d-none">
                    <p>
                        <script type="text/javascript">
                        var year = new Date();
                        document.write(year.getFullYear());
                        </script>
                        Seratopical Revolution Intl., LLC. <br class="show-479">All rights reserved.
                    </p>
                </div>
            </div>
        </div>
        <div class="d-md-none d-block">
            <!--      <div class="bg-light-gray footer-detail">
               <p>Make sure to get final disclosures and terms from Greg in legal for ALL pages. Should just be a blanket disclosure section across the entire funnel</p>
            </div> -->
            <div class="copyright-main">
                <p>
                    <script type="text/javascript">
                    var year = new Date();
                    document.write(year.getFullYear());
                    </script>
                    Seratopical Revolution Intl., LLC. <br class="show-479">All rights reserved.
                </p>
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
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 4 jqeury -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- wow.min jqeury -->
    <script src="./js/wow.min.js"></script>
    <!-- custom jqeury -->
    <script src="./js/custom.js"></script>
    <script src="js/footerLinks.js"></script>
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
    <script>
    $('#show-button').on('click', function() {
        window.location.href = '<?= $nextPage ?>';
    });

    window._wq = window._wq || [];

    var videoConfig = {
        id: "kn8p1b7l24",
        onReady: function(video) {
            video.bind('secondchange', function(s) {
                if (s === 480) {
                    $("#show-button").addClass("ShowMeButton");
                }
            });
        }
    };

    if (window.innerWidth === 640) {
        videoConfig.id = "6uj3fpd7nk";
    }

    _wq.push(videoConfig);
    </script>
    <script>
    window._wq = window._wq || [];

    _wq.push({
        id: "6uj3fpd7nk",
        onReady: function(video) {
            video.bind('secondchange', function(s) {
                if (s === 480) {
                    $("#show-button").addClass("ShowMeButton");

                }
            });
        }
    });
    </script>

    <!-- Body leaving modal start  -->
    <script>
    $(document).ready(function() {
        let countdownTimer;

        // Show the modal when leaving the page
        $(document).on('mouseleave', function() {
            $('#documentLeavingMd').fadeIn();
            startCountdown();
        });

        // Hide the modal when clicking outside of it
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#documentLeavingMd .modal-body').length) {
                $('#documentLeavingMd').fadeOut();
                stopCountdown();
            }
        });

        function startCountdown() {
            let timeRemaining = 45;

            // Clear the existing interval before starting a new one
            stopCountdown();

            // Update the countdown timer every second
            countdownTimer = setInterval(function() {
                const countDownElement = $('#documentLeavingMd .countDown');

                if (timeRemaining <= 0) {
                    countDownElement.text('00:00');
                    clearInterval(countdownTimer);
                } else {
                    countDownElement.text(formatTime(timeRemaining));
                    timeRemaining--;
                }
            }, 1000);
        }

        function stopCountdown() {
            clearInterval(countdownTimer);
        }

        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            const seconds = time % 60;
            return `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
    });
    </script>
    <!-- Body leaving modal end -->
</body>

</html>