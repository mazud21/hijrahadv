<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        
        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('authentication');
        
    }

    public function index_matras()
    {
        $data['judul'] = 'Daftar Barang';
        $data['matras'] = $this->Barang_model->getAllMatras();
        /*
        if( $this->input->post('keyword') ) {
            $data['pelanggan'] = $this->Pendaftar_model->cariDataPendaftar();
        }
        */
        $this->load->view('barang/index', $data);
    }

    public function tambah()
    {
        
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('server/templates/header', $data);
            $this->load->view('barang/tambah');
            $this->load->view('server/templates/footer');
        } else if ($this->input->post('tambah')) {

            $upload = $this->Barang_model->upload();

            if($upload['result']=="success"){
                $this->Barang_model->tambahDataMatras($upload);
                
                redirect('barang');
            } else {
                $data['message']=$upload['error'];
            }
        }
    }

    public function hapus($no_daftar)
    {
        $this->Pendaftar_model->hapusDataPendaftar($no_daftar);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendaftar');
    }

    public function detail($no_daftar)
    {
        $data['judul'] = 'Detail Data Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getPendaftarById($no_daftar);
        $this->load->view('server/templates/header', $data);
        $this->load->view('pendaftar/detail', $data);
        $this->load->view('server/templates/footer');
    }
}