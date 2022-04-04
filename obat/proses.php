<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid 							= Uuid::uuid4()->toString();
	$nama 							= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$dosis 							= trim(mysqli_real_escape_string($con, $_POST['dosis']));
	$komposisi 					= trim(mysqli_real_escape_string($con, $_POST['komposisi']));
	$ket 								= trim(mysqli_real_escape_string($con, $_POST['ket']));
	$tgl_kadaluarsa 		= trim(mysqli_real_escape_string($con, $_POST['tgl_kadaluarsa']));
	$efek_samping 			= trim(mysqli_real_escape_string($con, $_POST['efek_samping']));
	$perusahaan_pembuat = trim(mysqli_real_escape_string($con, $_POST['perusahaan_pembuat']));
	mysqli_query($con, "INSERT INTO tb_obat VALUES('$uuid', '$nama', '$dosis', '$komposisi ', '$ket', '$tgl_kadaluarsa', '$efek_samping', '$perusahaan_pembuat')") or die(mysqli_error($con));
	echo "<script>alert('Data berhasil ditambahkan');window.location='data.php';</script>";
	// echo "<script>window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id 								= $_POST['id'];
	$nama 							= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$dosis 							= trim(mysqli_real_escape_string($con, $_POST['dosis']));
	$komposisi 					= trim(mysqli_real_escape_string($con, $_POST['komposisi']));
	$ket 								= trim(mysqli_real_escape_string($con, $_POST['ket']));
	$tgl_kadaluarsa 		= trim(mysqli_real_escape_string($con, $_POST['tgl_kadaluarsa']));
	$efek_samping 			= trim(mysqli_real_escape_string($con, $_POST['efek_samping']));
	$perusahaan_pembuat = trim(mysqli_real_escape_string($con, $_POST['perusahaan_pembuat']));
	mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$nama', dosis = '$dosis', komposisi = '$komposisi', ket_obat = '$ket', tgl_kadaluarsa = '$tgl_kadaluarsa', efek_samping = '$efek_samping', perusahaan_pembuat = '$perusahaan_pembuat' WHERE id_obat = '$id'") or die(mysqli_error($con));
	// echo "<script>window.location='data.php';</script>";
	echo "<script>alert('Data berhasil diubah');window.location='data.php';</script>";
}