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
    echo link_tag('assets/css/owl.carousel.css');
    echo link_tag('assets/css/owl.theme.css');
    echo link_tag('assets/css/custom.css');
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
                <?php echo anchor('logout/logout-panel','<i class="fa fa-sign-out"></i>');?>
            </span>
        </div>

        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>

    </div>
    </header>
    <aside id="left-panel">
        <nav>
            <ul>
                <?php
            if(!$fb_login)
            {

            ?>

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

            <?php
            }

            ?>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Appointment</span></a>
                    <ul>
                        <li>
                            <?php echo anchor('appointment/book-appointment','<span class="menu-item-parent">Book Appointment</span>');?>
                        </li>
                        <li>
                            <?php echo anchor('appointment/view-appointment','<span class="menu-item-parent">View Appointment</span>');?>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Hair Styles</span></a>
                    <ul>
                        <li class="active">
                            <?php echo anchor('hair-style/try-hair-style','<span class="menu-item-parent">Try Hair Styles</span>');?>
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
                        <div class="superbox col-sm-12">
                            <?php
                            foreach($hair_styles_info as $hair_style) {
                                echo '<div class="superbox-list"><img src="'.base_url().'assets/img/superbox/hair_styles/'.$hair_style['hair_style_image'].'" data-img="'.base_url().'assets/img/superbox/hair_styles/'.$hair_style['hair_style_dummy_image'].'" alt="Cutting Price : '.$hair_style['price'].' INR" title="'.$hair_style['style_name'].'" class="superbox-img" /></div>';
                            }
                            ?>
                            <div class="superbox-float"></div>
                        </div>
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
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Try Hair Style</h4>
                        </div>
                        <div class="modal-body">
                            <div class="tabs-wrapper">
                                <div class="tabs">
                                    <ul class="tabs-list">
                                        <li class="active tabs first">
                                            <a href="#web_cam_tab" class="tabs-anchor">Web camera</a>
                                        </li>
                                        <li class="tabs">
                                            <a href="#upload_photo_tab" class="tabs-anchor">Upload photos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tabs-content-wrapper">
                                <div id="upload_photo_tab" class="upload-tab-content hidden row">
                                    <div class="col-md-12">
                                        <div class="uploaded-image-wrapper hidden">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <div class="user-uploaded-image-wrapper">
                                                        <img src="" id="user_uploaded_image" class="img-responsive"/>
                                                        <img class="hidden hat-image" src="" id="applied_hair_style"/>
                                                    </div>
                                                    <div class="dimenstion-controllers">
                                                        <b>Hair Style Width</b>&nbsp;
                                                        <button class="custom-button" id="hair_style_size_plus"><i class="fa fa-plus"></i></button>
                                                        &nbsp;
                                                        <button class="custom-button" id="hair_style_size_minus"><i class="fa fa-minus"></i> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="uploadForm" action="<?php echo base_url(); ?>hair-style/upload-user-image" method="post">
                                            <div class="upload-section">
                                                <h1 class="headings-select-photo">Select a photo from your computer</h1>
                                                <div class="custom-file-upload">
                                                    <input type="file" id="user_image" name="user_image" />
                                                </div>
                                            </div>
                                            <div class="upload-button-wrapper">
                                                <button type="submit" class="custom-button" id="upload_image">Upload Image</button>
                                                <div class="progress-wrapper hidden">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                            0% Complete
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="web_cam_tab" class="web-cam-tab-content row">
                                    <div class="video-player-wrapper col-lg-6">
                                        <div class="video-wapper">
                                            <video id="video" width="100%" autoplay></video>
                                            <?php
                                            echo img(array('src'=>'assets/img/outline.png','class'=>'outline-image'));
                                            ?>
                                        </div>
                                        <div class="span-button-wrapper">
                                            <button class="btn-take-snap btn"><i class="fa fa-camera"></i>&nbsp;&nbsp;Take Snap</button>
                                        </div>
                                    </div>
                                    <div class="snap-wrapper col-lg-6">
                                        <div style="position:relative;">
                                            <div class="over-lay-msg">Drag hair style to move</div>
                                            <canvas id="canvas" width="416" height="312"></canvas>
                                            <img class="hidden hat-image" src="" id="hair_style_web_cam"/>
                                            <div class="dimenstion-controllers-web-cam">
                                                <b>Hair Style Width</b>&nbsp;
                                                <button class="custom-button button-small" id="hair_style_width_plus_web_cam">w&nbsp;<i class="fa fa-plus"></i></button>&nbsp;
                                                <button class="custom-button button-small" id="hair_style_width_minus_web_cam">w&nbsp;<i class="fa fa-minus"></i></button>
                                                &nbsp;<span><a href="#" class="change-hair-style">Change Hair Style</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="image_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Choose Your Hair Style</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="owl-example" class="owl-carousel">
                                        <?php
                                        foreach($hair_styles_info as $hair_style) {
                                            echo '<div class="item darkCyan"><img src="'.base_url().'assets/img/superbox/hair_styles/'.$hair_style['hair_style_image'].'"  /></div>';
                                        }
                                        ?>
                                        <div class="item">
                                            <img src="assets/img/demo-slides/touch.png" alt="Touch">
                                            <h3>Touch</h3>
                                            <h4>Can touch this</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <?php
            echo script_tag('assets/js/jquery-1.11.1.min.js');
            echo script_tag('assets/js/bootstrap/bootstrap.min.js');
            echo script_tag('assets/js/plugin/superbox/superbox.min.js');
            echo script_tag('assets/js/plugin/pace/pace.min.js');
            echo script_tag('assets/js/app.config.js');
            echo script_tag('assets/js/app.min.js');
            echo script_tag('assets/js/jquery-ui.js');
            echo script_tag('assets/js/jquery.ui.touch-punch.js');
            echo script_tag('assets/js/webcam/jquery.webcam.min.js');
            echo script_tag("assets/js/jquery.form.min.js");
            echo script_tag("assets/js/fileupload.js");
            echo script_tag('assets/js/owl.carousel.min.js');
            echo script_tag('assets/js/hair_style/try_hair_style.js');
            ?>
            <script type="text/javascript">
            $(document).ready(function(){
                new HSS.TryHairStyle();
            });
            </script>
        </body>
        </html>
