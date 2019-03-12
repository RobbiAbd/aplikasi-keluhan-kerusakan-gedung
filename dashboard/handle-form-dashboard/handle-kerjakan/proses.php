<?php 
include '../../koneksi.php';

if (isset($_POST['nama_teknisi']) && isset($_POST['tanggal'])) {//mengecek apakah nama_teknisi & tanggal ada

  $nama_teknis = $_POST['nama_teknisi'];
  $estimasi = $_POST['tanggal'];
  $status = true;
  $id = $_POST['id'];

      //mengambil waktu dari server
      $tanggal= mktime(date("m"),date("d"),date("Y"));
      date_default_timezone_set('Asia/Jakarta');
      $waktu = date("Y-m-d H:i:s");

  
  $query = $conn->query("UPDATE keluhan set status = '$status',tgl_dikerjakan = '$waktu',nama_teknisi = '$nama_teknis',estimasi = '$estimasi' where id = '$id' ");

}else {
  die("data tidak boleh kosong !");
}

  if ($query) {
    header("location: ../../belum_dikerjakan.php");
  }else {
    die("gagal memproses data ");
  }
  
  


 ?>
