<!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Contact</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Map Area====== --> 
    <div class="map-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                       <h5>Find Our location</h5>
                       <h2 class="title default-text-gradient">Map &amp; Directions</h2>
                       <p>Find out how to find us from your current location</p>
                    </div><!-- /.about-heading-content -->
                    <div class="map-content">
                        <iframe height="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5850471550916!2d90.44743731543208!3d23.797786392880138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d8042caf2d%3A0x686fa3e360361ddf!2sUnited%20International%20University!5e0!3m2!1sen!2sbd!4v1636904164144!5m2!1sen!2sbd" allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.map-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map-content-area -->

    <!-- ====== Contact Us Area ====== --> 
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Contact us<br/> live</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-us-content-left">
                        <div class="contact">
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p>121, Dhaka<br> 1207, Bangladesh</p>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>Mall</h4>
                            <p>bachelorhub@gmail.com <br> mhossain151229@bscse.uiu.ac.bd</p>
                        </div><!-- /.contact -->
                
                    
                        <div class="contact">
                            <h4><i class="fa fa-volume-control-phone"></i>Call</h4>
                            <p>+8801676905442 <br> +8801676905442</p>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-user"></i>Social account</h4>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        
                            <h3>Have a question</h3>
                            <img src="assets/images/envelope.jpg" alt="envelope" />
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="alert alert-danger print-error-msg" style="display:none">
                                <ul></ul>
                            </div>
                            <div class="alert alert-success print-success-msg" style="display:none">
                                <ul></ul>
                            </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="first_name" id="first_name" placeholder="Name*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" name="email" id="email" placeholder="Email*" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <input type="text" name="subject" id="subject" placeholder="Subject*" class="form-control website">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <textarea rows="2" name="decription" id="description" cols="80">your massage</textarea>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" class="submit default-template-gradient" onclick="contact_submit()">
                                </div><!-- /.subimt -->
                            </div><!-- /.input-content -->
                        
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->

<script type="text/javascript">

   function contact_submit() {

      var first_name = $("#first_name").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var description = $("#description").val();
      if(first_name == ''){
         $(".print-error-msg").find("ul").html('');
         $(".print-success-msg").css('display','none');
         $(".print-error-msg").css('display','block');
         $(".print-error-msg").find("ul").append('<li>Please enter your name</li>');
      } else {
         $.ajax({
             url: "<?php echo base_url() . 'site/contact_form_submit'; ?>",
             type:'POST',
             data: {first_name:first_name, email:email, description:description, subject: subject},
             success: function(data) {
               var data = JSON.parse(data);
               console.log(data);
               if(data.status == 1){
                  $(".print-success-msg").find("ul").html('');
                  $(".print-error-msg").css('display','none');
                  $(".print-success-msg").css('display','block');
                  $(".print-success-msg").find("ul").append('<li>'+data.msg+'</li>');
               } else if(data.status == 0){
                  $(".print-error-msg").find("ul").html('');
                  $(".print-success-msg").css('display','none');
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").find("ul").append('<li>'+data.msg+'</li>');
               } else {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-success-msg").css('display','none');
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").find("ul").append('<li>'+data.msg+'</li>');
               }
             }
         });
      }
      
   }


</script>