<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
		
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="#" class="active">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- googleMap-area-start -->
		<div class="map-area mt-20">
			<div class="container Contactus">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3>Corporate Office</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9419412244706!2d80.26907121457876!3d13.039367590811436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267d8a17c2b43%3A0xcd08e1f34cff3789!2swww.chennaiangadi.com!5e0!3m2!1sen!2sin!4v1539830050192" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>					
				</div>
			</div>
		</div>
		<!-- googleMap-end -->
		<!-- contact-area-start -->
		<div class="contact-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="contact-info">
							<h3>Contact info</h3>
							<ul>
								<li>
									<div class="col-md-6 col-xs-12">
										<i class="fa fa-map-marker"></i> <strong>Corporate Office</strong><br/>New no 15, Old no 8, Muthu Street,<br/> Mylapore, Chennai - 600004<br/><i class="fa fa-mobile"></i> +91 90946 76665<br/><i class="fa fa-envelope"></i> <a href="#">care@chennaiangadi.com</a>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="contact-form">
							<h3><i class="fa fa-envelope-o"></i>Leave a Message</h3>
							<form method="post" method="contactform" id="contactform">
							<div class="row">										
								<div class="col-lg-12">
									<div class="single-form-3"> 
										<input type="text" name="name" placeholder="Name*" /> 
									</div>
								</div>
								<div class="col-lg-6">
									<div class="single-form-3"> 
										<input type="email" name="email" placeholder="Email*" /> 
									</div>
								</div>								
								<div class="col-lg-6">
									<div class="single-form-3"> 
										<input type="text" name="phone"  placeholder="Mobile*" /> 
									</div>
								</div>
							</div>
							<div class="single-form-3">
									<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
									<br/>
									<input type="submit" value="Submit Form">
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
		<!-- contact-area-end -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			/* Google Map js */
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.810332, 90.412518)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);

			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map.png',
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>