<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');

class Order extends CI_Controller {
    
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('backend/admin/ShippingAddressModel');
        $this->load->model('backend/admin/OrderProductModel');
        $this->load->model('backend/admin/OrderHistoryModel');
        $this->load->model('backend/admin/EmailModel');

        if (empty($this->session->userdata('User_ID'))) {
            redirect('admin');
        }
    }

    public function index() 
    {
        $data = array();
        $data["shipping"] = $this->ShippingAddressModel->getAll();
        $this->load->view('backend/admin/order/index',$data);
    } 
    
    public function view($id) 
    {
        $data = array();
        $data["orderedproduct"] = $this->OrderProductModel->getAll($id);
        $data["order"] = $this->ShippingAddressModel->get($id);
        $this->load->view('backend/admin/order/view',$data);
    } 

    public function updateShipmentStatus($id) 
    {   
        $data = array();
        
        if ($this->input->server('REQUEST_METHOD') == "POST") {

            $this->ShippingAddressModel->updateShipmentStatus($id);
            $this->OrderHistoryModel->add($id);
            if (isDev) {
                redirect('admin/order/update-shipment-status/'.$id);
            }

            $user_order_details = $this->ShippingAddressModel->getArray($id);
            
            $mailData = [];
            $mailData['order_id'] = $user_order_details['order_id'];
            $mailData['name'] = $user_order_details['shipping_name'];
            $mailData['order_status'] = 'Processing';
            $mailData['deliver_comments'] = (empty($_POST['deliver_comments']))? 'No comments': $_POST['deliver_comments'];
            $mailData['deliver_comments'] =  $_POST['deliver_comments'];
            $deliver_status = $user_order_details['deliver_status'];
            if($deliver_status == 1)  {
                $mailData['order_status'] = 'Delivered';
            }
            else if($deliver_status == 2)  {
                
                $mailData['order_status'] = 'Shipped';
            }
            else if($deliver_status == 3)  {
                $mailData['order_status'] = 'Cancelled';
            }
            
            $emailData = array();
            $emailData["from"] = $this->config->item('admin_email');
            $emailData["from_name"] = 'Chennai Angadi';
            $emailData["to"] = $user_order_details['email'];
            $emailData["to_name"] = $user_order_details['shipping_name'];
            $emailData["subject"] = "Your Order ID: {$user_order_details['order_id']} status: {$mailData['order_status']}";
            // $emailData["message"] =  $this->load->view('order_processing_mail',$mailData,TRUE);
            $emailData["message"] =  $this->load->view('backend/admin/email/subscriber-list',$mailData,TRUE);

            if($this->EmailModel->sendShipmentStatusEmail($emailData)) {
                redirect('admin/order/update-shipment-status/'.$id);    
            }
        } else {
            $data["order"] = $this->ShippingAddressModel->get($id);
            $data["orderHistory"] = $this->OrderHistoryModel->getAll($id);
        }
        $this->load->view('backend/admin/order/update-shipment-status',$data);
    }
}