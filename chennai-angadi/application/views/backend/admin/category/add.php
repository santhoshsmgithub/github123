<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('backend/admin/common/logged-header');
$this->load->view('backend/admin/common/wrap_start');
$this->load->view('backend/admin/common/sidebar');
?>
<?php  
$backend_theme_url=$this->config->item('backend_theme_url'); 
$admin_url=$this->config->item('admin_url');
$base_url=$this->config->item('base_url');

$title = $orderBy = $status = $yes = $no="";
if (isset($category)) {
	$title = $category->category_title;
	$orderBy = $category->order_by;
	$status = $category->status;
	if($status)
	{ 
		$yes="checked"; 
	}else{ 
		$no="checked"; 
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
        <li><a href="#" class="active"> Add Category</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add Category</span></h3>
      </div>
	  
	<div class="row-fluid">
        <div class="span12">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4> <span class="semi-bold"></span> </h4>
					<div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
				</div>
				<div class="grid-body no-border">
					<form  class="form-no-horizontal-spacing"   id="addform"  name="rentform"  method="post" enctype="multipart/form-data">	
						<div class="row-fluid column-seperation">
							<div class="span12">
								<h3>Category Info </h3>
								<div class="row-fluid">
									<div class="span2">	<label>Title</label>	</div>
									<div class="span5">
										<input class="span12  validate[required]" type="text" name="category_title" value="<?php echo $title;?>"  />
									</div>
								</div>
								<div class="row-fluid">
									<div class="span2"> <label>Order by</label>	</div>
									<div class="span5">
										<input class="span12  validate[required]" type="text" name="order_by" value="<?php echo $orderBy;?>"  />
									</div>
								</div>
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
								<button type="button" class="btn btn-danger btn-cons add-btn"  id="add-btn"><i class="icon-ok"></i> Save</button>
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