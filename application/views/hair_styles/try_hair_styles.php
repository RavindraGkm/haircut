<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> Monarch Saloon </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/smartadmin-production.min.css');
    echo link_tag('assets/css/smartadmin-skins.min.css');
    echo link_tag('assets/css/demo.min.css');
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body class="">

<header id="header">
    <div id="logo-group">
        <span id="logo">
            <?php echo img(array('src'=>'assets/img/logo.png','alt'=>'SmartAdmin')); ?>
        </span>
    </div>
    <div class="pull-right">
        <div id="logout" class="btn-header transparent pull-right">
            <span class="">
                <?php echo anchor(base_url(),'<i class="fa fa-sign-out"></i>');?>
            </span>
        </div>
    </div>
</header>
<aside id="left-panel">
    <nav>
        <ul>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Profile</span></a>
                <ul>
                    <li>
                        <?php echo anchor('profile/view-profile','<span class="menu-item-parent">View Profile</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('profile/edit-profile','<span class="menu-item-parent">Edit Profile</span>');?>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Appointment</span></a>
                <ul>
                    <li>
                        <?php echo anchor('appointment/book-appointment','<span class="menu-item-parent">Book Appointment</span>');?>
                    </li>
                    <li class="active">
                        <?php echo anchor('appointment/view-appointment','<span class="menu-item-parent">View Appointment</span>');?>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Home</li><li>Hair Styles</li><li>Try Hair Styles</li>
        </ol>
    </div>
    <div id="content">
        <div class="row hidden-mobile">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-picture-o"></i>
                    Hair Styles <span>>
					Try hair styles </span></h1>
            </div>
        </div>
        <div class="row">

            <!-- SuperBox -->
            <div class="superbox col-sm-12">
                <div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-1.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-1.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Miller Cine" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-2.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-2.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Bridge of Edgen" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-3.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-3.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Lines of Friendship" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-4.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-4.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="My new car!" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-5.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-5.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Study Time" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-6.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-6.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="San Francisco Bridge"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-7.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-7.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="New Styla"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-8.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-8.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristpta"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-9.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-9.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristine Dine"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-10.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-10.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Mosaic Clock"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-11.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-11.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Elegance"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-12.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-12.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="China Town"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-13.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-13.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Sky Diving"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-14.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-14.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Country Music"  class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-15.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-15.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="You are late!" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-16.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-16.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Royal Bengle Tiger" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-17.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-17.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Snowpine" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-18.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-18.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Hop Jop Mop" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-19.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-19.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Party Girls" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-20.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-20.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Dragon Fly" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-21.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-21.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Kinds Road" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-22.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-22.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Tokyo" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-23.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-23.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Rome" class="superbox-img">
                </div><!--
				--><div class="superbox-list">
                    <img src="<?php echo base_url(); ?>assets/img/superbox/superbox-thumb-24.jpg" data-img="<?php echo base_url(); ?>assets/img/superbox/superbox-full-24.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Traning" class="superbox-img">
                </div>
                <div class="superbox-float"></div>
            </div>
            <!-- /SuperBox -->

            <div class="superbox-show" style="height:300px; display: none"></div>

        </div>
    </div>
</div>
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Hair Style Saloon © 2013-2014</span>
        </div>
    </div>
</div>
<?php
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/bootstrap/bootstrap.min.js');
echo script_tag('assets/js/plugin/superbox/superbox.min.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/appointment/view_appointment.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.superbox').SuperBox();
    });
</script>
</body>
</html>