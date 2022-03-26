<?php include_once('../_header.php'); ?>

<div class="box">
	<h1>Paramedic</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Tambah Data Paramedic</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-info btn-xs"> Data</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form action="proses.php" method="post">
				<table class="table">
					<tr>
						<th>#</th>
						<th>Nama Paramedic</th>
						<th>Username</th>
						<th>Pasword</th>
					</tr>
          <tr>
            <td></td>
            <td>
              <input type="text" name="nama_user" class="form-control" required>
            </td>
            <td>
              <input type="text" name="username" class="form-control" required>
            </td>
            <td>
              <input type="password" name="password" class="form-control" required>
            </td>
          </tr>
				</table>
				<div class="form-group">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>