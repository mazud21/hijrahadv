<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adv extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('jogja/trip/Adv_model');
        
    }

	public function index()
	{
		$data['judul'] = 'Daftar Adventure Trip';
        $data['adv'] = $this->Adv_model->getAllAdv();

		$this->load->view('jogja/trip/adv', $data);
	}
}