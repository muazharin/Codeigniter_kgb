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
    <title></title>
    <style type="text/css">
        .tbl tr td {
        height: 10px;
    }
    </style>
    </head>
    <body>
    <div id="isi">
    <br>
        <div>
            <table border="0" width="100%">
            <tr>
                <td style="text-align: center">
                    MAHKAMAH AGUNG REPUBLIK INDONESIA
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    SALINAN KEPUTUSAN DIREKTUR JENDERAL BADAN PERADILAN UMUM
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    NOMOR 412343/DDFD/SK/FR54/2019
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    TENTANG
                </td>
            </tr>
             <tr>
                <td style="text-align: center">
                    KENAIKAN PANGKAT PEGAWAI NEGERI SIPIL
                </td>
            </tr>
             <tr>
                <td style="text-align: center">
                   DIREKTUR JENDERAL BADAN PERADILAN UMUM, 
                </td>
            </tr>
            </table>
        
        <br>
        <br>
           
            <table width="100%" border="0">
                <tr>
                    <td width="80px">Menimbang</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="2">Bahwa Pegawai Negeri Sipil yang namanya tersebut dalam keputusan ini, memenuhi syarat dan dipandang cakap untuk dinaikkan pangkatnya setingkat lebih tinggi;</td>
                </tr>

                <tr>
                    <td >Mengingat</td>
                    <td >:</td>
                    <td width="15px">1.</td>
                    <td width="400px">Undang-Undang Nomor 3 Tahun 2009 tentang Perubahan Kedua Atas Undang-Undang Nomor 14 Tahun 1985 tentang Mahkamah Agung;</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">2.</td>
                    <td width="400px">Undang-Undang Nomor 48 Tahun 2009 tentang Kekuasaan Kehakiman;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">3.</td>
                    <td width="400px">Undang-Undang Nomor 49 Tahun 2009 tentang Perubahan Kedua Atas Undang-Undang Nomor 2 Tahun 1986 tentang Peradilan Umum;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">4.</td>
                    <td width="400px">Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">5.</td>
                    <td width="400px">Peraturan Pemerintahan Nomor 41 Tahun 2002 tentang Kenaikan Jabatan dan Pangkat Hakim;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">6.</td>
                    <td width="400px">Peraturan Pemerintahan Nomor 9 Tahun 2003 tentang Wewenang Pengangkatan, Pemindahan dan Pemberhentian Pegawai Negeri Sipil;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">7.</td>
                    <td width="400px">Peraturan Pemerintahan Nomor 94 Tahun 2012 tentang Hak Keuangan dan Fasilitas Hakim Yang Berada di Bawah Mahkamah Agung;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">8.</td>
                    <td width="400px">Peraturan Pemerintahan Nomor 34 Tahun 2014 tentang Perubahan Keenam Belas Atas Peraturan Pemerintahan Nomor 7 Tahun 1977 tentang Peraturan Gaji Pegawai Negeri Sipil;</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="15px">9.</td>
                    <td width="400px">Keputusan Ketua Mahkamah Agung RI Nomor 125/KMA/SK/IX/2009 tanggal 2 September 2009 tentang Pendelegasian Sebagian Wewenang Kepada Para Pejabat Eselon I dan Ketua Pengadilan Tingkat Banding di Lingkungan Mahkamah Agung untuk Penandatanganan  di Bidang Kepegawaian;</td>
                </tr>

                <tr>
                    <td width="80px">Memperhatikan</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="2">Persetujuan Teknis Kepala Badan Kepegawaian Negara Nomor <b>'.$no.'</b> Tanggal <b>'.date_indo($tglpersetujuan).'.</b></td>
                </tr>

                </table>


                <table width="100%" border="0">
                <tr>
                    <td width="80px"></td>
                    <td width="7px"></td>
                    <td width="415px" colspan="4" style="text-align: center;"><b>MEMUTUSKAN :</b></td>
                </tr>

                <tr>
                    <td width="80px">Menetapkan</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="4"></td>
                </tr>

                <tr>
                    <td width="80px">KESATU</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="4">Pegawai Negeri Sipil yang Namanya tersebut di bawah ini :</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">1.</td>
                    <td width="150px">Nama</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$nama.'</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">2.</td>
                    <td width="150px">Tempat Tanggal Lahir</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$tempat_lahir.', '.date_indo($tgl_lahir).'</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">3.</td>
                    <td width="150px">Nomor Induk Pegawai (N.I.P)</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$nip.'</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">4.</td>
                    <td width="150px">Pendidikan</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$pendidikan.'</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">5.</td>
                    <td width="150px">Pangkat lama/Golongan Ruang</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$pangkat.' ('.$golongan.')</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;"></td>
                    <td width="150px">Terhitung mulai tanggal</td>
                    <td width="7px">:</td>
                    <td width="230px">'.date_indo($tmt_pangkat).'</td>
                </tr>

                <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">6.</td>
                    <td width="150px">Jabatan</td>
                    <td width="7px">:</td>
                    <td width="230px">'.$jabatan.'</td>
                </tr>

                 <tr>
                    <td ></td>
                    <td ></td>
                    <td width="12px;">7.</td>
                    <td width="150px">Unit Kerja</td>
                    <td width="7px">:</td>
                    <td width="230px">Pengadilan Negeri Kendari</td>
                </tr>

                <tr>
                    <td colspan="6"></td>
                </tr>

                 <tr>
                    <td width="80px"></td>
                    <td width="7px"></td>
                    <td width="415px" colspan="4">terhitung mulai tanggal <b>'.date_indo($tmt_pangkat_baru).'</b> dinaikkan pangkatnya menjadi <b>'.$pangkatbaru.'</b> golongan ruang <b>'.$golonganbaru.'</b> dalam jabatan '.$jabatan.' <b>Pengadilan Negeri Kendari</b> dengan masa kerja golongan <b>'.$mkgt.' tahun '.$mkgb.' bulan</b>, dan kepadanya diberikan gaji pokok sebesar <b>Rp. '.nominal($gaji).',- ('.$gajiterbilang.')</b> ditambah dengan penghasilan lainnya yang sah berdasarkan peraturan perundangan-undangan yang berlaku.</td>
                </tr>
                
                <tr>
                    <td width="80px">KEDUA</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="4">Kepadanya diberikan tunjangan <b>'.$jabatan.'</b> Pengadilan Negeri Klas I.A berdasarkan Peraturan Pemerintahan Nomor 94 Tahun 2012 sebesar <b>Rp. '.nominal($tunjangan).',- ('.$tunjanganbaru.')</b> setiap bulan.</td>
                </tr>

                <tr>
                    <td width="80px">KETIGA</td>
                    <td width="7px">:</td>
                    <td width="415px" colspan="4">Apabila dikemudian hari ternyata terdapat kekeliruan dalam Keputusan ini, akan diadakan perbaikan dan perhitungan kembali sebagaimana mestinya.</td>
                </tr>

                <tr>
                    <td colspan="6"></td>
                </tr>

                <tr>
                    <td width="80px"></td>
                    <td width="7px"></td>
                    <td width="415px" colspan="4" style="text-align: center;"><b>PETIKAN</b> Keputusan ini diberikan kepada yang berkepentingan untuk diketahui dan dipergunakan sebagaimana mestinya.</td>
                </tr>
                
            </table>
    
        </div>
    </div>
    </body>
    </html>';

    $pdf->writeHTML($html, true, false, true, false, '');

    $pdf->AddPage('P', 'F4');

    $html='<html lang="en">
    <head>
    <title></title>
    <style type="text/css">
        .tbl tr td {
        height: 10px;
    }
    </style>
    </head>
    <body>
        <div id="isi">
            <br>
            <br>
            <br>

            <table border="0" width="100%">
                <tr>
                    <td width="40%"></td>
                    <td width="60%" style="text-align: center">Ditetapkan di <b>Jakarta</b></td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center">pada tanggal <b>'.date_indo(date('Y-m-d')).'</b></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align: center"><b>DIREKTUR JENDERAL</b></td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center"><b>BADAN PERADILAN UMUM,</b></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center"><b>ttd.</b></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align: center"><b>'.$direkturjendral.'</b></td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center">Sesuai dengan Keputusan tersebut</td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center"><b>DIREKTUR</b></td>
                </tr>

                <tr>
                    <td ></td>
                    <td style="text-align: center"><b>PEMBINA TENAGA TEKNIS PERADILAN UMUM,</b></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align: center"><b>'.$direkturpembina.'</b></td>
                </tr>
            </table>

            <br>
            <br>
            <br>
            <br>
            <br>

            <table border="0" width="100%">
            <tr>
                <td>Salinan Keputusan ini disampaikan kepada :</td>
            </tr>
            <tr>
                <td>1. Ketua Mahkamah Agung RI di Jakarta.</td>
            </tr>
            <tr>
                <td>2. Ketua Badan Pemeriksaaan Keuangan di Jakarta.</td>
            </tr>

            <tr>
                <td>3. Kepala Badan Kepegawaian Negara di Jakarta.</td>
            </tr>

            <tr>
                <td>4. Sekretaris Mahkamah Agung RI di Jakarta.</td>
            </tr>

            <tr>
                <td>5. Direktur Jenderal Anggaran Kementerian Keuangan RI di Jakarta.</td>
            </tr>

            <tr>
                <td>6. Direktur Jenderal Perbendaharaan Kementerian Keuangan RI di Jakarta.</td>
            </tr>

            <tr>
                <td>7. Kepala Biro Kepegawaian Mahkamah Agung RI di Jakarta.</td>
            </tr>

            <tr>
                <td>8. Ketua Pengadilan Tinggi Kendari.</td>
            </tr>

            <tr>
                <td>9. Ketua Pengadilan Negeri Kendari.</td>
            </tr>

            <tr>
                <td>10. Kepala Kantor Pelayanan Perbendaharaan Negara di Kendari.</td>
            </tr>

            <tr>
                <td>11. PT. TASPEN Jl. Letjen Soeprapto di Jakarta Pusat.</td>
            </tr>
            
            </table>
    
        </div>
    </body>
    </html>';

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('SK_Kenaikan_Pangkat.pdf', 'I');
?>