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
    echo link_tag('assets/css/datepicker.css');
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body class="">
    <input id='user_email' type="hidden" value='<?php echo $user_email; ?>'/>
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
            
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Profile</span></a>
                <ul>
                   <li>
                        <?php echo anchor('profile/view-profile','<span class="menu-item-parent">View Profile</span>');?>
                    </li>
                    <li class="active">
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
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Hair Styles</span></a>
                <ul>
                    <li>
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
            <li>Home</li><li>Profile</li><li>Edit Profile</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Profile
                    <span>> Edit Profile </span>
                </h1>
            </div>
        </div>

        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>View Profile</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form  class="smart-form" id="edit-profile-form">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="name" class="name" id="name">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                                    <input name="birth_date" id="birth_date" class="birth_date">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                    <input type="text" name="address" id="address" class="address">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="text" name="mobile" id="mobile" class="mobile">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-lg-12">
                                                <label class="input"> <i class="icon-prepend fa fa-unlock-alt"></i>
                                                    <input type="password" name="password" id="password" class="password" placeholder="Password">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" class="btn btn-primary myupdate">Update Profile Info</button>
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


</div>
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Hair Style Saloon © 2013-2014</span>
        </div>
    </div>
</div>
<!--================================================== -->
<?php
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/bootstrap/bootstrap.min.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/home/jquery-validate.js');
echo script_tag('assets/js/profile/edit_profile.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.EditUser();
    });
</script>
</body>
</html>