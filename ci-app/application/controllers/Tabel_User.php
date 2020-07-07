<?php

class Tabel_User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_User_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['tabel_user'] = $this->Tabel_User_model->getAllTabel_User();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_user/index', $data);
        $this->load->view('templates/footer');
    }
}