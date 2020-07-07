<?php

class Tabel_Admin extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_admin/index', $data);
        $this->load->view('templates/footer');
    }
}