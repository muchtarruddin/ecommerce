<?php

class Tabel_Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Barang_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['tabel_barang'] = $this->Tabel_Barang_model->getAllTabel_Barang();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_barang/index', $data);
        $this->load->view('templates/footer');
    }
}