<?php

class Tabel_Admin_model extends CI_model 
{
    public function getAllTabel_Admin()
    {
        return $query = $this->db->get('tabel_admin')->result_array();
    }

    public function tambahDataAdmin()
    {
        $data = [
            "id_admin" => $this->input->post('id_admin', true),
            "nama_admin" => $this->input->post('nama_admin', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "telepon" => $this->input->post('telepon', true),
        ];

        $this->db->insert('Tabel_Admin', $data);
    }
}