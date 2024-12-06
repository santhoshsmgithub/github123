<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InsertModel extends CI_Model{

//    function __construct(){
//         parent::__construct();
// 		// $this->load->database();
		
//     }
 
Public function insertrecord($Table) {
					         $Inputs=$_POST;
							
							$Inputs["joinon"]=date("Y-m-d");
							$Keys=array();
							$Values=array();
								foreach($Inputs as $Inp_key=>$inp_value) {
										if($Inp_key!="submit" && $Inp_key!="PHPSESSID")
										{
											$Keys[]= $Inp_key;
											$Values[]= "'".$inp_value."'";
										}
								}
							$keys=implode(',',$Keys);
							$values=implode(',',$Values);
							$qry="insert into ".$Table."(".$keys.") values(".$values.")";
							$ack=$this->db->query($qry);
				      		if($ack)  return true;  else  return false;
	
	}
	
Public function Select($Table,$Query) {
	
						$Inputs=array();
						//echo "select * from ".$Table." ".$Query;
						$query=$this->db->query("select * from ".$Table." ".$Query) ;
						$Tot_Rows=$query->num_rows($query);
						if($Tot_Rows>0) {
						foreach ($query->result() as $row)
                          {
						
								$Inputs[]=$row;
							
							}
								return  $Inputs;
						}
						else 
						{
								return false;
						 }
						
			}
			

			
Public function SelectAs($Query) {
	
						$Inputs=array();
			     		//echo "select * from ".$Table." ".$Query;
						$query=$this->db->query($Query) ;
						$Tot_Rows=$query->num_rows($query);
						if($Tot_Rows>0) {
							foreach ($query->result() as $row)
                          {
								$Inputs[]=$row;
							}
								return  $Inputs;
						}
						else 
						{
								return false;
						 }
						
			}
			
Public function Update($Table,$Query) {
					    $Inputs=$_POST;
						$Inputs["joinon"]=date("Y-m-d");
						$Keys_Values=array();
						foreach($Inputs as $Inp_key=>$inp_value) { 			
									if($Inp_key!="submit" && $Inp_key!="PHPSESSID")
									{		
										   									   	if($Inp_key=="user_identity") {
										$Keys_Values[]= $Inp_key."="."'".md5($inp_value)."'";
										}
										else
										{
										   $Keys_Values[]= $Inp_key."="."'".$inp_value."'";
										}
									}
							}
						$keys_values=implode(',',$Keys_Values);
						$Ack=$this->db->query("update  ".$Table." set ".$keys_values." ".$Query);
						if($Ack)
					      return true;
						 else
						 return false;
			}
			
			
			


}
?>