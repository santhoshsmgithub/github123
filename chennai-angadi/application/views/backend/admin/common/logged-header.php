<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');  ?>
<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php echo $backend_theme_url;?>images/favicon.png">
<title>Chennai Angadi | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN PLUGIN CSS -->


<link href="<?php echo   $backend_theme_url ?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo   $backend_theme_url ?>plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo   $backend_theme_url ?>plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo   $backend_theme_url ?>plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo   $backend_theme_url ?>plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen" charset="utf-8" />
<link href="<?php echo   $backend_theme_url ?>plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo   $backend_theme_url ?>plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo   $backend_theme_url ?>plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo   $backend_theme_url ?>plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- END PLUGIN CSS -->
<link href="<?php echo   $backend_theme_url ?>plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo   $backend_theme_url ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

<link href="<?php echo   $backend_theme_url ?>plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
<link href="<?php echo   $backend_theme_url ?>css/animate.min.css" rel="stylesheet" type="text/css" />
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo   $backend_theme_url ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo   $backend_theme_url ?>css/developer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo   $backend_theme_url ?>css/custom-icon-set.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $backend_theme_url ;?>valitation/validationEngine.jquery.css" />
<!-- END CSS TEMPLATE -->

<style>
.header .chat-toggler{ min-width:0px;}

</style>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -- onunload="GUnload()"-->
	<?php   $search = $this->uri->segment(1);  if( $search=="search") {  
    $load='onunload="GUnload()"';
	}  else {
	$load="";
	 }  ?>
<body class="" <?php echo  $load;?>>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu" class=""> <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="<?php echo $base_url ; ?>manage/dashboard"/>
	  <img src="<?php echo   $backend_theme_url ?>images/chennaiangadi-logo.svg" class="logo pull-left custom-logo-bg" data-src="<?php echo   $backend_theme_url ?>images/logo.png" data-src-retina="<?php echo   $backend_theme_url ?>images/chennaiangadi-logo.svg" height="92" /></a>
      <!-- END LOGO --> 
    <ul class="nav pull-right notifcation-center">	
        <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
         <!-- <li class="dropdown" id="header_inbox_bar"> <a href="email.html" class="dropdown-toggle"> <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a>
		</li><li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li> -->       
      </ul>
      </div>
      <!-- END RESPONSI
VE MENU TOGGLER --> 
      <div class="header-quick-nav"> 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
		  <ul class="nav quick-section">
			<li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle"><div class="iconset top-menu-toggle-dark"></div> </a> </li>        
		  </ul>
		  <ul class="nav quick-section">
			<li class="quicklinks"> <a href="#" class=""><div class="iconset top-reload"></div> </a> </li> 
			<!--<li class="quicklinks"> <span class="h-seperate"></span></li>-->
			
			<!--<div class="input-prepend inside search-form no-boarder">
				<span class="add-on"> <a href="#" class=""><div class="iconset top-search"></div></a></span>
				 <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;" />
			</div>-->
		  </ul>
	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
									<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important"></span> 
							Welcome  <span class="bold"><?php echo $this->session->userdata('username');?></span>									
						</div>						
					</div> 
					
				</a>	
          
				      			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
                   <li><a href="<?php echo $base_url?>admin/change-password/<?php echo $this->session->userdata('User_ID');?>">Change Password</a>
                  </li>
                  
                  <!--<li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>-->
                  </li>
                  <li class="divider"></li>                
                  <li><a href="<?php echo $this->config->item('base_url');?>admin/logout"><i class="icon-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			 	<!--	<li class="quicklinks"> <span class="h-seperate"></span></li> 
	 <li class="quicklinks"> 	
			<a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle"><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
			</a> 
				<div class="simple-chat-popup chat-menu-toggle hide">
					<div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
						 <div style="width:100px">
						 <div class="semi-bold">David Nester</div>
						 <div class="message">Hey you there </div>
						</div>
					</div>
				</div>
			</li> -->
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>