<?php 

class Blog_model extends CI_model {
    public function getAllBlog()
    {
        return $this->db->get('blog')->result_array();
    }

    public function upload(){
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
        $config['overwrite'] = TRUE;
    
        $this->load->library('upload', $config); 

        if($this->upload->do_upload('gambar')){ 
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }


    public function tambahDataBlog($upload)
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'isi' => $this->input->post('isi', true),
            'gambar' => $upload['file']['file_name'],
            'tanggal_create' => $this->input->post('tanggal_create', true)
        ];

        $this->db->insert('blog', $data);
    }

    public function ubahDataBlog()
    {
            $data = [
                "id_blog" => $this->input->post('id_blog', true),
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true),
                "gambar" => $upload['file']['file_name'],
                "tanggal_create" => $this->input->post('tanggal_create', true),
                "tanggal_update" => $this->input->post('tanggal_update', true)
            ];
    
            $this->db->where('id_blog', $this->input->post('id_blog'));
            $this->db->update('blog', $data);
        //}
        
    }

    public function hapusDataBlog($id_blog)
    {
        // $this->db->where('id', $id);
        $this->db->delete('blog', ['id_blog' => $id_blog]);
    }

    public function getBlogById($id_blog)
    {
        return $this->db->get_where('blog', ['id_blog' => $id_blog])->row_array();
    }

    public function cariDataBlog()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get('blog')->result_array();
    }
}