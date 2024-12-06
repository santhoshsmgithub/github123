<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');  ?>
<!doctype html>
<html class="no-js" lang="en"> 
	<head>
	<?php 
	$l=0;
	// print_r($product);exit;
		$product_info = $product[0];
		$seoTitle = "";
		$seoKeywords = "";
		$seoDescription = "";
		if (isset($product_info->product_id) && !empty($product_info->product_id)) {
			$seoTitle = $product_info->seo_title;
			$seoKeywords = $product_info->seo_keywords;
			$seoDescription = $product_info->seo_description;
		}
		// if(!empty($product)) {
				// foreach($product as $product_info) { $l++;
		//print_r($product_info);
	?>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $seoTitle;?></title>
        <meta name="keywords" content="<?php echo $seoKeywords;?>">
        <meta name="description" content="<?php echo $seoDescription;?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $frontend_theme_url;?>img/favicon.png">
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/animate.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/font-awesome.min.css">
		<!-- material-design-iconic-font.css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/material-design-iconic-font.css">
		<!-- chosen.min.css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/chosen.min.css">
		<!-- flexslider.css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/flexslider.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/responsive.css">
		<!-- modernizr css -->
        <script src="<?php echo $frontend_theme_url;?>js/vendor/modernizr-2.8.3.min.js"></script>
		<style>
		.old-price {
			color: #666666;
			text-decoration: line-through;
			font-size: 16px;
			font-weight: 300;
		}
		</style>
		
    </head>
	
    <body class="home-4">
		
		<?php include_once "common/header.php";?>
		
		<?php if (isset($product_info->product_id)) { ?>
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
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
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li> 
								<li><a href="<?php echo $base_url;?>welcome/productlisting/<?php echo $product_info->product_category;?>"><?php echo $category_name;?><i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active"><?php echo $product_info->product_name;?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- product-main-area-start -->
		<div class="product-main-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="flexslider">
							<ul class="slides">
								<?php if($product_info->product_image!=''){?>
								<li data-thumb="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>">
								  <img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="<?php echo $product_info->product_name;?>" />
								</li>
								<?php } if($product_info->product_image1!=''){?>
								<li data-thumb="<?php echo $base_url;?>product/<?php echo $product_info->product_image1;?>">
								  <img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image1;?>" alt="<?php echo $product_info->product_name;?>" />
								</li>								
								<?php } if($product_info->product_image2!=''){?>
								<li data-thumb="<?php echo $base_url;?>product/<?php echo $product_info->product_image2;?>">
								  <img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image2;?>" alt="<?php echo $product_info->product_name;?>" />
								</li>								
								<?php } if($product_info->product_image3!=''){?>
								<li data-thumb="<?php echo $base_url;?>product/<?php echo $product_info->product_image3;?>">
								  <img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image3;?>" alt="<?php echo $product_info->product_name;?>" />
								</li> 
								<?php } ?>								
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="product-info-main">
							<div class="page-title">
								<h1><?php echo $product_info->product_name;?></h1>
							</div> 
							<div class="product-info-price">
								<div class="price-final">
									<span class="new"><i class="fa fa-inr" aria-hidden="true"></i><span class="price-amount-<?php echo $l;?>"><?php echo $product_info->product_amount;?></span></span>
									<span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i><span class="mrp-price-amount-<?php echo $l;?>"><?php echo $product_info->prod_mrp_amt;?></span></span>
								</div> 
								<div class="product-info-stock-sku">
									<span>In stock</span>
									<div class="product-attribute">
										<span><?php echo $product_info->prod_stock;?></span>
										<span class="value">In stock</span>
									</div>
								</div>								
							</div>
							
							<div class="product-add-form">								
								<form action="#">
								<div class="product-info-select">
									<select class="classic detailselect_weight m-b-40">
											<?php 
												$product_name=$product_info->product_name;
												$this->db->where('product_name',$product_name); 
												$result=$this->db->get('product')->result();
												if($result)
												{
												 foreach($result as $res)
												{	
											?>
												<option data-weight="<?php echo $res->prod_weight;?>" data-card="<?php echo $res->product_id;?>" data-mrpvalue="<?php echo $res->prod_mrp_amt;?>" data-value="<?php echo $res->product_amount;?>" value="<?php echo $res->prod_weight;?>" data-pid="<?php echo $l;?>"><?php echo $res->prod_weight;?> -  ₹ <?php echo $res->product_amount;?></option>
												<?php } } ?>
									</select>
								</div>
									<div class="quality-button">
										<label>Qty</label>
										<input class="qty pdqty" type="text" value="1" maxlength="2">
									</div>
									 <p class="buttons_bottom_block no-print" id="add_to_cart">
                                        <?php if($product_info->prod_stock) { ?>
                                        <button class="exclusive dcardid" type="button">
                                            <span class="cardid-<?php echo $l;?> datc" data-cardid="<?php echo $product_info->product_id;?>" data-qty="1"><i class="fa fa-shopping-cart"></i> Add to cart</span>
                                        </button>
                                        <?php }else{ ?>
										    <button type='button' class="btn btn-md btn-dark disabled"> Sold out</button>
										<?php } ?>
                                    </p> 
								</form>
							</div>
							<div class="product-social-links"> 
								<div class="product-addto-links-text">
									<p><?php echo $product_info->product_description; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product-main-area-end -->
		<!-- product-info-area-start -->
		<div class="product-info-area mt-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#Details" data-toggle="tab">Specification</a></li>
							<li><a href="#Reviews" data-toggle="tab">Features</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="Details">
								<div class="valu">
									<p><?php echo $product_info->product_features; ?></p>								   
								</div>
							</div>
							<div class="tab-pane" id="Reviews">
								<div class="valu">									
									<p><?php echo $product_info->product_display_features; ?></p> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product-info-area-end -->
		<!-- onsaleproduct-area-start -->
		<div class="onsaleproduct-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Related Products</h2>
						</div>
						
						<div class="saleproduct-active">
							<!-- single-product-start -->
							<?php 
									$category_id=$product_info->product_category;
									$this->db->where('product_category',$category_id);
									$this->db->where('status',1);
									$this->db->group_by('product_name'); 
									$productresult=$this->db->get('product')->result();	if($result)
									{
										foreach($productresult as $product_info)
										{
																														
						?>
							<!-- single-product-start -->
									<div class="single-product border-left"> 
										<div class="product-img">
											<a href="<?php echo $base_url;?>welcome/productdetailed/<?php echo $product_info->product_id;?>">
													<img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="img" /></a>
										</div>
										<div class="product-text text-center">
											<h3><a href="<?php echo $base_url;?>welcome/productdetailed/<?php echo $product_info->product_id;?>"><?php echo $product_info->product_name;?></a></h3>
											<select class="sorter-options select_weight" id="get_product_code-<?php echo $product_info->product_id; ?>"> 
													<?php 
														$product_name=$product_info->product_name;
														$this->db->where('product_name',$product_name);
														$result=$this->db->get('product')->result();
														if($result)
														{
														 foreach($result as $res)
														{	
													?>
													<option data-weight="<?php echo $res->prod_weight;?>" data-card="<?php echo $res->product_id;?>" data-value="<?php echo $res->product_amount;?>" value="<?php echo $res->prod_weight;?>" data-pid="<?php echo $product_info->product_id; ?>"><?php echo $res->prod_weight;?> -  ₹ <?php echo $res->product_amount;?></option>
														<?php } } ?>
											</select><br>
											<div class="price">
												<ul>
														<li><span class="new-price price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount;?> </span></li>
												</ul>											
											</div>
											<div class="link-button">
												<ul>
													<li class="col-md-6 col-xs-6"> 
														<div class="input-group">
															<div class="input-group-addon">Qty</div>
															<input type="text" class="form-control qty-<?php echo $product_info->product_id;?> change-qty" id="qty-<?php echo $product_info->product_id;?>" data-qty="<?php echo $product_info->product_id;?>" value="1" data-changeid="<?php echo $product_info->product_id;?>" placeholder="Qty" maxlength="2"> 
														</div> 
													</li>
													<li class="col-md-6 col-xs-6"><a href="javascript:void(0);" class="add-to-card cardid-<?php echo $product_info->product_id; ?> atc" data-cardid="<?php echo $product_info->product_id;?>" data-qty="1"> <i class="fa fa-cart-plus"></i> ADD</a></li>
												</ul>
											</div>
										</div>
									</div>
							<!-- single-product-end --> 
									<?php } } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } else { ?>
		<p>product not found</p>
		<?php } ?>
<?php // } 
?>
<?php  
$this->load->view('frontend/common/footer');
?>
