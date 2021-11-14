<!-- ====== Availability Area ======= --> 
    <div class="availability-area bg-white-smoke">
        <div class="container">
         
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url()?>" method="POST" class="advance_search_query">
                        <div class="form-content">
                            <div class="form-group">
                                <label>Living Aria</label>
                                <input type="text" id="area" name="area" placeholder="Where do you want to live?" autocomplete="off">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Type</label>
                                <select name="type">
                                   <option value="">Any</option>
                                   <?php foreach ($post_type as $key => $value) { ?>
                                       <option value="<?= $value->id?>"><?= $value->name?></option>
                                   <?php }?>
                                   
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Price(Min)</label>
                                <input type="text" name="rent_min" placeholder="min">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Price(Max)</label>
                                <input type="text" name="rent_max" placeholder="max">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>No of Seat</label>
                                <select name="seat_no">
                                  <option value="">Any</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.form-content -->
                        <div class="form-content">
                            <div class="form-group">
                                <label>KEYWORDS</label>
                                <input type="text" name="keywords" placeholder="Search for keywords">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>BED</label>
                                <select name="bed_no">
                                   <option value="">Any</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Area(SQFT)</label>
                                <input type="text" name="flat_size_min" placeholder="min">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Area(SQFT)</label>
                                <input type="text" name="flat_size_max" placeholder="max">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Floor Number</label>
                                <select name="floor">
                                  <option value="">Any</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.form-content -->
                        <button type="submit" class=" button nevy-button">Check Availability</button>
                    </form> <!-- /.advance_search_query -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div>
    <!-- /.Availability-area -->

    <!-- ====== About Us Area ====== --> 
    
    <!-- /.aboutus-area -->

    <!-- ====== Apartments Area ====== --> 
    <div class="apartments-area bg-gray-color">
        <div class="container">
            
            <div class="row">
                <?php
                if($rent_post){
                foreach($rent_post as $key=>$value){?>
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
                
                
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <!-- <a href="#" class="button nevy-button">All Apartments</a> -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

    <!-- ====== Fun Facts Area======= -->
    <div class="fun-fects-area" style="background-image:url(<?php echo base_url()?>assets/images/count-down-image.png)">
        <div class="container">
            <div class="stat">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="<?= $total_client?>" data-speed="3000"><?= $total_client?></h3>
                        <div class="milestone-details">Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="<?= $total_wishlist?>" data-speed="3000"><?= $total_wishlist?></h3>
                        <div class="milestone-details">Wishlist</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="<?= $total_area?>" data-speed="3000"><?= $total_area?></h3>
                        <div class="milestone-details">Area</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="<?= $total_post?>" data-speed="3000"><?= $total_client?></h3>
                        <div class="milestone-details">Rent Post</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- ====== Call To Action ======= --> 
    <!-- <div class="call-to-action overlay-bg" style="background-image:url(<?php echo base_url()?>assets/images/contact-bg-image.png)">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Do you want to Rent your House</h3>
                        <h4>Call us and list your property here</h4>
                    </div><
                </div>
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">+880123654987<span>bachelorhub@gmail.com</span></a></h4>
                        <a href="#" class="button">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


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
                                        <p>112/B - Road 121, Dhaka 1207, Bangladesh</p>
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
  $( document ).ready(function() {

    $( "#area" ).keyup(function() {

      var area = $('#area').val();

      if(area.length > 0) {

        $.post("<?php echo base_url() . "site/area_search"; ?>",
        
        {area : area},

        function (res) {

            var data = $.parseJSON(res); 
            var search_item = [];
            console.log(data);
            $.each(data, function(i, myobj) {

                search_item.push({label:(myobj.name), idx:myobj.id}); 

            });
            
            $("#area").autocomplete({ 
                
                source: search_item,

                select: function(event, ui) {
                    //hidden input
                    $('#area').val(ui.item.idx);
                    //alert(ui.item.idx);
                    //alert('error');
                }
            });
        });
      }

    });
  });
</script>

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