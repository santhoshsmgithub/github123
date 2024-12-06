<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');  
?>

<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');
$seoTitle = "Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi";
$seoKeywords = "online organic grocery, online organic grocery chennai, online organic grocery tamilnadu, online organic grocery shopping, online organic grocery store, online organic supermarket, organic grocery chennai, buy organic groceries online, food shopping online, original karupatti, best quality palm jaggery, certified organic producsts";
$seoDescription = "The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs. Online shopping now made easy with a wide range of organic groceries and home needs. Healthy organic food from Chennai angadi Organic";

if (isset($product) && count( (array) $product)) {
    $product_info = $product[0];
    if (isset($product_info->product_id) && !empty($product_info->product_id)) {
        $seoTitle = $product_info->seo_title;
        $seoKeywords = $product_info->seo_keywords;
        $seoDescription = $product_info->seo_description;
    }
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="keywords" content="online organic grocery, online organic grocery chennai, online organic grocery tamilnadu, online organic grocery shopping, online organic grocery store, online organic supermarket, organic grocery chennai, buy organic groceries online, food shopping online, original karupatti, best quality palm jaggery, certified organic producsts"/>
    <meta name="description" content="The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs. Online shopping now made easy with a wide range of organic groceries and home needs. Healthy organic food from Chennai angadi Organic"/> -->
    <meta name="keywords" content="<?php echo $seoKeywords;?>"/>
	<meta name="description" content="<?php echo $seoDescription;?>"/>
    
    <!--OG Tags-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi" />
    <meta property="og:description" content="The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs." />
    <meta property="og:url" content="http://www.chennaiangadi.com/" />
    <meta property="og:site_name" content="chennaiangadi" />
    <meta property="og:image" content="https://chennaiangadi.com/themes/frontend/img/chennai-angadi-social-share.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $seoTitle;?></title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $frontend_theme_url;?>images/favicon.png" />

    <!-- <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/slick.min.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/style.css">
    <link rel="stylesheet" href="<?php echo $frontend_theme_url;?>css/ca-styles.css">

    


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18185022-29"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-18185022-29');
    </script> -->
</head>
<body class="chennaiangadi-body">

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
		
	<?php include_once "header.php";?>