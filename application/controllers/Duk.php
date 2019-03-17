<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duk extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
		}
        $this->load->model('M_duk');
        $this->load->model('M_pegawai');
    }

    public function index()
	{
        $data['duk']=$this->M_duk->getAllDataDuk();
		$data['sidebar']="#mn4";
        $this->load->view('header');
        $this->load->view('data_duk',$data);
		$this->load->view('footer', $data);
    }
    
    public function data_duk($id){
        $data['pangkat']=[
            'Pembina Utama','Pembina Utama Madya','Pembina Utama Muda','Pembina Tingkat I','Pembina',
            'Penata Tingkat I','Penata','Penata Muda Tingkat I', 'Penata Muda',
            'Pengatur Tingkat I','Pengatur','Pengatur Muda Tingkat I','Pengatur Muda',
            'Juru Tingkat I','Juru','Juru Muda Tingkat I','Juru Muda'
        ];
        $data['gol']=[
            'IV/A','IV/B','IV/C','IV/D','IV/E',
            'III/A','III/B','III/C','III/D',
            'II/A','II/B','II/C','II/D',
            'I/A','I/B','I/C','I/D'
        ];
        $this->form_validation->set_rules('nip','NIP','required|xss_clean|numeric');
        $this->form_validation->set_rules('nama','Nama','required|xss_clean');
        $this->form_validation->set_rules('pangkat','Pangkat','required|xss_clean');
        $this->form_validation->set_rules('golongan','Golongan','required|xss_clean');
        $this->form_validation->set_rules('tmt_pangkat','TMT Pangkat','required|xss_clean');
        $this->form_validation->set_rules('jabatan','Jabatan','required|xss_clean');
        $this->form_validation->set_rules('tmt_jabatan','TMT Jabatan','required|xss_clean');
        $this->form_validation->set_rules('mkgt','Masa Kerja Golongan (Tahun)','required|xss_clean|numeric');
        $this->form_validation->set_rules('mkgb','Masa Kerja Golongan (Bulan)','required|xss_clean|numeric');
        $this->form_validation->set_rules('mkst','Masa Kerja Seluruhnya (Tahun)','required|xss_clean|numeric');
        $this->form_validation->set_rules('mksb','Masa Kerja Seluruhnya (Bulan)','required|xss_clean|numeric');
        $this->form_validation->set_rules('naik_pangkat','Naik Pangkat Yad','required|xss_clean');
        $this->form_validation->set_rules('naik_gaji','Naik Gaji Yad','required|xss_clean');
        $this->form_validation->set_rules('usia','Usia','required|xss_clean|numeric');
        $this->form_validation->set_rules('pendidikan','Pendidikan','required|xss_clean');
        $this->form_validation->set_rules('ket','Keterangan','required|xss_clean');
        $data['pegawai']=$this->M_pegawai->getPegawaiById($id);
        $data['duk']=$this->M_duk->getDataDukById($id);
        if($this->form_validation->run() == FALSE){
            $data['sidebar']="#mn4";
            $this->load->view('header');
            $this->load->view('duk',$data);
            $this->load->view('footer', $data);
        }else{
            $this->M_duk->updateDataDuk();
			$this->session->set_flashdata('duk', 'Diperbarui');
			redirect('duk');
        }
    }

    public function export(){

		$data['duk']=$this->M_duk->getAllDataDuk();

		require(APPPATH.'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$objPhpExcel = new PHPExcel();

		$objPhpExcel->getProperties()->setCreator("codeXV");
		$objPhpExcel->getProperties()->setLastModifiedBy("codeXV");
		$objPhpExcel->getProperties()->setTitle("Data Duk");
		$objPhpExcel->getProperties()->setSubject("codeXV");
		$objPhpExcel->getProperties()->setDescription("Data Duk PN Kendari");

		$objPhpExcel->setActiveSheetIndex(0);

		$objPhpExcel->getActiveSheet()->setCellValue('A1','No');
		$objPhpExcel->getActiveSheet()->setCellValue('B1','NIP');
		$objPhpExcel->getActiveSheet()->setCellValue('C1','Nama');
		$objPhpExcel->getActiveSheet()->setCellValue('D1','Pangkat');
		$objPhpExcel->getActiveSheet()->setCellValue('E1','Golongan');
		$objPhpExcel->getActiveSheet()->setCellValue('F1','TMT Pangkat');
		$objPhpExcel->getActiveSheet()->setCellValue('G1','Jabatan');
		$objPhpExcel->getActiveSheet()->setCellValue('H1','TMT Jabatan');
		$objPhpExcel->getActiveSheet()->setCellValue('I1','Masa Kerja Golongan (Tahun)');
		$objPhpExcel->getActiveSheet()->setCellValue('J1','Masa Kerja Golongan (Bulan)');
		$objPhpExcel->getActiveSheet()->setCellValue('K1','Masa Kerja Keseluruhan (Tahun)');
		$objPhpExcel->getActiveSheet()->setCellValue('L1','Masa Kerja Keseluruhan (Bulan)');
		$objPhpExcel->getActiveSheet()->setCellValue('M1','Naik Pangkat YAD');
		$objPhpExcel->getActiveSheet()->setCellValue('N1','Naik Gaji YAD');
		$objPhpExcel->getActiveSheet()->setCellValue('O1','Usia');
        $objPhpExcel->getActiveSheet()->setCellValue('P1','Pendidikan');
        $objPhpExcel->getActiveSheet()->setCellValue('Q1','Keterangan');
        
		$baris=2;
		$x=1;

		foreach($data['duk'] as $p){
			$objPhpExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
			$objPhpExcel->getActiveSheet()->setCellValue('B'.$baris, $p['nip']);
			$objPhpExcel->getActiveSheet()->setCellValue('C'.$baris, $p['nama']);
			$objPhpExcel->getActiveSheet()->setCellValue('D'.$baris, $p['pangkat']);
			$objPhpExcel->getActiveSheet()->setCellValue('E'.$baris, $p['golongan']);
			$objPhpExcel->getActiveSheet()->setCellValue('F'.$baris, $p['tmt_pangkat']);
			$objPhpExcel->getActiveSheet()->setCellValue('G'.$baris, $p['jabatan']);
			$objPhpExcel->getActiveSheet()->setCellValue('H'.$baris, $p['tmt_jabatan']);
			$objPhpExcel->getActiveSheet()->setCellValue('I'.$baris, $p['masa_kerja_golongan_tahun']);
			$objPhpExcel->getActiveSheet()->setCellValue('J'.$baris, $p['masa_kerja_golongan_bulan']);
			$objPhpExcel->getActiveSheet()->setCellValue('K'.$baris, $p['masa_kerja_seluruh_tahun']);
			$objPhpExcel->getActiveSheet()->setCellValue('L'.$baris, $p['masa_kerja_seluruh_bulan']);
			$objPhpExcel->getActiveSheet()->setCellValue('M'.$baris, $p['naik_pangkat_yad']);
			$objPhpExcel->getActiveSheet()->setCellValue('N'.$baris, $p['naik_gaji_yad']);
			$objPhpExcel->getActiveSheet()->setCellValue('O'.$baris, $p['usia']);
			$objPhpExcel->getActiveSheet()->setCellValue('P'.$baris, $p['pendidikan']);
			$objPhpExcel->getActiveSheet()->setCellValue('Q'.$baris, $p['keterangan']);
			$x++;
			$baris++;
		}

		$filename="Data Duk PN Kendari".date('d-m-Y').'xlsx';

		$objPhpExcel->getActiveSheet()->setTitle('Data Pegawai');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename"'.$filename.'"');
		header('Cache-Control: max-age=0');

		$write=PHPExcel_IOFactory::createWriter($objPhpExcel,'Excel2007');
		$write->save('php://output');

		exit;
	}
}