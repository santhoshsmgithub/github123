<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php  
$backend_theme_url=$this->config->item('backend_theme_url'); 
$admin_url=$this->config->item('admin_url');
$base_url=$this->config->item('base_url'); 

$productId = $productCategory = $productSubCategory = $productCode = $productName = $productDescription = $productFeatures = $productDisplayFeatures = $seoTitle = $seoDescription = $seoKeywords = $yes = $no = $yes1 = $no1 = $yes2 = $no2 = $yes3 = $no3 = $yes4 = $no4 = $yes5 = $no5 = $productImgUrl = $productImg = $productImgUrl1 = $productImg1 = $productImgUrl2 = $productImg2 = $productImgUrl3 = $productImg3 = $productImgUrl4 = $productImg4 = $productImgUrl5 = $productImg5 = "";

if (isset($product)) {

	$productId = $product->product_id;
	$productCategory = $product->product_category;
	$productSubCategory = $product->product_subcategory;
	$productCode = $product->product_code;
	$productName = $product->product_name;
	$productDescription = $product->product_description;
	$productFeatures = $product->product_features;
	$productDisplayFeatures = $product->product_display_features;
	$seoTitle = $product->seo_title;
	$seoDescription = $product->seo_description;
	$seoKeywords = $product->seo_keywords;
	if($product->status)
	{  
		$yes="checked";
	}else{ 
		$no="checked"; 	
	}
	if($product->prod_hot)
	{  
		$yes1="checked"; 
	}else{ 
		$no1="checked"; 	
	}
	if($product->prod_new)
	{ 
		$yes2="checked";
	}else{ 
		$no2="checked"; 	
	}
	if($product->prod_best)
	{
		$yes3="checked"; 
	}else{
		$no3="checked";
	}
	if($product->prod_feau)
	{
		$yes4="checked"; 
	}else{ 
		$no4="checked"; 	
	}
	if($product->product_shipping)
	{  
		$yes5="checked";
	}else{ 
		$no5="checked"; 	
	}
	
	if ($product->product_image) {
		$productImgUrl = $base_url. "product/".$product->product_image;
		$productImg = $product->product_image;
	}
	if ($product->product_image1) {
		$productImgUrl1 = $base_url. "product/".$product->product_image1;
		$productImg1 = $product->product_image1;
	}
	if ($product->product_image2) {
		$productImgUrl2 = $base_url. "product/".$product->product_image2;
		$productImg2 = $product->product_image2;
	}
	if ($product->product_image3) {
		$productImgUrl3 = $base_url. "product/".$product->product_image3;
		$productImg3 = $product->product_image3;
	}
	if ($product->product_image4) {
		$productImgUrl4 = $base_url. "product/".$product->product_image4;
		$productImg4 = $product->product_image4;
	}
	if ($product->product_image5) {
		$productImgUrl5 = $base_url. "product/".$product->product_image5;
		$productImg5 = $product->product_image5;
	}
}
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
        <li><a href="#" class="active"> Add Product</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add Product</span></h3>
      </div>
	  
	<div class="row-fluid">
        <div class="span12">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4> <span class="semi-bold"></span> </h4>
					<div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
				</div>
				<div class="grid-body no-border">
					<form  id="addform"  name="rentform"   class="form-no-horizontal-spacing"  method="post" enctype="multipart/form-data">	
						<div class="row-fluid column-seperation">
							<div class="span12">
								<h3>Product Info </h3>
								<div class="row-fluid">
									<div class="span2">	<label>Product Category</label>	</div>
									<div class="span5">
										<select name="product_category" id="main_id"  data-placeholder="Choose a Ownership  ..." class="span12 validate[required]">
											<option value="">---Select Product Category ----</option>
											<?php foreach($category as $category_info) { ?>
											<option attr-code ='<?php echo $category_info->id;?>' value="<?php echo $category_info->id;?>" <?php if($category_info->id==$productCategory) { echo "selected"; } else { ""; } ?> ><?php echo $category_info->category_title;?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span2">	<label>Sub Category</label>	</div>
									<div class="span5">
										<div id="subcat_id"><select name="product_subcategory"   data-placeholder="Choose a Ownership  ..." class="span12 validate[required]">
										<?php if (!empty($productCategory)) {  ?>
											<?php 
													$this->db->where("main_category", $product->product_category);
													$query=$this->db->get('sub_category');
												?> 
											<?php foreach($query->result() as $sub_cate){ ?>
												<option <?php if($sub_cate->id==$product->product_subcategory) { echo "selected"; }else{ ""; } ?> value="<?php echo $sub_cate->id; ?>"><?php echo $sub_cate->category_title; ?></option> 
											<?php }  ?>
										<?php } else { ?>
										<option value="">--- First Select Product Category ----</option>
										<?php } ?>						 
										</select></div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span2">	<label>Product Code</label>	</div>
									<div class="span5">
										<input class="span12  validate[required]" type="text" name="product_code" value="<?php echo $productCode; ?>"  />
									</div>
								</div>
								<div class="row-fluid">
									<div class="span2"> <label>Product Name</label>	</div>
									<div class="span5">
										<input class="span12  validate[required]" type="text" name="product_name" value="<?php echo $productName; ?>"  />
									</div>
								</div>
								<?php if (!empty($productImg)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage" name="oldproduct" value="<?php echo $productImg;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic"   name="product_image">
									</div>
									</div>
									
								<?php if (!empty($productImg1)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image1: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl1;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage1" name="oldproduct1" value="<?php echo $productImg1;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image1: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic1"   name="product_image1">
									</div>
									</div>
									
									
								<?php if (!empty($productImg2)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image2: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl2;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage2" name="oldproduct2" value="<?php echo $productImg2;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image2: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic2"   name="product_image2">
									</div>
									</div>
									
									
								<?php if (!empty($productImg3)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image3: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl3;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage3" name="oldproduct3" value="<?php echo $productImg3;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image3: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic4"   name="product_image3">
									</div>
									</div>
									
								<?php if (!empty($productImg4)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image4: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl4;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage4" name="oldproduct4" value="<?php echo $productImg4;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image4: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic4"   name="product_image4">
									</div>
									</div>
								<?php if (!empty($productImg5)) {  ?>
								<div class="row-fluid">
										<div class="span2">
										<label>Product Image5: </label>
									</div>
									<div class="span5">
										<img src="<?php echo  $productImgUrl5;?>" width="80px" height="80px"/>
										<input type="hidden" placeholder="" class="span12" id="oldimage5" name="oldproduct5" value="<?php echo $productImg5;?>">
									</div>
								</div>
								<?php } ?>
									<div class="row-fluid">
										<div class="span2">
										<label>Change Product Image5: </label>
									</div>
									<div class="span5 add-pro-brd">
										<input type="file" placeholder="" class="span12" id="companypic5"   name="product_image5">
									</div>
									</div> 
								
								
								<div class="row-fluid">
									<div class="span2"> <label>Product Description</label> </div>
									<div class="span5">
										<textarea class="span12 aeeditor validate[required]" id="product_description" name="product_description"><?php echo $productDescription;?> </textarea>
									</div>
								</div>
								<?php if (empty($productId)) { ?>
								<div class="add_filed">
									<div class="row-fluid">									
										<div class="field_wrapper">										
											<div class="span3">
													<div class="span12"> <label>Product Weight </label> </div>
												<div class="row-fluid">
													<div class="span12"> 
														<input type="hidden" name="array_product_amount[]" value=""  />	 
														<select name="prod_weight1" class="span12">
															<option value="">---Select quantity ----</option>
															<?php foreach($quantity as $quantity_info) { ?>
															<option><?php echo $quantity_info->quantity_name;?></option>
															<?php } ?>
														</select> 
													</div>
												</div>
											</div>
											
											<div class="span3">
													<div class="span12"> <label>MRP Amount</label> </div>
												<div class="row-fluid">
													<div class="span12">
														<input class="span12" type="text" name="prod_mrp_amt1"  value=""  />
													</div>
												</div>
											</div>
											
											<div class="span3">
													<div class="span12"> <label>Sell Amount</label> </div>
												<div class="row-fluid">
													<div class="span12">
														<input class="span12" type="text" name="product_amount1"  value=""  />
													</div>
												</div>
											</div>
											
											<div class="span2">	
													<div class="span12"> <label>Product Stock</label> </div>
												<div class="row-fluid">
													<div class="span12">
														<input class="span12" type="text" id="lat" name="prod_stock1" value=""  />
													</div>
												</div>											
											</div>
											
											<div class="span1">	
												<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-circle"></i></a>
											</div>										
										</div>
									</div>								
								</div>
								<?php } ?>
								<!--<div class="row-fluid">
									<div class="span2"> <label>Product Weight</label> </div>
									<div class="span5">
										<input class="span12" type="text" id="lat" name="prod_weight" value=""  />
									</div>
								</div>-->
								<?php if (empty($productId)) { ?>
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Quick Purchase</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="prod_best" id="amt_status_yes_best_yes" <?php echo $yes;?>>
											<label for="amt_status_yes_best_yes">yes</label>
											<input type="radio" value="0" name="prod_best" id="amt_status_no_best_no" <?php echo $no;?>>
											<label for="amt_status_no_best_no">No</label>
										</div>
									</div>
								</div>
								<?php } ?>
								<div class="row-fluid">
									<div class="span2"> <label>Product Specification</label> </div>
									<div class="span5">
										<textarea class="span12 aeeditor validate[required]" id="product_features" name="product_features"><?php echo $productFeatures; ?> </textarea>
									</div>
								</div>
								
								<!--<div class="row-fluid">
									<div class="span2"> <label>Product Shipping</label> </div>
									<div class="span5">
										<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="product_shipping" id="shipping_yes">
											<label for="shipping_yes">yes</label>
											<input type="radio" value="0" name="product_shipping" id="shipping_no">
											<label for="shipping_no">No</label>
										</div>
									</div>
									</div>
								</div>-->
								
								<div class="row-fluid">
									<div class="span2"> <label>Product Display features </label> </div>
									<div class="span5">
										<textarea class="span12 aeeditor validate[required]" id="product_display_features" name="product_display_features"><?php echo $productDisplayFeatures; ?> </textarea>
									</div>
								</div>
								
								<div class="row-fluid">
									<div class="span2"> <label>  SEO Title</label> </div>
									<div class="span5">
										<textarea class="span12 validate[required]" id="seo_title" name="seo_title"><?php echo $seoTitle; ?> </textarea>
									</div>
								</div>
								
								<div class="row-fluid">
									<div class="span2"> <label>  SEO Description</label> </div>
									<div class="span5">
										<textarea class="span12 aeeditor validate[required]" id="seo_description" name="seo_description"><?php echo $seoDescription; ?> </textarea>
									</div>
								</div>
								
								<div class="row-fluid">
									<div class="span2"> <label>  SEO Keywords</label> </div>
									<div class="span5">
										<textarea class="span12 validate[required]" id="seo_keywords" name="seo_keywords">
										<?php echo $seoKeywords;?> </textarea>
									</div>
								</div>
								
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Hot Product</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="prod_hot" id="male" <?php echo $yes1;?> >
											<label for="male">yes</label>
											<input type="radio" value="0" name="prod_hot" id="female" <?php echo $yes1;?> >
											<label for="female">No</label>
										</div>
									</div>
								</div>
								
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>New Arrival</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="prod_new" id="amt_status_yes_new_yes" <?php echo $yes2;?>>
											<label for="amt_status_yes_new_yes">yes</label>
											<input type="radio" value="0" name="prod_new" id="amt_status_no_new_no" <?php echo $no2;?>>
											<label for="amt_status_no_new_no">No</label>
										</div>
									</div>
								</div>
								<?php if (!empty($productId)) { ?>
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Best Sellers</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" <?php echo $yes3;?>  value="1" name="prod_best" id="amt_status_yes_best_yes">
											<label for="amt_status_yes_best_yes">yes</label>
											<input type="radio" value="0" <?php echo $no3;?> name="prod_best" id="amt_status_no_best_no">
											<label for="amt_status_no_best_no">No</label>
										</div>
									</div>
								</div>
								<?php } ?>
								
								<?php if (!empty($productId)) { ?>
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Featured Product</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" <?php echo $yes4;?>  value="1" name="prod_feau" id="amt_status_yes_fea_yes">
											<label for="amt_status_yes_fea_yes">yes</label>
											<input type="radio" value="0" <?php echo $no4;?>  name="prod_feau" id="amt_status_yes_fea_no">
											<label for="amt_status_yes_fea_no">No</label>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
								<!-- <div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Featured Product</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="prod_feau" id="amt_status_yes_fea_yes">
											<label for="amt_status_yes_fea_yes">yes</label>
											<input type="radio" value="0" name="prod_feau" id="amt_status_yes_fea_no">
											<label for="amt_status_yes_fea_no">No</label>
										</div>
									</div>
								</div>		-->						
							
								<div class="row-fluid row-fluid-status">
									<div class="span2">	<label>Status</label> </div>
									<div class="span8">
										<div class="radio">
											<input type="radio" checked="checked" value="1" name="status" id="amt_status_yes" <?php echo $yes;?>>
											<label for="amt_status_yes">Approved</label>
											<input type="radio" value="0" name="status" id="amt_status_no" <?php echo $no;?>>
											<label for="amt_status_no">Un Approved</label>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="form-actions">	
							<div class="pull-right">
								<button type="submit" class="btn btn-danger btn-cons add-btn"  id="add-btn"><i class="icon-ok"></i> Save</button>
								<button type="button" class="btn btn-white btn-cons">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
	<?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
?>

	<!-- <script src="<?php echo   $backend_theme_url ?>plugins/jquery-1.8.3.min.js" type="text/javascript"></script> -->
		<script type="text/javascript">
		$(document).ready(function(){
			$('#main_id').change(function(){   
			  var category = $('#main_id').val();			    
				 //alert(val);
 				$.post('<?php echo $this->config->item('base_url');?>admin/category/get-category',{category:category},
				function(data){
						$('#subcat_id').html(data);
					});
				});
			
		});
	</script>
	
	<script type="text/javascript">
	var productId = "<?php echo $productId; ?>";
		$(document).ready(function(){
			if (!productId) {
			var maxField = 5; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.add_filed'); //Input field wrapper
		   // var fieldHTML = ; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append('<div class="row-fluid"><div class="field_wrapper"><div class="span3"><div class="row-fluid"><div class="span12"><input type="hidden" name="array_product_amount[]" value=""/><select name="prod_weight'+x+'" class="span12"><option value="">---Select quantity ----</option><?php foreach($quantity as $quantity_info) { ?><option><?php echo $quantity_info->quantity_name;?></option><?php } ?></select> </div></div></div><div class="span3"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="prod_mrp_amt'+x+'"/></div></div></div><div class="span3"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="product_amount'+x+'"  value=""/></div></div></div><div class="span2"><div class="row-fluid"><div class="span12"><input class="span12" type="text" name="prod_stock'+x+'" /></div></div></div><div class="span1"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fa fa-minus-circle"></i></a></div></div></div>'); 
				}
			});
			}
			
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
	</script>