<?php

class Tabel_Chekout extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Chekout_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Chekout';
        $data['tabel_chekout'] = $this->Tabel_Chekout_model->getAllTabel_Chekout();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_chekout/index', $data);
        $this->load->view('templates/footer');
    }
}