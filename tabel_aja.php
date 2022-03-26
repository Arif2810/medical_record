


<div class="row">
	<div class="col-md-6">
		<center>
			<h4>GRAFIK KUNJUNGAN PERUSAHAAN</h4>
		</center>
		<div style="width: 100%;margin: 0px auto;">
			<canvas id="myChart"></canvas>
		</div>
	</div>

	<div class="col-md-6">
		<center>
			<h4>GRAFIK USIA YANG SERING SAKIT</h4>
		</center>
		<div style="width: 100%;margin: 0px auto;">
			<canvas id="myChart3"></canvas>
		</div>
	</div>
</div><br><br>

<div class="row">
	<div class="col">
		<center>
			<h4>GRAFIK DIAGNOSA</h4>
		</center>
		<div style="width: 100%;margin: 0px auto;">
			<canvas id="myChart2"></canvas>
		</div>
	</div>
</div><br><br>

<div class="row">
	<div class="col-md-12">
		<center>
			<h4>GRAFIK PENGGUNAAN OBAT</h4>
		</center>
		<div style="width: 100%;margin: 0px auto;">
			<canvas id="myChart4"></canvas>
		</div>
	</div>
</div>

<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["PT GAM", "PT BSM", "PT BMJ", "PT ASA", "PT SCP", "CV AJS", "KANTIN", "RSPKT", "PKM SKLR"],
			datasets: [{
				label: '',
				data: [
				<?php
					$query1 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT GAM'
					";
					$jumlah1 = mysqli_query($con, $query1) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah1);
				?>, 
				<?php 
					$query2 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT BSM'
					";
					$jumlah2 = mysqli_query($con, $query2) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah2);      
				?>,
				<?php 
					$query3 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT BMJ'
					";
					$jumlah3 = mysqli_query($con, $query3) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah3);      
				?>,
				<?php 
					$query4 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT ASA'
					";
					$jumlah4 = mysqli_query($con, $query4) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah4);      
				?>,
				<?php 
					$query5 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT SCP'
					";
					$jumlah5 = mysqli_query($con, $query5) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah5);      
				?>,
				<?php 
					$query6 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PT AJS'
					";
					$jumlah6 = mysqli_query($con, $query6) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah6);      
				?>,
				<?php 
					$query7 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'kantin'
					";
					$jumlah7 = mysqli_query($con, $query7) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah7);      
				?>,
				<?php 
					$query8 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'RSPKT'
					";
					$jumlah8 = mysqli_query($con, $query8) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah8);      
				?>,
				<?php 
					$query9 = "SELECT * FROM tb_rekammedis
					INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
					INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
					WHERE tb_pasien.perusahaan = 'PKM Sangkulirang'
					";
					$jumlah9 = mysqli_query($con, $query9) or die(mysqli_error($con));
					echo mysqli_num_rows($jumlah9);      
				?>
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)',
					'rgba(35, 144, 202, 0.2)',
					'rgba(255, 88, 112, 0.2)',
					'rgba(75, 142, 215, 0.2)',
					'rgba(255, 226, 76, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)',
					'rgba(45, 122, 205, 1)',
					'rgba(255,88,152,1)',
					'rgba(54, 142, 245, 1)',
					'rgba(255, 226, 76, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<script>
	var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["ASMA", "CPLG", "COM COULD", "DSMNR", "DKA", "DM", "FBRS", "GEA", "GGVTS/PPTS", "GOUT", "HPTS", "ISK", "ISPA", "KJTVTS", "LBP", "MGRN", "MLGIA", "PPTS", "SPRAINT", "SYN-DSPSIA", "VRTG", "VLNS"],
			datasets: [{
				label: '',
				data: [
					<?php
						$diag = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'ASMA'
						";
						$jumlah_diag = mysqli_query($con, $diag) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag);
					?>, 
					<?php 
						$diag2 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'CEPHALGIA'
						";
						$jumlah_diag2 = mysqli_query($con, $diag2) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag2);     
					?>,
					<?php 
						$diag3 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'COMMON COULD'
						";
						$jumlah_diag3 = mysqli_query($con, $diag3) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag3);       
					?>,
					<?php 
						$diag4 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'DISMENORE'
						";
						$jumlah_diag4 = mysqli_query($con, $diag4) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag4);       
					?>,
					<?php 
						$diag5 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'DKA'
						";
						$jumlah_diag5 = mysqli_query($con, $diag5) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag4);       
					?>,
					<?php 
						$diag6 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'DM'
						";
						$jumlah_diag6 = mysqli_query($con, $diag6) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag6);       
					?>,
					<?php 
						$diag7 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'FEBRIS'
						";
						$jumlah_diag7 = mysqli_query($con, $diag7) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag7);
					?>,
					<?php 
						$diag8 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'GEA'
						";
						$jumlah_diag8 = mysqli_query($con, $diag8) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag8);       
					?>,
					<?php 
						$diag9 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'GINGIVITIS/PALPITIS'
						";
						$jumlah_diag9 = mysqli_query($con, $diag9) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag9);       
					?>,
					<?php 
						$diag10 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'GOUT'
						";
						$jumlah_diag10 = mysqli_query($con, $diag10) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag10);       
					?>,
					<?php 
						$diag11 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'HIPERTENSI'
						";
						$jumlah_diag11 = mysqli_query($con, $diag11) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag11);       
					?>,
					<?php 
						$diag12 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'ISK'
						";
						$jumlah_diag12 = mysqli_query($con, $diag12) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag12);       
					?>,
					<?php 
						$diag13 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'ISPA'
						";
						$jumlah_diag13 = mysqli_query($con, $diag9) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag13);       
					?>,
					<?php 
						$diag14 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'KONJUNGTIVITIS'
						";
						$jumlah_diag14 = mysqli_query($con, $diag14) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag14);       
					?>,
					<?php 
						$diag15 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'LBP'
						";
						$jumlah_diag15 = mysqli_query($con, $diag15) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag15);       
					?>,
					<?php 
						$diag16 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'MIGRAIN'
						";
						$jumlah_diag16 = mysqli_query($con, $diag16) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag16);       
					?>,
					<?php 
						$diag17 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'MYALGIA'
						";
						$jumlah_diag17 = mysqli_query($con, $diag17) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag17);       
					?>,
					<?php 
						$diag18 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'PULPITIS'
						";
						$jumlah_diag18 = mysqli_query($con, $diag18) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag18);       
					?>,
					<?php 
						$diag19 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'SPRAINT'
						";
						$jumlah_diag19 = mysqli_query($con, $diag19) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag19);       
					?>,
					<?php 
						$diag20 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'SYNDROM DYSPEPSIA'
						";
						$jumlah_diag20 = mysqli_query($con, $diag20) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag20);       
					?>,
					<?php 
						$diag21 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'VERTIGO'
						";
						$jumlah_diag21 = mysqli_query($con, $diag21) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag21);       
					?>,
					<?php 
						$diag22 = "SELECT * FROM tb_rekammedis
						WHERE diagnosa = 'VULNUS'
						";
						$jumlah_diag22 = mysqli_query($con, $diag22) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diag22);       
					?>
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)',
					'rgba(35, 144, 202, 0.2)',
					'rgba(255, 88, 112, 0.2)',
					'rgba(75, 142, 215, 0.2)',
					'rgba(255, 226, 76, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)',
					'rgba(35, 144, 202, 0.2)',
					'rgba(255, 88, 112, 0.2)',
					'rgba(75, 142, 215, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)',
					'rgba(45, 122, 205, 1)',
					'rgba(255,88,152,1)',
					'rgba(54, 142, 245, 1)',
					'rgba(255, 226, 76, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)',
					'rgba(45, 122, 205, 1)',
					'rgba(255,88,152,1)',
					'rgba(54, 142, 245, 1)',
					'rgba(255, 226, 76, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)',
					'rgba(45, 122, 205, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<script>
	var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["< 20th", "21-30th", "31-40th", "41-50th", "51-60th", "60th < "],
			datasets: [{
				label: '',
				data: [
					<?php
						$kurang20th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia <= 20
						";
						$jumlah_kurang20th = mysqli_query($con, $kurang20th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_kurang20th);
						// echo 4;
					?>, 
					<?php 
						$usia21_30th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia >= 20 AND tb_pasien.usia <= 30
						";
						$jumlah_usia21_30th = mysqli_query($con, $usia21_30th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_usia21_30th);
						// echo 6;
					?>,
					<?php 
						$usia31_40th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia >= 31 AND tb_pasien.usia <= 40
						";
						$jumlah_usia31_40th = mysqli_query($con, $usia31_40th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_usia31_40th);
						// echo 3;
					?>,
					<?php 
						$usia41_50th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia >= 41 AND tb_pasien.usia <= 50
						";
						$jumlah_usia41_50th = mysqli_query($con, $usia41_50th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_usia41_50th);
						// echo 7;
					?>,
					<?php 
						$usia51_60th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia >= 51 AND tb_pasien.usia <= 60
						";
						$jumlah_usia51_60th = mysqli_query($con, $usia51_60th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_usia51_60th);
						// echo 12;    
					?>,
					<?php 
						$diatas_60th = "SELECT * FROM tb_rekammedis
						INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_rekammedis.id_pasien
						WHERE tb_pasien.usia > 60
						";
						$jumlah_diatas_60th = mysqli_query($con, $diatas_60th) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_diatas_60th);
						// echo 5; 
					?>
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)',
					'rgba(35, 144, 202, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)',
					'rgba(45, 122, 205, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<script>
	var ctx = document.getElementById("myChart4").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["OBAT A", "OBAT B", "OBAT C", "OBAT D"],
			datasets: [{
				label: '',
				data: [
					<?php
						$obat_a = "SELECT * FROM tb_rm_obat
						INNER JOIN tb_obat ON tb_obat.id_obat = tb_rm_obat.id_obat
						WHERE tb_obat.nama_obat = 'Obat A'
						";
						$jumlah_obat_a = mysqli_query($con, $obat_a) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_obat_a);
					?>, 
					<?php 
						$obat_b = "SELECT * FROM tb_rm_obat
						INNER JOIN tb_obat ON tb_obat.id_obat = tb_rm_obat.id_obat
						WHERE tb_obat.nama_obat = 'Obat B'
						";
						$jumlah_obat_b = mysqli_query($con, $obat_b) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_obat_b);   
					?>,
					<?php 
						$obat_c = "SELECT * FROM tb_rm_obat
						INNER JOIN tb_obat ON tb_obat.id_obat = tb_rm_obat.id_obat
						WHERE tb_obat.nama_obat = 'Obat C'
						";
						$jumlah_obat_c = mysqli_query($con, $obat_c) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_obat_c);    
					?>,
					<?php 
						$obat_d = "SELECT * FROM tb_rm_obat
						INNER JOIN tb_obat ON tb_obat.id_obat = tb_rm_obat.id_obat
						WHERE tb_obat.nama_obat = 'Obat D'
						";
						$jumlah_obat_d = mysqli_query($con, $obat_d) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_obat_d);    
					?>,
					<?php 
						$obat_e = "SELECT * FROM tb_rm_obat
						INNER JOIN tb_obat ON tb_obat.id_obat = tb_rm_obat.id_obat
						WHERE tb_obat.nama_obat = 'Obat E'
						";
						$jumlah_obat_e = mysqli_query($con, $obat_d) or die(mysqli_error($con));
						echo mysqli_num_rows($jumlah_obat_e);    
					?>
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 77, 145, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 101, 158, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>