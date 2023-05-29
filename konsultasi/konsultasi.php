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
    <!-- end navbar -->
    <!-- konsultasi -->
    <section>
        <div class="container mb-3 pt-5">
            <div class="row border-bottom ">
                <div class="tutorialChatIlustration col-12 col-sm-5  p-3 border-end ">
                    <div class="row text-center justify-content-center my-5">

                        <div class="col-9">
                            <h5 class="fs-6 fw-bold">Chat Spesialis Pajak</h5>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac dictum.</p>
                            <img src="img/ilustrasiChat1.png" alt="chatIustrasi1">
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac dictum.</p>
                            <div class="navigator">
                                <img src="img/dotBold.png" alt="dotBold">
                                <img src="img/dotLight.png" alt="dotBold">
                                <img src="img/dotLight.png" alt="dotBold">
                            </div>
                        </div>

                    </div>
                    <div class="row my-5">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <h5 class="fs-6 fw-bold">Mengapa Chat Spesialis disini?</h5>
                            <div class="row mt-4 mb-auto">
                                <div class="col mengapaChatSpesialis">
                                    <img src="img/iconMengapaChatSpesialis.png" alt="" class="float-left mr-2">
                                    <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor
                                        facilisi in</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mengapaChatSpesialis">
                                    <img src="img/iconMengapaChatSpesialis.png" alt="" class="float-left mr-2">
                                    <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mengapaChatSpesialis">
                                    <img src="img/iconMengapaChatSpesialis.png" alt="" class="float-left mr-2">
                                    <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor
                                        facilisi in quis amet </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

                <div class=" spesialis-chooser col-12 col-sm-7  px-5 mt-5 mb-5 ">
                    <div class="row mb-3">
                        <div class="col p-0">
                            <h4 class="fs-5 fw-bold mb-1">Rekomendasi Spesialis</h4>
                            <p class="">Konsultasi dengan spesialis siaga kami</p>
                        </div>
                    </div>



                    <div class="row panel-pakar">
                        <?php foreach ($query as $q) : ?>
                            <div class="col-12 col-sm-6 mb-3 mb-sm-4">
                                <div class="row">
                                    <div class="col-sm-4 p-0 m-0">
                                        <img src="konsultan/assets/img/konsultan/<?= $q['profil_pic']; ?>" alt="chatIustrasi1" class="m-0 p-0 rounded mx-auto d-block" style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-8 px-2 px-sm-3 mb-0">
                                        <h5 class="mb-0"><?= $q['nama']; ?></h5>
                                        <p class="mb-0"><?= $q['bidang']; ?></p>
                                        <button type="button" class="btn btn-light experienceBtn  mb-0 p-1"><?= $q['pengalaman']; ?></button>
                                        <br>
                                        <!--  <button class="btn btn-primary chatNow" type="button" data-toggle="modal"
                                        data-target=""><a href="konsultasi_previewConsultant.php"></a></button> -->
                                        <a class="btn btn-primary chatNow" href="konsultasi_previewConsultant.php?kons=<?= $q['id_konsultan'] ?>" role="button">Chat
                                            Sekarang</a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                    <!-- category -->
                    <br><br>
                    <div class="category-title">
                        <div class="row">
                            <div class="col p-0">
                                <h4 class="fs-5 fw-bold mb-2">Kategori Spesialis</h4>
                                <p class="">Pilih kategori spesialis yang sesuai kondisi</p>
                            </div>
                        </div>
                    </div>
                    <div class="div category">
                        <div class="row">
                            <div class="col-sm-6 d-flex align-items-center  mb-3">
                                <img src="img/3_badan.png" alt="" class="float-start">
                                <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php" role="button">
                                    <h6 class="text-secondary">PPh badan</h6>
                                </a>
                                <!-- <button class="btn ms-3 fs-6 text-start">PPh padan</button> -->
                            </div>
                            <div class="col-sm-6 d-flex align-items-center mb-3">
                                <img src="img/1_tahunanPribadi.png" alt="" class="float-start">
                                <a class="btn ms-2 fs-6 text-start " href="konsultasi2.php" role="button">
                                    <h6 class="text-secondary">PPh tahunan
                                        orang pribadi</h6>
                                </a>
                                <!-- <button class="btn ms-3 fs-6 text-start">PPh pahunan orang pribadi</button> -->
                            </div>
                            <div class="col-sm-6 d-flex align-items-center mb-3">
                                <img src="img/4_pasal21.png" alt="" class="float-start">
                                <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php" role="button">
                                    <h6 class="text-secondary">PPh pasal 21</h6>

                                </a>
                                <!-- <button class="btn ms-2 fs-6 text-start">PPh pasal 21</button> -->
                            </div>
                            <div class="col-sm-6 d-flex align-items-center mb-3">
                                <img src="img/2_22dan23.png" alt="" class="float-start">
                                <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php" role="button">
                                    <h6 class="text-secondary">PPh pasal 22
                                        dan 23</h6>
                                </a>
                                <!-- <button class="btn ms-2 fs-6 text-start">PPh pasal 22 dan 23</button> -->
                            </div>
                            <div class="col-sm-6 d-flex align-items-center mb-3">
                                <img src="img/5_pasal25.png" alt="" class="float-start">
                                <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php" role="button">
                                    <h6 class="text-secondary">PPh pasal 25</h6>
                                </a>
                                <!-- <button class="btn ms-2 fs-6 text-start">PPh pasal 25</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- END category -->




                </div>

            </div>
        </div>
    </section>
    <!-- END konsultasi -->
    <br><br><br>

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






    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



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
</body>

</html>