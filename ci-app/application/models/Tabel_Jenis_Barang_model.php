<?php

class Tabel_Jenis_Barang_model extends CI_model 
{
    public function getAllTabel_Jenis_Barang()
    {
        return $query = $this->db->get('tabel_jenis_barang')->result_array();
    }
}