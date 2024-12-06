<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

    public function getUser($email, $password)
    {
        
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
		$this->db->where('password',md5($password));			
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

    public function updateLoginData($userId, $updateDate)
    {
        $this->db->where('id',$userId);
        $ack=$this->db->update('users',$updateDate);
        return $ack;
    }

    public function updateProfileData($userId, $updateDate)
    {
        $this->db->where('id', $userId);
		return $this->db->update('users', $updateDate);
    }

    public function register()
    {
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $password = $this->input->post("password");
        $data = array(
            'name'=> $name,
            'email'=> $email,
            'phone'=> $phone,
            'password'=> md5($password),
            'original_pass'=> $password
        );
        $this->db->insert('users',$data);
        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function checkEmailExist($email){
        if (!empty($email)) {
            $this->db->where('email',$email);
            $users=$this->db->get('users');
            if($users->num_rows()>0)
            {
                return "1";
            }
        }
        return "2";
		
	}
}