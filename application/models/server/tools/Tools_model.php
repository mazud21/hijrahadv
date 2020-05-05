<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tools_model extends CI_Model {

    public function getJenis(){
        $query = $this->db->query('SELECT id_jenis, desc_ FROM jenis');
        return $query->result_array();
    }

    public function getCap(){
        $query = $this->db->query('SELECT id_cap, cap FROM capacity');
        return $query->result_array();
    }

    public function getBool(){
        $query = $this->db->query('SELECT id_bool, pilihan FROM boolean');
        return $query->result_array();
    }
}

/* End of file Tools_model.php */
?>