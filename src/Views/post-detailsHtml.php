<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
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
    <title>Danoxv</title>
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
                        <a href="index.html" class="font-weight-bold">Danoxv</a>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-block"><a href="#"
                                                               class="text-white site-menu-toggle js-menu-toggle py-5 text-white" "><span
                                    class="icon-menu h3" style="color:#01ac74;"></span></a></span>
                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/contactpage.php" class="nav-link">Contact</a></li>
                            <li class="active"><a href="/journalpage.php" class="nav-link">FAQ</a></li>
                            <li><a href="/Signout.php" class="nav-link">LogOut</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>


    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
             style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <?php
                        $date = new DateTime($post['created_at']);
                        ?>
                        <span class="d-block mb-3 text-white"
                              data-aos="fade-up"><?php echo $date->format('M m,Y'); ?><span
                                    class="mx-2 text-primary">&bullet;</span><?php echo $post['title']; ?></span>
                        <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php echo $post['content']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="write-comment" role="tabpanel" aria-labelledby="write-comment-tab">

            <div class=" col-8 m-auto">
                <p class="mb-4">Вы можете стилизовать свой текст используя <a
                            href="https://www.markdownguide.org/basic-syntax/">эту
                        документацию</a></p>
                <p class="mb-4"><b>Введите ваш отзыв:</b></p>
            </div>
            <div class=" col-8 m-auto">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="#write-comment-tab" data-bs-toggle="tab"
                                data-bs-target="#write-comment"
                                type="button" role="tab" aria-controls="write-comment" aria-selected="true">Написать
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button onclick="convertToHtml()" class="nav-link" id="comment-preview-tab" data-bs-toggle="tab"
                                data-bs-target="#comment-preview" type="button"
                                role="tab" aria-controls="comment-preview" aria-selected="false">Предпросмотр
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="write-comment-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div id="comment-preview"></div>
                    </div>
                </div>

                <div class=" col-9 m-auto">
                    <form action="add-post-comment.php" method="post">
                        <div class="form-group">
                            <p><textarea id="new-comment-content" rows="10" cols="30" name='text'
                                         class="form-control"></textarea></p>
                        </div>
                        <input id="but" type='hidden' name='postId' value= <?= $postId ?>>
                        <div class="form-group">
                            <div class=" col-2 m-auto">
                                <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </form>

                    <form action="delete-all-comments.php" method="post">
                        <input type='hidden' name='postId' value= <?= "$postId" ?>>
                        <div class=" col-3 m-auto">
                            <input type="submit" value="Delete all comment Comment"
                                   class="btn btn-primary btn-md text-white">
                        </div>
                    </form>

                </div>
            </div>
            <div class="tab-pane fade" id="comment-preview" role="tabpanel" aria-labelledby="comment-preview-tab"></div>
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
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="/contactpage.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="footer-heading mb-4">Connect</h2>
                                <div class="social_29128 white mb-5">
                                    <a href="https://www.instagram.com/danoxv_/"><span
                                                class="icon-instagram"></span></a>
                                    <a href="https://github.com/Danoxv"><span class="icon-github"></span></a>
                                    <a href="https://vk.com/danoxv"><span class="icon-vk"></span></a>
                                    <a href="https://t.me/Danoxv"><span class="icon-telegram"></span></a>
                                </div>
                                <h2 class="footer-heading mb-4">Newsletter</h2>
                                <form action="user_email" method="post" class="d-flex" class="subscribe">
                                    <input type="text" name="user_email" class="form-control mr-3" placeholder="Email">
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

    <script>
        function convertToHtml() {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '/convert-md-to-html', true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    document.getElementById('comment-preview').innerHTML = this.responseText;
                }
            }

            var data = JSON.stringify({"lastname": document.getElementById('new-comment-content').value});
            xhr.send(data);
        }

    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
</body>
</html>