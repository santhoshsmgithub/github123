<?php  $backend_theme_url=$this->config->item('backend_theme_url');$frontend_theme_url=$this->config->item('frontend_theme_url'); $base_url=$this->config->item('base_url');  ?>
			<!-- newsletter-area-start -->
		<div class="newsletter-area ptb-35">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="newsletter-text">
							<h3>Sign Up for Newsletters</h3>
							<p>Subscribe to our newsletter to get out latest offers to your inbox</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="newsletter-form">
							<!-- Begin Mailchimp Signup Form -->
							
							<style type="text/css">
								#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
								/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
								   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
							</style>
							<div id="mc_embed_signup">
							<form action="https://chennaiangadi.us2.list-manage.com/subscribe/post?u=c917857864c226d0e03409de7&amp;id=ab748136fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">								
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your Email Address" required>
							    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c917857864c226d0e03409de7_ab748136fb" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							    </div>
							</form>
							</div>

							<!--End mc_embed_signup-->


							<!--<form id="subscribe" action="#">
								<input type="text" name="enquiryemail" placeholder="Enter your email address" />
								<button type="submit">Subscribe</button>
							</form>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- newsletter-area-end -->
		<!-- banner-area-2-start -->
		<div class="banner-area-2 foo-banner">
			<div class="container">
				<div class="row">
					<div class="border-b">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-banner-2">
								<div class="banner-2-img">
									<a href="#"><img src="<?php echo $frontend_theme_url;?>img/svg-icons/customer-support.svg" alt="Chennai Angadi Customer Support" title="Chennai Angadi Customer Support" /></a>
								</div>
								<div class="banner-text-2">
									<h2>+91 90946 76665</h2>
									<p>Do You Need Help!</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-banner-2">
								<div class="banner-2-img">
									<a href="#"><img src="<?php echo $frontend_theme_url;?>img/svg-icons/email-support.svg" alt="Chennai Angadi Email Support" title="Chennai Angadi Email Support" /></a>
								</div>
								<div class="banner-text-2">
									<h2>care@chennaiangadi.com</h2>
									<p>Get In Touch!</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-banner-2">
								<div class="banner-2-img">
									<a href="#"><img src="<?php echo $frontend_theme_url;?>img/svg-icons/tracking-order.svg" alt="Chennai Angadi Order Tracking" title="Chennai Angadi Order Tracking" /></a>
								</div>
								<div class="banner-text-2">
									<h2>Track Order</h2>
									<p>Order Id based track</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area-2-end -->
	<!-- footer-area-start -->
	<footer>
			<!-- footer-top-start -->
			<div class="footer-top ptb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-logo">
									<a href="#"><img src="<?php echo $frontend_theme_url;?>img/logo/chennaiangadi-logo.svg" alt="Chennai Angadi" title="Chennai Angadi" /></a>
								</div>
								<div class="footer-test">
									<p class="text-justify">The best organic online store in India. chennaiangadi.com is an online supermarket for all your daily needs. Organic Online shopping now made easy with a wide range of groceries and home needs 
									</p><br>
									<a href="<?php echo $base_url;?>aboutus">Read More</a> 
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-title">
									<h3>CUSTOMER SERVICE</h3>
								</div>
								<div class="footer-menu">
									<ul>
										<li><a href="<?php echo $base_url;?>profile">My Account</a></li>
										<li><a href="<?php echo $base_url;?>order-history">Order History</a></li>
										<li><a href="<?php echo $base_url;?>contactus">Contact Us</a></li> 
										<li><a href="<?php echo $base_url;?>privacy-policy">Privacy Policy</a></li> 
										<li><a href="<?php echo $base_url;?>terms-conditions">Terms & Conditions</a></li> 
										<li><a href="<?php echo $base_url;?>aboutus">About us</a></li>
									</ul>
								</div>
							</div>
							
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-title">
									<h3>Category</h3>
								</div>
								<div class="footer-menu">
									<ul>
									<?php 
 										if(!empty($footerproduct)) { 
										foreach($footerproduct as $category_info) { 			
									?> 
										<li><a href="<?php echo $base_url;?>welcome/productlisting/<?php echo $category_info->id;?>"><?php echo $category_info->category_title;?></a></li>
									<?php }} ?>
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-title">
									<h3>Social</h3>
								</div>
								<div class="footer-test">  
									<ul>
										<li><a href="https://www.facebook.com/chennaiangaadi" target="_blank" ><img src="<?php echo $frontend_theme_url;?>img/mobile-img/fb.png" alt="Chennai Angadi Facebook" title="Chennai Angadi Facebook" /> </li>
										<li><a href="https://www.instagram.com/chennaiangadii/" target="_blank" ><img src="<?php echo $frontend_theme_url;?>img/mobile-img/instagram.png" alt="Chennai Angadi Instagram" title="Chennai Angadi Instagram" /> </li>
										<li><a href="https://twitter.com/ChennaiAngadi" target="_blank" ><img src="<?php echo $frontend_theme_url;?>img/mobile-img/tweet.png" alt="Chennai Angadi Twitter" title="Chennai Angadi Twitter" /> </li>
										<li><a href="https://www.linkedin.com/company/chennaiangadi" target="_blank" ><img src="<?php echo $frontend_theme_url;?>img/mobile-img/linkedin.png" alt="Chennai Angadi Linkedin" title="Chennai Angadi Linkedin" /> </li>
										
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
							<div class="single-footer">
								<div class="footer-title">
																	
									<img src="<?php echo $frontend_theme_url;?>img/ISO.svg" alt="Chennai Angadi ISO 9001:2015 | ISO 22000:2018" title="Chennai Angadi ISO 9001:2015 | ISO 22000:2018" />
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-end -->
			 
			<!-- footer-bottom-start -->
			<div class="footer-bottom ptb-20">
				<div class="container">
					<div class="row copy-right-area">
					<div class="col-md-6 col-xs-12"><p>Copyright © 2018 - 2021 <a href="www.chennaiangadi.com" title="www.chennaiangadi.com">chennaiangadi.com</a> All rights reserved.</p></div>
					<div class="col-md-6 col-xs-12 text-right">
						<p>Pay Securely with 
						<img src="<?php echo $frontend_theme_url;?>img/visa.png" alt="Visa" title="Visa" /> 
						<img src="<?php echo $frontend_theme_url;?>img/master.png" alt="Master" title="Master" /> 						
						Payment Verified By 	
						<img src="<?php echo $frontend_theme_url;?>img/insta.png" alt="Instamojo" title="Instamojo" />
						</p>
					</div>						
					</div>
				</div>
			</div>
			<!-- footer-bottom-end -->
		</footer>
		<!-- footer-area-end -->
		
		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="<?php echo $frontend_theme_url;?>js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="<?php echo $frontend_theme_url;?>js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="<?php echo $frontend_theme_url;?>js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="<?php echo $frontend_theme_url;?>js/jquery.meanmenu.js"></script>
		<!-- wow js -->
        <script src="<?php echo $frontend_theme_url;?>js/wow.min.js"></script>
		<!-- jquery.countdown.min.js -->
        <script src="<?php echo $frontend_theme_url;?>js/jquery.countdown.min.js"></script>
		<!-- jquery.counterup.min.js -->
        <script src="<?php echo $frontend_theme_url;?>js/jquery.counterup.min.js"></script>
		<!-- waypoints.min.js -->
        <script src="<?php echo $frontend_theme_url;?>js/waypoints.min.js"></script>
		<!-- chosen.jquery.min.js -->
        <script src="<?php echo $frontend_theme_url;?>js/chosen.jquery.min.js"></script>
		<!-- jquery.flexslider.js -->
        <script src="<?php echo $frontend_theme_url;?>js/jquery.flexslider.js"></script>
		<!-- plugins js -->
        <script src="<?php echo $frontend_theme_url;?>js/plugins.js"></script>
		<!-- main js -->
        <script src="<?php echo $frontend_theme_url;?>js/main.js"></script>
		<!-- autocomplete js -->
        <script src="<?php echo $frontend_theme_url;?>js/jqueryui.js"></script>
        <script src="<?php echo $frontend_theme_url;?>js/vendor/modernizr-2.8.3.min.js"></script>		
	    <!-- valitation js -->		
        <script src="<?php echo $frontend_theme_url;?>js/jquery.validate.js"></script>
		<script type="text/javascript" src="<?php echo $backend_theme_url;?>valitation/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?php echo $backend_theme_url;?>valitation/jquery.validationEngine.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#myModal").modal('show');
			});
		</script>
		<script>
		$(document).ready(function(){
			$('.select_weight').on('change',function(){
				var id = $(this).find('option:selected').data('weight');
				var value = $(this).find('option:selected').data('value');
				var mrpvalue = $(this).find('option:selected').data('mrpvalue');
				var product_sid = $(this).find('option:selected').data('pid');
				var product_cardid = $(this).find('option:selected').data('card');
				$('.qty-'+product_sid).keyup(function(){var product_aty = $(this).val();
					//alert(product_aty);
					$('.cardid-'+product_sid).attr('data-qty',product_aty);
				});
				$('.cardid-'+product_sid).attr('data-cardid',product_cardid);
				$('.price-amount-'+product_sid).html('<i class="fa fa-inr"></i> '+value);
				$('.mrp-price-amount-'+product_sid).html('<i class="fa fa-inr"></i> '+mrpvalue);
				console.log(id);
				console.log(value);
				console.log(product_sid);
				console.log(product_cardid);				
			});
			
			$('.change-qty').on('keyup',function(){
				
				var id = $(this).val();
				var change_id = $(this).data('changeid');
				//alert(change_id);
				$('.cardid-'+change_id).attr('data-qty',id);
				
			});
			
			
			$('.detailselect_weight').on('change',function(){
				var id = $(this).find('option:selected').data('weight');
				var value = $(this).find('option:selected').data('value');
				var mrpvalue = $(this).find('option:selected').data('mrpvalue');
				var product_sid = $(this).find('option:selected').data('pid');
				var product_cardid = $(this).find('option:selected').data('card');
				
				 /*$('.qty-'+product_sid).on('change',function(){
					 var product_aty = $(this).val();
					//alert(product_aty);
					$('.cardid-'+product_sid).attr('data-qty',product_aty);
				});*/
				$('.cardid-'+product_sid).attr('data-cardid',product_cardid);
				$('.price-amount-'+product_sid).html(value);				
				$('.mrp-price-amount-'+product_sid).html(mrpvalue);
				//console.log(id);
			//	console.log(value);
				//console.log(product_sid);
				//console.log(product_cardid);
				
			});
			$('.select_qty').on('change',function(){
				var value = $(this).find('option:selected').val();
				var product_sid = $(this).data('qty');
				$('.cardid-'+product_sid).attr('data-qty',value);

				
			});
			$('.atc').on('click',function(){
				//alert();
				var product_id = $(this).data('cardid');
				var product_qty = $(this).data('qty');
				console.log(product_id);
				console.log(product_qty);
				$.post('<?php echo $this->config->item('base_url');?>cart/addcart',{prod_id:product_id,  prod_qty:product_qty},function(data){
			  if(data==1) {
			  //alert('Added to cart');
				$('#ca-span').html('Added to cart');
				$('#ca-alert').modal(); 
				window.setTimeout(function(){location.reload()},1000)
			  }else if(data==2)
			  {
			   $('#ca-span').html('Please login to add your wish list');
			   $('#ca-alert').modal();
			   window.setTimeout(function(){ $('.mfp-close').click(); $('#modal-login').modal()},1000)
			 
			    
			  }else if(data==3)
			  {
			    $('#ca-span').html('Sorry Product is out of stock');
			    $('#ca-alert').modal();
			  
			  }else{
			  
			      $('#ca-span').html('Please try agains');
			      $('#ca-alert').modal();
			     
			  }
			  });
			  
			});
			
			$('.dcardid').on('click',function(){
				//alert();
				var product_id = $(this).find('span').data('cardid');
				var product_qty = $('.pdqty').val();
				 //alert(product_id);
				 //alert(product_qty);
				//console.log(product_id);
			//	console.log(product_qty);
				$.post('<?php echo $this->config->item('base_url');?>cart/addcart',{prod_id:product_id,  prod_qty:product_qty},function(data){
			//   alert(data);
			
			console.log(data);
			  if(data==1) {
			  
				$('#ca-span').html('Added to cart');
			   $('#ca-alert').modal(); 
			   window.setTimeout(function(){location.reload()},1000)
			  }else if(data==2)
			  {
			     $('#ca-span').html('Please login to add your wish list');
			   $('#ca-alert').modal();
			   window.setTimeout(function(){ $('.mfp-close').click(); $('#modal-login').modal()},1000)
			 
			    
			  }else if(data==3)
			  {
			    $('#ca-span').html('Sorry Product is out of stock');
			    $('#ca-alert').modal();
			  
			  }else{
			  
			      $('#ca-span').html('Please try againss');
			      $('#ca-alert').modal();
			     
			  }
			  });
			  
			});
			
			$('.updatecart').click(function(e){
			  e.preventDefault();
			  e.stopPropagation();
			   var id=$(this).data('rowid');
			   var i=$(this).data('id');
			   var prd_id=$(this).data('prd_id');
			   //console.log(i);
			   var qty=$(".cardqty-"+i).val();
			   //console.log(qty);
			   $.post('<?php echo $this->config->item('base_url');?>cart/updatecart',{id:id,prd_id:prd_id,qty:qty},function(data){
			  if(data==1) {
			    $('#ca-span').html('Cart is updated');
			    $('#ca-alert').modal();
			    window.setTimeout(function(){ window.location.href='<?php echo $this->config->item('base_url');?>cart';},3000)
			  
			  }else if(data==3)
			  {
			    $('#ca-span').html('Sorry Product is out of stock');
			    $('#ca-alert').modal();
			  
			  }else{			     
			    $('#ca-span').html('Please try again!');
				$('#ca-alert').modal();
			  }
			  });			  
			  });
			  
			  
			$('.apply_coupon').click(function(){ 
				   var c_no=$('.c_no').val(); 	  
				   $.post('<?php echo $this->config->item('base_url');?>cart/applycoupon',{c_no:c_no},function(data){
				  //alert(data);
				  var spli=data.split('-');
				  if(data=='invalid') {
					$('#ca-span').html('Invalid Coupon Code');
					$('#ca-alert').modal();			  
				  }else if(spli[0]=='minimum') {
					$('#ca-span').html('Minimum purchased amount is '+spli[1]);
					$('#ca-alert').modal();		  
				  }else if(data=='success') {
					$('#ca-span').html('Coupon applied success');
					$('#ca-alert').modal();
					window.setTimeout(function(){ window.location.href='<?php echo $this->config->item('base_url');?>cart';},3000)
				  }
				  });			  
			});			  
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){			
		$("#login_form").validate({
			  rules: { 
				email:{
					required:true,
					email: true,
				},				
				password:"required",			
			},
			messages: { 
				email: "Please enter a valid email address",
				password:"Please enter your password"
			},
			submitHandler: loginSubmitForm	
       });  
			function loginSubmitForm()
	   {		
			var url = "<?php echo $base_url;?>user/login";		  
			$.ajax({
				type: 'POST',
				url: url,
				data: $('#login_form').serialize(),
				success: function (data) { 
					if(data==0) {
						$('#myModal2').modal('hide');
					    $('.mfp-close').click();
                        $('#ca-span1').html('Login is unsuccessfull!Please try again later.');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  $('#myModal2').modal(); },3000)					
					}else{
						$('#myModal2').modal('hide');
						$('.mfp-close').click();
						$('#ca-span1').html('Login is successfull!');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); },3000)					 
					} 
				}  
			});
				return false;
		}  /* form submit */	

		
		$("#fwd_login_form").validate({
			  rules: { 
				email:{
					required:true,
					email: true,
				} 		
			},
			messages: { 
				email: "Please enter a valid email address" 
			},
			submitHandler: fwdloginSubmitForm	
       });  
			function fwdloginSubmitForm()
	   {		
			var url = "<?php echo $base_url;?>cart/passwordreset";		  
			$.ajax({
				type: 'POST',
				url: url,
				data: $('#fwd_login_form').serialize(),
				success: function (data) { 
				
 					if(data==1) {							
						$('#fgtpwd').modal('hide');
						$('.mfp-close').click();
						$('#ca-span1').html('Check your mail');
					    $('#ca-alert1').modal();	
			           window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); },3000)
					}else{
						$('#fgtpwd').modal('hide');
					    $('.mfp-close').click();
                        $('#ca-span1').html('Invalid account!Please try again later.');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click(); location.reload(); },3000)		 
					} 
				}  
			});
				return false;
		}  /* form submit */		
		
		$("#register-form").validate({
			  rules: { 
				name:"required",				
				email:{
					required:true,
					email: true,
				},	
				phone: {
					required: true,
					number: true,					
					minlength: 10
				}, 				
				password:"required",			
			},
			messages: { 				
				name: "Please enter your name",				
				email: "Please enter a valid email address",
				phone: {
						required: "Please enter your phone number",
						number: "Please enter only numeric value",
						
						minlength: "Your comments must be at least 10 characters long"
				}, 
				password:"Please enter your password"
			},
			submitHandler: registerSubmitForm	
       });  
			function registerSubmitForm()
	   {		
			var url = "<?php echo $base_url;?>user/register";		  
			$.ajax({
				type: 'POST',
				url: url,
				data: $('#register-form').serialize(),
				success: function (data) { 
					if(data==1) {
						$('#myModal2').modal('hide');	
						$('.mfp-close').click();
                        $('#ca-span').html('Registeration completed successfully.Please Verify your Mail account');					    
					    $('#ca-alert').modal();	
						window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); }, 4000)		
					}else{			    
						$('#myModal2').modal('hide');
						$('.mfp-close').click();
                        $('#ca-span1').html('Registeration is unsuccesful.Please try again');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); },4000)
			        }
				}  
			});
				return false;
		}  
		
		
		$(".cus_email").change(function(){		
 			var email=$(this).val();
 			$.ajax({
				type : 'POST',
				url  : '<?php echo $base_url;?>user/check_email',
				data : { 'email': email },
				success :  function(data)
				{	
					if(data==1){
					    $('#aemail-error').show();
 						$('#aemail-error').text('already exit this mail id');
 						$('#sign_up').attr('disabled',true);
					}else{
					     $('#aemail-error').hide();
					     $('#sign_up').attr('disabled',false);
					}
				}
			});
		});	
		
		
		$("#subscribe").validate({
			  rules: {  				
				enquiryemail:{
					required:true,
					email: true,
				} 		
			},
			messages: { 				 
				enquiryemail: "Please enter a valid email address"				 
			},
			submitHandler: subscribeForm	
       });  
			function subscribeForm()
	   {		
			var url = "<?php echo $base_url;?>cart/subscribe";		  
			$.ajax({
				type: 'POST',
				url: url,
				data: $('#subscribe').serialize(),
				success: function (data) { 
 						$('#myModal1').modal('hide');	
						$('.mfp-close').click();
                        $('#ca-span').html('Subscribed completed successfully.');					    
					    $('#ca-alert').modal();	
						
			            window.setTimeout(function(){  location.reload(); },3000)	
 				}  
			});
				return false;
		}  
		
		
		$("#contactform").validate({
			  rules: { 
				name:"required",				
				email:{
					required:true,
					email: true,
				},	
				phone: {
					required: true,
					number: true,					
					minlength: 10
				}, 				
				message:"required",			
			},
			messages: { 				
				name: "Please enter your name",				
				email: "Please enter a valid email address",
				phone: {
						required: "Please enter your phone number",
						number: "Please enter only numeric value",
						
						minlength: "Your comments must be at least 10 characters long"
				}, 
				message:"Please enter your message"
			},
			submitHandler: contactSubmitForm	
       });  
			function contactSubmitForm()
	   {		
			var url = "<?php echo $base_url;?>cart/contact_email";		  
			$.ajax({
				type: 'POST',
				url: url,
				data: $('#contactform').serialize(),
				success: function (data) { 
					if(data==1) { 
                        $('#ca-span').html('Thanks for enquiry. My team shortly contact to you.');					    
					    $('#ca-alert').modal();	 						
			            window.setTimeout(function(){  location.reload(); },3000)
					}else{			     
                        $('#ca-span1').html('Try Again');
					    $('#ca-alert1').modal();	

			            window.setTimeout(function(){  location.reload(); },3000)						
			        }
				}  
			});
				return false;
		}  
		
		/* form submit */
		
		/* $("#sign_up").click(function(e){   
				e.preventDefault();
				e.stopPropagation();
				var name = $('#name').val();
				var email = $('#email').val();
				var phone = $('#phone').val();
				console.log(name);
				console.log(email);
				console.log(phone);
				  if(name!=''&&email!=''){
				var register = {};
			  //var valit= $("#register-form").validationEngine('validate');
			 
			   var forms=$('#register-form');
			   form = forms.serializeArray(); 
			   
				
			   for(var i = form.length; i--; ) {
					register[form[i].name] = form[i].value;
				}
			  $.post('<?php echo $this->config->item('base_url');?>user/register',{register:register},function(data){
               
			  if(data==1) {			  
						$('.mfp-close').click();
                        $('#ca-span').html('Registeration completed successfully.Please Verify your Mail account');
					    $('#ca-alert').modal();	
						window.setTimeout(function(){  $('.mfp-close').click();  $('#myModal').modal(); },3000)		
			  }else{			      
				   $('.mfp-close').click();
                        $('#ca-span1').html('Registeration is unsuccesful.Please try again');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();   $('#myModal1').modal(); },3000)
			        }
			   });
			 
			  }else{
				$('.mfp-close').click();
				$('#ca-span1').html('Please Fill the Registration Detail!');
				$('#ca-alert1').modal();	
				window.setTimeout(function(){  $('.mfp-close').click();   $('#myModal1').modal(); },3000)
			  }
			}); */
			
			  $('#enquiry_newsletter').on('click',function(){
				  //alert('dd');
				  //alert();
				  var email = $('#newsletter').val();				 
				  //console.log(email);
				  if(email!=''){
				  $.ajax({
						 type: 'POST',
						 url: '<?php echo $base_url;?>cart/enquiry_newsletter', 
						 data: {enquiryemail : email},
						 success: 
							  function(data){
								   console.log(data);
									$('.mfp-close').click();
									$('#ca-span').html('Email Enquiry is successfully Sent!');
									$('#ca-alert').modal();	
									window.setTimeout(function(){  location.reload(); },3000)
					 
							  }
						  });
				  }
				  else{
					  $('.mfp-close').click();
					   $('#ca-span').html('Email not Sent!');
					    $('#ca-alert').modal();	
			            window.setTimeout(function(){  location.reload(); },3000)
					 
				  }
				  
			  });
			   $('.quickview').click(function()
				{    
					//alert();
					var id = $(this).data('value');
					//alert(id);
					 $.ajax({
						 type: 'POST',
						 url: '<?php echo $base_url;?>user/quickview', 
						 data: {quickview_id : id},
						 success: 
							  function(data){
								 //alert(data);
								$('.quickview_show').html(data); //as a debugging message.
							  }
						  });// you have missed this bracket
				});
				
				
				$('.payment_mode').click(function() {
        			 var payment = $('input[name="payment"]:checked').val();
        		//	alert(payment);
        				if(payment==1){
        						$('.payment-cod').show();
        						$('.payment-pay').hide();
        				}else{
        					$('.payment-cod').hide();
        					$('.payment-pay').show();
        				}
        		  }); 
		  
			  //************************** Customer Login Form **************************
