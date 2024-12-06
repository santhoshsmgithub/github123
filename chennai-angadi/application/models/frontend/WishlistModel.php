<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WishlistModel extends CI_Model{
    
	public function getUserWhishList($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('wishlist');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

}