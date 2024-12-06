<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php  
$backend_theme_url=$this->config->item('backend_theme_url'); 
$admin_url=$this->config->item('admin_url');
$base_url=$this->config->item('base_url');

$orderId = $deliverStatus = $joinOn = "";
if (isset($order)) {
	$orderId = $order->order_id;
	$deliverStatus = $order->deliver_status;
	$joinOn = $order->joinon;
} 
 ?>
<script type="text/javascript">
function printDiv(divName) {

    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
  <div class="footer-widget">
    <div class="progress transparent progress-success progress-small no-radius no-margin">
      <div data-percentage="79%" class="bar animate-progress-bar"></div>
    </div>
    <div class="pull-right">
      <div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
      <a href="login.html"><i class="icon-off"></i></a></div>
  </div>
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <i class="icon-angle-right"></i>
        <li><a href="#" class="active">Raise Invoice</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>List  - <span class="semi-bold">Raise Invoice</span> </h3></h3>
      </div>
     
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
            	<h4>Raise Invoice<span class="semi-bold"></span></h4>
				<div class="tools">
				<a href="<?php echo $base_url ;?>admin/dashboard" class="btn btn-white btn-sm"><i class="icon-home"></i> Home</a> / <a href="<?php echo $base_url ;?>admin/order/list" class="btn btn-white btn-sm"><i class="fa fa-bars"></i> Shipping list</a></div>
            </div> 
            <div class="grid-body">
				<div class="row-fluid">
					<div class="shoppingcart-container sho-width"  id="print">
						<div class="stat-gadget">
						<div class="grid-body no-border">
							<form  class="form-no-horizontal-spacing" id="addform" name="rentform" method="post" enctype="multipart/form-data">	
									<?php  
										$l=0;
										$base_url=$this->config->item('base_url');
										$l++; 
									?>
								<div class="row-fluid">
									<div class="span2">
										<label>Order Id: </label>
									</div>
									<div class="span5">
										<label> <?php echo $orderId; ?></label>
									</div>
								</div>
												
								<?php  
									$delivered=""; $shipping=""; $processing=""; $cancelled="";
									if($deliverStatus==1)
									{  $delivered="checked";;
									}elseif($deliverStatus==2)
									{ 
									   $shipping="checked";;
									}elseif($deliverStatus==3)
									{ 
									   $cancelled="checked";
									}else{ 
										$processing="checked";	
									}
									?>
								  <div class="row-fluid row-fluid-status">
									<div class="span2">
										<label>Status </label>
									  </div>
									  <div class="span8">
										<div class="radio">
										  <input type="radio" value="0" <?php echo $processing;?> name="deliver_status" <?php echo $processing;?> id="amt_status_yes">
										  <label for="amt_status_yes">Processing</label>
										  <input type="radio" value="2" name="deliver_status" <?php echo $shipping;?> id="amt_status_no">
										  <label for="amt_status_no">Shipping</label>
										   <input type="radio" value="1" name="deliver_status" <?php echo $delivered;?> id="delivered">
										  <label for="delivered">Delivered</label>
										  <input type="radio" value="3" name="deliver_status" <?php echo $cancelled;?> id="cancelled">
										  <label for="cancelled">Cancelled</label>
										</div>
									  </div>
									</div>
									<div class="row-fluid">
									<div class="span2">
										<label>Deliver Comments: </label>
									</div>
									<div class="span5">
										<textarea class="span12" id="deliver_comments" rows="5" name="deliver_comments"></textarea>
									</div>
								</div>  
									<div class="pull-right">
										<button type="button" class="btn btn-danger btn-cons add-btn"  id="add-btn"><i class="icon-ok"></i> Save</button>
										<button type="button" class="btn btn-white btn-cons">Cancel</button>
									</div> 
							</form>
						</div>
					</div>
				</div>
            </div>
			<div class="row-fluid">
                <table class="table table-hover table-condensed">
					<thead>
						<tr> 
							<th colspan="4">Order History</th>  
						</tr>
						<tr> 
							<th>SI.No</th>
							<th>Status</th>
							<th>Message </th>
							<th>Update at</th> 
						</tr>
					</thead>
					<tbody>				  	 
						<tr> 
							<td>1.</td>
							<td>Create Order</td>
							<td>-</td>
							<td><?php echo date('d/m/y',strtotime($joinOn)); ?></td>
						</tr>
						<?php
							$h=1;
							foreach($orderHistory as $his_info){ $h++;
						?>
							<tr>
								<td><?php echo $h; ?>.</td>
								<td><?php   
								if($his_info->deliver_status==1)
									{   echo "Delivered";
									}elseif($his_info->deliver_status==2)
									{ 
									   echo "Shipping";
									}elseif($his_info->deliver_status==3)
									{ 
									   echo "Cancelled";
									}else{ echo"Processing";
									}
								
								?></td>
								<td><?php echo $his_info->deliver_comments; ?></td>
								<td><?php echo $his_info->joinon; ?></td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
	</div>	 
  </div>
  
</div>
<!-- END PAGE -->

<?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
$this->load->view('backend/admin/common/editor');
?> 