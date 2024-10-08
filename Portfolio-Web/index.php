<?php

session_start();
include "./config/database.php";

$user_query = "SELECT * FROM users";
$user_connect = mysqli_query($db, $user_query);
$list = mysqli_fetch_assoc($user_connect);

$link_query = "SELECT * FROM links";
$link_connect = mysqli_query($db, $link_query);
$link = mysqli_fetch_assoc($link_connect);

$services_query = "SELECT * FROM services WHERE status='active'";
$services = mysqli_query($db, $services_query);

$portfolio_query = "SELECT * FROM portfolios WHERE status='active'";
$portfolios = mysqli_query($db, $portfolio_query);

$education_query = "SELECT * FROM educations WHERE status='active'";
$educations = mysqli_query($db, $education_query);

$testimonials_query = "SELECT * FROM testimonials WHERE status='active'";
$testimonials = mysqli_query($db, $testimonials_query);

$feedback_query = "SELECT * FROM feedbacks WHERE status='active'";
$feedbacks = mysqli_query($db, $feedback_query);



// if (isset($_SESSION['auth_id'])) {
//     $id = $_SESSION['auth_id'];

//     $user_query = "SELECT * FROM users WHERE id='$id'";
//     $user_connect = mysqli_query($db, $user_query);
//     $list = mysqli_fetch_assoc($user_connect);

//     $link_query = "SELECT * FROM links WHERE user_id='$id'";
//     $link_connect = mysqli_query($db, $link_query);
//     $link = mysqli_fetch_assoc($link_connect);

//     $services_query = "SELECT * FROM services WHERE status='active'";
//     $services = mysqli_query($db, $services_query);

//     $portfolio_query = "SELECT * FROM portfolios WHERE status='active'";
//     $portfolios = mysqli_query($db, $portfolio_query);

//     $education_query = "SELECT * FROM educations WHERE status='active'";
//     $educations = mysqli_query($db, $education_query);
// }



?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="./front_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="./front_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./front_assets/css/animate.min.css">
    <link rel="stylesheet" href="./front_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./front_assets/css/fontawesome-all.min.css">

    <!-- font-awesome cnd link 6.6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font-awesome cnd link 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="./front_assets/css/flaticon.css">
    <link rel="stylesheet" href="./front_assets/css/slick.css">
    <link rel="stylesheet" href="./front_assets/css/aos.css">
    <link rel="stylesheet" href="./front_assets/css/default.css">
    <link rel="stylesheet" href="./front_assets/css/style.css">
    <link rel="stylesheet" href="./front_assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.html" class="navbar-brand logo-sticky-none"><img src="./front_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.html" class="navbar-brand s-logo-none"><img src="./front_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">Service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        <?php if (isset($_SESSION['auth_id'])) : ?>
                                            <li class="nav-item"><a class="nav-link" href="./authetication/login.php">Dashboard</a></li>
                                        <?php else: ?>
                                            <li class="nav-item"><a class="nav-link" href="./authetication/login.php">Loging/Register</a></li>
                                        <?php endif; ?>

                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="./front_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab <i class=" fa fa-github" aria-hidden="true"></i>"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">

                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?= $list['name'] ?></h2>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">
                                I'm <span class="text-uppercase"><?= $list['name'] ?></span>,
                                a professional web developer with long time experience in this field​.
                            </p>

                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="<?= $link['facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?= $link['github'] ?>" target="_blank"><i class="fab fa-github"></i></a></li>
                                    <li><a href="<?= $link['linkedin'] ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="<?= $link['whatsapp'] ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right mb-5">
                            <img class="img-fluid" src="./front_assets/img/banner/banner_img.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="./front_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="./front_assets/img/banner/banner_img2.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p>Hello, my name is Anik Mondal. I am a Jr. PHP & Laravel Developer . But I mostly work in frontend development I have more than 1 year experience in web design and web development.I have skills in HTML5, CSS3, bootstrap, tailwind css, javaScript, Es6, PHP, Laravel, Mysqul etc.</p>
                            <h3>Education:</h3>
                        </div>
                        <!-- Education Item -->
                        <?php
                        foreach ($educations as $education) :
                        ?>
                            <div class="education">
                                <div class="year"><?= $education['year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $education['title']  ?> </span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $education['ration'] ?>%;" aria-valuenow="<?= $education['ration'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                        <!-- End Education Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($services as $service) :
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['icon']; ?>"></i>
                                <h3><?= $service['title']; ?></h3>
                                <p>
                                    <?= $service['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($portfolios as $portfolio) :
                    ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img style="height: 500px; object-fit: cover;" class="img-fluid" src="./public/portfolio/<?= $portfolio['image']; ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $portfolio['subtitle'] ?></span>
                                    <h4><a href="portfolio-single.html">
                                            <?= $portfolio['title'] ?>
                                        </a></h4>
                                    <a href="./dashboard/portfolio/single_portfolio.php?id=<?= $portfolio['id'] ?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php
                        foreach ($feedbacks as $feedback) :
                        ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $feedback['icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $feedback['description'] ?></span></h2>
                                        <span><?= $feedback['title'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">

                            <?php
                            foreach ($testimonials as $testimonial) :
                            ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img class="rounded-circle img-fluid" style="width: 70px; height: 70px;" src="./public/testimonial/<?= $testimonial['image'] ?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $testimonial['description'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testimonial['title'] ?></h5>
                                            <span><?= $testimonial['subtitle'] ?></span>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="./front_assets/img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>I am a PHP & Laravel Developer with a strong focus on clean coding. Software Development seeks to attract, inspire, create desires, and motivate people to respond to messages, with the aim of making a favorable impact.</p>
                            <h5>OFFICE IN <span class="text-uppercase">Dhaka</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span>Nawabganj, Dhaka, Bangladesh</li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span>+880 193-165-4590</li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>anikmondol558363@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="./dashboard/email/action.php" method="post">
                                <input type="text" placeholder="your name *" name="name">
                                <input name="email" type="email" placeholder="your email *" style="text-transform: lowercase !important;">
                                <textarea name="body" id="message" placeholder="your message *"></textarea>
                                <button type="submit" class="btn" name="email_sender">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="./front_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./front_assets/js/popper.min.js"></script>
    <script src="./front_assets/js/bootstrap.min.js"></script>
    <script src="./front_assets/js/isotope.pkgd.min.js"></script>
    <script src="./front_assets/js/one-page-nav-min.js"></script>
    <script src="./front_assets/js/slick.min.js"></script>
    <script src="./front_assets/js/ajax-form.js"></script>
    <script src="./front_assets/js/wow.min.js"></script>
    <script src="./front_assets/js/aos.js"></script>
    <script src="./front_assets/js/jquery.waypoints.min.js"></script>
    <script src="./front_assets/js/jquery.counterup.min.js"></script>
    <script src="./front_assets/js/jquery.scrollUp.min.js"></script>
    <script src="./front_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./front_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./front_assets/js/plugins.js"></script>
    <script src="./front_assets/js/main.js"></script>
</body>

</html>