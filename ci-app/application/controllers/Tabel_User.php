<?php

class Tabel_User extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar User';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_user/index', $data);
        $this->load->view('templates/footer');
    }
}