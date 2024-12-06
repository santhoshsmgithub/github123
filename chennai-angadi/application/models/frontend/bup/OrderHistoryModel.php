<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderHistoryModel extends CI_Model{

	public function getAll($id = null)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('order_history');
		if (!empty($id)) {
            $this->db->where('orderid', $id);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function add($id)
    {
		if (count($this->input->post()) > 0) {
			$deliverStatus = $this->input->post("deliver_status");
			$deliverComments = $this->input->post("deliver_comments");
			$currDateTime = date("d/m/y : H:i:s", time());
			$data = array(
				'orderid'=> $id,
				'deliver_status'=> $deliverStatus,
				'deliver_comments'=> $deliverComments,
				'joinon'=> $currDateTime,
			);
			$this->db->insert('order_history',$data);
			$insertId = $this->db->insert_id();

			return true;
		}
        return false;        
    }
}