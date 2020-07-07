<?php

class Tabel_Jenis_Barang extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Jenis Barang';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/index', $data);
        $this->load->view('templates/footer');
    }
}