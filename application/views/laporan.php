 <?php

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

$pdf->AddPage('P', 'F4');

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
 

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
        <table border="0">
        <tr>
            <td rowspan="2" width="43px"><img src="'.base_url().'assets/dist/img/icon-pn.png" style="width: 42px;"></td>
            <td width="430px" style="text-align: center;"><span style="font-size: 23px;">PENGADILAN NEGERI KENDARI</span></td>
        </tr>
        <tr>
            <td style="text-align: center;"> <span style="text-align: center; border-bottom: 3px solid #000;">JL.MAYJEN SUTOYO NO. 37 TELP. 312714 <br> KENDARI</span></td>
        </tr>
        </table>

        <div style="width: 100%; border-bottom: 3px solid #00000f; margin-bottom: 20px;"></div>
        <br>

        <table border="0" width="100%">
        <tr>
            <td colspan="4" style="text-align: right"> Kendari, 15 Maret 2019</td>
        </tr>
        <tr>
            <td width="60px">Nomor</td>
            <td width="7px">:</td>
            <td width="220px">W23-UI/12312/KP.04.2/03/2019</td>
            <td width="220px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepada</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>-</td>
            <td>Yth. Kepala Kantor Pelayanan Perbendaharaan</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>:</td>
            <td>Kenaikan Gaji Berkala</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negeri Kendari</td>
        </tr>
         <tr>
            <td></td>
            <td></td>
            <td>An. <b>'."Artono Dwi R, S.T".'</b></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;di-</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><u>pada Pengadilan Negeri Kendari</u></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Kendari</u></td>
        </tr>
        </table>


        <br><br>

        <table border="0" style="width: 100%;">
            <tr>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td width="60px"></td>
                <td width="7px"></td>
                <td colspan="4" width="430px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dengan ini diberitahukan berhubung dengan telah dipenuhinya masa kerja dan syarat-syarat lainnya kepada</td>
                
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td width="35px"></td>
                <td width="130px">Nama</td>
                <td width="10px">:</td>
                <td width="260px"><b>Artono Dwi R, S.T</b></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>NIP</td>
                <td>:</td>
                <td>34324325342534</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Pangkat / Gol. Ruang</td>
                <td>:</td>
                <td>Pengatur Tk.I (II/d)</td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Jabatan</td>
                <td>:</td>
                <td>Staf bagian umum</td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Unit Organisasi</td>
                <td>:</td>
                <td>Pengadilan Negeri Kendari</td>
            </tr>
            <tr>
                <td width="60px"></td>
                <td width="7px"></td>
                <td colspan="4" width="430px">Atas dasar surat keputusan gaji yang ditetapkan oleh :</td>
                
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td width="35px"></td>
                <td width="130px">Oleh Pejabat</td>
                <td width="10px">:</td>
                <td width="260px">KETUA PENGADILAN NEGERI KENDARI</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>21 Desember 2015</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Nomor</td>
                <td>:</td>
                <td>w23435/4565h/65765</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Terhitung Mulai Tanggal</td>
                <td>:</td>
                <td>1 Desember 2015</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td>Rp 2.507.800,-</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Masa Kerja Golongan</td>
                <td>:</td>
                <td>09 Tahun 0 Bulan</td>
            </tr>
            <tr>
                <td width="60px"></td>
                <td width="7px"></td>
                <td colspan="4" width="430px">Kepadanya diberikan kenaikan gaji berkala :</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td width="35px"></td>
                <td width="130px">Gaji Pokok Baru</td>
                <td width="10px">:</td>
                <td width="260px">Rp 2.586.700,-</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Berdasarkan Masa Kerja</td>
                <td>:</td>
                <td>11 Tahun 0 Bulan</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Dalam Golongan Ruang</td>
                <td>:</td>
                <td>Pengatur Tk. I (II/d)</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Terhitung Mulai Tanggal</td>
                <td>:</td>
                <td>1 Desember 2017</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>KGB Yang Akan Datang</td>
                <td>:</td>
                <td>1 Desember 2019</td>
            </tr>
            <tr>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td width="60px"></td>
                <td width="7px"></td>
                <td colspan="4" width="430px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Diharapkan agar sesuai dengan Peraturan Pemerintah Republik Indonesia Nomor 30 Tahun 2015 Tanggal 05 Juni 2015 kepada pegawai tersebut dapat dibayarkan penghasilannya berdsasarkan gaji pokok yang baru.</td>
                
            </tr>
        </table>
<br>
<br>

        <table style="width:600px;" border="0">
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;"></td>
                <td width="250px" style="text-align:center;">KETUA PENGADILAN NEGERI KENDARI</td>
            </tr>
            
        </table>

        <br><br><br><br><br>

        <table style="width:600px;" border="0">
            <tr>
                <td width="250px" style="text-align:center;"><b><u></u></b></td>
                <td width="250px" style="text-align:center;"><b><u>TAJUDIN, SH.</u></b></td>
            </tr>
            <tr>
                <td width="250px" style="text-align:center;"></td>
                <td width="250px" style="text-align:center;">NIP. 19600726 198803 1 001</td>
            </tr>
        </table>


 <br><br><br>

        <table border="0" width="100%">
        <tr>
            <td><b>Tembusan : </b>Disampaikan Kepada Yth :</td>
        </tr>
        <tr>
            <td>1. Kepala Biro Kepegawaian Mahkamah Agung RI di - Jakarta</td>
        </tr>
        <tr>
            <td>2. Direktur Jendral BADILUM Mahkamah Agung R.I di - Jakarta</td>
        </tr>
        <tr>
            <td>3. Kepala Badan Kepegawaian Negara (BKN) di - Jakarta</td>
        </tr>
        <tr>
            <td>4. Kepala Kantor Wilayah Regional IV BKN di - Makassar</td>
        </tr>
        <tr>
            <td>5. Kepala Cabang PT Taspen Kendari di - Kendari</td>
        </tr>
        <tr>
            <td>6. Ketua Pengadilan Tinggi Kendari di - Kendari</td>
        </tr>
        <tr>
            <td>7. Pembuat Daftar Gaji Pengadilan Negeri Kendari di - Kendari</td>
        </tr>
        <tr>
            <td>8. Pegawai Yang Bersangkutan</td>
        </tr>
        <tr>
            <td>9. Arsip,-</td>
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
$pdf->AddPage('L', 'F4');

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
            </tr>
            </table>
    <p>II. ANAK KANDUNG (ak), ANAK TIRI (at), dan ANAK ANGKAT (aa) yang masih menjadi tanggungan tetapi tidak masuk dalam daftar gaji</p>

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
$pdf->Output('DUK_NIP_'.date("m-Y").'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
