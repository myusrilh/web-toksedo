<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class detail_produk extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('detail_produk/index');
        $this->load->view('template/footer');
    }

}


?>