<?php

class Tabel_Chekout_model extends CI_model 
{
    public function getAllTabel_Chekout()
    {
        return $query = $this->db->get('tabel_chekout')->result_array();
    }
}