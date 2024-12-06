<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');

// $shipping=$shipping[0];
?>

                  
		<div class="section-element-area ptb-80">
			<!-- Start breadcume area -->
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-6">
						<h2 style="color:green"><strong>Thank you for shopping with Chennai Angadi!</strong></h2>
 						<table class="table">
							  <thead> 
								<tr> 
								  <th>Order ID</th>
								  <th><?php  echo $shipping->order_id;?></th> 
								</tr>
								<tr> 
								  <th>Estimate Delivery:</th>
								  <th><?php 					
										$date = date('Y-m-d');																			
										$next_date = date('d-M-Y', strtotime($date .' +3 day'));
										echo $next_date; 
										$data=array(
											'payment_status'=>1
										);							
										$this->db->where('id',$shipping->id);
										$this->db->update('shipping_address',$data);
										
										$this->cart->destroy();							
										$data = array('session_id' =>'','shipping_id' =>'');
								 	$this->session->unset_userdata($data);
									?>
									</th> 
								</tr>
							  </thead>
							  </table>
							  <a href="<?php echo $base_url;?>" class="btn btn-success">Back to home</a>
					</div> 
					<div class="col-md-3 col-sm-3 col-xs-6">		 					
							<img src="<?php echo $frontend_theme_url;?>img/success.png" class="img-responsive" alt="">
 					</div> 					
				</div>
				<div class="row">Got Questions? Please feel free to reach us 9094676665 or email: care@chennaiangadi.com</div>
			</div>
		</div>
		<?php  
$this->load->view('frontend/common/footer');
?>