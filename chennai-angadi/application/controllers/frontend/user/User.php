<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(E_ALL);
class User extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
		$this->load->library('Cart');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('user_agent');
		$this->load->library('email');
        $this->load->model('frontend/user/CategoryModel');
        $this->load->model('frontend/user/SubCategoryModel');
        $this->load->model('frontend/user/ProductModel');
        $this->load->model('frontend/user/AreaModel');
		$this->load->model('frontend/user/UserModel');
		$this->load->model('frontend/user/ShippingAddressModel');
		$this->load->model('frontend/user/OrderProductModel');
    }

    public function getProfile()
	{
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);			
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);
		// $area="where status=1";
		// $data["area"] = $this->insert->Select('area',$area); 
		
		// $Query12="where id='".$this->session->userdata('id')."'";
		// $data["profile"] = $this->insert->Select('users',$Query12);
        
		$data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

		$data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
		$data["footerproduct"] = $this->CategoryModel->getFooterCategory();
		$data["area"] = $this->AreaModel->getActiveAll();
		$data["profile"] = $this->UserModel->get($this->session->userdata('id'));

		// $this->load->view('frontend/user/profile',$data);
        $this->load->view('frontend/user/profile-new',$data);
		// $this->load->view('footer',$data);   
	}
 
		public function orderHistory()
	{
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 					
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);	
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);
		// $area="where status=1";
		// $data["area"] = $this->insert->Select('area',$area); 
		// $Query12="where id='".$this->session->userdata('id')."'";
		// $data["profile"] = $this->insert->Select('users',$Query12);
		// $Query12="where user_id='".$this->session->userdata('id')."'";
		// $data["order"] = $this->insert->Select('shipping_address',$Query12);

		$userId = $this->session->userdata('id');
		$data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        // print_r($subcategory_ids);exit;
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }
        
		$data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
		$data["footerproduct"] = $this->CategoryModel->getFooterCategory();
		$data["area"] = $this->AreaModel->getActiveAll();
		$data["profile"] = $data["order"] = array();
		// echo $userId;exit;
		if (!empty($userId)) {
			$data["profile"] = $this->UserModel->get($userId);
			$data["order"] = $this->ShippingAddressModel->getUserOrders($userId);
		}
		
		// $this->load->view('frontend/user/orderHistory',$data);
        $this->load->view('frontend/user/orderHistory-new',$data);
		// $this->load->view('footer',$data);   
	}

	public function register()
		{									
			// $_POST["original_pass"]=$_POST["password"]; 
			// $_POST["password"]=md5($_POST["password"]); 
			// $result = $this->insert->insertrecord('users'); 

			$userId = $this->UserModel->register();
			if (!empty($userId)) {
				$this->email->from($this->config->item('admin_email'),'Chennai Angadi');
				$this->email->to($_POST['email'],$_POST['name']); 
				$this->email->subject('Thank you for Registering with Chennai Angadi!  ');
				//$this->email->message("Dear ".$_POST['name'].",\nThank you for registering with us.\n\nPlease click on below URL or paste into your browser to verify your Email Address:\n\n ".$this->config->item('base_url')."cart/verify/".$_POST["session_id"]."\n.\n\nThanks\nAdmin Team");	
				$data['session_id']=$_POST['session_id'];
				$data['name']=$_POST['name'];
				$body = $this->load->view('frontend/user/email/welcome_mail',$data,TRUE);
				if (!isDev) {
					$this->email->message($body);	 
					if($this->email->send()){
					$this->email->from($_POST['email'],$this->config->item('title'));
					$this->email->to($this->config->item('admin_email'),'Chennai Angadi');		
					$this->email->bcc($this->config->item('bcc_email'));
					$this->email->subject('You have one new customer registered with us!  ');
						$this->email->message("Dear Team, One new Customer joined our family . ".$_POST['name'].",\n\n. Please help to Customer.Please click on below URL or paste into your browser to verify your Email Address:\n\n ".$this->config->item('base_url')."cart/verify/".$_POST["session_id"]."\n.\n\nThanks\nAdmin Team");	
						$this->email->send();
						echo 1;exit;
					}
				}
			}
			echo 0;exit;
		}

	public function quickView(){
			
		$base_url = $this->config->item('base_url');
		$quickview_id = $this->input->post("quickview_id");
		// $Query="where order_id=".$quickview_id;
		// $data['product'] = $this->insert->Select('ordered_product',$Query);

		$data["order_product"] = $this->OrderProductModel->getAll($quickview_id);
        foreach($data['order_product'] as $product_info)
        {
            $product_name=$product_info->prod_id;
            $res = $this->ProductModel->getProductById($product_name);
            // print_r($res);exit;
            $data["product"]["product_name"] = $res->product_name;
            $data["product"]["prod_weight"] = $res->prod_weight;
        }

        echo json_encode($data);exit;
		
		echo '<div class="modal-dialog">
			  <!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header bgcolor-blue">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title txtcolor-white" id="gridModalLabel">CA0';echo $quickview_id;
						echo '</h4>
					</div>
					<div class="modal-body">
					 <div class="block-center table-responsive" id="block-history">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="first_item">Product Name</th>
									<th class="item mywishlist_first">Product image</th>
									<th class="item mywishlist_first">Product Weight</th>
									<th class="item mywishlist_first">Product Price</th>
									<th class="item mywishlist_first">Product Quantity</th>
									<th class="item mywishlist_first">Product Total</th>
								 </tr>
							</thead>
							<tbody>';
							
								foreach($data['product'] as $product_info)
								{
									echo '<tr id="wishlist_1">
								<td class="bold align_center">';
								   echo $product_info->prod_name;
								echo '</td>
								
								 <td>';
								 	$product_name=$product_info->prod_id;
									// $this->db->where('product_id',$product_name);
									// $result=$this->db->get('product')->result();
									$res = $this->ProductModel->getProductById($product_name);
									// if($res)
									// {
									//  foreach($result as $res)
									// {	
									 echo '<img align="middle" height="100" width="100" src=';
									 echo $base_url."product/".$res->product_image;
									 echo '>';
									// }
									// }
								 echo '</td>
								<td class="bold align_center">';
									// $product_name=$product_info->prod_id;
									// $this->db->where('product_id',$product_name);
									// $result=$this->db->get('product')->result();
									// $res = $this->ProductModel->getProductById($product_name);
									// if($res)
									// {
									// if($result)
									// {
									//  foreach($result as $res)
									// {	
									
									 echo $res->prod_weight;
									
									// }
									// }
								echo '</td>
								<td class="bold align_center">';
								echo $product_info->amount;
								echo '</td>
								<td class="bold align_center">';
								echo $product_info->prod_qty;
								echo '</td>
								<td class="bold align_center">';
								echo $product_info->subtotal;
								echo '</td></tr>';
								}
							echo '
								
							</tbody>
						</table>
                     </div>
				</div>
			</div></div>';
	}
 
		public function profileUpdate()
	{
		if($this->session->userdata('id'))
		{
			$useraddress = array(
			'name' => $_POST["name"] ,
			'email' => $_POST["email"] ,
			'address' => $_POST["address"] ,
			'city' => $_POST["city"] ,
			'landmark' => $_POST["landmark"] ,
			'phone' => $_POST["phone"] ,
			'pincode' => $_POST["pincode"] ,
			'state' => $_POST["state"] 
			);
			// $this->db->where('id', $this->session->userdata('id'));
			// $this->db->update('users', $useraddress);
			$this->UserModel->updateProfileData($this->session->userdata('id'), $useraddress);
			echo "1";
		}else
		{
			echo "0";
		}
	}

	public function login()
	{ 	
	
		$email=$_POST['email'];
		$password=$_POST['password'];				 
		// $this->db->where('email',$email);
		// $this->db->where('password',md5($password));			
		// $query=$this->db->get('users');
		// $total=$query->num_rows();				
		// $row = $query->row();
		$row = $this->UserModel->getUser($email, $password);
		if(count( (array) $row) > 0 ){
			date_default_timezone_set('Asia/Kolkata');
			$time=date("d/m/y : H:i:s", time());
			$browser=$this->agent->browser().' '.$this->agent->version();				
			//$ipaddress=$this->session->userdata('ip_address');
			$ipaddress=$this->get_client_ip();				
			$data = array(
						'id' =>$row->id,
						'session_id' => $row->session_id,
						'name' =>$row->name,
						'email' =>$row->email,
						'phone' =>$row->phone,
						'address'=>$row->address,
						'dob'=>$row->dob,
						'status'=>$row->status,
						'login_time'=>$time,
						'login_browser'=>$browser,
						'login_ipaddress'=>$ipaddress,
						'validated' => true
			);
						//print_r($data);
			$this->session->set_userdata($data);
							
			//$time=time();
			
			$update=array('login_status'=>'1','login_time'=>$time,'login_browser'=>$browser,'login_ipaddress'=>$ipaddress);
			// $this->db->where('id',$row->id);
			// $ack=$this->db->update('users',$update);
			
			$ack = $this->UserModel->updateLoginData($row->id, $update);

			if($ack) { echo "1"; } 		   
		}else{  echo "0"; }	  
	}

    public function passwordReset()
    { 				
        if (isset($_POST["email"])) {
            $email=$_POST['email'];
            $this->db->where('email',$email);
            $query=$this->db->get('users');
            $total=$query->num_rows();
            $row = $query->row();
            if($total>0){
                    $this->email->from('care@chennaiangadi.com','Chennai Angadi');
                    $this->email->to($row->email,$row->name); 
                    $this->email->subject('Password Recovery');
                    $this->email->message('Your Recover password for Chennai Angadi : User Email: '.$row->name.' Password: '.$row->original_pass);	
                    $this->email->send();
                    echo 1;				 
            } else {  echo "0";  }
        } else {
            $data["category"] = $this->CategoryModel->getActiveAll();
            $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

            $subcategory_ids = array_column($data["subcategory"], 'id');
            // print_r($subcategory_ids);exit;
            $data["subcategory_products"] = array();
            if (count($subcategory_ids) > 0) {
                $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
                $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
            }
            $this->load->view('frontend/user/password-reset', $data);
        }		  
    }

	public function checkEmail(){
		// $email = $_POST['email']; 
		// $this->db->where('email',$email);
		// $users=$this->db->get('users');
		//  if($users->num_rows()>0)
		//  {
		// 	echo "1";
		//  }else{
		// 	echo "2";
		//  }
		$email = $_POST['email'];
		echo $this->UserModel->checkEmailExist($email);
	}
	
	public function  get_client_ip() {
		$ipaddress = '';
	   if (isset($_SERVER['HTTP_CLIENT_IP']))
		   $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	   else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		   $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	   else if(isset($_SERVER['HTTP_X_FORWARDED']))
		   $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	   else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		   $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	   else if(isset($_SERVER['HTTP_FORWARDED']))
		   $ipaddress = $_SERVER['HTTP_FORWARDED'];
	   else if(isset($_SERVER['REMOTE_ADDR']))
		   $ipaddress = $_SERVER['REMOTE_ADDR'];
	   else
		   $ipaddress = 'UNKNOWN';
	   return $ipaddress;

}

	public function logout()
	{
		$data = array(
			'id' =>'',
							'session_id' =>'',
							'name' =>'',
							'email' =>'',
							'phone' =>'',
							'address'=>'',
							'dob'=>'',
							'login_time'=>'',
							'login_browser'=>'',
							'login_ipaddress'=>'',
							'validated' => false
		);
		// $this->session->unset_userdata($data);
		$this->session->sess_destroy();
		// print_r($this->session->userdata());exit;
		redirect();
	}

    
}