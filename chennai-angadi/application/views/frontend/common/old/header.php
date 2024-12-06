<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');  ?>
 			<header>
			<!-- header-top-area-start -->
			<div class="row" style="background:red; color:white; text-align:center; padding:10px; font-weight:bold; margin:0;">
				<div class="container">
					
Dear Customers! We Delivery across India, International Please Call +91 9094676665 and Confirm It Before Place Your Orders
				</div>
			</div>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
							<div class="header-top-left">
								<p>Welcome to chennaiangadi.com</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="header-link text-right">
								<ul> 	
									
										<li class="hidden-xs"><a href=""><i class="fa fa-mobile"></i> 90946 76665</a></li>
										<li class="hidden-xs"><a href=""><i class="fa fa-envelope"></i> care@chennaiangadi.com</a></li>
									<?php if($this->session->userdata('name')) { ?> 
										<li><a href="#"> <?php  echo $this->session->userdata('name');?> <i class="fa fa-angle-down"> </i></a>
											<div class="dollar-submenu">
												<ul>
													<li><a href="<?php echo $this->config->item('base_url');?>profile">My Account</a></li> 
													<li><a href="<?php echo $this->config->item('base_url');?>order-history">Order History</a></li> 
													<li><a href="<?php echo $this->config->item('base_url');?>user/logout"> Logout</a></li>
												</ul>
											</div>
										</li>
									<?php } else {?>										
										<li><a href="javascript:voic(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user-plus"></i> Sign Up</a></li>  
										<li><a href="javascript:voic(0);" data-toggle="modal" data-target="#myModal2" class="no-border"><i class="fa fa-user"></i> Sign In</a></li> 
									<?php } ?>	 								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-min-area-start -->
			<div class="header-min-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- logo-area-start -->
							<div class="logo-area">
								<a href="<?php echo $base_url;?>"><img src="<?php echo $frontend_theme_url;?>img/logo/chennaiangadi-logo.svg" alt="Chennai Angadi" title="Chennai Angadi" /></a>
							</div>
							<!-- logo-area-end -->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 
								<div class="header-search">
									<form  method="post" action="<?php echo $this->config->item('base_url');?>search">
										<input type="text" id="search"  data-searchid="" name="search" value="<?php if(isset($searchquery)) echo $searchquery;?>" class="search-field searchid" placeholder="Search for products . . ."  placeholder="Search for item..."/>
										<a href="javascript:void(0);"  class="search-button" ><i class="fa fa-search"></i></a>
									</form> 
								</div> 
							<div class="box-haeder hidden-xs">
								<div class="icon">
									<img src="<?php echo $frontend_theme_url;?>img/logo/free-delivery.svg" alt="Free Delivery" title="Free Delivery" class="free-delivery"/>									
								</div>
								<div class="text">
									<h2>Free Delivery</h2>
									<p>On order above  <i class="fa fa-inr" aria-hidden="true"></i> 500</p>
								</div>
							</div>
							<!--<div class="shopping-area">
								<ul>
									<li class="number"><a href="<?php echo $base_url;?>cart/"><i class="fa fa-shopping-basket"></i>My Cart</a>
										<span><?php if(count($this->cart->contents())<10&&count($this->cart->			contents())!=0){
													echo "0".count($this->cart->contents());
												}else{
													echo count($this->cart->contents());
												}								
										?></span>
									</li> 
								</ul>
							</div>-->
						</div>
					</div>
				</div>
			</div>
			<!-- header-min-area-start -->
			<!-- mobile-menu-area-start -->
			<div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">                            	
								<nav id="mobile-menu-active">
									<ul id="nav">   
                                    <li>
                                        <?php if($this->session->userdata('name')) { ?> 
										<li><a href="#"> <?php  echo $this->session->userdata('name');?></a>
                                            <ul>
                                                <li><a href="<?php echo $this->config->item('base_url');?>profile"><img src="<?php echo $frontend_theme_url;?>img/mobile-img/my-account.svg" alt="My Orders" title="My Orders" /> My Account</a></li> 
                                                <li><a href="<?php echo $this->config->item('base_url');?>order-history"><img src="<?php echo $frontend_theme_url;?>img/mobile-img/order-history.svg" alt="Order History" title="Order History" /> Order History</a></li> 
                                                <li><a href="<?php echo $this->config->item('base_url');?>user/logout"><img src="<?php echo $frontend_theme_url;?>img/mobile-img/logout.svg" alt="Logout" title="Logout" /> Logout</a></li>
                                            </ul>
										</li>
									<?php } else {?>										
										<li><a href="javascript:voic(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user-plus"></i> Sign Up | Login</a></li>  										
									<?php } ?>	 
                                                                            
                                    </li>                                                     
									<li><a href="<?php echo $base_url;?>">Home</a></li>							
									<!--<li><a href="<?php echo $base_url;?>newarrials">New Arrials</a></li>-->
									<li><a href="<?php echo $base_url;?>offers">Offers</a></li>
									<!--<li><a href="<?php echo $base_url;?>products">Products</a></li>-->
									<li><a href="javascript:void();">Category</a>
										<ul>
											<?php 
												if(!empty($category)) { 
												foreach($category as $category_info) {
											?>
											
												<li><a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>"><?php echo $category_info->category_title;?></a></li> 
											
											<?php } }?>
										</ul>
									</li>
									<!--<li><a href="<?php echo $base_url;?>aboutus">About us</a></li> 
									<li><a href="<?php echo $base_url;?>contactus">Contact Us</a></li>-->									
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
			<!-- header-bottom-area-start -->
			<div class="header-bottom-area" id="sticky-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="Category-area">
								<h3>Category<i class="fa fa-bars"></i></h3>
								<div class="category-menu">
									<nav>
										<ul>
											<?php 
												if(!empty($category)) { 
												foreach($category as $category_info) {
											?>
											<li class="angle"><a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>"><?php echo $category_info->category_title;?></a>
												<div class="category-submenu category-submenu-2">													
													<?php foreach($subcategory as $subcategory_info) {
														if($category_info->id==$subcategory_info->main_category){?>
													<span> 
														<a href="<?php echo $base_url;?>pl/<?php echo str_replace('&','',str_replace(' ', '-',strtolower($subcategory_info->category_title)));?>/<?php echo $subcategory_info->id;?>"><?php echo $subcategory_info->category_title;?></a>
													</span> 
													<?php } } ?>	
												</div> 
											</li>
											<?php } }?> 
											<!--<li id="side-hide"><a href="shop.html">Coffee  Tea</a></li>
											<li id="side-show"><a href="#"><i class="fa fa-plus-circle"></i>More Categories</a></li>-->
										</ul>
									</nav>	
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8 hidden-xs">
							<div class="main-menu-area hidden-xs">
								<ul>									
									<li><a href="<?php echo $base_url;?>">Home</a></li>							
									<!--<li><a href="<?php echo $base_url;?>newarrials">New Arrials</a></li>-->
									<li><a href="<?php echo $base_url;?>offers">Offers</a></li>									
									<!--<li><a href="<?php echo $base_url;?>aboutus">About us</a></li> 
									<li><a href="<?php echo $base_url;?>contactus">Contact Us</a></li>-->
									<li class="number pull-right" data-spy="affix" data-offset-top="200"> <a href="<?php echo $base_url;?>cart/"><i class="fa fa-shopping-basket"></i> My Cart<span><?php if(count($this->cart->contents())<10&&count($this->cart->			contents())!=0){
													echo "0".count($this->cart->contents());
												}else{
													echo count($this->cart->contents());
												}								
										?></span></a></li> 
								</ul>
							</div>								
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area-end -->
			<!---->
			
		</header>
        <!-- header-area-end -->
		
		<section class="footer-mob-menu">
			<ul class="footer-sticky-menu">
				<li class="mob-menu">
					<a href="<?php echo $base_url;?>">
                    <img src="<?php echo $frontend_theme_url;?>img/mobile-img/home.svg" alt="Chennai Angadi" title="Chennai Angadi"/><br/>	
					Home
					</a>
				</li>
				<li class="mob-menu">
					<a href="<?php echo $base_url;?>products">
                    <img src="<?php echo $frontend_theme_url;?>img/mobile-img/product.svg" alt="Products" title="Products"/><br/>	
					Products</a>
				</li>              
				<li class="mob-menu">
					<a href="<?php echo $base_url;?>cart">
                    <img src="<?php echo $frontend_theme_url;?>img/mobile-img/cart.svg" alt="Add Cart" title="Add Cart"/><br/>					
					Cart <span class="cart-mob"><?php if(count($this->cart->contents())<10&&count($this->cart->			contents())!=0){
													echo "0".count($this->cart->contents());
												}else{
													echo count($this->cart->contents());
												}								
										?></span></a>
				</li>
			</ul>
		</section>