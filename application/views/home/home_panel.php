<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Haircuts &amp; Beards - Barbershop &amp; Hair Salon </title>
    <meta name="description" content="Haircuts &amp; Beards is modern, clean and professionally crafted HTML template which can be used for Barbershop, Hail Salon, Beauty Salon and other related sites. ">
    <meta name="keywords" content="barber, barber's, barbershop, barber shop, hair salon, beard, beauty, hair, haircut, beardcut, salon, makeup, style, stylist, coloring">
    <meta name="author" content="Rollthemes.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php
    echo link_tag('assets/css/stylesheets/bootstrap.css');
    echo link_tag('assets/css/stylesheets/style.css');
    echo link_tag('assets/css/stylesheets/responsive.css');
    echo link_tag('assets/css/stylesheets/colors/color1.css');
    echo link_tag('assets/css/stylesheets/animate.css');
    ?>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400,700,900' rel='stylesheet' type='text/css'>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Favicon and touch icons  -->
    <link href="assets/img/images/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="assets/img/images/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="assets/img/images/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="assets/img/images/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="assets/img/images/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
    <script src="javascript/html5shiv.js"></script>
    <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-sticky home">
<div class="loader">
    <span class="loader1 block-loader"></span>
    <span class="loader2 block-loader"></span>
    <span class="loader3 block-loader"></span>
</div>
<div class="wrap-slide">
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-wrap clearfix">
            <div class="logo-wrap">
                <div id="logo" class="logo">
                    <a href="<?php echo base_url(); ?>home" rel="home">
                        <img src="<?php echo base_url(); ?>assets/img/trial/logo.png" alt="image">
                    </a>
                </div><!-- /.logo -->
            </div><!-- /.logo-wrap -->
            <div class="nav-wrap">
                <div class="btn-menu"></div><!-- //mobile menu button -->
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li>
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

    <div class="top-slider">
        <div class="flexslider ">
            <ul class="slides">
                <li class="slide1">
                    <div class="container">
                        <div class="row">
                            <div class="flex_caption">
                                <h3 class="title captionDelay8 FromTop">Haircuts &amp; Beards</h3>
                                <h1 class="sub-title captionDelay6 FromTop">Barber
                                    <span class="text-color">’</span>s</h1>
                                <h2 class="modern-style captionDelay4 FromTop">Modern Style</h2>
                                <p class="captionDelay2 FromTop">Anybody can cut hair off, but barber <br> knows where to stop...</p>
                            </div><!-- /.content-slider -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </li>
                <li class="slide2">
                    <div class="container">
                        <div class="row">
                            <div class="flex_caption">
                                <h3 class="title captionDelay9 FromLeft">Haircuts &amp; Beards</h3>
                                <h1 class="sub-title captionDelay7 FromLeft">Barber
                                    <span class="text-color">’</span>s</h1>
                                <h2 class="modern-style captionDelay5 FromLeft">Modern Style</h2>
                                <p class="captionDelay3 FromLeft">Where you will find the cut you are <br> looking for!</p>  
                            </div><!-- /.content-slider -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </li>
                <li class="slide3">
                    <div class="container">
                        <div class="row">
                            <div class="flex_caption">
                                <h3 class="title captionDelay9 FromBottom">Haircuts &amp; Beards</h3>
                                <h1 class="sub-title captionDelay7 FromBottom">Barber
                                    <span class="text-color">’</span>s</h1>
                                <h2 class="captionDelay5 FromBottom">Modern Style</h2>
                                <p class="captionDelay3 FromBottom">Giving you a legendary haircut with<br> traditional service.</p>
                            </div><!-- /.content-slider -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </li>
            </ul>
        </div>
    </div><!-- /.roll-slider -->
</div><!-- /wrap-slide -->

<!-- Information -->
<section class="roll-row information" style="padding: 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="roll-information clearfix">
                    <div class="email"><span>contact@monarchsalon.in</span></div>
                    <div class="phone"><span>9829158345</span></div>
                    <div class="road"><span>Panchwati, Udaipur(Raj.)</span></div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Button -->
