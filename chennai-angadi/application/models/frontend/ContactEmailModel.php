<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactEmailModel extends CI_Model{
    
    

    public function add()
    {	
		if (count($this->input->post()) > 0) {
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$phone = $this->input->post("phone");
			$message = $this->input->post("message");
			$data = array(
				'name'=> $name,
				'email'=> $email,
				'phone'=> $phone,
				'message'=> $message
			);
            $this->db->insert('contact_email',$data);
			$insertId = $this->db->insert_id();
			return true;
		}
        return false;        
    }

	
}