<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matras extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Matras_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Matras';
        $data['tools'] = $this->Matras_model->getAllMatras();

        $this->load->view('client/rental/matras/index', $data);
    }
}