<div class="availability-area bg-white-smoke">
        <div class="container">
         
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url()?>site/update_profile" method="POST" class="advance_search_query" enctype="multipart/form-data">
                        <div class="form-content">
                            <div class="form-group">
                                
                                <img id="profile_photo" src="<?php echo base_url($edit_info->photo)?>" alt="">
                                &nbsp;
                                <input type="file" name="photo"  onchange="readpicture(this);">
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" placeholder="Firstname" value="<?= $edit_info->firstname;?>">
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="" placeholder="User Name" value="<?= $edit_info->username;?>" readonly>
                            </div>
                        </div>

                        <div class="form-content">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="" placeholder="Email" value="<?= $edit_info->email;?>" readonly>
                            </div>
                        </div>
                        
                        <button type="submit" class=" button nevy-button">Update</button>
                    </form> <!-- /.advance_search_query -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div>

<script>
    // profile picture change
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#profile_photo')
            .attr('src', e.target.result)
            .width(225)
            .height(225);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }

    
    
</script>