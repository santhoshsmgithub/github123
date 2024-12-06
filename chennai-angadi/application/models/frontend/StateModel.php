<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StateModel extends CI_Model{
    
    public function getStateByName($name)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('states');
        $this->db->where('state', $name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

    public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('states');
		$this->db->order_by('state', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	// public function getActiveAll()
    // {
	// 	$returnData = new stdClass();
    //     $this->db->select ('*'); 
    //     $this->db->from ('area');
	// 	$this->db->where('status', 1);
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) {
    //         $returnData = $query->result();
    //     }
    //     return $returnData;
    // }

	
}