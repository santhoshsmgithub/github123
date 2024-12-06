<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/EmailModel');
        $this->load->model('backend/admin/ContactEmailModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function subscriberList() 
    {
        $data["email"] = $this->EmailModel->getAll();
        $this->load->view('backend/admin/email/subscriber-list',$data);
    }

    public function contactList() 
    {
        $data["email"] = $this->ContactEmailModel->getAll();
        $this->load->view('backend/admin/email/contact-list',$data);
    }  
}