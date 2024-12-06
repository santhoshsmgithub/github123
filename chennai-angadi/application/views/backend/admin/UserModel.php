<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model{
    
	public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('users');
		$this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function delete($id) {
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->delete('users');
			return true;
		}
		return false;
	}
}