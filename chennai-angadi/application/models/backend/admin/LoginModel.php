<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model{
    // function __construct(){
    //     parent::__construct();
	// 	// $this->load->database();
	// 	// $this->load->library('session');
    // }
	public function valitate(){
		$User_Email=$this->security->xss_clean($this->input->post('User_Email'));
		$User_Identity=$this->security->xss_clean($this->input->post('User_Identity'));
		$pwd=md5($User_Identity);
		
		$this->db->where('User_Email', $User_Email);
		$this->db->where('User_Identity', md5($User_Identity));
		$this->db->where('status', '1');
		$query = $this->db->get('user');
		// echo $query->num_rows();exit; 
		if($query->num_rows()==1)
		{
			$row = $query->row();
			$data = array(
				'User_ID' => $row->User_ID,
				'User_Email' => $row->User_Email,
				'username' => $row->User_Name,
				'validated' => true
			);
			$this->session->set_userdata($data);
			return true;
		}
	}
}
?>