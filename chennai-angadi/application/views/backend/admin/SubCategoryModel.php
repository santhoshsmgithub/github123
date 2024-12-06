<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SubCategoryModel extends CI_Model{

	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('sub_category');
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
        $this->db->from ('sub_category');
		$this->db->order_by('order_by', 'ASC');
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
        $this->db->from ('sub_category');
		$this->db->where('status', 1);
		$this->db->order_by('order_by', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function add($id)
    {	
		if (count($this->input->post()) > 0) {
			$mainCategory = $this->input->post("main_category");
			$title = $this->input->post("category_title");
			$orderBy = $this->input->post("order_by");
			$status = $this->input->post("status");
			$data = array(
				'category_title'=> $title,
				'main_category'=> $mainCategory,
				'order_by'=> $orderBy,
				'status'=> $status
			);
			if (empty($id)) {
				$this->db->insert('sub_category',$data);
				$insertId = $this->db->insert_id();
			} else {
				$this->db->where('id', $id);
				$this->db->update('sub_category',$data);
			}
			return true;
		}
        return false;        
    }

	public function delete($id) {
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->delete('sub_category');
			return true;
		}
		return false;
	}
}