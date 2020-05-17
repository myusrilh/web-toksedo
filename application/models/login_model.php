<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    public function login($username,$password){
        $this->db->select('idUser,gambarProfil,nama,alamat,pekerjaan,username,password,level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()==1) {
            # code...
            return $query->result();
        } else {
            # code...
            return false;
        }
        
    }

    public function getGambarProfil($id){
        $this->db->select('gambarProfil');
        $this->db->from('user');
        $this->db->where('idUser', $id);
        return $this->db->get()->result_array();
    }

    public function registrasi($namaFile){
        $data = [
            "gambarProfil" => $namaFile,
            "nama" => $this->input->post('nama'),
            "gender" => $this->input->post('gender'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "level" => "customer"
        ];
        $this->db->insert('user', $data);
        
    }

    public function tambahDataUser(){
        $data = [
            "nama" => $this->input->post('nama'),
            "gender" => $this->input->post('gender'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "level" => $this->input->post('role')
        ];
        $this->db->insert('user', $data);
        
    }
    public function ubahDataUser(){
        $data = [
            "nama" => $this->input->post('nama'),
            "gender" => $this->input->post('gender'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "level" => $this->input->post('role')
            
        ];
        $this->db->where('idUser', $this->input->post('idUser'));
        $this->db->update('user', $data);
        
    }
    public function editProfile($id,$level,$namaFile){
        $this->db->select('gambarProfil');
        $this->db->from('user');
        $this->db->where('idUser', $id);
        $gambar = $this->db->get()->result_array();
        
        foreach($gambar as $gbr);
        if ($gbr['gambarProfil'] != null) {
            # code...
            if ($namaFile == null) {
                # code...
                $namaFile = $gbr['gambarProfil'];
            }
        }else if($gbr['gambarProfil'] == null && $namaFile == null){
            $namaFile = null;
        }

        $data = [
            "gambarProfil" => $namaFile,
            "nama" => $this->input->post('nama'),
            "gender" => $this->input->post('gender'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "level" => $level
            
        ];
        $this->db->where('idUser', $this->input->post('idUser'));
        $this->db->update('user', $data);
        
        $this->db->select('idUser,gambarProfil,nama,alamat,pekerjaan,username,password,level');
        $this->db->from('user');
        $this->db->where('idUser', $this->input->post('idUser'));
        $query = $this->db->get();
        return $query->result();
        
    }
    

    public function getAllUser(){
        return $this->db->get('user')->result_array();
    }
    public function getUserByID($id){
        return $this->db->get_where('user',['idUser'=>$id])->result_array();
    }
    
    public function cariDataUser(){
        $keyword=$this->input->post('keyword');
        $this->db->like('idUser',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('pekerjaan',$keyword);
        $this->db->or_like('username',$keyword);
        $this->db->or_like('level',$keyword);
        return $this->db->get('user')->result_array();
    }
    
    public function hapusDataUser($id){
        $this->db->where('idUser',$id);
        $this->db->delete('user');
    }

}

/* End of file login_model.php */

?>