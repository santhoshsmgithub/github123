<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php  
	$backend_theme_url=$this->config->item('backend_theme_url'); 
	$admin_url=$this->config->item('admin_url');
	$base_url=$this->config->item('base_url'); 
 ?>
 <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
   
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
	
	 <div class="content">  
		<div class="page-title">	
			<h3>Dashboard of <?php echo $this->session->userdata('username');?> </h3>		
		</div>
	   <div id="container">
		<div class="row-fluid spacing-bottom 2col">	
			<div class="span3 ">	
				<div class="tiles blue added-margin">
				  <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						
					</div>		
					<div class="tiles-title">
						Products
					</div>	
					<div class="heading">
					<span class="animate-number" data-value="<?php echo $tot_pdct;?>" data-animation-duration="1200">0</span>
											
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
						<div class="bar animate-progress-bar" data-percentage="<?php echo $tot_pdct;?>"></div>
					</div>					
					
					</div>	
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles green added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
													
					</div>		
					<div class="tiles-title">
						Users
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="<?php echo $tot_users;?>" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="<?php echo $tot_users;?>%"></div>
					</div>				
					
				 </div>
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles red added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
													
					</div>		
					<div class="tiles-title">
						Orders
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="<?php echo $tot_orders;?>" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="<?php echo $tot_orders;?>%"></div>
					</div>				
					
				 </div>
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles purple added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>													
					</div>		
					<div class="tiles-title">
						Enquiry
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="<?php echo $tot_enq;?>" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="<?php echo $tot_enq;?>%"></div>
					</div>				
					
				 </div>
				</div>
			</div>
			<!--
            <div class="span3 ">
				<div class="tiles red added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
													
					</div>		
					<div class="tiles-title">
						Sub domains
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="<?php echo $tot_subdomain;?>" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="<?php echo $tot_subdomain;?>%"></div>
					</div>				
					
				 </div>
				</div>
			</div>
         -->
					
		</div>  
		<!--<div class="grid-title">
		  <h4>Products<span class="semi-bold"></span>
		  
		  </h4>
		  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
		</div>
		<div class="row-fluid"> 
        <div class="span12">
          <div class="grid simple ">
		 <div class="grid-body ">
              <div class="row-fluid">
                <table class="table table-hover table-condensed" id="example">
                  <thead>
                    <tr>
                      <th width="1%"><div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                      
                        </div></th>
                    
										<th>Id</th>
										<th>Product Code </th>
										<th>Product Name </th>
										<th>Product Image </th>
										<th>Product Amount </th>
										<th>Product Category </th>
										<th>Status</th>

                    </tr>
                  </thead>
                  <tbody>
				  		<?php 
						if(!empty($products)) { 
							$l=0;
							 $base_url=$this->config->item('base_url');
							foreach($products as $products_info) {
							$l++; ?>
                    <tr>
                       
                      <td valign="middle"><?php echo $products_info->product_id;?></td>
					   <td valign="middle"><?php echo $products_info->product_code;?></td>
                      <td valign="middle"><?php echo $products_info->product_name;?></td>
  <td valign="middle"><a  target="_new" href="<?php echo  $base_url. "product/".$products_info->product_image;?>"><img src="<?php echo  $base_url. "product/".$products_info->product_image;?>" width="75" height="30" alt="" /></a></td>  
<td valign="middle"><?php echo $products_info->product_amount;?></td>								
<td valign="middle"><?php echo $products_info->product_category;?></td>
					 <td><?php  if($products_info->status==1) {?>    
								<button  Placeid="<?php echo $products_info->id;?>"   action='1' class="btn btn-mini btn-success status-btn">Approved</button>
								<?php  } else { ?>
								<button Placeid="<?php echo $products_info->id;?>" action='0' class="btn btn-mini btn-danger status-btn">UnApproved</button>
								<?php } ?>
								</td>      
                    
                    </tr>
					<?php } } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
			</div>
			</div>
			</div>-->
		<div class="grid-title">
			<h4>Recent Orders<span class="semi-bold"></span></h4>
			<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
		</div>
		<div class="row-fluid"> 
			<div class="span12">
				<div class="grid simple ">
					<div class="grid-body ">
						<div class="row-fluid">
							<table class="table table-hover table-condensed" id="example">
								<thead>
									<tr> 								
										<th>SI.No</th>
										<th>Billing name</th>
										<th>Order Id </th>
										<th>Payment Status</th>
										<th>Delivery Status </th>
										<th>View</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									if(!empty($shipping)) { 
										$l=0;
										 $base_url=$this->config->item('base_url');
										foreach($shipping as $shipping_info) {
										$l++; ?>
									<tr> 
										<td valign="middle"><?php echo $l;?>.</td>
										<td valign="middle"><?php echo ucfirst($shipping_info->billing_name);?></td>
										<td valign="middle"><?php echo $shipping_info->order_id;?></td>
										<td><?php  if($shipping_info->payment_status==1) {?>    
											<button  Placeid="<?php echo $shipping_info->id;?>"   action='1' class="btn btn-mini btn-success status-btn">Payed</button>
											<?php  } else { ?>
											<button Placeid="<?php echo $shipping_info->id;?>" action='0' class="btn btn-mini btn-danger status-btn">Not paid</button>
											<?php } ?>
										</td>     
										<td><?php if(isset($shipping_info->delivery_status) && $shipping_info->delivery_status==1) {?>    
											<button  Placeid="<?php echo $shipping_info->id;?>"   action='1' class="btn btn-mini btn-success status-btn">Delivered</button>
											<?php  } elseif(isset($shipping_info->delivery_status) && $shipping_info->delivery_status==2){ ?>
											<button Placeid="<?php echo $shipping_info->id;?>" action='2' class="btn btn-mini btn-danger status-btn">Shipping</button>
											<?php  } elseif(isset($shipping_info->delivery_status) && $shipping_info->delivery_status==3){ ?>
											<button Placeid="<?php echo $shipping_info->id;?>" action='2' class="btn btn-mini btn-danger status-btn">Cancelled</button>
											<?php  } else { ?>
											<button Placeid="<?php echo $shipping_info->id;?>" action='0' class="btn btn-mini btn-danger status-btn">Processing</button>
											<?php } ?>
										</td>  
										<td><?php echo anchor($base_url.'manage/vieworder/'.$shipping_info->id,'<i class="fa fa-eye"></i>'); ?></td>  
									</tr>
									<?php } } ?>						   
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
  <!-- END PAGE --> 
</div>
<!-- END CONTAINER --> 
<?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
?>