<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Pasien</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Edit Data Pasien</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			?>

			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="identitas">Nomor Rekam Medis</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="text" name="no_rekammedis" id="no_rekammedis" class="form-control" value="<?= $data['no_rekammedis'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="identitas">Nomor Identitas</label>
					<input type="number" name="identitas" id="identitas" class="form-control" value="<?= $data['nomor_identitas'] ?>" required="">
				</div>
				<div class="form-group">
					<label for="nama">Nama Pasien</label>
					<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_pasien'] ?>" required="">
				</div>
				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="jk" id="jk" value="L" required="" <?= $data['jenis_kelamin'] == "L" ? "checked" : null ?>> Laki - laki
						</label>
						<label class="radio-inline">
							<input type="radio" name="jk" value="P" <?= $data['jenis_kelamin'] == "P" ? "checked" : null ?>> Perempuan
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="nama">Usia</label>
							<input type="text" name="usia" id="usia" class="form-control" value="<?= $data['usia'] ?>" required="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="nama">Gol Darah</label>
							<input type="text" name="gol_darah" id="gol_darah" class="form-control" value="<?= $data['gol_darah'] ?>" required="">
						</div>	
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="nama">Vaksin</label>
							<select name="vaksin" id="vaksin" class="form-control" required>
								<option value="<?= $data['vaksin']; ?>"><?= $data['vaksin']; ?></option>
								<option value="Vaksin 1">Vaksin 1</option>
								<option value="Vaksin 2">Vaksin 2</option>
								<option value="Booster 1">Booster 1</option>
								<option value="Booster 2">Booster 2</option>
							</select>
						</div>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Perusahaan</label>
							<input type="text" name="perusahaan" id="perusahaan" class="form-control" value="<?= $data['perusahaan'] ?>" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Departemen</label>
							<input type="text" name="departemen" id="departemen" class="form-control" value="<?= $data['departemen'] ?>" required="">
						</div>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Section</label>
							<input type="text" name="section" id="section" class="form-control" value="<?= $data['section'] ?>" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Jabatan</label>
							<input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= $data['jabatan'] ?>" required="">
						</div>	
					</div>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control" required=""><?= $data['alamat'] ?></textarea>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="telp">No. Telepon</label>
							<input type="number" name="telp" id="telp" class="form-control" value="<?= $data['no_telp'] ?>" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Telepon Emergency</label>
							<input type="text" name="no_emergency" id="no_emergency" class="form-control" value="<?= $data['no_emergency'] ?>" required="">
						</div>	
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
