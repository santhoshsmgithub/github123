<?php
$backend_theme_url=$this->config->item('backend_theme_url');
$admin_url=$this->config->item('admin_url');
$base_url=$this->config->item('base_url');  
$site_url=$this->config->item('site_url'); 
 ?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" id="main-menu"> 
	<!-- BEGIN MINI-PROFILE -->
	<!--<div class="user-info-wrapper">	
		<div class="profile-wrapper">
		<img src="<?php echo   $backend_theme_url ?>images/no-user.png" data-src="<?php echo   $backend_theme_url ?>images/no-user.png" data-src-retina="<?php echo   $backend_theme_url ?>images/no-user.png" width="67" height="43" />
		</div> 
		<div class="user-info">
			<div class="greeting">Hi, <span class="semi-bold"><?php echo $this->session->userdata('username');?></span></div>
		</div>
	</div>-->
	<!-- END MINI-PROFILE -->
	<!-- BEGIN MINI-WIGETS -->
	<!-- END MINI-WIGETS -->
	<!-- BEGIN SIDEBAR MENU -->	
	<p class="menu-title"> <span class="pull-right"><a href="javascript:;"><i class="icon-refresh"></i></a></span></p>
    <ul>	
		<li class="active "> 
			<a href="<?php echo $site_url?>admin/dashboard"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> </a> 
		</li>
		<li class=""> 
			<a href="<?php echo $site_url?>admin/user/list"> <i class="fa fa-file-text"></i> <span class="title">Users</span> <span class="selected"></span> </a> 
		</li>
		
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Category</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>admin/category/list">List Category</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>admin/category/add">Add Category</a></li> 
			</ul>			
		</li>
		
		<li class=""> 
			<a href="javascript:void(0);"> <i class="fa fa-bars"></i> <span class="title">Sub Category</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>admin/sub-category/list">List Sub Category</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>admin/sub-category/add">Add Sub Category</a></li> 
			</ul>			
		</li>
	<!--	<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Area</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listarea">List Area</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addarea">Add Area</a></li> 
			</ul>			
		</li>-->
		
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Quantity</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>admin/quantity/list">List quantity</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>admin/quantity/add">Add quantity</a></li> 
			</ul>			
		</li>
		
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Products</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>admin/product/list">List Products</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>admin/product/add">Add Product</a></li> 
			</ul>
		</li>
		 <li class=""> 
			<a href="<?php echo $site_url?>admin/product/stock"> <i class="fa fa-file-text"></i> <span class="title">Product Stock</span> <span class="selected"></span> </a> 
		</li>
		
		<li class=""> 
			<a href="<?php echo $site_url?>admin/product/cost"> <i class="fa fa-file-text"></i> <span class="title">Product Cost</span> <span class="selected"></span> </a> 
		</li>
		
		 <li class=""> 
			<a href="<?php echo $site_url?>admin/email/subscribers"> <i class="fa fa-file-text"></i> <span class="title"> EmailSubscripe</span> <span class="selected"></span> </a> 
		</li>
		
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Coupon</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>admin/coupon/list">List Coupon</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>admin/coupon/add">Add coupon</a></li> 
			</ul>			
		</li>
		<!--<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">sub Category</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listsubcategory">List sub Category</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addsubcategory">Add sub Category</a></li> 
			</ul>
			
		</li>
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">sub sub Category</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listssubcategory">List sub sub Category</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addssubcategory">Add sub sub Category</a></li> 
			</ul>			
		</li>
			<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Testimonials</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listtestimonials">List Testimonials</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addtestimonials">Add Testimonials</a></li> 
			</ul>
			
		</li>-->
		
		<!--
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Customers</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listcustomer">List Customers</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addcustomer">Add Customer</a></li> 
			</ul>
		</li>  	
		<li class=""> 
			<a href="javascript:;"> <i class="fa fa-bars"></i> <span class="title">Customer Favorite</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				<li><a href="<?php echo $this->config->item('base_url');?>manage/listfproduct">List Products</a></li>
				<li><a href="<?php echo $this->config->item('base_url');?>manage/addfproduct">Add Product</a></li> 
			</ul>
		</li>	  --> 
		 <li class=""> 
			<a href="<?php echo $site_url?>admin/slider/list"> <i class="fa fa-file-text"></i> <span class="title">Main Slider</span> <span class="selected"></span> </a> 
		</li>
		
	    <!--<li class=""> 
			<a href="<?php echo $site_url?>manage/listenquiry/"> <i class="fa fa-file-text"></i> <span class="title">Cart Detail</span> <span class="selected"></span> </a> 
		</li>
		 <li class=""> 
			<a href="<?php echo $site_url?>manage/listwishlist/"> <i class="fa fa-file-text"></i> <span class="title">Wish List</span> <span class="selected"></span> </a> 
		</li>-->
		<li class=""> 
			<a href="<?php echo $site_url?>admin/order/list"> <i class="fa fa-file-text"></i> <span class="title">Shipping & billing</span> <span class="selected"></span> </a> 
		</li>
         
		  <!--<li class=""> 
			<a href="<?php echo $site_url?>manage/listproductenquiry/"> <i class="fa fa-file-text"></i> <span class="title"> Enquiry</span> <span class="selected"></span> </a> 
		</li>-->
		 <li class=""> 
			<a href="<?php echo $site_url?>admin/email/contact"> <i class="fa fa-file-text"></i> <span class="title"> Contact Email</span> <span class="selected"></span> </a> 
		</li>
    </ul>
	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
</div>