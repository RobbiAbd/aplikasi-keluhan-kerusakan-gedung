<?php 


 function DataTableBelumDikerjakan()
{
	include '../koneksi.php';
	$status = false;
	$query = $conn->query(" SELECT * from keluhan where status = '$status' and status_diabaikan = 0  ") or die(mysql_error($conn)) ;

	$no = 1;
	if ($row = $query->num_rows > 0) {
		while ($data = $query->fetch_assoc()) {
			if ($data['status'] == 0) {
				$hasil = "belum dikerjakan";
			}
		echo 
		'<tr>
		<td><b>'.$no.'</b></td>
		<td>'.$data['nama'].'</td>
		<td>'.$data['id'].'</td>
		<td>'.$data['email'].'</td>
		<td>'.$data['jenis_keluhan'].'</td>
		<td><img src="../datas_user/image/'.$data['foto_kerusakan'].' " width="50" height="50" alt="..." /></td>
		<td>'.$data['keterangan'].'</td>
		<td>'.$hasil.'</td>
		<td><center><a href="handle-form-dashboard/handle-hapus-table/index.php?id='.$data["id"].' " class="btn btn-danger" role="submit">DELETE</a></center></td>
		</tr>
		';
		$no++;
	}
}
	else {
		die("Data Kosong");
	}
}


 function DataTableSedangDikerjakan()
{
	include '../koneksi.php';
	$status = true;
	$query = $conn->query(" SELECT * from keluhan where status = '$status' and status_diabaikan = 0 	 ") or die(mysql_error($conn)) ;

	$no = 1;
	if ($row = $query->num_rows > 0) {
		while ($data = $query->fetch_assoc()) {
			if ($data['status'] == 1) {
				$hasil = "sedang dikerjakan";
			}
		echo 
		'<tr>
		<td><b>'.$no.'</b></td>
		<td>'.$data['nama'].'</td>
		<td>'.$data['id'].'</td>
		<td>'.$data['email'].'</td>
		<td>'.$data['jenis_keluhan'].'</td>
		<td><img src="../datas_user/image/'.$data['foto_kerusakan'].' " width="50" height="50" alt="..." /></td>
		<td>'.$data['keterangan'].'</td>
		<td>'.$hasil.'</td>
		<td><center><a href="handle-form-dashboard/handle-hapus-table/index.php?id='.$data["id"].' " class="btn btn-danger" role="submit">DELETE</a></center></td>
		</tr>
		';
		$no++;
	}
}
	else {
		die("Data Kosong");
	}
}

