<?php 

class Sb_model extends CI_model {
    public function getAllSb(){
        $this->db->select('*');
        $this->db->from('tools t');
        $this->db->join('jenis j','j.id_jenis=t.id_jenis');
        $this->db->where('j.desc_','Sleeping Bag');
        $this->db->order_by('id_tool','ASC');
        $query = $this->db->get();
        return $query->result_array();
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
                $ket        = $this->input->post('ket'),
                $color      = $this->input->post('color'),
                $size       = $this->input->post('size'),
                $stock_     = $this->input->post('stock_'),
                $biaya      = $this->input->post('biaya'),

                $id_jenis   = $this->input->post('id_jenis')
                
            );
    
            $this->db->insert('tools', $data);
            
            redirect('server/tools/sb');
        }

    }

    public function tambahDataSb($upload){
        $data = array(
            'nama'       => $this->input->post('nama'),
            'merk'       => $this->input->post('merk'),
            'gambar'     => $upload['file']['file_name'],
            'ket'        => $this->input->post('ket'),
            'color'      => $this->input->post('color'),
            'size'       => $this->input->post('size'),
            'stock_'     => $this->input->post('stock_'),
            'biaya'      => $this->input->post('biaya'),

            'id_jenis'   => $this->input->post('id_jenis')
            
        );

        $this->db->insert('tools', $data);
    }

    public function get_by_id($kondisi){
        $this->db->from('tools');
        $this->db->where($kondisi);
        $query = $this->db->get();
    return $query->row();
    }

    public function update($data,$kondisi){
        $this->db->update('tools',$data,$kondisi);
    return TRUE;
    }

    public function hapusDataSb($id_tool){
        // $this->db->where('id', $id);
        $this->db->delete('tools', ['id_tool' => $id_tool]);
    }

    public function getSbById($id_tool){
        return $this->db->get_where('tools', ['id_tool' => $id_tool])->row_array();
    }

    public function cariDataSb(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('merk', $keyword);
        return $this->db->get('tools')->result_array();
    }
}