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
        $this->load->model('testimoni_model');
        $this->load->model('transaksi_model');
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
    public function testimoni()
    {
        $data['title'] = "Manage Testimoni";
        $data['testimoni'] = $this->testimoni_model->getAllTestimoni();
        if ($this->input->post('keyword')) {
            # code...
            $data['testimoni'] = $this->testimoni_model->cariDataTestimoni();
        }
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/testimoni',$data);
        $this->load->view('admin/template/footer_admin');
    }

    public function tambahtestimoni(){
        $data['title'] = "Tambah Data Testimoni";
                
        $this->form_validation->set_rules('judul', 'Judul Gambar', 'required');        
        $this->form_validation->set_rules('detail', 'Detail Gambar', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/template/header_admin',$data);
            if ($this->session->userdata('nama')!=null) {
                # code...
                $this->load->view('admin/template/sidebar_admin');
            }
            $this->load->view('admin/testimoni/tambah');
            $this->load->view('admin/template/footer_admin');
        } else {
            # code...
            
            $config['upload_path'] = FCPATH . 'images/testimoni/';
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
                $data['title'] = "Tambah Data Testimoni";
                $data['uploadError'] = array('upload_error' => $this->upload->display_errors());
                $this->load->view('admin/template/header_admin',$data);
                if ($this->session->userdata('nama')!=null) {
                    # code...
                    $this->load->view('admin/template/sidebar_admin');
                }
                $this->load->view('admin/testimoni/tambah',$data);
                $this->load->view('admin/template/footer_admin');
            }else{
                $file_info = $this->upload->data();
                $namaFile = $file_info['file_name'];
                $this->testimoni_model->tambahDataTestimoni($namaFile);
                $this->session->set_flashdata('flash-data', 'ditambahkan');
                redirect('admin/testimoni','refresh');
                
            }
        }
    }

    public function editTestimoni($id){
        $data['title'] = "Ubah Data Testimoni";
        $data['testimoni'] = $this->testimoni_model->getTestimoniByID($id);
        $this->form_validation->set_rules('judul', 'Judul Gambar', 'required');               
        $this->form_validation->set_rules('detail', 'Detail Gambar', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
        }
        $this->load->view('admin/testimoni/edit');
        $this->load->view('admin/template/footer_admin',$data);
        } else {
            # code...
            $config['upload_path'] = FCPATH . 'images/testimoni/';
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
            
            $testimoni = $this->testimoni_model->getGambarTestimoni($id);    
            
            foreach ($testimoni as $t);
            if ($this->upload->do_upload('gambar')){
                if ($t['namaGambar'] != null) {
                    # code...
                    // menghapus file gambarProfil yang lama pada folder
                    unlink(FCPATH . "images/testimoni/".$t['namaGambar']);
                }
                $file_info = $this->upload->data();
                $namaFile = $file_info['file_name'];
            }else{
                $namaFile = $t['namaGambar'];
            }
            $this->testimoni_model->ubahDataTestimoni($id, $namaFile);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/testimoni','refresh');
            
        }
    }

    public function hapusTestimoni($id)
    {
        $testimoni = $this->testimoni_model->getGambarTestimoni($id);    
        foreach ($testimoni as $t) {
            # code...
            if ($t['namaGambar'] != null) {
                # code...
                // menghapus file gambarTestimoni yang lama pada folder
                unlink(FCPATH . "images/testimoni/".$t['namaGambar']);
            }
        
        }
        $this->testimoni_model->hapusTestimoni($id);
        $this->session->set_flashdata('flashdata', 'dihapus');
        redirect('admin/testimoni', 'refresh');
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
    public function transaksi()
    {
        $data['title'] = "Manage Transaksi";
        $data['transaksi'] = $this->transaksi_model->getAllTransaksiAdmin();
        if ($this->input->post('keyword')) {
            # code...
            $list['transaksi'] = $this->transaksi_model->cariDataTransaksi();
        }
        $this->load->view('admin/template/header_admin',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('admin/template/sidebar_admin');
            
        }
        $this->load->view('admin/transaksi',$data);
        $this->load->view('admin/template/footer_admin');
    }

    public function hapusTransaksi($id){
        $this->transaksi_model->hapusDataTransaksi($id);
        $this->session->set_flashdata('flashdata','dihapus');
        redirect('admin/transaksi','refresh');
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
            $config['upload_path'] = FCPATH . 'images/produk/';
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
            $this->produk_model->tambahDataProduk($namaFile);
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
            

            $config['upload_path'] = FCPATH . 'images/produk/';
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
            
            $produk = $this->produk_model->getGambarProduk($id);
            
            foreach ($produk as $p);
            // menghapus file gambarProfil yang lama pada folder
            
            if ($this->upload->do_upload('gambar'))
            {
                if ($p['gambarProduk'] != null) {
                    unlink((FCPATH . "images/produk/".$p['gambarProduk']));
                }
                $file_info = $this->upload->data();
                $namaFile = $file_info['file_name'];
            }else{
                $namaFile = $p['gambarProduk'];
            }
            $this->produk_model->ubahDataProduk($id, $namaFile);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/produk','refresh');
        }
    }

    public function hapusProduk($id)
    {
        $produk = $this->produk_model->getGambarProduk($id);
        foreach ($produk as $p) {
            # code...
            if ($p['gambarProduk'] != null) {
                # code...
                // menghapus file gambarProduk yang lama pada folder
                unlink((FCPATH . "images/produk/".$p['gambarProduk']));
            }
        }
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
        $profile = $this->login_model->getGambarProfil($id);
        foreach ($profile as $p);
        if($p['gambarProfil'] != null){
            unlink((FCPATH . "images/profile/".$p['gambarProfil']));
        }
        $this->login_model->hapusDataUser($id);
        $this->session->set_flashdata('flashdata','dihapus');
        redirect('admin/user','refresh');
    }

}

/* End of file admin.php */
