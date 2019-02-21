<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }
	public function index()
	{
		$data['sidebar']="#mn3";
        $this->load->view('header');
        $this->load->view('gaji');
		$this->load->view('footer', $data);
	}
}