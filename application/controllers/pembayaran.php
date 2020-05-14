<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->model('login_model');
        $this->load->model('pembayaran_model');
        
    }
    public function index()
    {
        $data['title'] = "Pembayaran";
        $data['pembayaran'] = $this->pembayaran_model->getAllPembayaran();
        $total = $this->input->post('harga') * $this->input->post('jumlah');
        $data['produk'] = [
            'idProduk' => $this->input->post('idProduk'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'totalBelanja' => $total
        ];
        
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');   
        }
        $this->load->view('pembayaran/index',$data);
        $this->load->view('template/footer');
    }

}


?>