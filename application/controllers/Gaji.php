<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        $this->load->model('M_gaji');
        $this->load->helper('nominal');
        $this->load->helper('text');
    }
	public function index()
	{
        $data['gaji']=$this->M_gaji->getAllDataGaji();
        $data['sidebar']="#mn3";
        $this->load->view('header');
        $this->load->view('gaji',$data);
        $this->load->view('footer', $data);
        
	}
    
    public function tambah()
    {
        $data['gol']=[
            'IV/a','IV/b','IV/c','IV/d','IV/e',
            'III/a','III/b','III/c','III/d',
            'II/a','II/b','II/c','II/d',
            'I/a','I/b','I/c','I/d'
        ];
        $this->form_validation->set_rules('gol', 'Golongan', 'required|xss_clean');
        $this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'required|xss_clean');
        $this->form_validation->set_rules('gaji_pokok', 'Golongan', 'required|xss_clean|numeric');
    
        if($this->form_validation->run()==FALSE){
            $data['sidebar']="#mn3";
            $this->load->view('header');
            $this->load->view('tambah-gaji',$data);
            $this->load->view('footer', $data);
        }else{
            $this->M_gaji->tambahDataGaji();
			$this->session->set_flashdata('gaji', 'Ditambah');
			redirect('gaji');
        }
    }

    public function detailDataGaji($id){
        $data['gol']=[
            'IV/a','IV/b','IV/c','IV/d','IV/e',
            'III/a','III/b','III/c','III/d',
            'II/a','II/b','II/c','II/d',
            'I/a','I/b','I/c','I/d'
        ];
        $this->form_validation->set_rules('gol', 'Golongan', 'required|xss_clean');
        $this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'required|xss_clean');
        $this->form_validation->set_rules('gaji_pokok', 'Golongan', 'required|xss_clean|numeric');
        $data['gaji']=$this->M_gaji->getDataGajiById($id);
        if($this->form_validation->run()==FALSE){
            $data['sidebar']="#mn3";
            $this->load->view('header');
            $this->load->view('edit-gaji',$data);
            $this->load->view('footer', $data);
        }else{
            $this->M_gaji->updateDataGaji();
			$this->session->set_flashdata('gaji', 'Diperbarui');
			redirect('gaji');
        }
    }

    public function hapusDataGaji($id){
        $this->M_gaji->hapusGajiPegawai($id);
		$this->session->set_flashdata('gaji', 'Dihapus');
		redirect('gaji');
    }

    public function export(){

		$data['gaji']=$this->M_gaji->getAllDataGaji();

		require(APPPATH.'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$objPhpExcel = new PHPExcel();

		$objPhpExcel->getProperties()->setCreator("codeXV");
		$objPhpExcel->getProperties()->setLastModifiedBy("codeXV");
		$objPhpExcel->getProperties()->setTitle("Tabel Gaji");
		$objPhpExcel->getProperties()->setSubject("codeXV");
		$objPhpExcel->getProperties()->setDescription("Tabel Gaji PN Kendari");

		$objPhpExcel->setActiveSheetIndex(0);

		$objPhpExcel->getActiveSheet()->setCellValue('A1','No');
		$objPhpExcel->getActiveSheet()->setCellValue('B1','Golongan');
		$objPhpExcel->getActiveSheet()->setCellValue('C1','Masa Kerja (Tahun)');
		$objPhpExcel->getActiveSheet()->setCellValue('D1','Gaji Pokok');
        
		$baris=2;
		$x=1;

		foreach($data['gaji'] as $p){
			$objPhpExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
			$objPhpExcel->getActiveSheet()->setCellValue('B'.$baris, $p['golongan']);
			$objPhpExcel->getActiveSheet()->setCellValue('C'.$baris, $p['masa_kerja']);
            $objPhpExcel->getActiveSheet()->setCellValue('D'.$baris, $p['gaji_pokok']);
            
			$x++;
			$baris++;
		}

		$filename="Tabel Gaji PN Kendari".date('d-m-Y').'xlsx';

		$objPhpExcel->getActiveSheet()->setTitle('Data Pegawai');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename"'.$filename.'"');
		header('Cache-Control: max-age=0');

		$write=PHPExcel_IOFactory::createWriter($objPhpExcel,'Excel2007');
		$write->save('php://output');

		exit;
	}
}