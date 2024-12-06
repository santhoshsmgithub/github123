<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php $admin_url=$this->config->item('admin_url');  $base_url=$this->config->item('base_url'); ?>; <?php  $backend_theme_url=$this->config->item('backend_theme_url');
$order_info=$order; ?>
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
        <li><a href="#" class="active">Order Placed</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>List  - <span class="semi-bold">Order Placed</span>  
      </div>
     
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Order Placed<span class="semi-bold"></span>
			  </h4>
				<input type="button" onclick="printDiv('print')" value="Print Invoice" />
				  <a href="<?php echo $base_url ;?>admin/order/update-shipment-status/<?php echo $order_info->id;?>"><input type="button"  value="Raise Invoice" /></a>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body">
				<div class="row-fluid">
					<div class="shoppingcart-container sho-width"  id="print">
						<div class="invoice-print">
							<div class="stat-gadget">
								<div class="bill-top-header">
									<div class="targ-s">
										<label>  </label>
									</div>
									<div class="targ-m">
										<label><strong> INVOICE</strong></label>
									</div>
									<div class="targ-e">
										<label> </label>
									</div>
								</div>
								<div class="bill-bottom-header">
									<div class="mm-logo">
										<img src="<?php echo $backend_theme_url ?>images/chennaiangadi-logo.svg">
									</div>
									<div class="mm-address">
										<p><strong>Chennai Angadi</strong><br/>
										New no 15, Old no 8, Muthu Street, Mylapore, Chennai - 600004. <br/> 
										Mobile: +91 90946 76665<br/>
										Email: care@chennaiangadi.com</p>
									</div>
								</div>
								<div class="bill-detail">
									<?php 
										//if(!empty($order)) { 
										//$l=0;
										$base_url=$this->config->item('base_url');
										//foreach($order as $order_info) {
										///$l++; 
									?>
									<div class="billing-row">										
										<div class="billing-address">
											<h2>Billing Address</h2>
											<p><?php echo $order_info->billing_name;?><br/>
												<?php echo $order_info->billing_address;?>, 											
												<?php echo $order_info->billing_city;?>, 
												<?php echo $order_info->billing_state;?> - <?php echo $order_info->billing_country;?>, <?php echo $order_info->billing_pincode;?>, 
												<!--<?php echo $order_info->billing_location;?><br/>-->
												<?php echo $order_info->billing_landmark;?>, 										
												Mobile: <?php echo $order_info->billing_phone;?><br/>
											</p>
										</div>
										<div class="delivery-address">
											<h2>Shipping Address</h2>
											<p>
												<?php echo $order_info->shipping_name;?><br/>
												<?php if($order_info->shipping_address!=" ") echo $order_info->shipping_address;?>, 
												<?php  if($order_info->shipping_city!="0") echo $order_info->shipping_city;?>, 
												<?php  if($order_info->shipping_state!="0") echo $order_info->shipping_state;?> - 
												<?php if($order_info->shipping_pincode!=" ") echo $order_info->shipping_pincode;?>, 
												<!--<?php if($order_info->shipping_country!="0") echo $order_info->shipping_country;?><br/>-->
												<?php  if($order_info->shipping_landmark!=" ") echo $order_info->shipping_landmark;?>, 
												Mobile: <?php echo $order_info->shipping_phone;?><br/>

											</p>
										</div>
										<div class="date-section">
											Order ID: <strong><?php echo $order_info->order_id;?></strong><br/>
											Order Date: <span> <?php echo date('d-m-y',strtotime($order_info->joinon)); ?>
										</div>
									</div>

									<?php //} } ?>
									
								</div>
							</div>
							<div class="gadget-container dynamic-gadget">
								<div class="shoppingcart-row qview-header">
									<div class="product-index">
										<label> S.No </label>
									</div>
									<div class="product-context">
										<label> Product </label>
									</div>
									<div class="product-price">
										<label> Price </label>
									</div>
									<div class="product-qty">
										<label> Qty </label>
									</div>
									<div class="product-subtotal">
										<label> Subtotal </label>
									</div>
								</div>
								
								<?php 
								$tot_price=0;
								$tot_qty=0;$subtot=0;
									if(!empty($orderedproduct)) { 
									
								$l=0;
								foreach($orderedproduct as $orderedproduct_info) {

								$l++; 		
						
								//$sub_tot=$cart_info->prod_amount*$cart_info->prod_qty;
								//$tot_price=$tot_price+$sub_tot;
								//$tot_qty=$tot_qty+$cart_info->prod_qty;
								//$tot_words=$tot_price;
								?>
						
								<div class="shoppingcart-row shoppingcart-body">
									<div class="product-index">
										<label> <?php echo $l;?> </label>
									</div>
									<div class="product-context">		
									<label> <?php echo $orderedproduct_info->prod_name;?> - 
									    <?php 
									        $product_id = $orderedproduct_info->prod_id;
                							$this->db->where('product_id',$product_id);
                							$product_info=$this->db->get('product')->row();	
                							echo $product_info->prod_weight;
									    ?></label> 
									</div>
									<div class="product-price">
										<label> &#8377; <?php echo $orderedproduct_info->amount;?> </label>
									</div>
									<div class="product-qty">
										<label> <?php echo $orderedproduct_info->prod_qty;?> </label>
									</div>
									<div class="product-subtotal">
										<label> &#8377;  <?php echo $orderedproduct_info->subtotal;
										$subtot +=$orderedproduct_info->subtotal
										?> </label>
									</div>
								</div>
								<?php } } ?>
								<div class="shoppingcart-row qview-footer">
									<div class="qview-total">
									
									 <label><span> Delivery :  <?php if($order_info->delivery_amt>0) { echo "&#8377; ".$order_info->delivery_amt; }else{ echo "Free"; } ?></span></label>
 
									</div>
								</div><hr>
								<div class="shoppingcart-row qview-footer">
									<div class="qview-total">
									<?php if($order_info->dis_amount>0) { ?>
									 <label><span> Discount(<?php echo $order_info->dis_amount;?> %) : &#8377; <?php $disc_amt=0;
											    $disc=$subtot * $order_info->dis_amount;	
												echo $disc_amt=$disc/100;
									    ?></span></label>
									<?php } ?>
									<label> 	<span> Total : &#8377; <?php echo $order_info->amount;?> </span> </label> 
									</div>
								</div>
							</div>
							<div class="stat-gadget">
							<?php
								/** 
								*  Function:   convert_number 
								*
								*  Description: 
								*  Converts a given integer (in range [0..1T-1], inclusive) into 
								*  alphabetical format ("one", "two", etc.)
								*
								*  @int
								*
								*  @return string
								*
								*/ 
								function convert_number($number) 
								{ 
									if (($number < 0) || ($number > 999999999)) 
									{ 
									throw new Exception("Number is out of range");
									} 
									$Gn = floor($number / 1000000);  /* Millions (giga) */ 
									$number -= $Gn * 1000000; 
									$kn = floor($number / 1000);     /* Thousands (kilo) */ 
									$number -= $kn * 1000; 
									$Hn = floor($number / 100);      /* Hundreds (hecto) */ 
									$number -= $Hn * 100; 
									$Dn = floor($number / 10);       /* Tens (deca) */ 
									$n = $number % 10;               /* Ones */ 
									$res = ""; 
									if ($Gn) 
									{ 
										$res .= convert_number($Gn) . " Million"; 
									} 
									if ($kn) 
									{ 
										$res .= (empty($res) ? "" : " ") . 
											convert_number($kn) . " Thousand"; 
									} 
									if ($Hn) 
									{ 
										$res .= (empty($res) ? "" : " ") . 
											convert_number($Hn) . " Hundred"; 
									} 
									$ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
										"Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
										"Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
										"Nineteen"); 
									$tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
										"Seventy", "Eigthy", "Ninety"); 
									if ($Dn || $n) 
									{ 
										if (!empty($res)) 
										{ 
											$res .= " and "; 
										} 
										if ($Dn < 2) 
										{ 
											$res .= $ones[$Dn * 10 + $n]; 
										} 
										else 
										{ 
											$res .= $tens[$Dn]; 

											if ($n) 
											{ 
												$res .= "-" . $ones[$n]; 
											} 
										} 
									} 
									if (empty($res)) 
									{ 
										$res = "zero"; 
									} 
									return $res; 
								} 
							?>
								<!--<div class="bill-top-footer">
									<label> Sale @Exempt = &#8377; <?php echo $order_info->amount;?> </label>
									<label> Rupees in words : <?php echo convert_number($order_info->amount);?> Only </label>
								</div>-->
								<div class="bill-top-footer">
									<p>Thank you for shopping with us and we hope to serve you again in the future<br/>
Please feel free to write to us at <strong>care@chennaiangadi.com</strong> for any queries, suggestions, complaints or anything else.</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
   
      
    </div>
	 
  </div>
  
</div>
<!-- END PAGE -->

<?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
?> 