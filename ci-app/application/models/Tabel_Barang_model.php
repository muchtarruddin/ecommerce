<?php

class Tabel_Barang_model extends CI_model 
{
    public function getAllTabel_Barang()
    {
        return $query = $this->db->get('tabel_barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "id_user" => $this->input->post('id_user', true),
            "id_admin" => $this->input->post('id_admin', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
        ];

        $this->db->insert('Tabel_Barang', $data);
    }
}