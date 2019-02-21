<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    
    public function index()
	{
        $this->load->view('login');
    }
    
    public function auth(){
        $user =  $this->input->post('username', true);
        $password = md5($this->input->post('pass', true));
        $valid = $this->M_login->usercheck($user, $password);
        if($valid->num_rows()>0){
            $data = $valid->row_array();
            $id = $data['id'];
            $user = $data['username'];
            $account = $data['account'];
            $sesdata = array(
                'id' => $id,
                'username' => $user,
                'account' => $account,
                'logged_in' => true
            );
            $this->session->set_userdata($sesdata);
            if($account === 'admin'){
                redirect('home');
            }elseif($account === 'client'){
                redirect('client');
            }else{
                redirect('login');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
        }
        
    }
    public function logout(){
        $this->session->unset_userdata('username');
		$this->session->unset_userdata('account');
		session_destroy();
		redirect('login');
    }
}