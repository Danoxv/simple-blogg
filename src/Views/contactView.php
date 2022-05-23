<?php

use \src\Models\User;

?>
<!doctype html>
<html lang="en">

<head>
    <title>Danoxv</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="../../public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../public/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../public/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../public/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">
<!---->
<!--    <div class="site-mobile-menu site-navbar-target">-->
<!--        <div class="site-mobile-menu-header">-->
<!--            <div class="site-mobile-menu-close mt-3">-->
<!--                <span class="icon-close2 js-menu-toggle"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="site-mobile-menu-body"></div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <header class="site-navbar site-navbar-target" role="banner">-->
<!---->
<!--        <div class="container">-->
<!--            <div class="row align-items-center position-relative">-->
<!---->
<!--                <div class="col-3 ">-->
<!--                    <div class="site-logo">-->
<!--                        <a href="indexView.php" class="font-weight-bold">Danoxv</a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-9  text-right" style="">-->
<!---->
<!---->
<!--                    <span class="d-inline-block d-lg-block"><a href="#"-->
<!--                                                               class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span-->
<!--                                    class="icon-menu h2 " style="color: #01ac74;"></span></a></span>-->
<!---->
<!---->
<!--                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">-->
<!--                        <ul class="site-menu main-menu js-clone-nav ml-auto ">-->
<!--                            --><?//
//
//                            if (!empty($_SESSION['LogUser'])) {
//                                echo 'Привет' . ' ' . $_SESSION['LogUser'][0]['name'];
//                            } else {
//                                echo 'Вы вошли как Гость';
//                            }
//                            ?>
<!--                            <li><a href="/" class="nav-link">Home</a></li>-->
<!--                            <li class="active"><a href="/contactpage.php" class="nav-link">Contact</a></li>-->
<!--                            <li><a href="/journalpage.php" class="nav-link">FAQ</a></li>-->
<!--                            --><?//
//                            if (!User::isGuest()) {
//                                echo '  <li><a href="/Signout.php" class="nav-link">LogOut</a></li>';
//                                echo '  <li><a href="#" class="nav-link">change Password</a></li>';
//                            } else {
//                                echo '<li><a href="/loginpage.php" class="nav-link">Login</a></li>';
//                                echo '<li><a href="/registrpage.php" class="nav-link">Register now</a></li>';
//                            }
//                            ?>
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
<!--                </ul>-->
<!--                </nav>-->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!--</div>-->
<!---->
<!--</header>-->
<!---->
<!--<div class="ftco-blocks-cover-1">-->
<!--    <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">-->
<!--        <div class="container">-->
<!--            <div class="row align-items-center justify-content-center">-->
<!--                <div class="col-md-7 text-center">-->
<!--                    <h1 class="mb-4 text-white">Contact Us</h1>-->
<!--                    <p class="mb-4">If you have any suggestions for improving the blog, you can write to me by mail-->
<!--                        in the form below-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="site-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 mb-5">-->
<!--                    <h6>Если вас переносит на главную после того как вы нажали на-->
<!--                        кнопку отправить значит вы успешно отправили сообщение </h6>-->
<!--                    <form action="/HandlerContactpage" method="post">-->
<!--                        <div class="form-group row">-->
<!--                            <div class="col-md-6 mb-4 mb-lg-0">-->
<!--                                <input type="text" name="user_name" class="form-control" placeholder="First name">-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <input type="text" class="form-control" name="user_surname" placeholder="Surname">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <div class="col-md-12">-->
<!--                                <input type="text" class="form-control" name="user_email" placeholder="Email address"-->
<!--                                       value= --><?//
//
//                                       if (!empty($_COOKIE['Email'])) {
//                                           echo $_COOKIE['Email'];
//                                       } else {
//                                           unset($_COOKIE['Email']);
//                                       }
//
//                                       ?><!-- >-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <div class="col-md-12">-->
<!--                                    <textarea name="user_msg" id="" class="form-control"-->
<!--                                              placeholder="Write your message."-->
<!--                                              cols="30" rows="10"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group row">-->
<!--                            <div class="col-md-6 mr-auto">-->
<!--                                <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5">Send Message</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--                <div class="col-lg-4 ml-auto">-->
<!--                    <div class="bg-white p-3 p-md-5">-->
<!--                        <h3 class="text-black mb-4">Contact Info</h3>-->
<!--                        <ul class="list-unstyled footer-link">-->
<!--                            <li class="d-block mb-3">-->
<!--                                <span class="d-block text-black">Address:</span>-->
<!--                                <span>Russia Moscow</span></li>-->
<!--                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>denisiv.andreevi@mail.ru</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div> <!-- END .site-section -->-->
<!---->
<!---->
<!--    <footer class="site-footer">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-3">-->
<!--                    <h2 class="footer-heading mb-3">About Me</h2>-->
<!--                    <p>Making life easier. </p>-->
<!--                </div>-->
<!--                <div class="col-lg-8 ml-auto">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 ml-auto">-->
<!--                            <h2 class="footer-heading mb-4">Quick Links</h2>-->
<!--                            <ul class="list-unstyled">-->
<!--                                <li><a href="#">Terms of Service</a></li>-->
<!--                                <li><a href="#">Privacy</a></li>-->
<!--                                <li><a href="https://t.me/Danoxv">Contact Us</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <h2 class="footer-heading mb-4">Connect</h2>-->
<!--                            <div class="social_29128 white mb-5">-->
<!--                                <a href="https://www.instagram.com/danoxv_/"><span-->
<!--                                            class="icon-instagram"></span></a>-->
<!--                                <a href="https://github.com/Danoxv"><span class="icon-github"></span></a>-->
<!--                                <a href="https://vk.com/danoxv"><span class="icon-vk"></span></a>-->
<!--                                <a href="https://t.me/Danoxv"><span class="icon-telegram"></span></a>-->
<!--                            </div>-->
<!--                            <h2 class="footer-heading mb-4">Newsletter</h2>-->
<!--                            <form action="/contactpage.php" method="post" class="d-flex" class="subscribe">-->
<!--                                <input type="text" name="user_email" class="form-control mr-3" placeholder="Email"-->
<!--                                       value="">-->
<!--                                <input type="submit" value="Send" class="btn btn-primary">-->
<!--                            </form>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row pt-5 mt-5 text-center">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="border-top pt-5">-->
<!--                        <p>-->
<!--                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>-->
<!--                            All rights reserved | This Blog is made with <i class="icon-heart text-danger"-->
<!--                                                                            aria-hidden="true"></i>-->
<!--                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->
<!---->
    <div class="alert alert-warning" role="alert"  style="text-align:center;margin-top: 10px;">
        Эта директория временно недоступна!
    </div>
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

<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>

