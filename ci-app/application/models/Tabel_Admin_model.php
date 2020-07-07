<?php

class Tabel_Admin_model extends CI_model 
{
    public function getAllTabel_Admin()
    {
        return $query = $this->db->get('tabel_admin')->result_array();
    }
}