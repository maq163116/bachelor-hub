<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 18:04:15 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>Bachelor Hub</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo-bachelor2.png">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">   
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/colors.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!-- Modernizr
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- ====== Header Mobile Area ====== -->
    <header class="mobile-header-area bg-nero hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 tb">
                    <div class="mobile-header-block">
                        <div class="menu-area tb-cell">
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg">
                                <div class="menucontent overlaybg"></div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                    <span id="menu-marker"></span>
                                </div><!--/.menuexpandermain-->
                                <div id="mobile-main-nav" class="main-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        <div class="left-content">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us -+8801676905442</a>
                                                </li>
                                                <li>
                                                    <?php if(isset($_SESSION['user_auth'])){?>
                                                    <a href="<?php echo base_url()?>site/logout" class="cd-signin4"><i class="fa fa-sign-out"></i>Log out</a>
                                                    <?php } else {?>
                                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                                <?php }?>
                                                </li>
                                            </ul>
                                        </div><!-- /.left-content -->
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.menu-area -->
                        <div class="logo-area tb-cell">
                            <div class="site-logo">
                                <a href="<?php echo base_url()?>">
                                    <img src="<?php echo base_url()?>assets/images/logo-bachelor2.png" alt="site-logo" />
                                </a>
                            </div><!-- /.site-logo -->
                        </div><!-- /.logo-area -->
                        <div class="search-block tb-cell">
                            <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                        </div><!-- /.search-block -->
                        <div class="additional-content tb-cell">
                            <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                        </div><!-- /.additional-content -->
                    </div><!-- /.mobile-header-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.mobile-header-area --> 

    <!-- ====== Header Top Area ====== -->
    <header class="header-area bg-nero hidden-xs hidden-sm">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-md-7 col-sm-7 mobile-center">
                        <div class="site-logo">
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url()?>assets/images/logo-bachelor2.png" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-5 col-sm-5 mobile-center">
                        <div class="left-content">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                </li>
                                <li><?php if(isset($_SESSION['user_auth'])){?>
                                    <a href="<?php echo base_url()?>site/logout" class="cd-signin4"><i class="fa fa-sign-out"></i>Log out</a>
                                <?php } else {?>
                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                <?php }?>
                                </li>
                                <li>
                                    <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="trigger-overlay"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->
    <header class="header-bottom-content bg-nero hidden-xs hidden-sm">
        <div class="container">        
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a href="<?php echo base_url()?>about">About</a>
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo base_url()?>">Booking</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">House</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="apartment.html">All Apartment</a>
                                            </li>                                            
                                            <li>
                                                <a href="apartment-single.html">Apartment Single</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    
                                    <li>
                                        <a href="<?php echo base_url()?>add_post">Add Rent</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>contact">Contact</a>
                                    </li>
                                    
                                    <li>
                                        <?php if(isset($_SESSION['user_auth'])){?>
                                            <a href="#"><img src="<?php echo base_url($_SESSION['userPhoto'])?>" alt="profile" width="40px" height="40px" style="border-radius: 50%;"> <?= $_SESSION['username_first']?></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo base_url()?>profile">My Profile</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url()?>add_post">Add Rent Post</a>
                                                </li>                                           
                                                <li>
                                                    <a href="<?php echo base_url()?>my_post">My Post</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url()?>wishlist">Wishlist</a>
                                                </li>
                                                <?php if($_SESSION['userType'] == 'admin'){
                                                    //echo $_SESSION['userType'];?>
                                                    <li>
                                                        <a href="<?php echo base_url()?>all_post">All Post</a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo base_url()?>contact_list">Contact List</a>
                                                    </li>
                                                <?php }?>
                                                <li>
                                                    <a href="<?php echo base_url()?>site/logout">Logout</a>
                                                </li>
                                            </ul>
                                        <?php }?>

                                        
                                    </li>
                                    
                                    
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation --> 
                </div><!-- /.col-md-10 -->

                <div class="col-md-2 col-sm-2">
                    <div class="booking">
                        <span><a href="<?php echo base_url()?>">Booking</a></span>
                    </div><!-- /.Booking -->
                </div><!-- /.col-md-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-content --> 

    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Clients</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->  

        <!-- Registrar Or Sign In-content -->
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Sign in</a></li>
                    <li><a href="#0">New account</a></li>
                </ul>

                <!-- log in form -->
                <div id="cd-login"> 
                    <form class="cd-form" action="<?php echo base_url('site/login_validation'); ?>" method="POST">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" name="email" id="signin-email" type="text" placeholder="Username" required="">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" name="password" id="signin-password" type="password"  placeholder="Password" required="">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" name="remember" id="remember-me" checked required="">
                            <label for="remember-me">Remember me</label>
                        </p>

                        <p class="fieldset">
                            <button class="button nevy-button" type="submit" value="Login">Login</button>
                        </p>
                    </form>
                    
                    <p class="cd-form-bottom-message">
                        <a href="#0">Forgot your password?</a>
                    </p>
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-login -->

                <!-- sign up form -->
                <div id="cd-signup">
                    <form class="cd-form" action="<?php echo base_url('site/registration'); ?>" method="POST" >
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Firstname</label>
                            <input class="full-width has-padding has-border" name="firstname" id="signup-firstname" type="text" placeholder="Firstname" required="">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Username</label>
                            <input class="full-width has-padding has-border" name="username" id="signup-username" type="text" placeholder="Username" required="">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" name="email" id="signup-email" type="email" placeholder="E-mail" required="">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <input class="full-width has-padding has-border" name="password" id="signup-password" type="password"  placeholder="Password" required="">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" name="accept" id="accept-terms" required="">
                            <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                        </p>

                        <p class="fieldset">
                            <button class="button nevy-button" type="submit" value="Login">Create Account</button>
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->
                
                <!-- reset password form -->
                <div id="cd-reset-password">
                    <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content -->
    <?php if ($this->session->flashdata('message')){?>
    <div class="alert alert-warning" role="alert">
      <a href="#" class="alert-link"></a><?php echo $this->session->flashdata('message'); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>

<?php }?>

