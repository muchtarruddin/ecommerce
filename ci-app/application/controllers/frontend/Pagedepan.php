<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagedepan extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Tabel_Barang_model');

    }

    public function halamandepan() {

        $data['barang'] = $this->Tabel_Barang_model->getAllTabel_Barang();

        $this->load->view('frontend/halamandepan', $data);
    }

}
