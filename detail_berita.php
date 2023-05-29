<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Home | Sudut Pajak </title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-main.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<style>
#rs-header .menu-sticky {
    background-color: #ffff;
    position: fixed;
    z-index: 999;
    margin: 0 auto;
    padding: 0;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
}
</style>

<body>
    <?php 
        
        include './connection.php';        
    ?>
    <?php
                $sql = "SELECT * FROM articles";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                // var_dump($row);die;
            ?>
    <!--Header Section Start-->
    <header id="rs-header" class="">
        <!-- Header Menu Start -->
        <div class="menu-area menu-sticky sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo-area">
                            <a href="index.php"><img src="images/logo.PNG" style="width: 140px; right: 20px;"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav style="margin-left: 40px;" class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item menu-item-has-children">
                                            <a href="#">Beranda</a>
                                        </li>
                                        <!-- End Home -->

                                        <li><a href="#profil">Profil</a></li>


                                        <li><a href="kalkulator.php">Kalkulator</a></li>

                                        <!-- Shop Menu Start -->
                                        <li class="menu-item-has-children"><a href="aplikasi pajak.php">Aplikasi
                                                Pajak</a>
                                            <ul class="sub-menu">
                                                <li><a href=https://taxcenter-polibatam.id target="_blank"
                                                        rel="noopener noreferrer">Tax Center</a></li>
                                            </ul>
                                        </li>
                                        <!-- Shop Menu End -->

                                        <!-- Pages Mega Menu Start -->
                                        <li class="rs-mega-menu mega-rs menu-item-has-children"> <a
                                                href="#">Peraturan</a>
                                            <ul class="mega-menu">
                                                <li class="mega-menu-container">
                                                    <div class="mega-menu-innner">
                                                        <div class="single-megamenu">
                                                            <ul class="sub-menu">
                                                                <li><a href="peraturan_pajak_pusat.php">Peraturan Pajak
                                                                        Pusat</a> </li>
                                                                <li><a href="peraturan_pajak_pusat.php">Peraturan Pajak
                                                                        Pusat</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-megamenu">
                                                            <ul class="sub-menu">
                                                                <li><a href="peraturan_pajak_daerah.php">Peraturan Pajak
                                                                        Daerah</a> </li>
                                                                <li><a href="peraturan_pajak_daerah.php">Peraturan Pajak
                                                                        Daerah</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-megamenu">
                                                            <ul class="sub-menu">
                                                                <li><a href="Putusan_Pengadilan_pajak.php">Putusan
                                                                        Pengadilan Pajak & MA</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> <!-- //.mega-menu -->
                                        </li>
                                        <!--Pages Mega Menu End -->

                                        <li class="menu-item-has-children"><a href="#">Glosarium</a>
                                        </li>
                            </div>
                            <div class="about-btn">
                                <a style="width: -30px; left: 60px;" class="readon radius" href="#">Login</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Menu End -->
    </header>
    <!--Header Section End-->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/breadcrumbs/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Blog Single Post</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i> Home</a></li>
                                <li>Blog Single Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Blog Section Start -->
    <div id="neuron-blog" class="neuron-blog pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-0 md-mb-40 col-padding-md">
                    <div class="blog-part">
                        <div class="col-lg-12 padding-0">
                            <!-- Single Article Part Start -->
                            <div class="single-article-part box-shadow mb-60">
                                <div class="blog-img">
                                    <a href="#"><img src="images/blog/berita1.JPG" alt=""></a>
                                </div>
                                <div class="single-blog sidebar">
                                    <div class="blog-details pb-0">
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019
                                            </li>
                                            <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                            <li><span>10</span>Comments</li>
                                        </ul>
                                        <div class="blog-desc">
                                            <h2 class="blog-title sidebar-title"><a href="#"><?= $row[0]['judul'] ?></a>
                                            </h2>
                                            <div class="article-content">
                                                <p><?= $row[0]['isi']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-60 col-padding-md">
                    <div class="blog-sidebar">
                        <div class="sidebar-search sidebar-single-part box-shadow mb-40">
                            <form class="search-bar">
                                <input type="text" placeholder="Search Here...">
                                <span>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </form>
                        </div>

                        <div class="sidebar-categories sidebar-single-part box-shadow mb-40">
                            <div class="sidebar-title">
                                <h3 class="title semi-bold mb-20">Categories</h3>
                            </div>
                            <ul>
                                <li><a href="#">Machine Learning</a></li>
                                <li><a href="#">Deep Learning</a></li>
                                <li><a href="#">Artificial Intelligence</a></li>
                                <li><a href="#">Computer Vision</a></li>
                                <li><a href="#">NLP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Footer Start -->
    <br><br><br><br><br><br><br>
    <footer id="rs-footer" class="rs-footer style2">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="about-widget pr-20">

                            <div class="footer-info">
                                <p class="footer-desc">system Information competency Students</p>
                            </div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column">
                        <h4 class="footer-title white-color">Work Hours</h4>
                        <p>10.00 AM - 6.00 PM , Monday - Saturday</p>
                        <p>Our Support and Sales team is available 24 * 7 to answer your queries</p>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="footer-menu">
                            <h4 class="footer-title white-color">Navigate</h4>
                            <div class="row">
                                <div class="col-lg-6 pr-0">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="mobile-app.html">Mobile App</a></li>
                                        <li><a href="software-demo.html">Software Demo</a></li>
                                        <li><a href="software-download.html">Software Download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 single-footer-column">
                        <div class="footer-menu">
                            <h4 class="footer-title white-color">Contact Us</h4>
                            <ul>
                                <p>Politeknik Negeri Batam <br>Batam, Kepulauan Riau <br> Indonesia</p>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>© Copyrights 2022 <a href="#">Polibatam</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- counter top js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- rsmenu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Contact js -->
    <script src="js/contact.form.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>