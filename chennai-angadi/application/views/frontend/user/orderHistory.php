<?php  
$backend_theme_url=$this->config->item('backend_theme_url');
$frontend_theme_url=$this->config->item('frontend_theme_url');
$base_url=$this->config->item('base_url');
$this->load->view('frontend/user/common/product-list-header');
?>
		<!-- breadcrumbs-area-strat -->
		<div class="breadcrumbs-area mb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="<?php echo $base_url;?>">Home<i class="fa fa-angle-right"></i></a></li>
								<li><a href="javascript" class="active">Order History</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->

		<div class="shop-main-area mb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">						 
						<div class="toolbar mb-20">
							<div class="shop-tab"> 
								<div class="list-page">
									<h3><strong>Order History</strong></h3>
								</div>
							</div>
							<div class="toolbar-sorter">
								 <a href="<?php echo $base_url;?>profile" class="btn btn-success">Back to Profile</a>
							</div>
						</div>

						<ul class="order-history" >
							
							<?php 
								if(!empty($order)) { 
									$l=0;
									 $base_url=$this->config->item('base_url');
									foreach($order as $order_info) {
									$l++;
							?>
							
							<li id="wishlist_1">

								<!--<div class="col-md-1" ><?php echo $l;?></div>-->
								<div class="col-md-2"><?php echo date('M d, Y',strtotime($order_info->joinon)); ?></div>
								<div class="col-md-1"><?php echo $order_info->order_id;?></div>
								<div class="col-md-2">
									<a class="quickview" data-toggle="modal" data-target="#quickview"  href=""  data-value="<?php echo $order_info->id;?>" id="mymodal" title="Quick View"><i class="fa fa-eye"></i> Order Details</a>
								</div>
								<div class="col-md-6 delivery-status">
									<?php if($order_info->deliver_status==1) {?>    
										<spam Placeid="<?php echo $order_info->id;?>" action='1'><img src="<?php echo $frontend_theme_url;?>img/svg-icons/delivered.svg" alt="Onine Payment title="Online Payment" /> <strong>Delivered</strong></spam>
										<?php  } elseif($order_info->deliver_status==2){ ?>
										<spam Placeid="<?php echo $order_info->id;?>" action='2' class="shipped-txt"><img src="<?php echo $frontend_theme_url;?>img/svg-icons/delivery-truck.svg" alt="Onine Payment title="Online Payment" /><strong> Shipped</strong></spam><div class="clearfix"></div>
										<?php echo $order_info->deliver_comments;?>
										<?php  } elseif($order_info->deliver_status==3){ ?>
										<spam Placeid="<?php echo $order_info->id;?>" action='3' class="cancel-txt"><strong><i class="fa fa-times" aria-hidden="true"></i> Cancelled</strong></spam><div class="clearfix"></div>
										<?php echo $order_info->deliver_comments;?>
										<?php  } else { ?>
										<spam Placeid="<?php echo $order_info->id;?>" action='0'><img src="<?php echo $frontend_theme_url;?>img/svg-icons/packing.svg" alt="Onine Payment title="Online Payment" /> <strong>Processing</strong></spam><div class="clearfix"></div><?php echo $order_info->deliver_comments;?>
										<?php } ?>
								</div>
							</li>
							<?php  } }else {?>
							<li>No Products found </li>	
							<?php } ?> 						
						</ul>
					
					</div>
				</div>
			</div>
		</div>
		<?php  
$this->load->view('frontend/user/common/footer');
?>