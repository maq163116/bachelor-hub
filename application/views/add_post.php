<!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Add Rent Post</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->
<div class="availability-area bg-white-smoke">
        <div class="container">
         
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url()?>site/insert_post" method="POST" class="advance_search_query" enctype="multipart/form-data">
                        <div class="form-content">
                            <div class="form-group">
                                <label>Title*</label>
                                <!-- <textarea></textarea> -->
                                <input type="text" name="title" placeholder="Title" required="">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Area(Zone)*</label>
                                <select name="area" required="">
                                   <option value="">Select One</option>
                                   <?php foreach ($area as $key => $value) { ?>
                                       <option value="<?= $value->id?>"><?= $value->name?></option>
                                   <?php }?>
                                </select>
                            </div><!-- /.form-group -->
                               
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Rent*</label>
                                <!-- <textarea></textarea> -->
                                <input type="text" name="rent" placeholder="Rent" required="">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Type*</label>
                                <select name="type_id" required="">
                                    <option value="">Select One</option>
                                   <?php foreach ($post_type as $key => $value) { ?>
                                       <option value="<?= $value->id?>"><?= $value->name?></option>
                                   <?php }?>
                                   
                                  
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Service Charge</label>
                                <!-- <textarea></textarea> -->
                                <input type="text" name="service_charge" placeholder="Service Charge">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Security Deposite</label>
                                <select name="security_deposite">
                                    <option value="">Select One</option>
                                   <option value="1">1 Month</option>
                                   <option value="2">2 Month</option>
                                   <option value="3">3 Month</option>
                                   <option value="4">4 Month</option>
                                   
                                  
                                </select>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Flat Size</label>
                                <!-- <textarea name="flat_size"></textarea> -->
                                <input type="text" name="flat_size" placeholder="Flat Size (sqft)">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Floor</label>
                                <select name="floor">
                                    <option value="">Floor</option>
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
                            </div>
                            
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Flat Release Policy</label>
                                <textarea name="flat_release_policy"></textarea>
                                <!-- <input type="text" name="flat_release_policy" placeholder="Flat Release Policy"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Seat No</label>
                                <select name="seat_no">
                                    <option value="">Select One</option>
                                   <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                   
                                  
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description"></textarea>
                                <!-- <input type="text" name="description" placeholder="Description" autocomplete="off"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Bed No</label>
                                <select name="bed_no">
                                    <option value="">Select One</option>
                                   <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                   
                                  
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address"></textarea>
                                <!-- <input type="text" name="address" placeholder="Address"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Bath No</label>
                                <select name="bath_no">
                                    <option value="">Select One</option>
                                   <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                   
                                  
                                </select>
                            </div>
                            
                        </div>
                        
                        <div class="form-content">
                            <div class="form-group">
                                <label>Floor Description</label>
                                <textarea name="floor_description"></textarea>
                                <!-- <input type="text" name="floor_description" placeholder="Floor Description"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Room Category</label>
                                <textarea name="room_category"></textarea>
                                <!-- <input type="text" name="room_category" placeholder="Room Category"> -->
                            </div>
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Facilities</label>
                                <textarea name="facilities"></textarea>
                                <!-- <input type="text" name="floor_description" placeholder="Floor Description"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Additional Facilities</label>
                                <textarea name="additional_facilities"></textarea>
                                <!-- <input type="text" name="room_category" placeholder="Room Category"> -->
                            </div>
                            
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Indoor Facilities</label>
                                <textarea name="indoor_facilities"></textarea>
                                <!-- <input type="text" name="floor_description" placeholder="Floor Description"> -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Outdoor Facilities</label>
                                <textarea name="outdoor_facilities"></textarea>
                                <!-- <input type="text" name="room_category" placeholder="Room Category"> -->
                            </div>
                            
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Bkash Number</label>
                                <!-- <textarea name="indoor_facilities"></textarea> -->
                                <input type="text" name="bkash_number" placeholder="Bkash Number">
                            </div><!-- /.form-group -->
                            
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Nagad Number</label>
                                <!-- <textarea name="indoor_facilities"></textarea> -->
                                <input type="text" name="nagad_number" placeholder="Nagad Number">
                            </div><!-- /.form-group -->
                            
                            
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Thumb Photo*</label>
                                
                                <input type="file" class="form-control" name="thumb_photo" required="">
                            </div><!-- /.form-group -->
                            
                            
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>Another Photo</label>
                                
                                <input type="file" name="another_photo">
                            </div><!-- /.form-group -->
                            
                            
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Additional Photo</label>
                                
                                <input type="file" name="additional_photo">
                            </div><!-- /.form-group -->
                            
                            
                        </div>



                        <button type="submit" class=" button nevy-button">Submit</button>
                    </form> <!-- /.advance_search_query -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div>

    