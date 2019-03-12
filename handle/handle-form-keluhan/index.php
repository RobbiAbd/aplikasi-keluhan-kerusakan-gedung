<?php 

include '../../koneksi.php';

	
	if (isset($_POST['nama']) AND isset($_POST['email']) AND isset($_POST['keterangan'])) {
		/* 
		jika semua form sudah 
		di isi maka akan
		inisialisasi di variabel
		*/ 
		if (strlen($_POST['nama']) > 15) { 
			die("Maaf nama anda kepanjangan , hanya  bisa max 15 karakter"); 
			} 
			else { 
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$kategori_keluhan = $_POST['kategori_keluhan'];
			$keterangan = $_POST['keterangan'];
			

			//mengambil waktu dari server
			$tanggal= mktime(date("m"),date("d"),date("Y"));
			date_default_timezone_set('Asia/Jakarta');
			$waktu = date("Y-m-d H:i:s");
			


			$nama_file = $_FILES['userfile']['name'];
			$ukuran_file = $_FILES['userfile']['size'];
			$tipe_file = $_FILES['userfile']['type'];
			$sumber = $_FILES['userfile']['tmp_name'];
			// foto yang di upload akan di simpan di folder datas_user/image/.. 
			
			$uploadOk = 1;



			if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
				$uploadOk = 1;
				//mengecek apakah file adalah jpg atau png
					if($ukuran_file <= 3000000){
						$uploadOk = 1;
							//memeriksa apakah foto lebih dari 3MB
					}else{
						$uploadOk = 0;
						die("ukuran file tidak boleh dari 3 MB");
					}
					}else {
						$uploadOk = 0;
						die("format file bukan png/jpeg");
					}
							if ($uploadOk == 0) {
							die("upload gagal , status = ".$uploadOk);
							}else {
					$temp = explode(".", $_FILES["userfile"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
					$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
					$target = '../../datas_user/image/';

					if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target.'/'.$nama_baru))
					{
								// jika kondisi ini berhasil
								// maka file foto akan di simpan
					}else {
						die("tidak bisa upload file ");
					}
				}

	}
	


	$status = 0;
	$query = $conn->query("INSERT INTO keluhan (nama,email,jenis_keluhan,foto_kerusakan,keterangan,status,waktu) VALUES ('$nama','$email','$kategori_keluhan','$nama_baru','$keterangan','$status','$waktu')") or die(mysqli_error($conn));

	if ($query) {
				//memeriksa query apakah bernilai TRUE
		//jika TRUE maka halaman akan di alihkan ke landing.php
		header("location:  ../../index.php?pesan=berhasil");
		

	}else {
		die("gagal melaporkan"); 
	}

}