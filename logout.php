<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['email']);
header('location:../konsultasi');
?>