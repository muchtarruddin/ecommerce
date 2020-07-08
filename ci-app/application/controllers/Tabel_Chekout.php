<?php

class Tabel_Chekout extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel_Chekout_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Chekout';
        $data['tabel_chekout'] = $this->Tabel_Chekout_model->getAllTabel_Chekout();
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_chekout/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Chekout';
        
        $this->form_validation->set_rules('id_chekout', 'Id Chekout', 'required|max_length[4]|min_length[4]');
        $this->form_validation->set_rules('id_admin', 'Id Admin', 'required|max_length[1]|min_length[1]');
        $this->form_validation->set_rules('id_user', 'Id User', 'required|max_length[2]|min_length[2]');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|max_length[4]|min_length[4]');
        $this->form_validation->set_rules('tgl_penjualan', 'Tanggal Penjualan', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('qty_jual', 'Qty Jual', 'required');
        $this->form_validation->set_rules('total_penjualan', 'Total_Penjualan', 'required');
        if( $this->form_validation->run() == FALSE )
        {
        $this->load->view('templates/header', $data);
        $this->load->view('tabel_chekout/tambah');
        $this->load->view('templates/footer');
        }
        else
        {
            $this->Tabel_Chekout_model->tambahDataChekout();
            redirect('Tabel_Chekout');
        }
    }
}