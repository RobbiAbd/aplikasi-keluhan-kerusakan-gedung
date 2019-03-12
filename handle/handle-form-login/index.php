<?php 

//koneksi
include '../../koneksi.php';
session_start();
    if(isset($_POST['submit'])) {
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$sql_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    	if(mysqli_num_rows($sql_login)>0) {
    		$row_akun = mysqli_fetch_array($sql_login);
    		$_SESSION['akun_id'] = $row_akun['id'];
    		$_SESSION['akun_username'] = $row_akun['username'];
    		$_SESSION['akun_nama'] = $row_akun['nama'];
    		header("location: ../../dashboard/index.php");
    	}else {
    		header("location: ../../index.php");
    	}
    }

