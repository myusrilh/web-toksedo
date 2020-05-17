<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class testimoni_model extends CI_Model {

    public function getAllTestimoni(){
        return $this->db->get('testimoni')->result_array();
    }

    public function getTestimoniByID($id){
        return $this->db->get_where('testimoni',['idTestimoni'=>$id])->result_array();
    }

    public function getGambarTestimoni($id){
        $this->db->select('namaGambar');
        $this->db->from('testimoni');
        $this->db->where('idTestimoni', $id);
        return $this->db->get()->result_array();
    }

    public function tambahDataTestimoni($namaFile){

        $data =[
            'namaGambar' => $namaFile,
            'judulGambar' => $this->input->post('judul'),
            'detailGambar' => $this->input->post('detail')
        ];        
        $this->db->set('created_at','NOW()',FALSE);
        $this->db->insert('testimoni', $data);
    }

    public function ubahDataTestimoni($id, $namaFile){
        $data = [
            'namaGambar' => $namaFile,
            'judulGambar' => $this->input->post('judul'),
            'detailGambar' => $this->input->post('detail')
        ];
        $this->db->set('updated_at','NOW()',FALSE);
        //$this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
        //$this->db->where('kategori.idKategori', $this->input->post('kategori'));
        $this->db->where('idTestimoni',$id);
        $this->db->update('testimoni', $data);
    }

    public function hapusTestimoni($id){
        $this->db->where('idTestimoni', $id);
        $this->db->delete('testimoni');
    }

    public function cariDataTestimoni(){
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
}

/* End of file testimoni_model.php */

?>