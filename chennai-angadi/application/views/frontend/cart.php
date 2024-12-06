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
								<li><a href="javascript" class="active">Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="entry-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="entry-header-title">
							<h2>Cart</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- cart-main-area-start -->
		<div class="cart-main-area pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="#">
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Unit Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if(($this->cart->contents())) { 
												$l=0;
												$base_url=$this->config->item('base_url'); 
												foreach($this->cart->contents() as $items) {
												$l++;
										?>
										<tr>
											<?php 
													if ($this->cart->has_options($items['rowid']) == TRUE){ 
												?>
												<?php 
													foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value){ 
												?>
												<?php if($option_name=="product_image"){ 
												?>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img alt=""  src="<?php echo $base_url."product/".$option_value;?>" height="50" width="50"></a>
                                                </td>
												<?php } }  } ?>											 
											<td class="product-name"><a href="#"><?php echo $items['name']; ?></a></td>
											<td class="product-price"><span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>
												<?php echo $items['price']; ?> - <?php
															$product_id = $items['id'];
																$this->db->where('product_id',$product_id);
																$result=$this->db->get('product')->result();
																if($result)
																{
																 foreach($result as $res)
																{	 
																echo $res->prod_weight;
																}
																} ?>
											</span></td>
											<td class="product-quantity">
												<input type="number" class="input-sz cardqty-<?php echo $l;?>" min="1"  value="<?php echo $items['qty']; ?>">
												<a href="<?php echo $base_url.'cart/updatecart/'.$items['rowid'] ?>/" class="updatecart" data-id="<?php echo $l; ?>" data-prd_id="<?php echo $product_id; ?>"  data-rowid="<?php echo $items['rowid'] ?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
											</td>
											<td class="product-subtotal"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $this->cart->format_number($items['subtotal']); ?></td>
											<td class="product-remove"><a href="<?php echo $base_url.'cart/deletecart/'.$items['rowid'] ?>"><i class="fa fa-times"></i></a></td>
										</tr>
											<?php  } }else {?>
											<tr>
												<td colspan="6"> No Products found </td>
											</tr>
											<?php } ?> 
									</tbody>
								</table>
							</div>
						</form>
					</div>
					<?php if(($this->cart->contents())) {  ?>
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
							<?php if($this->session->userdata('c_no')){?>
								<div class="coupon">
									<h3>Coupon</h3>
									<p>Applied Coupon No: <?php echo $this->session->userdata('c_no');?></p>  
								</div> 
							<?php }else{ ?>
								<div class="coupon">
									<h3>Coupon</h3>
									<p>Enter your coupon code if you have one.</p> 
										<input type="text" class="c_no" placeholder="Coupon code"> 
										<button class="btn btn-dark apply_coupon">Apply Coupon</button> 
								</div> 
							<?php } ?>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="cart_totals">
								<h2>Cart Total</h2><br>
								<table>
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td>
												<span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>
													<?php  $subtotal=$this->cart->total();
														if($this->cart->format_number($subtotal)==""){ 
															echo 0; 
														} else{ 
															echo $this->cart->format_number($subtotal);
														}
													?>
												</span>
											</td>
										</tr>
										<?php if($this->session->userdata('c_no')){?>
											<tr class="cart-subtotal">
												<th>Coupon Discount (<?php echo $this->session->userdata('dis_amount');?>%)</th>
												<td>
													<span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>
														<?php  $disc_amt=0;
															$subtotal=$this->cart->total();	
															$disc=$subtotal * $this->session->userdata('dis_amount');	
															echo $disc_amt=$disc/100;
														?>
													</span>
												</td>
											</tr>										
										<?php }else{   $disc_amt=0; }?> 
										<!--<tr class="shipping">
											<th>GST(5 %)</th>
											<td>
												<span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>
													<?php 
														$gst_cal=$subtotal*5;
														$gst_cal2=$gst_cal/100;
														echo $gst=$this->cart->format_number($gst_cal2);
													?>
												</span>
											</td>
										</tr>-->
																	
										<tr class="order-total">
											<th>Total</th>
											<td>
												<strong>
													<span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>
												<?php //echo $this->cart->format_number($subtotal+$gst+$delivery_amt);?>
												<?php $delivery_amt = 0; echo $this->cart->format_number($subtotal+$delivery_amt-$disc_amt);?>
													</span>
												</strong>
											</td>
										</tr>
									</tbody>
								</table>								
							</div>
						</div>
						<div class="wc-proceed-to-checkout">							
							<div class="col-md-6 col-sm-6 col-xs-6"><a href="<?php echo $base_url;?>" class="pull-left">Continue Shopping </a></div>
							<div class="col-md-6 col-sm-6 col-xs-6"><a href="<?php echo $base_url ;?>checkout/" class="pull-right">Checkout</a></div>							
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- cart-main-area-end -->
		<?php  
$this->load->view('frontend/common/footer');
?>