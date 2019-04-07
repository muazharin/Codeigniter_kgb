<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in_user') !== TRUE){
            redirect('login');
        }
		$this->load->model('M_user');
		$this->load->helper('nominal');
	}
	
	public function index()
	{
		$id=$this->session->userdata('username');
        $data['client']=$this->M_user->dataClient();
		$data['gaji']=$this->M_user->dataGaji();
		$data['pegawai']=$this->M_user->getPegawaiById($id);
        $data['sidebar']="#mn1";
        $this->load->view('user_header',$data);
        $this->load->view('user_home',$data);
        $this->load->view('footer', $data);
	}

    public function data(){
        $id=$this->session->userdata('username');
        $data['client']=$this->M_user->dataClient();
        $data['pegawai']=$this->M_user->getPegawaiById($id);
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
			$this->load->view('user_header', $data);
            $this->load->view('user_data', $data);
            $this->load->view('footer', $data);
		}else{
			$this->M_user->ubahDataPegawai();
			$this->session->set_flashdata('pegawai', 'Diubah');
			redirect('user/data');
		}
	}
	
	public function setting_user(){
		$id=$this->session->userdata('username');
		$data['client']=$this->M_user->dataClient();
		$data['gaji']=$this->M_user->dataGaji();
		$data['pegawai']=$this->M_user->getPegawaiById($id);
		// $data['ketua']=$this->M_pegawai->ketua();
		$this->form_validation->set_rules('pb','Password Baru','required|xss_clean');
		$this->form_validation->set_rules('kpb','Konfirmasi Password','required|xss_clean|matches[pb]');
		if($this->form_validation->run()==FALSE){
			$data['sidebar']="#mn3";
			$this->load->view('user_header',$data);
			$this->load->view('setting_user',$data);
			$this->load->view('footer', $data);
		}else{
			$this->M_user->ubahPasswordUser();
			$this->session->set_flashdata('pegawai', 'Diubah');
			redirect('user/setting_user');
		}
	}
   
}