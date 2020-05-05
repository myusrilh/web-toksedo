<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class detail_user extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('detail_user/index');
        $this->load->view('template/footer');
    }

}

/* End of file detail_user.php */

?>