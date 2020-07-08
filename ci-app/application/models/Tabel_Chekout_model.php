<?php

class Tabel_Chekout_model extends CI_model 
{
    public function getAllTabel_Chekout()
    {
        return $query = $this->db->get('tabel_chekout')->result_array();
    }

    public function tambahDataChekout()
    {
        $data = [
            "id_chekout" => $this->input->post('id_chekout', true),
            "id_admin" => $this->input->post('id_admin', true),
            "id_user" => $this->input->post('id_user', true),
            "id_barang" => $this->input->post('id_barang', true),
            "tgl_penjualan" => $this->input->post('tgl_penjualan', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "qty_jual" => $this->input->post('qty_jual', true),
            "total_penjualan" => $this->input->post('total_penjualan', true),
        ];

        $this->db->insert('Tabel_Chekout', $data);
    }
}