<?php

use \src\Models\User;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Danoxv</title>
    <meta charset="utf-8">
    <style>
        html {
            scroll-behavior: smooth;

        }

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ">
                    <div class="site-logo">
                        <a href="/" class="font-weight-bold">Danoxv</a>
                    </div>
                </div>

                <div class="col-9 text-right" style="">

                    <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h2" style="color: #01ac74;"></span></a></span>
                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <?
                            if (isset($_SESSION['LogUser'])) {
                                echo 'Привет' . ' ' . $_SESSION['LogUser'][0]['name'];
                            } else {
                                echo 'Вы вошли как Гость';
                            }
                            ?>
                            <li class="active"><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/contactpage.php" class="nav-link">Contact</a></li>
                            <li><a href="/journalpage.php" class="nav-link">FAQ</a></li>
                            <?
                            if (!User::isGuest()) {
                                echo '  <li><a href="/Signout.php" class="nav-link">LogOut</a></li>';
                                echo '  <li><a href="/ChangePswPage" class="nav-link">change Password</a></li>';
                            } else {
                                echo '<li><a href="/loginpage.php" class="nav-link">Login</a></li>';
                                echo '<li><a href="/registrpage.php" class="nav-link">Register now</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>

                </div>


            </div>
        </div>

    </header>
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center">
                        <h1 class="mb-4 text-white">Danoxv Blog</h1>
                        <p class="mb-4">Buy, study, choose, figure it out, let's start together!</p>
                        <p><a href="#element_target" class="btn btn-primary btn-outline-white py-3 px-5">Let's
                                start!</a>
                        </p>
                        <h1 style="color:limegreen;">We are for World peace!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="element_target" class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h2 class="h4 mb-4">About Us</h2>
                    <p>We are a Mini company under development for further projects soon you will see interesting offers
                        for you!</p>
                    <p>Best regards, Denis!</p>
                    <p><a href="#ourworks" class="btn btn-primary text-white px-5">Our works</a></p>
                </div>
                <div class="col-md-4">
                    <img src="images/about_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-4">

                    <h2 class="h4 mb-4">Our expertise and skills</h2>

                    <div class="progress-wrap mb-4">
                        <div class="d-flex">
                            <span>Writing</span>
                            <span class="ml-auto">80%</span>
                        </div>
                        <div class="progress rounded-0" style="height: 7px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="55"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress-wrap mb-4">
                        <div class="d-flex">
                            <span>PHP</span>
                            <span class="ml-auto">70%</span>
                        </div>
                        <div class="progress rounded-0" style="height: 7px;">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="76"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress-wrap mb-4">
                        <div class="d-flex">
                            <span>Bootstrap</span>
                            <span class="ml-auto">34%</span>
                        </div>
                        <div class="progress rounded-0" style="height: 7px;">
                            <div class="progress-bar" role="progressbar" style="width: 34%;" aria-valuenow="93"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress-wrap mb-4">
                        <div class="d-flex">
                            <span>JavaScript</span>
                            <span class="ml-auto">3%</span>
                        </div>
                        <div class="progress rounded-0" style="height: 7px;">
                            <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="83"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 mx-auto text-center">
                    <h2 class="heading-29190">Our Programs and manuals</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
                        <h3>Open Server Panel</h3>
                        <p>It is a portable software environment created specifically for web developers, taking into
                            account their recommendations and wishes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
                        <h3> IDE PhpStorm</h3>
                        <p>PhpStorm for real
                            understands your code.</p>
                        <li>Поддержка основных фреймворков</li>
                        <li>Поддержка фронтенд-технологий</li>
                        <li>Встроенные инструменты для разработчиков</li>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
                        <h3>php.net</h3>
                        <p>Main site with official documentation for PHP.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
                        <h3>Робин Никсон: Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и
                            HTML5.</h3>
                        <p>The best book I've studied, I suggest you read it as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section"> <!-- НАШИ РАБОТЫ
     -->
        <div class="container">

            <div class="row mb-5">
                <div id="ourworks" class="col-md-7 mx-auto text-center">
                    <h2 class="heading-29190">Our Works</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="item web">
                        <a href="https://github.com/Danoxv/Captcha" class="item-wrap">
                            <span>Сaptcha, click to view the project</span>
                            <img class="img-fluid" src="img/img_1.jpg">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="item web">
                        <a href="https://github.com/Danoxv" class="item-wrap">
                            <span>You can follow us on GitHub</span>
                            <img class="img-fluid" src="img/img_21.jpg">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="item web">
                        <a href="https://github.com/Danoxv/Kharkiv-news-parser" class="item-wrap">
                            <span>Kharkiv news parser click to view the project</span>
                            <img class="img-fluid" src="img/img_3.jpg">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- END .site-section -->


    <div class="site-section bg-light"> <!-- ПОЛОСКА С ИНФОЙ О ПРОЕКТАХ -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="fact-39281 d-flex align-items-center">
                        <div class="wrap-icon mr-3">
                            <span class="icon-smile-o"></span>
                        </div>
                        <div class="text">
                            <span class="d-block"></span>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="fact-39281 d-flex align-items-center">
                        <div class="wrap-icon mr-3">
                            <span class="icon-coffee"></span>
                        </div>
                        <div class="text">
                            <span class="d-block">Many</span>
                            <span>Cups of Coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="fact-39281 d-flex align-items-center">
                        <div class="wrap-icon mr-3">
                            <span class="icon-code"></span>
                        </div>
                        <div class="text">
                            <span class="d-block"></span>
                            <span>Uncalculated number of lines of code</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="fact-39281 d-flex align-items-center">
                        <div class="wrap-icon mr-3">
                            <span class="icon-desktop_mac"></span>
                        </div>
                        <div class="text">
                            <span class="d-block">4</span>
                            <span>Project Finish</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ОТЗЫВЫ   <div class="site-section bg-light">-->
    <!--        <div class="container">-->
    <!---->
    <!--            <div class="row mb-5">-->
    <!--                <div class="col-md-7 mx-auto text-center">-->
    <!--                    <h2 class="heading-29190">Reviews</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 col-md-6">-->
    <!---->
    <!--                    <div>-->
    <!--                        <div class="person-pic-39219 mb-4">-->
    <!--                                                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">-->
    <!--                        </div>-->
    <!---->
    <!--                        <blockquote class="quote_39823">-->
    <!--                            <p>Temporarily out of reach.</p>-->
    <!--                        </blockquote>-->
    <!--                                                <p>&mdash; Chris Smith</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 col-md-6">-->
    <!---->
    <!---->
    <!--                    <div>-->
    <!--                        <div class="person-pic-39219 mb-4">-->
    <!--                                                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">-->
    <!--                        </div>-->
    <!--                        <blockquote class="quote_39823">-->
    <!--                            <p>Temporarily out of reach.</p>-->
    <!--                        </blockquote>-->
    <!--                                                <p>&mdash; Chris Smith</p>-->
    <!--                    </div>-->
    <!---->
    <!--                </div>-->
    <!--                <div class="col-lg-4 col-md-6">-->
    <!---->
    <!--                    <div>-->
    <!--                        <div class="person-pic-39219 mb-4">-->
    <!--                                                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">-->
    <!--                        </div>-->
    <!--                        <blockquote class="quote_39823">-->
    <!--                            <p>Temporarily out of reach.</p>-->
    <!--                        </blockquote>-->
    <!--                                                <p>&mdash; Chris Smith</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="site-section bg-white">
        <div class="container">
            <div class="row mb-5">
                <div id="faq" class="col-md-7 mx-auto text-center">
                    <h2 class="heading-29190">FAQ</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="/singlepage.php">
                            <img src="images/img_2.jpg" alt="Image"
                                 class="img-fluid">
                        </a>
                        <div class="post-entry-1-contents">

                            <h2><a href="/singlepage.php">Lorem ipsum dolor sit amet</a></h2>
                            <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="/singlepage.php">
                            <img src="images/img_2.jpg" alt="Image"
                                 class="img-fluid">
                        </a>
                        <div class="post-entry-1-contents">

                            <h2><a href="/singlepage.php">Lorem ipsum dolor sit amet</a></h2>
                            <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="/singlepage.php">
                            <img src="images/img_3.jpg" alt="Image"
                                 class="img-fluid">
                        </a>
                        <div class="post-entry-1-contents">

                            <h2><a href="/singlepage.php">Lorem ipsum dolor sit amet</a></h2>
                            <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-3">About Me</h2>
                    <p>Making life easier. </p>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="row">
                        <div class="col-lg-6 ml-auto">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#element_target">About Us</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="/contactpage.php">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="footer-heading mb-4">Connect</h2>
                            <div class="social_29128 white mb-5">
                                <a href="https://www.instagram.com/danoxv_/"><span class="icon-instagram"></span></a>
                                <a href="https://github.com/Danoxv"><span class="icon-github"></span></a>
                                <a href="https://vk.com/danoxv"><span class="icon-vk"></span></a>
                                <a href="https://t.me/Danoxv"><span class="icon-telegram"></span></a>
                            </div>
                            <h2 class="footer-heading mb-4">Newsletter</h2>
                            <form action="/contactpage.php" method="post" class="d-flex" class="subscribe">
                                <input type="text" name="user_email" class="form-control mr-3" placeholder="Email" value="">
                                <input type="submit" value="Send" class="btn btn-primary">
                            </form>

                        </div>

                    </div>

                </div>

            </div>
            <div class="alert alert-danger" role="alert" style=" text-align:center;margin-top: 10px;">
                <p style="margin-top: 0.1em; margin-bottom: 0.1em; ">Мы используем куки для упрощения вашей работы если не согласны с использованием куки покиньте сайт!</p></br>
                <p style="margin-top: 0.1em; margin-bottom: 0.1em; ">We use cookies to simplify your work if you do not agree with the use of cookies, leave the site!</p>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This Blog is made with <i class="icon-heart text-danger"
                                                                            aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<!--<script src="js/jquery.stellar.min.js"></script>-->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>

