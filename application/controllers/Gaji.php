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
            'IV/A','IV/B','IV/C','IV/D','IV/E',
            'III/A','III/B','III/C','III/D',
            'II/A','II/B','II/C','II/D',
            'I/A','I/B','I/C','I/D'
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
            'IV/A','IV/B','IV/C','IV/D','IV/E',
            'III/A','III/B','III/C','III/D',
            'II/A','II/B','II/C','II/D',
            'I/A','I/B','I/C','I/D'
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
}