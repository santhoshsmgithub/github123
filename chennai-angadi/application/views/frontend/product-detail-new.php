<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$product_image_url=$this->config->item('product_image_url');
$base_url=$this->config->item('base_url');  
// $this->load->view('frontend/common/c-header');

include_once('common/c-header.php');

// $l=0;

// print_r($product_info);

?>
    
    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">          

            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <?php 
                            $category_name = "";
                            $product_name=$product_info->product_category;
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
                        <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo $base_url;?>welcome/productlisting/<?php echo $product_info->product_category;?>" class="permal-link"><?php echo $category_name;?></a></li>
                        <li class="nav-item"><span class="current-page"><?php echo $product_info->product_name;?></span></li>
                    </ul>
                </nav>
            </div>

            <div class="page-contain single-product">

                <div class="container">
        
                    <!-- Main content -->
                    <div id="main-content" class="main-content">
                        
                        <!-- summary info -->
                        <div class="sumary-product single-layout">
                            <div class="media">   
                                <a href="" class="wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>                                                           
                                <ul class="biolife-carousel slider-for" data-slick='{"arrows": true, "dots": true, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800, "autoplay": true,"autoplaySpeed": 2000}'>
                                    <?php if($product_info->product_image!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="" width="500" height="500"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image1!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image1;?>" alt="" width="500" height="500"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image2!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image2;?>" alt="" width="500" height="500"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image3!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image3;?>" alt="" width="500" height="500"></li>
                                    <?php }?>
                                </ul>
                                <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                                    <?php if($product_info->product_image!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="" width="88" height="88"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image1!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image1;?>" alt="" width="88" height="88"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image2!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image2;?>" alt="" width="88" height="88"></li>
                                    <?php }?>
                                    <?php if($product_info->product_image3!=''){?>
                                    <li><img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image3;?>" alt="" width="88" height="88"></li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="product-attribute">
                                <h3 class="title"><?php echo $product_info->product_name;?></h3>
                                <div class="price">
                                    <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount;?></span></ins>
                                    <del><span class="price-amount mrp-price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt;?></span></del>
                                </div>
                                <div class="row">
                                    <div class="dropdown col-md-4 col-sm-4 col-xs-12">
                                        <!-- <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"> Jumbo Pack <i class="fa fa-inr" aria-hidden="true"></i> 600
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">100grams <i class="fa fa-inr" aria-hidden="true"></i> 85.00</a></li>
                                          <li><a href="#">250grams <i class="fa fa-inr" aria-hidden="true"></i> 85.00</a></li>
                                          <li><a href="#">500grams <i class="fa fa-inr" aria-hidden="true"></i> 85.00</a></li>
                                          <li><a href="#">1kg <i class="fa fa-inr" aria-hidden="true"></i> 85.00</a></li>
                                        </ul> -->
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
                                                                                
                                                            <select class="form-control selectpicker detailselect_weight" id="select-country-<?php echo $key; ?>" data-live-search="true">
                                                                <?php
                                                                    $j = 1;
                                                                    foreach($result as $res)
                                                                    {	
                                                                        $res = (array) $res;
                                                                    ?>
                                                                    <option data-weight="<?php echo $res["prod_weight"];?>" data-card="<?php echo $res["product_id"];?>" data-mrpvalue="<?php echo $res["prod_mrp_amt"];?>" data-value="<?php echo $res["product_amount"];?>" value="<?php echo $res["prod_weight"];?>" data-pid="1"><a href="javascript:void(0);"><?php echo $res["prod_weight"]; ?> Rs. <?php echo $res["product_amount"];?></a></option>
                                                                    
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
                                    <div class="price-section col-md-5 col-sm-5 col-xs-12">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="quantity-box type2">
                                                <div class="qty-input">
                                                    <input type="text" name="qty<?php echo $product_info->product_id; ?>" class="qtynew qty-<?php echo $product_info->product_id; ?>" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                                    <a href="javascript:void(0);" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0);" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="buttons">
                                                <a href="javascript:void(0);" class="btn btn-bold dcardid" data-cardid="<?php echo $product_info->product_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add</a>                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="excerpt"><?php echo $product_info->product_description; ?></p>
                            </div>
                        </div>
        
                        <!-- Tab info -->
                        <div class="product-tabs single-layout biolife-tab-contain">
                            <div class="tab-head">
                                <ul class="tabs">
                                    <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                                    <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                                    <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li>                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="tab_1st" class="tab-contain desc-tab active">
                                    <?php echo $product_info->product_description; ?>
                                </div>
                                <div id="tab_2nd" class="tab-contain addtional-info-tab">
                                    <?php echo $product_info->product_display_features; ?>
                                </div>
                                <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                                    <div class="accodition-tab biolife-accodition">
                                        <ul class="tabs">
                                            <li class="tab-item">
                                                <span class="title btn-expand">How long will it take to receive my order?</span>
                                                <div class="content">
                                                    <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                                    <div class="desc-expand">
                                                        <span class="title">Shipping mode</span>
                                                        <ul class="list">
                                                            <li>Standard (in transit 3-5 business days)</li>
                                                            <li>Priority (in transit 2-3 business days)</li>
                                                            <li>Express (in transit 1-2 business days)</li>
                                                            <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="tab-item">
                                                <span class="title btn-expand">How is the shipping cost calculated?</span>
                                                <div class="content">
                                                    <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                                    <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                                </div>
                                            </li>
                                            <li class="tab-item">
                                                <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                                <div class="content">
                                                    <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                                </div>
                                            </li>
                                            <li class="tab-item">
                                                <span class="title btn-expand">Shipping Restrictions?</span>
                                                <div class="content">
                                                    <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                                </div>
                                            </li>
                                            <li class="tab-item">
                                                <span class="title btn-expand">Undeliverable Packages?</span>
                                                <div class="content">
                                                    <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
        
                        <!-- related products -->
                        <div class="product-related-box single-layout">
                            <div class="biolife-title-box lg-margin-bottom-26px-im">                                
                                <h3 class="main-title">Related Products</h3>
                            </div>
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                            <?php foreach ($relatedproduct as $key => $product_info) { 
                        // $product_detail_url = $base_url."welcome/productdetailed/".$product_info->product_id;
                        $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                        $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                        ?>  
                                <li class="related-product-list-<?php echo $key; ?> product-item <?php echo $out_of_stock; ?>">
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
                                                                        <option data-weight="<?php echo $res["prod_weight"];?>" data-card="<?php echo $res["product_id"];?>" data-mrpvalue="<?php echo $res["prod_mrp_amt"];?>" data-value="<?php echo $res["product_amount"];?>" value="<?php echo $res["prod_weight"];?>" data-pid="1" data-index="<?php echo $key; ?>" data-parent="related-product-list"><a href="javascript:void(0);"><?php echo $res["prod_weight"]; ?> Rs. <?php echo $res["product_amount"];?></a></option>
                                                                        
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
        
            </div>
            


          
        </div>
    </div>

    <?php  
$this->load->view('frontend/common/footer');
?>