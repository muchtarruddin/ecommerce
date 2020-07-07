<?php

class Tabel_Jenis_Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Jenis_Barang_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jenis Barang';
        $data['tabel_jenis_barang'] = $this->Tabel_Jenis_Barang_model->getAllTabel_Jenis_Barang();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jenis Barang';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/tambah');
        $this->load->view('templates/footer');
    }
}