<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/ProductModel');
        $this->load->model('backend/admin/CategoryModel');
        $this->load->model('backend/admin/SubCategoryModel');
        $this->load->model('backend/admin/QuantityModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["products"] = $this->ProductModel->getAll();
        $this->load->view('backend/admin/product/index',$data);
    }

    public function add($id = null)
    {
        $data = array();

        $data["quantity"] = $this->QuantityModel->getActiveAll();
        $data["category"] = $this->CategoryModel->getActiveAll();
            
        
        // $mode = "add";
        if (!empty($id)) {
            // $mode = "update";
            $data["category"] = $this->CategoryModel->getActiveAll();			
            $data["subcategory"] = $this->SubCategoryModel->getActiveAll();
            $data["product"]= $this->ProductModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->ProductModel->add($id);
            if ($result)
                redirect('admin/product/list');
        }
        $this->load->view('backend/admin/product/add', $data);
    }


    public function unit($productCode)
    {
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->ProductModel->updateWPS();
            if ($result)
                redirect('admin/product/list');
        } else {
            $data["products"] = $this->ProductModel->getProductsByCode($productCode);
            // $data["category"] = $this->CategoryModel->getActiveAll();
            // $data["productCode"] = $productCode;
            $data["quantity"] = $this->QuantityModel->getActiveAll();
            $this->load->view('backend/admin/product/unit',$data);
        }
    }

    public function stockList() 
    {
        $data["products"] = $this->ProductModel->getProductGroupByCode();
        $this->load->view('backend/admin/product/stock',$data);
    }

    public function costList() 
    {
        $data["products"] = $this->ProductModel->getProductGroupByCode();
        $this->load->view('backend/admin/product/cost',$data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->ProductModel->delete($id);
            if($result) 
            {
                redirect('admin/product/list');
            }
        }
        return false;
    }  
}