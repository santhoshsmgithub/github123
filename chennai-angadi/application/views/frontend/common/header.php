
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
                            <?php if($this->session->userdata('name')) { ?> 
                                <!-- <li> -->
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
                            <!-- </li> -->
                        <?php } else {?>										
                            <li> <a class="lookup btn_call_quickview" href="javascript:void(0)"><i class="biolife-icon icon-login"></i> Login/Register</a></li> 										
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
                                        <li class="menu-item menu-item-has-children has-child"><a href="<?php echo $base_url;?>cl/<?php echo str_replace(' ', '-',strtolower($category_info->category_title));?>/<?php echo $category_info->id;?>" class="menu-name" data-title="<?php echo $category_info->category_title;?>"><?php echo $category_info->category_title;?></a>
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

                                    <form action="<?php echo $base_url;?>search" class="form-search" name="mobile-seacrh" method="get">
                                        <!-- <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a> -->
                                        <input type="text" id="search" name="search" class="input-text search-field searchid" data-searchid="" value="<?php if(isset($searchquery)) echo $searchquery;?>" placeholder="Search here...">                                        
                                        <button type="submit" class="btn-submit">go</button>
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
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Sweets & Snacks</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Sweets</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Adhirasam</a></li>
                                                                <li><a href="#">Assorted Milk Sweets</a></li>
                                                                <li><a href="#">Palkova</a></li>
                                                                <li><a href="#">Badhusha</a></li>
                                                                <li><a href="#">Dates Burfi</a></li>
                                                                <li><a href="#">Soan Papdi</a></li>
                                                                <li><a href="#">Millet Laddu</a></li>
                                                                <li><a href="#">Kadalai Mittai</a></li>
                                                                <li><a href="#">Thengai Mittai</a></li>
                                                                <li><a href="#">More Products...</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Savouries</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Kai Murukku</a></li>
                                                                <li><a href="#">Mixture</a></li>
                                                                <li><a href="#">Thenkuzhal Murukku</a></li>
                                                                <li><a href="#">Pavakka Chips</a></li>
                                                                <li><a href="#">Nendran Pazham Chips</a></li>
                                                                <li><a href="#">Jackfruit Chips</a></li>
                                                                <li><a href="#">Manapparai Murukku</a></li>
                                                                <li><a href="#">Maravalli Kuchi</a></li>
                                                                <li><a href="#">Kara Boondi</a></li>
                                                                <li><a href="#">More Products...</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
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
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Vegetables"><i class="biolife-icon icon-broccoli-1"></i>90's Kids Mittai</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-01">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">80's & 90's Kids Mittai</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Thaen Mittai</a></li>
                                                                <li><a href="#">Kayiru Mittai</a></li>
                                                                <li><a href="#">Rose Javvu Mittai</a></li>
                                                                <li><a href="#">Javvu Mitai</a></li>
                                                                <li><a href="#">Gold Coin Chocolate</a></li>
                                                                <li><a href="#">Padikal Mittai</a></li>
                                                                <li><a href="#">Pears</a></li>
                                                                <li><a href="#">Inji Mittai</a></li>
                                                                <li><a href="#">Orange Mittai</a></li>
                                                                <li><a href="#">More Candies...</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Combo Pack</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">20+ Variety Combo</a></li>
                                                                <li><a href="#">40+ Variety Combo</a></li>
                                                                <li><a href="#">60+ Variety Combo</a></li>                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-57 md-margin-bottom-30">
                                                        <div class="biolife-brand vertical md-boder-left-30">
                                                            <h4 class="menu-title">Hot Brand</h4>
                                                            <ul class="brands">
                                                                <li><a href="#"><img src="<?php echo $frontend_theme_url;?>images/megamenu/v-brand-organic.png" width="167" height="74" alt="organic"></a></li>
                                                                <li><a href="#"><img src="<?php echo $frontend_theme_url;?>images/megamenu/v-brand-explore.png" width="167" height="72" alt="explore"></a></li>
                                                                <li><a href="#"><img src="<?php echo $frontend_theme_url;?>images/megamenu/v-brand-organic-2.png" width="167" height="99" alt="organic 2"></a></li>
                                                                <li><a href="#"><img src="<?php echo $frontend_theme_url;?>images/megamenu/v-brand-eco-teas.png" width="167" height="67" alt="eco teas"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Fresh Berries"><i class="biolife-icon icon-grape"></i>Toys</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-02">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Miniature Toys</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Mixer Grinder</a></li>
                                                                <li><a href="#">Washing Machine</a></li>
                                                                <li><a href="#">Gas Stove</a></li>
                                                                <li><a href="#">Kadhai</a></li>
                                                                <li><a href="#">Chair</a></li>
                                                                <li><a href="#">Idli Thattu</a></li>
                                                                <li><a href="#">Chapathi Maker</a></li>
                                                                <li><a href="#">Tiffen Box</a></li>
                                                                <li><a href="#">Kudam</a></li>
                                                                <li><a href="#">More Toys...</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 sm-col-12 lg-padding-left-23 xs-margin-bottom-36px md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Traditional Toys</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Wooden Pallanguzhi</a></li>
                                                                <li><a href="#">Goli Gundu</a></li>
                                                                <li><a href="#">Steam Boat</a></li>
                                                                <li><a href="#">Tic Tic</a></li>
                                                                <li><a href="#">Wooden Bambaram</a></li>
                                                                <li><a href="#">Dayakattai</a></li>
                                                                <li><a href="#">Spinning Top</a></li>
                                                                <li><a href="#">More Toys</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 sm-col-12 lg-padding-left-25 md-padding-top-55">
                                                        <div class="biolife-banner layout-01">
                                                            <h3 class="top-title">Farm Fresh</h3>
                                                            <p class="content"> All the Lorem Ipsum generators on the Internet tend.</p>
                                                            <b class="bottomm-title">Berries Series</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-name" data-title="Dals & Pulses"><i class="biolife-icon icon-fish"></i>Dals & Pulses</a></li>
                                    <li class="menu-item"><a href="#" class="menu-name" data-title="Rice & Rice Products"><i class="biolife-icon icon-fish"></i>Rice & Rice Products</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fast-food"></i>Marachekku Oil</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-beef"></i>Flours</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-onions"></i>Millets</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Spices</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-contain"></i>Spices Powder</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Salt, Sugars & Jaggery</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Beauty & Personal Care</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="<?php echo $base_url;?>search" class="form-search ui-autocomplete" name="desktop-seacrh" method="get">
                                <input type="text" name="search" id="searchnew" class="input-text" data-searchid="" value="<?php if(isset($searchquery)) echo $searchquery;?>" placeholder="What do you need?...">
                                <!-- <input type="text" name="searchnew" id="searchnew" class="input-text" data-searchid="" value="" placeholder="What do you need?...">                                -->
                                <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                                
                            </form>
                            <div class="search-list hidden">
								<ul class="search-list-prod">
							    </ul>
							</div>
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