<?php 
	$frontend_theme_url=$this->config->item('frontend_theme_url');	
	$base_url=$this->config->item('base_url'); 
	// $shipping=$shipping[0];
	// print_r($shipping);exit;
		
	$purpose = 'Order id#'.$this->session->userdata('shipping_id');
	$price 	 = $shipping->amount;
	$name 	 = $shipping->billing_name;
	$phone 	 = $shipping->billing_phone;
	$email 	 = $shipping->email;
	include 'src/instamojo.php';
	$api = new Instamojo\Instamojo('fff33df0e255e57f1c6c876ee73d87b5', '878ea9b16c57c8c5f86cec1646fc40c9','https://www.instamojo.com/api/1.1/');
    //echo $api;
	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => $purpose,
			"amount" => $price,
			"buyer_name" => $name,
			"phone" => $phone,
			"send_email" => true,
			"send_sms" => true,
			"email" => $email,
			'allow_repeated_payments' => false,
			"redirect_url" => $base_url."success",
			"webhook" => $base_url."webhook"
			));		 
			// "webhook" => $base_url."cart/webhook/"

		$pay_ulr = $response['longurl'];		
		//Redirect($response['longurl'],302); //Go to Payment page
		header("Location: $pay_ulr");
		exit();
	}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}
  ?>