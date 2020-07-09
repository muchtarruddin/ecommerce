<?php

class Tabel_Jenis_Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Jenis_Barang_model');
        $this->load->library('form_validation');
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

        $this->form_validation->set_rules('id_jenis', 'Id jenis', 'required|min_length[3]|max_length[3]');
        $this->form_validation->set_rules('nama_jenis_barang', 'nama jenis barang', 'required');
        if( $this->form_validation->run() == FALSE )
        {
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/tambah');
        $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_Jenis_Barang_model->tambahDataJenisBarang();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Tabel_Jenis_Barang');
        }
    }

    public function hapus($nama_jenis_barang)
    {
        $this->Tabel_Jenis_Barang_model->hapusDataJenisBarang($nama_jenis_barang);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Tabel_Jenis_Barang');
    }
     
    public function detail($nama_jenis_barang)
    {
        $data['judul'] = 'Detail Data Jenis Barang';
        $data['tabel_jenis_barang'] = $this->Tabel_Jenis_Barang_model->getJenisBarangByNama($nama_jenis_barang);
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/detail', $data);
        $this->load->view('templates/footer');
    }
    
    public function ubah($nama_jenis_barang)
    {
        $data['judul'] = 'Form Ubah Data Jenis Barang';
        $data['tabel_jenis_barang'] = $this->Tabel_Jenis_Barang_model->getJenisBarangByNama($nama_jenis_barang);

        $this->form_validation->set_rules('id_jenis', 'Id jenis', 'required|min_length[3]|max_length[3]');
        $this->form_validation->set_rules('nama_jenis_barang', 'nama jenis barang', 'required');
        if( $this->form_validation->run() == FALSE )
        {
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_jenis_barang/ubah', $data);
        $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_Jenis_Barang_model->ubahDataJenisBarang();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('Tabel_Jenis_Barang');
        }
    }
}