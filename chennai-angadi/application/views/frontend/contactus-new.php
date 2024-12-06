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
                <div class="container">
                    <nav class="biolife-nav">
                        <ul>
                            <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>                       
                            <li class="nav-item"><span class="current-page">Contact Us</span></li>
                        </ul>
                    </nav>
                </div>


                <div class="page-contain category-page no-sidebar">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-info">
                                    <h3>Contact info</h3>
                                    <p><i class="fa fa-map-marker"></i> <strong>Corporate Office</strong><br/>New no 15, Old no 8, Muthu Street,<br/> Mylapore, Chennai - 600004<br/><i class="fa fa-mobile"></i> +91 90946 76665<br/><i class="fa fa-envelope"></i> <a href="#">care@chennaiangadi.com</a>
                                    </P>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts">
                                <div class="contact-form">
                                    <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                                    <form method="post" method="contactform" id="contactform">
                                        <!-- <label for="shipping_name">Name*</label>
                                        <input type="text" name="shipping_name" id="shipping_name" value="" placeholder="Name">  -->
                                        <input type="text" name="name" class="col-lg-12" placeholder="Name*" /> 
                                        <input type="email" name="email" class="col-lg-12" placeholder="Email*" /> 
                                        <input type="text" name="phone" class="col-lg-12" placeholder="Mobile*" /> 
                                        <textarea name="message" placeholder="Message" class="col-lg-12"  cols="30" rows="5"></textarea>
                                        <input type="submit"  value="Submit">								
                                    </form>
                                </div>	
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