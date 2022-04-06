<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$nama_user 		= trim(mysqli_real_escape_string($con, $_POST['nama_user']));
	$username  		= trim(mysqli_real_escape_string($con, $_POST['username']));
	$no_str  			= trim(mysqli_real_escape_string($con, $_POST['no_str']));
	$umur  				= trim(mysqli_real_escape_string($con, $_POST['umur']));
	$rs_client  	= trim(mysqli_real_escape_string($con, $_POST['rs_client']));
	$alamat_camp  = trim(mysqli_real_escape_string($con, $_POST['alamat_camp']));
	$alamat_rumah = trim(mysqli_real_escape_string($con, $_POST['alamat_rumah']));
	$no_telp  		= trim(mysqli_real_escape_string($con, $_POST['no_telp']));
	$password  		= sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
	$level     		= '2';
	$sql = mysqli_query($con, "INSERT INTO tb_user VALUES('', '$nama_user', '$username', '$no_str', '$umur',' $rs_client', '$alamat_camp', '$alamat_rumah', '$no_telp', '$password', '$level')") or die(mysqli_error($con));

	if($sql){
		echo "<script>alert('Data berhasil ditambahkan'); window.location='data.php';</script>";
	}
	else{
		echo "<script>alert('Gagal tambah data, coba lagi'); window.location='generate.php';</script>";
	}
} 
