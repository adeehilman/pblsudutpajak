<?php
include 'config/connection.php';
$sql = mysqli_query($db, "SELECT * FROM tb_entry ");

$result = mysqli_fetch_assoc($sql);
echo $result['uid'];
