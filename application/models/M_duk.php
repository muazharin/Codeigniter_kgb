<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_duk extends CI_Model {
    public function getAllDataDuk(){
        return $this->db->get('duk')->result_array();
    }

    public function getDataDukById($id){
        return $this->db->get_where('duk', ['id_duk'=>$id])->row_array();
    }

    public function updateDataDuk(){
        $data=[
            'nip'=>$this->input->post('nip',true),
            'nama'=>$this->input->post('nama',true),
            'pangkat'=>$this->input->post('pangkat',true),
            'golongan'=>$this->input->post('golongan',true),
            'tmt_pangkat'=>$this->input->post('tmt_pangkat',true),
            'jabatan'=>$this->input->post('jabatan',true),
            'tmt_jabatan'=>$this->input->post('tmt_jabatan',true),
            'masa_kerja_golongan_tahun'=>$this->input->post('mkgt',true),
            'masa_kerja_golongan_bulan'=>$this->input->post('mkgb',true),
            'masa_kerja_seluruh_tahun'=>$this->input->post('mkst',true),
            'masa_kerja_seluruh_bulan'=>$this->input->post('mksb',true),
            'naik_pangkat_yad'=>$this->input->post('naik_pangkat',true),
            'naik_gaji_yad'=>$this->input->post('naik_gaji',true),
            'usia'=>$this->input->post('usia',true),
            'pendidikan'=>$this->input->post('pendidikan',true),
            'keterangan'=>$this->input->post('ket',true)
        ];
        $this->db->where('id_duk',$this->input->post('id'));
        $this->db->update('duk',$data);
    }
}