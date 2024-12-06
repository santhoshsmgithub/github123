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
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">About US</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->		
		<!-- about-main-area-start -->
		<div class="about-main-area ptb-40">
			<div class="container">				
					<h3><strong>Who We are?</strong></h3>
					<p>The best organic online store in India. chennaiangadi.com is an online supermarket for all your daily needs. Organic Online shopping now made easy with a wide range of groceries and home needs</p>
					<ul>
						<li><i class="fa fa-check"></i> People think that natural food is a great idea, but just too expensive not true.</li>
						<li><i class="fa fa-check"></i> We aim to be as competitive as we can be on price, and we often manage to undercut some of our supermarket chain neighbours.</li>
						<li><i class="fa fa-check"></i> Bet it upsets them! It’s because we can buy direct from the suppliers for many products and we can get even keener prices</li>
						<li><i class="fa fa-check"></i> We never sell food which contains artificial sweeteners, flavours, colours, preservatives, or anything else artificial. We also never have, and never will, sell GMO foods, or sell meat from animals fed GMO food.</li>
					</ul><br/>
					<h3><strong>Why organic?</strong></h3>
					<p>In a nutshell, organic farming means it’s food as it should be, food you can trust, food that doesn’t cost the earth, and food where the animals come first.Organic farming is a conscientious way of tending to the land, that’s not only better for you and the environment, but it tastes much better too!</p>
					<h3><strong>The Reason to buy from us</strong></h3>
					<p>Working with only the best farmers and suppliers from up and down the country and across India, we always provide the best quality organic produce harvested in each season. Our growers range in size and are chosen based on their years of experience with each crop type, with some specialising in tomatoes, sprouts, wheat or root vegetables, and others taking a more generalist approach, growing mixed organic crops.</p>
					<p>From the budding agricultural enthusiasts to the seasoned farmers whose lands have been passed down from generation to generation, all our suppliers farm organically to produce nutritious and healthy fruits and vegetables. We stock only the finest Organic Brands</p>
					<p>It goes without saying, but here at the chennaiangadi delivering is what we do best! Passionate about ensuring organic produce is accessible to the many and supporting local farms & growers, chennaiangadi. has been making flexible and always convenient deliveries to happy customers.</p>				
			</div>
		</div><br><br>
		<!-- about-main-area-end -->
		<!-- our-mission-area-start -->
		<!-- <div class="our-mission-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson">
							<h3>Why<span>We do?</span></h3>
							<p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson">
							<h3>Our<span>Mission</span></h3>
							<p>We aim to be as competitive as we can be on price, and we often manage to undercut some of our supermarket chain neighbours. Bet it upsets them!  It’s because we can buy direct from the suppliers for many products and we can get even keener prices…</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson">
							<h3>Our<span>Vision</span></h3>
							<p>We never sell food which contains artificial sweeteners, flavours, colours, preservatives, or anything else artificial. We also never have, and never will, sell GMO foods, or sell meat from animals fed GMO food.</p>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- our-mission-area-end -->
		<?php  
$this->load->view('frontend/common/footer');
?>