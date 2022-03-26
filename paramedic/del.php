<?php
require_once"../_config/config.php";


  mysqli_query($con, "DELETE FROM tb_user WHERE id_user='$_GET[id]'") or die(mysqli_error($con));
  echo "<script>alert('data berhasil dihapus'); window.location='data.php';</script>";
