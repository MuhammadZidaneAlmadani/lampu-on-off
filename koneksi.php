<?php
$host = "sql203.infinityfree.com"; //isi dengan MySQL Hostname kalian
$user = "if0_38336184"; //isi dengan user MySQL kalian
$password = "1GmAvepCWGBR8h"; //password vpanel kalian
$database = "if0_38336184_roney"; //database MySQL kalian

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
	echo "Koneksi ke database berhasil"; 
}
?>