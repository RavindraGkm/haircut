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
    </div>
</header>
<aside id="left-panel">
    <nav>
        <ul>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Employee</span></a>
                <ul>
                    <li >
                        <?php echo anchor('employee/employee-registration','<span class="menu-item-parent">Registration Panel</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('employee/view-employee-details','<span class="menu-item-parent">View Employee Details</span>');?>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Appointments</span></a>
                <ul>
                    <li class="active">
                        <?php echo anchor('appointment/view-all-appointment','<span class="menu-item-parent">Appointment</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Users</span></a>
                <ul>
                    <li>
                        <?php echo anchor('profile/show-all-user','<span class="menu-item-parent">All Users</span>');?>
                    </li>                    
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Hair Styles</span></a>
                <ul>
                    <li>
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
            <li>Home</li><li>Appointments</li>
        </ol>
    </div>
    
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa fa-book"></i> &nbsp Appointments
                    <span>&nbsp > &nbsp Appointment</span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>All Appointments</h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding">
                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">S. No.</th>
                                        <th data-class="expand" class="hidden"><i class="fa fa-fw text-muted "></i>Appointment ID</th>
                                        <th data-class="expand">Name</th>
                                        <th data-hide="phone">Booking Date</th>
                                        <th data-hide="phone,tablet">Booking With</th>
                                        <th data-hide="phone,tablet">Booking Timing</th>
                                        <th data-hide="phone,tablet">Phone</th>
                                        <th data-hide="phone,tablet">Status</th>
                                        <th data-hide="phone,tablet">Choice</th>
                                        <th data-hide="phone,tablet">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="employess_data_json"></tbody>
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
echo script_tag('assets/js/appointment/all_appointments.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.Appointments();
    });
</script>
</body>
</html>