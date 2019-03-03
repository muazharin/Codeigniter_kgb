<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
    }
	public function index()
	{
        $data['tot_pgw']=$this->db->count_all_results('pegawai');
        $data['tot_usr']=$this->db->count_all_results('user');
		$data['sidebar']="#mn1";
        $this->load->view('header');
        $this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}