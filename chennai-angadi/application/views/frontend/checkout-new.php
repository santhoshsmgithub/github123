<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');

// print_r($this->uri->segment('1'));exit;
// echo $this->session->userdata('id');exit;
$step = 1;
$loggedSessionId = $this->session->userdata('id');
if ($this->uri->segment('1') == "billingInformation") {
    $step = 2;
}
?>

<style>
    .error {
        color: red;
    }
</style>



    
    
    <!-- Page Contain -->
    <div class="page-contain">
        

        <!-- Main content -->
        <div id="main-content" class="main-content">          

            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>                       
                        <li class="nav-item"><span class="current-page">Checkout</span></li>
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
                                    <?php if ($step == 1 && empty($loggedSessionId)) { ?>
                                    <h3 class="box-title">Checkout</h3>
                                    <div class="checkout-progress-wrap">
                                        <div class="login-on-checkout">
                                            <form action="<?php echo $this->config->item('base_url');?>cart/billingInformation" name="frm-login" method="post">
                                                <p class="form-row">
                                                    <label for="input_email">Email Address</label>
                                                    <input type="email" name="gemail" id="input_email" value="" placeholder="Your email">
                                                    <button type="submit" name="btn-sbmt" class="btn">Continue As Guest</button>
                                                </p>                                     
                                                <p class="msg">Already have an account? <a href="#" class="link-forward btn_call_quickview" data-tab="register"><Strong>Sign in now</Strong></a></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-progress">
                                        <form action="#" name="frm-login" method="post">
                                            <p class="form-row">
                                                <label for="cuseremail" class="col-md-10 col-xs-12">Email Address:<span class="requite">*</span></label>
                                                <input type="text" id="cuseremail" name="name" value="" class="txt-input col-md-10 col-xs-12">
                                            </p>
                                            <p class="form-row">
                                                <label for="cuserpassword" class="col-md-10 col-xs-12">Password:<span class="requite">*</span></label>
                                                <input type="password" id="cuserpassword" name="email" value="" class="txt-input col-md-10 col-xs-12">
                                            </p>
                                            <p class="form-row wrap-btn">
                                                <button class="btn btn-submit btn-bold" id="clogin" type="button">Login</button>
                                                <a href="<?php echo $base_url;?>user/password-reset" class="link-to-help">Forgot your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                    <?php  } ?>
                                    <?php 
                                    $name = $phone = $address = $city = $ustate = $pincode = $landmark = "";
                                    if(isset($users)){ 
                                        $name=$users->name;
                                        $phone=$users->phone;
                                        $address=$users->address;
                                        $city=$users->city;
                                        $ustate=$users->state;
                                        $pincode=$users->pincode;
                                        $landmark=$users->landmark;
                                    }
                                    ?>
                                    <div class="address-section">
                                        <form name="ae-billing-form" id="ae-billing-form" method="post">
                                            <h3>Billing Address</h3>
                                            <label for="billing_name">Name*</label>
                                            <input type="text" name="billing_name" id="billing_name" value="<?php echo $name ?>" placeholder="Name">  
                                            <label for="billing_phone">Mobile*</label>
                                            <input type="text" name="billing_phone" id="billing_phone" value="<?php echo $phone ?>" placeholder="Mobile">
                                            <label for="billing_address">Address*</label>  
                                            <textarea placeholder="Address" name="billing_address"  id="billing_address"><?php echo $address ?></textarea>
                                            <label for="billing_city">City*</label>  
                                            <input type="text" name="billing_city" id="billing_city" value="<?php echo $city ?>" placeholder="City"> 
                                            <label for="billing_state">State*</label>    
                                            <div class="form-group row state-dropdown">								  
                                                <select class="form-control selectpicker" name="billing_state" id="billing_state" data-live-search="true">
                                                <option>Select State</option>
                                                <?php foreach ($state as $s) { ?>
                                                    <option <?php echo ($ustate == $s->state) ? "selected" : "" ?>><?php echo $s->state; ?></option>
                                                <?php } ?>
                                                </select>
                                                <label for="billing_state" class="billing_state_error error">Please enter the state</label>
                                            </div>
                                            <label for="billing_pincode">Postal Code*</label>  
                                            <input type="text" name="billing_pincode" id="billing_pincode" value="<?php echo $pincode ?>" placeholder="Postal Code">
                                            <label for="billing_landmark">Landmark*</label>  
                                            <input type="text" name="billing_landmark" id="billing_landmark" value="<?php echo $landmark ?>" placeholder="Landmark">                       
                                        </form>
                                        <form name="ae-shipping-form" id="ae-shipping-form" method="post">
                                       <input type="checkbox" name="shipping_address_different" id="mycheckbox1" value="0" /> <strong>Check This Box If Shipping Address Different?</strong>
                                        <div class="shipping-address" id="toggle-content1">
                                            <h3>Shipping Address:</h3>
                                            <label for="shipping_name">Name*</label>
                                            <input type="text" name="shipping_name" id="shipping_name" value="" placeholder="Name">  
                                            <label for="shipping_phone">Mobile*</label>
                                            <input type="text" name="shipping_phone" id="shipping_phone" value="" placeholder="Mobile">
                                            <label for="shipping_address">Address*</label>  
                                            <textarea placeholder="Address" name="shipping_address" id="shipping_address"></textarea>
                                            <label for="shipping_city">City*</label>  
                                            <input type="text" name="shipping_city" id="shipping_city" value="" placeholder="City"> 
                                            <label for="shipping_state">State*</label>
                                            <div class="form-group row state-dropdown">								  
                                                <select class="form-control selectpicker" name="shipping_state" id="shipping_state" data-live-search="true">
                                                <option>Select State</option>
                                                <?php foreach ($state as $s) { ?>
                                                    <option><?php echo $s->state; ?></option>
                                                <?php } ?>
                                                </select>
                                                <label for="shipping_state" class="shipping_state_error error">Please enter the state</label>
                                            </div>                                         
                                            <label for="shipping_pincode">Postal Code*</label>  
                                            <input type="text" name="shipping_pincode" id="shipping_pincode" value="" placeholder="Postal Code">
                                            <label for="shipping_landmark">Landmark*</label>  
                                            <input type="text" name="shipping_landmark" id="shipping_landmark" value="" placeholder="Landmark">                       
                                        </div>
                                        </form>
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
                                            <a href="#" class="link-forward">Edit cart</a>
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
                                                            <!-- <div class="quantity-box type1">
                                                                <div class="qty-input">
                                                                    <input type="text" name="qty12554" value="<?php echo $items['qty']; ?>" data-max_value="20" data-min_value="1" data-step="1">
                                                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div> -->
                                                            <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($items['subtotal']); ?></span></ins>                                                           
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  } }?>
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
                                                <!-- <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Tax</b>
                                                        <span class="stt-price">£0.00</span>
                                                    </div>
                                                </li>-->
                                                <?php if($this->session->userdata('c_no')){?>
                                                    <p class="discount-coupon">   
                                                    <input type="text" name="c_no" class="c_no" id="c_no" value="<?php echo $this->session->userdata('c_no');?>" placeholder="Coupon Code" disabled></p>  
                                                </p> 
							<?php }else{ ?>
								<li>
                                                    <p class="discount-coupon">                                                       
                                                        <input type="text" name="c_no" class="c_no" id="c_no" value="" placeholder="Coupon Code">
                                                        <button type="submit" name="btn-sbmt" class="btn coupon apply_coupon">Apply Coupon</button>
                                                    </p>
                                                </li>
							<?php } ?>
                                                
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">total:</b>
                                                        <span class="stt-price"><i class="fa fa-inr" aria-hidden="true"></i> <?php $subtotal=$this->cart->total();$delivery_amt = 0; echo $this->cart->format_number($subtotal+$delivery_amt-$disc_amt);?></span>
                                                    </div>
                                                </li>
                                                <li><button type="button" name="btn-sbmt" class="btn pay col-md-12" id="ae-pro-chkout">Proceed To Pay</button></li>
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