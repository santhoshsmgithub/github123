<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmailModel extends CI_Model{

    public  function __construct()
    {
        parent::__construct();

        $this->load->library('email');
        $this->load->model('backend/ShippingAddressModel');
        
    }

	public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('email_subscripe');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function sendShipmentStatusEmail($data = array()) {
        
        // $this->email->from($data["from"]);
        // $this->email->to($data["to"]); 
        // $this->email->message($data["message"]);

        // if($this->email->send()) {
        //     return true;
        // }
        // return false;

        $this->email->from($data["from"], $data["to_name"]);
        $this->email->to($data["to"], $data["to_name"]); 
        $this->email->message($data["message"]);

        if($this->email->send()) {
            return true;
        }
        return false;
    }
}