<section class="roll-row parallax parallax1" style="padding: 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php base_url(); ?>gallery" class="roll-button border black">Check Gallery</a>
            </div><!-- /.col-md-12 -->
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
                        <p class="sub">Haircuts &amp; Beards</p>
                        <h2 class="main">Haircuts</h2>
                        <ul>
                            <li>Men’s cuts (13-59) - <span>150 INR</span></li>
                            <li>Women’s cuts (13-59) - <span>200 INR</span></li>
                            <li>Kid’s cuts (under 12) - <span>150 INR</span></li>
                        </ul>
                        <a href="#" class="roll-button white">See all cuts</a>
                    </div><!-- /.roll-services -->
                    <div class="photo">
                        <img src="<?php base_url(); ?> assets/img/trial/services/1.jpg" alt="image">
                    </div>
                </div><!-- /.item -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4" style="background-color: #66c7cc; padding: 0">
                <div class="item">
                    <div class="photo">
                        <img src="<?php base_url(); ?> assets/img/trial/services/2.jpg" alt="image">
                    </div>
                    <div class="roll-services">
                        <p class="sub">Haircuts &amp; Beards</p>
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
                        <p class="sub">Haircuts &amp; Beards</p>
                        <h2 class="main">Coloring</h2>
                        <ul>
                            <li>Bleach & tone -(13-59) - <span>250 INR</span></li>
                            <li>All-over custom color - <span>500 INR</span></li>
                            <li>Highlighting - <span>Variable price</span></li>
                        </ul>
                        <a href="#" class="roll-button white">See all Coloring</a>
                    </div><!-- /.roll-services -->
                    <div class="photo">
                        <img src="<?php base_url(); ?> assets/img/trial/services/3.jpg" alt="image">
                    </div>
                </div><!-- /.item -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Testimonials -->
<section class="roll-row testimonials parallax2 parallax" style="padding: 110px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title text-center">Giving you a legendary haircut with<br><span class="text-color">traditional service</span></h1>
                <div class="roll-testimonials v2">
                    <div class="customer">
                        <blockquote class="text">Polite, professional, charming &amp; courteous team. The best haircut<br> I have ever had! Barber was full of crack, was more than happy to<br> suggest the best cut for me!</blockquote>
                        <div class="person text-center">
                            <img src="<?php base_url(); ?>assets/img/trial/author/1.png" alt="image">
                            <h5 class="name">- Dennis Lee, Client -</h5>
                        </div>
                    </div>
                    <div class="customer">
                        <blockquote class="text">Polite, professional, charming &amp; courteous team. The best haircut<br> I have ever had! Barber was full of crack, was more than happy to<br> suggest the best cut for me!</blockquote>
                        <div class="person text-center">
                            <img src="<?php base_url(); ?>assets/img/trial/author/2.jpg" alt="image">
                            <h5 class="name">- Dennis Lee, Client -</h5>
                        </div>
                    </div>
                    <div class="customer">
                        <blockquote class="text">Polite, professional, charming &amp; courteous team. The best haircut<br> I have ever had! Barber was full of crack, was more than happy to<br> suggest the best cut for me!</blockquote>
                        <div class="person text-center">
                            <img src="<?php base_url(); ?>assets/img/trial/author/3.jpg" alt="image">
                            <h5 class="name">- Dennis Lee, Client -</h5>
                        </div>
                    </div>
                </div><!-- /.roll-testimonials -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Working Hours -->
