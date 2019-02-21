<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }
	public function index()
	{
		$data['sidebar']="#mn2";
        $this->load->view('header');
        $this->load->view('pegawai');
		$this->load->view('footer', $data);
	}

	public function tambah()
	{
		$data['sidebar']="#mn2";
        $this->load->view('header');
        $this->load->view('tambah');
		$this->load->view('footer', $data);
	}
}