<?php
ob_start();
session_start();
$session_id = session_id();
include('include/config.php');


 
  $action=$_POST["action"];

switch($action) {

	 case "signin":
		 
             $user_type="U";
			$username=$_POST['name'];
			$password=$_POST['pwd'];
			$status="Y"; 

            if($_POST['checkbox'] == 'Y')
					{
						setcookie("utype",$user_type,time()+31536000);
						setcookie("user",$username,time()+31536000);
						setcookie("pass",$password,time()+31536000);
					}
					else
					{
						setcookie("utype","",time()-3600);
						setcookie("user","",time()-3600);
						setcookie("pass", "", time()-3600);  
					}	

			
            $select=mysql_query("select * from park_users where user_email = '".$username."' and user_pass ='".md5($password)."' and user_type='".$user_type."' and user_status='".$status."'") or die(mysql_error());
			$num_rows = mysql_num_rows($select);
			$row = mysql_fetch_array($select);
            if($num_rows)
				{
					$_SESSION['ses_userid']=$row['user_id'];
					$_SESSION['ses_name']=$row['user_name'];
					$_SESSION['ses_email']=$row['user_email'];
					$_SESSION['ses_type']=$row['user_type'];
				
				    echo "1";
				}
				else
				{
				echo "0";
				}
        break;

    case "check":
		    $status="Y"; 
		    $useremail=$_POST['uemail'];
			$username=$_POST['uname'];

         $select=mysql_query("select * from park_users where user_name = '".$username."' and user_status='".$status."'") or die(mysql_error());
		 $num_rows_name = mysql_num_rows($select);

		 $select=mysql_query("select * from park_users where user_email  = '".$useremail."' and user_status='".$status."'") or die(mysql_error());
		 $num_rows_email = mysql_num_rows($select);

        if($num_rows_name && $num_rows_email)
	    {
		 echo "ne";
        }
		elseif($num_rows_name){
          echo "n";
		}
       elseif($num_rows_email) {

		   echo "e";
	   }
	   else{
		   echo "0";
       }
        break;
    
}

?>