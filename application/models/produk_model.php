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
    public function getGambarProduk($id){
        $this->db->select('gambarProduk');
        $this->db->from('produk');
        $this->db->where('idProduk', $id);
        return $this->db->get()->result_array();
    }
    
    public function getAllProdukAdmin()
    {
        $this->db->select('idProduk,gambarProduk,produk.idKategori as idk,namaKategori,nama,harga,detail');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getKategoriByID($idKategori){
        return $this->db->get_where('kategori',['idKategori'=>$idKategori])->row_array();
    }

    public function getProdukByID($id){
        $this->db->select('idProduk,gambarProduk, produk.idKategori as idKategori, namaKategori,produk.nama as nama,harga,detail');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        $this->db->where('idProduk', $id);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getIDKategori(){
        $this->db->select('idKategori');
        $this->db->from('kategori');
        return $this->db->get();
    }


    public function getKategori(){

        return $this->db->get('kategori')->result_array();
    }

    public function tambahDataProduk($namaFile){
        $data = [
            'idKategori' => $this->input->post('kategori'),
            'gambarProduk' => $namaFile,
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'detail' => $this->input->post('detail')
        ];
        $this->db->insert('produk', $data);
    }
    public function ubahDataProduk($id, $namaFile){
        $this->db->select('gambarProduk');
        $this->db->from('produk');
        $this->db->where('idProduk', $id);
        $gambar = $this->db->get()->result_array();
        
        foreach($gambar as $gbr);
        if ($gbr['gambarProduk'] != null) {
            # code...
            if ($namaFile == null) {
                # code...
                $namaFile = $gbr['gambarProduk'];
            }
        }else if($gbr['gambarProduk'] == null && $namaFile == null){
            $namaFile = null;
        }

        $data = [
            'idKategori' => $this->input->post('kategori'),
            'gambarProduk' => $namaFile,
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'detail' => $this->input->post('detail')
        ];
        // $this->db->set($data);
        //$this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        //$this->db->where('kategori.idKategori', $this->input->post('kategori'));
        $this->db->where('idProduk',$id);
        $this->db->update('produk', $data);

        // $this->db->join('user_data', 'user.id = user_data.id');
        // $this->db->set($data);
        // $this->db->where('user_data.id',$id);
        // $this->db->update('user_data');
        
    }
    
    public function cariDataProduk(){
        $keyword=$this->input->post('keyword');
        $this->db->like('idProduk',$keyword);
        $this->db->or_like('namaKategori',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('harga',$keyword);
        $this->db->or_like('detail',$keyword);
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        
        return $this->db->get()->result_array();
    }

    public function hapusDataProduk($id){ 
        $this->db->where('idProduk',$id);
        $this->db->delete('produk');
    }
}

/* End of file produk_model.php */

?>