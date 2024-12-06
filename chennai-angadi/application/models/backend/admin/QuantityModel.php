<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuantityModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('quantity');
        $this->db->where('id', $id);
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
        $this->db->from ('quantity');
		// $this->db->order_by('order_by', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('quantity');
		$this->db->where('status', 1);
		$this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function add($id)
    {
		if (count($this->input->post()) > 0) {
			$name = $this->input->post("quantity_name");
			$orderBy = $this->input->post("order_by");
			$status = $this->input->post("status");
			$data = array(
				'quantity_name'=> $name,
				'order_by'=> $orderBy,
				'status'=> $status
			);
			if (empty($id)) {
				$this->db->insert('quantity',$data);
				$insertId = $this->db->insert_id();
			} else {
				$this->db->where('id', $id);
				$this->db->update('quantity',$data);
			}
			return true;
		}
        return false;        
    }

	public function delete($id) {
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->delete('quantity');
			return true;
		}
		return false;
	}
}