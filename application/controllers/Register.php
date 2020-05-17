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
            $config['upload_path'] = FCPATH . 'images/profile/';
            if(is_file($config['upload_path']))
            {
                chmod($config['upload_path'], 777); ## this should change the permissions
            }
            
            $config['allowed_types'] = 'jpg|png|jpeg'; //Images extensions accepted
            $config['max_size']    = '5120';
            $config['max_width'] = 11024;
            $config['max_height'] = 7168;
            $config['overwrite'] = TRUE; 
            $this->load->library('upload',$config); //Load the upload CI library
            
            if (!$this->upload->do_upload('gambar'))
            {
                $namaFile = null;
            }else{
                $file_info = $this->upload->data();
                $namaFile = $file_info['file_name'];
            }
            $this->login_model->registrasi($namaFile);
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('login','refresh');
        }
    }

}

/* End of file Register.php */

?>