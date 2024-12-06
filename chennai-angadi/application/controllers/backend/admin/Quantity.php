<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quantity extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/QuantityModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["quantity"] = $this->QuantityModel->getAll();
        $this->load->view('backend/admin/quantity/index',$data);
    }

    public function add($id = null)
    {
        $data = array();
        if (!empty($id)) {
            $data["quantity"]= $this->QuantityModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->QuantityModel->add($id);
            if($result) 
            {
                redirect('admin/quantity/list');
            }
        }
        $this->load->view('backend/admin/quantity/add', $data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->QuantityModel->delete($id);
            if($result) 
            {
                redirect('admin/quantity/list');
            }
        }
        return false;
    }  
}