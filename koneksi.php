<?php
// konfigurasi database
$host       =   "10.0.0.107";
$user       =   "addinanurul";
$password   =   "Addinnum_1998";
$database   =   "publikasi";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
if($koneksi->connect_error){
	die("Fatal Error: Can't connect to database: ". $conn->connect_error);
}
?>