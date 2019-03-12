<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Keluhan Kerusakan Telkom University</title>

	<!-- Bootstrap css online -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- landing css -->
	<link rel="stylesheet" href="assets/css/landing.css">

</head>
<body>
		



		<!-- header page -->
		<div class="pos-f-t">
		<div class="collapse" id="navbarToggleExternalContent">
		<div class="bg-dark p-4">
		      <h5 class="h4">Masuk Sebagai Admin</h5>
		      	<a href="form/form-login/" role="button" class="btn btn-primary">Login</a>
		</div>
		</div>
		  	<nav class="navbar navbar-dark bg-dark">
		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
		      		<span class="navbar-toggler-icon"></span>
		    	</button>
		  	</nav>
		</div>
	

	
		<!-- judul landing page -->
		<div class="title-landing">
			<p class="text-center text-monospace">Aplikasi Keluhan Kerusakan Telkom University</p>
		</div>
		<div class="sub-title-landing">
			<p class="text-center font-weight-light"">Aplikasi ini untuk memudahkan anda melaporkan keluhan kerusakan gedung atau fasilitas lainnya , secara online.</p>
		</div>
	
		<!-- tombol landing page akses -->
		<div class="tombol">
		<center>
		<a href="form/form-keluhan/" role="submit" class="btn btn-primary">
			Laporkan keluhan
		</a>
		</center>
		</div>

		<!-- menampilkan alert jika kembalian berhasil -->
		<?php 
		if (isset($_GET['pesan'])) { // isset mengecek apakah var pesan ada
        if ($_GET['pesan'] == "berhasil") {
        	// tampilkan alert berhasil
            echo '<script>alert("keluhan anda berhasil di laporkan !")</script>';
        }
        else {
        	echo '<script>alert("gagal !")</script>';
        }
    	}

		 ?>











	<!-- Bootstrap JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>