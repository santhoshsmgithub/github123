<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
		
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">New Arrivals</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- shop-main-area-start -->
		<div class="shop-main-area mb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="left-title-2">
							<h3>New Arrivals</h3>
						</div> 
							<div class="products-grid mb-30">
								<?php 
									$l=0;
									if(!empty($product)) { 
									foreach($product as $product_info) {
										$l++;												
								?>
									<!-- single-product-start -->
									<div class="single-product border-left"> 
										<div class="product-img">
											<a href="<?php echo $base_url;?>welcome/productdetailed/<?php echo $product_info->product_id;?>">
													<img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="img" /></a>
										</div>
										<div class="product-text text-center">
											<h3><a href="<?php echo $base_url;?>welcome/productdetailed/<?php echo $product_info->product_id;?>"><?php echo $product_info->product_name;?></a></h3>
											<select class="sorter-options select_weight" id="get_product_code-<?php echo $product_info->product_id; ?>"> 
													<?php 
														$product_name=$product_info->product_name;
														$this->db->where('product_name',$product_name);
														$result=$this->db->get('product')->result();
														if($result)
														{
														 foreach($result as $res)
														{	
													?>
													<option data-weight="<?php echo $res->prod_weight;?>" data-card="<?php echo $res->product_id;?>" data-value="<?php echo $res->product_amount;?>" value="<?php echo $res->prod_weight;?>" data-pid="<?php echo $product_info->product_id; ?>"><?php echo $res->prod_weight;?> -  ₹ <?php echo $res->product_amount;?></option>
														<?php } } ?>
											</select><br>
											<div class="price">
												<ul>
														<li><span class="new-price price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount;?> </span></li>
												</ul>											
											</div> 
										 <div class="link-button">
												<ul>
													<li class="col-md-8 col-xs-8"> 
														<div class="input-group">
															<div class="input-group-addon">Qty</div>
															<input type="text" class="form-control qty-<?php echo $product_info->product_id;?> change-qty" id="qty-<?php echo $product_info->product_id;?>" data-qty="<?php echo $product_info->product_id;?>" value="1" data-changeid="<?php echo $product_info->product_id;?>" placeholder="Qty" maxlength="2"> 
														</div> 
													</li>
													<li><a href="javascript:void(0);" class="add-to-card cardid-<?php echo $product_info->product_id; ?> atc" data-cardid="<?php echo $product_info->product_id;?>" data-qty="1"> <i class="fa fa-cart-plus"></i></a></li>
												</ul>
											</div> 
										</div>
									</div>
									<!-- single-product-end -->								
								<?php } } ?> 									
							</div>					
					</div>	
				</div>
			</div>
		</div>
		<!-- shop-main-area-end -->

		<?php  
$this->load->view('frontend/common/footer');
?>