<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(E_ALL);
class Cart extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
        $this->load->library('pagination');
		$this->load->library('Cart');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('frontend/CategoryModel');
        $this->load->model('frontend/SubCategoryModel');
        $this->load->model('frontend/ProductModel');
        $this->load->model('frontend/CouponModel');
        $this->load->model('frontend/StateModel');
		$this->load->model('frontend/ShippingAddressModel');
		$this->load->model('frontend/OrderProductModel');
		$this->load->model('frontend/UserModel');
    }

	public function index()
	{		
		// echo "coming";exit;							
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 			
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);		
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $area="where status=1";

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

		// $this->load->view('frontend/cart',$data);
        $this->load->view('frontend/cart-new',$data);
		// $this->load->view('footer',$data);
	}

    public function addToCart()
	{
		// echo "coming";exit;
		// $this->db->where('product_id',$_POST["prod_id"]);
		// $query=$this->db->get('product');
		// $total=$query->num_rows();
		// $row = $query->row();

		$product_id=$_POST["prod_id"];

		$row = $this->ProductModel->getProductById($product_id);
		// print_r($row);exit;
		$product_qty=$_POST["prod_qty"];
		// $row->product_id=$_POST["prod_id"];
		/*if($row->discount_status==1)
		{
		$discount_off=$row->prod_off_amt;
		}else{
		$discount_off=0;
		}
		*/
		$data = array(
			'id'      => $row->product_id,
			'qty'     => $product_qty,
			'price'   => $row->product_amount,
			'name'    => $row->product_name,
			'category'    => $row->product_category,
			'options' => (array) $row
		);
		if($row->prod_stock>=$product_qty)
		{ 
			/*********************Coupon code unset session*****************/
			$cdata = array(
				'c_no' => $this->session->userdata('c_no'),
				'dis_amount' => $this->session->userdata('dis_amount') 
			);
			$this->session->unset_userdata($cdata);
							
			$cart = $this->cart->contents();
			$exists = false;
			$rowid = '';
			$prodId = "";
			foreach($cart as $item){
				// print_r($item);exit;
				if($item['id'] == $row->product_id && $item['name'] == $row->product_name){
					$exists = true;
					$prodId = $item['id'];
					$rowid = $item['rowid'];
					$qty = $item['qty'] + $product_qty;
				}
			}
			if($exists==true)
			{
				// $this->db->where('product_id',$rowid);
				// $query=$this->db->get('product');  
				// $row = $query->row();
				$row = $this->ProductModel->getProductById($prodId);
				// print_r($row);exit;
				if($row->prod_stock>=$qty)
				{
					$data = array(
						'rowid' => $rowid,
						'qty'   => $qty 
					);
					
					if($this->cart->update($data))
					{ echo 1; }else	 { echo 0; } 
				}else{
					echo 3;
				}
			
			}else{						
				if($this->cart->insert($data))
				{
				echo 1;

				}else
				{
				echo 0;
				}	
			}
		}else{
			echo 3;
		}	
	}
	
	public function updateCart()
	{
		// echo "coming";exit;
        // print_r($_POST);exit;
		$id = $_POST['id'];
		$qty = $_POST['qty'];
		$prd_id = $_POST['prd_id'];
		// $this->db->where('product_id',$prd_id);
 		// $query=$this->db->get('product');  
		// $row = $query->row();

		$row = $this->ProductModel->getProductById($prd_id);
			 
		$data = array(
			'rowid' => $id,
			'qty'   => $qty 
		);
		 if($row->prod_stock>=$qty)
		{
			if($this->cart->update($data))
			{
				/*********************Coupon code unset session*****************/
				$cdata = array(
					'c_no' => $this->session->userdata('c_no'),
					'dis_amount' => $this->session->userdata('dis_amount') 
				);
				$this->session->unset_userdata($cdata);
				echo 1;
			}else
			{ 
				echo 0;				
			} 					
		}else{
			echo 3;
		}			
	} 
		
	public function deleteCart($id){
		// echo "coming";exit;
		// $id = $this->uri->segment(3);
		if ($id==="all"){
			// Destroy data which store in session.
			$this->cart->destroy();
		}else{
			// Destroy selected rowid in session.
			$data = array(
				'rowid' => $id,
				'qty' => 0
			);
			// Update cart data, after cancel.
			$this->cart->update($data);
		}
		
		//if($query) {
		redirect("cart");
		//}
	}

    public function billingInformation(){
        $guemail=$_POST['gemail'];
        
        $result=$this->session->set_userdata('guestemail',$guemail);
       // if(!empty($result )) {
           //echo $this->session->userdata('guestemail');
           //exit();
           redirect($this->config->item('base_url').'billingInformation', 'refresh');
       //} 
    }

	public function applyCoupon()
	{
		
		$c_no=$_POST['c_no'];
		// $current_date=date('Y-m-d');
		// $query = $this->db->get_where('coupon',array('c_no'=>$c_no,'status'=>1,'expire_date >='=>$current_date));

		$row = $this->CouponModel->checkCouponValid($c_no);

		if(isset($row) && isset($row->id))
		{  
			// $row = $query->row();						  
			if($this->cart->total()>=$row->min_amount)
			{ 
				 $data = array(
					'c_no' => $row->c_no,
					'dis_amount' => $row->dis_amount 
				);
				$this->session->set_userdata($data);
				echo "success";
			}else{
				echo "minimum-".$row->min_amount;
			}  
		}else{
			echo "invalid";
		}
	}

	public function shipping(){    
					    
		if (empty($this->session->userdata('dis_amount')) || $this->session->userdata('dis_amount') <= 0) {
			$this->session->set_userdata(array("dis_amount" => 0));
		}

        if (!isset($_POST["shipping_address_different"])) {
            $_POST["shipping_name"] = $_POST["billing_name"];
            $_POST["shipping_phone"] = $_POST["billing_phone"];
            $_POST["shipping_address"] = $_POST["billing_address"];
            $_POST["shipping_city"] = $_POST["billing_city"];
            $_POST["shipping_state"] = $_POST["billing_state"];
            $_POST["shipping_pincode"] = $_POST["billing_pincode"];
            $_POST["shipping_landmark"] = $_POST["billing_landmark"];
        }

        // print_r($_POST);exit;

		if($this->session->userdata('id'))
		{
			$_POST["user_id"]=$this->session->userdata('id');
			$_POST["email"]=$this->session->userdata('email');
			$_POST["joinon"]=date("Y/m/d");		
			
			$_POST["delivery_amt"]=0;
			
			// $state_shipping_price = $this->db->select('*')->from('states')
			// 								 ->where('state', $_POST["shipping_state"])
			// 								 ->get()->row_array();

			$state_shipping_price = (array) $this->StateModel->getStateByName($_POST["shipping_state"]);

            // print_r($state_shipping_price);exit;

			if(empty($state_shipping_price))  {
				$state_shipping_price['state'] = $_POST['shipping_state'];
				$state_shipping_price['delivery_amount_per_kg'] = 80;
			}
			
			if(strcasecmp($state_shipping_price["state"], 'tamil nadu')==0 ||
			   strcasecmp($state_shipping_price["state"], 'tamilnadu')==0
			  )  {
				if($this->cart->total()<=500){							
					$_POST["delivery_amt"]=$state_shipping_price['delivery_amount_per_kg']; 
				}

			  }
			  else {

				$total_grams = 0;
				foreach($this->cart->contents() as $item)  {
					$total_item_grams = $item['qty'] * $this->convert_weight_to_grams($item['options']['prod_weight']);
					$total_grams += $total_item_grams;
				}
				
				$total_weight_kg = 0;
				if($total_grams < 1000)  {
					$total_weight_kg = 1;
				}
				else {
				   $total_weight = round($total_grams/1000, 3);
					$total_weight_kg = floor($total_weight);
					$total_weight_remaining_gm = $total_weight - $total_weight_kg;
					if($total_weight_remaining_gm > 0)  {
						$total_weight_kg++;
					} 
				}
				$_POST["delivery_amt"]= $state_shipping_price['delivery_amount_per_kg'] * $total_weight_kg;
			  }

			$_POST["c_no"]=$this->session->userdata('c_no');
			$_POST["dis_amount"]=$this->session->userdata('dis_amount');
			
			$subtotal=$this->cart->total();	
			$disc=$subtotal * $this->session->userdata('dis_amount');	
			$disc_amt=$disc/100;
			$_POST["amount"]=$this->cart->format_number($this->cart->total()+$_POST["delivery_amt"]-$disc_amt);
			$data=$_POST;

			// print_r($data);exit;

			$insert_id =  $this->ShippingAddressModel->add($data);
			
			if( !empty($insert_id))
			{
				// $insert_id = $this->db->insert_id();
				$shippingdata = array(
					'order_id' => "CA".$insert_id
				);	
				
				// $this->db->where('id',$insert_id);
				// $this->db->update('shipping_address', $shippingdata);
				
				$this->ShippingAddressModel->updatShippingData($insert_id, $shippingdata);

				$data = array(
					'shipping_id' => $insert_id
				);
					
				$useraddress = array(
					'address' => $_POST["billing_address"] ,
					'city' => $_POST["billing_city"] ,
					'landmark' => $_POST["billing_landmark"] ,
					'phone' => $_POST["billing_phone"] ,
					'pincode' => $_POST["billing_pincode"] ,
					'state' => $_POST["billing_state"] 
				);
					
				// $this->db->where('id', $this->session->userdata('id'));
				// $this->db->update('users', $useraddress);	
				
				$this->UserModel->updateAddress($insert_id, $useraddress);
				
				$cart = $this->cart->contents();

				foreach($cart as $item){
					$orderedproduct = array(
					'order_id' => $insert_id ,
					'prod_id' => $item['id'] ,
					'prod_name' => $item['name'] ,
					'prod_qty' => $item['qty'] ,
					'amount' => $item['price'],
					'subtotal' => $item['subtotal']
					);
					// $this->db->insert('ordered_product', $orderedproduct);
					$this->OrderProductModel->add($orderedproduct);
				}
				foreach($cart as $items){									 
					$id = $items['id'];
					// $this->db->where('product_id',$id);
					// $result = $this->db->get('product')->result();
					$res = $this->ProductModel->getProductById($id);
					if($res)
					{
						// foreach($result as $res)
						// {
							$updateproduct = array(
								'prod_stock' =>$res->prod_stock - $items['qty'],
								'prod_inward' =>$res->prod_inward - $items['qty'],
								'prod_outward' =>$res->prod_outward + $items['qty']
							);									
						// }
						// $this->db->where('product_id',$id);
						// $this->db->update('product',$updateproduct);

						$this->ProductModel->updateProductData($id, $updateproduct);
					}			             
				}

					$this->session->set_userdata($data); 
					/*********************Coupon code unset session*****************/
					$cdata = array(
						'c_no' => $this->session->userdata('c_no'),
						'dis_amount' => $this->session->userdata('dis_amount') 
					);
					$this->session->unset_userdata($cdata);
					
					echo 1;
			}
			else{
			echo 0;
			}
		} else if( (isset($_POST["email"]) && !empty($_POST["email"])) || (!empty($this->session->userdata('guestemail')) ))
		{
            $email = $this->session->userdata('guestemail');
            if (isset($_POST["email"]) && !empty($_POST["email"])) {
                $email = $_POST["email"];
            }
            $_POST["email"] = $email;
            
			$_POST["amount"]=$this->cart->format_number($this->cart->total());
			$_POST["joinon"]=date("Y/m/d");
			
			$_POST["delivery_amt"]=0;
			
			// $state_shipping_price = $this->db->select('*')->from('states')
			// 								 ->where('state', $_POST["shipping_state"])
			// 								 ->get()->row_array();
            // print_r($_POST);
			$state_shipping_price = (array) $this->StateModel->getStateByName($_POST["shipping_state"]);
						
            // print_r($state_shipping_price);exit;
            
			if(empty($state_shipping_price))  {
				$state_shipping_price['state'] = $_POST['shipping_state'];
				$state_shipping_price['delivery_amount_per_kg'] = 80;
			}
			
			if(strcasecmp($state_shipping_price["state"], 'tamil nadu')==0 ||
			   strcasecmp($state_shipping_price["state"], 'tamilnadu')==0
			  )  {
				if($this->cart->total()<=500){							
					$_POST["delivery_amt"]=$state_shipping_price['delivery_amount_per_kg']; 
				}

			  }
			  else {

				$total_grams = 0;
				foreach($this->cart->contents() as $item)  {
					$total_item_grams = $item['qty'] * $this->convert_weight_to_grams($item['options']['prod_weight']);
					$total_grams += $total_item_grams;
				}
				
				$total_weight_kg = 0;
				if($total_grams < 1000)  {
					$total_weight_kg = 1;
				}
				else {
				   $total_weight = round($total_grams/1000, 3);
					$total_weight_kg = floor($total_weight);
					$total_weight_remaining_gm = $total_weight - $total_weight_kg;
					if($total_weight_remaining_gm > 0)  {
						$total_weight_kg++;
					} 
				}
				$_POST["delivery_amt"]= $state_shipping_price['delivery_amount_per_kg'] * $total_weight_kg;
			  }
			
			$_POST["c_no"]=$this->session->userdata('c_no');
			$_POST["dis_amount"]=$this->session->userdata('dis_amount');
			
			$subtotal=$this->cart->total();	
			$disc=$subtotal * $this->session->userdata('dis_amount');	
			$disc_amt=$disc/100;
			$_POST["amount"]=$this->cart->format_number($this->cart->total()+$_POST["delivery_amt"]-$disc_amt);
			$data=$_POST;

			$insert_id =  $this->ShippingAddressModel->add($data);

			// $this->db->insert('shipping_address', $data)
			
			if(!empty($insert_id) )
			{
				$insert_id = $this->db->insert_id();
				$shippingdata = array(
					'order_id' => "CA".$insert_id
				);							
				// $this->db->where('id',$insert_id);
				// $this->db->update('shipping_address', $shippingdata);
				$this->ShippingAddressModel->updatShippingData($insert_id, $shippingdata); 
				$data = array(
					'shipping_id' => $insert_id
				);		
				
				$useraddress = array(
					   'address' => $_POST["billing_address"] ,
					   'city' => $_POST["billing_city"] ,
					   'landmark' => $_POST["billing_landmark"] ,
					   'phone' => $_POST["billing_phone"] ,
					   'pincode' => $_POST["billing_pincode"] ,
					   'state' => $_POST["billing_state"] 
				);
				
				// $this->db->where('id', $this->session->userdata('id'));
				// $this->db->update('users', $useraddress);
				
				$this->UserModel->updateAddress($insert_id, $useraddress);
			
				$cart = $this->cart->contents();

				foreach($cart as $item){
					$orderedproduct = array(
						'order_id' => $insert_id ,
						'prod_id' => $item['id'] ,
						'prod_name' => $item['name'] ,
						'prod_qty' => $item['qty'] ,
						'amount' => $item['price'],
						'subtotal' => $item['subtotal']
					);							
					// $this->db->insert('ordered_product', $orderedproduct);	
					
					$this->OrderProductModel->add($orderedproduct);
				}
				foreach($cart as $items){									 
					$id = $items['id'];
					// $this->db->where('product_id',$id);
					// $result = $this->db->get('product')->result();
					$res = $this->ProductModel->getProductById($id);
					if($res)
					{
						// foreach($result as $res)
						// {
							$updateproduct = array(
								'prod_stock' =>$res->prod_stock - $items['qty'],
								'prod_inward' =>$res->prod_inward - $items['qty'],
								'prod_outward' =>$res->prod_outward + $items['qty']
							);									
						// }
						// $this->db->where('product_id',$id);
						// $this->db->update('product',$updateproduct);

						$this->ProductModel->updateProductData($id, $updateproduct);
					}			             
				}								
				$this->session->set_userdata($data);
				/*********************Coupon code unset session*****************/
				$cdata = array(
					'c_no' => $this->session->userdata('c_no'),
					'dis_amount' => $this->session->userdata('dis_amount') 
				);
				$this->session->unset_userdata($cdata);
				
				echo 1;
			}
			else{
			 echo 0;
			}
			
		} else{
		   echo 2;
		} 
	}

	public function convert_weight_to_grams($weight)
		{
			if(strcasecmp($weight, '1 kg')==0)  {
				return 1000;
			}
			else if(strcasecmp($weight, '200 gm')==0)  {
				return 200;
			}
			else if(strcasecmp($weight, '500 gm')==0)  {
				return 500;
			}
			else if(strcasecmp($weight, '100 gm')==0)  {
				return 100;
			}
			else if(strcasecmp($weight, '50 gm')==0)  {
				return 50;
			}
			else if(strcasecmp($weight, '1 Litre')==0)  {
				return 950;
			}
			else if(strcasecmp($weight, '500 ML')==0)  {
				return 450;
			}
			else if(strcasecmp($weight, '200 ML')==0)  {
				return 250;
			}
			else if(strcasecmp($weight, '250 gm')==0)  {
				return 250;
			}
			else if(strcasecmp($weight, '25 gm')==0)  {
				return 25;
			}
			else if(strcasecmp($weight, '150 gm')==0)  {
				return 150;
			}
			else if(strcasecmp($weight, '1 Piece')==0)  {
				return 8;
			}
			else if(strcasecmp($weight, '1 Pkt(12 Pieces)')==0)  {
				return 250;
			}
			else if(strcasecmp($weight, '1 Pkt(3 Pieces)')==0)  {
				return 75;
			}
			else if(strcasecmp($weight, '1 Pkt(4 Pieces)')==0)  {
				return 15;
			}
			else if(strcasecmp($weight, '1 Pkt(5 Pieces)')==0)  {
				return 25;
			}
			else if(strcasecmp($weight, '1 Pkt(20 Pieces)')==0)  {
				return 100;
			}
			else if(strcasecmp($weight, '1 Box(10 Pieces)')==0)  {
				return 250;
			}
			else if(strcasecmp($weight, 'Jumbo Pack')==0)  {
				return 2000;
			}
			else if(strcasecmp($weight, 'Big Jar')==0)  {
				return 1500;
			}
			else if(strcasecmp($weight, 'Small Jar')==0)  {
				return 800;
			}
			else if(strcasecmp($weight, 'Small Jar(30 Pieces)')==0)  {
				return 800;
			}
			else if(strcasecmp($weight, '1 Pkt')==0)  {
				return 25;
			}
			else if(strcasecmp($weight, 'Big Jar(60 Pieces)')==0)  {
				return 1500;
			}
			else if(strcasecmp($weight, '1 Box')==0)  {
				return 250;
			}
			
			return 0;
		}
    
}