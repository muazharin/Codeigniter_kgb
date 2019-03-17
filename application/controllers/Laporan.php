<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    public function __construct() {   
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function index() {
        echo "JOSh";
    }

    public function print($id=1) {
        $this->load->view('laporan');
    }
}