<?php

class Blog extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/Blog_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
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
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
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

    public function edit($id_blog){
        $kondisi = array('id_blog' => $id_blog );

        $data['blg'] = $this->Blog_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('judul', 'Judul Blog', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');
        $this->form_validation->set_rules('tanggal_update', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/templates/header');
            $this->load->view('server/blog/ubah',$data);
            $this->load->view('server/templates/footer');
        }
    
    }

    public function updatedata(){

        $this->load->library('upload'); 

        $id_blog   = $this->input->post('id_blog');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal_create = $this->input->post('tanggal_create');
        $tanggal_update = $this->input->post('tanggal_update');

        $path = './images/';

        $kondisi = array('id_blog' => $id_blog );

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';
        $config['file_name'] = $_FILES['img_new']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['img_new']['name'])) {
            if ( $this->upload->do_upload('img_new') ) {
                $gambar = $this->upload->data();
                $data = array(
                        'judul'         => $judul,
                        'isi'           => $isi,
                        'gambar'        => $gambar['file_name'],
                        'tanggal_create'=> $tanggal_create,
                        'tanggal_update'=> $tanggal_update,
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Blog_model->update($data,$kondisi);
                redirect('server/blog');
                }else {
                die("gagal update");
                redirect('server/blog');
                }
            }else {
            //no image update
            $data = array(
                'judul'             => $judul,
                'isi'               => $isi,
                //'gambar'            => $gambar['file_name'],
                'tanggal_create'    => $tanggal_create,
                'tanggal_update'    => $tanggal_update,
            );
            $this->Blog_model->update($data,$kondisi);
            redirect('server/blog');
        }
    }

    public function hapus($id_blog){
        $this->Blog_model->hapusDataBlog($id_blog);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/blog');
    }

    public function detail($id_blog){
        $data['judul'] = 'Detail Data Blog';
        $data['blog'] = $this->Blog_model->getBlogById($id_blog);
        $this->load->view('server/templates/header', $data);
        $this->load->view('server/blog/detail', $data);
        $this->load->view('server/templates/footer');
    }
}