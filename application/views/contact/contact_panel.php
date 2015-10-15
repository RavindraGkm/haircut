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
    <link href="img/icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="img/icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="img/icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="img/icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
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
                            <li >
                                <a href="<?php echo base_url(); ?>about">About</a>
                            </li>
                            <li >
                                <a href="<?php echo base_url(); ?>gallery">Gallery</a>
                            </li>
                            <li class="active">
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
                            <h1>Monarch Salon Contact</h1>
                        </div><!-- /.page-title-captions -->
                        <?php
                        // <div class="breadcrumbs">
                        //     <ul>                           
                        //         <li><a href="#">Home</a></li>
                        //         <li><a href="#">Contact</a></li>
                        //         <li>Style 1</li>
                        //     </ul>                   
                        // </div><!-- /.breadcrumbs -->
                        ?>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.header-page -->

    <section class="roll-row contact" style="padding: 0">
        <div id="map" style="width: 100%; height: 500px;"></div> 
    </section>

    <!-- Contact Form -->
    <section class="roll-row contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Contact Form</h1>
                    <div class="alert alert-warning alert-dismissible hidden" id="contact_alert_button" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                        Hello, we received your message. We will shortly contact you.
                    </div>
                    <form class="roll-contact-form" id="contact_form">                          
                        <div class="input-wrap name">
                            <input type="text" value="" tabindex="1" placeholder="Full Name" class="contact_name" name="contact_name" id="contact_name">
                            <span class='error-span' data-error-for='contact_name'>Error</span>
                        </div>
                        <div class="input-wrap last phone">
                            <input type="text" value="" tabindex="2" placeholder="Phone" class="contact_mobile" name="contact_mobile" id="contact_mobile" >
                            <span class='error-span' data-error-for='contact_mobile'>Error</span>
                        </div>
                        <div class="input-wrap email">
                            <input type="email" value="" tabindex="3" placeholder="Email Address" class="contact_email" name="contact_email" id="contact_email">
                            <span class='error-span' data-error-for='contact_email'>Error</span>
                        </div>
                        <div class="input-wrap last Subject">
                            <input type="text" value="" tabindex="4" placeholder="Subject" class="contact_subject" name="contact_subject" id="contact_subject" >
                            <span class='error-span' data-error-for='contact_subject'>Error</span>
                        </div>
                        <div class="textarea-wrap">
                            <textarea class="type-input  contact_message" tabindex="5" placeholder="Message" name="contact_message" id="contact_message"></textarea>
                            <span class='error-span' data-error-for='contact_message'>Error</span>
                        </div>
                        <div class="submit-wrap">
                            <button class="roll-button contact_button" tabindex="6" type="submit">Send Message</button>
                            <button type="reset" class="hidden" id="reset_contact_button">Reset</button>
                        </div>
                    </form><!-- /.comment-form -->
                </div>

                <div class="col-md-5 padl25">
                    <h1>Contact Info</h1>
                    <ul class="roll-contact-info">
                        <li class="address">Postal Address:
                            <p>Panchawati, Udaipur(Raj.)</p>
                        </li>
                        <li class="phone">Phone:
                            <p>9829158345</p>
                        </li>
                        <li class="fax">Fax
                            <p>XXX-XXX-XXXXX</p>
                        </li>
                        <li class="email">Email:
                            <p>contact@monarchsalon.in</p>
                        </li>                           
                   </ul><!-- /.contact-infomation -->  
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section> 
    
    <!-- Contact Information -->
    <section class="blog-information">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info">
                        <span class="mail">contact@monarchsalon.in</span>
                        <span class="phone">9829158345</span>
                        <span class="address">Panchawati, Udaipur(Raj.)</span>
                    </div><!-- /information -->
                </div>
            </div>
        </div>
    </section>

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
    
    <!-- Javascript -->
    <?php

    echo script_tag('assets/js/home/jquery.min.js');
    echo script_tag('assets/js/home/bootstrap.min.js');
    echo script_tag('assets/js/home/jquery.sticky.js');
    echo script_tag('assets/js/home/jquery.easing.js');
    echo script_tag('https://maps.googleapis.com/maps/api/js?sensor=false');
    echo script_tag('assets/js/home/jquery-validate.js');
    echo script_tag('assets/js/home/jquery.gomap-1.3.2.min.js');
    echo script_tag('assets/js/home/jquery.cookie.js');
    echo script_tag('assets/js/home/datepicker.js');
    echo script_tag('assets/js/home/jquery.tweet.min.js');
    echo script_tag('assets/js/home/main.js');
    echo script_tag('assets/js/contact/contact.js');

    // <script type="text/javascript" src="javascript/jquery.min.js"></script>
    // <script type="text/javascript" src="javascript/bootstrap.min.js"></script> 
    // <script type="text/javascript" src="javascript/jquery.sticky.js"></script>
    // <script type="text/javascript" src="javascript/jquery.easing.js"></script>    
    
    // <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    // <script type="text/javascript" src="javascript/jquery.gomap-1.3.2.min.js"></script>
    // <script type="text/javascript" src="javascript/jquery.cookie.js"></script>    
    // <script type="text/javascript" src="javascript/datepicker.js"></script>        
    // <script type="text/javascript" src="javascript/jquery.tweet.min.js"></script>
    // <script type="text/javascript" src="javascript/main.js"></script>

    ?>

    <!-- // <script type="text/javascript" src=""></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            new HSS.Contact();
        });
    </script>
</body>
</html>

