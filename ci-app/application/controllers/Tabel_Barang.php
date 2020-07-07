<?php

class Tabel_Barang extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_barang/index', $data);
        $this->load->view('templates/footer');
    }
}