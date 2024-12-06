<?php 	$frontend_theme_url=$this->config->item('frontend_theme_url');	
		$base_url=$this->config->item('base_url');
		// $pbase_url=$this->config->item('pbase_url');
		// $shipping=$shipping[0];
?>
<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
		
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="entry-header-area pt-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="entry-header-title">
							<h2>Checkout</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="coupon-area pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull-complete">
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/user-icon.svg" alt="Login" title="Login" /> CHECKOUT AS A <span id="showlogin">GUEST OR REGISTER</span></h3> 
						</div>
					</div>
				</div>							
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull-complete">							
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/billing-icon.svg" alt="Billing Information" title="Billing Information" /> Billing Information</h3>			
						</div>
					</div>
				</div> 					
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull-complete">							
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/checking-icon.svg" alt="Order Review" title="Order Review" /> Order Review</h3>			
						</div>
					</div>
				</div>        <!-- Start checkout content -->
                <div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull-complete">
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/payment-icon.svg" alt="Payment Method" title="Payment Method" /> Payment Mode</h3> 
							<div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse in" id="paymentInformation" aria-expanded="true">
								<div class="content-info">
									<div class="checkout-option">							
										<div class="method-input-box">
											<div class="col-md-12">
												<label class="radio">
													<input type="radio" name="payment" class="payment_mode" value="1"> <img src="<?php echo $frontend_theme_url;?>img/svg-icons/cash-on-delivery.svg" alt="Cash On Delivery" title="Cash On Delivery" /> Cash On Delivery (Chennai Only)
												</label> 											
												<label class="radio">
													<input type="radio" name="payment" class="payment_mode" value="2"> <img src="<?php echo $frontend_theme_url;?>img/svg-icons/pay-online.svg" alt="Onine Payment title="Online Payment" /> Online Payment
												</label>
											</div>                
										</div>                                                       
									</div><br><br>
													
									<!--payment integration start -->
									    <div class="payment-pay text-center"  style="display:none;">	 
											<a href="<?php echo $this->config->item('base_url');?>pay" class="btn btn-success btn-lg btn pull-right"> Proceed to Pay </a>
										</div>
												<div class="payment-cod text-center"  style="display:none;">	
													<div class="fk-rightframe">
														<form role="form" method="POST" action="<?php echo $this->config->item('base_url');?>caseondelivery/<?php echo $shipping->id;?>" >												
 															<input type="hidden" name="id" value="<?php echo $shipping->id;?>" />
															<!--<input type="hidden" name="phone" value="<?php echo $shipping->billing_phone;?>" />
															<input type="hidden" name="billing-name" value="<?php echo $shipping->billing_name;?>" />-->
															<button type="submit" class="btn btn-success btn-lg" id="fk-pro-chkout">Place Order</button>
														</form>
													</div>										
												</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
			</div>
		</div>
		
		<?php  
$this->load->view('frontend/common/footer');
?>