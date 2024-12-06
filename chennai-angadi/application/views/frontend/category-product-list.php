<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/product-list-header');
?>
		
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<?php 
									$product_name=$this->uri->segment(3);
									$this->db->where('id',$product_name);
									$result=$this->db->get('category')->result();
									if($result)
									{
										foreach($result as $res)
										{
											 $category_name = $res->category_title;
										} 
									}											
								?>
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
 								<li><a href="javascript" class="active"><?php echo $category_name;?></a></li>

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
							<h3><?php echo $category_name;?></h3>
						</div>
							<div class="toolbar mb-20">
								<div class="shop-tab"> 
									<div class="list-page">
										<!--<p><?php echo count($product);?> Items</p>-->
									</div>
								</div>
								<div class="toolbar-sorter">
									<form id="filter-form" name="filter-form" method="post" action="<?php echo $this->config->item('base_url');?>filterby">
										<span>Sort By</span>
										<select id="selectProductSort1" name="filterby"  class="sorter-options" data-role="sorter">									
											<option value="0">Filter products by</option>
											<option value="1" >Product Name A-Z</option>
											<option value="2">Product Name Z-A</option>
											<option value="3">Product Price low to high</option>
											<option value="4">Product Price high to low</option>
										</select>	
									</form>
								</div>
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
											<a href="<?php echo $base_url;?>pd/<?php echo str_replace(' ', '-',strtolower($product_info->product_name));?>/<?php echo $product_info->product_id;?>">
												<img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>"  /></a>
										</div>
										<div class="product-text text-center">
											<h3><a href="<?php echo $base_url;?>pd/<?php echo str_replace(' ', '-',strtolower($product_info->product_name));?>/<?php echo $product_info->product_id;?>"><?php echo $product_info->product_name;?></a></h3>
											<select class="sorter-options select_weight" id="get_product_code-<?php echo $product_info->product_id; ?>"> 
													<?php 
														$product_code=$product_info->product_code;
														$this->db->where('product_code',$product_code);
														$result=$this->db->get('product')->result();
														if($result)
														{
														 foreach($result as $res)
														{	
													?>
													<option data-weight="<?php echo $res->prod_weight;?>" data-card="<?php echo $res->product_id;?>" data-mrpvalue="<?php echo $res->prod_mrp_amt;?>" data-value="<?php echo $res->product_amount;?>" value="<?php echo $res->prod_weight;?>" data-pid="<?php echo $product_info->product_id; ?>"><?php echo $res->prod_weight;?> -  ₹ <?php echo $res->product_amount;?></option>
														<?php } } ?>
											</select><br>
											<div class="price">
												<ul>
													<li><span class="old-price mrp-price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt;?> </span></li>
													<li><span class="new-price price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount;?> </span></li>
												</ul>											
											</div>
											<div class="link-button">
												<ul class="row">
												    <?php if($product_info->prod_stock) { ?>
													<li class="col-md-6 col-xs-6"> 
														<div class="input-group">
															<div class="input-group-addon">Qty</div>
															<input type="text" class="form-control qty-<?php echo $product_info->product_id;?> change-qty" id="qty-<?php echo $product_info->product_id;?>" data-qty="<?php echo $product_info->product_id;?>" value="1" data-changeid="<?php echo $product_info->product_id;?>" placeholder="Qty" maxlength="2"> 
														</div> 
													</li>
													<li class="col-md-6 col-xs-6"><a href="javascript:void(0);" class="add-to-card cardid-<?php echo $product_info->product_id; ?> atc" data-cardid="<?php echo $product_info->product_id;?>" data-qty="1"> <i class="fa fa-cart-plus"></i> ADD</a></li>
												<?php }else{ ?>
												    <li class="col-md-12 col-xs-12"><button type='button' class="btn btn-md btn-dark disabled"> Sold out</button></li>
												<?php } ?>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-product-end -->	
									<?php if($l%4==0){ ?> </div><div class="products-grid mb-30"> <?php } ?>
									
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