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
        <li><a href="#" class="active">Users</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>List  - <span class="semi-bold">Users</span></h3></h3>
      </div>
     
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Users<span class="semi-bold"></span>
			  
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
                    
										<th>User Id</th>
										<th>Name </th>
										<th>Email ID </th>
									    <th>Phone </th>
											<!--<th>Address </th>!-->
										<th>Last login time </th>
										<th>Last login Browser </th>
										<th>Last login Ipaddress </th>
										<th>Status</th>
										<th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
				  		<?php 
						if(!empty($users)) { 
							$l=0;
							 $base_url=$this->config->item('base_url');
							foreach($users as $users_info) {
							$l++; ?>
                    <tr>
                      <td valign="middle"><div class="checkbox check-default">
                        <!--  <input type="checkbox" value="3" id="checkbox2" />
                          <label for="checkbox2"></label> !-->
                        </div></td>
                      <td valign="middle"><?php echo $users_info->id;?></td>
					   <td valign="middle"><?php echo htmlspecialchars($users_info->name);?></td>
                      <td valign="middle"><?php echo htmlspecialchars($users_info->email);?></td>
		        		<td valign="middle"><?php echo htmlspecialchars($users_info->phone);?></td>
				      	 <!-- <td valign="middle"><?php echo htmlspecialchars($users_info->address);?></td> !-->
					  <td valign="middle"><?php echo $users_info->login_time;?></td>
					  <td valign="middle"><?php echo $users_info->login_browser;?></td>
					  <td valign="middle"><?php echo $users_info->login_ipaddress;?></td>
					   <td><?php  if($users_info->status==1) {?>    
								<button  Placeid="<?php echo $users_info->id;?>"   action='1' class="btn btn-mini btn-success status-btn">Approved</button>
								<?php  } else { ?>
								<button Placeid="<?php echo $users_info->id;?>" action='0' class="btn btn-mini btn-danger status-btn">UnApproved</button>
								<?php } ?>
								</td>  
                    
                      <td valign="middle">
							<!--<?php echo anchor($base_url.'manage/viewenquiry/'.$users_info->id,'<i class="fa fa-eye"></i>'); ?> !-->
							<!--<?php echo anchor($base_url.'manage/editenquiry/'.$users_info->id,'<i class="icon-pencil"></i>'); ?>
							<?php echo anchor($base_url.'manage/editenquirycart/'.$users_info->id,'<i class="icon-shopping-cart"></i>'); ?> !-->
							<?php echo anchor($base_url.'admin/user/delete/'.$users_info->id,'<i class="icon-trash"></i>'); ?>
					  </td>
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