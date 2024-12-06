<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(E_ALL);
class Home extends CI_Controller {
    
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
		$this->load->model('frontend/TestimonialModel');
        $this->load->model('frontend/ContactEmailModel');
    }

    public function index() 
    {
        // $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);		
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);	
		// $Query2="where status=1 group by product_code order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$Query2);		
		// $Query3="where status=1 and prod_hot=1 group by product_code order by product_id desc limit 10";
		// $data["product_hot"] = $this->insert->Select('product',$Query3);		
		// $Query4="where status=1 and prod_new=1 group by product_code order by product_id desc limit 10";
		// $data["product_new"] = $this->insert->Select('product',$Query4); 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $Query5="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query5); 
		
		// $Query8="where status=1";
		// $data["slider"] = $this->insert->Select('slider',$Query8); 

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

        $data["products_list"] = $this->ProductModel->getActiveProductGroupByCode();
        $data["product_hot"] = $this->ProductModel->getHotProducts();
        $data["product_new"] = $this->ProductModel->getNewProducts();
        $data["our_products_1"] = $this->ProductModel->getActiveProductBySubCategory(102);
        $data["our_products_2"] = $this->ProductModel->getActiveProductBySubCategory(105);
        $data["our_products_3"] = $this->ProductModel->getActiveProductBySubCategory(101);
        $data["our_products_4"] = $this->ProductModel->getActiveProductBySubCategory(111);

        $data["footerproduct"] = $this->CategoryModel->getFooterCategory();
        $data["area"] = $this->AreaModel->getActiveAll();
        $data["slider"] = $this->SliderModel->getActiveAll();

        // print_r($data["subcategory_products"]);exit;
        // exit;
        
		
		// $this->load->view('frontend/index',$data);
        $this->load->view('frontend/index-new',$data);
    } 

    public function aboutUs()
	{
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

 		// $this->load->view('frontend/about-us',$data);
         $this->load->view('frontend/about-us-new',$data);
		// $this->load->view('footer',$data);   
	}

    public function newArrivals()
	{
		// $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);				
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);	
		// $Query2="where status=1 group by product_name order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$Query2); 	
		// $Query4="where status=1 and prod_new=1 group by product_code  order by product_id desc limit 10";
		// $data["product"] = $this->insert->Select('product',$Query4); 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $Query5="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query5); 

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

        $data["products_list"] = $this->ProductModel->getActiveProductGroupByName();
        $data["product"] = $this->ProductModel->getNewProducts();
        $data["footerproduct"] = $this->CategoryModel->getFooterCategory();
        $data["area"] = $this->AreaModel->getActiveAll();

 		$this->load->view('frontend/newarrials',$data);
		// $this->load->view('footer',$data);   
	}
		public function offers()
	{
		// $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);			
		// $Query2="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$Query2); 	
		// $Query4="where status=1 and prod_hot=1 order by product_id desc limit 10";
		// $data["product"] = $this->insert->Select('product',$Query4); 		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);	
		// $fooQuery="where status=1";
		// $data["coupon"] = $this->insert->Select('coupon',$fooQuery);		
		// $Query5="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query5); 

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

        $data["products_list"] = $this->ProductModel->getActiveProductGroupByImage();
        $data["product"] = $this->ProductModel->getHotProducts();
        $data["footerproduct"] = $this->CategoryModel->getFooterCategory();
        $data["coupon"] = $this->CouponModel->getActiveAll();
        $data["area"] = $this->AreaModel->getActiveAll();

 		// $this->load->view('frontend/offers',$data);
         $this->load->view('frontend/offers-new',$data);
		// $this->load->view('footer',$data);   
	}

    public function searchproducts()
	{
        // echo "fdsf";exit;
	   $term = trim(strip_tags($_GET['term']));

       $searchProd = $this->ProductModel->getSearchProductsNew($term);
    //    exit;
			// $this->db->select('*');
			// $this->db->like('product_name',$term);
			// $query = $this->db->get('product');
            // echo count( (array)$searchProd);exit;
            // print_r($searchProd);exit;
			if(count( (array) $searchProd) > 0){
			  foreach ($searchProd as $row){
                //   echo $row->product_name;exit;
				$new_row['label']=htmlentities(stripslashes($row->product_name));
				$new_row['image']=htmlentities(stripslashes($row->product_image));
				$new_row['weight']=htmlentities(stripslashes($row->prod_weight));
				$new_row['price']=htmlentities(stripslashes($row->product_amount));
				// $subsubquery = $this->db->get_where('sub_sub_category',array('category_title'=>$row['product_category']));	
                // $subsubrow = $subsubquery->row();
                // echo $row->product_category;exit;
                // $subrow = $this->SubCategoryModel->getSubSubCatByTitle($row->product_category);
                // print_r($subrow);exit;
				// $subquery = $this->db->get_where('sub_category',array('category_title'=>$subsubrow->sub_category));	
				// $subrow = $subquery->row();
                // $subrow = $this->SubCategoryModel->getByTitle($subsubrow->sub_category);
                // print_r($subrow);exit;
				// $new_row['category']=$subrow->main_category;
				$new_row['id']=htmlentities(stripslashes($row->product_id));
				
				$row_set[] = $new_row; //build an array
			  }
			  echo json_encode($row_set); //format the array into json data
			}
			
	}

	public function search()
	{  
	    /*echo $this->uri->segment(3);
    	$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$pdct=$this->uri->segment(3);
		echo $offset;
		*/
        // print_r($_POST);exit;
		$element=$_GET['search'];
		if($element!="")
		{
		$Query="status='1' and ( product_name LIKE '%".$element."' or product_category LIKE '%".$element."' or product_description LIKE '%".$element."%' ) group by product_name order by product_id desc";

	    $search="where status='1' and product_name LIKE '%".$element."' or product_category LIKE '%".$element."' or product_description LIKE '%".$element."%' ";
		
		$pagQuery="status='1' and ( product_name LIKE '%".$element."' or product_category LIKE '%".$element."' or product_description LIKE '%".$element."%' ) group by product_image order by product_id desc";

		$search="where status='1' and product_name LIKE '%".$element."' or product_category LIKE '%".$element."' or product_description LIKE '%".$element."%'";

		}else
		{
		$pagQuery="where status='1'";
		//$Query="where status='1' limit 5 offset ".$offset;
		$Query="where status='1' ";
                $search=$Query;
		}
        if(isset($_GET['search']))
		{
		    $data = array(
				'search' =>$search,
				'currentsearch'=>"search"
			);
			$this->session->set_userdata($data);
		}

        // echo $Query;exit;
		
		
		// $fooQuery="where status=1 order by product_id desc limit 6";
		// $data["footerproduct"] = $this->insert->Select('product',$fooQuery);
		// $data["product"] = $this->insert->Select('product',$Query);
		// $rowcount=count($this->insert->Select('product',$pagQuery));

		$data["product_data"] = $this->ProductModel->getSearchProducts($Query);
		$rowcount = $this->ProductModel->getPagingProducts($pagQuery);
		// print_r($data["product"]);exit;

		$config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";
		$ci=& get_instance();
		$config['per_page']          = 5;
		$config['uri_segment']       = 4;
		$config['base_url']          = base_url()."search";
		$config['total_rows']        = $rowcount;
		$config['use_page_numbers']  = false;
		$this->pagination->initialize($config);
		//$pagingConfig   = $this->initPagination("search",$rowcount);
        $this->data["pagination_helper"]  = $this->pagination;
		$data["create_links"]=$this->pagination->create_links();
		$data["searchquery"]=$_GET['search'];

		// $Query3="where user_id='".$this->session->userdata('id')."'";
		// $data["wishlist"] = $this->insert->Select('wishlist',$Query3);
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
		// $Query11="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query11);

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

		$data["footerproduct"] = $this->CategoryModel->getFooterCategory();
		$data["slider"] = $this->SliderModel->getActiveAll();
		$data["testimonials"] = $this->TestimonialModel->getActiveAll();
        $data["area"] = $this->AreaModel->getActiveAll();

        // print_r($data["product_data"]);
        // exit;
		
		// $this->load->view('header',$data);
		// $this->load->view('frontend/listing',$data);
        $this->load->view('frontend/listing-new',$data);
		// $this->load->view('footer',$data);
	}
	
	public function filterby()
	{
		$element=$_POST['filterby'];
		$search=$this->session->userdata('search');
        $currentsearch=$this->session->userdata('currentsearch');
		// echo $element."===".$search."===".$currentsearch;exit;
		if($element==1)
		{
		$Query="group by product_image order by product_name asc";
		}
		if($element==2)
		{
		$Query="group by product_image order by product_name desc";
		}
		if($element==3)
		{
		$Query="group by product_image order by product_amount asc";
		}
		if($element==4)
		{
		$Query="group by product_image order by product_amount desc";
		}
		if($currentsearch=="filtersearch")
		{
		 $data["min"]=$this->session->userdata('min');
		 $data["max"]=$this->session->userdata('max');
		 //echo "yes price range";
		}
		if($currentsearch=="categorysearch")
		{
			$Inputs=array();
			$values = implode('","', $search);
			$values='"'.$values.'"';
			$prodQuery="where product_category IN ($values) and status='1' ".$Query;
			// $query=$this->db->query("select * from product ".$prodQuery) ;
			// $Tot_Rows=$query->num_rows($query);
			// if($Tot_Rows>0) {
			// foreach ($query->result() as $row) {
			// 		$Inputs[]=$row;
			// 	}
			// }
			$rows = $this->ProductModel->getProductsByQry($prodQuery);
			if(count($rows)>0) {
				foreach ($rows as $row) {
					$Inputs[]=$row;
				}
			}
			$data["product_data"] =$Inputs;
			//$data["productcat"]=$search;
		} else {
			// print_r($this->session->userdata('range_product_cat'));exit;
			if(!empty($this->session->userdata('range_product_cat')))
			{
				$Inputs=array();
				$values = implode('","',$this->session->userdata('range_product_cat'));
				$values='"'.$values.'"';
				
				$min=$this->session->userdata('min');
				$max=$this->session->userdata('max');				
				$subQuery="where product_category IN ($values) and status='1' and product_amount >= '$min' AND product_amount <= '$max' ".$Query;
				// $rangequery=$this->db->query("select * from product ".$subQuery) ;
				// $Tot_Rows=$rangequery->num_rows($rangequery);
				// if($Tot_Rows>0) {
				// 	foreach ($rangequery->result() as $row) {
				// 			$Inputs[]=$row;				
				// 	}	
				// }	
				$rows = $this->ProductModel->getProductsByQry($subQuery);
				if(count($rows)>0) {
					foreach ($rows as $row) {
						$Inputs[]=$row;
					}
				}	
				$data["product_data"]=$Inputs;
					//$data["productcat"]=$this->session->userdata('range_product_cat');	 
			}else{				 
				// $data["product"] = $this->insert->Select('product',$search.$Query);
				$data["product_data"] = $this->ProductModel->getProductsByQry($Query);
			}
		} 
		
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

		// $this->load->view('frontend/listing',$data);
        $this->load->view('frontend/listing-new',$data);
		// $this->load->view('footer',$data); 
	}

    public function contactUs()
	{
        
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

 		// $this->load->view('frontend/contactus',$data);
         $this->load->view('frontend/contactus-new',$data);
		// $this->load->view('footer',$data);   
	}

    public function contactEmail()
		{									
 
			// $result = $this->insert->insertrecord('contact_email');  
            $result = $this->ContactEmailModel->add();
            
            // var_dump(isDev);
            // exit;

            // print_r($_POST);exit;

            if (!isDev) {
			
                $this->email->from($_POST['email'],$_POST['name']);
                $this->email->to($this->config->item('admin_email'),'Chennai Angadi');		
                $this->email->bcc($this->config->item('bcc_email'));
                $this->email->subject('New Enquriy chennai Angadi!  ');
                $this->email->message("Dear Team, One new enquiried. Name: ".$_POST['name'].",\n\n. Email : ".$_POST['email'].",\n\n. Phone : ".$_POST['phone'].",\n\n. Message : ".$_POST['message'].",\n\n.");	
                if($this->email->send()){
                    echo 1;
                } 
            } else {
                echo 0;		
                }
		}

    public function privacyPolicy()
		{									
			// $cat="where status=1 order by order_by";
			// $data["category"] = $this->insert->Select('category',$cat); 			
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
            $data["area"] = $this->AreaModel->getActiveAll();

			// $this->load->view('frontend/privacy_policy',$data);
            $this->load->view('frontend/privacy_policy-new',$data);
			// $this->load->view('footer',$data);
		}
			public function termsConditions()
		{									
			// $cat="where status=1 order by order_by";
			// $data["category"] = $this->insert->Select('category',$cat); 			
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
            $data["area"] = $this->AreaModel->getActiveAll();

			// $this->load->view('frontend/terms_conditions',$data);
            $this->load->view('frontend/terms_conditions-new',$data);
			// $this->load->view('footer',$data);
		}

    public function pageNotFound()
	{
        // echo "test";exit;
		// $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);			
		// $Query2="where status=1 group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$Query2);  	
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $Query5="where status=1";
		// $data["area"] = $this->insert->Select('area',$Query5);
        
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
        
 		$this->load->view('frontend/404',$data);
		// $this->load->view('footer',$data);   
	}
}