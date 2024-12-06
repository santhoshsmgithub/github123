<?php  $backend_theme_url=$this->config->item('backend_theme_url'); $base_url=$this->config->item('base_url');$frontend_theme_url=$this->config->item('frontend_theme_url');  ?>
<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php echo $backend_theme_url;?>images/favicon.png">
<title>Chennai Angadi | Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo  $backend_theme_url ?>plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo  $backend_theme_url ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>css/animate.min.css" rel="stylesheet" type="text/css" />
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo  $backend_theme_url ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>css/developer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo  $backend_theme_url ?>css/custom-icon-set.css" rel="stylesheet" type="text/css" />

<style>
body { 
background-color:#444 !important;
}
.login_err,.login_denied_err {
	font-size:13	px;
	color:#F00;
	
	margin-left:0px;
	//background:#666;
	//border-left:5px solid #F00;
	padding:8px;
}
</style>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="error-wrapper">
	<div class="login-container">
		<a href="<?php echo $base_url?>"><img  src="<?php echo $backend_theme_url ?>images/chennaiangadi-logo.svg" /></a>	
		<div class="grid"></div>
			<form  class="form-no-horizontal-spacing"   id="addform"  name="rentform"  action="<?php echo $this->config->item('base_url');?>admin"   method="post">	
				<input type="text" id="user_email" name="User_Email" placeholder="Username" value=""  class="validate[required,custom[email]] form-control" />
			    <input type="password"  class="validate[required]" id="user_pwd" name="User_Identity" placeholder="Password" value="" />	   
				<input type="submit"  id="login-btn" class=" btn btn-info btn-large custom-login-btn" value="login" />			
				<?php if($this->uri->segment(3)==1) { ?>
				<span class="login_err">			
				   Invalid username/password.			
				</span>
				<?php } else if($this->uri->segment(3)==2) { ?>
				 <span class="login_denied_err">			
				   Access Denied.			
				</span>
				<?php } ?>
		  </form>
		<br>
	</div>
</div>
	  <div id="push"></div>
</div>

<!-- END CONTAINER --> 

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="<?php echo  $backend_theme_url ?>plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="<?php echo  $backend_theme_url ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo  $backend_theme_url ?>plugins/pace/pace.min.js" type="text/javascript"></script>  


</body>