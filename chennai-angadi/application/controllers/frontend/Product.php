<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(E_ALL);
class Product extends CI_Controller {
    
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
        $this->load->model('frontend/SliderModel');
        $this->load->model('frontend/AreaModel');
    }

    public function categoryWiseList($cate,$pdct) 
    {
        // $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);	
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);
		// $Query="where status=1 and product_category='$pdct' group by product_code order by product_id desc";
		// $data["product"] = $this->insert->Select('product',$Query);
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

        $data["product"] = $this->ProductModel->getActiveProductByCategory($pdct);
        $data["footerproduct"] = $this->CategoryModel->getFooterCategory();

		// $this->load->view('frontend/category-product-list',$data);
        // echo "test";exit;
        $this->load->view('frontend/category-product-list-new',$data);
		// $this->load->view('footer',$data);

        
    } 

    public function subCategoryWiseList($cate,$pdct)
	{ 	 
 
		// $Query="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query);	
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);
		// $Query="where status=1 and product_subcategory='$pdct' group by product_code order by product_id desc";
		// $data["product"] = $this->insert->Select('product',$Query);			
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);

        // echo $pdct;exit;

        $data["category"] = $this->CategoryModel->getActiveAll();
        $data["subcategory"] = $this->SubCategoryModel->getActiveAll();

        $subcategory_ids = array_column($data["subcategory"], 'id');
        $data["subcategory_products"] = array();
        if (count($subcategory_ids) > 0) {
            $subcategory_products = $this->ProductModel->getActiveProductBySubCategories($subcategory_ids);
            $data["subcategory_products"] = $this->ProductModel->formatSubCategoryProductIdAsKey($subcategory_products);
        }

        $data["product"] = $this->ProductModel->getActiveProductBySubCategory($pdct);
        // echo count($data["product"]);exit;
        $data["footerproduct"] = $this->CategoryModel->getFooterCategory();

        // echo "coming";exit;

		// $this->load->view('frontend/sub-category-product-list',$data); 	
        $this->load->view('frontend/category-product-list-new',$data);	
		// $this->load->view('footer',$data);	
	}

    public function productDetail($cate, $pdct)
	{
		// echo $pdct;exit;
		// echo "TETE";exit;
		// $this->load->helper('form');
		// $this->load->helper('url');
		// $pdct=$this->uri->segment(3);
		// if($pdct){
		// 	$Query="where product_id='$pdct' and status=1 order by product_id desc";
		// 	$relatedquery="where product_id!='$pdct' and status=1 order by product_id desc limit 5";
		// }
		// else{
		// 	$Query="where status=1 order by product_id desc";
		// 	$relatedquery="where status=1 order by product_id desc limit 5";
		// }
		// $data["product"] = $this->insert->Select('product',$Query);		
		// $Query2="where status=1 order by order_by";
		// $data["category"] = $this->insert->Select('category',$Query2);
		// $Query1="where status=1 order by order_by";
		// $data["subcategory"] = $this->insert->Select('sub_category',$Query1);			
		// $Query3="where status=1  group by product_image order by product_id desc";
		// $data["products_list"] = $this->insert->Select('product',$Query3);		
		// $fooQuery="where status=1 order by order_by desc limit 5";
		// $data["footerproduct"] = $this->insert->Select('category',$fooQuery);		
		// $Query5="where status=1";		
		// $data["area"] = $this->insert->Select('area',$Query5); 
		// $data["relatedproduct"] = $this->insert->Select('product',$relatedquery); 
        
        $data["product"] = $this->ProductModel->getActiveProductById($pdct);
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
        $data["relatedproduct"] = array();
        if (isset($data["product"][0])) {
            $catId = $data["product"][0]->product_category;
            $data["relatedproduct"] = $this->ProductModel->getActiveRelatedProduct($catId);
        }
        

		// print_r($data["relatedproduct"]);exit;
		
		// $this->load->view('detail',$data);
        // $this->load->view('frontend/product-detail',$data); 
        $this->load->view('frontend/product-detail-new',$data); 
		// $this->load->view('footer',$data);
	}

    
}