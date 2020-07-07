<?php

class Tabel_Chekout extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Chekout';
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_chekout/index', $data);
        $this->load->view('templates/footer');
    }
}