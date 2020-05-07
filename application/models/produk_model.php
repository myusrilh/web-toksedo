<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getAllProduk(){
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function getKategoriByID($idKategori){
        return $this->db->get_where('kategori',['idKategori'=>$idKategori])->row_array();
    }

    public function getProdukByID($id){
        return $this->db->get_where('produk',['idProduk'=>$id])->row_array();
    }

}

/* End of file produk_model.php */

?>