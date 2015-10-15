<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Haircuts &amp; Beards - Barbershop &amp; Hair Salon</title>
    <meta name="description" content="Haircuts &amp; Beards is modern, clean and professionally crafted HTML template which can be used for Barbershop, Hail Salon, Beauty Salon and other related sites. ">
    <meta name="keywords" content="barber, barber's, barbershop, barber shop, hair salon, beard, beauty, hair, haircut, beardcut, salon, makeup, style, stylist, coloring">
    <meta name="author" content="Rollthemes.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php

    //<!-- Bootstrap  -->
    echo link_tag('assets/css/stylesheets/bootstrap.css');

    //<!-- Theme Style -->
    echo link_tag('assets/css/stylesheets/style.css');

    //<!-- Responsive -->
    echo link_tag('assets/css/stylesheets/responsive.css');
    
    //<!-- Colors -->
    echo link_tag('assets/css/stylesheets/colors/color1.css');
   
    //<!-- Animation Style -->
    echo link_tag('assets/css/stylesheets/animate.css');

    ?>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,300italic,900' rel='stylesheet' type='text/css'>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700,900italic,900' rel='stylesheet' type='text/css'>

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="assets/img/icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-sticky"> 
    <div class="header-page">
        <!-- Header -->
        <header id="header" class="header">
            <div class="header-wrap clearfix">
                <div class="logo-wrap">
                    <div id="logo" class="logo small">
                        <a href="<?php echo base_url(); ?>home" rel="home">
                            <img src="<?php echo base_url(); ?>assets/img/trial/logo_small.png" alt="image">
                        </a>
                    </div><!-- /.logo -->
                </div><!-- /.logo-wrap -->
                <div class="nav-wrap">
                    <div class="btn-menu"></div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu"> 
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>about">About</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>contact">Contact </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>login">Login</a>
                            </li>
                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->
                </div><!-- /.nav-wrap -->
                <div class="socials-wrap clearfix">                
                    <ul class="socials">
                        <li><a href="#"><span class="facebook">F</span></a></li>
                        <li><a href="#"><span class="twitter">L</span></a></li>
                        <li><a href="#"><span class="google">G</span></a></li> 
                    </ul>
                </div><!-- /.social-wrap -->
            </div><!-- /.header-wrap -->
        </header><!-- /.header -->  
        
        <!-- Page Title -->
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-captions">
                            <h1>About Monarch Saloon</h1>
                        </div><!-- /.page-title-captions -->
                        <!-- <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#"> About </a></li>
                                <li>Style 1</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.header-page -->

    <!-- About -->
    <div class="entry-page">
        <section class="roll-row about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 padr35">                         
                        <div class="roll-title">
                            <p class="sub">Welcome to </p>
                            <h2 class="main">Haircuts &amp; Beards</h2>
                        </div>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam erat, sed diam voluptua. 
                        </p>                       
                        <p>Atvero eoset accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor samet, consetetur sadipscing elitr aliquyam erat diam voluptua: </p>                        
                        <ul class="roll-list">
                            <li><a href="#">At vero eos et accusam et justo duo dolores</a></li>
                            <li><a href="#">Elitr sed diam nonumy eirmod</a></li>
                            <li><a href="#">Stet clita kasd gubergren, no sea takimata sanctus est</a></li>
                            <li><a href="#"> Lorem ipsum dolor sit amet lorem ipsumr</a></li>
                        </ul> 
                        <div class="roll-spacer small"></div>
                        <a href="<?php echo base_url(); ?>gallery" class="roll-button">Check Gallery</a>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6 padl35">                    
                        <div class="featured-about blog-slider" data-auto="true" data-effect="slide" data-direction="horizotal">
                            <div class="flexslider ">
                                <ul class="slides">
                                   <li>
                                        <img src="<?php echo base_url(); ?>assets/img/trial/blog/about.jpg" alt="image">
                                   </li>
                                   <li>
                                        <img src="<?php echo base_url(); ?>assets/img/trial/blog/about.jpg" alt="image">
                                   </li>
                                </ul>
                            </div>  
                        </div><!-- /.gallery-about -->                                
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section> 

        <!-- Services -->
        <section class="roll-row" style="padding: 0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4" style="background-color: #f96868; padding: 0">
                        <div class="item">
                            <div class="roll-services">
                                <p class="sub">Monarch Salon</p>
                            <h2 class="main">Haircuts</h2>
                            <ul>
                                <li>Men’s cuts (13-59) - <span>150 INR</span></li>
                                <li>Women’s cuts (13-59) - <span>200 INR</span></li>
                                <li>Kid’s cuts (under 12) - <span>150 INR</span></li>
                            </ul>
                                <a href="#" class="roll-button white">See all cuts</a>                          
                            </div><!-- /.roll-services -->
                            <div class="photo">
                                <img src="<?php echo base_url(); ?>assets/img/trial/services/1.jpg" alt="image">
                            </div>
                        </div><!-- /.item -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4" style="background-color: #66c7cc; padding: 0">
                        <div class="item">
                            <div class="photo">
                                <img src="<?php echo base_url(); ?>assets/img/trial/services/2.jpg" alt="image">
                            </div>
                            <div class="roll-services">
                                <p class="sub">Monarch Salon</p>
                            <h2 class="main">BeardCuts</h2>
                            <ul>
                                <li>Beard trimming (trimming/shaping) - <span>50 INR</span></li>
                                <li>Basic shave (similar to morning shave) - <span>50 INR</span></li>
                                <li>Beard design (razor fine lines) - <span>50 INR</span></li>
                            </ul>
                                <a href="#" class="roll-button white">See all Beards</a>                        
                            </div><!-- /.roll-services -->
                        </div><!-- /.item -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4" style="background-color: #f9c765; padding: 0">
                        <div class="item">
                            <div class="roll-services">
                                <p class="sub">Monarch Salon</p>
                            <h2 class="main">Coloring</h2>
                            <ul>
                                <li>Bleach & tone -(13-59) - <span>250 INR</span></li>
                                <li>All-over custom color - <span>500 INR</span></li>
                                <li>Highlighting - <span>Variable price</span></li>
                            </ul>
                                <a href="#" class="roll-button white">See all Coloring</a>                          
                            </div><!-- /.roll-services -->
                            <div class="photo">
                                <img src="<?php echo base_url(); ?>assets/img/trial/services/3.jpg" alt="image">
                            </div>
                        </div><!-- /.item -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        
        <!-- Why Us -->
        <section class="roll-row parallax parallax4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 padr35">
                        <h3>Why Us ?</h3>
                        <div class="roll-accordion">
                            <div class="roll-toggle">
                                <div class="toggle-title active">Duis autem veleum</div>
                                <div class="toggle-content">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/4.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <p>Ravi Sen.</p>                                
                                </div>
                            </div><!-- /toggle -->
                            <div class="roll-toggle">
                                <div class="toggle-title">Coloring</div>
                                <div class="toggle-content">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/4.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <div class="info">                                    
                                        <p class="desc-info">Ravi Sen.</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="roll-toggle">
                                <div class="toggle-title">Breads Style</div>
                                <div class="toggle-content">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/4.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <div class="info">                                    
                                        <p class="desc-info">Ravi Sen.</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="roll-toggle">
                                <div class="toggle-title">Spa</div>
                                <div class="toggle-content">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/4.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <div class="info">                                    
                                        <p class="desc-info">Ravi Sen.</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="roll-toggle">
                                <div class="toggle-title">Tattoo</div>
                                <div class="toggle-content">
                                   <img src="<?php echo base_url(); ?>assets/img/trial/services/4.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <div class="info">                                    
                                        <p class="desc-info">Ravi Sen.</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                        </div><!-- /.accordion -->
                    </div><!-- /.col-md-4 -->  

                    <div class="col-md-4 padl25">
                        <h3>Services</h3>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren:</p>
                    <ul class="roll-list">
                        <li><a href="#">Haircut</a></li>
                        <li><a href="#">Breads</a></li>
                        <li><a href="#">Coloring</a></li>
                        <li><a href="#">Spa</a></li>
                        <li><a href="#">Tatto</a></li>
                    </ul> 
                    </div><!-- /.col-md-4 --> 
                    <div class="col-md-4 padl35">
                        <h3>Advantages</h3>
                        <div class="roll-tabs" data-effect ="fadeIn">
                            <ul class="menu-tab">
                                <li class="active"><a href="#">Quality</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Results</a></li>
                            </ul><!-- /.menu-tab -->
                            <div class="content-tab">
                                <div class="content-inner">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/5.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <p>Use Best Quality Product.</p>
                                </div>
                                <div class="content-inner">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/7.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <p>Apply By Expert.</p>
                                </div>
                                <div class="content-inner">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/services/6.jpg" alt="<?php echo base_url(); ?>assets/img/trial">
                                    <p>Get Good Result.</p>
                                </div>
                            </div><!-- /.content-tab -->
                        </div><!-- /.roll-tabs -->
                    </div><!-- /.col-md-4 --> 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

       <?php
        // <!-- Promotion -->
        // <section class="roll-row" style="padding: 0">
        //     <div class="container">
        //         <div class="row">
        //             <div class="col-md-12">
        //                 <div class="roll-promotion clearfix">
        //                     <div class="title-promotion"><span class="text-color">Like this template?</span> Get your copy of this great theme now!</div>
        //                     <a href="#" class="roll-button">Purchase</a>
        //                 </div><!-- /.roll-promotion -->
        //             </div><!-- /.col-md-12 -->
        //         </div><!-- /.row -->
        //     </div><!-- /.container -->
        // </section> 
        ?>

        <!-- Contact -->
        <section class="roll-row" style="padding: 75px 0; background: url(<?php echo base_url(); ?>assets/img/trial/contact.jpg)"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">       
                        <div class="roll-contact text-center">
                        <div class="mail">contact@monarchsalon.in</div>
                        <div class="phone">9829158345</div>
                        <div class="address">Panchawati, Udaipur(Raj.)</div>
                        </div><!-- /infomation --> 
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->  
        </section> 
    </div><!-- /.entry-page -->
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-widgets">   
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-about">
                            <div class="logo-footer">
                                <img src="<?php base_url(); ?>assets/img/trial/logo.png" alt="image">
                            </div>
                            <p>Best salon in rajasthan.</p>
                            <ul class="socials clearfix">
                                <li><a href="#"><span class="facebook">F</span></a></li>
                                <li><a href="#"><span class="twitter">L</span></a></li>
                                <li><a href="#"><span class="google">G</span></a></li>
                                <li><a href="#"><span class="linkedin">I</span></a></li>
                                <li><a href="#"><span class="pinterest">:</span></a></li>
                            </ul>
                        </div><!-- /.widget-about -->  
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget-tweets">
                            <h5 class="widget-title">Twitter </h5>
                            <div class="list-tiwtter" data-number="2" data-username="envato" data-modpath="twitter/index.php"></div>
                        </div><!-- /.widget-recent-tweets -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget-posts">
                            <h5 class="widget-title">Posts </h5>
                            <ul class="posts clearfix">
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo base_url(); ?>assets/img/trial/blog/6.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Monarch Salon</a></h6>
                                        <p>April 9, 2014</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo base_url(); ?>assets/img/trial/blog/7.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Monarch Salon</a></h6>
                                        <p>April 5, 2014</p>
                                    </div>
                                </li>                            
                            </ul><!-- /.recent-posts -->
                        </div><!-- /.widget-recent-posts -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget-subscribe">
                            <h5 class="widget-title">Subscribe</h5>
                            <form method="post" action="#" id="subscribe-form" data-mailchimp="true">
                                <div id="subscribe-content">
                                    <div class="input-wrap email">
                                        <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email Address">
                                    </div>
                                    <div class="button-wrap">
                                        <button type="button" id="subscribe-button" class="subscribe-button" title="Subscribe now"> + </button>
                                    </div>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form><!-- /#subscribe-form -->
                            <p>Subscribe to Our Newsletter! We promice not to spam You!</p>
                        </div><!-- /.widget-quick-contact -->
                    </div><!-- /.col-md-3-->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">                        
                        <p>© Monarch Salon 2015 | Developed <span class="icon-heart6"></span> by <a href="http://www.webkreators.in">Web Kreators Infotech</a></p>
                    </div>                   
                </div><!-- /.span12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Javascript --><?php

    echo script_tag('assets/js/home/jquery.min.js');
    echo script_tag('assets/js/home/bootstrap.min.js');
    echo script_tag('assets/js/home/jquery.easing.js');
    echo script_tag('assets/js/home/jquery.flexslider-min.js');
    echo script_tag('assets/js/home/jquery.cookie.js');
    echo script_tag('assets/js/home/jquery.tweet.min.js');
    echo script_tag('assets/js/home/jquery.matchHeight-min.js');
    echo script_tag('assets/js/home/datepicker.js');
    echo script_tag('assets/js/home/jquery.sticky.js');
    echo script_tag('assets/js/home/main.js');

    /*
    
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>    
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>    
    <script type="text/javascript" src="javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>    
    <script type="text/javascript" src="javascript/datepicker.js"></script>      
    <script type="text/javascript" src="javascript/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.matchHeight-min.js"></script>    
    <script type="text/javascript" src="javascript/main.js"></script>*/

    ?>

</body>
</html>