<section class="roll-row parallax parallax3" style="padding: 40px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding: 0">
                <ul class="roll-working-hours">
                     <li>
                        <h3>Sun</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                    <li>
                        <h3>Mon</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                    <li class="shop-close">
                        <h3>Tue</h3>
                        <p>Closed</p>
                    </li>
                    <li>
                        <h3>Wed</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                    <li>
                        <h3>Thu</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                    <li>
                        <h3>Fri</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                    <li>
                        <h3>Sat</h3>
                        <p>9:00 AM - 9:00 PM</p>
                    </li>
                </ul><!-- /.roll-working-hours -->
            </div><!-- /.col-md-12 -->
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
                        <div class="toggle-title active">Hair Cut</div>
                        <div class="toggle-content">
                            <img src="<?php base_url(); ?>assets/img/trial/services/4.jpg" alt="images">
                            <p>Ravi Sen.</p>
                        </div>
                    </div><!-- /toggle -->
                    <div class="roll-toggle">
                        <div class="toggle-title">Coloring</div>
                        <div class="toggle-content">
                            <img src="<?php base_url(); ?>assets/img/trial/services/4.jpg" alt="images">
                            <div class="info">
                                <p class="desc-info">Ravi Sen.</p>
                            </div>
                        </div>
                    </div><!-- /.toggle -->
                    <div class="roll-toggle">
                        <div class="toggle-title">Breads Style</div>
                        <div class="toggle-content">
                            <img src="<?php base_url(); ?>assets/img/trial/services/4.jpg" alt="images">
                            <div class="info">
                                <p class="desc-info">Ravi Sen.</p>
                            </div>
                        </div>
                    </div><!-- /.toggle -->
                    <div class="roll-toggle">
                        <div class="toggle-title">Spa</div>
                        <div class="toggle-content">
                            <img src="<?php base_url(); ?>assets/img/trial/services/4.jpg" alt="images">
                            <div class="info">
                                <p class="desc-info">Ravi Sen.</p>
                            </div>
                        </div>
                    </div><!-- /.toggle -->
                    <div class="roll-toggle">
                        <div class="toggle-title">Tatoo</div>
                        <div class="toggle-content">
                            <img src="<?php base_url(); ?>assets/img/trial/services/4.jpg" alt="images">
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
                            <img src="assets/img/trial/services/5.jpg" alt="images">
                            <p>Use Best Quality Product.</p>
                        </div>
                        <div class="content-inner">
                            <img src="assets/img/trial/services/7.jpg" alt="images">
                            <p>Apply By Expert.</p>
                        </div>
                        <div class="content-inner">
                            <img src="assets/img/trial/services/6.jpg" alt="images">
                            <p>Get Good Result.</p>
                        </div>
                    </div><!-- /.content-tab -->
                </div><!-- /.roll-tabs -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Appointment -->
<section class="roll-row" style="padding: 0; background: url('assets/img/trial/parallax6.jpg');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding: 0">
                <div class="item">
                </div><!-- /.item -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 roll-appointment" style="background-color: rgba(249,199,101, 0.9); padding: 4% 6%">
                <div class="item">
                    <div class="roll-titlebox">
                        <p class="sub">Haircuts &amp; Beards</p>
                        <h2 class="main">Appointment</h2>
                    </div>
                    <form class="appointment-form" id="appointment-form">
                        <div class="input-wrap name">
                            <input type="text" value="" tabindex="1" placeholder="Full Name" name="appointment_name" id="appointment_name" class="appointment_name">
                        </div>
                        <div class="input-wrap phone input-small pull-left">
                            <input type="text" value="" tabindex="2" placeholder="Phone number" name="appointment_mobile" id="appointment_mobile" class="appointment_mobile">
                        </div>
                        <div class="input-wrap email input-small last pull-right">
                            <input type="email" value="" tabindex="3" placeholder="E-mail address" name="appointment_email" id="appointment_email" class="appointment_email">
                        </div>
                        <div class="wrap-select services">
                            <select class="select-field service appointment_services" tabindex="4" name="appointment_services" id="appointment_services">
                                <option value="" selected="selected"> Choose service </option>
                                <option value="BeardCuts">BeardCuts </option>
                                <option value="Haircuts"> Haircuts</option>
                                <option value="Coloring"> Coloring </option>
                            </select>
                        </div><!-- /.wrap-select -->
                        <div class="wrap-select barber">
                            <select class="select-field barber appointment_booking_with" tabindex="5" name="appointment_booking_with" id="appointment_booking_with">
                                <option value="" selected> Choose barber </option>
                                <?php
                                foreach($employees as $employee) {
                                    echo "<option value='$employee[id]'>$employee[name]</option>";
                                }
                                ?>
                            </select>
                        </div><!-- /.wrap-select -->
                        <div class="group-select clearfix">
                            <div class="wrap-select-group">
                                <input type="text" id="datepicker" class="appointment_date" tabindex="6" placeholder="Date / Month" name="appointment_date" id="appointment_date">
                            </div><!-- /.wrap-select -->
                            <div class="wrap-select-group">
                                <select class="select-field time appointment_time" name="appointment_time" tabindex="7" id="appointment_time">
                                    <option value="" selected="selected"> Time </option>
                                    <option value="09:00 am"> 09:00 AM </option>
                                    <option value="10:00 am"> 10:00 AM</option>
                                    <option value="11:00 am"> 11:00 AM</option>
                                    <option value="12:00 pm"> 12:00 AM </option>
                                    <option value="01:00 pm"> 13:00 PM</option>
                                    <option value="02:00 pm"> 01:00 PM</option>
                                    <option value="03:00 pm"> 02:00 PM</option>
                                    <option value="04:00 pm"> 03:00 PM</option>
                                    <option value="05:00 pm"> 04:00 PM</option>
                                    <option value="05:00 pm"> 05:00 PM</option>
                                    <option value="06:00 pm"> 06:00 PM</option>
                                    <option value="07:00 pm"> 07:00 PM</option>
                                    <option value="08:00 pm"> 08:00 PM</option>
                                </select>
                            </div><!-- /.wrap-select -->
                        </div><!-- /.group-select -->
                        <div class="submit-form">
                            <div class="alert alert-warning alert-dismissible alert-appointment hidden" id="appointment_alert_button" role="alert">
                                <button type="button" class="close"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                Appointment Booked, Confirmation will be sent by message.
                            </div>
                            <button class="roll-button white appointment_button" tabindex="8"  type="submit">Book Appointment</button>
                            <button class="roll-button white appointment_reset_button hidden">Reset</button>
                        </div>
                    </form><!-- /.comment-form -->

                </div><!-- /.item -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Blog Posts -->
