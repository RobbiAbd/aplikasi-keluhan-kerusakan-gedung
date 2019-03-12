<?php 

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "aplikasi_keluhan_kerusakan";

// mengecek koneksi

	//buat koneksi
$conn = new mysqli($servername,$username,$password,$dbname);



//cek koneksi
if ($conn->connect_error) {
	die("Koneksi Gagal : ". $conn->connect_error);
}