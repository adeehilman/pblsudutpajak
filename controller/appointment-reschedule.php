<script src="../css/sweetalert2.min.js"></script>
<link rel="stylesheet" href="../css/sweetalert2.min.css">

<?php


include('../conf/config.php');

$id = $_POST['id'];
$media = $_POST['media'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$bidang = $_POST['bidang'];
$reschedule = "Reschedule";

$time = $jam . ':00';

// echo $id;

mysqli_query($koneksi, "UPDATE `tb_appoinment` SET `jam`='$time', `hari`='$tgl', `media`='$media', `appoinment_status` = 'Reschedule' , `jenis_pajak`='$bidang' WHERE `id_appoinment`='$id'");
header('location: ../user/appointment_user.php');
