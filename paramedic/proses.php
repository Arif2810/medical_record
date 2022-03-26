<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$nama_user = trim(mysqli_real_escape_string($con, $_POST['nama_user']));
	$username  = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password  = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
	$level     = '2';
	$sql = mysqli_query($con, "INSERT INTO tb_user VALUES('', '$nama_user', '$username', '$password', '$level')") or die(mysqli_error($con));

	if($sql){
		echo "<script>alert('Data berhasil ditambahkan'); window.location='data.php';</script>";
	}
	else{
		echo "<script>alert('Gagal tambah data, coba lagi'); window.location='generate.php';</script>";
	}
} 
