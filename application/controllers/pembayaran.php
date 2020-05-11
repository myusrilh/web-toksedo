<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
    }
    public function index()
    {
        $data['title'] = "Pembayaran";
        $data['pembayaran'] = $this->produk_model->getAllPembayaran();
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