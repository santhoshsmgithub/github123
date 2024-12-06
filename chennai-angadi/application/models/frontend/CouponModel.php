<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CouponModel extends CI_Model{
    
	public function checkCouponValid($code)
    {
		$returnData = new stdClass();
        if (!empty($code)) {
            $currentDate=date('Y-m-d');
            $this->db->select('*');
            $this->db->from('coupon');
            $this->db->where('status', 1);
            $this->db->where('c_no', $code);
            $this->db->where('expire_date >=', $currentDate);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->row();
            }
        }
        return $returnData;
    }

    public function getActiveAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('coupon');
		$this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }
    
}