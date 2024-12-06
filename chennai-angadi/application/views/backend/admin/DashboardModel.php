<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model{

	public function totalproduct()
	{
		$query=$this->db->query("select * from product WHERE status=1") ;
		$Tot_Rows=$query->num_rows($query);
		return $Tot_Rows;
	}
	
	public function totalenquiry()
	{
		$query=$this->db->query("select * from product_enquiry") ;
		$Tot_Rows=$query->num_rows($query);
		return $Tot_Rows;
	}
	
	public function totalorders()
	{
		$query=$this->db->query("select * from shipping_address");
		$Tot_Rows=$query->num_rows($query);
		return $Tot_Rows;
	}
	
	public function totalusers()
	{
		$query=$this->db->query("select * from users");
		$Tot_Rows=$query->num_rows($query);
		return $Tot_Rows;
	}
}
?>