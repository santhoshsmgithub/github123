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
				<!-- coupon-area-area-start -->
		<div class="coupon-area pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull-complete">
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/user-icon.svg" alt="Login" title="Login" /> CHECKOUT AS A <span id="showlogin">GUEST OR REGISTER</span></h3>
							<?php if($this->session->userdata('id'))
							{ ?>
							<div class="col-md-6">
								<div class="coupon-content">
									<div class="coupon-info">
										<form action="#">
											<p class="lost-password">
												<a href="#">You Already login.</a>
											</p>
											<p class="form-row"> 
												<a href="<?php echo $base_url;?>billingInformation">Continue</a> 
											</p>											
										</form>
									</div>
								</div> 
							</div>
							<?php } else { ?>								
								<div class="col-md-6">									
									<div class="coupon-content">
										<div class="coupon-info">
											<div class="checkout-reg">
												<div class="checkReg commonChack"> 
													<div class="radio">
														<label><input type="radio" class="login_convenience" name="login_user" value="1"> Checkout as Guest </label>
													</div> 
													<div class="radio">
														<label><input type="radio" class="login_convenience" name="login_user" value="2"> Already Login </label>
													</div> 
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php }  ?>							
							<div class="col-md-6">
								<div class="checkout-guest" style="display:none">
									<div class="coupon-content">
										<div class="coupon-info">								 
											<form  method="POST" action="<?php echo $this->config->item('base_url');?>cart/billingInformation" novalidate="novalidate">
											<p class="form-row-first">
												<label>Email Address <span class="required">*</span></label>
												<input type="email" name="gemail" id="guestmail" required>
											</p>
											<p class="form-row">					
													<input type="submit" value="Continue"> 
											</p> <br><br>
							            </div>
							        </div>
							    </div>
								<div class="checkout-login" style="display:none">									
									<div class="coupon-content">
										<div class="coupon-info">
											<form action="#" method="post" id="clogin-form" name="login-form">
												<p class="form-row-first">
													<label>Email <span class="required">*</span></label>
													<input type="text" id="cuseremail">
												</p>
												<p class="form-row-last">
													<label>Password  <span class="required">*</span></label>
													<input type="password" id="cuserpassword">
												</p>
												<p class="form-row">					
													<input type="submit" value="Login" id="clogin"> 
												</p>
												<p class="lost-password">
													<a href="#">Lost your password?</a>
												</p>
											</form>
										</div>
									</div>
								</div> 
							</div> 	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion accordion-dull">
							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/billing-icon.svg" alt="Billing Information" title="Billing Information" /> BILLING INFORMATION</h3>
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
 