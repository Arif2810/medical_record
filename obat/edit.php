<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Obat</h1>
	<h4>
		<small>Edit Data Obat</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
				$id = @$_GET['id'];
				$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_obat);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Nama Obat</label>
					<input type="hidden" name="id" value="<?= $data['id_obat'] ?>">
					<input type="text" name="nama" value="<?= $data['nama_obat'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="dosis">Dosis</label>
					<input type="text" name="dosis" value="<?= $data['dosis'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="komposisi">Komposisi</label>
					<input type="text" name="komposisi" value="<?= $data['komposisi'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">Keterangan</label>
					<textarea name="ket" id="ket" class="form-control" required=""><?= $data['ket_obat'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
					<input type="date" name="tgl_kadaluarsa" value="<?= $data['tgl_kadaluarsa'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="efek_samping">Efek Samping</label>
					<input type="text" name="efek_samping" value="<?= $data['efek_samping'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="perusahaan_pembuat">Nama Perusahaan</label>
					<input type="text" name="perusahaan_pembuat" value="<?= $data['perusahaan_pembuat'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
