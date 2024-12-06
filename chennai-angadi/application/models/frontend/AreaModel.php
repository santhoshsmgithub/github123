<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AreaModel extends CI_Model{
    
	public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('area');
		$this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	// public function get($id)
    // {
	// 	$returnData = new stdClass();
    //     $this->db->select('*');
    //     $this->db->from('category');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } 
    //     return $returnData;
    // }
}