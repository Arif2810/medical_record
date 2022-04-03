<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid					 = Uuid::uuid4()->toString();
	$nama					 = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$no_str				 = trim(mysqli_real_escape_string($con, $_POST['no_str']));
	$no_surat_ijin = trim(mysqli_real_escape_string($con, $_POST['no_surat_ijin']));
	$umur 			   = trim(mysqli_real_escape_string($con, $_POST['umur']));
	$spesialis		 = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
	$alamat_camp 	 = trim(mysqli_real_escape_string($con, $_POST['alamat_camp']));
	$alamat_rumah	 = trim(mysqli_real_escape_string($con, $_POST['alamat_rumah']));
	$rs_client		 = trim(mysqli_real_escape_string($con, $_POST['rs_client']));
	$telp					 = trim(mysqli_real_escape_string($con, $_POST['telp']));
	mysqli_query($con, "INSERT INTO tb_dokter VALUES('$uuid', '$nama', '$no_str', '$no_surat_ijin', '$umur', '$spesialis', '$alamat_camp', '$alamat_rumah', '$rs_client', '$telp')") or die(mysqli_error($con));
	echo "<script>alert('Data berhasil ditambahkan');window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nama					 = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$no_str				 = trim(mysqli_real_escape_string($con, $_POST['no_str']));
	$no_surat_ijin = trim(mysqli_real_escape_string($con, $_POST['no_surat_ijin']));
	$umur 			   = trim(mysqli_real_escape_string($con, $_POST['umur']));
	$spesialis		 = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
	$alamat_camp 	 = trim(mysqli_real_escape_string($con, $_POST['alamat_camp']));
	$alamat_rumah	 = trim(mysqli_real_escape_string($con, $_POST['alamat_rumah']));
	$rs_client		 = trim(mysqli_real_escape_string($con, $_POST['rs_client']));
	$telp					 = trim(mysqli_real_escape_string($con, $_POST['telp']));
	mysqli_query($con, "UPDATE tb_dokter SET nama_dokter='$nama', no_str='$no_str', no_surat_ijin='$no_surat_ijin', umur='$umur', spesialis='$spesialis', alamat_camp='$alamat_camp', alamat_rumah='$alamat_rumah', rs_client='$rs_client', no_telp='$telp' WHERE id_dokter='$id'") or die(mysqli_error($con));
	echo "<script>alert('Data berhasil diubah');window.location='data.php';</script>";
}