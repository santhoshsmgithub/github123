<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/CouponModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["coupon"] = $this->CouponModel->getAll();
        $this->load->view('backend/admin/coupon/index',$data);
    }

    public function add($id = null)
    {
        $data = array();
        if (!empty($id)) {
            $data["coupon"]= $this->CouponModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->CouponModel->add($id);
            if($result) 
            {
                redirect('admin/coupon/list');
            }
        }
        $this->load->view('backend/admin/coupon/add', $data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->CouponModel->delete($id);
            if($result) 
            {
                redirect('admin/coupon/list');
            }
        }
        return false;
    }  
}