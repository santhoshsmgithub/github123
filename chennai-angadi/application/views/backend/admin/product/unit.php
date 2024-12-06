<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php  
$backend_theme_url=$this->config->item('backend_theme_url'); 
$admin_url=$this->config->item('admin_url');
$base_url=$this->config->item('base_url'); 
$product=$products[0];


 ?>


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
        <li><a href="#" class="active"> Edit Product</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Edit Product</span></h3>
      </div>
	  
	<div class="row-fluid">
        <div class="span12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4> <span class="semi-bold"></span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form  class="form-no-horizontal-spacing"   id="addform"  name="rentform"  method="post" enctype="multipart/form-data">	
              <div class="row-fluid column-seperation">			  
				<div class="span12"> 
					<div class="row-fluid">	
					<div class="add_filed">
					<?php 
									// $product_name=$product->product_code;
									// $this->db->where('product_code',$product_name);
									// $result=$this->db->get('product');
									 
									$i = 0;

									// print_r($products);exit;
									 foreach($products as $res)
									{	$i++;
									//print_r($res);
					?>
					<input type="hidden" name="product_code" value="<?php echo $res->product_code;?> ">
					<input type="hidden" name="product_name" value="<?php echo $res->product_name;?> ">
					<input type="hidden" name="product_image" value="<?php echo $res->product_image;?> ">
					<input type="hidden" name="product_image1" value="<?php echo $res->product_image1;?> ">
					<input type="hidden" name="product_image2" value="<?php echo $res->product_image2;?> ">
					<input type="hidden" name="product_image3" value="<?php echo $res->product_image3;?> ">
					<input type="hidden" name="product_image4" value="<?php echo $res->product_image4;?> ">
					<input type="hidden" name="product_image5" value="<?php echo $res->product_image5;?> ">
					<input type="hidden" name="product_category" value="<?php echo $res->product_category;?> ">
					<input type="hidden" name="product_subcategory" value="<?php echo $res->product_subcategory;?> ">
					<input type="hidden" name="product_description" value="<?php echo $res->product_description;?> ">
					<input type="hidden" name="product_features" value="<?php echo $res->product_features;?> ">
					<input type="hidden" name="product_shipping" value="1">
					<input type="hidden" name="product_display_features" value="<?php echo $res->product_display_features;?> ">
					<input type="hidden" name="seo_title" value="<?php echo $res->seo_title;?> ">
					<input type="hidden" name="seo_description" value="<?php echo $res->seo_description;?> ">
					<input type="hidden" name="seo_keywords" value="<?php echo $res->seo_keywords;?> ">
					<input type="hidden" name="prod_hot" value="<?php echo $res->prod_hot;?> ">
					<input type="hidden" name="prod_new" value="<?php echo $res->prod_new;?> ">
					<input type="hidden" name="prod_best" value="<?php echo $res->prod_best;?> ">
					<input type="hidden" name="prod_feau" value="<?php echo $res->prod_feau;?> ">
			
						<div class=" ">									
							<div class="field_wrapper">										
								<div class="span3">
									<div class="row-fluid">
										<div class="span5"> <label>Weight </label> </div>
										<div class="span12"> 
											<input type="hidden" name="arraycount[]" value=""  />	
											<input type="hidden" name="prod_weight_id<?php echo $i; ?>" value="<?php echo $res->product_id;?> ">

											<select name="prod_weight<?php echo $i; ?>" class="span12">
												<option value="">---Select Product quantity ----</option>
												<?php foreach($quantity as $quantity_info) { ?>
												<option <?php if($res->prod_weight==$quantity_info->quantity_name){ echo "selected"; }else { }?>><?php echo $quantity_info->quantity_name;?></option>
												<?php } ?>
											</select> 
										</div>
									</div>
								</div>
								
								<div class="span3">
									<div class="row-fluid">
										<div class="span6"> <label>MRP Amount</label> </div>
										<div class="span12">
											<input class="span12" type="text"  name="prod_mrp_amt<?php echo $i; ?>"  value="<?php echo $res->prod_mrp_amt;?>"/>
										</div>
									</div>
								</div>
								<div class="span3">
									<div class="row-fluid">
										<div class="span6"> <label>Sell Amount</label> </div>
										<div class="span12">
											<input class="span12" type="text" id="lat" name="product_amount<?php echo $i; ?>"  value="<?php echo $res->product_amount;?>"/>
										</div>
									</div>
								</div>
								
								<div class="span2">	
									<div class="row-fluid">
										<div class="span6"> <label> Stock</label> </div>
										<div class="span12">
											<input class="span12" type="text" id="lat" name="prod_stock<?php echo $i; ?>" value="<?php echo $res->prod_stock;?>"/>
										</div>
									</div>											
								</div>
								
								<div class="span1">	
									<?php if($i==1){ ?><a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-circle"></i></a> <?php } ?>
								</div>										
							</div>
							</div>
						<?php }   ?> 	
					</div>  	
						</div>	
				
				</div>
               </div>
				<div class="form-actions">
		
					<div class="pull-right">
					  <button type="button" class="btn btn-danger btn-cons add-btn"  id="add-btn"><i class="icon-ok"></i> Save</button>
					  <button type="button" class="btn btn-white btn-cons">Cancel</button>
					</div>
				  </div>
			</form>
            </div>
          </div>
        </div>
      </div>

	<script src="<?php echo   $backend_theme_url ?>plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var maxField = 5; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.add_filed'); //Input field wrapper
		   // var fieldHTML = ; //New input field html 
			var x = <?php echo count($products);?>; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append('<div class="row-fluid"><div class="field_wrapper"><div class="span3"><div class="row-fluid"><div class="span12"><input type="hidden" name="arraycount[]" value=""/><select name="prod_weight'+x+'" class="span12"><option value="">---Select quantity ----</option><?php foreach($quantity as $quantity_info) { ?><option><?php echo $quantity_info->quantity_name;?></option><?php } ?></select> </div></div></div><div class="span3"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="prod_mrp_amt'+x+'"/></div></div></div><div class="span3"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="product_amount'+x+'"  value=""/></div></div></div><div class="span2"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="prod_stock'+x+'" /></div></div></div><div class="span1"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fa fa-minus-circle"></i></a></div></div></div>'); 
				}
			});
			
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
	</script>
		  <?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
// $this->load->view('backend/admin/common/editor');
?> 