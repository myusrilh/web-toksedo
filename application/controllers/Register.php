<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        $data['title'] = "Register";
        $this->form_validation->set_rules('nama', 'Nama', 'required');        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');        
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('register/index');
            $this->load->view('template/footer');
        } else {
            # code...
            $this->login_model->registrasi();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('login','refresh');
        }
    }

}

/* End of file Register.php */

?>