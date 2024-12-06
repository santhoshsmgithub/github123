<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(E_ALL);
class CHeckout extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
        $this->load->library('pagination');
		$this->load->library('email');
		$this->load->library('Cart');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('frontend/CategoryModel');
        $this->load->model('frontend/SubCategoryModel');
        $this->load->model('frontend/ProductModel');
        $this->load->model('frontend/SliderModel');
        $this->load->model('frontend/AreaModel');
        $this->load->model('frontend/CouponModel');
		$this->load->model('frontend/UserModel');
		$this->load->model('frontend/ShippingAddressModel');
		$this->load->model('frontend/TestimonialModel');
		$this->load->model('frontend/WishlistModel');
		$this->load->model('frontend/OrderProductModel');
        $this->load->model('frontend/StateModel');
    }

    public function index()
	{
		 
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 			
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $area="where status=1";
		// $data["area"] = $this->insert->Select('area',$area); 
		
		$data["category"] = $this->CategoryModel->getActiveAll();
            $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

            $subcategory_ids = array_column($data["subcategory"], 'id');
            $data["subcategory_products"] = array();
            if (count($subcategory_ids) > 0) {
                $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
                $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
            }
            if($this->session->userdata('id'))
		{
			// $Query10="where id='".$this->session->userdata('id')."'";
			// $data["users"] = $this->insert->Select('users',$Query10);
			$data["users"] = $this->UserModel->get($this->session->userdata('id'));
		}
            
            $data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
            $data["footerproduct"] = $this->CategoryModel->getFooterCategory();
            $data["area"] = $this->AreaModel->getActiveAll();
            $data["state"] = $this->StateModel->getAll();

		// $this->load->view('frontend/checkout',$data);
        $this->load->view('frontend/checkout-new',$data);
		// $this->load->view('footer',$data);
	}

	public function billingInformation()
	{
		//  echo "";exit;
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 			
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $area="where status=1";
		// $data["area"] = $this->insert->Select('area',$area); 
        
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
            $data["state"] = $this->StateModel->getAll();
		// print_r($data["state"]);exit;	
		if($this->session->userdata('id'))
		{
			$data["users"] = $this->UserModel->get($this->session->userdata('id'));
		}
		// $data["shipping"] = array();
 		// $this->load->view('frontend/billingInformation',$data);

         $this->load->view('frontend/checkout-new',$data);
		// $this->load->view('footer',$data);
	}
	
	
	
		public function orderReview()
	{
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 			
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $area="where status=1";

		$shipping_details=$this->session->userdata('shipping_id');
		// $Query10="where id=".$shipping_details;
		// $data["shipping"] = $this->insert->Select('shipping_address',$Query10);
        
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
		$data["shipping"] = $this->ShippingAddressModel->get($shipping_details);

        // print_r($data["shipping"]);exit;	
		
    // $this->load->view('frontend/orderReview',$data);
        $this->load->view('frontend/order-review-new',$data);
		// $this->load->view('footer',$data);
	}
	
		public function paymentMode()
	{
 
		// $pdct=$this->uri->segment(3);
		// $Query3="where user_id='".$this->session->userdata('id')."'";
		// $data["wishlist"] = $this->insert->Select('wishlist',$Query3);
		// $fooQuery="where status=1 order by product_id desc limit 6";
		// $data["footerproduct"] = $this->insert->Select('product',$fooQuery);
		// $Query2="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query2);
		// $Query6="where status=1";
		// $data["sub_category"] = $this->insert->Select('sub_category',$Query6);
		// $Query7="where status=1";
		// $data["sub_sub_category"] = $this->insert->Select('sub_sub_category',$Query7);
		// $Query8="where status=1";
		// $data["slider"] = $this->insert->Select('slider',$Query7);
		// $Query9="where status=1";
		// $data["testimonials"] = $this->insert->Select('testimonials',$Query9);
		// $shipping_details=$this->session->userdata('shipping_id');
		// $Query10="where id=".$shipping_details;
		// $data["shipping"] = $this->insert->Select('shipping_address',$Query10);
		// $Query11="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query11); 


		$shipping_details=$this->session->userdata('shipping_id');
        $data["wishlist"] = $this->WishlistModel->getUserWhishList($this->session->userdata('id'));
		$data["footerproduct"] = $this->CategoryModel->getFooterCategory();
		$data["category"] = $this->CategoryModel->getActiveAll();
        $data["sub_category"] = $this->SubCategoryModel->getActiveAll();
		$data["slider"] = $this->SliderModel->getActiveAll();
		$data["testimonials"] = $this->TestimonialModel->getActiveAll();
		$data["shipping"] = $this->ShippingAddressModel->get($shipping_details);
        $data["area"] = $this->AreaModel->getActiveAll();

		$this->load->view('frontend/view-payment',$data);
		// $this->load->view('footer',$data);
	}

	public function cashOnDelivery($orderid)
	{			
		// echo "coming";exit;
		// $orderid = $this->uri->segment(3);
		if (!empty($orderid)) {
			$shipaddress = array(
				'payment_status' => 0,
				'order_status' => 1
			);
			// $this->db->where('id',$orderid);
			// $result = $this->db->update('shipping_address', $shipaddress);
	
			$result = $this->ShippingAddressModel->updatShippingData($orderid, $shipaddress);
		
			if($result)
			{				
				// $Query="where order_id='".$orderid."'";  
				// $data["orderedproduct"] = $this->insert->Select('ordered_product',$Query);
				// $Query1="where id='".$orderid."'";  
				// $data["shipping"] = $this->insert->Select('shipping_address',$Query1);
	
				$data["orderedproduct"] = $this->OrderProductModel->get($shipping_details);
				$data["shipping"] = $this->ShippingAddressModel->get($shipping_details);
	
				if (!isDev) {
					$this->load->library('email');			
					$this->email->from($this->config->item('admin_email'),"Chennai Angadi"); 
					$this->email->to($data["shipping"][0]->email,$data["shipping"][0]->billing_name); 
					$this->email->subject("Order id: #".$data["shipping"][0]->order_id.' With chennaiangadi.com'); 			
					$body = $this->load->view('frontend/email/order_mail',$data,TRUE);
					$this->email->message($body);			
					$this->email->send();
					
					$this->load->library('email');
					$this->email->from($data["shipping"][0]->email,$data["shipping"][0]->billing_name);			
					$this->email->to($this->config->item('admin_email'),'Chennai Angadi');		
					$this->email->bcc($this->config->item('bcc_email'));
					$this->email->subject('New Ordering With chennaiangadi.com Order id: #'.$data["shipping"][0]->order_id);			
					$body = $this->load->view('frontend/email/order_mail',$data,TRUE);
					$this->email->message($body);	
					$this->email->send(); 
				}
				redirect("success");
				// redirect($this->config->item('base_url').'success', 'refresh');
			}else{
				redirect("payment_mode");
				// redirect($this->config->item('base_url').'payment_mode', 'refresh');
			}
		}
		 
	}
	 
	public function payNow()
	{		
		// echo "coming";exit;		
		$shipping_details=$this->session->userdata('shipping_id');
		// $Query2="where id=".$shipping_details;
		// $data["shipping"] = $this->insert->Select('shipping_address',$Query2);
		$data["shipping"] = $this->ShippingAddressModel->get($shipping_details);	
		$this->load->view('frontend/pay',$data);
	}

	public function webhook()
	{		
		$this->load->view('frontend/webhook');
	}

	public function success()
	{
		// echo $this->session->userdata('shipping_id');exit;
		if($this->session->userdata('shipping_id')){
			// $cat="where status=1 order by order_by";
			// $data["category"] = $this->insert->Select('category',$cat); 			
			// $sub_cat="where status=1 group by product_image order by product_id desc";
			// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
			// $fooQuery="where status=1 order by order_by desc limit 5";
			// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);	
			// $data["order-status"]=1;
			// $shipping_details=$this->session->userdata('shipping_id');
			// $Query2="where id=".$shipping_details;
			// $data["shipping"] = $this->insert->Select('shipping_address',$Query2);
 
			// $Query="where order_id='".$shipping_details."'";  
			// $data["orderedproduct"] = $this->insert->Select('ordered_product',$Query);
			
			// $Query1="where id='".$shipping_details."'";  
			// $data["shipping"] = $this->insert->Select('shipping_address',$Query1);

			$data["order-status"]=1;
			$shipping_details=$this->session->userdata('shipping_id');
			$data["category"] = $this->CategoryModel->getActiveAll();
			$data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
			$data["footerproduct"] = $this->CategoryModel->getFooterCategory();
			$data["shipping"] = $this->ShippingAddressModel->get($shipping_details);
			$data["orderedproduct"] = $this->OrderProductModel->get($shipping_details);
			$data["order"] = $this->ShippingAddressModel->get($shipping_details);
			
			if (!isDev) {		
				$this->email->from($this->config->item('admin_email'),"Chennai Angadi"); 
				$this->email->to($data["shipping"]->email,$data["shipping"]->billing_name); 
				$this->email->subject("Order id: #".$data["order"]->order_id.' With chennaiangadi.com'); 			
				$body = $this->load->view('frontend/email/order_mail',$data,TRUE);
				$this->email->message($body);			
				$this->email->send();
				
				// $this->load->library('email');
				$this->email->from($data["shipping"]->email,$data["shipping"]->billing_name);			
				$this->email->to($this->config->item('admin_email'),'Chennai Angadi');		
				$this->email->bcc($this->config->item('bcc_email'));
				$this->email->subject('New Ordering With chennaiangadi.com Order id: #'.$data["order"]->order_id);			
				$body = $this->load->view('frontend/email/order_mail',$data,TRUE);
				$this->email->message($body);	
				$this->email->send();
			}
			
			// $this->load->view('frontend/finish',$data);
            $this->load->view('frontend/finish-new',$data);
			// $this->load->view('footer');
		 }else{
			// redirect($this->config->item('base_url'), 'refresh');
			redirect('');
		 }
		 
	}

	public function failure()
	{
		// $cat="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$cat); 			
		// $sub_cat="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$sub_cat);		 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $area="where status=1";

		$data["category"] = $this->CategoryModel->getActiveAll();
		$data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
		$data["footerproduct"] = $this->CategoryModel->getFooterCategory();

		$this->load->view('frontend/payment-fail',$data);
		// $this->load->view('footer',$data); 		
	}
}