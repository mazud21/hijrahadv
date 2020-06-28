<?php

class Journey extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('server/Journey_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('server/authentication');
    }

    public function index(){
        $data['judul'] = 'Daftar Journey';
        $data['journey'] = $this->Journey_model->getAllJourney();
        
        $this->load->view('server/journey/index', $data);
    }

    public function tambah(){
        $data = array();
        $data['judul'] = 'Tambah Journey';

        $this->form_validation->set_rules('judul', 'Judul Journey', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/journey/tambah',$data);
            
        }else if($this->input->post('tambah')){ 

            $upload = $this->Journey_model->upload();

            if($upload['result'] == "success"){
                
                $this->Journey_model->tambahDataJourney($upload);
                
                redirect('server/journey');
            }else{
                $data['message'] = $upload['error'];
            }
        }
        
    }

    public function edit($id_journey){
        $kondisi = array('id_journey' => $id_journey );

        $data['blg'] = $this->Journey_model->get_by_id($kondisi);
        
        $this->form_validation->set_rules('judul', 'Judul Journey', 'required');
        $this->form_validation->set_rules('isi', 'Konten', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('tanggal_create', 'Tanggal', 'required');
        $this->form_validation->set_rules('tanggal_update', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('server/journey/ubah',$data);
        }
    
    }

    public function updatedata(){

        $this->load->library('upload'); 

        $id_journey        = $this->input->post('id_journey');
        $judul          = $this->input->post('judul');
        $isi            = $this->input->post('isi');
        $tanggal_create = $this->input->post('tanggal_create');
        $tanggal_update = $this->input->post('tanggal_update');
        $penulis        = $this->input->post('penulis');

        $path = './images/';

        $kondisi = array('id_journey' => $id_journey );

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

                $this->Journey_model->update($data,$kondisi);
                redirect('server/journey');
                }else {
                die("gagal update");
                redirect('server/journey');
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
            $this->Journey_model->update($data,$kondisi);
            redirect('server/journey');
        }
    }

    public function hapus($id_journey){
        $this->Journey_model->hapusDataJourney($id_journey);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('server/journey');
    }

    public function detail($id_journey){
        $data['judul'] = 'Detail Data Journey';
        $data['Journey'] = $this->Journey_model->getJourneyById($id_journey);
        $this->load->view('server/journey/detail', $data);
    }
}