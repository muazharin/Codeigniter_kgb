<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model {

    public function getAllPegawai(){
        return $this->db->get('pegawai')->result_array();
    }
    
    public function tambahDataPegawai(){
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
        $this->db->insert('pegawai',$dataPegawai);

        $dataDuk = [
            'nip'=>$this->input->post('nip',true),
            'nama'=>$this->input->post('nama',true),
            'keterangan'=>$this->input->post('ket',true)
        ];
        $this->db->insert('duk',$dataDuk);

        $dataUser = [
            'username'=>$this->input->post('nip',true),
            'password'=>md5($this->input->post('nama',true)),
            'account' => 'pegawai'
        ];
        $this->db->insert('user',$dataUser);

    }

    public function hapusDataPegawai($id){
        $idu=$id+1;
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
        $this->db->where('id', $idu);
        $this->db->delete('user');
        $this->db->where('id_duk', $id);
        $this->db->delete('duk');
    }

    public function getPegawaiById($id){
        return $this->db->get_where('pegawai', ['id_pegawai'=>$id])->row_array();
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
            'password'=>md5($this->input->post('nama',true)),
            'account' => 'pegawai'
        ];
        $this->db->where('id',$this->input->post('id')+1);
        $this->db->insert('user',$dataUser);

    }
}