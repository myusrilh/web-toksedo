<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // $this->load->model('admin_model');
        $this->load->model('login_model');
        $this->load->model('produk_model');
        
    }
    public function index()
    {
        $data['title'] = "Halaman Home";
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
        $list['produk'] = $this->produk_model->getAllProdukAdmin();
        if ($this->input->post('keyword')) {
            # code...
            $list['produk'] = $this->produk_model->cariDataProduk();
        }
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/produk',$list);
        $this->load->view('admin/template/footer_admin');
    }

    public function tambahproduk(){
        $data['title'] = "Tambah Data Produk";
        // $data['kategori'] = ["Pertanian","Peternakan"];
        $data['tblktgr'] = $this->produk_model->getKategori();
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');        
        $this->form_validation->set_rules('harga', 'Harga Barang', 'required|numeric');        
        $this->form_validation->set_rules('detail', 'Detail Barang', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Barang', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
        }
        $this->load->view('admin/produk/tambah');
        $this->load->view('admin/template/footer_admin');
        } else {
            # code...
            $this->produk_model->tambahDataProduk();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('admin/produk','refresh');
        }
    }

    public function editProduk($id){
        $data['title'] = "Ubah Data Produk";
        $data['produk'] = $this->produk_model->getProdukByID($id);
        // $data['kategori'] = ["Pertanian","Peternakan"];
        $data['kategori'] = $this->produk_model->getKategori();
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');        
        $this->form_validation->set_rules('harga', 'Harga Barang', 'required|numeric');        
        $this->form_validation->set_rules('detail', 'Detail Barang', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Barang', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
        }
        $this->load->view('admin/produk/edit');
        $this->load->view('admin/template/footer_admin',$data);
        } else {
            # code...
            $this->produk_model->ubahDataProduk($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/produk','refresh');
        }
    }

    public function hapusProduk($id)
    {
        $this->produk_model->hapusDataProduk($id);
        $this->session->set_flashdata('flashdata', 'dihapus');
        redirect('admin/produk', 'refresh');
    }

    public function user()
    {
        $data['title'] = "Manage User";
        $list['user'] = $this->login_model->getAllUser();
        if ($this->input->post('keyword')) {
            # code...
            $list['user'] = $this->login_model->cariDataUser();
        }
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/user',$list);
        $this->load->view('admin/template/footer_admin');
    }

    public function tambahuser(){
        $data['title'] = "Tambah Data User";
        $data['level'] = ["customer","konsultan"];
        $this->form_validation->set_rules('nama', 'Nama', 'required');        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');        
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
        }
        $this->load->view('admin/user/tambah');
        $this->load->view('admin/template/footer_admin');
        } else {
            # code...
            $this->login_model->tambahDataUser();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('admin/user','refresh');
        }
    }
    public function editUser($id){
        $data['title'] = "Ubah Data User";
        $data['user'] = $this->login_model->getUserByID($id);
        $data['level'] = ["customer","konsultan"];
        $this->form_validation->set_rules('nama', 'Nama', 'required');        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');        
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
        }
        $this->load->view('admin/user/edit');
        $this->load->view('admin/template/footer_admin',$data);
        } else {
            # code...
            $this->login_model->ubahDataUser();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/user','refresh');
        }
    }

    public function hapusUser($id){
        $this->login_model->hapusDataUser($id);
        $this->session->set_flashdata('flashdata','dihapus');
        redirect('admin/user','refresh');
    }

}

/* End of file admin.php */
