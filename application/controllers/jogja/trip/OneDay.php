<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OneDay extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
    }

	public function index()
	{
		$this->load->view('jogja/trip/index');
	}
}