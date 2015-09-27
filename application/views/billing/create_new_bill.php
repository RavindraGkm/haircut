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
    echo link_tag('assets/css/styles.css');
    echo link_tag('assets/css/datepicker.css');
    echo link_tag('assets/css/demo.min.css');
    echo link_tag('assets/css/custom.css');
    ?>
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
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Admin</span></a>
                <ul>
                    <li>
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
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Billing</span></a>
                <ul>
                    <li>
                        <?php echo anchor('billing/all-bills','<span class="menu-item-parent">View Bills</span>');?>
                    </li>
                    <li class="active">
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
            <li>Home></li><li>Billing</li><li>Create New Bill</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Billing
                    <span>> Create New Bill</span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Create Bill</h2>
                        </header>
                        <div>
                            <div class="widget-body">
                                <?php
                                $this->load->helper('form');
                                $attributes = array('class' => 'form-horizontal');
                                echo form_open('billing/create-bill', $attributes);
                                ?>
                                <fieldset>
                                    <legend>Enter details to create new quotation</legend>
                                    <div class="form-group">
                                        <label for="client_name" class="col-md-2 control-label">Enter Client Name</label>
                                        <div class="col-md-3">
                                            <div class="autocomplete-wrapper">
                                                <input type="hidden" id="client_id" name="client_id">
                                                <input id="client_name" class="form-control autocomplete-client-names" type="text" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_name" class="col-md-2 control-label">Enter Billing Date</label>
                                        <div class="col-md-3">
                                            <input class="billing-date form-control" name="billing_date" type="text" autocomplete="off">
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Dim 1</th>
                                            <th>Dim 2</th>
                                            <th>Dim 3</th>
                                            <th>Dim 4</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody class="billing-rows">
                                        <tr class="billing-row-template">
                                            <td class="col-sm-4">
                                                <div class="autocomplete-wrapper">
                                                    <input name="item_name[]" class="form-control autocomplete-item-names" placeholder="Item Name" autocomplete="off">
                                                </div>
                                            </td>
                                            <td class="col-sm-1"><input name="dim1[]" class="form-control dim-1" placeholder="Dim 1"></td>
                                            <td class="col-sm-1"><input name="dim2[]" class="form-control dim-2" placeholder="Dim 2"></td>
                                            <td class="col-sm-1"><input name="dim3[]" class="form-control dim-3" placeholder="Dim 3"></td>
                                            <td class="col-sm-1"><input name="dim4[]" class="form-control dim-4" placeholder="Dim 4"></td>
                                            <td class="col-sm-2"><input name="total[]" class="form-control total" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">
                                                <div class="autocomplete-wrapper">
                                                    <input name="item_name[]" class="form-control autocomplete-item-names" placeholder="Item Name" autocomplete="off">
                                                </div>
                                            </td>
                                            <td class="col-sm-1"><input name="dim1[]" class="form-control dim-1" placeholder="Dim 1"></td>
                                            <td class="col-sm-1"><input name="dim2[]" class="form-control dim-2" placeholder="Dim 2"></td>
                                            <td class="col-sm-1"><input name="dim3[]" class="form-control dim-3" placeholder="Dim 3"></td>
                                            <td class="col-sm-1"><input name="dim4[]" class="form-control dim-4" placeholder="Dim 4"></td>
                                            <td class="col-sm-2"><input name="total[]" class="form-control total" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">
                                                <div class="autocomplete-wrapper">
                                                    <input name="item_name[]" class="form-control autocomplete-item-names" placeholder="Item Name" autocomplete="off">
                                                </div>
                                            </td>
                                            <td class="col-sm-1"><input name="dim1[]" class="form-control dim-1" placeholder="Dim 1"></td>
                                            <td class="col-sm-1"><input name="dim2[]" class="form-control dim-2" placeholder="Dim 2"></td>
                                            <td class="col-sm-1"><input name="dim3[]" class="form-control dim-3" placeholder="Dim 3"></td>
                                            <td class="col-sm-1"><input name="dim4[]" class="form-control dim-4" placeholder="Dim 4"></td>
                                            <td class="col-sm-2"><input name="total[]" class="form-control total" placeholder="Price"></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="7"><button type="button" class="btn btn-primary add-billing-rows"><i class="fa fa-plus"></i> Add More Rows</button></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </fieldset>
                                <fieldset>
                                    <table class="table table-wrap">
                                        <tr>
                                            <td colspan='4'></td>
                                            <td class="td-middle-right">Mode of Payment</td>
                                            <td>
                                                <div class="radio-list">
                                                    <label class="radio-inline"><input type="radio" name="mode_payment"  value="Cash" checked> Cash &nbsp;&nbsp;</label>
                                                    <label class="radio-inline"><input type="radio" name="mode_payment" value="Cheque" > Cheque &nbsp;&nbsp;</label>
                                                    <label class="radio-inline"><input type="radio" name="mode_payment" value="Credit" > Credit </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">Total Price</td>
                                            <td><input type='text' class='form-control total-bill-price' name='total_bill_price' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='3'>&nbsp;</td>
                                            <td class="td-middle-right">Discount</td>
                                            <td><input type='text' class='form-control discount-percent' autocomplete='off' name='discount_percent' placeholder='Discount percentage'/></td>
                                            <td><input type='text' readonly class='form-control discount-value prevent-enter' placeholder='Discount value' name='discount_value' autocomplete='off'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">Amount</td>
                                            <td><input type='text' class='form-control amount' name='amount' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">VAT Type</td>
                                            <td>
                                                <select id='vat_type' name='vat_type' class='form-control'>
                                                    <option value='1'>VAT Excluded</option>
                                                    <option value='2'>VAT Included</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='4' class="td-middle-right">VAT</td>
                                            <td><input type='text' class='form-control vat-percent' autocomplete='off' placeholder='VAT percentage' name='vat_percent'/></td>
                                            <td><input type='text' readonly class='form-control vat-value prevent-enter' name='vat_value' autocomplete='off' value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">Total Payable Amount</td>
                                            <td><input type='text' class='form-control total-payable-amount' name='total_payable_amount' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">Advance</td>
                                            <td><input type='text' class='form-control advance' name='advance' value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td class="td-middle-right">Balance</td>
                                            <td><input type='text' class='form-control balance' name='balance' readonly value='0'/></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-default" type="submit">
                                                Cancel
                                            </button>
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-save"></i>
                                                Generate Bill
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
<?php
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/bootstrap/bootstrap.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/plugin/auto-complete/jquery.autocomplete.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/create-bill/create.bill.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new CK.CreateBill("<?php echo base_url(); ?>");
    });
</script>
</body>
</html>