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
            //"id_user" => $this->input->post('id_user', true),
            //"id_admin" => $this->input->post('id_admin', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "picture" => $this->input->post('picture', true),
        ];

        $this->db->insert('Tabel_Barang', $data);
    }
    
    public function getBarangByNama($nama_barang)
    {
        return $this->db->get_where('Tabel_Barang', ['nama_barang' => $nama_barang])->row_array();
    }

    
    public function ubahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            //"id_user" => $this->input->post('id_user', true),
            //"id_admin" => $this->input->post('id_admin', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "picture" => $this->input->post('picture', true),
        ];

        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('Tabel_Barang', $data);
    }
}