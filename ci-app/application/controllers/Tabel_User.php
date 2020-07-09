<?php

class Tabel_User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['tabel_user'] = $this->Tabel_User_model->getAllTabel_User();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data User';
       
        $this->form_validation->set_rules('id_user', 'Id User', 'required|max_length[2]|min_length[2]');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('jenis_kel_user', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email_user', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric|min_length[11]|max_length[12]');
        if( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('tabel_user/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_User_model->tambahDataUser();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Tabel_User');
        }
    }
    
    public function hapus($nama_user)
    {
        $this->Tabel_User_model->hapusDataUser($nama_user);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Tabel_User');
    }
}