<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactEmailModel extends CI_Model{

	public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('contact_email');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }
}