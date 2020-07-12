<?php 

class Trip_model extends CI_model {
    public function getAllTrip(){
        $this->db->select('*');
        $this->db->from('journey j');
        $this->db->join('jenis_trip jt','jt.id_jenist=j.id_jenist');
        $this->db->where('jt.desc_t','Adventure');
        $this->db->order_by('id_journey','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getJenisT(){
        $query = $this->db->query('SELECT id_jenist, desc_t FROM jenis_trip');
        return $query->result_array();
    }

    public function getAllTripSide(){
        return $this->db->get('journey')->result_array();
    }

    public function upload(){
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $_FILES['gambar']['name'];
    
        $this->load->library('upload', $config); 

        if (!empty($_FILES['gambar']['name'])) {
            # code...
            if($this->upload->do_upload('gambar')){ 
                $return = array('result' => 'success', 
                'file' => $this->upload->data(), 
                'error' => '');
                return $return;
            }else{
                $return = array('result' => 'failed', 
                'file' => '', 'error' => 
                $this->upload->display_errors());
                return $return;
            }
        } else {
            $data = array(
                'judul' => $this->input->post('judul', true),
                'isi' => $this->input->post('isi', true),
                //'gambar' => $upload['file']['file_name'],
                'tanggal_create' => $this->input->post('tanggal_create', true),
                'penulis' => $this->input->post('penulis', true)
            );
    
            $this->db->insert('journey', $data);
            
            redirect('server/jogja/trip/adv');
        }

    }

    public function tambahDataTrip($upload){
        $data = array(
            'judul' => $this->input->post('judul', true),
            'isi' => $this->input->post('isi', true),
            'gambar' => $upload['file']['file_name'],
            'tanggal_create' => $this->input->post('tanggal_create', true),
            'penulis' => $this->input->post('penulis', true)
        );

        $this->db->insert('journey', $data);
    }

    public function get_by_id($kondisi){
        $this->db->from('journey');
        $this->db->where($kondisi);
        $query = $this->db->get();
    return $query->row();
    }

    public function update($data,$kondisi){
        $this->db->update('journey',$data,$kondisi);
    return TRUE;
    }

    public function hapusDataTrip($id_journey){
        // $this->db->where('id', $id);
        $this->db->delete('journey', ['id_journey' => $id_journey]);
    }

    public function getTripById($id_journey){
        return $this->db->get_where('journey', ['id_journey' => $id_journey])->row_array();
    }

    public function cariDataTrip(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get('journey')->result_array();
    }
}