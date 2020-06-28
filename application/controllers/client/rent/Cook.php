<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cook extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Cook_model');

    }

    public function index(){
        $data['judul'] = 'Daftar Cook';
        $data['tools'] = $this->Cook_model->getAllCook();

        $this->load->view('client/rental/cook/index', $data);
    }
}