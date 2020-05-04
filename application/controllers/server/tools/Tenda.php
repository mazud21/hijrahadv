<?php

class Tenda extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Tenda_model');
        $this->load->model('server/tools/Tools_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Tenda';
        $data['tools'] = $this->Tenda_model->getAllTenda();
        $data['jenis'] = $this->Tools_model->getJenis();
        $data['cap'] = $this->Tools_model->getCap();

        $this->load->view('server/tools/tenda/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Tenda';

        $this->form_validation->set_rules('nama', 'Nama Tenda', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('flysheet', 'Flysheet', 'required');
        $this->form_validation->set_rules('inner_', 'Inner', 'required');
        $this->form_validation->set_rules('floor', 'Floor', 'required');
        $this->form_validation->set_rules('poles', 'Poles', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('stock_', 'Stock', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('id_cap', 'Kapasitas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/tenda/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Tenda_model->upload();

            if($upload['result'] == "success"){
                
                $this->Tenda_model->tambahDataTenda($upload);
                
                redirect('server/tools/tenda');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_tool){
        $kondisi = array('id_tool' => $id_tool );
        
        $data['tool'] = $this->Tenda_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('nama', 'Nama Tenda', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('flysheet', 'Flysheet', 'required');
        $this->form_validation->set_rules('inner_', 'Inner', 'required');
        $this->form_validation->set_rules('floor', 'Floor', 'required');
        $this->form_validation->set_rules('poles', 'Poles', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('id_cap', 'Kapasitas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/tenda/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload');

        $id_tool    = $this->input->post('id_tool');
        $nama       = $this->input->post('nama');
        $merk       = $this->input->post('merk');
        
        $layer      = $this->input->post('layer');
        $color      = $this->input->post('color');
        $flysheet   = $this->input->post('flysheet');
        $inner_     = $this->input->post('inner_');
        $floor      = $this->input->post('floor');
        $poles      = $this->input->post('poles');
        $size       = $this->input->post('size');
        $weight     = $this->input->post('weight');
        $biaya      = $this->input->post('biaya');
        
        $id_jenis   = $this->input->post('id_jenis');
        $id_cap     = $this->input->post('id_cap');

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
                        'layer'     => $layer,
                        'color'     => $color,
                        'flysheet'  => $flysheet,
                        'inner_'    => $inner_,
                        'floor'     => $floor,
                        'poles'     => $poles,
                        'size'      => $size,
                        'weight'    => $weight,
                        'biaya'     => $biaya,
                        'id_jenis'  => $id_jenis,
                        'id_cap'    => $id_cap,
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Tenda_model->update($data,$kondisi);
                redirect('server/tools/tenda');
                }else {
                die("gagal update");
                //redirect('server/tools/tenda');
                }
            }else {
            //no image update
            $data = array(
                'nama'      => $nama,
                'merk'      => $merk,
                'layer'     => $layer,
                'color'     => $color,
                'flysheet'  => $flysheet,
                'inner_'    => $inner_,
                'floor'     => $floor,
                'poles'     => $poles,
                'size'      => $size,
                'weight'    => $weight,
                'biaya'     => $biaya,
                'id_jenis'  => $id_jenis,
                'id_cap'    => $id_cap,
            );
            $this->Tenda_model->update($data,$kondisi);
            redirect('server/tools/tenda');
        }
    }

    public function hapus($id_tool){
        $this->Tenda_model->hapusDataTenda($id_tool);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/tools/tenda');
    }

    public function detail($id_tool){
        $data['judul'] = 'Detail Data Tenda';
        $data['tools'] = $this->Tenda_model->getTendaById($id_tool);
        $this->load->view('server/tools/tenda/detail', $data);
    }
}