<section class="roll-row parallax parallax5">
    <div class="container-fluid">
        <div class="row">
            <div class="roll-titlebox text-center">
                <p class="sub text-color">Haircuts &amp; Beards</p>
                <h2 class="main text-dark">Blog Posts</h2>
            </div>
            <div class="roll-news">
                <div class="article">
                    <div class="featured-post">
                        <img src="<?php base_url(); ?>assets/img/trial/blog/1.jpg" alt="image">
                        <ul class="post-format">
                            <li class="date">
                                <span class="day">01</span>
                                <span class="month">APR</span>
                            </li>
                        </ul><!-- /.post-format -->
                    </div><!-- /.feature-post -->
                    <div class="content-post">
                        <h3 class="title-post"><a href="blog-single.html">Haircut</a></h3>
                        <div class="excerpt">
                            <p>Qwerty</p>
                        </div>
                        <ul class="sharebar">
                            <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                            <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                            <li><a href="#"><span class="icon-social">G</span></a></li>
                        </ul>
                    </div><!-- /.content-post -->
                </div>
                <div class="article">
                    <div class="item-post">
                        <div class="featured-post">
                            <img src="<?php base_url(); ?>assets/img/trial/blog/2.jpg" alt="image">
                            <ul class="post-format">
                                <li class="date">
                                    <span class="day">07</span>
                                    <span class="month">APR</span>
                                </li>
                            </ul><!-- /.post-format -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h3 class="title-post"><a href="blog-single.html">Beard</a></h3>
                            <div class="entry-post">
                                <p>Qwerty</p>
                            </div>
                            <ul class="sharebar">
                                <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                                <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                                <li><a href="#"><span class="icon-social">G</span></a></li>
                            </ul>
                        </div><!-- /.content-post -->
                    </div>
                </div>
                <div class="article">
                    <div class="item-post">
                        <div class="featured-post">
                            <img src="<?php base_url(); ?>assets/img/trial/blog/3.jpg" alt="image">
                            <ul class="post-format">
                                <li class="date">
                                    <span class="day">08</span>
                                    <span class="month">APR</span>
                                </li>
                            </ul><!-- /.post-format -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h3 class="title-post"><a href="blog-single.html">Tattoo</a></h3>
                            <div class="entry-post">
                                <p>Qwerty</p>
                            </div>
                            <ul class="sharebar">
                                <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                                <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                                <li><a href="#"><span class="icon-social">G</span></a></li>
                            </ul>
                        </div><!-- /.content-post -->
                    </div>
                </div>
                <div class="article">
                    <div class="item-post">
                        <div class="featured-post">
                            <img src="<?php base_url(); ?>assets/img/trial/blog/4.jpg" alt="image">
                            <ul class="post-format">
                                <li class="date">
                                    <span class="day">12</span>
                                    <span class="month">APR</span>
                                </li>
                            </ul><!-- /.post-format -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h3 class="title-post"><a href="blog-single.html">Coloring</a></h3>
                            <div class="entry-post">
                                <p>Qwerty</p>
                            </div>
                            <ul class="sharebar">
                                <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                                <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                                <li><a href="#"><span class="icon-social">G</span></a></li>
                            </ul>
                        </div><!-- /.content-post -->
                    </div>
                </div>
                <div class="article">
                    <div class="item-post">
                        <div class="featured-post">
                            <img src="<?php base_url(); ?>assets/img/trial/blog/5.jpg" alt="image">
                            <ul class="post-format">
                                <li class="date">
                                    <span class="day">18</span>
                                    <span class="month">APR</span>
                                </li>
                            </ul><!-- /.post-format -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h3 class="title-post"><a href="blog-single.html">Spa</a></h3>
                            <div class="entry-post">
                                <p>Qwerty</p>
                            </div>
                            <ul class="sharebar">
                                <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                                <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                                <li><a href="#"><span class="icon-social">G</span></a></li>
                            </ul>
                        </div><!-- /.content-post -->
                    </div>
                </div>
                <div class="article">
                    <div class="item-post">
                        <div class="featured-post">
                            <img src="<?php base_url(); ?>assets/img/trial/blog/1.jpg" alt="image">
                            <ul class="post-format">
                                <li class="date">
                                    <span class="day">12</span>
                                    <span class="month">APR</span>
                                </li>
                            </ul><!-- /.post-format -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h3 class="title-post"><a href="blog-single.html">Tatoo</a></h3>
                            <div class="entry-post">
                                <p>Qwerty</p>
                            </div>
                            <ul class="sharebar">
                                <li><a href="#"><span class="icon-social facebook">F</span></a></li>
                                <li><a href="#"><span class="icon-social twitter">L</span></a></li>
                                <li><a href="#"><span class="icon-social">G</span></a></li>
                            </ul>
                        </div><!-- /.content-post -->
                    </div>
                </div>
            </div><!-- /.blog-carousel -->
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

