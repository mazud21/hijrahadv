<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lamp extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Lamp_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Lamp';
        $data['tools'] = $this->Lamp_model->getAllLamp();

        $this->load->view('client/rental/lamp/index', $data);
    }
}