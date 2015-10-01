<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> Monarch Saloon </title>
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
                    <li class="active">
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
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Home</li><li>Book Appointment</li>
        </ol>
    </div>

    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa fa-book"></i> &nbsp Appointment
                    <span>> Booking </span>
                </h1>
            </div>

        </div>

        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Book Your Appointment</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form  class="smart-form" novalidate="novalidate">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="name" class="name" id="name" placeholder="Your Name">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                                    <input name="booking_date" id="booking_date" class="booking_date" placeholder="Booking Date">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input">
                                                    <select class="booking_with form-control" id="booking_with">
                                                        <option>Booking With</option>
                                                        <option value='1'>Booking with Mr A</option>
                                                        <option value='2'>Booking with Mr B</option>
                                                        <option value='3'>Booking with Mr C</option>
                                                        <option value='4'>Booking With Mr C</option>
                                                    </select>
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-clock-o"></i>
                                                    <input type="text" name="booking_timing" id="booking_timing" class="booking_timing" placeholder="Booking Time">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="text" name="mobile" id="mobile" class="mobile" placeholder="Phone">
                                                </label>
                                            </section>
                                            <section class="col col-6 hidden">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="hidden" name="user_email" id="user_email" value="<?php echo $user_email; ?>">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <footer>
                                        <button type="reset" class="hidden" id="reset_client_form"></button>
                                        <button type="button" class="btn btn-primary mybooking" id="mybooking">Book new appointment</button>
                                        <button type="reset" class="hidden" id="reset_appointment_form"></button>
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
<!--================================================== -->
<?php
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/bootstrap/bootstrap.min.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/timepicker.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
echo script_tag('assets/js/appointment/book_appointment.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.BookAppointment();
    });
</script>
</body>
</html>