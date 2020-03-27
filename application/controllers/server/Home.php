<?php 

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('authenticated')) 
            redirect('server/authentication');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Admin Hijrah Adventure';
        $this->load->view('server/home/index', $data);
    }

}