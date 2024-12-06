<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestimonialModel extends CI_Model{

	public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('testimonials');
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
    //     $this->db->from('sub_category');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } 
    //     return $returnData;
    // }

	
}