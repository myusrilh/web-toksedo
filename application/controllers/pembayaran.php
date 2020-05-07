<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

    public function index()
    {
        $data['title'] = "Pembayaran";
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');   
        }
        $this->load->view('pembayaran/index');
        $this->load->view('template/footer');
    }

}


?>