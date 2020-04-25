<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('produk/index');
        $this->load->view('template/footer');
    }

}

/* End of file produk.php */

?>