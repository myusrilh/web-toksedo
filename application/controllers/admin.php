<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        
    }
    public function index()
    {
        $data['title'] = "Admin";
        $list['produk'] = $this->admin_model->getAllProduk();
        $this->load->view('template/header',$data);
        $this->load->view('admin/index',$list);
        $this->load->view('template/footer');
    }

    public function hapus($id){
        $this->admin_model->hapusProduk($id);
        $this->session->set_flashdata('flashdata','dihapus');
        redirect('admin','refresh');
    }

}

/* End of file admin.php */
