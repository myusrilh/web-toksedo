<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('register/index');
        $this->load->view('template/footer');
    }

}

/* End of file Register.php */

?>