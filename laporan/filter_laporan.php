<?php include_once('../_header.php'); ?>
<?php 
$dari = null;
$sampai = null;
?>

	<div class="box">
		<h1>Laporan Periodik</h1>
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    <h4>
			<small>Filter Laporan Periodik</small>
		</h4>

    <div class="row">
      <div class="col-md-6">
        <form action="" method="post">
          <div class="form-group">
            <label for="">Dari Tanggal</label>
            <input type="date" name="dari" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control" required>
          </div>
    
          <button type="submit" class="btn btn-sm btn-primary" name="filter"><i class="fas fa-eye"></i> Tampilkan Data</button>
        </form>
      </div>
    </div>
    <hr>

    <?php 
    if(isset($_POST['filter'])){ ?>
      <table class="table table-responsive table-bordered table-striped" id="rekammedis">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Periksa</th>
            <th>Perusahaan</th>
            <th>Nama Pasien</th>
            <th>Keluhan</th>
            <th>Nama Dokter</th>
            <th>Diagnosa</th>
            <th>Obat</th>
            <th>RS Rujukan</th>
            <th>Paramedic</th>
            <th>Tgl MCU Tahunan</th>
            <th>Keterangan MCU Tahunan</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $dari 	= trim(mysqli_real_escape_string($con, $_POST['dari']));
            $sampai = trim(mysqli_real_escape_string($con, $_POST['sampai']));
            $no = 1;
            $query = "SELECT * FROM tb_rekammedis
              INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
              INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
              AND date(tgl_periksa) >= '$dari' AND date(tgl_periksa) <= '$sampai'
            ";
            $sql_rm = mysqli_query($con, $query) or die(mysqli_error($con));
            while($data = mysqli_fetch_array($sql_rm)){ ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= tgl_indo($data['tgl_periksa']); ?></td>
                <td><?= $data['perusahaan'] ?></td>
                <td><?= $data['nama_pasien'] ?></td>
                <td><?= $data['keluhan'] ?></td>
                <td><?= $data['nama_dokter'] ?></td>
                <td><?= $data['diagnosa'] ?></td>
                <td>
                  <?php
                  $sql_obat = mysqli_query($con, "SELECT * FROM tb_rm_obat JOIN tb_obat ON tb_rm_obat.id_obat = tb_obat.id_obat WHERE id_rm = '$data[id_rm]'") or die(mysqli_error($con));
                  while($data_obat = mysqli_fetch_array($sql_obat)){
                    echo $data_obat['nama_obat']. "<br>";
                  }
                  ?>
                </td>
                <td><?= $data['rujukan'] ?></td>
                <td><?= $data['paramedic'] ?></td>
                <td><?= $data['tgl_mcu_tahunan'] ?></td>
                <td><?= $data['ket_mcu_tahunan'] ?></td>
              </tr>
          <?php } ?>
        </tbody>
      </table>

      <script>
        $(document).ready(function() {
          $('#rekammedis').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          } );
        } );
	    </script>

    <?php } ?>
  </div>


<?php include_once('../_footer.php'); ?>       