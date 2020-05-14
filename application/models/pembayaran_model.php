<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran_model extends CI_Model {

    public function getAllPembayaran(){
        $query = $this->db->get('pembayaran');
        return $query->result_array();
    }

}

/* End of file pembayaran_model.php */

?>