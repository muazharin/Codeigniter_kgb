<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('M_gaji');
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
        $this->form_validation->set_rules('gol', 'Golongan', 'required|xss_clean');
        $this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'required|xss_clean');
        $this->form_validation->set_rules('gaji_pokok', 'Golongan', 'required|xss_clean|numeric');
    
        if($this->form_validation->run()==FALSE){
            $data['sidebar']="#mn3";
            $this->load->view('header');
            $this->load->view('tambah-gaji');
            $this->load->view('footer', $data);
        }else{
            $this->M_gaji->tambahDataGaji();
			$this->session->set_flashdata('gaji', 'Ditambah');
			redirect('gaji');
        }
    }

    public function hapusDataGaji($id){
        $this->M_gaji->hapusGajiPegawai($id);
		$this->session->set_flashdata('gaji', 'Dihapus');
		redirect('gaji');
    }
}