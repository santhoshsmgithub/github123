<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');
$product_info = $product[0];
$seoTitle = "";
$seoKeywords = "";
$seoDescription = "";
if (isset($product_info->product_id) && !empty($product_info->product_id)) {
    $seoTitle = $product_info->seo_title;
    $seoKeywords = $product_info->seo_keywords;
    $seoDescription = $product_info->seo_description;
}
  ?>

<!doctype html>
<html class="no-js" lang="en"> 
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $seoTitle;?></title>    
		<meta name="keywords" content="<?php echo $seoKeywords;?>"/>
		<meta name="description" content="<?php echo $seoDescription;?>"/>
		
        
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
    </head>
    <body class="home-4">
		
	<?php include_once "header.php";?>