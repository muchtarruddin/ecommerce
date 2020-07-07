<?php

class Tabel_Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Admin_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Admin';
        $data['tabel_admin'] = $this->Tabel_Admin_model->getAllTabel_Admin();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_admin/index', $data);
        $this->load->view('templates/footer');
    }
}