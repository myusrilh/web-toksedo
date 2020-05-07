<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $this->load->model('login_model');
        
    }
    public function index()
    {
        $data['title'] = "Halaman Admin";
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer_admin');
    }
    public function produk()
    {
        $data['title'] = "Manage Produk";
        $list['produk'] = $this->admin_model->getAllProduk();
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/produk',$list);
        $this->load->view('admin/template/footer_admin');
    }

    public function user()
    {
        $data['title'] = "Manage User";
        $list['user'] = $this->login_model->getAllUser();
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/user',$list);
        $this->load->view('admin/template/footer_admin');
    }


    public function hapus($id){
        $this->admin_model->hapusProduk($id);
        $this->session->set_flashdata('flashdata','dihapus');
        redirect('admin','refresh');
    }

}

/* End of file admin.php */
