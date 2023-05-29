<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include '../conf/config.php';
if (!isset($_SESSION['unique_id'])) {
    header("location: ../layout/modalLogin.php ");
}
$id = $_SESSION['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_appoinment AS a INNER JOIN tb_users AS u ON a.id_users = u.id_users INNER JOIN tb_konsultan AS k ON a.id_konsultans = k.id_konsultan WHERE a.id_users = '$id'");
$q2 = mysqli_fetch_assoc($query);

?>



<head>
    <script src="../css/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <link rel="stylesheet" href="../konsultan/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../konsultan/assets/css/style.css">

    <script src="../css/sweetalert2.min.js"></script>



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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="../css/rsmenu-main.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="../css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <link rel="stylesheet" href="../konsultan/assets/plugins/fontawesome/css/fontawesome.min.css">
    <!-- <link rel="stylesheet" href="../css/style2.css"> -->

    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="../css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>



<body>

    <!-- ======= Edit Section ======= -->

    <!-- end navbar -->
    <!-- konsultasi -->
    <nav aria-label="breadcrumb breadcrumb-lg">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../konsultasi.php">Konsultasi</a></li>
            <li class="breadcrumb-item"><a href="#">Akun</a></li>
            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
        </ol>
    </nav>
    <section>
        <div class="container-fluid mt-0 pt-0">
            <div class="row">

                <!-- Profile Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="../img/users_profil/<?= $_SESSION['foto_profil']; ?>" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h5><?= $_SESSION['nama']; ?></h3>
                                        <div class="patient-details">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget semi-bold">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="account.php">
                                            <i class="fa fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="appointment_user.php">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat.php">
                                            <i class="fa fa-comments"></i>
                                            <span>Chat</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fa fa-video"></i>
                                            <span>Zoom</span>
                                            <small class="unread-msg bold" style="background-color: orange; color: dark;">segera</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <large class="unread-msg bold" style="background-color: orange; color: dark;">segera</large>
                                            <i class="fa fa-globe"></i>
                                            <span>Forum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-settings.html">
                                            <i class="fa fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- / Profile Sidebar -->

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body pt-0">

                            <!-- Tab Menu -->
                            <nav class="user-tabs mb-4">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Medical Records</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_billing" data-toggle="tab">Billing</a>
                                    </li> -->
                                </ul>
                            </nav>
                            <!-- /Tab Menu -->

                            <!-- Tab Content -->
                            <div class="tab-content pt-0">

                                <!-- Appointment Tab -->
                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Doctor</th>
                                                            <th>Appt Date</th>
                                                            <th>Booking Day</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($query as $q2) : ?>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                            <img class="avatar-img rounded-circle" src="../img/konsultan_profil/<?= $q2['profil_pic']; ?>" alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html"><?= $q2['nama']; ?> <span><?= $q2['bidang']; ?></span></a>
                                                                    </h2>
                                                                </td>
                                                                <td><?php echo date("d F o", strtotime($q2['hari'])); ?> <span class="d-block text-info"><?php echo date(" H:i", strtotime($q2['jam'])); ?> WIB</span></td>
                                                                <td><?php echo date("l", strtotime($q2['hari'])); ?></td>
                                                                <td><?= $q2['jenis_pajak']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($q2['appoinment_status'] == "Booked") {
                                                                        echo '<span class="badge badge-pill bg-warning-light">Booked</span>';
                                                                    } else if ($q2['appoinment_status'] == "Cancel") {
                                                                        echo '<span class="badge badge-pill bg-danger-light">Cancel</span>';
                                                                    } else if ($q2['appoinment_status'] == "Accept") {
                                                                        echo '<span class="badge badge-pill bg-success-light">Accept</span>';
                                                                    } else if ($q2['appoinment_status'] == "Accept") {
                                                                        echo '<span class="badge badge-pill bg-success-light">Accept</span>';
                                                                    } else if ($q2['appoinment_status'] == "Reschedule") {
                                                                        echo '<span class="badge badge-pill bg-warning-light">Reschedule</span>';
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><a class="btn btn-warning bold btn-sm" data-toggle="modal" role="button" data-target="#modalApointment<?= $q2['appoinment_number'] ?>"></i>Reschedule</td>

                                                                <?php
                                                                if (time() >= $q2['appoinment_status']) {
                                                                    // Tampilkan tombol "Print"
                                                                    echo '
    <td class="text-right">
        <div class="table-action">
            <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                <i class="fas fa-print"></i> Print
            </a>
        </div>
    </td>
    ';
                                                                } else {
                                                                ?> <td class="text-right" disabled>
                                                                        <div class="table-action" disabled>
                                                                            <a class=" btn-sm bg-primary-dark" disabled>
                                                                                <i class="fa fa-paper-plane"></i> Chat
                                                                            </a>
                                                                        </div>
                                                                    </td>

                                                                <?php
                                                                }
                                                                ?>



                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Appointment Tab -->

                                <!-- Prescription Tab -->

                                <!-- /Prescription Tab -->

                                <!-- Medical Records Tab -->

                                <!-- /Medical Records Tab -->

                                <!-- Billing Tab -->

                                <!-- /Billing Tab -->

                            </div>
                            <!-- Tab Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END konsultasi -->
    <br><br><br>







    <!-- The Modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalApointment<?= $q2['appoinment_number'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col">
                                <button type="button" class="close text-end" data-dismiss="modal">&times;</button>
                                <div class="row justify-content-center">
                                    <div class="col-12 ps-0">
                                        <div class="w-100">
                                            <h5 class="mb-4 w-75 fw-bold">Reschedule Jadwal</h5>
                                        </div>
                                        <!-- forms -->
                                        <?php
                                        // $kons = $_GET['kons'];
                                        ?>
                                        <form id="appointmentForm" action="../controller/appointment-reschedule.php" method="post" class="mb-4">
                                            <div class="mb-2">
                                                <!-- Start Input Date , Start Time and End Time -->
                                                <div class="form-row">
                                                    <!-- Start Input Date -->
                                                    <div class="form-group col-md-6">
                                                        <label for="inputDate" class="semi-bold">Tanggal</label>
                                                        <input type="date" class="form-control" id="inputDate" name="tgl" value="<?= $q2['hari'] ?>" required />
                                                        <input type="text" class="form-control" name="id" value="<?= $q2['id_appoinment'] ?>" hidden />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputTime" class="semi-bold">Time</label>
                                                        <div class="input-group date" id="timePicker">
                                                            <input type="time" class="form-control timePicker" name="jam" value="<?= $q2['jam'] ?>">
                                                            <span class="input-group-addon"></span>
                                                        </div>
                                                    </div>

                                                    <!-- End Input Date -->
                                                </div>

                                                <!-- <div class="mb-2">
                                                    <label for="hariPertemuan" class="form-label">Rencana hari
                                                        pertemuan</label>
                                                    <input type="text" class="form-control py-2" name="tgl" placeholder="yyyy-mm-dd">
                                                    <label for="noHp" class="form-label">Rencana jam pertemuan</label>
                                                    <input type="text" class="form-control py-2 " name="jam" placeholder="mm-dd">
                                                </div> -->
                                                <label for="noHp" class="form-label semi-bold">Jenis Perpajakan</label>
                                                <select class="form-control mr-1" id="inputStartTimeHour" name="bidang" required>
                                                    <option value="<?= $q2['jenis_pajak']; ?>" selected><?= $q2['jenis_pajak']; ?></option>
                                                    <option value="PPh Badan">PPh Badan</option>
                                                    <option value="PPh Pasal 21">PPh Pasal 21</option>
                                                    <option value="PPh Pasal 25">PPh Pasal 25</option>
                                                    <option value="PPh Pasal 22 dan 23">PPh Pasal 22 dan 23</option>
                                                    <option value="PPh Tahunan Orang Pribadi">PPh Tahunan Orang Pribadi</option>

                                                </select>
                                                <small class="form-text text-muted">Pilih jenis pajak yang ingin anda konsultasikan.</small>

                                                <label for="noHp" class="form-label semi-bold">Media</label>
                                                <select class="form-control mr-1" id="inputStartTimeHour" name="media" required>
                                                    <option value="<?= $q2['media']; ?>" selected><?= $q2['media']; ?></option>
                                                    <option value="Live Chat">Live Chat</option>
                                                    <option value="Zoom" style="color: gray" disabled>Zoom (Segera)</option>



                                                </select>
                                                <div class="form-group mt-5 mb-3">
                                                    <!-- <button type="submit"
                                            class="form-control btn btn-primary rounded submit px-3 py-2 fw-bold">Buat
                                            Janji Temu Online</button> -->
                                                    <button type="button" class="btn btn-warning btn-md d-flex justify-content-center rounded submit bold" style="width: 100%;" onclick="showConfirmation()">Reschedule</button>

                                                </div>
                                                <small class="form-text text-muted">*Sesuai ketentuan yang berlaku</small>
                                        </form>
                                        <!-- forms END -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <?php include '../layout/footer.php'; ?>
    <!-- Footer End -->



    <!-- import modal sign up -->

    <script src="../js/sweetalert2@11.js"></script>
    <!--  -->
    <!-- All Js -->
    <!-- modernizr js -->
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="../js/jquery.min.js"></script>
    <!-- counter top js -->
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="../js/wow.min.js"></script>
    <!-- rsmenu js -->
    <script src="../js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Contact js -->
    <script src="../js/contact.form.js"></script>
    <!-- main js -->
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../css/sweetalert2.all.min.js"></script>
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="../js/main.js"></script>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script>
        var today = new Date();
        var minDate = today.setDate(today.getDate() + 1);

        $('#datePicker').datetimepicker({
            useCurrent: false,
            format: "MM/DD/YYYY",
            minDate: minDate
        });

        var firstOpen = true;
        var time;

        $('#timePicker').datetimepicker({
            useCurrent: false,
            format: "hh:mm A"
        }).on('dp.show', function() {
            if (firstOpen) {
                time = moment().startOf('day');
                firstOpen = false;
            } else {
                time = "01:00 PM"
            }

            $(this).data('DateTimePicker').date(time);
        });

        // Fungsi untuk menampilkan konfirmasi SweetAlert2

        // Fungsi untuk menampilkan konfirmasi SweetAlert2
        function showConfirmation() {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin mengubah data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika konfirmasi "Ya" diklik, submit form secara manual
                    document.getElementById('appointmentForm').submit();
                }
            });
        }
    </script>


</body>


</html>