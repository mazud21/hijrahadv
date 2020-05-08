<?php

class Cook extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Cook_model');
        $this->load->model('server/tools/Tools_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Cooking Set';
        $data['tools'] = $this->Cook_model->getAllCook();
        $data['jenis'] = $this->Tools_model->getJenis();
        $data['bool'] = $this->Tools_model->getBool();

        $this->load->view('server/tools/cook/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Cooking Set';

        $this->form_validation->set_rules('nama', 'Nama Cooking Set', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('ket', 'Deskripsi', 'required');
        $this->form_validation->set_rules('outer_', 'Bahan', 'required');
        $this->form_validation->set_rules('stock_', 'Stock', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/cook/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Cook_model->upload();

            if($upload['result'] == "success"){
                
                $this->Cook_model->tambahDataCook($upload);
                
                redirect('server/tools/cook');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_tool){
        $kondisi = array('id_tool' => $id_tool );
        
        $data['tool'] = $this->Cook_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('nama', 'Nama Cooking Set', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('ket', 'Deskripsi', 'required');
        $this->form_validation->set_rules('outer_', 'Bahan', 'required');
        $this->form_validation->set_rules('stock_', 'Stock', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/cook/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload');

        $id_tool    = $this->input->post('id_tool');
        $nama       = $this->input->post('nama');
        $merk       = $this->input->post('merk');
        $ket        = $this->input->post('ket');
        $outer_      = $this->input->post('outer_');
        $stock_     = $this->input->post('stock_');
        $biaya      = $this->input->post('biaya');
        
        $id_jenis   = $this->input->post('id_jenis');
        
        $path = './images/';

        $kondisi = array('id_tool' => $id_tool );

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                        'nama'      => $nama,
                        'merk'      => $merk,
                        'gambar'    => $gambar['file_name'],
                        'ket'       => $ket,
                        'outer_'     => $outer_,
                        'stock_'    => $stock_,
                        'biaya'     => $biaya,
                        'id_jenis'  => $id_jenis,
                        
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Cook_model->update($data,$kondisi);
                redirect('server/tools/cook');
                }else {
                die("gagal update");
                //redirect('server/tools/cook');
                }
            }else {
            //no image update
            $data = array(
                'nama'      => $nama,
                'merk'      => $merk,
                'ket'       => $ket,
                'outer_'     => $outer_,
                'stock_'    => $stock_,
                'biaya'     => $biaya,
                'id_jenis'  => $id_jenis,
            );
            $this->Cook_model->update($data,$kondisi);
            redirect('server/tools/cook');
        }
    }

    public function hapus($id_tool){
        $this->Cook_model->hapusDataCook($id_tool);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/tools/cook');
    }

    public function detail($id_tool){
        $data['judul'] = 'Detail Data Cooking Set';
        $data['tools'] = $this->Cook_model->getCookById($id_tool);
        $this->load->view('server/tools/cook/detail', $data);
    }
}