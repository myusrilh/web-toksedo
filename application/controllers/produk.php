<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
        
    }
    public function index()
    {
        $data['title'] = "Produk";
        $list['produk'] = $this->produk_model->getAllProduk();
        $this->load->view('template/header',$data);
        $this->load->view('produk/index',$list);
        $this->load->view('template/footer');
    }

}

/* End of file produk.php */

?>