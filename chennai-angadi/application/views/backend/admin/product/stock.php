<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php $admin_url=$this->config->item('admin_url');  $base_url=$this->config->item('base_url'); ?>
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
        <li><a href="#" class="active">Products stock</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>List  - <span class="semi-bold">Products</span>  <a href="<?php echo $base_url ;?>manage/addproduct"> <button class="btn btn-info" value="Add Menu" >Add Product</button></a></h3></h3>
      </div>
     
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Products<span class="semi-bold"></span>
			  
			  </h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <div class="row-fluid">
                <table class="table table-hover table-condensed" id="example">
                  <thead>
                    <tr>
                      <th width="1%"><div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                        <!--  <input type="checkbox" value="1" id="checkbox1" />
                          <label for="checkbox1"></label> !-->
                        </div></th>
                    
										<th>Id</th>
										<th>Product Code </th>
										<th>Product Name </th>
										<th>Product Image </th>
										<th>Product Stock </th>
										<th>Product Min Stock </th>
										<th>Status</th>
										<!--<th>Actions</th>-->
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
                      <td valign="middle"><div class="checkbox check-default">
                         <!-- <input type="checkbox" value="3" id="checkbox2" />
                          <label for="checkbox2"></label> !-->
                        </div></td>
                      <td valign="middle"><?php echo $products_info->product_id;?></td>
					   <td valign="middle"><?php echo $products_info->product_code;?></td>
                      <td valign="middle"><?php echo $products_info->product_name;?></td>
  <td valign="middle"><a  target="_new" href="<?php echo  $base_url. "product/".$products_info->product_image;?>"><img src="<?php echo  $base_url. "product/".$products_info->product_image;?>" width="75" height="30" alt="" /></a></td>  
<td valign="middle"><?php echo $products_info->prod_stock;?></td>								
<td valign="middle"><?php echo $products_info->prod_inward;?></td>
					 <td><?php  if($products_info->status==1) {?>    
								<button  Placeid="<?php echo $products_info->product_id;?>"   action='1' class="btn btn-mini btn-success status-btn">Approved</button>
								<?php  } else { ?>
								<button Placeid="<?php echo $products_info->product_id;?>" action='0' class="btn btn-mini btn-danger status-btn">UnApproved</button>
								<?php } ?>
								</td>      
                      <!--<td valign="middle">
								<?php echo anchor($base_url.'manage/editstockproduct/'.$products_info->product_id,'<i class="icon-pencil"></i>'); ?>
								
					  
					  </td>-->
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

<?php
$this->load->view('backend/admin/common/logged-footer');
$this->load->view('backend/admin/common/extrajs');
?> 