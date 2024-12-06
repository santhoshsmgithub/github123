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
                        <li class="nav-item"><span class="current-page">Check Out</span></li>
                    </ul>
                </nav>
            </div>


            <div class="page-contain single-product">

                <div class="container">
        
                    <!-- Main content -->
                    <div id="main-content" class="main-content">
                        
                        <!--Cart Table-->
                        <div class="shopping-cart-container">
                            <div class="row">
                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="box-title">Your cart items</h3>
                                    <form class="shopping-cart-form" action="#" method="post">
                                        <table class="shop_table cart-form">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product Name</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
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
                                            
                                                <td class="product-thumbnail" data-title="Product Name">
                                                <?php 
													if ($this->cart->has_options($items['rowid']) == TRUE){ 
												?>
												<?php 
													foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value){ 
												?>
												<?php if($option_name=="product_image"){ 
												?>
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img width="113" height="113" src="<?php echo $base_url."product/".$option_value;?>" alt="shipping cart"></figure>
                                                    </a>
                                                    <?php } }  } ?>		
                                                    <a class="prd-name" href="#"><?php echo $items['name']; ?></a>
                                                    <div class="action">
                                                        <?php 
                                                        $product_id = $items['id'];
                                                        ?>
                                                        <a href="<?php echo $base_url.'cart/deletecart/'.$items['rowid'] ?>" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0);" class="updatecart" data-id="<?php echo $l; ?>" data-prd_id="<?php echo $product_id; ?>"  data-rowid="<?php echo $items['rowid'] ?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $items['price']; ?></span></ins>                                                        
                                                    </div>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity-box type1">
                                                        <div class="qty-input">
                                                            <input type="text" name="qty" class="cardqty-<?php echo $l;?>" value="<?php echo $items['qty']; ?>" data-max_value="20" data-min_value="1" data-step="1">
                                                            <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                            <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($items['subtotal']); ?></span></ins>                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php  } }else {?>
											<tr>
												<td colspan="6"> No Products found </td>
											</tr>
											<?php } ?> 
                                            
                                            <tr class="cart_item wrap-buttons">
                                                <td class="wrap-btn-control" colspan="4">
                                                    <a href="<?php echo $base_url;?>" class="btn back-to-shop">Continue Shopping</a>
                                                    <!-- <button class="btn btn-update" type="submit" disabled>update</button>
                                                    <button class="btn btn-clear" type="reset">clear all</button> -->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <div class="shpcart-subtotal-block">
                                        <?php
                                        $subtotal=$this->cart->total();
                                        $carttotlitems = count($this->cart->contents());
                                        ?>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Subtotal <span class="sub">(<?php echo $carttotlitems; ?>items)</span></b>
                                            <span class="stt-price"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $this->cart->format_number($subtotal);?></span>
                                        </div>                                        
                                        <div class="tax-fee">
                                            <p class="title">Shipping calculated at checkout</p>
                                        </div>
                                        <div class="btn-checkout">
                                            <a href="<?php echo $base_url ;?>checkout/" class="btn checkout">Proceed to Check out</a>
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