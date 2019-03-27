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
            'password'=>md5($this->input->post('nip',true)),
            'account' => 'pegawai'
        ];
        $this->db->insert('user',$dataUser);

        $dataSK = [
            'nip'=>$this->input->post('nip')
        ];
        $this->db->insert('sk',$dataSK);

    }

    public function hapusDataPegawai($nip){
        $this->db->where('nip', $nip);
        $this->db->delete('pegawai');
        $this->db->where('username', $nip);
        $this->db->delete('user');
        $this->db->where('nip', $nip);
        $this->db->delete('duk');
        $this->db->where('nip', $nip);
        $this->db->delete('sk');
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
            'password'=>md5($this->input->post('nip',true)),
            'account' => 'pegawai'
        ];
        $this->db->where('username',$this->input->post('nip1'));
        $this->db->update('user',$dataUser);

    }

    public function resetPass(){
        $data=[
            'username'=>$this->input->post('nip',true),
            'password'=>md5($this->input->post('nip',true))
        ];
        $this->db->where('username',$this->input->post('nip',true));
        $this->db->update('user', $data);
    }

    public function ubahPassword(){
        $data=[
            'username' => 'admin',
            'password' => md5($this->input->post('pb',true))
        ];
        $this->db->where('id', 1);
        $this->db->update('user',$data);
    }
    
    
    public function ketua(){
        return $this->db->get_where('ketua_pn', ['id_ketua'=>1])->row_array();
    }

    public function resetKetua(){
        $data=[
            'nama' => $this->input->post('namaK',true),
            'nip' => $this->input->post('nipK',true)
        ];
        $this->db->where('id_ketua', 1);
        $this->db->update('ketua_pn',$data);
    }
}