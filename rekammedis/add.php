<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Rekam Medis</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Tambah Data Rekam Medis</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="tgl">Tanggal Periksa</label>
					<input type="date" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d') ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="pasien">Nama Pasien / Perusahaan</label>
					<select name="pasien" id="pasien" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die(mysqli_error($con));
						while($data_pasien = mysqli_fetch_array($sql_pasien)){ ?>
							<option value="<?= $data_pasien['id_pasien'] ?>"><?= $data_pasien['nama_pasien']; ?> / <?= $data_pasien['perusahaan']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="keluhan">Keluhan</label>
					<textarea name="keluhan" id="keluhan" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="dokter">Nama Dokter</label>
					<select name="dokter" id="dokter" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter") or die(mysqli_error($con));
						while($data_dokter = mysqli_fetch_array($sql_dokter)){
							echo '<option value="'.$data_dokter['id_dokter'].'">'.$data_dokter['nama_dokter'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="paramedic">Petugas Medic</label>
					<input type="text" name="paramedic" id="paramedic" class="form-control" value="<?= $_SESSION['user']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="diagnosa">Diagnosa</label>
					<textarea name="diagnosa" id="diagnosa" class="form-control" required="" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="obat">Obat</label>
					<select multiple="" size="7" name="obat[]" id="obat" class="form-control">
						<?php
						$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die(mysqli_error($con));
						while($data_obat = mysqli_fetch_array($sql_obat)){
							echo '<option value="'.$data_obat['id_obat'].'">'.$data_obat['nama_obat'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="rujukan">RS Rujukan</label>
					<input type="text" name="rujukan" id="rujukan" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="tgl_mcu_tahunan">MCU Tahunan</label>
					<input type="date" name="tgl_mcu_tahunan" id="mcu_tahunan" class="form-control">
				</div>
				<div class="form-group">
					<label for="ket_mcu_tahunan">Keterangan MCU Tahunan</label>
					<input type="text" name="ket_mcu_tahunan" id="ket_mcu_tahunan" class="form-control">
				</div>
				<div class="form-group">
					<input type="reset" name="reset" value="Reset" class="btn btn-default">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
			<script>
				CKEDITOR.replace( 'keluhan' );
			</script>
		</div>
	</div>
</div>




<?php include_once('../_footer.php'); ?>
