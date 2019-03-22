<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
		}
		$this->load->model('M_pegawai');
    }
	public function index()
	{
		$data['sidebar']="#mn2";
		$data['pegawai']=$this->M_pegawai->getAllPegawai();
        $this->load->view('header');
        $this->load->view('pegawai', $data);
		$this->load->view('footer', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|xss_clean|numeric|max_length[18]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|xss_clean');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'xss_clean');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'xss_clean');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required|xss_clean');
		$this->form_validation->set_rules('agama', 'Agama', 'required|xss_clean');
		$this->form_validation->set_rules('no_telp', 'No Telp', 'xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'xss_clean');
		$this->form_validation->set_rules('ket', 'Keterangan', 'xss_clean');
		if($this->form_validation->run()==FALSE){
			$data['sidebar']="#mn2";
			$this->load->view('header');
			$this->load->view('tambah');
			$this->load->view('footer', $data);
		}else{
			$this->M_pegawai->tambahDataPegawai();
			$this->session->set_flashdata('pegawai', 'Ditambahkan');
			redirect('pegawai');
		}
	}

	public function detailPegawai($id){
		$data['pegawai']=$this->M_pegawai->getPegawaiById($id);
		$data['gol_darah']=['A','B','AB','O'];
		$data['jk']=['Laki-laki','Perempuan'];
		$data['agama']=['Islam','Protestan','Katholik','Hindu','Budha'];
	
		$this->form_validation->set_rules('nip', 'NIP', 'required|xss_clean|numeric|max_length[18]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|xss_clean');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|xss_clean');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|xss_clean');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required|xss_clean');
		$this->form_validation->set_rules('agama', 'Agama', 'required|xss_clean');
		$this->form_validation->set_rules('no_telp', 'No Telp', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|xss_clean');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required|xss_clean');
		
		if($this->form_validation->run()==FALSE){
			$data['sidebar']="#mn2";
			$this->load->view('header');
			$this->load->view('profil',$data);
			$this->load->view('footer', $data);
		}else{
			$this->M_pegawai->ubahDataPegawai();
			$this->session->set_flashdata('pegawai', 'Diubah');
			redirect('pegawai');
		}
	}

	public function hapusPegawai($nip){
		$this->M_pegawai->hapusDataPegawai($nip);
		$this->session->set_flashdata('pegawai', 'Dihapus');
		redirect('pegawai');
	}

	public function resetPassword(){
		$this->form_validation->set_rules('nip', 'NIP', 'required|xss_clean|numeric');
		if($this->form_validation->run()==FALSE){
			//redirect('pegawai',refresh);
			echo "gagal!";
		}else{
			$this->M_pegawai->resetPass();
			$this->session->set_flashdata('pegawai', 'Direset');
			redirect('pegawai');
		}
	}

	public function setting(){
		$data['ketua']=$this->M_pegawai->ketua();
		$this->form_validation->set_rules('pb','Password Baru','required|xss_clean');
		$this->form_validation->set_rules('kpb','Konfirmasi Password','required|xss_clean|matches[pb]');
		if($this->form_validation->run()==FALSE){
			$data['sidebar']="#mn5";
			$this->load->view('header');
			$this->load->view('setting',$data);
			$this->load->view('footer', $data);
		}else{
			$this->M_pegawai->ubahPassword();
			$this->session->set_flashdata('pegawai', 'Diubah');
			redirect('setting');
		}
	}
	
	public function upKetua(){
		$data['ketua']=$this->M_pegawai->ketua();
		$this->form_validation->set_rules('namaK','Nama Ketua PN Kendari','required|xss_clean');
		$this->form_validation->set_rules('nipK','NIP Ketua PN Kendari','required|xss_clean|max_length[18]');
		if($this->form_validation->run()==FALSE){
			$data['sidebar']="#mn5";
			$this->load->view('header');
			$this->load->view('setting',$data);
			$this->load->view('footer', $data);
		}else{
			$this->M_pegawai->resetKetua();
			$this->session->set_flashdata('ketua', 'Diubah');
			redirect('setting');
		}
	}

	

	public function export(){

		$data['pegawai']=$this->M_pegawai->getAllPegawai();

		require(APPPATH.'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$objPhpExcel = new PHPExcel();

		$objPhpExcel->getProperties()->setCreator("codeXV");
		$objPhpExcel->getProperties()->setLastModifiedBy("codeXV");
		$objPhpExcel->getProperties()->setTitle("Data Pegawai");
		$objPhpExcel->getProperties()->setSubject("codeXV");
		$objPhpExcel->getProperties()->setDescription("Data Pegawai PN Kendari");

		$objPhpExcel->setActiveSheetIndex(0);

		$objPhpExcel->getActiveSheet()->setCellValue('A1','No');
		$objPhpExcel->getActiveSheet()->setCellValue('B1','NIP');
		$objPhpExcel->getActiveSheet()->setCellValue('C1','Nama');
		$objPhpExcel->getActiveSheet()->setCellValue('D1','Jenis Kelamin');
		$objPhpExcel->getActiveSheet()->setCellValue('E1','Tempat Lahir');
		$objPhpExcel->getActiveSheet()->setCellValue('F1','Tanggal Lahir');
		$objPhpExcel->getActiveSheet()->setCellValue('G1','Golongan Darah');
		$objPhpExcel->getActiveSheet()->setCellValue('H1','Agama');
		$objPhpExcel->getActiveSheet()->setCellValue('I1','No Telpon');
		$objPhpExcel->getActiveSheet()->setCellValue('J1','Email');
		$objPhpExcel->getActiveSheet()->setCellValue('K1','Alamat');
		$objPhpExcel->getActiveSheet()->setCellValue('L1','Keterangan');

		$baris=2;
		$x=1;

		foreach($data['pegawai'] as $p){
			$objPhpExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
			$objPhpExcel->getActiveSheet()->setCellValue('B'.$baris, $p['nip']);
			$objPhpExcel->getActiveSheet()->setCellValue('C'.$baris, $p['nama']);
			$objPhpExcel->getActiveSheet()->setCellValue('D'.$baris, $p['jenis_kelamin']);
			$objPhpExcel->getActiveSheet()->setCellValue('E'.$baris, $p['tempat_lahir']);
			$objPhpExcel->getActiveSheet()->setCellValue('F'.$baris, $p['tgl_lahir']);
			$objPhpExcel->getActiveSheet()->setCellValue('G'.$baris, $p['golongan_darah']);
			$objPhpExcel->getActiveSheet()->setCellValue('H'.$baris, $p['agama']);
			$objPhpExcel->getActiveSheet()->setCellValue('I'.$baris, $p['no_telp']);
			$objPhpExcel->getActiveSheet()->setCellValue('J'.$baris, $p['email']);
			$objPhpExcel->getActiveSheet()->setCellValue('K'.$baris, $p['alamat']);
			$objPhpExcel->getActiveSheet()->setCellValue('L'.$baris, $p['keterangan']);
			$x++;
			$baris++;
		}

		$filename="Data Pegawai PN Kendari".date('d-m-Y').'xlsx';

		$objPhpExcel->getActiveSheet()->setTitle('Data Pegawai');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename"'.$filename.'"');
		header('Cache-Control: max-age=0');

		$write=PHPExcel_IOFactory::createWriter($objPhpExcel,'Excel2007');
		$write->save('php://output');

		exit;
	}
	
}