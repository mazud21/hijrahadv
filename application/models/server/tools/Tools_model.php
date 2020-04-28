<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tools_model extends CI_Model {

    public function getAllJenis(){
            $query = $this->db->query('SELECT id_jenis, desc_ FROM jenis');
            return $query->result();
    }

    public function getCap(){
        $query = $this->db->query('SELECT id_cap, cap FROM capacity');
        return $query->result();
    }
}

/* End of file Tools_model.php */
?>