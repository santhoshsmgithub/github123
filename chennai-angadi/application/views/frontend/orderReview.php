<?php 

	$backend_theme_url=$this->config->item('backend_theme_url');

	$frontend_theme_url=$this->config->item('frontend_theme_url'); 

	$base_url=$this->config->item('base_url');  

	// $shipping=$shipping[0];

?>

<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>

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

							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/billing-icon.svg" alt="Billing Information" title="Billing Information" /> Billing Information</h3>			

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-lg-12">

						<div class="coupon-accordion accordion-dull-complete order-review">

							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/checking-icon.svg" alt="Order Review" title="Order Review" /> Order Review</h3>			 

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

									<div class="your-order"> 

										<h2 class="cart-title">Order of the Address</h2>

										<div class="your-order-table table-responsive billing-address">

											<table cellpadding="0" cellspacing="0">

												<thead>

													<tr>

														<th class="product-name"><strong>Billing Address</strong></th> 

													</tr>							

												</thead>

												<tbody>

													<tr class="cart_item">

														<td  class="product-name">

															<?php if($shipping->billing_address!=" ") echo $shipping->billing_address;?>

														</td>

													</tr> 

													<tr class="cart_item">

														<td  class="product-name">

															<?php  if($shipping->billing_city!="0") echo $shipping->billing_city;?>, <?php if($shipping->billing_state!=" ") echo $shipping->billing_state;?> - <?php if($shipping->billing_pincode!=" ") echo $shipping->billing_pincode;?>,

														</td>

													</tr> 

												</tbody> 

											</table>

										</div> 

<br><Br>										

										<div class="your-order-table table-responsive shipping-address">

											<table cellpadding="0" cellspacing="0">

												<thead>

													<tr>

														<th class="product-name"><strong>Shipping Address</strong></th> 

													</tr>							

												</thead>

												<tbody>

													<tr class="cart_item">

														<td  class="product-name">

															<?php if($shipping->shipping_address!=""){echo $shipping->shipping_address.",";}?>

														</td>

													</tr>

													<tr class="cart_item">

														<td  class="product-name">

															<?php if($shipping->shipping_city!=" ") echo $shipping->shipping_city.",";?> ,

															<?php if($shipping->shipping_state!="") echo $shipping->shipping_state.".";?> - 

															<?php if($shipping->shipping_pincode!="") echo $shipping->shipping_pincode.".";?>

														</td>

													</tr> 												

													<tr class="cart_item">

														<td  class="product-name">

															Landmark : <?php if($shipping->shipping_landmark!=""){echo $shipping->shipping_landmark;}?>.

														</td>

													</tr>

												</tbody> 

											</table>

										</div> 

									</div>

								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

									<div class="your-order">

										<h2>Your order</h2>

										<div class="your-order-table table-responsive">

											<table cellpadding="0" cellspacing="0">

												<thead>

													<tr>

														<th>Product name</th>

														<th>Unit Price</th> 

														<th>Subtotal</th>

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

													<tr class="cart_item">

														<td class="product-name">

															<?php 

																$product_name=$items['category'];

																$this->db->where('id',$product_name);

																$result=$this->db->get('category')->result();

																if($result)

																{

																 foreach($result as $res)

																{	 

																echo $res->category_title;

																}

																}

															?>  - <?php

																$product_name = $items['id'];

																	$this->db->where('product_id',$product_name);

																	$result=$this->db->get('product')->result();

																	if($result)

																	{

																	 foreach($result as $res)

																	{	 

																	echo $res->prod_weight;

																	}

																	}?> <strong class="product-quantity"> × <?php echo $items['qty']; ?></strong>

														</td>

														<td class="product-total">

															<span class="amount"><i class="fa fa-inr"></i> <?php echo $items['price']; ?></span>

														</td>

														<td class="product-total">

															<span class="amount"><i class="fa fa-inr"></i> <?php echo $this->cart->format_number($items['subtotal']); ?></span>

														</td>

													</tr>

													<?php  } }else {?>

																			<h4 class="leftcontainer-label"> No Products found </h4>

													<?php } ?> 

												</tbody>

												<tfoot>

													<tr class="cart-subtotal">

														<th colspan="2"><strong>Subtotal</strong></th>

														<td><span class="amount"><i class="fa fa-inr"></i> <?php 

																	$subtotal=$this->cart->total();

																	if($this->cart->format_number($subtotal)==""){ 

																		echo 0; 

																	} else{ 

																		echo $this->cart->format_number($subtotal);

																	}

																				?></span></td>

													</tr>

													<?php 
													$disc_amt=0;
													if($shipping->dis_amount >0){ ?>

													<tr class="shipping">

														<th colspan="2">Discount(<?php echo $shipping->dis_amount;?> %):</th>

														<td><span class="amount"><i class="fa fa-inr"></i> 

															<?php 
															// $disc_amt=0;

															$subtotal=$this->cart->total();	

															$disc=$subtotal * $shipping->dis_amount;	

															echo $disc_amt=$disc/100;

															?></span>

														</td>

													</tr>

													<?php } ?>

													<tr class="shipping">

														<th colspan="2"><strong>Delivery Charges:</strong></th>

														<td><span class="amount">

															<?php $delivery_amt=0;

																if($this->cart->format_number($this->cart->total())==""){ 

																echo 0; 

																} else{ 

																if($shipping->delivery_amt > 0){

																	echo '<i class="fa fa-inr"></i>  ' . $shipping->delivery_amt ;

																		$delivery_amt=$shipping->delivery_amt;

																	}else {

																		echo "Free";

																		$delivery_amt=0;

																	}

																}

															?></span>

														</td>

													</tr>

													<!--<tr class="shipping">

														<th colspan="2">GST(5 %)</th>

														<td><span class="amount"><i class="fa fa-inr"></i> 

															<?php 

																$gst_cal=$subtotal*5;

																$gst_cal2=$gst_cal/100;

																echo $gst=$this->cart->format_number($gst_cal2);

															?></span>

														</td>

													</tr>-->

													<tr class="order-total">

														<th colspan="2"><strong>Grand Total :</strong></th>

														<td><strong> <span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>

															<?php  

															echo $this->cart->format_number($subtotal+$delivery_amt-$disc_amt); 

														?>

														</span></strong>

														</td>

													</tr>								

												</tfoot>

											</table>

										</div>									 

								</div>

							</div> 

							<a href="<?php echo $this->config->item('base_url');?>payment_mode" class="btn btn-success pull-right mt-20 mb-20"> Continue </a>									

						</div>

					</div>

				</div>			 

				<div class="row">

					<div class="col-lg-12">

						<div class="coupon-accordion accordion-dull">							

							<h3><img src="<?php echo $frontend_theme_url;?>img/svg-icons/payment-icon.svg" alt="Payment Method" title="Payment Method" /> Payment Mode</h3>			

						</div>

					</div>

				</div>

			</div>

		</div>

		<!-- coupon-area-area-end -->

		<?php  
$this->load->view('frontend/common/footer');
?>