<!-- Gallery -->
<section class="roll-row" style="padding: 0">
    <div class="roll-gallery">
        <div class="owl-carousel">
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/1.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                    <!-- <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Ayesha Khan</h3>
                    <p><a href="">Haircuts</a>,<a href=""> Women</a></p>
                </div><!-- /.gallery-content -->
            </div>
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/2.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                    <!-- <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Ragini Tankt</h3>
                    <p><a href="">Haircuts</a>,<a href=""> Women</a></p>
                </div><!-- /.gallery-content -->
            </div>
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/3.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                    <!-- <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Neeti Verma</h3>
                    <p><a href="">Haircuts</a>,<a href=""> Women</a></p>
                </div><!-- /.gallery-content -->
            </div>
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/4.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                    <!-- <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Divya Sharma</h3>
                    <p><a href="">Haircuts</a>,<a href=""> Women</a></p>
                </div><!-- /.gallery-content -->
            </div>
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/1.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                   <!--  <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Magna aliquyam erat</h3>
                    <p><span>Haircuts</span>, Women</p>
                </div><!-- /.gallery-content -->
            </div>
            <div class="item">
                <img src="<?php base_url(); ?>assets/img/trial/gallery/2.jpg" alt="image">
                <div class="hover">
                </div><!-- /.hover -->
                <div class="gallery-content">
                    <!-- <ul class="gallery-link">
                        <li class="icon-s FromLeft"><span class="icon-search5"></span></li>
                        <li class="icon-l FromRight"><span class="icon-location5"></span></li>
                    </ul> -->
                    <h3>Magna aliquyam erat</h3>
                    <p><a href="">Haircuts</a>,<a href=""> Women</a></p>
                </div><!-- /.gallery-content -->
            </div>
        </div>
    </div><!-- /.roll-carousel -->
</section>

<!-- Contact -->
<section class="roll-row" style="padding: 75px 0; background: url('assets/img/trial/contact.jpg')">
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

