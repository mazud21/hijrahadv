<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model extends CI_model{
    public function getAllTenda()
    {
        return $this->db->get('tenda')->result_array();
    }

}

/* End of file filename.php */

?>