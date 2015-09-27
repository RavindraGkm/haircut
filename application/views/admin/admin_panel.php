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
<body class="">
<header id="header">
    <div id="logo-group">
        <span id="logo"> <img src="<?php echo base_url('assets/img/logo.png')?>" alt="SmartAdmin"> </span>
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
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Admin</span></a>
                <ul>
                    <li class="active">
                        <?php echo anchor('admin/admin-panel','<span class="menu-item-parent">Admin Panel</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Clients</span></a>
                <ul>
                    <li>
                        <?php echo anchor('clients/show-clients','<span class="menu-item-parent">View Clients</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('clients/add-client','<span class="menu-item-parent">Add New Client</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Items</span></a>
                <ul>
                    <li>
                        <?php echo anchor('items/show-items','<span class="menu-item-parent">View Items</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('items/add-item','<span class="menu-item-parent">Add Items</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Quotations</span></a>
                <ul>
                    <li>
                        <?php echo anchor('quotation/all-quotations','<span class="menu-item-parent">View Quotations</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('quotation/add-quotation','<span class="menu-item-parent">Create Quotation</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Billing</span></a>
                <ul>
                    <li>
                        <?php echo anchor('billing/all-bills','<span class="menu-item-parent">View Bills</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('billing/new-bill','<span class="menu-item-parent">Create New Bill</span>');?>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Home></li><li>Admin</li><li>Admin Panel</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Admin
                    <span>> Admin Panel </span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Admin Management</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form id="clients-add" method="POST" class="smart-form" novalidate="novalidate">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-4">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="tel" name="phone1" id="contact_first" placeholder="Phone 1" data-mask="(999) 999-9999">
                                                </label>
                                            </section>
                                            <section class="col col-4">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="tel" name="phone2" id="contact_second" placeholder="Phone 2" data-mask="(999) 999-9999">
                                                </label>
                                            </section>
                                            <section class="col col-4">
                                                <label class="input"> <i class="icon-prepend fa fa-envelope"></i>
                                                    <input type="tel" name="email" id="email" placeholder="Email Address">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <section>
                                            <label class="textarea">
                                                <textarea rows="3" name="addres" id="office_address" placeholder="Office Address"></textarea>
                                            </label>
                                        </section>
                                        <section>
                                            <label class="textarea">
                                                <textarea rows="3" name="addres" id="factory_address" placeholder="Factory Address"></textarea>
                                            </label>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="reset" class="hidden" id="reset_admin_form"></button>
                                        <button type="button" class="btn btn-primary" id="btn-submit">
                                            Add Details
                                        </button>
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
            <span class="txt-color-white">Classic Equipments © 2013-2014</span>
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
echo script_tag('assets/js/clients/add_clients.js');

?>
<script type="text/javascript">
    $(document).ready(function(){
        new CKE.AddClients();
    });
</script>
</body>
</html>