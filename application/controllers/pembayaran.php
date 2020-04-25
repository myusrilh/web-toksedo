<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('pembayaran/index');
        $this->load->view('template/footer');
    }

}


?>