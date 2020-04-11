<?php 

class Tenda_model extends CI_model {
    public function getAllTenda(){
        return $this->db->get('tenda')->result_array();
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
                $nama       = $this->input->post('nama'),
                $merk       = $this->input->post('merk'),
                $capacity   = $this->input->post('capacity'),
                $layer      = $this->input->post('layer'),
                $color      = $this->input->post('color'),
                $flysheet   = $this->input->post('flysheet'),
                $inner_     = $this->input->post('inner_'),
                $floor      = $this->input->post('floor'),
                $poles      = $this->input->post('poles'),
                $size       = $this->input->post('size'),
                $weight     = $this->input->post('weight'),
                $biaya      = $this->input->post('biaya')
            );
    
            $this->db->insert('tenda', $data);
            
            redirect('server/tenda');
        }

    }

    public function tambahDataTenda($upload){
        $data = array(
            //'isi' => $this->input->post('isi', true),
            'nama'       => $this->input->post('nama'),
            'merk'       => $this->input->post('merk'),
            'gambar'     => $upload['file']['file_name'],
            'capacity'   => $this->input->post('capacity'),
            'layer'      => $this->input->post('layer'),
            'color'      => $this->input->post('color'),
            'flysheet'   => $this->input->post('flysheet'),
            'inner_'     => $this->input->post('inner_'),
            'floor'      => $this->input->post('floor'),
            'poles'      => $this->input->post('poles'),
            'size'       => $this->input->post('size'),
            'weight'     => $this->input->post('weight'),
            'biaya'      => $this->input->post('biaya')
        );

        $this->db->insert('tenda', $data);
    }

    public function get_by_id($kondisi){
        $this->db->from('tenda');
        $this->db->where($kondisi);
        $query = $this->db->get();
    return $query->row();
    }

    public function update($data,$kondisi){
        $this->db->update('tenda',$data,$kondisi);
    return TRUE;
    }

    public function hapusDataTenda($id_tenda){
        // $this->db->where('id', $id);
        $this->db->delete('tenda', ['id_tenda' => $id_tenda]);
    }

    public function getTendaById($id_tenda){
        return $this->db->get_where('tenda', ['id_tenda' => $id_tenda])->row_array();
    }

    public function cariDataTenda(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('merk', $keyword);
        return $this->db->get('tenda')->result_array();
    }
}