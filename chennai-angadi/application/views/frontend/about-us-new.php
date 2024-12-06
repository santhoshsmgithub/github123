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
                            <li class="nav-item"><span class="current-page">About Us</span></li>
                        </ul>
                    </nav>
                </div>


                <div class="page-contain category-page no-sidebar">
                    <div class="container body-content">
                        <div class="row">        
                            <div class="col-md-12">
                                <h4><strong>Who We are?</strong></h4>
                        <p>The best organic online store in India. chennaiangadi.com is an online supermarket for all your daily needs. Organic Online shopping now made easy with a wide range of groceries and home needs</p>
                        <ul>
                            <li>People think that natural food is a great idea, but just too expensive not true.</li>
                            <li>We aim to be as competitive as we can be on price, and we often manage to undercut some of our supermarket chain neighbours.</li>
                            <li>Bet it upsets them! It’s because we can buy direct from the suppliers for many products and we can get even keener prices</li>
                            <li>We never sell food which contains artificial sweeteners, flavours, colours, preservatives, or anything else artificial. We also never have, and never will, sell GMO foods, or sell meat from animals fed GMO food.</li>
                        </ul><br/>
                        <h4><strong>Why organic?</strong></h4>
                        <p>In a nutshell, organic farming means it’s food as it should be, food you can trust, food that doesn’t cost the earth, and food where the animals come first.Organic farming is a conscientious way of tending to the land, that’s not only better for you and the environment, but it tastes much better too!</p>
                        <h4><strong>The Reason to buy from us</strong></h4>
                        <p>Working with only the best farmers and suppliers from up and down the country and across India, we always provide the best quality organic produce harvested in each season. Our growers range in size and are chosen based on their years of experience with each crop type, with some specialising in tomatoes, sprouts, wheat or root vegetables, and others taking a more generalist approach, growing mixed organic crops.</p>
                        <p>From the budding agricultural enthusiasts to the seasoned farmers whose lands have been passed down from generation to generation, all our suppliers farm organically to produce nutritious and healthy fruits and vegetables. We stock only the finest Organic Brands</p>
                        <p>It goes without saying, but here at the chennaiangadi delivering is what we do best! Passionate about ensuring organic produce is accessible to the many and supporting local farms & growers, chennaiangadi. has been making flexible and always convenient deliveries to happy customers.</p>	
                            </div>        
                        </div>
                    </div>
                </div>
                


            
            </div>
        </div>
		<?php  
$this->load->view('frontend/common/footer');
?>