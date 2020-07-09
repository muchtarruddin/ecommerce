<?php

class Tabel_Jenis_Barang_model extends CI_model 
{
    public function getAllTabel_Jenis_Barang()
    {
        return $query = $this->db->get('tabel_jenis_barang')->result_array();
    }

    public function tambahDataJenisBarang()
    {
        $data = [
            "id_jenis" => $this->input->post('id_jenis', true),
            "nama_jenis_barang" => $this->input->post('nama_jenis_barang', true),
        ];

        $this->db->insert('Tabel_Jenis_Barang', $data);
    }
    
    public function getJenisBarangByNama($nama_jenis_barang)
    {
        return $this->db->get_where('Tabel_Jenis_Barang', ['nama_jenis_barang' => $nama_jenis_barang])->row_array();
    }
    
    public function updateDataJenisBarang()
    {
        $data = [
            "id_jenis" => $this->input->post('id_jenis', true),
            "nama_jenis_barang" => $this->input->post('nama_jenis_barang', true),
        ];

        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('Tabel_Jenis_Barang', $data);
    }
}