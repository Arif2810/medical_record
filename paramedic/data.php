<?php include_once('../_header.php') ?>
  <div class="box">
    <h1>Paramedic</h1>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    <h4>
      <small>Data Paramedic</small>
      <div class="pull-right">
        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
        <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Paramedic</a>
      </div>
    </h4>

    <form method="post" name="proses">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="paramedic">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Level</th>
              <th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
          <?php 
          $no = 1;
          $sql_paramedic = mysqli_query($con, "SELECT * FROM tb_user") or die(mysqli_error($con));
          while($data = mysqli_fetch_array($sql_paramedic)){ ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['nama_user']; ?></td>
              <td><?= $data['username']; ?></td>
              <td><?= $data['level']; ?></td>
              <?php if($data['level'] == 1){ ?>
                <td></td>
              <?php }
              else{ ?>
                <td align="center">
                  <a href="del.php?id=<?= $data['id_user']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?')"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
              <?php } ?>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <script>
    $(document).ready(function(){
			$('#paramedic').DataTable({
				columnDefs: [{
					"searchable": false,
					"orderable": false,
					"targets": 3
				}],
				"order": [0, "asc"]
			})
		}); 
	</script>

<?php include_once('../_footer.php') ?>