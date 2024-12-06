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
                            <li class="nav-item"><span class="current-page">Order History</span></li>
                        </ul>
                    </nav>
                </div>


                <div class="page-contain category-page no-sidebar">
                    <div class="container body-content">
                        <div class="col-md-12">
                        <?php 
								if(!empty($order)) { 
									$l=0;
									 $base_url=$this->config->item('base_url');
									foreach($order as $order_info) {
									$l++;
							?>
                            <div class="row order-history">        
                                <div class="col-md-3"><?php echo date('M d, Y',strtotime($order_info->joinon)); ?></div>
                                <div class="col-md-3"><?php echo $order_info->order_id;?></div>
                                <div class="col-md-3">
                                    <?php if($order_info->deliver_status==1) {?>    
										<span Placeid="<?php echo $order_info->id;?>" action='1'><img src="<?php echo $frontend_theme_url;?>images/svg-icons/order-delivered.svg"  /> <strong>Delivered</strong></span>
										<?php  } elseif($order_info->deliver_status==2){ ?>
										<span Placeid="<?php echo $order_info->id;?>" action='2' class="shipped-txt"><img src="<?php echo $frontend_theme_url;?>images/svg-icons/order-shipping.svg"  /><strong> Shipped</strong></span><div class="clearfix"></div>
										<?php echo $order_info->deliver_comments;?>
										<?php  } elseif($order_info->deliver_status==3){ ?>
										<span Placeid="<?php echo $order_info->id;?>" action='3' class="cancel-txt"><strong><i class="fa fa-times" aria-hidden="true"></i> Cancelled</strong></span><div class="clearfix"></div>
										<?php echo $order_info->deliver_comments;?>
										<?php  } else { ?>
										<span Placeid="<?php echo $order_info->id;?>" action='0'><img src="<?php echo $frontend_theme_url;?>images/svg-icons/order-processing.svg"  /> <strong>Processing</strong></span><div class="clearfix"></div><?php echo $order_info->deliver_comments;?>
										<?php } ?>
                                    <!-- <img src="<?php echo $frontend_theme_url;?>images/svg-icons/packing.svg"/> Processing:  -->
                                </div>
                                <div class="col-md-3"><a href="javascript:void(0);" class="btn btn-bold orderview"  data-value="<?php echo $order_info->id;?>"><i class="fa fa-download" aria-hidden="true"></i> Order Details</a></div>
                            </div>
                            <?php  } }else {?>
							<p>No Products found </p>	
							<?php } ?>
                            <!-- <div class="row order-history">        
                                <div class="col-md-3">04-Jul-2021</div>
                                <div class="col-md-3">CA005346</div>
                                <div class="col-md-3"><img src="<?php echo $frontend_theme_url;?>images/svg-icons/packing.svg"/>  Processing:<br/>Thank you for choosing chennaiangadi.com. Your order has been received and will be processed once payment has been confirmed.<br/><br/>Online Payment Link:<br/>https://www.instamojo.com/@chennaiangadi <br/>GPay No: 9094676665 Nam </div>
                                <div class="col-md-3"><a href="" class="btn btn-bold"><i class="fa fa-download" aria-hidden="true"></i> Order Details</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>
                


            
            </div>
        </div>

        <!--order details-->
        <div class="modal fade popup-cart" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body ordered-details">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <div class="col-md-12" style="margin:auto;float:none;clear:both;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Orange Candy - 1 Pkt</td>
                                        <td><i class="fa fa-inr" aria-hidden="true"></i> 10</td>
                                        <td>1</td>
                                        <td><i class="fa fa-inr" aria-hidden="true"></i> 10</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
		<?php  
$this->load->view('frontend/common/footer');
?>