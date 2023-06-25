<?php 
$koneksi = mysqli_connect('localhost','root','','pajak');

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
