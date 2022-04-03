<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Dokter</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Edit Data Dokter</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter WHERE id_dokter='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_dokter);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Nama Dokter</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" name="nama" id="nama" value="<?= $data['nama_dokter'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="no_str">No STR</label>
					<input type="text" name="no_str" id="no_str" value="<?= $data['no_str'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="no_surat_ijin">No Surat Ijin</label>
					<input type="text" name="no_surat_ijin" id="no_surat_ijin" value="<?= $data['no_surat_ijin'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="umur">Umur</label>
					<input type="text" name="umur" id="umur" value="<?= $data['umur'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="spesialis">Spesialis</label>
					<input type="text" name="spesialis" id="spesialis" value="<?= $data['spesialis'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="alamat_camp">Alamat Camp</label>
					<textarea name="alamat_camp" id="alamat_camp" class="form-control" required=""><?= $data['alamat_camp'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="alamat_rumah">Alamat Rumah</label>
					<textarea name="alamat_rumah" id="alamat_rumah" class="form-control" required=""><?= $data['alamat_rumah'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="rs_client">RS Client</label>
					<input type="text" name="rs_client" id="rs_client" value="<?= $data['rs_client'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="telp">No. Telepon</label>
					<input type="number" name="telp" id="telp" value="<?= $data['no_telp'] ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
