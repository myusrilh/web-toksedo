<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class testimoni extends CI_Controller {

    public function index()
    {
        $data['title'] = "Testimoni";
        $this->load->view('template/header',$data);
        $this->load->view('testimoni/index');
        $this->load->view('template/footer');
    }

}

/* End of file produk.php */

?>