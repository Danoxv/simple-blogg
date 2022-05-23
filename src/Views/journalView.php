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
    <style>

    </style>
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

                <div class="col-9  text-right" style="">


                    <span class="d-inline-block d-lg-block"><a href="#"
                                                               class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                    class="icon-menu h2" style="color: #01ac74;"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li>
                            <?
                            if (isset($_SESSION['LogUser'])) {
                                echo 'Привет' . ' ' . $_SESSION['LogUser'][0]['name'];
                            } else {
                                echo 'Вы вошли как Гость';
                            }
                            ?>
                            </li>
                            <li ><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/contactpage.php" class="nav-link">Contact</a></li>
                            <li class="active"><a href="/journalpage.php" class="nav-link">FAQ</a></li>
                            <?
                            if (!User::isGuest()) {
                                echo '  <li><a href="/Signout.php" class="nav-link">LogOut</a></li>';
                                echo '  <li><a href="#" class="nav-link">change Password</a></li>';
                            } else {
                                echo '<li><a href="/loginpage.php" class="nav-link">Login</a></li>';
                                echo '<li><a href="/registrpage.php" class="nav-link">Register now</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
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
                    <h1 class="mb-4 text-white">Blog Posts</h1>
                    <p class="mb-4">You can leave your comment or create a new post.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<?
//echo '<table border="1">';
//echo '<head>';
//echo '<meta charset="utf-8">';
//echo '</head>';
//echo '<form method="post" action="create-post.php">';
//echo "<td><input type='text' name='title' placeholder= 'введите заголовок' ></td>";
//echo "<td><input type='text' name='content' placeholder= 'введите Контент' ></td>";
//
//echo '<td>' . '<button type="submit">Добавить</button>' . '</td>';
//echo '</form>';
//echo '</table>';
?>

<div class="site-section bg-light">

    <div class="container">


        <form method="post" action="create-post.php">
            <div class='form-group row'>
                <div class="col-md-6 mb-4">
                    <td><input type='text' class='form-control' name='title' placeholder="Send Title"></td>
                </div>
                <div class="col-md-6 mb-4 ">
                    <td><input type='text' class='form-control' name='content' placeholder="Send Content"></td>
                </div>
                    <div class="col-md-6" >
                        <input  style=" position: relative;left:280px;" type="submit" class="btn btn-block btn-primary text-white py-2 px-5"
                               value="Добавить">
                    </div>
            </div>
        </form>


        <div class="row">

            <?php
            foreach ($posts as $post) {

                if (isCanEditPost($_SESSION['LogUser'] ?? [], $post)) {
                    printEditablePost($post, $authors);
                } else {
                    printReadOnlyPost($post, $authors);
                }
            }
            ?>
        </div>
    </div>

</div>


<div class="col-12 mt-5 text-center">
    <span class="p-3">1</span>
    <a href="#" class="p-3">2</a>
    <a href="#" class="p-3">3</a>
    <a href="#" class="p-3">4</a>
</div>

</div>
</div> <!-- END .site-section -->


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
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="https://t.me/Danoxv">Contact Us</a></li>
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
<!--    <script src="js/jquery.stellar.min.js"></script>-->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>

