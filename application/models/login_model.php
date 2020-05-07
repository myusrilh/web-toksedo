<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    public function login($username,$password){
        $this->db->select('nama,alamat,pekerjaan,username,password,level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()==1) {
            # code...
            return $query->result();
        } else {
            # code...
            return false;
        }
        
    }

    public function registrasi(){
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "level" => "customer"
        ];
        $this->db->insert('user', $data);
        
    }

    public function getAllUser(){
        return $this->db->get('user')->result_array();
    }

}

/* End of file login_model.php */

?>