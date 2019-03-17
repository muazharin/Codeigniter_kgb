 <?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

;
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator('ADR Studio');
$pdf->SetAuthor('PU');
$pdf->SetTitle('Dinas Sumber Daya Air Dan Bina Marga');
$pdf->SetSubject('Data Pegawai');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, -5, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 0);
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 11);

// add a page

$pdf->AddPage('P', 'A4');

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
  include 'koneksi/config.php';
  $id = $_GET['id'];
  $pegawai = "SELECT * FROM pegawai WHERE id = '$id'";
  $data = mysqli_fetch_array(mysqli_query($con, $pegawai));

    $kel1 = "SELECT * FROM `nikah` WHERE id_pegawai = '$id'";
    $gas1 = mysqli_query($con, $kel1);

  $anak = "SELECT COUNT(id) as jml FROM anak WHERE id_pegawai = '$id'";
  $jml = mysqli_fetch_row(mysqli_query($con, $anak));

  function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }

    $zz = mysqli_query($con, "SELECT agama from agama WHERE id = '$data[agama]'");
    $ex = mysqli_fetch_row($zz);
    $agama = $ex[0];

    $zz = mysqli_query($con, "SELECT bangsa from bangsa WHERE id = '$data[bangsa]'");
    $ex = mysqli_fetch_row($zz);
    $bangsa = $ex[0];

    $zz = mysqli_query($con, "SELECT pangkat from pangkat WHERE id = '$data[pangkat]'");
    $ex = mysqli_fetch_row($zz);
    $pangkat = $ex[0];

    $tt = mysqli_query($con, "SELECT aturan from aturan WHERE id = '1'");
    $ex = mysqli_fetch_row($tt);
    $aturan = $ex[0];

    $kk = mysqli_query($con, "SELECT * FROM kepala WHERE id = '1'");
    $ek = mysqli_fetch_array($kk);
    $nama_k = $ek['nama'];
    $nip_k = $ek['nip'];

