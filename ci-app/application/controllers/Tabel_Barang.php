<?php

class Tabel_Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['tabel_barang'] = $this->Tabel_Barang_model->getAllTabel_Barang();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|min_length[4]|max_length[4]');
        //$this->form_validation->set_rules('id_user', 'Id User', 'required|max_length[2]|min_length[2]');
        //$this->form_validation->set_rules('id_jenis', 'Id Jenis', 'required|max_length[3]|min_length[3]');
        //$this->form_validation->set_rules('id_admin', 'Id Admin', 'required|max_length[1]|min_length[1]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        $this->form_validation->set_rules('picture', 'picture', 'required');
        if( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('tabel_barang/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_Barang_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Tabel_Barang');
        }
    }
    
    public function hapus($nama_barang)
    {
        $this->Tabel_Barang_model->hapusDataNamaBarang($nama_barang);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Tabel_Barang');
    }
    
    public function detail($nama_barang)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['tabel_barang'] = $this->Tabel_Barang_model->getBarangByNama($nama_barang);
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_barang/detail', $data);
        $this->load->view('templates/footer');
    }
    
    public function ubah($nama_barang)
    {
        $data['judul'] = 'Form Ubah Data Barang';
        $data['tabel_barang'] = $this->Tabel_Barang_model->getBarangByNama($nama_barang);

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('id_user', 'Id User', 'required|max_length[2]|min_length[2]');
        $this->form_validation->set_rules('id_jenis', 'Id Jenis', 'required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('id_admin', 'Id Admin', 'required|max_length[1]|min_length[1]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        if( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('tabel_barang/ubah', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_Barang_model->ubahDataBarang();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('Tabel_Barang');
        }
    }
}