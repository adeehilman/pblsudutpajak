<?php


include('../conf/config.php');

$topik = $_POST['topik'];
$unique_id = $_POST['unique_id'];
$unique_id_k = $_POST['unique_id_k'];
$id_kon = $_POST['konsultans'];
$id_user = $_POST['users'];
$media = $_POST['media'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$bidang = $_POST['bidang'];

$unik = strtoupper(substr(uniqid('', true), 0, 3));


$xx = $unik . $unique_id;
$time = $jam . ':00';

// echo $topik . $id_kon, $tgl, $time, $media, $bidang;

mysqli_query($koneksi, ("INSERT INTO `tb_appoinment`(`id_appoinment`, `id_konsultans`, `id_users`, 
`appoinment_number`, `topik`, `hari`, `jam`, `jenis_pajak`, `media`, `appoinment_status`,`unique_id_user`) VALUES 
(NULL,'$id_kon','$id_user','$xx','$topik','$tgl','$time','$bidang','$media','Booked','$unique_id')"));

$q2 = mysqli_query($koneksi, ("INSERT INTO `tb_chat`(`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES 
(NULL,'','$uniquq_id_k','$unique_id',NOW()"));

header('location: ../user/appointment_user.php');
