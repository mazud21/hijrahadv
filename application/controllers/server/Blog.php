<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('server/Blog_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Blog';
        $data['blog'] = $this->Blog_model->getAllBlog();
        
        $this->load->view('server/templates/header', $data);
        $this->load->view('server/blog/index', $data);
        $this->load->view('server/templates/footer');
    }

    public function tambah(){
        $data = array();
        
        $this->form_validation->set_rules('judul', 'Judul Blog', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/templates/header');
            $this->load->view('server/blog/tambah',$data);
            $this->load->view('server/templates/footer');
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Blog_model->upload();

            if($upload['result'] == "success"){
                
                $this->Blog_model->tambahDataBlog($upload);
                
                redirect('server/blog');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function ubah($id_blog)
    {
        $data = array();
        $data['judul'] = 'Form Ubah Data Blog';
        $data['blog'] = $this->Blog_model->getBlogById($id_blog);

        $this->form_validation->set_rules('judul', 'Judul Blog', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/templates/header');
            $this->load->view('server/blog/ubah',$data);
            $this->load->view('server/templates/footer');
            
        }else if($this->input->post('ubah')){ 

            $upload = $this->Blog_model->upload();

            if($upload['result'] == "success"){
                
                $this->Blog_model->ubahDataBlog($upload);
                
                redirect('server/blog');
            }else{
                $data['message'] = $upload['error'];
            }
        }
    }

    public function hapus($id_blog)
    {
        $this->Blog_model->hapusDataBlog($id_blog);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/blog');
    }

    public function detail($id_blog)
    {
        $data['judul'] = 'Detail Data Blog';
        $data['blog'] = $this->Blog_model->getBlogById($id_blog);
        $this->load->view('server/templates/header', $data);
        $this->load->view('server/blog/detail', $data);
        $this->load->view('server/templates/footer');
    }
}