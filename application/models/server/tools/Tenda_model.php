<?php 

class Tenda_model extends CI_model {
    public function getAllTenda(){
        $this->db->select('*');
        $this->db->from('tools t');
        $this->db->join('jenis j','j.id_jenis=t.id_jenis');
        $this->db->join('capacity c','c.id_cap=t.id_cap');
        $this->db->where('j.desc_','Tenda');
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
                $layer      = $this->input->post('layer'),
                $color      = $this->input->post('color'),
                $flysheet   = $this->input->post('flysheet'),
                $inner_     = $this->input->post('inner_'),
                $floor      = $this->input->post('floor'),
                $poles      = $this->input->post('poles'),
                $size       = $this->input->post('size'),
                $weight     = $this->input->post('weight'),
                $stock_     = $this->input->post('stock_'),
                $biaya      = $this->input->post('biaya'),
                $id_jenis   = $this->input->post('id_jenis'),
                $id_cap   = $this->input->post('id_cap')
            );
    
            $this->db->insert('tools', $data);
            
            redirect('server/tools/tenda');
        }

    }

    public function tambahDataTenda($upload){
        $data = array(
            //'isi' => $this->input->post('isi', true),
            'nama'       => $this->input->post('nama'),
            'merk'       => $this->input->post('merk'),
            'gambar'     => $upload['file']['file_name'],
            'layer'      => $this->input->post('layer'),
            'color'      => $this->input->post('color'),
            'flysheet'   => $this->input->post('flysheet'),
            'inner_'     => $this->input->post('inner_'),
            'floor'      => $this->input->post('floor'),
            'poles'      => $this->input->post('poles'),
            'size'       => $this->input->post('size'),
            'weight'     => $this->input->post('weight'),
            'stock_'     => $this->input->post('stock_'),
            'biaya'      => $this->input->post('biaya'),
            'id_jenis'   => $this->input->post('id_jenis'),
            'id_cap'   => $this->input->post('id_cap')
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

    public function hapusDataTenda($id_tool){
        // $this->db->where('id', $id);
        $this->db->delete('tools', ['id_tool' => $id_tool]);
    }

    public function getTendaById($id_tool){
        return $this->db->get_where('tools', ['id_tool' => $id_tool])->row_array();
    }

    public function cariDataTenda(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('merk', $keyword);
        return $this->db->get('tools')->result_array();
    }
}