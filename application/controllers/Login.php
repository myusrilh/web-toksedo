<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        // $this->load->library('session');
        
    }
    public function index()
    {
        $data['title'] = "Login";
        $data['pesan'] = "Username dan Password Salah!";
        $this->load->view('template/header',$data);
        $this->load->view('login/index',$data);
        $this->load->view('template/footer');
    }
    public function proses_login(){
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $ceklogin = $this->login_model->login($username,$password);
        
        if ($ceklogin) {
            # code...
            foreach ($ceklogin as $row);
            
            $sessdata= array(
                'idUser'=>$row->idUser,
                'nama' => $row->nama,
                'alamat' => $row->alamat,
                'pekerjaan' => $row->pekerjaan,
                'username' => $row->username,
                'password' => $row->password,
                'level' => $row->level
            );
            $this->session->set_userdata($sessdata);
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->session->userdata('level')=="customer") {
                # code...
                redirect('home/index');
            } elseif($this->session->userdata('level')=="konsultan") {
                # code...
                redirect('home/index');
            }elseif($this->session->userdata('level')=="admin"){
                redirect('admin/index');
            }
            
        } else {
            # code...
            redirect('login/index','refresh');
        }
        
    }
    public function logout(){
        
        $this->session->sess_destroy();
        redirect('login','refresh');
    }


}

/* End of file Login.php */

?>