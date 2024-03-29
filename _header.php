<?php
require_once"_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Medical Record Application</title>
  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/_assets/css/simple-sidebar.css" rel="stylesheet">
  <!-- load DataTables -->
  <link href="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
  <!-- load jquery online -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  
  <!-- load ckeditor -->
  <script src="<?= base_url(); ?>/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->

  <script type="text/javascript" src="<?= base_url(); ?>/_assets/chartjs/Chart.js"></script>
  
  <link href="<?= base_url(); ?>/_assets/css/style.css" rel="stylesheet">

</head>
<body>
	<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a href=""><span class="text-primary">Rumah Sakit</span></a>
        </li>
        <li>
        <img src="<?= base_url(); ?>/_assets/images/logo-2-removebg.png" width="80" class="rounded mx-auto d-block" alt="...">
        </li>
        <li>
          <a href="<?= base_url('dashboard'); ?>">Dashboard</a>
        </li>
        <li>
          <a href="<?= base_url('pasien/data.php') ?>">Data Pasien</a>
        </li>
        <li>
          <a href="<?= base_url('dokter/data.php') ?>">Data Dokter</a>
        </li>
        <?php if($_SESSION['user'] == 'admin'){ ?>
          <li>
            <a href="<?= base_url('paramedic/data.php') ?>">Data Paramedic</a>
          </li>
        <?php } ?>
        <li>
          <a href="<?= base_url('obat/data.php') ?>">Data Obat</a>
        </li>
        <li>
          <a href="<?= base_url('rekammedis/data.php') ?>">Rekam Medis</a>
        </li>
        <li>
          <a href="<?= base_url('laporan/filter_laporan.php') ?>">Laporan Periodik</a>
        </li>
        <li>
          <a href="<?= base_url('ganti_password/data.php') ?>">Ganti Password</a>
        </li>
        <li>
          <a href="<?= base_url('auth/logout.php') ?>" onclick="return confirm('Yakin Logout?')"><span class="text-danger">Logout</span></a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
            
           