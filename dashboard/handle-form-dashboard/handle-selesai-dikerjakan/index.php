<?php 

include '../../koneksi.php';

$id = $_GET['id'];

      //mengambil waktu dari server
      $tanggal= mktime(date("m"),date("d"),date("Y"));
      date_default_timezone_set('Asia/Jakarta');
      $waktu = date("Y-m-d");

//jika true berarti laporan di abaikan
$abaikan = true;

$query = $conn->query("UPDATE keluhan set status_selesai = '$abaikan' , tgl_selesai_dikerjakan = '$waktu' where id = '$id' ");

if ($query) {
	header('location: ../../dikerjakan.php');
}else {
	die("gagal menyelesaikan keluhan");

}

 ?>