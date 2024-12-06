<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/InsertModel');
        $this->load->model('backend/admin/DashboardModel');
        // error_reporting(0);

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }

    }

    public function index()
    {
        $data["tot_pdct"]=$this->DashboardModel->totalproduct();
        $data["tot_enq"]=$this->DashboardModel->totalenquiry();
        $data["tot_users"]=$this->DashboardModel->totalusers();
        $data["tot_orders"]=$this->DashboardModel->totalorders();
        $Query="group by product_image order by product_id";  
        $data["products"] = $this->InsertModel->Select('product',$Query);
        $Query="order by id desc limit 5";  
        $data["shipping"] = $this->InsertModel->Select('shipping_address',$Query);
        
        $this->load->view('backend/admin/dashboard/index',$data);
    }
}