<!-- Contact Form -->
<section class="roll-row" style="background: url('assets/img/trial/contact-form.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="roll-titlebox text-center">
                    <p class="sub text-color">Haircuts &amp; Beards</p>
                    <h2 class="main text-dark">Contact Form</h2>
                </div>
                <div class="alert alert-warning alert-dismissible hidden " id="contact_alert_button" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                    Hello, we received your message. We will shortly contact you.
                </div>
                <form class="roll-contact-form short my_contact_form" id="contact_form">
                    <div class="input-wrap name">
                        <input type="text" value="" tabindex="9" placeholder="Full Name" name="contact_name" id="contact_name" class="contact_name">
                        <span class='error-span' data-error-for='contact_name'>Error</span>
                    </div>
                    <div class="input-wrap last phone">
                        <input type="text" value="" placeholder="Phone" tabindex="10" name="contact_mobile" id="contact_mobile" class="contact_mobile" >
                        <span class='error-span' data-error-for='contact_mobile'>Error</span>
                    </div>
                    <div class="input-wrap email">
                        <input type="email" value="" tabindex="11" placeholder="Email Address" name="contact_email" id="contact_email" class="contact_email">
                        <span class='error-span' data-error-for='contact_email'>Error</span>
                    </div>
                    <div class="input-wrap last Subject">
                        <input type="text" value="" placeholder="subject" tabindex="12" name="contact_subject" id="contact_subject" class="contact_subject">
                        <span class='error-span' data-error-for='contact_subject'>Error</span>
                    </div>

                    <div class="textarea-wrap new_text_field">
                        <textarea class="type-input contact_message" tabindex="13" placeholder="Message" name="contact_message" id="contact_message"></textarea>
                        <span class='error-span' data-error-for='contact_message'>Error</span>
                    </div>
                    <div class="submit-wrap text-center">
                        <button class="roll-button contact_button" tabindex="14" type="submit">Send Message</button>
                        <button type="reset" class="hidden" id="reset_contact_button">Reset</button>
                    </div>
                </form><!-- /.comment-form -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
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

                

                <div class="col-md-4">
                    <div class="widget widget-posts">
                        <h5 class="widget-title">Posts </h5>
                        <ul class="posts clearfix">
                            <li>
                                <div class="thumb">
                                    <img src="<?php base_url(); ?>assets/img/trial/blog/6.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Duis autem vel eum iriure dolorin </a></h6>
                                    <p>April 9, 2014</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="<?php base_url(); ?>assets/img/trial/blog/7.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Hendrerit in vulputate velit esse </a></h6>
                                    <p>April 5, 2014</p>
                                </div>
                            </li>
                        </ul><!-- /.recent-posts -->
                    </div><!-- /.widget-recent-posts -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4">
                    <div class="widget widget-subscribe">
                        <h5 class="widget-title">Subscribe</h5>
                        <form id="subscribe-form" data-mailchimp="true">
                            <div id="subscribe-content">
                                <div class="input-wrap email">
                                    <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email Address">
                                </div>
                                <div class="button-wrap">
                                    <button type="submit" id="subscribe-button" class="subscribe-button" title="Subscribe now"> + </button>
                                    <span class="place-error" data-error-for="subscribe-button"></span>
                                </div>
                            </div>
                             <div class="alert alert-warning alert-dismissible hidden " id="subscription_alert_button" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                Thanks for the subscription..!!
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
echo script_tag('assets/js/home/jquery.easing.js');
echo script_tag('assets/js/home/jquery-waypoints.js');
echo script_tag('assets/js/home/jquery.flexslider-min.js');
echo script_tag('assets/js/home/owl.carousel.js');
echo script_tag('assets/js/home/parallax.js');
echo script_tag('assets/js/home/jquery.cookie.js');
echo script_tag('assets/js/home/jquery.tweet.min.js');
echo script_tag('assets/js/home/jquery.matchHeight-min.js');
echo script_tag('assets/js/home/jquery-validate.js');
echo script_tag('assets/js/home/datepicker.js');
echo script_tag('assets/js/home/jquery.sticky.js');
echo script_tag('assets/js/home/main.js');
echo script_tag('assets/js/home.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.Home();
    });
</script>
</body>
</html>