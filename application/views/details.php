<!-- ====== Page Header ====== --> 
    <!-- <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">House</h2>
                    <p class="page-description">More Details About Apartment</p>        
                </div>
            </div>
        </div>         
    </div> -->

   <!-- ====== Breadcrumbs Area====== --> 
   <div class="breadcrumbs-area">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="index01.html">Home</a></span>
                       <span class="separator">&gt;</span>
                       <span class="last-item">Details</span>
                   </div>
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
   </div><!-- /.breadcrumbs-area -->

	<!-- ====== Apartments-Single-Area ======= --> 
	<div class="apartment-single-area">
	  	<div class="container">
		  	<div class="row">
			    <div class="col-md-8">
    				<div class="corousel-gallery-content">
    					  <div class="gallery">
    					       <div class="full-view owl-carousel">
    					     	  <a class="item image-pop-up" href="<?php echo base_url($post_info->thumb_photo)?>">
    					     		  <img src="<?php echo base_url($post_info->thumb_photo)?>" alt="corousel">
    					     	  </a>
                                  <?php if($post_info->another_photo){?>
    					     	  <a class="item image-pop-up" href="<?php echo base_url($post_info->another_photo)?>">
    					     		  <img src="<?php echo base_url($post_info->another_photo)?>" alt="corousel">
    					     	  </a>
                                 <?php }?>

                                 <?php if($post_info->additional_photo){?>
                                  <a class="item image-pop-up" href="<?php echo base_url($post_info->additional_photo)?>">
                                      <img src="<?php echo base_url($post_info->additional_photo)?>" alt="corousel">
                                  </a>
                                 <?php }?>
    					     	  
    					       </div>

    					      <div class="list-view owl-carousel">
    					          <div class="item">
    					        	  <img src="<?php echo base_url($post_info->thumb_photo)?>" alt="corousel-image">
    					          </div>
                                  <?php if($post_info->another_photo){?>
    					          <div class="item">
    					        	  <img src="<?php echo base_url($post_info->another_photo)?>" alt="corousel-image">
    					          </div>
                                 <?php }?>

                                 <?php if($post_info->additional_photo){?>
                                  <div class="item">
                                      <img src="<?php echo base_url($post_info->additional_photo)?>" alt="corousel-image">
                                  </div>
                                 <?php }?>
    					          
    					      </div>  
    					  </div> <!-- /.gallery-two -->
    				</div> <!-- /.corousel-gallery-content -->

    				<div class="family-apartment-content mobile-extend">
                        <div class="tb">
                            <div class="tb-cell">
        					   <h3 class="apartment-title"><?= $post_info->title?></h3>
                            </div><!-- /.tb-cell -->
                            <div class="tb-cell">
        					   <p class="pull-right rent">Rent/Month: ৳ <?= $post_info->rent?></p>
                            </div><!-- /.tb-cell -->
                        </div><!-- /.tb -->
    					<div class="clearfix"></div><!-- /.clearfix -->
    					<p class="apartment-description default-gradient-before"><?= $post_info->description?></p>
    					<div class="price-details">
    						<h3>Price Details-</h3>
    						<ul>
    							<li><span>Rent/Month: </span> ৳ <?= $post_info->rent?></li>
    							<li><span>Service Charge :</span> <?= $post_info->service_charge?>/= Tk per month, subject to change</li>
    							<li><span>Security Deposit :</span> <?= $post_info->security_deposite?> month’s rent</li>
    							<li><span>Flat Release Policy :</span> <?= $post_info->flat_release_policy?></li>
    						</ul>
    					</div><!-- /.price -->

    					<div class="property-details">
    						<h3>Property Details-</h3>
    						<ul>
    							<li><span>Address  &amp; Area :</span> <?= $post_info->address?></li>
    							<li><span>Flat Size :</span> <?= $post_info->flat_size?> Sq Feet.</li>
    							<li><span>Floor :</span> <?= $post_info->floor_description?></li>
    							<li><span>Room Category :</span> <?= $post_info->room_category?></li>
    							<li><span>Facilities :</span> <?= $post_info->facilities?></li>
    							<li><span>Additional Facilities :</span> <?= $post_info->additional_facilities?> </li>
    						</ul>
    					</div><!-- /.Property -->
    					<!-- <div class="apartment-overview">
    						<div class="row">
    							<div class="col-md-12">
    								<h3>Apartment Overview</h3>
    								<div class="overview">
                                        <ul>
                                            <li>Deposit / Bond <span class="pull-right">$225000.00</span></li>
                                            <li>computer <span class="pull-right">03</span></li>
                                            <li>Total Area (sq. ft) <span class="pull-right">300</span></li>
                                            <li>Total Floors <span class="pull-right">06</span></li>
                                            <li>Car Parking Per Space <span class="pull-right">02</span></li>    
                                            <li>Air Condition <span class="pull-right">Yes</span></li>
                                            <li>Car Parking Per Space <span class="pull-right">02</span></li>    
                                            <li>Air Condition <span class="pull-right">Yes</span></li>
                                        </ul>
                                    </div>
    							</div>
    						</div>
    					</div> -->
    					<div class="indoor-features">
    						<div class="row">
                                <?php if($post_info->indoor_facilities){?>
    							<div class="col-md-6">
    								<h3 class="features-title">Indoor features:</h3>
    								<ul class="features-list">
                                        <?php 
                                        $indoor_features = explode('*', $post_info->indoor_facilities);
                                        foreach ($indoor_features as $key => $value) {?>
    									<li><?= $value?></li>
                                    <?php }?>
    									
    								</ul>
    							</div><!-- /.col-md-6 -->
                                <?php }?>
                                <?php if($post_info->outdoor_facilities){?>
    							<div class="col-md-6">
    								<h3 class="features-title">Ourdoor features:</h3>
    								<ul class="features-list">
                                        <?php 
                                        $outdoor_features = explode('*', $post_info->outdoor_facilities);
                                        foreach ($outdoor_features as $key => $value) {?>
                                        <li><?= $value?></li>
                                    <?php }?>
    									
    								</ul>
    							</div><!-- /.col-md-6 -->
                            <?php }?>
    						</div><!-- /.row -->
    					</div><!-- /.indoor -->
                        <div class="indoor-features">
                            <div class="row">
                                <?php if($post_info->bkash_number){?>
                                <div class="col-md-6">
                                    <h3 class="features-title">Bkash Number: <?php if(isset($_SESSION['user_auth'])) echo $post_info->bkash_number; else echo '<a href="#" class="cd-signin">Please <span style="text-decoration: underline;">Login</span></a>';?></h3>
                                    <img src="<?php echo base_url('assets/images/bkash-Logo.png')?>" alt="" width="50%" height="50%">
                                    
                                    
                                </div><!-- /.col-md-6 -->
                                <?php }?>
                                <?php if($post_info->nagad_number){?>
                                <div class="col-md-6">
                                    <h3 class="features-title">Nagad Number:<?php if(isset($_SESSION['user_auth'])) echo $post_info->nagad_number; else echo '<a href="#" class="cd-signin">Please <span style="text-decoration: underline;">Login</span></a>';?></h3>
                                    <img src="<?php echo base_url('assets/images/Nagad-Logo.png')?>" alt=""width="50%" height="50%">
                                    
                                </div><!-- /.col-md-6 -->
                            <?php }?>
                            </div><!-- /.row -->
                        </div><!-- /.indoor -->
    				</div><!-- /.family-apartment-content -->
                    <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
			    </div> <!-- /.col-md-8 -->

    			<div class="col-md-4">
                    <div class="apartment-sidebar">                    
        				<div class="widget_rental_search clerafix">					
        					<div class="form-border gradient-border">
        						<form action="#" method="get" class="advance_search_query booking-form">
        							<div class="form-bg seven">
        								<div class="form-content">
                                            <h2 class="form-title">Book This Apartment</h2>
        									<div class="form-group">
        									   <label>Full Name</label>
        									   <input type="text" name="FirstName" placeholder="Full name">
        									</div><!-- /.form-group -->
        									<div class="form-group">
                            					<label>Phone Number</label>
                                                <input type="tel" name="phone number" placeholder="+8801789565626">
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<label>Email Address</label>
        										<input type="email" name="Email" placeholder="example@domain.com">
        									</div><!-- /.form-group -->
        									
        									<div class="form-group">
        									    <label>Your Message</label>
        		                                <textarea name="message" placeholder="Message" class="form-controller"></textarea>
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
        									</div><!-- /.form-group -->
        								</div><!-- /.form-content -->
        							</div><!-- /.form-bg -->
        						</form> <!-- /.advance_search_query -->
        					</div><!-- /.form-border -->
        				</div><!-- /.widget_rental_search -->

        				<!-- <div class="apartments-content seven post clerafix">
        					<div class="image-content">
        						<a href="#"><img class="overlay-image" src="<?php echo base_url()?>assets/images/apartment-ad.png" alt="about" /></a>
        					</div>
        				</div> -->
                    </div><!-- /.apartment-sidebar -->
    			</div> <!-- .col-md-4 -->
		  	</div> <!-- /.row -->
	  	</div> <!-- /.container -->
  	</div> <!-- /.appartment-single-area -->
	
	<!-- ====== Apartments-Related-area ====== --> 
	<div class="apartments-related-area bg-gray-color">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-one">
					    <h2 class="title default-text-gradient">Related apartments</h2>
					</div><!-- /.Apartments-heading-content -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
			<div class="row">
                <?php
                if($relative_post){
                foreach($relative_post as $key=>$value){?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="apartments-content">
                            <div class="image-content">
                               <a href="<?php echo base_url('details/'.$value->id)?>"><img src="<?php echo base_url($value->thumb_photo)?>" alt="apartment" /></a>
                            </div><!-- /.image-content -->
                       
                            <div class="text-content">
                                <div class="top-content">
                                   <h3><a href="<?php echo base_url('details/'.$value->id)?>"><?= $value->title?></a></h3>
                                   <span>
                                       <i class="fa fa-map-marker"></i>
                                       <?= $value->area_name?>
                                   </span> 
                                </div><!-- /.top-content -->
                                <div class="bottom-content clearfix">
                                    <div class="meta-bed-room">
                                       <i class="fa fa-bed"></i> <?= $value->bed_no?> Bedrooms
                                    </div>
                                    <div class="meta-bath-room">                                
                                       <i class="fa fa-bath"></i><?= $value->bed_no?>  Bathroom
                                    </div>
                                    <span class="clearfix"></span>
                                    <div class="rent-price pull-left">
                                       ৳ <?= $value->rent?>
                                    </div>
                                    <div class="share-meta dropup pull-right">
                                        <ul>
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                               <a href="javascript:void(0)" onclick="add_wishlist(<?= $value->id?>)"><i class="fa fa-star-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.bottom-content -->
                            </div><!-- /.text-content -->
                        </div><!-- /.partments-content -->
                    </div>
                    <div class="clearfix hidden-md hidden-lg"></div>
                <?php } } else{?>
                        <h3 style="text-align: center;">No Data Found</h3>
                <?php }?>
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.Apartments-Related-area-->

    <!-- ====== Call To Action ======== --> 
    <div class="call-to-action default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Do you want to Rent your House</h3>
                        <h4>Call us and list your property here</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">+8801676905442<span>mhossain151229@bscse.uiu.ac.bd</span></a></h4>
                        <a href="#" class="button">Contact us</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

    <!-- ====== Contact Area ====== --> 
    <div class="contact-area">
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-two available">
                            <h2 class="title">We Are Available<br/> For You 24/7</h2>
                            <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <iframe width="600" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5850471550916!2d90.44743731543208!3d23.797786392880138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d8042caf2d%3A0x686fa3e360361ddf!2sUnited%20International%20University!5e0!3m2!1sen!2sbd!4v1636904164144!5m2!1sen!2sbd" allowfullscreen="allowfullscreen"></iframe>
                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Address</h4>
                                        <p>112/B - Road 121, Dhaka 1207, Banglades</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Mail</h4>
                                        <p>bachelorhub@gmail.com mhossain151229@bscse.uiu.ac.bd</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Call</h4>
                                        <p>+8801676905442 <br/>+8801676905442</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->


<script type="text/javascript">
    function add_wishlist(id) {
        //alert(id);
        $.ajax({
          type: "POST",
          url: '<?php echo base_url() . "site/add_wishlist"; ?>',
          data: {id: id},
          success: function (response) {
            var data = JSON.parse(response);
            console.log(data);
            alert(data.msg);
            
          }
      });
    }
</script>