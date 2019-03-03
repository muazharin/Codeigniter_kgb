<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gaji extends CI_Model {
    public function tambahDataGaji(){
        $data=[
            'golongan' => $this->input->post('gol',true),
            'masa_kerja' => $this->input->post('masa_kerja',true),
            'gaji_pokok' => $this->input->post('gaji_pokok',true)
        ];
        $this->db->insert('tb_golongan', $data);
        
    }

    public function getAllDataGaji(){
        return $this->db->get('tb_golongan')->result_array();
    }

    public function hapusGajiPegawai($id){
        $this->db->where('id_golongan', $id);
        $this->db->delete('tb_golongan');
    }
}