<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProduk()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
}

/* End of file admin_model.php */
