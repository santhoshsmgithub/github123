<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');  ?>
<!doctype html> 
<html class="no-js" lang="en"> 
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi</title>    
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
		<!--Home Page Slider js-->		
		<script src="<?php echo $frontend_theme_url;?>js/jquery.min.js"></script>
		<script src="<?php echo $frontend_theme_url;?>js/bootstrap.min.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18185022-29"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-18185022-29');
		</script>

		
		
    </head>
	<!-- onload="myFunction()" -->
    <body class="home-4" >

		
			<?php include_once "common/header.php";?>
		
		
		<!--Home Page slider starts here-->
		<div id="myCarousel" class="carousel slide main-slider" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<?php 
					if(!empty($slider)) {  $s=0;
					foreach($slider as $slider_info) {
				?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $s; ?>" class="<?php if($s==0){ echo "active";}?>"></li>
				<?php  $s++;	}} ?>
			</ol>
		  <div class="carousel-inner">
			<?php 
				if(!empty($slider)) {  $s=0;
				foreach($slider as $slider_info) {
			?>
			<div class="item <?php if($s==0){ echo "active";}?> "> <img src="<?php echo  $base_url;?>slider/<?php echo $slider_info->slider_image;?>" style="width:100%" alt="Chennai Angadi">
			</div>			
			<?php $s++; } }?>
		 </div>
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
		</div>
		<!--Home Page slider end here-->
			
		
		
		<!-- slider-area-start -->
		<div class="slider-area">
			<div class="container">				
				<div class="row bg-color">					
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">							
							<div class="banner-icon">
								<img src="<?php echo $frontend_theme_url;?>img/svg-icons/free-shipping.svg" alt="Login" title="Login" />
							</div>
							<div class="banner-text">
								<h2>Free Shipping</h2>
								<p>All over India</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">
							<div class="banner-icon">
								<img src="<?php echo $frontend_theme_url;?>img/svg-icons/whatsapp.svg" alt="Whatsapp" title="Whatsapp" />
							</div>
							<div class="banner-text">
								<h2>WhatsApp Support</h2>
								<p>Place your orders in whatsapp</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">
							<div class="banner-icon">
								<img src="<?php echo $frontend_theme_url;?>img/svg-icons/payment-icon.svg" alt="Online Payment" title="Online Payment" />
							</div>
							<div class="banner-text">
								<h2>Online Payment</h2>
								<p>We accept all major cards</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">							
							<div class="banner-icon">
								<img src="<?php echo $frontend_theme_url;?>img/svg-icons/fast-delivery.svg" alt="Online Payment" title="Online Payment" />
							</div>
							<div class="banner-text">
								<h2>Fast Delivery</h2>
								<p>Dispatched in 24-48 hours</p>
							</div>							
						</div>					
				</div>
			</div>
		</div>
		<!-- slider-area-end -->
		
		<!-- onsaleproduct-area-start -->
		<div class="onsaleproduct-area ptb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="new-product">
							<div class="section-title">
								<h2>New Arrivals</h2>
							</div>
							<div class="saleproduct-active">
								<?php 
									$l=0;
									if(!empty($product_hot)) { 
									foreach($product_hot as $product_info) {
										$l++;												
								?>
									<!-- single-product-start -->
									<div class="single-product border-left"> 
										<div class="product-img">
											<a href="<?php echo $base_url;?>pd/<?php echo str_replace(' ', '-',strtolower($product_info->product_name));?>/<?php echo $product_info->product_id;?>">
													<img src="<?php echo $base_url;?>product/<?php echo $product_info->product_image;?>" alt="img" /></a>
										</div>
										<div class="product-text text-center">
											<h3><a href="<?php echo $base_url;?>pd/<?php echo str_replace(' ', '-',strtolower($product_info->product_name));?>/<?php echo $product_info->product_id;?>"><?php echo $product_info->product_name;?></a></h3>
											<select class="sorter-options select_weight" id="get_product_code-<?php echo $product_info->product_id; ?>"> 
													<?php 
														$product_code=$product_info->product_code;
														$this->db->where('product_code',$product_code);
														$result=$this->db->get('product')->result();
														if($result)
														{
														 foreach($result as $res)
														{	
													?>
													<option data-weight="<?php echo $res->prod_weight;?>" data-card="<?php echo $res->product_id;?>" data-mrpvalue="<?php echo $res->prod_mrp_amt;?>" data-value="<?php echo $res->product_amount;?>" value="<?php echo $res->prod_weight;?>" data-pid="<?php echo $product_info->product_id; ?>"><?php echo $res->prod_weight;?> -  ₹ <?php echo $res->product_amount;?></option>
														<?php } } ?>
											</select><br>
											<div class="price">
												<ul>
													<li><span class="old-price mrp-price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->prod_mrp_amt;?> </span></li>
													<li><span class="new-price price-amount-<?php echo $product_info->product_id; ?>"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_info->product_amount;?> </span></li>
												</ul>											
											</div>
											<div class="link-button">
												<ul class="row">
												    <?php if($product_info->prod_stock) { ?>
													<li class="col-md-6 col-xs-6"> 
														<div class="input-group">
															<div class="input-group-addon">Qty</div>
															<input type="text" class="form-control qty-<?php echo $product_info->product_id;?> change-qty" id="qty-<?php echo $product_info->product_id;?>" data-qty="<?php echo $product_info->product_id;?>" value="1" data-changeid="<?php echo $product_info->product_id;?>" placeholder="Qty" maxlength="2"> 
														</div> 
													</li>
													<li class="col-md-6 col-xs-6"><a href="javascript:void(0);" class="add-to-card cardid-<?php echo $product_info->product_id; ?> atc" data-cardid="<?php echo $product_info->product_id;?>" data-qty="1"> <i class="fa fa-cart-plus"></i> ADD</a></li>
												<?php }else{ ?>
												    <li class="col-md-12 col-xs-12"><button type='button' class="btn btn-md btn-dark disabled"> Sold out</button></li>
												<?php } ?>
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
		</div>
		<!-- onsaleproduct-area-end -->
		

		<!--Starts 80s Banner-->
		<div class="banner-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-img">
							<a href="pd/80s-90s-mittai-combo-pack/258"><img src="<?php echo $frontend_theme_url;?>img/banner/90s-mittai-combo.png" alt="90s Kids Mittai" title="90s Kids Mittai" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End 80s Banner-->


		<!--Starts Toys Candy Section-->
		<div class="container banner-area mb-20">
			<h3>80's & 90's Kids Mittai/Toys Candy</h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="Carousel" class="carousel slide">
							 
							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2"></li>
							</ol>
							 
							<!-- Carousel items -->
							<div class="carousel-inner category-slider">
								
							<div class="item active">
							 <div class="row">
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/fan-lollypop/418">
									<img src="<?php echo $frontend_theme_url;?>img/banner/fan-lollypop.png" alt="Fan Lollypop" title="Fan Lollypop" />
									<h2>Fan lollypop</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/watch-toy-mittai/459">
									<img src="<?php echo $frontend_theme_url;?>img/banner/watch-mittai.png" alt="Watch Toy Mittai" title="Watch Toy Mittai" />
									<h2>Watch Toy Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/balloon/420">
									<img src="<?php echo $frontend_theme_url;?>img/banner/baloon.png" alt="Baloon" title="Baloon" />
									<h2>Balloon</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/wheel-chips/291">
									<img src="<?php echo $frontend_theme_url;?>img/banner/fan-toy-mittai.png" alt="Fan Toy Mittai" title="Fan Toy Mittai" />
									<h2>Fan Toy Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/mixture/283">
									<img src="<?php echo $frontend_theme_url;?>img/banner/pan-mittai.png" alt="Pan Mittai" title="Pan Mittai" />
									<h2>Pan Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/kara-boondi/287">
									<img src="<?php echo $frontend_theme_url;?>img/banner/coconut-mittai.png" alt="Coconut Mittai" title="Coconut Mittai" />
									<h2>Coconut Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							 </div><!--.row-->
							</div><!--.item-->
							 
														 
							<div class="item">
							<div class="row">
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/color-imli-jelly/477">
									<img src="<?php echo $frontend_theme_url;?>img/banner/color-imli-jelly.png" alt="Color Imli Jelly" title="Color Imli Jelly" />
									<h2>Color Imli Jelly</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/marshmallow/295">
									<img src="<?php echo $frontend_theme_url;?>img/banner/marshmallow.png" alt="Marshmallow" title="Marshmallow" />
									<h2>Marshmallow</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/cigarette-mittai/262">
									<img src="<?php echo $frontend_theme_url;?>img/banner/cigarette-mittai.png" alt="Cigarette Mittai" title="Cigarette Mittai" />
									<h2>Cigarette Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/enji-mittai/324">
									<img src="<?php echo $frontend_theme_url;?>img/banner/inji-mittai.png" alt="Inji Mittai" title="Inji Mittai" />
									<h2>Inji Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/gold-coin-chocolate/358">
									<img src="<?php echo $frontend_theme_url;?>img/banner/gold-coin.png" alt="Gold Coin Chocolate" title="Gold Coin Chocolate" />
									<h2>Gold Coin Chocolate</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/orange-mittai/230">
									<img src="<?php echo $frontend_theme_url;?>img/banner/orange-mittai.png" alt="Orange Mittai" title="Orange Mittai" />
									<h2>Orange Mittai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							 </div><!--.row-->
							</div>
							 

					</div>
				</div>			 
			  </div>
			 </div>
			</div>
		<script>
		$(document).ready(function() {
			$('#Carousel').carousel({
				interval: 2500
			})
		});
		</script>
		
		<!--End Toys Candy Section-->
		
		
		
	
		
		<div class="banner-area sweets-section">			
			<div class="container">
			<h3>Sweets</h3>
				<div class="row">
					<div class="col-lg-6 left col-md-6 col-sm-6 col-xs-12">					
						<div class="banner mb-30">
							<div class="banner-img"><br>
								<a href="<?php echo $base_url;?>cl/sweets-&-snacks/21"><img src="<?php echo $frontend_theme_url;?>img/banner/ch_banner1.png" alt="90s Kids Mittai" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><br>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sweet-grid">					
							<div class="banner-img">							
								<a href="<?php echo $base_url;?>pd/thaen-mittai/234"><img src="<?php echo $frontend_theme_url;?>img/banner/thaen.png" alt="Thaen Mittai" /></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sweet-grid">					
							<div class="banner-img">
								<a href="<?php echo $base_url;?>pd/kai-murukku/263"><img src="<?php echo $frontend_theme_url;?>img/banner/kai-murukku.png" alt="Kai Murukku" /></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sweet-grid">			<br><br>		
							<div class="banner-img">
								<a href="<?php echo $base_url;?>pd/millet-laddu/246"><img src="<?php echo $frontend_theme_url;?>img/banner/millet-laddu.png" alt="Millet Laddu" /></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sweet-grid">				<br><br>	
							<div class="banner-img">
								<a href="<?php echo $base_url;?>pd/butter-biscuit/260"><img src="<?php echo $frontend_theme_url;?>img/banner/butter-biscuit.png" alt="Butter Biscuit" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area-end -->
		
		
		
		<div class="container banner-area mb-20">
			<h3>Savouries</h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="Carousel" class="carousel slide">
							 
							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2"></li>
							</ol>
							 
							<!-- Carousel items -->
							<div class="carousel-inner category-slider">
								
							<div class="item active">
							 <div class="row">
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/kai-murukku/263">
									<img src="<?php echo $frontend_theme_url;?>img/banner/kai-murukku-slider.png" alt="Kai Murukku" title="Kai Murukku" />
									<h2>Kai Murukku</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 25 </p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/thattai/233">
									<img src="<?php echo $frontend_theme_url;?>img/banner/thattai.png" alt="Thattai" title="Thattai" />
									<h2>Thattai</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/potato-chips/249">
									<img src="<?php echo $frontend_theme_url;?>img/banner/potato-chips.png" alt="Potato Chips" title="Potato Chips" />
									<h2>Potato Chips</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 40</p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/wheel-chips/291">
									<img src="<?php echo $frontend_theme_url;?>img/banner/wheel-chips.png" alt="Wheel Chips" title="Wheel Chips" />
									<h2>Wheel Chips</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 15 </p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/mixture/283">
									<img src="<?php echo $frontend_theme_url;?>img/banner/mixture.png" alt="Mixture" title="Mixture" />
									<h2>Mixture</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 25 </p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							   <div class="col-md-2 col-sm-4 col-xs-6">
									<a href="<?php echo $base_url;?>pd/kara-boondi/287">
									<img src="<?php echo $frontend_theme_url;?>img/banner/karaboonthi.png" alt="Kara Boondi" title="Kara Boondi" />
									<h2>Kara Boondi</h2>
									<p><i class="fa fa-inr" aria-hidden="true"></i> 25 </p>
									<button class="btn">Buy Now</button>
									</a>
								</div>
							 </div><!--.row-->
							</div><!--.item-->
							 
							<div class="item">
							 <div class="row">
							   <div class="col-md-2 col-xs-4"><a href="http://www.zoothailand.org/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/7.jpg" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.diw.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/17.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.dss.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/9.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.dip.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/10.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.dpim.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/11.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.nstda.or.th/index.php" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/12.jpg" alt="Image" style="max-height:80px;"></a></div>
							 </div><!--.row-->
							</div><!--.item-->
							 
							<div class="item">
							 <div class="row">
							   <div class="col-md-2 col-xs-4"><a href="http://www.oaep.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/13.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.ops.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/14.jpg" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="/www.tisi.go.th" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/15.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="/www.oie.go.th/" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/16.png" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://reg.thonburi-u.ac.th/registrar/home.asp" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/1.jpg" alt="Image" style="max-height:80px;"></a></div>
							   <div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th" class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/2.jpg" alt="Image" style="height:80px;"></a></div>
							 </div>
							</div>
							 

					</div>
				</div>			 
			  </div>
			 </div>
			</div>
		<script>
		$(document).ready(function() {
			$('#Carousel').carousel({
				interval: 0000
			})
		});
		</script>
		
	
		<!--Whatsapp Banner-->
		<div class="banner-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-img">
							<a href="https://chat.whatsapp.com/HS2J0qIukjwLx4OJYS373Y" target="_blank"><img src="<?php echo $frontend_theme_url;?>img/banner/whatsapp-banner.png" alt="Join Chennai Angadi Whatsapp Group" title="Join Chennai Angadi Whatsapp Group" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- productonsale-area-start -->
		<div class="productonsale-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="new-product">
							<div class="section-title">
								<h2>chennaiangadi.com – online organic store</h2>
							</div> 
							<p class="text-justify">People think that natural food is a great idea, but just too expensive not true.</p>
							<p class="text-justify">We aim to be as competitive as we can be on price, and we often manage to undercut some of our supermarket chain neighbours. </p>
							<p>Bet it upsets them!  It’s because we can buy direct from the suppliers for many products and we can get even keener prices…</p>
							<p>We never sell food which contains artificial sweeteners, flavours, colours, preservatives, or anything else artificial. We also never have, and never will, sell GMO foods, or sell meat from animals fed GMO food.</p>
						</div>	
					</div>
				</div>
			</div>
		</div><br>
		<!-- productonsale-area-end -->
	<?php
	$this->load->view('frontend/common/footer');
	?>	
			