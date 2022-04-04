<?php include_once('../_header.php'); ?>

<div class="box">
	<h1>Obat</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Data Obat</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Obat</a>
		</div>
	</h4>

	<form action="" method="post" name="proses">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="obat">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Obat</th>
						<th>Dosis</th>
						<th>Komposisi</th>
						<th>Keterangan</th>
						<th>Tanggal Kadaluarsa</th>
						<th>Efek Samping</th>
						<th>Perusahaan Pembuat</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					$query = "SELECT * FROM tb_obat";
					$sql_obat = mysqli_query($con, $query) or die(mysqli_error($con));
					while($data = mysqli_fetch_array($sql_obat)){ ?>
					
					<tr>
						<td><?= $no++; ?>.</td>
						<td><?= $data['nama_obat']; ?></td>
						<td><?= $data['dosis']; ?></td>
						<td><?= $data['komposisi']; ?></td>
						<td><?= $data['ket_obat']; ?></td>
						<td><?= $data['tgl_kadaluarsa']; ?></td>
						<td><?= $data['efek_samping']; ?></td>
						<td><?= $data['perusahaan_pembuat']; ?></td>
						<td align="center">
							<a href="edit.php?id=<?= $data['id_obat'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="del.php?id=<?= $data['id_obat'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</form>
</div>

<script>
	$(document).ready(function() {
		$('#obat').DataTable( {
				dom: 'Bfrtip',
				buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
				]
		} );
	} );
</script>


<?php include_once('../_footer.php'); ?>