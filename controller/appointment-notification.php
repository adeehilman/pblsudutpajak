<?php
include '../conf/config.php';
// Mengambil data dari database
$sql = "SELECT * FROM tb_appoinment WHERE appoinment_status = 'Accept'";
$result = mysqli_query($koneksi, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id_appoinment = $row['id_appoinment'];
    $id_konsultans = $row['id_konsultans'];
    $id_users = $row['id_users'];
    $appoinment_number = $row['appoinment_number'];
    $topik = $row['topik'];
    $hari = $row['hari'];
    $jam = $row['jam'];
    $jenis_pajak = $row['jenis_pajak'];
    $media = $row['media'];
    $appoinment_status = $row['appoinment_status'];
    $unique_id_user = $row['unique_id_user'];
    $unique_id_konsultan = $row['unique_id_konsultan'];

    // Mengirim email notifikasi
    $to = 'miminnekopoi@gmail.com';
    $subject = 'Notifikasi Appointment Accept';
    $message = "Appointment dengan nomor $appoinment_number telah diterima.";
    $headers = "From: email_pengirim@example.com\r\n";
    $headers .= "Reply-To: email_pengirim@example.com\r\n";
    $headers .= "Content-Type: text/html\r\n";

    ini_set('sendmail_from', 'sudutpajak01@gmail.com');

    // Mengirim email menggunakan fungsi mail()
    if (mail($to, $subject, $message, $headers)) {
        echo "Notifikasi email berhasil dikirim untuk Appointment dengan nomor $appoinment_number";
    } else {
        echo "Gagal mengirim notifikasi email untuk Appointment dengan nomor $appoinment_number";
    }
}

// Menutup koneksi ke database
mysqli_close($koneksi);
