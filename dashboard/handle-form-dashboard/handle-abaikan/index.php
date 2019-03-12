<?php 

include '../../koneksi.php';

$id = $_GET['id'];

//jika true berarti laporan di abaikan
$abaikan = true;

$query = $conn->query("UPDATE keluhan set status_diabaikan = '$abaikan' where id = '$id' ");

if ($query) {
	header('location: ../../belum_dikerjakan.php');
}else {
	die("gagal proses abaikan.php");

}

 ?>