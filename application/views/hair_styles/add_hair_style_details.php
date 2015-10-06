<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Monarch Saloon</title>
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
    echo link_tag('assets/css/datepicker.css');
    echo link_tag('assets/css/time-picker.css');
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
                    <li>
                        <?php echo anchor('hair-style/try-hair-style','<span class="menu-item-parent">Try Hair Styles</span>');?>
                    </li>
                    <li class="active">
                        <?php echo anchor('hair-style/add-hair-style','<span class="menu-item-parent">Add Hair Styles</span>');?>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Home</li><li>Hair Styles</li><li>Add Hair Styles</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa fa-book"></i> &nbsp Hair Styles
                    <span>> Add Hair Styles </span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Fill details to add new hair style</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <?php
                                $attributes = array('class' => 'smart-form','novalidate'=>'novalidate');
                                echo form_open_multipart('hair-style/add-hair-action', $attributes);
                                if(isset($error)) {
                                    echo '<input type="hidden" id="error" />';
                                }
                                if(isset($msg)) {
                                    echo '<input type="hidden" id="msg" />';
                                }
                                ?>
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-magic"></i>
                                                <input type="text" name="style_name" class="name" id="name" placeholder="Style name">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-rupee"></i>
                                                <input name="style_price" id="style_price" class="booking_date" placeholder="Style price">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-lg-12">
                                            <div class="input input-file">
                                                    <span class="button">
                                                        <input class="file-input" id="file1" type="file" name="hair_style_image" onchange="this.parentNode.nextSibling.value = this.value">Browse
                                                    </span>
                                                <input class="file-name" type="text" placeholder="Choose hair style" readonly="" />
                                            </div>
                                        </section>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-lg-12">
                                            <div class="input input-file">
                                                    <span class="button">
                                                        <input class="file-input" id="file2" type="file" name="hair_style_dummy_image" onchange="this.parentNode.nextSibling.value = this.value">Browse
                                                    </span>
                                                <input class="file-name" type="text" placeholder="Choose hair style image" readonly="" />
                                            </div>
                                        </section>
                                    </div>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary mybooking" id="mybooking">Add new style details</button>
                                </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
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
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/timepicker.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".file-input").change(function() {
            var parent = $(this).closest('.input-file').find('.file-name').val($(this).val());
        });
        if($("#error").length) {
            $.smallBox({
                title: "Some Error Occured",
                content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                color: "#c26565",
                iconSmall: "fa fa-thumbs-down bounce animated",
                timeout: 4000
            },function() {
                var clean_uri = location.protocol + "//" + location.host + location.pathname;
                window.history.replaceState({}, document.title, clean_uri);
            });
        }
        if($("#msg").length) {
            $.smallBox({
                title: "Hair styles addedd successfully",
                content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                color: "#296191",
                iconSmall: "fa fa-thumbs-up bounce animated",
                timeout: 4000
            },function() {
                var clean_uri = location.protocol + "//" + location.host + location.pathname;
                window.history.replaceState({}, document.title, clean_uri);
            });
        }
    });
</script>
</body>
</html>