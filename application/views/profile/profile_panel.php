<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> ClassicKitchen </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    //echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
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
            </ul>
        </nav>
    </aside>

    <div class="form-group hidden">
        <label for="client_name" class="col-md-2 control-label"> User Id</label>
        <div class="col-md-3">
            <div class="autocomplete-wrapper">
                <input id="user_id" name="user_id" class="form-control autocomplete-client-names user_id " type="text" autocomplete="off" value='<?php echo $user_id; ?>'>
            </div>
        </div>
    </div>

    <div id="main" role="main">
        <div id="ribbon">
            <ol class="breadcrumb">
                <li>Home</li><li>Profile</li>
            </ol>
        </div>

        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa-fw fa fa-user"></i> &nbsp Profile
                        <span>> View Profile </span>
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
                                    <form  class="smart-form" novalidate="novalidate">
                                        <table id="user" class="table table-bordered table-striped" style="clear: both">
                                            <tbody>
                                                <tr>
                                                    <td style="width:35%;"><b>Name</b></td>
                                                    <td style="width:65%" name="name" class="name" id="name"></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date of Birth</b></td>
                                                    <td name="birth-date" id="birth-date" class="birth-date"></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Address</b></td>
                                                    <td name="address" id="address" class="address"></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mobile Number</b></td>
                                                    <td name="mobile" id="mobile" class="mobile"></td>
                                                </tr>
                                                <tr>
                                                    <td><b>User Name</b></td>
                                                    <td name="username" id="username" class="username"></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Password</b></td>
                                                    <td name="password" id="password" class="password"></td>
                                                </tr>


                                            </tbody>
                                        </table>

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


    <!--================================================== -->
    <?php
    echo script_tag('assets/js/jquery-1.11.1.min.js');
    echo script_tag('assets/js/bootstrap/bootstrap.min.js');
    echo script_tag('assets/js/plugin/pace/pace.min.js');
    echo script_tag('assets/js/app.config.js');
    echo script_tag('assets/js/app.min.js');
    echo script_tag('assets/js/profile/user_profile.js');
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
        new HSS.ShowUser();
    });
    </script>
</body>
</html>