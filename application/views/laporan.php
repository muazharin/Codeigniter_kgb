<?php
    $date = date('Y-m-d');
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator('ADR Studio');
    $pdf->SetAuthor('PU');
    $pdf->SetTitle('Pengadilan Negeri Kendari');
    $pdf->SetSubject('Data Pegawai');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->SetMargins(PDF_MARGIN_LEFT, -5, PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(TRUE, 0);
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }
    $pdf->SetFont('times', '', 11);
    $pdf->AddPage('P', 'F4');
    $html='<html lang="en">
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
                <td colspan="4" style="text-align: right"> Kendari, '.date_indo($tgl1).'</td>
            </tr>
            
            <tr>
                <td width="60px">Nomor</td>
                <td width="7px">:</td>
                <td width="220px">'.$no1.'</td>
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
                <td>An. <b>'.$nama.'</b></td>
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
                    <td width="260px"><b>'.$nama.'</b></td>
                </tr>
    
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>'.$nip.'</td>
                </tr>
    
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Pangkat / Gol. Ruang</td>
                    <td>:</td>
                    <td>'.$pangkat.' ('.$golongan.')</td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>'.$jabatan.'</td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Unit Organisasi</td>
                    <td>:</td>
                    <td>'.$unit.'</td>
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
                    <td width="260px">'.$pejabat.'</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>'.date_indo($date).'</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>'.$no2.'</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Terhitung Mulai Tanggal</td>
                    <td>:</td>
                    <td>'.date_indo($tmt_gaji1).'</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td>Rp '.nominal($gaji_pokok).',-</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Masa Kerja Golongan</td>
                    <td>:</td>
                    <td>'.$mkgt1.' Tahun '.$mkgb1.' Bulan</td>
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
                    <td width="260px">Rp '.nominal($gaji_pokok2).',-</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Berdasarkan Masa Kerja</td>
                    <td>:</td>
                    <td>'.$mkgt2.' Tahun '.$mkgb2.' Bulan</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Dalam Golongan Ruang</td>
                    <td>:</td>
                    <td>'.$pangkat.' ('.$golongan2.')</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Terhitung Mulai Tanggal</td>
                    <td>:</td>
                    <td>'.date_indo($tmt_gaji2).'</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>KGB Yang Akan Datang</td>
                    <td>:</td>
                    <td>'.date_indo($tmt_gaji3).'</td>
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
                    <td width="250px" style="text-align:center;">'.$ttd1.'</td>
                </tr>
                
            </table>
    
            <br><br><br><br><br>
    
            <table style="width:600px;" border="0">
                <tr>
                    <td width="250px" style="text-align:center;"><b><u></u></b></td>
                    <td width="250px" style="text-align:center;"><b><u>'.$ttd2.'</u></b></td>
                </tr>
                <tr>
                    <td width="250px" style="text-align:center;"></td>
                    <td width="250px" style="text-align:center;">NIP. '.$ttd3.'</td>
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
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('SK_KGB_'.$nip.'_'.date("Y").'.pdf', 'I');
?>