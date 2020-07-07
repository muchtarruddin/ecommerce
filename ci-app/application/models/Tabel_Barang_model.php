<?php

class Tabel_Barang_model extends CI_model 
{
    public function getAllTabel_Barang()
    {
        return $query = $this->db->get('tabel_barang')->result_array();
    }
}