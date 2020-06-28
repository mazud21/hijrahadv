<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrier extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Carrier_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Carrier';
        $data['tools'] = $this->Carrier_model->getAllCarrier();

        $this->load->view('client/rental/carrier/index', $data);
    }
}