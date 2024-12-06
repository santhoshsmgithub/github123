
<input type="hidden" value="<?php echo $base_url; ?>" id="base_url">
<!-- HEADER -->
<header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="mailto:care@chennaiangadi.com"><i class="fa fa-envelope" aria-hidden="true"></i>care@chennaiangadi.com</a></li>
                        <li>Free Shipping On Order Above <i class="fa fa-inr" aria-hidden="true"></i> 500</li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">                        
                        <li><a href="https://twitter.com/ChennaiAngadi" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/chennaiangadii/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/chennaiangaadi" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/chennaiangadi" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu"> 
                       
                       <li>
                            <?php if($this->session->userdata('name')) { ?> 
                            <!-- <li><a href="javascripr:void(0)"> <?php  echo $this->session->userdata('name');?></a> -->

                                <ul class="horizontal-menu profile-active"> 
                                <li> 					   
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="biolife-icon icon-login"></i> <?php  echo $this->session->userdata('name');?> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo $base_url;?>order-history">Order History</a>
                                            <a class="dropdown-item" href="<?php echo $base_url;?>profile">My Account</a>
                                            <!-- <a class="dropdown-item" href="#">Wish List</a> -->
                                            <a class="dropdown-item" href="<?php echo $base_url;?>user/logout">Logout</a>
                                        </div>
                                        </div>
                                    </li>  
                                </ul>
                            </li>
                        <?php } else {?>										
                            <li> <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-login"></i> Login/Register</a></li> 										
                        <?php } ?>                             
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="<?php echo $base_url;?>" class="chennaiangadi-logo"><img src="<?php echo $frontend_theme_url;?>images/svg-icons/chennai-angadi.svg" alt="Chennai Angadi"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu chennaiangadi-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                                <li class="menu-item"><a href="<?php echo $base_url;?>">Home</a></li>                                
                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Product">Products</a>
                                    <ul class="sub-menu">
                                        <?php 
                                            if(!empty($category)) { 
                                            foreach($category as $category_info) {
                                        ?>                                     
                                        <li class="menu-item menu-item-has-children has-child"><a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>" class="menu-name" data-title="Sweets & Snacks"><?php echo $category_info->category_title;?></a>
                                            <ul class="sub-menu">
                                            <?php 
                                                foreach($subcategory as $subcategory_info) {
                                                    if($category_info->id==$subcategory_info->main_category){?>
                                                <li class="menu-item"><a href="<?php echo $base_url;?>pl/<?php echo str_replace('&','',str_replace(' ', '-',strtolower($subcategory_info->category_title)));?>/<?php echo $subcategory_info->id;?>"><?php echo $subcategory_info->category_title;?></a></li>
                                                <?php } } ?>
                                            </ul>
                                        </li> 
                                        <?php } } ?> 
                                        
                                    </ul>
                                </li>                                                             
                                <li class="menu-item"><a href="<?php echo $base_url;?>offers">Today Offers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="chennaiangadi-cart">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">

                                    <!-- <form  method="post" action="<?php echo $this->config->item('base_url');?>search">
										<input type="text" id="search"  data-searchid="" name="search" value="<?php if(isset($searchquery)) echo $searchquery;?>" class="search-field searchid" placeholder="Search for products . . ."  placeholder="Search for item..."/>
										<a href="javascript:void(0);"  class="search-button" ><i class="fa fa-search"></i></a>
									</form>  -->

                                    <form action="<?php echo $base_url;?>search" class="form-search" name="mobile-seacrh" method="post">
                                        <!-- <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a> -->
                                        <input type="text" id="search" name="search" class="input-text search-field searchid" data-searchid="" value="<?php if(isset($searchquery)) echo $searchquery;?>" placeholder="Search here...">                                        
                                        <button type="button" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty">8</span>
                                    </span>
                                </a>
                            </div> -->
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="<?php echo $base_url;?>cart" class="link-to">
                                        <span class="icon-qty-combine">
                                            <i class="icon-cart-mini biolife-icon"></i>
                                            <span class="qty bg-red">
                                            <?php echo count($this->cart->contents()); ?>
                                            </span>
                                        </span>
                                        <span class="title">My Cart</span>
                                        <!-- <span class="sub-total"> <i class="fa fa-inr" aria-hidden="true"></i> 0.00</span> -->
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">CATEGORY</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                <?php 
                                            if(!empty($category)) { 
                                            foreach($category as $category_info) {
                                        ?>  

                                        <!-- <li class="menu-item menu-item-has-children has-child"><a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>" class="menu-name" data-title="Sweets & Snacks"><?php echo $category_info->category_title;?></a> -->
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i><?php echo $category_info->category_title;?></a>
                                            <div class="wrap-megamenu lg-width-900 md-width-640">
                                                <div class="mega-content">
                                                    <div class="row">
                                                    <!-- <ul class="sub-menu"> -->
                                                        
                                                                
                                                        
                                                        <?php 
                                                        // print_r($product);exit;
                                                            foreach($subcategory as $subcategory_info) {
                                                                if($category_info->id==$subcategory_info->main_category){?>
                                                                <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                                    

                                                                    <div class="wrap-custom-menu vertical-menu">
                                                                        <h4 class="menu-title"><a href="<?php echo $base_url;?>pl/<?php echo str_replace('&','',str_replace(' ', '-',strtolower($subcategory_info->category_title)));?>/<?php echo $subcategory_info->id;?>" ><?php echo $subcategory_info->category_title;?></a></h4>
                                                                        <?php
                                                                        if (isset($subcategory_products[$subcategory_info->id])) {
                                                                        ?>
                                                                        <ul class="menu">
                                                                            <?php
                                                                            foreach ($subcategory_products[$subcategory_info->id] as $prod) {
                                                                                $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($prod->product_name))."/".$prod->product_id; 
                                                                                ?>
                                                                                <li><a href="<?php echo $product_detail_url; ?>"><?php echo $prod->product_name; ?></a></li>
                                                                            <?php
                                                                            }
                                                                               
                                                                            ?>
                                                                            
                                                                            <!-- <li><a href="#">Assorted Milk Sweets</a></li>
                                                                            <li><a href="#">Palkova</a></li>
                                                                            <li><a href="#">Badhusha</a></li>
                                                                            <li><a href="#">Dates Burfi</a></li>
                                                                            <li><a href="#">Soan Papdi</a></li>
                                                                            <li><a href="#">Millet Laddu</a></li>
                                                                            <li><a href="#">Kadalai Mittai</a></li>
                                                                            <li><a href="#">Thengai Mittai</a></li>
                                                                            <li><a href="#">More Products...</a></li> -->
                                                                        </ul>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>

                                                                <?php } } ?>

                                                            
                                                        
                                                        
                                                        <!-- <div class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <h4 class="menu-title">Best Selling Products</h4>
                                                                <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}' >
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="<?php echo $frontend_theme_url;?>images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="<?php echo $frontend_theme_url;?>images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="<?php echo $frontend_theme_url;?>images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> -->
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </li>
                                        <?php } } ?> 

                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="<?php echo $base_url;?>search" class="form-search" name="desktop-seacrh" method="get">
                                <input type="text" name="search" class="input-text" data-searchid="" value="<?php if(isset($searchquery)) echo $searchquery;?>" placeholder="What do you need?...">                                
                                <button type="button" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+91) 90946 76665</b></p>
                            <p class="working-time">Mon-Sat: 10:00am-6:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>