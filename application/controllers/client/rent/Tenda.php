<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tenda extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Tenda_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Tenda';
        $data['tools'] = $this->Tenda_model->getAllTenda();

        $this->load->view('client/rental/tenda/index', $data);
    }
}