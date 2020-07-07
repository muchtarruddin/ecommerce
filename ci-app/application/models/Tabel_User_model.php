<?php

class Tabel_User_model extends CI_model 
{
    public function getAllTabel_User()
    {
        return $query = $this->db->get('tabel_user')->result_array();
    }
}