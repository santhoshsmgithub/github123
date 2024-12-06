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




    
    
    <!-- Page Contain -->
    <div class="page-contain">
        

        <!-- Main content -->
        <div id="main-content" class="main-content">          

            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo $base_url;?>checkout" class="permal-link">Checkout</a></li>                       
                        <li class="nav-item"><span class="current-page">Review</span></li>
                    </ul>
                </nav>
            </div>


            <div class="page-contain single-product">
                <div class="container">        
                    <!-- Main content -->
                    <div id="main-content" class="main-content">
                        <div class="shopping-cart-container">
                            <div class="row">            
                                <!--checkout progress box-->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3 class="box-title">Order Review</h3>
                                    <div class="review-wrapper">
                                      <h4><Strong>Billing Address:</Strong></h4>
                                      <p><Strong><?php if($shipping->billing_name!=" ") echo $shipping->billing_name;?></Strong></p>
                                      <p><?php if($shipping->billing_address!=" ") echo $shipping->billing_address;?>, <?php  if($shipping->billing_city!="0") echo $shipping->billing_city;?>, <?php if($shipping->billing_state!=" ") echo $shipping->billing_state;?> - <?php if($shipping->billing_pincode!=" ") echo $shipping->billing_pincode;?><?php if($shipping->billing_landmark!=" ") echo ",<br>Near: " . $shipping->billing_landmark;?></p>
                                      <p>Email: <?php echo $shipping->email; ?></p>
                                      <p>Mobile: <?php echo $shipping->billing_phone; ?></p>
                                    </div>
                                    <div class="review-wrapper">
                                        <h4><Strong>Shipping Address:</Strong></h4>
                                        <?php if (!empty($shipping->shipping_name)) { ?>
                                        <p><Strong><?php if($shipping->shipping_name!=" ") echo $shipping->shipping_name;?></Strong></p>
                                        <p><?php if($shipping->shipping_address!=" ") echo $shipping->shipping_address;?>, <?php  if($shipping->shipping_city!="0") echo $shipping->shipping_city;?>, <?php if($shipping->shipping_state!=" ") echo $shipping->shipping_state;?> - <?php if($shipping->shipping_pincode!=" ") echo $shipping->shipping_pincode;?><?php if($shipping->shipping_landmark!=" ") echo ",<br>Near: " . $shipping->shipping_landmark;?></p>
                                        <p>Email: <?php echo $shipping->email; ?></p>
                                        <p>Mobile: <?php echo $shipping->shipping_phone; ?></p>
                                        <?php } else { ?>
                                        <p><Strong><?php if($shipping->billing_name!=" ") echo $shipping->billing_name;?></Strong></p>
                                        <p><?php if($shipping->billing_address!=" ") echo $shipping->billing_address;?>, <?php  if($shipping->billing_city!="0") echo $shipping->billing_city;?>, <?php if($shipping->billing_state!=" ") echo $shipping->billing_state;?> - <?php if($shipping->billing_pincode!=" ") echo $shipping->billing_pincode;?><?php if($shipping->billing_landmark!=" ") echo ",<br>Near: " . $shipping->billing_landmark;?></p>
                                        <p>Email: <?php echo $shipping->email; ?></p>
                                        <p>Mobile: <?php echo $shipping->billing_phone; ?></p>
                                        <?php } ?>
                                      </div>
                                </div>

                                <?php 
$carttotlitems = count($this->cart->contents());
?>
                                <!--Order Summary-->
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                                    <div class="order-summary sm-margin-bottom-80px">
                                        <div class="title-block">
                                            <h3 class="title">Order Summary</h3>
                                            <a href="<?php echo $base_url."cart" ?>" class="link-forward">Edit cart</a>
                                        </div>
                                        <?php $subtot = 0; ?>
                                        <div class="cart-list-box short-type">
                                            <span class="number"><?php echo $carttotlitems; ?> items</span>
                                            <ul class="cart-list">
                                            <?php
											if(($this->cart->contents())) { 
												$l=0;
												$base_url=$this->config->item('base_url'); 
												foreach($this->cart->contents() as $items) {
                                                    $subtot += $items['qty'] * $items['price'];
												$l++;
										?>
                                                <li class="cart-elem">
                                                    <div class="cart-item">
                                                    <?php 
													if ($this->cart->has_options($items['rowid']) == TRUE){ 
												?>
												<?php 
													foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value){ 
												?>
												<?php if($option_name=="product_image"){ 
												?>
                                                        <div class="product-thumb">
                                                            <a class="prd-thumb" href="#">
                                                                <figure><img src="<?php echo $base_url."product/".$option_value;?>" width="113" height="113" alt="shop-cart" ></figure>
                                                            </a>
                                                        </div>
                                                        <?php } }  } ?>
                                                        <div class="info">
                                                            <span class="txt-quantity"><?php echo $items['qty']; ?>X</span>
                                                            <a href="#" class="pr-name"><?php echo $items['name']; ?></a>
                                                        </div>
                                                        <div class="price price-contain">                                                            
                                                            <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($items['subtotal']); ?></span></ins>                                                           
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  } }else {?>

<h4 class="leftcontainer-label"> No Products found </h4>

<?php } ?>
                                                
                                            </ul>
                                            <ul class="subtotal">
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Subtotal</b>
                                                        <span class="stt-price"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($subtot); ?></span>
                                                    </div>
                                                </li>
                                                <?php if($this->session->userdata('c_no')){?>
                                               <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Discount Coupon</b>
                                                        <span class="stt-price">- <i class="fa fa-inr" aria-hidden="true"></i> <?php  $disc_amt=0;
															$subtotal=$this->cart->total();	
															$disc=$subtotal * $this->session->userdata('dis_amount');	
															echo $disc_amt=$disc/100;
														?></span>
                                                    </div>
                                                </li>
                                                <?php }else{   $disc_amt=0; }?>
                                                <?php 
                                                $subtotal=$this->cart->total();
                                                $delivery_amt=0;
																if($shipping->delivery_amt > 0){

																		$delivery_amt=$shipping->delivery_amt;

																	}else {

																		$delivery_amt=0;

																	}

															?>
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Shipping </b>
                                                        <span class="stt-price"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $delivery_amt; ?></span>
                                                    </div>
                                                </li>                                               
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">total:</b>
                                                        <span class="stt-price"><i class="fa fa-inr" aria-hidden="true"></i>
                                                        
                                                             <?php echo $this->cart->format_number($subtotal+$delivery_amt-$disc_amt);?></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url;?>pay"><button type="submit" name="btn-sbmt" class="btn pay col-md-12 col-xs-12">Pay <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($subtotal+$delivery_amt-$disc_amt);?></button></li></a>
                                            </ul>
                                        </div>
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