<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sb extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Sb_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Sb';
        $data['tools'] = $this->Sb_model->getAllSb();

        $this->load->view('client/rental/sb/index', $data);
    }
}