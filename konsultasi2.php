<?php

session_start();


include('conf/config.php');
if (!isset($_SESSION['unique_id'])) {
    header("location: ../login.php?error=session_expired ");
}

require_once('controller/session_expired.php');
$query = mysqli_query($koneksi, "SELECT * FROM `tb_konsultan`");


// if (isset($_GET['bidang'])) {
//     $nomor = $_GET['bidang'];

//     $bidang = '';

//     switch ($nomor) {
//         case 1:
//             $bidang = 'PPh Badan';
//             break;
//         case 2:
//             $bidang = 'PPh Tahunan Pribadi';
//             break;
//         case 3:
//             $bidang = 'PPh Pasal 21';
//             break;
//         case 4:
//             $bidang = 'PPh Pasal 22 dan 23';
//             break;
//         case 5:
//             $bidang = 'PPh Pasal 25';
//             break;

//             // tambahkan case untuk bidang lainnya jika diperlukan
//         default:
//             $bidang = 'Bidang Lainnya';
//             break;
//     }

//     // Menggunakan $bidang yang telah diinisialisasi untuk query atau aksi lainnya

// }



?>


<!DOCTYPE html>
<html lang="en">

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
    <!-- <link rel="stylesheet" href="css/style2.css"> -->

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
    <!-- ======= Edit Section ======= -->
    <?php include './layout/navbar2.php'; ?>
    <!-- end navbar -->
    <!-- konsultasi -->
    <style>
        .carousel .carousel-indicators li {
            background-color: #7e9fbb;

        }

        .carousel .carousel-indicators li.active {
            background-color:
                #01a0f9;

        }
    </style>
    <section>
        <div class="container mt-0 pt-0">
            <div class="row border-bottom ">
                <div class="tutorialChatIlustration col-12 col-sm-5  p-3 border-end ">
                    <div class="row text-center justify-content-center my-5">

                        <div class="col-9">
                            <h5 class="fs-6 fw-bold">Chat Spesialis Pajak</h5>
                            <p class="mt-3">Layanan Para Ahli yang siap untuk membantu kamu.</p>
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators ">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/Konsultasi1.png" class="d-block w-80" alt="...">
                                        <div class="carousel-caption d-none">
                                            <h5>Second slide label</h5>

                                        </div>
                                        <p class="pb-20 font-weight-bold">Some representative placeholder content for the second slide.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/Pajak.png" class="d-block w-80" alt="...">
                                        <div class="carousel-caption d-none">


                                        </div>
                                        <p class="pb-20 font-weight-bold">Some representative placeholder content for the second slide.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/Konsultasi1.png" class="d-block w-80" alt="...">
                                        <p class="pb-20 font-weight-bold">Some representative placeholder content for the second slide.</p>
                                    </div>

                                </div>
                                <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button> -->
                            </div>

                        </div>

                    </div>
                    <div class="row my-5">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <h5 class="fs-6 fw-bold">Mengapa Chat Spesialis disini?</h5>
                            <div class="row mt-4 mb-auto">
                                <div class="col mengapaChatSpesialis">
                                    <img src="images/Layanan 1.png" width="50" alt="" class="float-left mr-2">
                                    <p class="fw-light">Satu aplikasi untuk berbagai kebutuhan, pajak hingga konsultasi</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mengapaChatSpesialis">
                                    <img src="images/Layanan 2.png" width="50" alt="" class=" float-left mr-2">
                                    <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mengapaChatSpesialis">
                                    <img src="images/Layanan 3.png" width="50px " alt="" class=" float-left mr-2">
                                    <p class="fw-light">Dapat diintegrasikan dengan asuransimu agar kebutuhan pajak online terjamin </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

                <?php include 'layout/konsultan_list.php'; ?>

            </div>
        </div>
    </section>
    <!-- END konsultasi -->
    <br><br><br>
    <div class="gray-bg">

        <!-- Konsultasi Start-->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last ">
                    <div class="image-wrap animate2">
                        <img class="wow slideInright" src="images/Konsultasi1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h6 class="title bg-left">Mengapa Pilih Tanya Spesialis disini?</h6>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed
                            etiam amet neque maecenas
                            laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non venenatis massa. Lacus
                            elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel phasellus semper
                            aliquet tellus</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konsultasi End-->
        <br><br><br>
        <!-- Konsultasi Start-->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="sec-title mb-36">
                        <h2 class="title bg-left">Mengapa Pilih Tanya Spesialis disini?</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed
                            etiam amet neque maecenas
                            laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non venenatis massa. Lacus
                            elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel phasellus semper
                            aliquet tellus. Hac purus risus ultricies vulputate. Convallis morbi suscipit velit eget
                            imperdiet sed.
                            Rutrum id amet fermentum quam vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis
                            amet arcu cursus sodales aliquam vitae, elit. Eu id orci et ac tincidunt vitae nulla. Ut
                            malesuada malesuada pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui.
                            Porta vulputate in nam purus ornare. Odio ut aenean praesent laoreet ullamcorper. Senec</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konsultasi End-->
        <!-- Konsultasi Start-->
        <br><br><br>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="sec-title mb-36">
                        <h2 class="title bg-left ">Cara Menghubungi Spesialis Secara Online?</h2>
                        <p class=" text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien
                            sedetiam ametneque maecenas laoreet. Non nec vel enim consequat vitae aliquam ut. Congue
                            ultrices nonvenenatis massa. Lacus elementum ut tellus ullamcorper nonNon nec vel enim consequat
                            vitae aliquam ut. Congueultrices nonvenenatis massa. Lacus elementum ut tellus ullamcorper
                            non,,<span>
                                <ol>
                                    <li>vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis amet arcu cursus
                                        sodales aliquam vitae, </li>
                                    <li>pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui </li>
                                    <li>Lacus elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel
                                        phasellus semper aliquet tellus </li>
                                </ol>
                            </span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed etiam amet neque
                            maecenas laoreet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konsultasi End-->

        <br><br><br><br><br>
    </div>






    <!-- The Modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->




    <!-- Footer Start -->
    <?php include './layout/footer.php'; ?>
    <!-- Footer End -->



    <!-- import modal sign up -->
    <?php include './layout/modal_signUp.php'; ?>

    <!--  -->
    <!-- All Js -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        // File JavaScript (modal.js)

        // Inisialisasi modal
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        });

        // Menampilkan modal
        $('#myModal').on('show.bs.modal', function() {
            console.log('Modal terbuka');
        });

        // Menyembunyikan modal
        $('#myModal').on('hide.bs.modal', function() {
            console.log('Modal tertutup');
        });
    </script>


</body>
<?php include './layout/modalLogin.php'; ?>

</html>