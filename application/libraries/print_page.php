<!DOCTYPE html>
<html lang="en">
<head>
<title>Dinas Sumber Daya Air Dan Bina Marga</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<style type="text/css">
	body{
		font-family: Arial;
	}
</style>
</head>
<body style="background-color: #fff;">
<?php 
  include 'koneksi/config.php';

  $id = $_GET['id'];
  $pegawai = "SELECT * FROM pegawai WHERE id = '$id'";
  $data = mysqli_fetch_array(mysqli_query($con, $pegawai));

 ?>
<div id="isi" style="width: 595px; height: 842px; background-color: lightblue;">
	<div class="col-md-12 text-center">
 		<h6>SURAT KETERANGAN <br> UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</h6>
 		<table border="1" style="width: 100%;" class="text-left">
 			<tr>
 				<td colspan="4">Saya yang bertanda tangan dibawah ini :</td>
 			</tr>
 			<tr>
 				<td>1.</td>
 				<td>Nama Lengkap</td>
 				<td>:</td>
 				<td>AHMAD</td>
 			</tr>
 			<tr>
 				<td>2.</td>
 				<td>NIP</td>
 				<td>:</td>
 				<td>43276478234378</td>
 			</tr>
 			<tr>
 				<td>3.</td>
 				<td>Tempat / Tanggal Lahir</td>
 				<td>:</td>
 				<td>Raha, 24 Januari 1998</td>
 			</tr>
 			<tr>
 				<td>4.</td>
 				<td>Jenis Kelamin</td>
 				<td>:</td>
 				<td>Pria</td>
 			</tr>
 			<tr>
 				<td>5.</td>
 				<td>Agama</td>
 				<td>:</td>
 				<td>Islam</td>
 			</tr>
 			<tr>
 				<td>6.</td>
 				<td>Kebangsaan</td>
 				<td>:</td>
 				<td>Indonsia</td>
 			</tr>
 			<tr>
 				<td>7.</td>
 				<td>Status Kepegawaian</td>
 				<td>:</td>
 				<td>Pegawai Negeri Sipil </td>
 			</tr>
 			<tr>
 				<td>8.</td>
 				<td>Pangkat/Golongan</td>
 				<td>:</td>
 				<td>Pengatur Muda, Gol. II/a</td>
 			</tr>
 			<tr>
 				<td>9.</td>
 				<td>Jabatan Struktural/Jenis Kepegawaian</td>
 				<td>:</td>
 				<td>Staf</td>
 			</tr>
 			<tr>
 				<td>10.</td>
 				<td>Pada Instansi, Dept./Lembaga</td>
 				<td>:</td>
 				<td>Dinas SDA dan Bina Marga  Prov. Sultra</td>
 			</tr>
 			<tr>
 				<td>11.</td>
 				<td>Masa Kerja Golongan</td>
 				<td>:</td>
 				<td>        thn        bulan, masa kerja tambahan</td>
 			</tr>
 			<tr>
 				<td>12.</td>
 				<td>Di Gaji menurut PP. No. 30 Tahun 2015</td>
 				<td>:</td>
 				<td>Dengan Gaji Pokok = Rp. 2.356.400,-</td>
 			</tr>
 			<tr>
 				<td>13.</td>
 				<td>Alamat / Tempat Tinggal</td>
 				<td>:</td>
 				<td>Kendari</td>
 			</tr>
 			<tr>
 				<td colspan="4"></td>
 			</tr>
 			<tr>
 				<td colspan="4">Menerangkan dengan sesungguhnya bahwa saya :</td>
 			</tr>
 			<tr>
 				<td colspan="4" style="height: 45px; vertical-align: top;">a. Disamping jabatan utama tersebut, bekerja pula sebagai :</td>
 			</tr>
 			<tr>
 				<td colspan="3">dengan mendapat penghasilan sebesar Rp.</td>
 				<td style="padding-left: 90px;">sebulan</td>
 			</tr>
 			<tr>
 				<td colspan="3">b. Mempunyai pensiun/pensiun janda sebesar Rp.</td>
 				<td style="padding-left: 90px;">sebulan</td>
 			</tr>
 			<tr>
 				<td colspan="4">c. Kawin sah dengan :</td>
 			</tr>
 		</table>

 		<table border="1" style="width: 100%;" class="text-left">
 			<tr>
 				<td rowspan="2">No.</td>
 				<td style="border-bottom: none;" class="text-center">Nama Isteri/Suami</td>
 				<td colspan="2" class="text-center">Tanggal</td>
 				<td rowspan="2">Pekerjaan</td>
 				<td>penghasilan </td>
 				<td>Ket.</td>
 			</tr>
 			<tr>
 				<td style="border-top: none;" class="text-center">Tanggungan</td>
 				<td>Kelahiran/Umur</td>
 				<td>Perkawinan</td>
 				<td>Sebulan</td>
 				<td></td>
 			</tr>
 		</table>
 	</div>
</div>
</body>
</html>
