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
                <div class="container">
                    <nav class="biolife-nav">
                        <ul>
                            <li class="nav-item"><a href="<?php echo $base_url;?>" class="permal-link">Home</a></li>                       
                            <li class="nav-item"><span class="current-page">Profile</span></li>
                        </ul>
                    </nav>
                </div>

                <?php
                $name = $profile->name;
                $email = $profile->email;
                $address = $profile->address;
                $city = $profile->city;
                $pincode = $profile->pincode;
                $phone = $profile->phone;
                ?>
                <div class="page-contain category-page no-sidebar">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-info profile">
                                    <a href="#" data-toggle="modal" data-target="#updateProfileModal"><i class="fa fa-pencil-square profile-edit" aria-hidden="true"></i> </a>
                                    <h3>Profile</h3>
                                    <p><strong><?php echo $name;?></strong><br/><?php echo $address;?>,<br/><?php echo $city." - " . $pincode;?><br/><i class="fa fa-mobile"></i> +91 <?php echo $phone;?><br/><i class="fa fa-envelope"></i> <a href="#"><?php echo $email;?></a>
                                    </P>
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
                

                

            
            </div>
        </div>

        <div class="modal fade popup-cart" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <div class="contact-form profile-edit">
                            <form id="profile_form" id="profile_form">
                                <div class="row">
                                    <h3 class="col-lg-12">Edit Profile</h3>
                                    <div class="col-lg-12">
                                        <input type="text" name="name" value="<?php echo $name;?>" placeholder="Name*" />
                                        <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email*" />
                                        <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Mobile*" />
                                        <input type="text" name="address" value="<?php echo $address;?>" placeholder="Address*" />
                                        <input type="text" name="landmark"  placeholder="Landmark*" />
                                        <input type="text" name="state"  placeholder="State*" />
                                        <input type="text" name="city"  placeholder="City*" />
                                        <input type="text" name="pincode"  placeholder="Pincode*" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" id="profile-update">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <?php  
$this->load->view('frontend/common/footer');
?>