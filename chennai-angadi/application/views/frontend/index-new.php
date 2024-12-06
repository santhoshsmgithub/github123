<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$product_image_url=$this->config->item('product_image_url');
$base_url=$this->config->item('base_url');  ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="online organic grocery, online organic grocery chennai, online organic grocery tamilnadu, online organic grocery shopping, online organic grocery store, online organic supermarket, organic grocery chennai, buy organic groceries online, food shopping online, original karupatti, best quality palm jaggery, certified organic producsts"/>
    <meta name="description" content="The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs. Online shopping now made easy with a wide range of organic groceries and home needs. Healthy organic food from Chennai angadi Organic"/>
    
    <!--OG Tags-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi" />
    <meta property="og:description" content="The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs." />
    <meta property="og:url" content="http://www.chennaiangadi.com/" />
    <meta property="og:site_name" content="chennaiangadi" />
    <meta property="og:image" content="https://chennaiangadi.com/themes/frontend/img/chennai-angadi-social-share.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi</title> 
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $frontend_theme_url;?>images/favicon.png" />

    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/slick.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/style.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/ca-styles.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18185022-29"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-18185022-29');
    </script>
</head>
<body class="chennaiangadi-body">

    <input type="hidden" value="<?php echo $this->config->item('base_url'); ?>" id="base_url">
    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <?php include_once "common/header.php";?>




    
    
    <!-- Page Contain -->
    <div class="page-contain">
        

        <!-- Main content -->
        <div id="main-content" class="main-content">          

            <!--Block 01: Main Slide-->
            <div class="main-slide block-slider nav-change">
                <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": true, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800, "autoplay": true,"autoplaySpeed": 2000}' >
                    <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-01"></div>
                            <div class="text-content">                                
                                <h3 class="second-line">90s Kids Mittai</h3>                                
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Buy now</a>                                   
                                </p>
                            </div>
                        </div>
                    </li>
                   <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-02"></div>
                            <div class="text-content">                               
                                <h3 class="second-line">Traditional Sweets & Snacks</h3> 
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Buy now</a>                                 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-03"></div>
                            <div class="text-content">                                
                                
                            </div>
                        </div>
                    </li>                                     
                </ul>
            </div>

        <!----4Box divider-->   
        <div class="container">
            <div class="row steps-bg-color slider-area">					
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">							
                    <div class="banner-icon">
                        <img src="<?php echo $frontend_theme_url;?>images/svg-icons/free-shipping.svg" alt="Login" title="Login" />
                    </div>
                    <div class="banner-text">
                        <h2>Free Shipping</h2>
                        <p>All over India</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">
                    <div class="banner-icon">
                        <img src="<?php echo $frontend_theme_url;?>images/svg-icons/whatsapp.svg" alt="Whatsapp" title="Whatsapp" />
                    </div>
                    <div class="banner-text">
                        <h2>WhatsApp Support</h2>
                        <p>Place your orders in whatsapp</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">
                    <div class="banner-icon">
                        <img src="<?php echo $frontend_theme_url;?>images/svg-icons/payment-icon.svg" alt="Online Payment" title="Online Payment" />
                    </div>
                    <div class="banner-text">
                        <h2>Online Payment</h2>
                        <p>We accept all major cards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">							
                    <div class="banner-icon">
                        <img src="<?php echo $frontend_theme_url;?>images/svg-icons/fast-delivery.svg" alt="Online Payment" title="Online Payment" />
                    </div>
                    <div class="banner-text">
                        <h2>Fast Delivery</h2>
                        <p>Dispatched in 24-48 hours</p>
                    </div>							
                </div>					
        </div>
        </div>


        <!---New Arrivals--->
        <div class="row">
            <div class="container">
                <div class="biolife-title-box">                    
                    <h3 class="main-title">New Arrivals</h3>
                </div>
                <div class="block-item recently-products-cat md-margin-bottom-39">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}' >
                    <?php 
                    foreach ($product_hot as $key => $product_info) { 
                        $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                        $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                        ?>  
                        <li class="new-arrival-<?php echo $key; ?> product-item <?php echo $out_of_stock; ?>">
                            <div class="contain-product layout-02">
                                <div class="product-thumb">
                                    <a href="<?php echo $product_detail_url;?>" class="link-to-product">
                                        <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info product-info">                                    
                                    <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4> 
                                    <div class="dropdown">
                                    <form class="prod-desc">
                                            <div class="form-group row state-dropdown">	
                                            <?php 
                                                $product_name=$product_info->product_name;
                                                $this->db->where('product_name',$product_name); 
                                                $result=$this->db->get('product')->result_array();
                                                if($result)
                                                {
                                                    $res = $result[0];
                                                    ?>
                                                    <?php
                                                    // unset($result[0]);
                                                    $totCnt = count($result);
                                                    if ($totCnt > 0) { ?>
                                                                                
                                                            <select class="form-control selectpicker select_weight" id="select-country-<?php echo $key; ?>" data-live-search="true">
                                                                <?php
                                                                    $j = 1;
                                                                    foreach($result as $res)
                                                                    {	
                                                                        $res = (array) $res;
                                                                    ?>
                                                                    <option data-weight="<?php echo $res["prod_weight"];?>" data-card="<?php echo $res["product_id"];?>" data-mrpvalue="<?php echo $res["prod_mrp_amt"];?>" data-value="<?php echo $res["product_amount"];?>" value="<?php echo $res["prod_weight"];?>" data-pid="1" data-index="<?php echo $key; ?>" data-parent="new-arrival"><a href="javascript:void(0);"><?php echo $res["prod_weight"]; ?> Rs. <?php echo $res["product_amount"];?></a></option>
                                                                    
                                                                    <?php
                                                                        $j++;
                                                                    }
                                                                    ?>
                                                                </ul>
                                                                <?php 
                                                                }
                                                                ?>
                                                                
                                                            </select>
                                                        
                                                <?php
                                                } 
                                            ?>
                                            </div>
                                        </form> 
                                        
                                      </div>                             
                                    <div class="price">
                                        <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                        <del><span class="price-amount mrp-price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                    </div>
                                    <div class="row price-section">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="quantity-box type2">
                                                <div class="qty-input">
                                                    <input type="text" name="qty-<?php echo $key;?>" value="1" data-max_value="20" data-min_value="1" data-step="1" class="qty-<?php echo $product_info->product_id;?>">
                                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="buttons">
                                                <a href="javascript:void(0);" class="btn btn-bold atc" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>           
                    </ul>
                </div>
            </div>
        </div>
            

            <!--Block 03: Product Tabs-->
            <div class="product-tab z-index-20 sm-margin-top-40px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Our Products</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                <li class="tab-element active">
                                    <a href="#tab01_1st" class="tab-link"><span class="biolife-icon icon-lemon"></span>Savouries</a>
                                </li>
                                <li class="tab-element" >
                                    <a href="#tab01_2nd" class="tab-link"><span class="biolife-icon icon-grape2"></span>90's Kids Mittai</a>
                                </li>
                                <li class="tab-element" >
                                    <a href="#tab01_3rd" class="tab-link"><span class="biolife-icon icon-blueberry"></span>Sweets</a>
                                </li>
                                <li class="tab-element" >
                                    <a href="#tab01_4th" class="tab-link"><span class="biolife-icon icon-orange"></span>Miniature Toys</a>
                                </li>                                
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tab01_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                <?php foreach ($our_products_1 as $product_info) { 
                                    $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                                    $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                                    ?> 
                                    <li class="product-item <?php echo $out_of_stock; ?>">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="<?php echo $product_detail_url; ?>" class="link-to-product">
                                                    <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>                
                                            </div>
                                            <div class="info">                                                
                                                <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                                    <del><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                                </div>                                                
                                                <div class="slide-down-box">                                                    
                                                    <!-- <div class="buttons">                                                        
                                                        <a href="<?php echo $product_detail_url;?>" class="btn add-to-cart-btn">Buy Now</a>
                                                    </div> -->
                                                    <div class="buttons">
                                                        <a href="javascript:void(0);" class="btn btn-bold text-white atc" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="tab01_2nd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                <?php foreach ($our_products_2 as $product_info) { 
                                    $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                                    $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                                    ?> 
                                    <li class="product-item <?php echo $out_of_stock; ?>">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="<?php echo $product_detail_url; ?>" class="link-to-product">
                                                    <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>                
                                            </div>
                                            <div class="info">                                                
                                                <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                                    <del><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                                </div>                                                
                                                <div class="slide-down-box">                                                    
                                                    <!-- <div class="buttons">                                                        
                                                        <a href="<?php echo $product_detail_url;?>" class="btn add-to-cart-btn">Buy Now</a>
                                                    </div> -->
                                                    <div class="buttons">
                                                        <a href="javascript:void(0);" class="btn btn-bold text-white atc" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="tab01_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                <?php foreach ($our_products_3 as $product_info) { 
                                    $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                                    $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                                    ?> 
                                    <li class="product-item <?php echo $out_of_stock; ?>">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="<?php echo $product_detail_url; ?>" class="link-to-product">
                                                    <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>                
                                            </div>
                                            <div class="info">                                                
                                                <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                                    <del><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                                </div>                                                
                                                <div class="slide-down-box">                                                    
                                                    <!-- <div class="buttons">                                                        
                                                        <a href="<?php echo $product_detail_url;?>" class="btn add-to-cart-btn">Buy Now</a>
                                                    </div> -->
                                                    <div class="buttons">
                                                        <a href="javascript:void(0);" class="btn btn-bold text-white atc" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="tab01_4th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                <?php foreach ($our_products_4 as $product_info) { 
                                    $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                                    $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                                    ?> 
                                    <li class="product-item <?php echo $out_of_stock; ?>">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="<?php echo $product_detail_url; ?>" class="link-to-product">
                                                    <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>                
                                            </div>
                                            <div class="info">                                                
                                                <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                                    <del><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                                </div>                                                
                                                <div class="slide-down-box">                                                    
                                                    <!-- <div class="buttons">                                                        
                                                        <a href="<?php echo $product_detail_url;?>" class="btn add-to-cart-btn">Buy Now</a>
                                                    </div> -->
                                                    <div class="buttons">
                                                        <a href="javascript:void(0);" class="btn btn-bold text-white atc" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 04: Banner Promotion 01-->
            <div class="banner-promotion-01 xs-margin-top-50px sm-margin-top-70px">
                <div class="biolife-banner promotion3 biolife-banner__promotion3 green-style">
                    <div class="banner-contain">
                        <div class="media">
                            <div class="img-moving position-1">
                                <img src="<?php echo $frontend_theme_url;?>images/home-03/img-moving-pst-1-geen.png" width="149" height="139" alt="img msv">
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="container text-wrap">
                                <span class="first-line">Healthy Food</span>
                                <b class="second-line">Vegetable Always fresh</b>
                                <p class="third-line">Food Heaven Made Easy sounds like the name of an amazingly delicious food delivery service, but don't be fooled...</p>
                                <div class="product-detail">
                                    <p class="txt-price"><span>Only:</span>$8.00</p>
                                    <a href="#" class="btn add-to-cart-btn">add to cart</a>
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
<!-- FOOTER -->
<!-- <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <div class="footer-item">
                            <a href="home-03-green.html" class="logo footer-logo"><img src="<?php echo $frontend_theme_url;?>images/svg-icons/chennai-angadi.svg" alt="biolife logo" width="135" height="36"></a>
                            <div class="footer-phone-info">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Got Questions ?</span>
                                    <span>(+91)  90946 76665</span>
                                </p>
                            </div>
                            <div class="newsletter-block layout-01">
                                <h4 class="title">Newsletter Signup</h4>
                                <div class="form-content">
                                    <form action="#" name="new-letter-foter">
                                        <input type="email" class="input-text email" value="" placeholder="Your email here...">
                                        <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <div class="footer-item">
                            <h3 class="section-title">Useful Links</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a></li>                                                                                        
                                            <li><a href="#">Delivery infomation</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Enquiry</a></li>
                                            <li><a href="#">Contacts Us</a></li>
                                            <li class="md-padding-top-20"><img src="<?php echo $frontend_theme_url;?>images/svg-icons/ISO.svg"/></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <div class="footer-item">
                            <h3 class="section-title">Corporate Office</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-location"></i>
                                            <b class="desc">8/15, Muthu Street, Mylapore, Chennai - 600004 </b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                            <b class="desc">Phone: (+91) 90946 76665</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">Email:  care@chennaiangadi.com</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-62px xs-margin-top-40px"></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                       <div class="copy-right-text"><p>Copyright © 2018 - 2021 chennaiangadi.com All rights reserved.</p></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="payment-methods">
                            <p>Pay Secured With <i class="fa fa-cc-mastercard" aria-hidden="true"></i> 
                                <i class="fa fa-cc-visa" aria-hidden="true"></i> 
                                <i class="fa fa-credit-card" aria-hidden="true"></i> 
                                <i class="fa fa-cc-discover" aria-hidden="true"></i> 
                                <i class="fa fa-cc-diners-club" aria-hidden="true"></i>
                                <i class="fa fa-google-wallet" aria-hidden="true"></i> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Global</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
                <ul class="list">
                    <li class="list-item"><a href="#">Login/register</a></li>
                    <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                    <li class="list-item"><a href="#">Checkout</a></li>
                </ul>
            </div>           
        </div>
    </div>

    <div id="biolife-quickview-block" class="biolife-quickview-block">
        <div class="quickview-container">
            <a href="#" class="btn-close-quickview" data-object="open-quickview-block"><span class="biolife-icon icon-close-menu"></span></a>
            <div class="biolife-quickview-inner">
                        <div class="tab_container login-wrapper">
                            <input id="tab1" type="radio" name="tabs" checked>
                            <label for="tab1">Login</label>                
                            <input id="tab2" type="radio" name="tabs">
                            <label for="tab2">Register</label> 
                            <section id="content1" class="tab-content">
                                <form>
                                    <div class="form-group">                                      
                                     <input type="text" autocomplete="off" placeholder="Email ID*" name="email" class="form-control username" id="useremail" required="" aria-required="true">
                                    </div>
                                    <div class="form-group">                                     
                                        <input type="password" autocomplete="off" placeholder="Password*" name="password" class="form-control password" id="userpassword" required="" aria-required="true">
                                    </div>
                                      <p><input type="checkbox" class="form-check-input"> Remember Me</p>  
                                      <a href=""> Forget Password?</a>
                                    <button type="submit" class="btn col-md-12">Login</button>
                                  </form>
                            </section>
                
                            <section id="content2" class="tab-content">
                                <form>
                                    <div class="form-group">                                      
                                        <input type="text" autocomplete="off" placeholder="Name*" name="Name" class="form-control username" id="username" required="" aria-required="true">
                                    </div>
                                    <div class="form-group">                                     
                                        <input type="password" autocomplete="off" placeholder="Email ID*" name="emailid" class="form-control password" id="emailid" required="" aria-required="true">
                                    </div>
                                    <div class="form-group">                                     
                                        <input type="password" autocomplete="off" placeholder="Mobile No*" name="Mobile No" class="form-control password" id="mobile" required="" aria-required="true">
                                    </div>
                                    <div class="form-group">                                     
                                        <input type="password" autocomplete="off" placeholder="Password*" name="password" class="form-control password" id="userpassword" required="" aria-required="true">
                                    </div>                                    
                                    <button type="submit" class="btn col-md-12">Sign Up</button>
                                  </form>                              
                            </section>
                        </div>
                              
            </div>
        </div>
    </div> -->

    <!-- <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a> -->

    <!-- <script src="<?php echo $frontend_theme_url;?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/jquery.countdown.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/slick.min.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/biolife.framework.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/functions.js"></script>
    <script src="<?php echo $frontend_theme_url;?>/js/custom.js"></script> -->
</body>

</html>