<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index(){
        $data['judul'] = 'Login Admin';
        if($this->session->userdata('authenticated')) 
        redirect('home'); 
        $this->load->view('server/authentication/login', $data); 
    }
    
    public function login(){
        $id = $this->input->post('id'); 
        $password = $this->input->post('password'); 
        $admin = $this->Admin_model->get($id); 
        if(empty($admin)){ 
        $this->session->set_flashdata('message', 'id tidak ditemukan'); 
        redirect('authentication'); 
        } else {
                if($password == $admin->password){
                    $session = array(
                    'authenticated'=>true, // Buat session authenticated dengan value true
                    'id'=>$admin->id,  // Buat session id
                    'nama'=>$admin->nama // Buat session authenticated
                    );
                    $this->session->set_userdata($session); 
                    redirect('home'); 
                } else {
                        $this->session->set_flashdata('message', 'Password salah'); 
                        redirect('authentication'); 
                }
            }
    }

    public function logout(){
        $this->session->sess_destroy(); 
        redirect('authentication'); 
    }
}