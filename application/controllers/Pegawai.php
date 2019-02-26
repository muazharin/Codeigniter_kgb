<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
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
	
		$this->form_validation->set_rules('nip', 'NIP', 'required|xss_clean|numeric');
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
	
}