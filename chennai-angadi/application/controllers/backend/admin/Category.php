<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
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
        $data["category"] = $this->CategoryModel->getAll();
        $this->load->view('backend/admin/category/index',$data);
    }

    public function add($id = null)
    {
        $data = array();
        if (!empty($id)) {
            $data["category"]= $this->CategoryModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->CategoryModel->add($id);
            if($result) 
            {
                redirect('admin/category/list');
            }
        }
        $this->load->view('backend/admin/category/add', $data);
    }

    public function getCategory()
    {
        $category=$_POST['category'];			
        $this->db->where("main_category", $category);
        $query=$this->db->get('sub_category');
        echo '<select name="product_subcategory" class="span12 validate[required]">';
        foreach($query->result() as $sub_cate){
            echo '<option value="'.$sub_cate->id.'">'.$sub_cate->category_title.'</option>';
        }
        echo "</select>";
    }

    public function delete($id)
    {
        if (!empty($id)) {
            // Delete sub category
            $result = $this->SubCategoryModel->delete($id);
            if($result) 
            {
                // Delete category
                $this->CategoryModel->delete($id);

                redirect('admin/category/list');
            }
        }
        return false;
    }  
}