/* 			  $('#login').click(function(e){    
						e.preventDefault();
						e.stopPropagation();
						var user = $('#useremail').val();
						console.log(user);
						if(user!='')
						{
					  $.post('<?php echo $this->config->item('base_url');?>user/login',{email:$('#useremail').val(),password:$('#userpassword').val()},function(data){
				   // alert(data);
					  if(data==0) {
					    $('.mfp-close').click();
                        $('#ca-span1').html('Login is unsuccessfull!Please try again later.');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  $('#myModal').modal(); },3000)
					
					  }
					  else{
					  $('.mfp-close').click();
					   $('#ca-span').html('Login is successfull!');
					    $('#ca-alert').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); },3000)
					 
					  }
					  });
						}
						$('.mfp-close').click();
					   $('#ca-span').html('Please Fill the Login Detail!');
					    $('#ca-alert').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  $('#myModal').modal(); },3000)

			  });  
			   */
				$('#clogin').click(function(e){   
						//alert("hdi");
					   e.preventDefault();
					  e.stopPropagation();
					  var user_login,user_pass;					 
					  $.post('<?php echo $this->config->item('base_url');?>user/login',{email:$('#cuseremail').val(),password:$('#cuserpassword').val()},function(data){
				   // alert(data);
					  if(data==0) {
					    $('.mfp-close').click();
                        $('#ca-span1').html('Login is unsuccessfull!Please try again later.');
					    $('#ca-alert1').modal();	
			            window.setTimeout(function(){  $('.mfp-close').click();  $('#myModal').modal(); },3000)
					
					  }
					  else{
					  $('.mfp-close').click();
					   $('#ca-span').html('Login is successfull!');
					    $('#ca-alert').modal();	
						
						
			            window.setTimeout(function(){  $('.mfp-close').click();
							window.location.href='<?php echo $this->config->item('base_url');?>billingInformation'; 
						},3000)
					 
					  }
					  });
			  });
			$('#continue').click(function(e){   
				 window.setTimeout(function(){ 
						window.location.href='<?php echo $this->config->item('base_url');?>billingInformation'; 
				},3000)										 
			});
			  
			   //************************** Customer Login Form **************************
			   $('.add-cartbtn').click(function(){
			   var prod_id=$(this).data('product');
			   var product_name=$(this).data('name');
			   var prod_qty=$(this).data('qty');
				//alert(product_name);
			//	console.log(prod_id);
				//console.log(product_name);
				//console.log(prod_qty);
			   $.post('<?php echo $this->config->item('base_url');?>cart/addcart',{prod_id:prod_id, product_name:product_name, prod_qty:prod_qty},function(data){
			 //alert(data);
			  if(data==1) {
			    $('#ca-span').html('Added to cart');
				$('#ca-alert').modal(); 
			  // window.setTimeout(function(){location.reload()},1000)
			  }else if(data==2)
			  {
			     $('#ca-span1').html('Please login to add your wish list');
			   $('#ca-alert1').modal();
			   window.setTimeout(function(){ $('.mfp-close').click(); $('#myModal').modal()},1000)
			 
			    
			  }else if(data==3)
			  {
			    $('#ca-span1').html('Sorry Product is out of stock');
			    $('#ca-alert1').modal();
			  
			  }else{
			  
			      $('#ca-span1').html('Please try again');
			      $('#ca-alert1').modal();
			     
			  }
			  });
			  
			  });
			  $('input[name="login_register"]').on('change',function(){
				   var check_id = $('input[name="login_register"]:checked').val();
				   alert(check_id);
			  });
			
			 $('#select-area').change(function(){   
			  var val = $('#select-area').val();
			   var id = $('#select-area').val();
				//alert(val);
			  //$("#filter-area").trigger("submit");
				$.post('<?php echo $this->config->item('base_url');?>welcome/filterarea',{area:val},
				function(data){
						$('#myModal').modal('hide');
						window.setTimeout(function(){location.reload()},500)
					});
				});
			
			$('#selectProductSort1').change(function(){ 
			  var val= $('#selectProductSort1').val();
			  if(val>0)
			  {
			  $('#filter-form').trigger('submit');
			  }
			});
			
			$('.login_convenience').click(function() {
					 var login_user = $('input[name="login_user"]:checked').val();
						if(login_user==1){
								$('.checkout-guest').show();
								$('.checkout-login').hide();
						}else{
							$('.checkout-guest').hide();
							$('.checkout-login').show();
						}					
				  });	
				  
				$('.contactbtn').on('click',function(){
					//alert();
					var name = $('#contact_name').val();
					var email = $('#contact_email').val();
					var phone = $('#contact_phone').val();
					var message = $('#contact_message').val();
					console.log(name);
					console.log(email);
					console.log(phone);
					console.log(message);
					if(email!=''){
				  $.ajax({
						 type: 'POST',
						 url: '<?php echo $base_url;?>cart/enquiry_contact', 
						 data: {name : name,email : email,phone : phone,message : message},
						 success: 
							  function(data){
								  console.log(data);
									$('.mfp-close').click();
									$('#ca-span').html('Email successfully Sent!');
									$('#ca-alert').modal();	
									window.setTimeout(function(){  location.reload(); },3000)
					 
							  }
						  });
				  }
				  else{
					  $('.mfp-close').click();
					   $('#ca-span').html('Email not Sent!');
					    $('#ca-alert').modal();	
			            window.setTimeout(function(){  location.reload(); },3000)
					 
				  }
				  
					
					
				});  
				  
				  
				$('.guest1').click(function() {
					 var email = $("#guestmail").val();
						$('#guestemail').val(email);
						window.location.href="<?php echo $this->config->item('base_url');?>billingInformation";
						$('#billingInformation').addClass('in');
						//$('#billingInformation').addClass('collapsed');
					
				  });	
				 $('#shippingtoo').click(function(){

				// button id
			   var id = $(this).attr('id');

				if ($(this).is(":checked")) {
             $('#shpname').val($('#cusname').val());
			 $('#shpcompany').val($('#cuscompany').val());
			 $('#shpaddress').val($('#cusaddress').val());
			 $('#shplocation').val($('#cuslocation').val());
			 $('#shplandmark').val($('#cuslandmark').val());
			 $('#shpcity').val($('#cuscity').val()); 
			 $('#shpstate').val($('#cusstate').val());
			 $('#shpcountry').val($('#cuscountry').val());
			 $('#shppincode').val($('#cuspincode').val());
             $('#shpphone').val($('#cusphone').val());		 		 
             $('#shplandmark').val($('#cuslandmark').val());		 		 
			}
		});
		
		$('.payment_mode').click(function() {
			 var payment = $('input[name="payment"]:checked').val();
 				if(payment==1){
						$('.payment-cod').show();
						$('.payment-pay').hide();
				}else{
					$('.payment-cod').hide();
					$('.payment-pay').show();
				}
		  });  
			
		// $('#search').autocomplete({
		// 		source: '<?php echo $base_url;?>welcome/searchproducts/',
		// 		minLength: 1,
		// 		select: function (event, ui) {
		// 			 window.location.href = "<?php echo $base_url;?>welcome/productdetailed/"+ui.item.id;
		// 			 return false;
		// 		}				
		// 	}).data('ui-autocomplete')._renderItem = function (ul, item) {
		// 		var inner_html = '<a><div class="list_item_container"><div class="image"><img width="50px" height="50px"  src="<?php echo $base_url."product/"?>' + item.image + '"></div><div class="label">' + item.label + '<div>‎₹'+item.price+'</div><div>'+item.weight+'</div></div></div></a><hr/>';
		// 		return $('<li></li>')
        //             .data('item.autocomplete', item)
        //             .append(inner_html)
        //             .appendTo(ul);
        // };

		$('.selectsearch').on('change',function(){
				var id = $(this).find('option:selected').data('selsea');
				$('.searchid').attr('data-searchid',id);
				console.log(id);
				console.log(value);
				console.log(product_sid);
				console.log(product_cardid);
				
		});	
		
		$('.contactbtn').on('click',function(){	
			$('#contact_name').val();
			$('#contact_email').val();
			$('#contact_phone').val();
			$('#contact_message').val();
		
		});
		
		$('#catsearch').click(function (e) {
		  // e.preventDefault();
		  //alert();
		   var names = new Array();
        if ($('#c1:checked').length) {
          var chkId = '';
          $('#c1:checked').each(function () {
            chkId += $(this).val() + ",";
			 names.push($(this).val());
          });
		  //alert(names);
		  var $hiddenInput = $('<input/>',{type:'hidden',id:'prod_cat',name:'prod_cat',value:names});
		  $hiddenInput.appendTo('#ae-hidden');
         
         
        }
        else {
          //alert('Nothing Selected');
        }
      });
	  
		$("#profile_form").validate({
			  rules: {
				name: "required",
				address:"required",
				landmark:"required",
				pincode:{
					required:true,
					number: true
				},
				phone:{
					required:true,
					number: true,
				},
				email:{
					required:true,
					email: true,
				}
			
			},
			messages: {
				name: "Please enter your name",
				address:"Please enter the billing address",
				pincode:"Please enter the pincode",
				phone:"Please enter the phone number",
				email: "Please enter a valid email address",
				landmark:"Please enter your landmark"
			},
			submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
			function submitForm()
	   {		
			var url = "<?php echo $base_url;?>user/profile-update";		  
			//var url = location.protocol + "//" + document.domain  + "/welcome/profileupdate";				  
			// alert($('#ae-shipstep-form').serialize());			
			//alert(url);
				 $.ajax({
					type: 'POST',
					url: url,
					data: $('#profile_form').serialize(),
					success: function (data) {
					//alert(data);
					if(data==1)
					{
						$('.mfp-close').click();
						$('#ca-span').html('User Profile updated!');
						$('#ca-alert').modal();	
						window.setTimeout(function(){  location.reload(); },3000)
					  
					}else{
					//alert(data);
					   $('#ca-span').html('please try again later');
    			       $('#ca-alert').modal();
					  
					}
				  } 
				//alert("Billing address submitted!");
			});
				return false;
		}  /* form submit */
		
		});
		
	</script>
	<script>
		$(document).ready(function(){
			/* validation */
			$("#ae-shipstep-form").validate({
			  rules: {
				billing_name: "required",
				billing_address:"required",
				billing_landmark:"required",
				billing_city:"required",
				billing_state:"required",
				
				billing_pincode:{
					required:true,
					number: true
				},
				billing_phone:{
					required:true,
					number: true,
				},
				shipping_name: "required",
				shipping_address:"required",
				shipping_landmark:"required",
				shipping_city:"required",
				shipping_state:"required",
				shipping_pincode:{
					required:true,
					number: true
				},
				shipping_phone:{
					required:true,
					number: true,
				},
				
				email: "required",
			},
			messages: {
				billing_name: "Please enter your name",
				billing_address:"Please enter the billing address",
				billing_pincode:"Please enter the pincode",
				billing_phone:"Please enter the phone number",
				shipping_name: "Please enter your name",
				shipping_address:"Please enter the shipping address",
				shipping_pincode:"Please enter the pincode",
				shipping_phone:"Please enter the phone number",
				billing_city: "Please enter the city",
				billing_landmark: "Please Enter your landmark",
				billing_state: "Please enter the state",
				shipping_city: "Please enter the city",
				shipping_state: "Please enter the state",
				shipping_landmark: "Please Enter your landmark",
				email: "Please enter a valid email address",
			},
			   submitHandler: submitForm	
			   });  
			   /* validation */
			   
			   /* form submit */
			   function submitForm()
			   {		
				 var url = "<?php echo $base_url;?>cart/shipping";
				 var checkout = "<?php echo $base_url;?>order_review";
				  
				//var url = location.protocol + "//" + document.domain  + "/cart/shipping";
				 
				//var checkout = location.protocol + "//" + document.domain  + "/order_review";
			 
			 
				  
				// alert($('#ae-shipstep-form').serialize());			
					//alert(url);
						 $.ajax({
							type: 'POST',
							url: url,
							data: $('#ae-shipstep-form').serialize(),
							success: function (data) {
							console.log(data);
							if(data==1)
							{
							//  alert('form was submitted');
							  window.location.href=checkout;
							  
							}else if(data==2)
								{
									$('#ca-span').html('Please login to proceed to shipping or proceed by filling guest');
									$('#ca-alert').modal();
				
							}else{
							//alert(data);
							   $('#ca-span').html('please try again later');
							   $('#ca-alert').modal();
							  
							}
						  } 
				//alert("Billing address submitted!");
			});
						return false;
				}  /* form submit */

			$('.fgtpwd').on('click',function(){ 				 
				$('#myModal2').hide(); 
				$('#fgtpwd').modal(); 
			});
		});
	</script>
	<script>
		$(document).ready(function() {
// 		    let state_searchoptions =  {
// 		      url: '<?php echo $base_url;?>welcome/search_state/',
// 		      getValue: 'state'
		        
// 		    };
// 			$("#cusstate").easyAutocomplete(state_searchoptions);
			
			
			$('#cusstate').autocomplete({
				
				
				minLength: 3,
				source: function (request, response) {
                            $.ajax({
                                url: '<?php echo $base_url;?>welcome/search_state/?term=' + $('#cusstate').val(),
                                method: 'GET',
                                dataType: 'json',
                                contentType: 'application/json',
                                success: function (data) {
                                    console.log(data);
                                    var stringList = $.map(data, function(element){
                                                         return element.state;
                                                     })
                                    response(stringList );
                                }
                        });
                 }				
			});
			
			
			$('#shpstate').autocomplete({
				
				
				minLength: 3,
				source: function (request, response) {
                            $.ajax({
                                url: '<?php echo $base_url;?>welcome/search_state/?term=' + $('#shpstate').val(),
                                method: 'GET',
                                dataType: 'json',
                                contentType: 'application/json',
                                success: function (data) {
                                    console.log(data);
                                    var stringList = $.map(data, function(element){
                                                         return element.state;
                                                     })
                                    response(stringList );
                                }
                        });
                 }				
			});
		});
	</script>
	<!--Quick View Modal -->
	<div class="modal fade quickview_show" id="quickview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
	<!--Alert Success Message Modal -->
		
	<div class="modal fade" id="ca-alert" tabindex="-1" data-focus-on="input:first" data-backdrop="static" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
		<div class="modal-dialog login-modal">
			<div class="modal-content">
				<div class="modal-header bgcolor-red">					
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Message</h4>
				</div>
				<div class="modal-body">							
						<div class="ae-login-block">
							<div class="ae-login-row">
							 <span id="ca-span"> </span>		
					   
							</div>
						</div>
						<div class="form-group text-right">
							<button type="button" id="ae-cantaccess-close " class="btn btn-success mfp-close" data-dismiss="modal">Ok</button>
						</div>						
				</div>
			</div>
		</div>
	</div>
		
	<!--Alert waring Message Modal -->		
	<div class="modal fade" id="ca-alert1" tabindex="-1" data-focus-on="input:first" data-backdrop="static" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
		<div class="modal-dialog login-modal">
			<div class="modal-content">
				<div class="modal-header bgcolor-warning">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Message</h4>
				</div>
				<div class="modal-body">							
					<div class="ae-login-block">
						<div class="ae-login-row">
						 <span id="ca-span1"> </span>		
				   
						</div>
					</div>
					<div class="form-group text-right">
						<button type="button" id="ae-cantaccess-close " class="btn btn-warning mfp-close" data-dismiss="modal">Ok</button>
					</div>						
				</div>
			</div>
		</div>
	</div>		
	<!--Login Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
		<div class="modal-dialog" role="document">
			<div class="modal-content">				
				<div class="modal-body login_show">
				<button type="button" class="close txtcolor-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>					
                    <div class="row">
                         <div class="col-md-12">
                            <!-- Nav tabs --><div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                	<form action="javascript:void(0);" method="post" id="login_form" name="login-form">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" placeholder="Enter Email" name="email" class="form-control" id="useremail" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password</label>
                                            <input type="password" placeholder="Enter Password" name="password" class="form-control" id="userpassword" required>
                                        </div>
										
                                        <div class="form-group">
                                            <a href="javascript:voic(0);" class="fgtpwd" >Forgot Password</a>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" id="login" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>                                	
                                </div>
                                
                                
                                <div role="tabpanel" class="tab-pane" id="profile">
                                	<form action="javascript:void(0);" method="post" id="register-form" name="register-form">
                                        <div class="form-group">
                                            <label for="email">Customer Name</label>
                                            <input type="text" autocomplete="off" placeholder="Enter Name" class="form-control" name="name" id="name"  required>
											<!-- regenerate_id -->
                                            <?php $this->load->library('session'); $this->session->sess_regenerate();
											// $this->session->set_userdata(array("session_id" => session_id()));
											// echo session_id();
											// echo session_regenerate_id();
											// print_r($this->session->userdata());
											// print_r($this->cart->contents());
											?>
                                            <input type="hidden" name="session_id" value="<?php echo $this->session->userdata('session_id');?>"/>
											<!-- <input type="hidden" name="session_id" value="<?php echo session_id();?>"/> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" autocomplete="off" placeholder="Enter Email" class="form-control cus_email" name="email" id="email" required>
                                            <label id="aemail-error" class="error"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" autocomplete="off" placeholder="Enter Phone Number" class="form-control" name="phone" id="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" autocomplete="off" placeholder="Enter Password" class="form-control" name="password" id="password" required>
                                        </div>						
                                        <!--<a class="btn btn-success login" id="login" href="">Login</a>-->
                                        <div class="form-group">
                                            <button type="submit" id="sign_up" class="btn btn-primary sign_up">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
						</div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>	
		<!--Forgot Modal -->
	<div class="modal fade" id="fgtpwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bgcolor-blue">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 					<h4 class="modal-title txtcolor-white" id="myModalLabel">Forgot Password</h4>
				</div>
				<div class="modal-body login_show">
					<form action="javascript:void(0);" method="post" id="fwd_login_form" name="login-form">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" placeholder="Enter Email" name="email" class="form-control" id="user_email" required>
						</div> 
						<div class="form-group text-right">
							<button type="submit" id="fwd_login" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    </body> 
</html>
			