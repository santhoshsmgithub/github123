<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/SliderModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["slider"] = $this->SliderModel->getAll();
        $this->load->view('backend/admin/slider/index',$data);
    }

    public function add($id = null)
    {
        $data = array();
        if (!empty($id)) {
            $data["slider"]= $this->SliderModel->get($id);
        }
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            $result = $this->SliderModel->add($id);
            if($result) 
            {
                redirect('admin/slider/list');
            }
        }
        $this->load->view('backend/admin/slider/add', $data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->SliderModel->delete($id);
            if($result) 
            {
                redirect('admin/slider/list');
            }
        }
        return false;
    }  
}