<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShippingAddressModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('shipping_address');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }
    
    public function getUserOrders($userId)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('shipping_address');
		$this->db->where('user_id', $userId);
		$this->db->order_by('id', 'DESC');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        // echo $this->db->last_query();exit;
        // print_r($returnData);exit;
        return $returnData;
    }
}