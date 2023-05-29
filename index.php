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
    <?php include './layout/modal_signUp.php'; ?>
    <!-- Header Section Start-->
    <header id="rs-header" class="">
        <!-- Header Menu Start -->
        <div class="menu-area menu-sticky sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo-area">
                            <a href="index.php"><img src="images/logo.PNG" style="width: 140px; right: 20px;" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav style="margin: 0px;" class="rs-menu">
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
                                                <li><a href=https://taxcenter-polibatam.id target="_blank" rel="noopener noreferrer">Tax Center</a></li>
                                            </ul>
                                        </li>
                                        <!-- Shop Menu End -->

                                        <!-- Pages Mega Menu Start -->
                                        <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="#">Peraturan</a>
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
                                        <li class="login-modal"><a href="#myModal">LOGIN</a>
                                        </li>
                            </div>
                            <!--  <div class="about-btn">
                                <a style="width: -30px; left: px;" class="readon radius" href="#">Login</a> 

                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Menu End -->
    </header>
    <!--Header Section End -->

    <!-- Slider Section Start Here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 97px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Gambar1.PNG" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Gambar2.JPEG" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Gambar3.PNG" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider Section end Here -->



    <!-- AboutSection Start-->
    <div class="container" id="profil">
        <br><br>
        <div class="row align-items-center">
            <div class="col-lg-6 order-last md-mb-40">
                <div class="image-wrap animate2">
                    <img class="wow slideInLeft" src="images/Pajak.PNG" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-36">
                    <h2 class="title bg-left">Sudut Pajak</h2>
                    <p>Kami "sudut pajak" merupakan layanan pajak berbasis website. Saat ini sudut pajak memberikan
                        layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk
                        memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum
                        terdaftar. Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami
                        peraturan perpajakan.</p>
                </div>
            </div>
        </div>
    </div>
    </div><!-- .container end -->
    <!-- About Section End-->

    <!-- Counter Section Start Here-->
    <br><br><br><br>
    <div id="neuron-counter-area" class="neuron-counter-area gradient-bg-section pt-70 pb-70">
        <div class="container">
            <div class="row neuron-count">
                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">6000</div>
                            <h5 class="counter-txt white-color">Konsultasi</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">400</div>
                            <h4 class="counter-txt white-color">Pelatihan&serifikasi</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">3500</div>
                            <h4 class="counter-txt white-color">Berita</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">8000</div>
                            <h4 class="counter-txt white-color">Kategori Usaha</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
    <!-- Counter Section End Here-->






    <!-- Services Section Start-->
    <div id="neuron-blog" class="neuron-blog home2-style pt-95 pb-175 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Layanan</h2><br>
                <div class="sec-title text-center mb-45">
                    <div class="rs-carousel owl-carousel wow" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="500" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="single-blog style2 white-bg ">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 1.PNG" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="#">Konsultasi</a></h3>
                                    <ul class="blog-meta">
                                        <li>Making it easier for the Industry to promote internships and job vacancies,
                                            as well as making it easier for the Industry to find the right candidate
                                            among Polibatam Students</li>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="#konsultasi">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg ">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 2.PNG" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="#">Pelatihan atau Sertifikasi</a></h3>
                                    <ul class="blog-meta">
                                        <li>Tracking student performance both in lectures (course completion) and
                                            outside lectures (Extracurricular and Independent Learning Activities)</li>
                                        <br><br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="#">Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 3.PNG" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="">Berita</a></h3>
                                    <ul class="blog-meta">
                                        <li>Displays the portfolio of each student. Make it easy for the industry to
                                            find and select the best students.</li><br><br><br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="#berita">Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 4.PNG" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="#">Kategori Perbidang Usaha</a></h3>
                                    <ul class="blog-meta">
                                        <li>Displays the portfolio of each alumni. Make it easy for the industry to find
                                            and select the best alumni from polibatam.</li><br><br><br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" id="konsultasi" href="#">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section End-->


    <!-- Konsultasi Start-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last md-mb-40">
                <div class="image-wrap animate2">
                    <img class="wow slideInright" src="images/Konsultasi1.PNG" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-36">
                    <h2 class="title bg-left">Aplikasi Online Pajak Solusi Pintar Mengelola Pajak Anda</h2>
                    <p>Mengelola pajak di Indonesia kini semakin mudah. Saatnya hitung, setor, dan lapor pajak
                        perusahaan Anda di satu aplikasi pajak online terpadu.</p>
                </div>

                <div class="about-btn">
                    <a class="readon radius" href="konsultasiGuest.php">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Konsultasi End-->


    <!-- Berita Start-->
    <div class="sec-title text-center mb-50" id="berita"><br><br><br><br><br><br><br><br><br>
        <div class="container2">
            <?php
            $sql = "SELECT * FROM articles";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $idx = 1;
            foreach ($row as $r) {
            ?>
                <div class="artikel-<?= $idx++; ?>">
                    <div class="card2">
                        <img class="thumb" src="Admin/cover_article/<?= $r['cover'] ?>" alt="">
                        <!-- <div class="thumb" style="background-image: url(http://localhost/PajakAdmin/<?= $r['cover'] ?>)"></div> -->

                        <article>
                            <h1 style="text-align: left;"><?= $r['judul'] ?></h1><br><br>
                            <p style="text-align: left;"><?= substr($r['isi'], 0, 180) ?> <a href="detail_berita.php?id=<?= $r['id'] ?>">read more</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:200px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019 <i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                <!-- <li style="margin-left: 150px; color: #01a0f9;"></li> -->
                            </ul>
                        </article>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- Berita End-->


    <!-- Contact Section Start -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="neuron-contact" class="neuron-contact style2 gray-bg pb-100 md-pb-80">
        <div style="padding-top: 120px;" class="container">
            <div class="row">
                <div class="col-lg-5 pr-30 md-pr-15">
                    <div class="contact-info box-shadow">
                        <div class="contact-info-icon">
                            <i class="flaticon-gps"></i>
                        </div>
                        <div class="sec-title mb-35">
                            <h2 class="title extra-none white-color">Contact With Us</h2>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-place"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Address</h4>
                                <p>Politeknik Negeri Batam <br>Batam, Kepulauan Riau</p>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Call Us</h4>
                                <a href="tel:+1(123)-456-7890">+628 88888888888</a>
                                <a href="tel:+1(123)-456-7890">+628 88888888888</a>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-mail-1"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Email Us</h4>
                                <a href="#">info@gmail.com</a>
                                <a href="#">contact@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-top: -70px;" class="col-lg-7 pl-30 md-pl-15">
                    <div class="contact-form pt-100 md-pt-50">
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="https://demo.auburnforest.com/html/neuron/demo/mailer.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Name" id="name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="email" placeholder="E-Mail" id="email" name="email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Phone Number" id="phone_number" name="phone_number" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Subject" id="subject" name="subject" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea placeholder="Your Message Here" rows="5" id="message" name="message" required=""></textarea>
                            </div>
                            <div class="form-button">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Start -->
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