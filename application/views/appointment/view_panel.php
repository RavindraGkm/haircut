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
                        <?php echo anchor('user-profile/view-page','<span class="menu-item-parent">View Profile</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('user-profile/edit-page','<span class="menu-item-parent">Edit Profile</span>');?>
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
            <li>Home</li><li>View Appointment</li>
        </ol>
    </div>
    
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa fa-book"></i> &nbsp Appointment
                    <span>&nbsp > &nbsp View</span>
                </h1>
            </div>
        <input class="user_id hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>">
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>View Appointments</h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding">
                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">ID</th>
                                        <th data-class="expand"><i class="fa fa-fw text-muted hidden-md hidden-sm hidden-xs"></i>NAME</th>
                                        <th data-hide="phone"><i class="fa fa-fw text-muted hidden-md hidden-sm hidden-xs"></i>Booking Date</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw txt-color-blue hidden-md hidden-sm hidden-xs"></i> Booking With</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw txt-color-blue hidden-md hidden-sm hidden-xs"></i> Booking Timing</th>
                                        <th data-hide="phone,tablet"><I class="fa fa-fw txt-color-blue hidden-md hidden-sm hidden-xs"></i>Phone</th>
                                        <th data-hide="phone,tablet"><I class="fa fa-fw txt-color-blue hidden-md hidden-sm hidden-xs"></i>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody id="appontment_data_json"></tbody>
                                </table>
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
echo script_tag('assets/js/appointment/view_appointment.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.ViewAppointment();
    });
</script>
</body>
</html>