<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
    public function dataClient(){
        $id=$this->session->userdata('username');
        return $this->db->get_where('duk', ['nip'=>$id])->row_array();
    }
    public function getPegawaiById($id){
        return $this->db->get_where('pegawai', ['nip'=>$id])->row_array();
    }
    
    public function dataGaji(){
        $nip = $this->session->userdata('username');
        $query = $this->db->query('SELECT gaji_pokok FROM tb_golongan WHERE golongan = (SELECT golongan FROM duk WHERE nip = '.$nip.') AND masa_kerja = (SELECT masa_kerja_golongan_tahun FROM duk WHERE nip = '.$nip.' )');
        return $query->row_array();
    }
    
    public function ubahDataPegawai(){
        $dataPegawai = [
            'nip'=>$this->input->post('nip',true),
            'nama'=>$this->input->post('nama',true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin',true),
            'tempat_lahir'=>$this->input->post('tempat_lahir',true),
            'tgl_lahir'=>$this->input->post('tgl_lahir',true),
            'umur'=>'0',
            'golongan_darah'=>$this->input->post('gol_darah',true),
            'agama'=>$this->input->post('agama',true),
            'no_telp'=>$this->input->post('no_telp',true),
            'email'=>$this->input->post('email',true),
            'alamat'=>$this->input->post('alamat',true),
            'keterangan'=>$this->input->post('ket',true)
        ];
        $this->db->where('id_pegawai',$this->input->post('id'));
        $this->db->update('pegawai',$dataPegawai);

        $dataDuk = [
            'nip'=>$this->input->post('nip',true),
            'nama'=>$this->input->post('nama',true),
            'keterangan'=>$this->input->post('ket',true)
        ];
        $this->db->where('id_duk',$this->input->post('id'));
        $this->db->update('duk',$dataDuk);

        $dataUser = [
            'username'=>$this->input->post('nip',true),
            'password'=>md5($this->input->post('nip',true)),
            'account' => 'pegawai'
        ];
        $this->db->where('username',$this->input->post('nip'));
        $this->db->update('user',$dataUser);

    }

    public function ubahPasswordUser(){
        $data=[
            'username' => $this->session->userdata('username'),
            'password' => md5($this->input->post('pb',true))
        ];
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('user',$data);
    }

}