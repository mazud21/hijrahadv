<?php 

class Journey_model extends CI_model {
    public function getAllJourney(){
        return $this->db->get('journey')->result_array();
    }

    public function getAllJourneySide(){
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
            
            redirect('server/journey');
        }

    }

    public function tambahDataJourney($upload){
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

    public function hapusDataJourney($id_journey){
        // $this->db->where('id', $id);
        $this->db->delete('journey', ['id_journey' => $id_journey]);
    }

    public function getJourneyById($id_journey){
        return $this->db->get_where('journey', ['id_journey' => $id_journey])->row_array();
    }

    public function cariDataJourney(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get('journey')->result_array();
    }
}