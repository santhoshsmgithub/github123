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

    public function getArray($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('shipping_address');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } 
        return $returnData;
    }

	public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('shipping_address');
		$this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function updateShipmentStatus($id)
    {
		if (count($this->input->post()) > 0) {
			$deliverStatus = $this->input->post("deliver_status");
			$deliverComments = $this->input->post("deliver_comments");
			$data = array(
				'deliver_status'=> $deliverStatus,
				'deliver_comments'=> $deliverComments
			);

            $this->db->where('id', $id);
		    $this->db->update('shipping_address',$data);

			return true;
		}
        return false;        
    }
}