<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Obat</h1>
	<h4>
		<small>Tambah Data Obat</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Nama Obat</label>
					<input type="text" name="nama" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="dosis">Dosis</label>
					<input type="text" name="dosis" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="komposisi">Komposisi</label>
					<input type="text" name="komposisi" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="ket">Keterangan</label>
					<textarea name="ket" id="ket" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
					<input type="date" name="tgl_kadaluarsa" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="efek_samping">Efek Samping</label>
					<input type="text" name="efek_samping" class="form-control">
				</div>
				<div class="form-group">
					<label for="perusahaan_pembuat">Nama Perusahaan</label>
					<input type="text" name="perusahaan_pembuat" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
