<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');

// $shipping=$shipping[0];
?>
         
		<div class="section-element-area ptb-80">
			<!-- Start breadcume area -->
			<div class="container">
				<div class="col-md-offset-1 col-md-10 col-md-offset-1 text-center" >
					<img src="<?php echo $frontend_theme_url;?>img/fail.png" alt="">
					<h1 style="font-size:30px;font-family:"> Oops!</h1>					
					<h4>We've got some bad news. Your order has been cancelled. We couldn't process your online payment</h4>
					<a href="<?php echo $base_url;?>" class="btn btn-success">Back to home</a>
				</div>
			</div>
		</div>
		<?php  
$this->load->view('frontend/common/footer');
?>