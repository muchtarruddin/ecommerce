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

    public function hapusDataAdmin($nama_admin)
    {
        // $this->db->where('nama_admin', $nama_admin);
        $this->db->delete('Tabel_Admin', ['nama_admin' => $nama_admin]);
    }

    public function getAdminByNama($nama_admin)
    {
        return $this->db->get_where('Tabel_Admin', ['nama_admin' => $nama_admin])->row_array();
    }

    
    public function ubahDataAdmin()
    {
        $data = [
            "id_admin" => $this->input->post('id_admin', true),
            "nama_admin" => $this->input->post('nama_admin', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "telepon" => $this->input->post('telepon', true),
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('Tabel_Admin', $data);
    }
}