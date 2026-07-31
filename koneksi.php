<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$host = "localhost";
$user = 'root';
$password = 'root';
$database = "masjiddb";

$koneksi = mysqli_connect($host, $user, $password, $database);
?>