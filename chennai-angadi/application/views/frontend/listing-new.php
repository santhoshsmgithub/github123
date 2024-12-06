<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$product_image_url=$this->config->item('product_image_url');
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
                    <?php 
									$product_name=$this->uri->segment(3);
									$this->db->where('id',$product_name);
									$result=$this->db->get('category')->result();
									$category_name = "";
									if($result)
									{
										foreach($result as $res)
										{
											 $category_name = $res->category_title;
										} 
									}											
								?>
                        <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>
                        <li class="nav-item"><span class="current-page"><?php echo $category_name;?></span></li>
                    </ul>
                </nav>
            </div>


            <div class="page-contain category-page no-sidebar">
                <div class="container">
                    <div class="row">        
                        <!-- Main content -->
                        <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-category grid-style">        
                                <div id="top-functions-area" class="top-functions-area" >
                                    <div class="flt-item to-left group-on-mobile">
                                                                             
                                    </div>
                                    <div class="flt-item to-right">
                                        <form id="filter-form" name="filter-form" method="post" action="<?php echo $base_url;?>filterby">
                                            <span class="flt-title">Sort</span>
                                            <div class="wrap-selectors">
                                                <div class="selector-item orderby-selector">
                                                    <select id="selectProductSort1" name="filterby" name="filterby" class="orderby" aria-label="Shop order">
                                                        <!-- <option value="menu_order" selected="selected">Default sorting</option>
                                                        <option value="popularity">popularity</option>                                                    -->
                                                        <option value="0">Filter products by</option>
                                                        <option value="3">price: low to high</option>
                                                        <option value="4">price: high to low</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
        
                                <div class="row">
                                
                                    <ul class="products-list"> 

                                    <?php foreach ($product_data as $product_info) { 
                                        $product_detail_url = $base_url."pd/".str_replace(' ', '-',strtolower($product_info->product_name))."/".$product_info->product_id;
                                        $out_of_stock = ($product_info->prod_stock <= 0) ? "out-of-stock" : "" ;
                                        ?>  
                                        <li class="product-item <?php echo $out_of_stock; ?> col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                            <div class="contain-product layout-02">
                                                <div class="product-thumb">
                                                    <a href="<?php echo $product_detail_url;?>" class="link-to-product">
                                                        <img src="<?php echo $product_image_url.$product_info->product_image; ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info product-info">                                    
                                                    <h4 class="product-title"><a href="<?php echo $product_detail_url;?>" class="pr-name"><?php echo $product_info->product_name; ?></a></h4> 
                                                    <div class="dropdown">
                                                        <?php 
                                                            $product_name=$product_info->product_name;
                                                            $this->db->where('product_name',$product_name); 
                                                            $result=$this->db->get('product')->result_array();
                                                            if($result)
                                                            {
                                                                $res = $result[0];
                                                                ?>
                                                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"> <?php echo $res["prod_weight"];?> <i class="fa fa-inr" aria-hidden="true"></i>  <?php echo $res["product_amount"];?>
                                                                    <span class="caret"></span></button>
                                                                <?php
                                                                unset($result[0]);
                                                                $totCnt = count($result);
                                                                if ($totCnt > 0) { ?>
                                                                
                                                                <ul class="dropdown-menu">
                                                                <?php
                                                                    $j = 1;
                                                                    foreach($result as $res)
                                                                    {	
                                                                        $res = (array) $res;
                                                                    ?>
                                                                    <li>
                                                                        <a href="javascript:void(0);">
                                                                            <?php echo $res["prod_weight"]; ?> - <i class="fa fa-inr" aria-hidden="true"></i> 
                                                                            <?php echo $res["product_amount"];?>
                                                                        </a>
                                                                    </li>
                                                                    <?php
                                                                        $j++;
                                                                    }
                                                                    ?>
                                                                </ul>
                                                                <?php 
                                                                }
                                                            } 
                                                        ?>
                                                    </div>                             
                                                    <div class="price">
                                                        <ins><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount; ?></span></ins>
                                                        <del><span class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt; ?></span></del>
                                                    </div>
                                                    <div class="row price-section">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="quantity-box type2">
                                                                <div class="qty-input">
                                                                    <input type="text" name="qty<?php echo $product_info->product_id;?>" value="1" data-max_value="20" data-min_value="1" data-step="1" class="qty-<?php echo $product_info->product_id;?>">
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
            


          
        </div>
    </div>

    <?php  
$this->load->view('frontend/common/footer');
?>
