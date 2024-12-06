<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        // $this->load->database();
        // $this->load->library('session');
        // $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/InsertModel');
        $this->load->model('backend/admin/LoginModel');
        // $this->load->library('email');	
        // error_reporting(0);
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == "POST") {

            $site=$this->config->item('base_url');
            $result = $this->LoginModel->valitate();
            // print_r($this->session->userdata());exit;
            if($result && !empty($this->session->userdata('User_ID'))) {
                redirect('admin/dashboard');
            }
        }
        $this->load->view('backend/admin/index');
    }
                    
    public function changePassword($id)
    {
        if ($this->input->server('REQUEST_METHOD') == "POST" && !empty($id)) {

            // $id = $this->uri->segment(3);
            $data["admin_url"]=$this->config->item('admin_url');
            $result = $this->InsertModel->Update('user',$Query=' where user_id='.$id);
            if(!empty($result )) {
                redirect('admin/dashboard');
            }
        }
        $this->load->view('backend/admin/change-password');

    }

    public function logOut()
    {
        $data = array(
            'User_ID' =>'',
            'User_Email' => '',
            'username' =>'',
            'validated' => true
        );
        // $this->session->unset_userdata($data);
        $this->session->set_userdata($data);
        redirect('admin');
    }
}