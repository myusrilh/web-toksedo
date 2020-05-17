<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class testimoni extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('testimoni_model');
        
    }
    public function index()
    {
        $data['title'] = "Testimoni";
        $data['testimoni'] = $this->testimoni_model->getAllTestimoni();
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');   
        }
        $this->load->view('testimoni/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file produk.php */

?>