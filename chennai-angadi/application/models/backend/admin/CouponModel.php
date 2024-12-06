<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CouponModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('coupon');
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
        $this->db->from ('coupon');
		// $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function add($id)
    {
		if (count($this->input->post()) > 0) {
			$cName = $this->input->post("c_name");
			$cNo = $this->input->post("c_no");
			$description = $this->input->post("description");
			$disAmt = $this->input->post("dis_amount");
			$minAmt = $this->input->post("min_amount");
			$expiryDate = !empty($this->input->post("expire_date")) ? $this->input->post("expire_date") : $this->input->post("expire_date") ;
			$status = $this->input->post("status");
			$data = array(
				'c_name'=> $cName,
				'c_no'=> $cNo,
				'description'=> $description,
				'dis_amount'=> $disAmt,
				'min_amount'=> $minAmt,
				'expire_date'=> $expiryDate,
				'status'=> $status
			);
			if (empty($id)) {
				$this->db->insert('coupon',$data);
				$insertId = $this->db->insert_id();
			} else {
				unset($data["expire_date"]);
				$this->db->where('id', $id);
				$this->db->update('coupon',$data);
			}
			return true;
		}
        return false;        
    }

	public function delete($id) {
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->delete('coupon');
			return true;
		}
		return false;
	}
}