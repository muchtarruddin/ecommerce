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
    
    public function getUserByNama($nama_user)
    {
        return $this->db->get_where('Tabel_User', ['nama_user' => $nama_user])->row_array();
    }

    public function ubahDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "jenis_kel_user" => $this->input->post('jenis_kel_user', true),
            "alamat" => $this->input->post('alamat', true),
            "email_user" => $this->input->post('email_user', true),
            "telepon" => $this->input->post('telepon', true),
        ];
        
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('Tabel_User', $data);
    }
}