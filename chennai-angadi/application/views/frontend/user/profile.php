<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/user/common/product-list-header');
?>
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">Profile</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->

		<div class="shop-main-area mb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">						 
							<div class="toolbar mb-20">
								<div class="shop-tab"> 
									<div class="list-page">
										<p><strong>Profile Edit</strong></p>
									</div>
								</div>
								<div class="toolbar-sorter">
									 <a href="<?php echo $base_url;?>order-history" class="btn btn-success">Order History</a>
								</div>
							</div>
							<div class="mb-30">
								<div class="cart-discount-code-area" style="background:#fff">
                                    <div class="row">                        
										<div class="col-md-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10">                        
											<form action="javascript:void(0);" method="post" id="profile_form">
												<div class="form-group">
													<label for="name">Name</label>
													 <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control" required value="<?php echo $profile->name;?>">
												 </div>
												<div class="form-group">
													<label for="email">Eamil</label>
													 <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control" required value="<?php echo $profile->email;?>">
												 </div>
												 <div class="form-group">
													<label for="phone">Phone</label>
													 <input type="text" placeholder="Enter Phone" id="phone" name="phone" class="form-control" required value="<?php echo $profile->phone;?>">
												 </div>
												 
												 <div class="form-group">
													<label for="address">Address</label>
													 <textarea class="form-control" placeholder="Address" id="address" name="address"><?php echo $profile->address;?></textarea>
												 </div>
												 <div class="form-group">
													<label for="landmark">LandMark</label>
													 <input type="text" placeholder="Enter LandMark" id="landmark"  name="landmark" class="form-control" required value="<?php echo $profile->landmark;?>">
												 </div> 
												 <div class="form-group">
													<label for="state">State</label>
													 <input type="text" placeholder="Enter State" id="state" name="state" class="form-control" required value="<?php echo $profile->state;?>">
												 </div>
												 <div class="form-group">
													<label for="city">City</label>
													<input type="text" placeholder="Enter City" id="city" name="city" class="form-control" required value="<?php echo $profile->city;?>" >
												 </div>
												 <div class="form-group">
													<label for="pincode">Pincode</label>
													<input type="text" placeholder="Enter Pincode" id="pincode" name="pincode" class="form-control" required value="<?php echo $profile->pincode;?>">
												 </div>
												 <button type="submit" class="btn btn-danger btn-md">Save</button>                                                     
											 </form>                                          
                                        </div>
                                        </div>
                                    </div>									
							</div>					
					</div>	
				</div>
			</div>
		</div>
		<?php  
$this->load->view('frontend/user/common/footer');
?>