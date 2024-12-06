<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderProductModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('ordered_product');
        $this->db->where('order_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

    public function getAll($id = null)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('ordered_product');
        if (!empty($id)) {
            $this->db->where('order_id', $id);
        }   
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function add($data)
    {
		if (count($this->input->post()) > 0) {
            $this->db->insert('ordered_product',$data);
            $insertId = $this->db->insert_id();
            return $insertId;
		}
        return null;        
    }
}