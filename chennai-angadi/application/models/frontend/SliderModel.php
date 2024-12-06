<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SliderModel extends CI_Model{
    
	public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('slider');
		$this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }
}