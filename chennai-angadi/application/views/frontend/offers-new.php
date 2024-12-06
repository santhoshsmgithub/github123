
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
					<li class="nav-item"><span class="current-page">Today Offers</span></li>
				</ul>
			</nav>
		</div>
		<div class="page-contain category-page no-sidebar">
			<div class="container body-content">
				<div class="col-md-12">
					<div class="row today-offer">
                    <?php foreach($coupon as $coupon_info){ ?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">Coupon No:</th>
									<th scope="col"><?php echo  $coupon_info->c_no?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Description:</th>
									<td><?php echo  $coupon_info->description?></td>
								</tr>
								<tr>
									<th scope="row">Discount (%):</th>
									<td><?php echo  $coupon_info->dis_amount?> %</td>
								</tr>
								<tr>
									<th scope="row">Minimum Amount:</th>
									<td colspan="2"><i class="fa fa-inr"></i> <?php echo  $coupon_info->min_amount?></td>
								</tr>
								<tr>
									<th scope="row">Expiry On:</th>
									<td colspan="2"><i class="fa fa-inr"></i> <?php echo  date('d-m-Y',strtotime($coupon_info->expire_date));?></td>
								</tr>
							</tbody>
						</table>
                        <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		<?php  
$this->load->view('frontend/common/footer');
?>