// create some HTML content
$html = '
<html lang="en">
<head>
<title>Dinas Sumber Daya Air Dan Bina Marga</title>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<style type="text/css">
    .tbl tr td {
    height: 10px;
}
</style>
</head>
<body>
<div id="isi">
    <div>
        <div style="text-align: center;"><h4>SURAT KETERANGAN <br> UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</h4></div>
  
        <table class="tbl" border="0">
            <tr>
                <td colspan="4">Saya yang bertanda tangan dibawah ini :</td>
            </tr>
            <tr>
                <td width="22px">1.</td>
                <td width="200px">Nama Lengkap</td>
                <td width="10px">:</td>
                <td width="">'.$data['nama'].'</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>NIP</td>
                <td>:</td>
                <td>'.$data['nip'].'</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>'.$data['ttl'].'</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>'.$data['jk'].'</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agama</td>
                <td>:</td>
                <td>'.$agama.'</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td>'.$bangsa.'</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Status Kepegawaian</td>
                <td>:</td>
                <td>'.$data['status_k'].'</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Pangkat/Golongan</td>
                <td>:</td>
                <td>'.$pangkat.'</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Jabatan Struktural/Jenis Kepegawaian</td>
                <td>:</td>
                <td>'.$data['jabatan'].'</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Pada Instansi, Dept./Lembaga</td>
                <td>:</td>
                <td>'.$data['instansi'].'</td>
            </tr>
            <tr>
                <td>11.</td>
                <td>Masa Kerja Golongan</td>
                <td>:</td>
                <td>'.$data['masa'].'</td>
            </tr>
            <tr>
                <td>12.</td>
                <td>Di Gaji menurut '.$aturan.'</td>
                <td>:</td>
                <td>Dengan Gaji Pokok = '.rupiah($data['gaji']).'-</td>
            </tr>
            <tr>
                <td>13.</td>
                <td>Alamat / Tempat Tinggal</td>
                <td>:</td>
                <td>'.$data['alamat'].'</td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="4" width="500px">Menerangkan dengan sesungguhnya bahwa saya :</td>
            </tr>
            <tr>
                <td colspan="4" style="height: 30px; vertical-align: top;">a. Disamping jabatan utama tersebut, bekerja pula sebagai :</td>
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
                <td rowspan="2" width="23">No.</td>
                <td style="border-bottom: none;" rowspan="2" width="100px">Nama Isteri/Suami <br> Tanggungan</td>
                <td colspan="2" width="160px">Tanggal</td>
                <td rowspan="2">Pekerjaan</td>
                <td rowspan="2">penghasilan <br> Sebulan</td>
                <td rowspan="2">Ket.</td>
            </tr>
            <tr>
                <td>Kelahiran/Umur</td>
                <td>Perkawinan</td>
            
            </tr>';
            $no = 1;
        while ($datax=mysqli_fetch_array($gas1)) {
            $html .= '<tr>
                <td>'.$no++.'</td>
                <td>'.$datax['nama'].'</td>
                <td>'.$datax['ttl'].'</td>
                <td>'.$datax['tgl_nikah'].'</td>
                <td>'.$datax['kerja'].'</td>
                <td>'.$datax['hasil'].'</td>
                <td>'.$datax['ket'].'</td>
            </tr>';
        }
        $html .='  
        </table>

        <table border="0">
            <tr>
                <td width="10px" colspan="2">d.</td>
                <td width="480px">Mempunyai anak-anak seperti dalam daftar di sebelah ini, yaitu</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td width="12px">I.</td>
                <td>ANAK KANDUNG (ak), ANAK TIRI (at), dan ANAK ANGKAT (aa) yang masih menjadi tanggungan, belum mempunyai pekerjaan sendiri dan masuk dalam daftar gaji.</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>II.</td>
                <td>ANAK KANDUNG (ak), ANAK TIRI (at), ANAK ANGKAT (aa) yang masih menjadi tanggungan tetapi tidak masuk dalam daftar gaji.</td>
                <td></td>
            </tr>
            <tr>
                <td width="10px" colspan="2">e.</td>
                <td width="480px">Jumlah anak seluruhnya '.$jml[0].' orang (yang menjadi tanggungan, termasuk yang tidak masuk dalam daftar gaji).</td>
                <td></td>
            </tr>
        </table>

        <p>Keterangan ini saya buat dengan sesungguhnya dan apabila keterangan ini ternyata tidak benar (palsu), maka saya bersedia dituntut dimuka pengadilan berdasarkan undang-undang yang berlaku, dan bersedia mengembalikan semua uang tunjangan anak yang telah saya terima yang seharusnya bukan menjadi hak saya.</p>

        <table style="width:600px;" border="0">
            <tr>
                <td width="250px" style="text-align:center; height:20px;"></td>
                <td width="250px" style="text-align:center;">Kendari, Mei 2018</td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;">Mengetahui :</td>
                <td width="250px" style="text-align:center;">Yang Menerangkan :</td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;">An.  Plt. KEPALA DINAS SDA DAN BINA MARGA</td>
                <td width="250px" style="text-align:center;"></td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;">PROVINSI SULAWESI TENGGARA </td>
                <td width="250px" style="text-align:center;"></td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;">SEKRETARIS,</td>
                <td width="250px" style="text-align:center;"></td>
            </tr>
        </table>
        <br><br><br><br><br>
        <table style="width:600px;" border="0">
            <tr>
                <td width="250px" style="text-align:center;"><b><u>'.$nama_k.'</u></b></td>
                <td width="250px" style="text-align:center;"><b><u>'.$data['nama'].'</u></b></td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;">NIP. '.$nip_k.'</td>
                <td width="250px" style="text-align:center;">NIP. '.$data['nip'].'</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
$pdf->SetFont('times', '', 10);
// add a page
$pdf->AddPage('L', 'A4');

