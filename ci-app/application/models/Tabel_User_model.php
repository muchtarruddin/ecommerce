<?php

class Tabel_User_model extends CI_model 
{
    public function getAllTabel_User()
    {
        return $query = $this->db->get('tabel_user')->result_array();
    }

    public function tambahDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "jenis_kel_user" => $this->input->post('jenis_kel_user', true),
            "alamat" => $this->input->post('alamat', true),
            "email_user" => $this->input->post('email_user', true),
            "telepon" => $this->input->post('telepon', true),
        ];

        $this->db->insert('Tabel_User', $data);
    }
}