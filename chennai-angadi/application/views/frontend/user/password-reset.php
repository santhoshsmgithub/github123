<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>

<!-- Page Contain -->
<div class="page-contain">
	<!-- Main content -->
	<div id="main-content" class="main-content">
		<!--Navigation section-->
		<div class="container body-content">
			<nav class="biolife-nav">
				<ul>
					<li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>
					<li class="nav-item"><span class="current-page">Forgot Password</span></li>
				</ul>
			</nav>
		</div>
		<div class="page-contain category-page no-sidebar">
			<div class="container body-content">
				<div class="col-md-5 forgot-pass">
					<div class="row"> <img src="<?php echo $frontend_theme_url;?>/images/svg-icons/forget-password.svg" />
						<h3>Forgot Password</h3>
						<form id="fwd_login_form" method="post">
							<div class="form-group">
								<input type="text" autocomplete="off" placeholder="Email ID*" name="email" class="form-control username" id="email" required="" aria-required="true"> </div>
							<button type="submit" class="btn col-md-12">Reset Password</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		<?php  
$this->load->view('frontend/common/footer');
?>