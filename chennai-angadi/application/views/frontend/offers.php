
<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/common/c-header');
?>
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">Offers</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
			<!-- our-mission-area-start -->
		<div class="our-mission-area ptb-80">
			<div class="container">
				<div class="row"> 
				<?php foreach($coupon as $coupon_info){ ?>
					  <table class="table table-bordered">
							<thead>
							  <tr>
								<th>Coupon No: </th>
								<td><?php echo  $coupon_info->c_no?></td>
							  </tr>
							  <tr>
								<th>Description: </th>
								<td><?php echo  $coupon_info->description?></td>
							  </tr>
							  <tr>
								<th>Discount (%): </th>
								<td><?php echo  $coupon_info->dis_amount?> %</td>
							  </tr>
							  <tr>
								<th>Minimum Amount: </th>
								<td><i class="fa fa-inr"></i> <?php echo  $coupon_info->min_amount?></td>
							  </tr>
							  <tr>
								<th>Expiry On: </th>
								<td><?php echo  date('d-m-Y',strtotime($coupon_info->expire_date));?></td>
							  </tr>
							</thead>							
						  </table> 
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- our-mission-area-end -->

		<?php  
$this->load->view('frontend/common/footer');
?>