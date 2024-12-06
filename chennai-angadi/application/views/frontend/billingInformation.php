<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
			<style>
			.error{
				color:red!important;
			}
		</style>
		<?php
		if(isset($users))
		{
			$users=$users[0];
		}
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
				<!-- coupon-area-area-start -->
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
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/billing-icon.svg" alt="Billing Information" title="Billing Information" /> BILLING INFORMATION</h3>
							<form action="#" id="ae-shipstep-form" class="ae-shipstep-form" name="ae-shipstep-form" method="POST">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkbox-form">						
										<h2>Billing Details</h2>
										<div class="row"> 
											<div class="col-lg-12 ">
												<div class="checkout-form-list">
													<input type="hidden" id="guestemail" name="email"  value="<?php echo $this->session->userdata('guestemail');?>">
 														<?php 
															if(isset($users)){ 
																$name='value="'.$users->name.'"';
															}else{
																$name="";
															}
														?>
													<label>Name: <span class="required">*</span></label>										
													<input type="text" class="form-control" id="cusname" <?php echo $name ?> name="billing_name" placeholder="Enter your name" required>
												</div>
											</div>  
											
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Mobile Number  <span class="required">*</span></label>
													<?php if(isset($users)){ 
															$phone='value="'.$users->phone.'"';
														}else{
															$phone="";
														}
													?>
													<input type="text" id="cusphone" name="billing_phone" type="text" class="form-control"  placeholder="Enter your phone number" <?php echo $phone; ?>>
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Address <span class="required">*</span></label>
													<?php 
															if(isset($users)){ 
																$address=$users->address;
															}else{
																$address="";
															}
													?>
													<textarea type="text"  class="form-control" id="cusaddress" name="billing_address" placeholder="Enter your address"><?php echo $address; ?></textarea>
												</div>
											</div>											  
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>City:<span class="required">*</span></label>
													<?php if(isset($users)){ 
															$city='value="'.$users->city.'"';
														 }else{
															$city="";
														}
													?>
													<input type="text" id="cuscity" name="billing_city" <?php echo $city;?> placeholder="Town / City" >
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>State <span class="required">*</span></label>
														<?php 
																if(isset($users)){ 
																	$state='value="'.$users->state.'"';
																}else{
																	$state="";
																}
														?>													
													<input type="text" id="cusstate" name="billing_state"  placeholder="State" <?php echo $state;?>>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Postcode / Zip <span class="required">*</span></label>	
													<?php 
																if(isset($users)){ 
																	$pincode='value="'.$users->pincode.'"';
																}else{
																	$pincode="";
																}
													?>	
													<input type="text" id="cuspincode" name="billing_pincode" type="text" class="form-control" <?php echo $pincode;?> placeholder="Postcode / Zip">
												</div>
											</div> 
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>LandMark <span class="required">*</span></label>
													<?php if(isset($users)){ 
																$landmark='value="'.$users->landmark.'"';
															}else{
																$landmark="";
															}
													?>
													<input type="text" id="cuslandmark" name="billing_landmark" type="text" class="form-control" <?php echo $landmark; ?> placeholder="Enter your LandMark" >
												</div>
											</div>							
										</div>
										<div class="different-address">
											<div class="checkbox">
												<label><input type="checkbox" id="shippingtoo">Check this box if Billing Address and Shipping Address are the same. </label>
											</div>
										</div>													
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkbox-form">						
										<h2>Delivery Details</h2>
										<div class="row"> 
											<div class="col-lg-12 ">
												<div class="checkout-form-list">													 
													<label>Name: <span class="required">*</span></label>										
													<input type="text" id="shpname" name="shipping_name" placeholder="Enter your name" required>
												</div>
											</div>  											
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Mobile Number  <span class="required">*</span></label>													 
													<input type="text" id="shpphone" name="shipping_phone" type="text" class="form-control"  placeholder="Enter your phone number">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Address <span class="required">*</span></label> 
													<textarea type="text"  class="form-control" id="shpaddress" name="shipping_address" placeholder="Enter your address" placeholder="enter your address"><?php echo $address; ?></textarea>
												</div>
											</div>  
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>City:<span class="required">*</span></label>													 
													<input type="text" id="shpcity" name="shipping_city"  placeholder="Town / City">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>State <span class="required">*</span></label>														 													
													<input type="text" id="shpstate" name="shipping_state" placeholder="Enter your state">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Postcode / Zip <span class="required">*</span></label>													 
													<input type="text" id="shppincode" name="shipping_pincode"  type="text" class="form-control" placeholder="Postcode / Zip">
												</div>
											</div> 	
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Landmark <span class="required">*</span></label>													 
													<input type="text" id="shplandmark" name="shipping_landmark" type="text" placeholder="Enter your landmark">
												</div>
											</div>	
											<div class="order-button-payment">
												<input type="submit"  class="btn aecustom-btn" id="ae-pro-chkout" value="Place order">
											</div><br>
										</div> 												
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>				
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull">							
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/checking-icon.svg" alt="Order Review" title="Order Review" /> ORDER REVIEW</h3>			
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull">							
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/payment-icon.svg" alt="Payment Method" title="Payment Method" /> PAYMENT MODE</h3>			
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- coupon-area-area-end -->
		<?php  
$this->load->view('frontend/common/footer');
?>