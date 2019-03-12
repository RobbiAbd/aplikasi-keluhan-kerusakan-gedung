<?php 
include '../../koneksi.php';
include '../../function/tampil-data-table.php';


//mengambil id dari parameter
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$id = $_GET['id'];



//menyortir data sesuai id 
$sql = $conn->query("SELECT * FROM keluhan WHERE id ='$id' and status_abaikan = 1");

if ($row = $sql->num_rows > 0) {
	$data = $sql->fetch_assoc();

	//inisialisasi folder tempat image 
	$target = "../../../datas_user/image/".$data['foto_kerusakan'];

	if (file_exists($target)) {
		unlink($target); //menghapus foto
	}

	if (file_exists($target)) {
		echo "menghapus gagal".$target;
	}
}



$query = $conn->query("DELETE from keluhan where id = '$id' ") or die(mysqli_error($conn)) ;

if ($query) {
	  header("location: ../../diabaikan.php");
}

else {

	die("proses hapus data user gagal !");

}