<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function tambahTransaksi($idPembayaran){
        $data = [
            'idProduk' => $this->input->post('idProduk'),
            'jumlah' => $this->input->post('jumlah'),            
            'idUser' => $this->session->userdata('idUser'),
            'idPembayaran' => $idPembayaran,
            'totalBelanja' => $this->input->post('totalBelanja')
        ];
        $this->db->set('timestamp','NOW()',FALSE);
        $insert = $this->db->insert('transaksi', $data);
        return $this->db->affected_rows();
    }

    public function getAllTransaksiAdmin(){
        $this->db->select('idTransaksi, produk.nama as namaBarang, produk.harga as hargaBarang, jumlah, namaKategori, namaPembayaran as jenisPembayaran, user.nama as namaUser, totalBelanja, timestamp');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.idUser = user.idUser');
        $this->db->join('pembayaran', 'transaksi.idPembayaran = pembayaran.idPembayaran');
        $this->db->join('produk', 'transaksi.idProduk = produk.idProduk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        return $this->db->get()->result_array();

    }
    public function getUserTransaksi($idUser){
        $this->db->select('idTransaksi, produk.nama as namaBarang, produk.harga as hargaBarang, jumlah, namaKategori, namaPembayaran as jenisPembayaran, user.nama as namaUser, totalBelanja, timestamp');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.idUser = user.idUser');
        $this->db->join('pembayaran', 'transaksi.idPembayaran = pembayaran.idPembayaran');
        $this->db->join('produk', 'transaksi.idProduk = produk.idProduk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        $this->db->where('transaksi.idUser', $idUser);
        $this->db->order_by('timestamp', 'desc');
        
        return $this->db->get()->result_array();
        
    }

    public function getTransaksiByID($idUser){
        // $id = $this->db->insert_id();
        $this->db->select('idTransaksi, produk.nama as namaBarang, produk.harga as hargaBarang, jumlah, namaKategori, namaPembayaran as jenisPembayaran, user.nama as namaUser, totalBelanja, timestamp');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.idUser = user.idUser');
        $this->db->join('pembayaran', 'transaksi.idPembayaran = pembayaran.idPembayaran');
        $this->db->join('produk', 'transaksi.idProduk = produk.idProduk');
        $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        $this->db->where('transaksi.idUser', $idUser);
        $this->db->order_by('idTransaksi', 'desc');
        $this->db->limit(1);
        

        $q = $this->db->get();
        return $q->result_array();
                
    }

    public function cariDataTransaksi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('idTestimoni',$keyword);
        $this->db->or_like('namaGambar',$keyword);
        $this->db->or_like('judulGambar',$keyword);
        $this->db->or_like('detailGambar',$keyword);
        $this->db->or_like('created_at',$keyword);
        $this->db->or_like('updated_at',$keyword);
        $this->db->from('testimoni');
        return $this->db->get()->result_array();
    }
    
    public function hapusDataTransaksi($id){ 
        $this->db->where('idTransaksi',$id);
        $this->db->delete('transaksi');
    }
}

/* End of file transaksi_model.php */

?>