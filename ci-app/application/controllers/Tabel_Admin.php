<?php

class Tabel_Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Admin';
        $data['tabel_admin'] = $this->Tabel_Admin_model->getAllTabel_Admin();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Admin';
        
        $this->form_validation->set_rules('id_admin', 'Id Admin', 'required|max_length[1]|min_length[1]');
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric|min_length[11]|max_length[12]');
        if( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('tabel_admin/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            echo ('berhasil');
        }
    }
}