<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_duk extends CI_Model {
    public function getAllDataDuk(){
        return $this->db->get('duk')->result_array();
    }

    public function getDataDukById($id){
        return $this->db->get_where('duk', ['id_duk'=>$id])->row_array();
    }

    public function getAllAdmin(){
        $query = $this->db->query("SELECT COUNT(*) FROM user WHERE account='admin'");
        return $query->row_array();
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

    public function dataGaji($id,$nip){
        $query = $this->db->query('SELECT gaji_pokok FROM tb_golongan WHERE golongan = (SELECT golongan FROM duk WHERE nip = '.$nip.') AND masa_kerja = (SELECT masa_kerja_golongan_tahun FROM duk WHERE nip = '.$nip.' )');
        return $query->row_array();
    }
    
    public function dataGajiBaru($id,$nip){
        $query = $this->db->query('SELECT gaji_pokok FROM tb_golongan WHERE golongan = (SELECT golongan FROM duk WHERE nip = '.$nip.') AND masa_kerja = ((SELECT masa_kerja_golongan_tahun FROM duk WHERE nip = '.$nip.' )+2)');
        return $query->row_array();
    }

    public function getKetua(){
        $query = $this->db->query("SELECT nama FROM duk WHERE jabatan='Ketua'");
        return $query->row_array();
    }
    
    public function getNipKetua(){
        $query = $this->db->query("SELECT nip FROM duk WHERE jabatan='Ketua'");
        return $query->row_array();
    }

    public function updateDataKGB($id){
        $data=[
            'masa_kerja_golongan_tahun'=>$this->input->post('mkgt2',true),
            'naik_gaji_yad'=>$this->input->post('tmt_gaji3',true)
        ];
        $this->db->where('id_duk',$id);
        $this->db->update('duk',$data);
    }
}