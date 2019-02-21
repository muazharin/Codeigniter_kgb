<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
    
    public function usercheck($user, $password)
	{
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $result = $this->db->get('user', 1);
        return $result;
        
    }
}