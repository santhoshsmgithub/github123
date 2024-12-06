<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
		<!-- section-element-area-start -->
		<div class="section-element-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="entry-header text-center mb-20">
							<img src="<?php echo $frontend_theme_url;?>img/1.jpg" alt="not-found-img" />
							<p>Oops! That page can’t be found.</p>
						</div>
						<div class="entry-content text-center mb-30">
							<p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
							<a href="<?php echo $base_url;?>">GO TO HOME</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section-element-area-end -->
		<?php  
$this->load->view('frontend/common/footer');
?>