<!-- content  start-->
    <?php
     if (isset($content)) {
         $this->load->view($content);
     }
    ?>
<!-- content  end-->
    

    <!-- ====== Footer Area ====== --> 
    <footer class="footer-area" style="background-image:url(<?php echo base_url()?>assets/images/footer-bg.png)">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="widget widget_about yellow-color">    
                       <div class="widget-title-area">
                           <h3 class="widget-title">
                               About Bachelor Hub
                           </h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="widget-about-content">
                           <img src="<?php echo base_url()?>assets/images/logo-bachelor2.png" alt="house" />
                           <p>We have built a platform which will cater to Bachelors exclusively by providing them options for their desired accommodation arrangements while also maintaining a secured platform through online user verification when a user registers through our website. </p>
                           <a href="<?php echo base_url()?>about" class="button">More</a>
                       </div><!-- /.widget-content -->
                   </div><!-- /.widget widget_about -->
               </div><!-- /.col-md-4 -->
               <div class="col-md-4">
                   <div class="widget widget_place_category yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Place Category</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <ul>
                           <li>Flat for Rent <a href="#">Mirpur</a></li>
                           <li>Flat for Rent <a href="#">Gulshan</a></li>
                           <li>Flat for Rent <a href="#">Banani</a></li>
                           <li>Flat for Rent <a href="#">Mohammadpur</a></li>
                           <li>Flat for Rent <a href="#">Dhanmondi</a></li>
                           <li>Flat for Rent <a href="#">Badda</a></li>
                       </ul> 
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
               <div class="col-md-4">
                   <div class="widget widget_instagram yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Instagram Image</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="instagram-image-content">
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-one.png" alt="" /></a>
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-two.png" alt="" /></a>
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-three.png" alt="" /></a>
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-four.png" alt="" /></a>
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-five.png" alt="" /></a>
                           <a href="#"><img src="<?php echo base_url()?>assets/images/apartment/apartment-six.png" alt="" /></a>

                       </div><!-- /.instagram-image-content -->
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
           <div class="row">
               <div class="col-md-12">
                   <div class="bottom-content">
                       <p>Copyright  &copy;2021 <a href="#">Bachelor Hub</a></p>
                   </div><!-- /.bottom-top-content -->
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </footer><!-- /.footer-area -->

    <!-- All The JS Files
    ================================================== --> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="<?php echo base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 18:04:42 GMT -->
</html>