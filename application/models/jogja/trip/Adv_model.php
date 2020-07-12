<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Adv_model extends CI_model{
    public function getAllAdv()
    {
        $this->db->select('*');
        $this->db->from('journey j');
        $this->db->join('jenis_trip jt','jt.id_jenist=j.id_jenist');
        $this->db->where('jt.desc_t','Adventure');
        $this->db->order_by('id_journey','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file filename.php */

?>