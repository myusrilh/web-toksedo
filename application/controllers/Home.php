<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
        
    }

    public function index()
    {
        $data['title']="Home Toksedo";
        $data['produk'] = $this->produk_model->getAllProduk();
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');
            
        }
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Home.php */

?>