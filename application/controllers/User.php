<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index()
	{
        $data['sidebar']="#mn1";
        $this->load->view('user_header');
        $this->load->view('user_home');
        $this->load->view('footer', $data);
	}

    public function data()
    {
        $data['sidebar']="#mn2";
        $this->load->view('user_header');
        $this->load->view('user_data');
        $this->load->view('footer', $data);
    }
   
}