<?php

class Trip extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/jogja/trip/Trip_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Trip';
        $data['trip'] = $this->Trip_model->getAllTrip();
        $data['jenis'] = $this->Trip_model->getJenisT();
        
        $this->load->view('server/jogja/trip/adv/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Trip';

        $this->form_validation->set_rules('judul', 'Judul Trip', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/jogja/trip/adv/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Trip_model->upload();

            if($upload['result'] == "success"){
                
                $this->Trip_model->tambahDataTrip($upload);
                
                redirect('server/jogja/trip/adv');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_trip){
        $kondisi = array('id_trip' => $id_trip );

        $data['blg'] = $this->Trip_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('judul', 'Judul Trip', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');
        $this->form_validation->set_rules('tanggal_update', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/jogja/trip/adv/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload'); 

        $id_trip        = $this->input->post('id_trip');
        $judul          = $this->input->post('judul');
        $isi            = $this->input->post('isi');
        $tanggal_create = $this->input->post('tanggal_create');
        $tanggal_update = $this->input->post('tanggal_update');
        $penulis        = $this->input->post('penulis');

        $path = './images/';

        $kondisi = array('id_trip' => $id_trip );

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
                        'penulis'       => $penulis,
                        );
                // replace image
                @unlink($path.$this->input->post('img_old'));

                $this->Trip_model->update($data,$kondisi);
                redirect('server/jogja/trip/adv');
                }else {
                die("gagal update");
                redirect('server/jogja/trip/adv');
                }
            }else {
            //no image update
            $data = array(
                'judul'             => $judul,
                'isi'               => $isi,
                //'gambar'            => $gambar['file_name'],
                'tanggal_create'    => $tanggal_create,
                'tanggal_update'    => $tanggal_update,
                'penulis'           => $penulis,
            );
            $this->Trip_model->update($data,$kondisi);
            redirect('server/jogja/trip/adv');
        }
    }

    public function hapus($id_trip){
        $this->Trip_model->hapusDataTrip($id_trip);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/jogja/trip/adv');
    }

    public function detail($id_trip){
        $data['judul'] = 'Detail Data Trip';
        $data['trip'] = $this->Trip_model->getTripById($id_trip);

        $this->load->view('server/jogja/trip/adv/detail', $data);
    }
}