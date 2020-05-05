<?php

class Carrier extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/tools/Carrier_model');
        $this->load->model('server/tools/Tools_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Carrier';
        $data['tools'] = $this->Carrier_model->getAllCarrier();
        $data['jenis'] = $this->Tools_model->getJenis();
        $data['bool'] = $this->Tools_model->getBool();

        $this->load->view('server/tools/carrier/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Carrier';

        $this->form_validation->set_rules('nama', 'Nama Carrier', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('ket', 'Deskripsi', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('volume', 'Volume', 'required');
        
        $this->form_validation->set_rules('stock_', 'Stock', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('id_bool', 'Rain Cover', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/carrier/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Carrier_model->upload();

            if($upload['result'] == "success"){
                
                $this->Carrier_model->tambahDataCarrier($upload);
                
                redirect('server/tools/carrier');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_tool){
        $kondisi = array('id_tool' => $id_tool );
        
        $data['tool'] = $this->Carrier_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('nama', 'Nama Carrier', 'required');
        $this->form_validation->set_rules('merk', 'Brand', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('ket', 'Deskripsi', 'required');
        $this->form_validation->set_rules('color', 'Warna', 'required');
        $this->form_validation->set_rules('size', 'Dimensi', 'required');
        $this->form_validation->set_rules('weight', 'Berat', 'required');
        $this->form_validation->set_rules('volume', 'Volume', 'required');
        
        $this->form_validation->set_rules('stock_', 'Stock', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya Sewa', 'required');
        $this->form_validation->set_rules('id_jenis', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('id_bool', 'Rain Cover', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('server/tools/carrier/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload');

        $id_tool    = $this->input->post('id_tool');
        $nama       = $this->input->post('nama');
        $merk       = $this->input->post('merk');
        $ket        = $this->input->post('ket');
        $color      = $this->input->post('color');
        $size       = $this->input->post('size');
        $weight     = $this->input->post('weight');
        $volume     = $this->input->post('volume');
        $biaya      = $this->input->post('biaya');
        
        $id_jenis   = $this->input->post('id_jenis');
        $id_bool   = $this->input->post('id_bool');
        
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
                        'color'     => $color,
                        'size'      => $size,
                        'weight'    => $weight,
                        'volume'    => $volume,
                        
                        'biaya'     => $biaya,
                        'id_jenis'  => $id_jenis,
                        'id_bool'  => $id_bool,
                        
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Carrier_model->update($data,$kondisi);
                redirect('server/tools/carrier');
                }else {
                die("gagal update");
                //redirect('server/tools/carrier');
                }
            }else {
            //no image update
            $data = array(
                'nama'      => $nama,
                'merk'      => $merk,
                'ket'       => $ket,
                'color'     => $color,
                'size'      => $size,
                'weight'    => $weight,
                'volume'    => $volume,
                
                'biaya'     => $biaya,
                'id_jenis'  => $id_jenis,
                'id_bool'  => $id_bool,
            );
            $this->Carrier_model->update($data,$kondisi);
            redirect('server/tools/carrier');
        }
    }

    public function hapus($id_tool){
        $this->Carrier_model->hapusDataCarrier($id_tool);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/tools/carrier');
    }

    public function detail($id_tool){
        $data['judul'] = 'Detail Data Carrier';
        $data['tools'] = $this->Carrier_model->getCarrierById($id_tool);
        $this->load->view('server/tools/carrier/detail', $data);
    }
}