$html = '
<html lang="en">
<head>
<style type="text/css">
    .tbl2 td {
    text-align: center;
    vertical-align: middle;
}
</style>
</head>
<body>
<div id="isi">
    <div>
    <div style="text-align: center;"><h4>DAFTAR ANAK-ANAK</h4></div>
    <p>I. ANAK KANDUNG (ak), ANAK TIRI (at), dan ANAK ANGKAT (aa) yang masih menjadi tanggungan, belum mempunyai penghasilan sendiri dan masuk dalam daftar gaji.</p>
        <table style="width:100%;" border="1">
            <tr class="tbl2">
                <td width="22px">No.</td>
                <td width="100px">Nama</td>
                <td>Status Anak</td>
                <td>Tanggal Lahir</td>
                <td>Belum/<br>Pernah Kawin</td>
                <td>Bersekolah/<br>Kuliah pada</td>
                <td width="80px">Tidak/mendapat :<br>1. Beasiswa/Darmasiswa<br>2. Ikatan Dinas</td>
                <td>Nama Ayah</td>
                <td>Nama Ibu</td>
                <td>Tanggal Meninggalnya/<br>Diceraikannya Ayah/Ibu</td>
                <td>Diangkat Menurut :<br>a. Putusan Pengadilan<br>b. Hukum adopsi bagi<br>keturunan Tionghoa</td>
            </tr>';
        $no = 1;
        $que = "SELECT * FROM `anak` WHERE id_pegawai = '$id' AND tipe_anak = '1'";
        $go = mysqli_query($con, $que);
        while ($dataa = mysqli_fetch_array($go)) {
            $html .= '<tr>
                <td>'.$no++.'</td>
                <td>'.$dataa['nama'].'</td>
                <td>'.$dataa['status_anak'].'</td>
                <td>'.$dataa['ttl'].'</td>
                <td>'.$dataa['status'].'</td>
                <td>'.$dataa['pendidikan'].'</td>
                <td>'.$dataa['beasiswa'].'</td>
                <td>'.$dataa['nama_ayah'].'</td>
                <td>'.$dataa['nama_ibu'].'</td>
                <td>'.$dataa['meninggal_cerai'].'</td>
                <td>'.$dataa['diangkat'].'</td>
            </tr>';
        }

    $html .= '</table>
    <p>II. ANAK KANDUNG (ak), ANAK TIRI (at), dan ANAK ANGKAT (aa) yang masih menjadi tanggungan tetapi tidak masuk dalam daftar gaji</p>

    <table style="width:100%;" border="1">
            <tr class="tbl2">
                <td width="22px">No.</td>
                <td width="100px">Nama</td>
                <td>Status Anak</td>
                <td>Tanggal Lahir</td>
                <td>Belum/<br>Pernah Kawin</td>
                <td>Bersekolah/<br>Kuliah pada</td>
                <td width="80px">Tidak/mendapat :<br>1. Beasiswa/Darmasiswa<br>2. Ikatan Dinas</td>
                <td>Bekerja atau<br>Tidak Bekerja</td>
                <td>Keterangan</td>
            </tr>';
        $no = 1;
        $que = "SELECT * FROM `anak` WHERE id_pegawai = '$id' AND tipe_anak = '2'";
        $go = mysqli_query($con, $que);
        while ($dataa = mysqli_fetch_array($go)) {
            $html .= '<tr>
                <td>'.$no++.'</td>
                <td>'.$dataa['nama'].'</td>
                <td>'.$dataa['status_anak'].'</td>
                <td>'.$dataa['ttl'].'</td>
                <td>'.$dataa['status'].'</td>
                <td>'.$dataa['pendidikan'].'</td>
                <td>'.$dataa['beasiswa'].'</td>
                <td>'.$dataa['kerja'].'</td>
                <td>'.$dataa['ket'].'</td>
            </tr>';
        }
    $html .= '</table>
    </div>
</div>
</body>
</html>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();
ob_end_clean();
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table


//Close and output PDF document
$pdf->Output('KP-4_'.$data['nama'].'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
