<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Gas_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Gas';
        $data['tools'] = $this->Gas_model->getAllGas();

        $this->load->view('client/rental/gas/index', $data);
    }
}