<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SubCategory extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/CategoryModel');
        $this->load->model('backend/admin/SubCategoryModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["category"] = $this->SubCategoryModel->getAll();
        $data["maincategory"] = $this->CategoryModel->getAll();
        $this->load->view('backend/admin/sub-category/index',$data);
    }

    public function add($id = null)
    {
        $data = array();
        $data["category"] = $this->CategoryModel->getAll();
        if (!empty($id)) {
            $data["subCategory"]= $this->SubCategoryModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->SubCategoryModel->add($id);
            if($result) 
            {
                redirect('admin/sub-category/list');
            }
        }
        $this->load->view('backend/admin/sub-category/add', $data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->SubCategoryModel->delete($id);
            if($result) 
            {
                redirect('admin/sub-category/list');
            }
        }
        return false;
    }  
}