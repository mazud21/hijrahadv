<?php

class Tenda extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/Tenda_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Tenda';
        $data['tenda'] = $this->Tenda_model->getAllTenda();
        
        $this->load->view('server/tenda/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Tenda';

        $this->form_validation->set_rules('nama', 'Nama Tenda', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('capacity', 'Kapasitas', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('flysheet', 'Flysheet', 'required');
        $this->form_validation->set_rules('inner_', 'Inner', 'required');
        $this->form_validation->set_rules('floor', 'Floor', 'required');
        $this->form_validation->set_rules('poles', 'Poles', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/tenda/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Tenda_model->upload();

            if($upload['result'] == "success"){
                
                $this->Tenda_model->tambahDataTenda($upload);
                
                redirect('server/tenda');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_tenda){
        $kondisi = array('id_tenda' => $id_tenda );

        $data['tent'] = $this->Tenda_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('nama', 'Nama Tenda', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('capacity', 'Kapasitas', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('flysheet', 'Flysheet', 'required');
        $this->form_validation->set_rules('inner_', 'Inner', 'required');
        $this->form_validation->set_rules('floor', 'Floor', 'required');
        $this->form_validation->set_rules('poles', 'Poles', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/tenda/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload'); 

        $id_tenda   = $this->input->post('id_tenda');
        $nama = $this->input->post('nama');
        $merk = $this->input->post('merk');
        $capacity = $this->input->post('capacity');
        $layer = $this->input->post('layer');
        $color = $this->input->post('color');
        $flysheet = $this->input->post('flysheet');
        $inner_ = $this->input->post('inner_');
        $floor = $this->input->post('floor');
        $poles = $this->input->post('poles');
        $size = $this->input->post('size');
        $weight = $this->input->post('weight');
        $biaya = $this->input->post('biaya');

        $path = './images/';

        $kondisi = array('id_tenda' => $id_tenda );

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';
        $config['file_name'] = $_FILES['img_new']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['img_new']['name'])) {
            if ( $this->upload->do_upload('img_new') ) {
                $gambar = $this->upload->data();
                $data = array(
                        'nama'      => $nama,
                        'merk'      => $merk,
                        'gambar'    => $gambar['file_name'],
                        'capacity'  => $capacity,
                        'layer'     => $layer,
                        'color'     => $color,
                        'flysheet'  => $flysheet,
                        'inner_'    => $inner_,
                        'floor'     => $floor,
                        'poles'     => $poles,
                        'size'      => $size,
                        'weight'    => $weight,
                        'biaya'     => $biaya,
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Tenda_model->update($data,$kondisi);
                redirect('server/tenda');
                }else {
                die("gagal update");
                redirect('server/tenda');
                }
            }else {
            //no image update
            $data = array(
                'nama'      => $nama,
                'merk'      => $merk,
                //'gambar'    => $gambar['file_name'],
                'capacity'  => $capacity,
                'layer'     => $layer,
                'color'     => $color,
                'flysheet'  => $flysheet,
                'inner_'    => $inner_,
                'floor'     => $floor,
                'poles'     => $poles,
                'size'      => $size,
                'weight'    => $weight,
                'biaya'     => $biaya,
            );
            $this->Tenda_model->update($data,$kondisi);
            redirect('server/tenda');
        }
    }

    public function hapus($id_tenda){
        $this->Tenda_model->hapusDataTenda($id_tenda);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/tenda');
    }

    public function detail($id_tenda){
        $data['judul'] = 'Detail Data Tenda';
        $data['tent'] = $this->Tenda_model->getTendaById($id_tenda);
        $this->load->view('server/tenda/detail', $data);
    }
}