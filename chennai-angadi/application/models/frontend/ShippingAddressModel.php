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

    public function updatShippingData($orderId, $updateDate)
    {
        $this->db->where('id',$orderId);
        return $this->db->update('shipping_address',$updateDate);
    }

    public function add()
    {
		if (count($this->input->post()) > 0) {
			$email = $this->input->post("email");
			$billing_name = $this->input->post("billing_name");
			$billing_phone = $this->input->post("billing_phone");
            $billing_address = $this->input->post("billing_address");
			$billing_city = $this->input->post("billing_city");
			$billing_state = $this->input->post("billing_state");
            $billing_pincode = $this->input->post("billing_pincode");
			$billing_landmark = $this->input->post("billing_landmark");
			$shipping_name = $this->input->post("shipping_name");
            $shipping_phone = $this->input->post("shipping_phone");
			$shipping_address = $this->input->post("shipping_address");
            $shipping_city = $this->input->post("shipping_city");
			$shipping_state = $this->input->post("shipping_state");
            $shipping_pincode = $this->input->post("shipping_pincode");
			$shipping_landmark = $this->input->post("shipping_landmark");
			$user_id = $this->input->post("user_id");
            $joinon = $this->input->post("joinon");
			$delivery_amt = $this->input->post("delivery_amt");
			$c_no = $this->input->post("c_no");
            $dis_amount = $this->input->post("dis_amount");
            $amount = $this->input->post("amount");
			$data = array(
				'email'=> $email,
				'billing_name'=> $billing_name,
				'billing_phone'=> $billing_phone,
                'billing_address'=> $billing_address,
				'billing_city'=> $billing_city,
				'billing_state'=> $billing_state,
                'billing_pincode'=> $billing_pincode,
				'billing_landmark'=> $billing_landmark,
				'shipping_name'=> $shipping_name,
                'shipping_phone'=> $shipping_phone,
				'shipping_address'=> $shipping_address,
                'shipping_city'=> $shipping_city,
				'shipping_state'=> $shipping_state,
                'shipping_pincode'=> $shipping_pincode,
				'shipping_landmark'=> $shipping_landmark,
				'user_id'=> $user_id,
                'joinon'=> $joinon,
				'delivery_amt'=> $delivery_amt,
				'c_no'=> $c_no,
                'dis_amount'=> $dis_amount,
				'amount'=> $amount
			);
			$this->db->insert('shipping_address',$data);
			$insertId = $this->db->insert_id();
			return $insertId;
		}
        return null;        
    }
}