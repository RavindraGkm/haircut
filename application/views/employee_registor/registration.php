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
<body class="">
<header id="header">
    <div id="logo-group">
        <span id="logo"> <img src="<?php echo base_url('assets/img/logo.png')?>" alt="SmartAdmin"> </span>
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
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Employee</span></a>
                <ul>
                    <li class="active">
                        <?php echo anchor('employee/employee-registration','<span class="menu-item-parent">Registration Panel</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('employee/view-employee-details','<span class="menu-item-parent">View Employee Details</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Appointments</span></a>
                <ul>
                    <li>
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
            <li>Home></li><li>Employee</li><li>Employee Registration Panel</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Employee
                    <span> > Registration</span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-8">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Fill information to add new employee</h2>
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
                                                    <input type="text" name="name" class="name" id="name" placeholder="Employee name">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                                    <input name="birth_date" id="birth_date" placeholder="Employee DOB" class="birth_date">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                    <input type="text" name="address" id="address" class="address" placeholder="Employee address">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="text" name="mobile" id="mobile" class="mobile" placeholder="Employee mobile no">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="email" id="email" class="email" placeholder="Employee email">
                                                </label>
                                            </section>                                            
                                        </div>
                                    </fieldset>
                                    <footer>
                                        <button type="button" class="btn btn-primary myaddemp">Add New Employee</button>
                                        <button type="reset" class="hidden" id="reset_employee_add_form"></button>
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
echo script_tag('assets/js/jquery.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/emp_reg/add_employee.js');

?>
<script type="text/javascript">
    $(document).ready(function(){
        new HSS.AddEmployee();
    });
</script>
</body>
</html>