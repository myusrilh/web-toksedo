<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_model');
        
    }
    
    public function index(){
        $data['title'] = "Transaksi";
        $idUser = $this->session->userdata('idUser');
        $data['transaksi'] = $this->transaksi_model->getTransaksiByID($idUser);
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');
            
        }
        $this->load->view('transaksi/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah($idPembayaran)
    {
        $transaksi = $this->transaksi_model->tambahTransaksi($idPembayaran);
        // $data['title'] = "Tambah Transaksi";
        if ($transaksi > 0) {
            # code...
            $this->session->set_flashdata('berhasil', 'berhasil!');
            
            redirect('transaksi/index','refresh');
        }
    }

    public function tampilRiwayatTransaksi($idUser){
        $data['title'] = "Riwayat Transaksi";
        $data['transaksi'] = $this->transaksi_model->getUserTransaksi($idUser);
        $this->load->view('template/header',$data);
        if ($this->session->userdata('nama')!=null) {
            # code...
            $this->load->view('detail_user/index');
            
        }
        $this->load->view('transaksi/riwayat',$data);
        $this->load->view('template/footer');
    }
    
}

/* End of file transaksi.php */

?>