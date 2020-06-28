<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompor extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Kompor_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Kompor';
        $data['tools'] = $this->Kompor_model->getAllKompor();

        $this->load->view('client/rental/kompor/index', $data);
    }
}