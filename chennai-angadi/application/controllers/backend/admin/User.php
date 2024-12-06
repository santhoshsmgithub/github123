<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('backend/admin/UserModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index()
    {
        $data["users"] = $this->UserModel->getAll();
        $this->load->view('backend/admin/user/index',$data);
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $result = $this->UserModel->delete($id);
            if($result) 
            {
                redirect('admin/user/list');
            }
        }
        return false;
    }
}