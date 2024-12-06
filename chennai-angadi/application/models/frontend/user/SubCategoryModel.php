<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SubCategoryModel extends CI_Model{

	public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('sub_category');
		$this->db->where('status', 1);
		$this->db->order_by('order_by', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }
	
}