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
                        <a href="index.html" rel="home">
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
                            <li class="active">
                                <a href="<?php echo base_url(); ?>gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>contact">Contact </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>login" >Login</a>
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
                            <h1>Monarch Saloon Gallery</h1>
                        </div><!-- /.page-title-captions -->
                        <!-- <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Gallery </a></li>
                                <li><a href="#">Regular Gallery </a></li>
                                <li>3 Columns</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.header-page -->

    <!-- Regular Gallery -->
    <section  class="main-content gallery_regular">
        <div class="container">
            <div class="row"> 
                <div class="roll-project gallery_regular">
                    <ul class="project-filter">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".women" href="#">WoMen’s Cuts</a></li>
                        <li><a data-filter=".men" href="#">Men’s Cuts</a></li>
                        <li><a data-filter=".beards" href="#">Beards</a></li>
                        <li><a data-filter=".highligh" href="#">Highlighting</a></li>
                        <li><a data-filter=".bleach" href="#">Bleach &amp; Tone</a></li>
                    </ul><!-- /.project-filter -->

                    <div class="project-wrap clear-fix">                        
                        <div class="project-item women">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/5.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item women men beards">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/6.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach men beards">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/7.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach men beards">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/8.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/8.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/9.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach highligh">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/9.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach highligh">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/10.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/11.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach highligh">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/12.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item  bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/13.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/14.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/15.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item bleach women">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/16.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->

                        <div class="project-item  bleach women">
                            <div class="item-wrap">
                                <div class="project-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/trial/gallery/17.jpg" alt="image">
                                </div>
                            </div><!-- /.item-wrap -->
                        </div><!-- /.project-item -->                        
                    </div><!-- /.project-wrap -->

                    <?php
                    // <div class="gallery-pagination text-center">
                    //     <ul class="roll-pagination clearfix">
                    //         <li class="prev"><a href="#">prev</a></li>
                    //         <li class="active">1</li>
                    //         <li><a href="#">2</a></li>
                    //         <li><a href="#">3</a></li>
                    //         <li><a href="#">4</a></li>
                    //         <li><a href="#">5</a></li>
                    //         <li class="next"><a href="#">next</a></li>
                    //     </ul>
                    // </div><!-- /.pagination -->                       
                    ?>
                </div><!-- /.roll-projects -->                           
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
    echo script_tag('assets/js/home/jquery.isotope.min.js');
    echo script_tag('assets/js/home/imagesloaded.min.js');
    echo script_tag('assets/js/home/jquery.cookie.js');
    echo script_tag('assets/js/home/datepicker.js');
    echo script_tag('assets/js/home/jquery.tweet.min.js');
    echo script_tag('assets/js/home/main.js');

    // <script type="text/javascript" src="javascript/jquery.min.js"></script>
    // <script type="text/javascript" src="javascript/bootstrap.min.js"></script>    
    // <script type="text/javascript" src="javascript/jquery.sticky.js"></script>
    // <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    // <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
    // <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>
    // <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    // <script type="text/javascript" src="javascript/datepicker.js"></script>       
    // <script type="text/javascript" src="javascript/jquery.tweet.min.js"></script>
    // <script type="text/javascript" src="javascript/main.js"></script>
    ?>
</body>
</html>