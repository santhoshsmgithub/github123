<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');

// $shipping=$shipping[0];
?>




    
    
    <!-- Page Contain -->
    <div class="page-contain">
        

        <!-- Main content -->
        <div id="main-content" class="main-content">  
            <div class="page-contain single-product">
                <div class="container order-success">   
                    <div class="mob-tick"><img src="<?php echo $frontend_theme_url;?>/images/success.png"/></div>     
                    <h3>Thank you for shopping with Chennai Angadi!</h3>
                    <div class="col-md-9 est-date">
                        <table class="table">
                              <tr> 
                                <td><strong>Order ID</strong></td>
                                <td><strong><?php  echo $shipping->order_id;?></strong></td> 
                              </tr>
                              <tr> 
                                <td><strong>Estimate Delivery</strong></td>
                                <td><strong><?php 					
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
									?></strong></td> 
                              </tr>
                        </table>
                    </div>
                    <div class="col-md-3 tick-img"><img src="<?php echo $frontend_theme_url;?>/images/success.png"/></div>
                </div>
        
            </div>
            


          
        </div>
    </div>

    <?php  
$this->load->view('frontend/common/footer');
?>