<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include 'koneksi/config.php';
require('fpdf181/fpdf.php');

//Menampilkan data dari tabel di database
$id=$_GET['id'];
$result=mysql_query("SELECT * FROM `pegawai` WHERE id = '$id'");
//Inisiasi untuk membuat header kolom

$nama_p = "";
$kontak_p = "";



//For each row, add the field to the corresponding column
$row = mysql_fetch_array($result);

//$nama_p2 = "$row[1]";
//$kontak_p2 = "$row[2]";


//$column_nik = $column_nik.$nik."\n";
//$nama_p = $nama_p.$nama_p2."\n";
//kontak_p = $kontak_p.$kontak_p2."\n";


//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);


$pdf->SetFont('Arial','B',11);
$pdf->Cell(80);
$pdf->Cell(30,10,'SURAT PENGADUAN MASYARAKAT',0,0,'C');
$pdf->Ln();

//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(163, 194, 194);
//Bold Font for Field Name
//lebar-tingg-text-border-perataan
$pdf->SetFont('Arial','B',11);

$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);

$pdf->Cell(180,8,'IDENTITAS PELAPOR',1,0,'C',1);
//$pdf->SetX(30);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',11);

$pdf->SetY($Y_Table_Position);

$pdf->SetX(15);
$pdf->Cell(55,7,'Waktu Melapor',1,'C');
$pdf->SetTextColor(255, 26, 26);
$pdf->Cell(90,7,$waktu,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Image("../foto/$foto2",162,39,31);
$pdf->Ln();

$pdf->SetTextColor(0,0,0);//kembalikan warna

$pdf->SetX(15);
$pdf->Cell(55,7,'Nama Lengkap',1,'C');
$pdf->Cell(90,7,$nama_p,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Kontak (Email/No. Telepon)',1,'C');
$pdf->Cell(90,7,$kontak_p,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Umur (Tahun)',1,'C');
$pdf->Cell(90,7,$umur_p,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Jenis Kelamin',1,'C');
$pdf->Cell(90,7,$jk_p,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Agama',1,'C');
$pdf->Cell(90,7,$agama_p,1,'C');
$pdf->Cell(35,7,"",'R','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'No. KTP',1,'C');
$pdf->Cell(90,7,$noKTP_p,1,'C');
$pdf->Cell(35,7,"",'R,B','C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Alamat',1,'C');
$pdf->MultiCell(125,7,$alamat_p,1,'L');
//$pdf->Cell(35,7,"",'R','C');

$pdf->SetX(15);//kosong
$pdf->Cell(55,3,'',0,'C');
$pdf->Cell(125,3,'',0,'T');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,5,'Laporan/Keluhan :',0,'C');
$pdf->MultiCell(125,5,$laporan,0,'J');

$pdf->Ln();
//batas
$pdf->SetX(15);
$pdf->SetFillColor(163, 194, 194);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(180,8,'IDENTITAS TERLAPOR',1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','',11	);
//batas end

$pdf->SetX(15);
$pdf->Cell(55,7,'Nama Lengkap',1,'C');
$pdf->Cell(125,7,$nama_t,1,'C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Jabatan/Alamat Tugas',1,'C');
$pdf->Cell(125,7,$jabatan_t,1,'C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Perkiraan Umur (Tahun)',1,'C');
$pdf->Cell(125,7,$umur_t,1,'C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Jenis Kelamin',1,'C');
$pdf->Cell(125,7,$jk_t,1,'C');
$pdf->Ln();

$pdf->SetX(15);
$pdf->Cell(55,7,'Agama',1,'C');
$pdf->Cell(125,7,$agama_t,1,'C');
$pdf->Ln();

$pdf->SetX(15);//kosong
$pdf->Cell(55,3,'',0,'C');
$pdf->Cell(125,3,'',0,'T');
$pdf->Ln();

if ($row[15]=="new") {
	$text="Baru";
}
if ($row[15]=="done") {
	$text="Disetujui";
}
if ($row[15]=="fail") {
	$text="Dibatalkan";
}

$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->SetX(15);
$pdf->Cell(55,5,'Status Laporan :',0,'C');
$pdf->MultiCell(125,5,$ket,0,'J');
$pdf->Ln();
$pdf->SetFont('Arial','',10);

$pdf->Output('Laporan_Propam_Admin_No.'.$row[0].'.pdf','I');
?>