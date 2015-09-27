
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Classic Kitchen Equipment</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <?php
        echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');
        echo link_tag('assets/css/font-awesome.min.css');
        echo link_tag('assets/css/bootstrap.min.css');
        echo link_tag('assets/css/');
        echo link_tag('');
    ?>
    <link href="" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed">
<div class="header navbar navbar-fixed-top">
    <div class="header-inner">
        <a class="navbar-brand" style="padding:8px" href="index.php">
            <img src="assets/img/silvio.png" alt="logo" class="img-responsive"/>
        </a>
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/menu-toggler.png" alt=""/>
        </a>
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span class="username">
													Admin
											</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-key"></i> Log Out
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<div class="clearfix">
</div>
<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li>
                    <a href="index.php">
                        <i class="fa fa-cogs"></i>
						<span class="title">
							Dashboard
						</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-plus-square-o"></i>
						<span class="title">
							Items
						</span>
						<span class="arrow">
						</span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="javascript:;">
                                <span class="title">Item Silver</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="item-add.php">
                                        Add New Item
                                    </a>
                                </li>
                                <li>
                                    <a href="item-show.php">
                                        Manage Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title">Item Furniture</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="item-add-furniture.php">
                                        Add New Item
                                    </a>
                                </li>
                                <li>
                                    <a href="item-show-furniture.php">
                                        Manage Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="item-type.php">
                        <i class="fa fa-folder-open"></i>
						<span class="title">
							Item Type
						</span>
                    </a>
                </li>
                <li>
                    <a href="silver-price.php">
                        <i class="fa fa-rupee"></i>
						<span class="title">
							Silver Price
						</span>
                    </a>
                </li>
                <!-- <li class="active">
                    <a href="billing.php">
                        <i class="fa fa-table"></i>
                        <span class="title">
                            Billing
                        </span>
                        <span class="selected">
                        </span>
                    </a>
                </li> -->
                <li class="active ">
                    <a href="javascript:;">
                        <i class="fa fa-plus-square-o"></i>
						<span class="title">
							Billing
						</span>
						<span class="selected">
						</span>
						<span class="arrow">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="billing.php">
                                Billing Silver Items
                            </a>
                        </li>
                        <li>
                            <a href="billing-furniture.php">
                                Billing Furniture Items
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="view-invoice.php">
                        <i class="fa fa-indent"></i>
						<span class="title">
							View Invoice
						</span>
                    </a>
                </li>
                <li class="last ">
                    <a href="daily-report.php">
                        <i class="fa fa-file"></i>
						<span class="title">
							Reports
						</span>
                    </a>
                </li>
                <li>
                    <a href="stock.php">
                        <i class="fa fa-cog"></i>
						<span class="title">
							Stock Inventory
						</span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Billing
                    </h3>
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                        </li>
                        <li>
                            <a href="#">
                                Billing
                            </a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Billing
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form action='show-bill.php' method='post'>
                                <div style="padding:10px 10px 15px 28px">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-2">Billing Date</label>
                                            <div class="col-md-6">
                                                <input type="text" autocomplete='off' class="form-control date-picker" name="billing_date" id="billing_date">
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-2">Customer Name</label>
                                            <div class="col-md-6">
                                                <input type="text" autocomplete='off' class="form-control" name="customer_name">
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-2">Address</label>
                                            <div class="col-md-6">
                                                <input type="text" autocomplete='off' class="form-control" name="address">
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-2">TIN No.</label>
                                            <div class="col-md-6">
                                                <input type="text" autocomplete='off' class="form-control" name="tin_no">
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                                &nbsp;
                                            </th>
                                            <th>
                                                Item Code
                                            </th>
                                            <th>
                                                Item Name
                                            </th>
                                            <th>
                                                Weight
                                            </th>
                                            <th>
                                                Quantity
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class='billing-body'>
                                        <tr>
                                            <th>

                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-code prevent-enter' autocomplete="off" name='item_code[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-name prevent-enter' autocomplete="off" name='item_name[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-weight prevent-enter' autocomplete="off" name='item_weight[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-quantity prevent-enter' autocomplete="off" name='item_quantity[]'/>
                                            </th>
                                            <th>
                                                <input type='text' readonly class='form-control item-price prevent-enter' name='item_price[]'/>
                                                <input type='hidden' class='hidden_original_price' />
                                                <input type='hidden' class='making_charges' />
                                                <input type='hidden' class='silver_price' />
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>

                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-code prevent-enter' autocomplete="off" name='item_code[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-name prevent-enter' autocomplete="off" name='item_name[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-weight prevent-enter' autocomplete="off" name='item_weight[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-quantity prevent-enter' autocomplete="off" name='item_quantity[]'/>
                                            </th>
                                            <th>
                                                <input type='text' readonly class='form-control item-price prevent-enter' name='item_price[]'/>
                                                <input type='hidden' class='hidden_original_price' />
                                                <input type='hidden' class='making_charges' />
                                                <input type='hidden' class='silver_price' />
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>

                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-code prevent-enter' autocomplete="off" name='item_code[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-name prevent-enter' autocomplete="off" name='item_name[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-weight prevent-enter' autocomplete="off" name='item_weight[]'/>
                                            </th>
                                            <th>
                                                <input type='text' class='form-control item-quantity prevent-enter' autocomplete="off" name='item_quantity[]'/>
                                            </th>
                                            <th>
                                                <input type='text' readonly class='form-control item-price prevent-enter' name='item_price[]'/>
                                                <input type='hidden' class='hidden_original_price' />
                                                <input type='hidden' class='making_charges' />
                                                <input type='hidden' class='silver_price' />
                                            </th>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td colspan='1'><button class='btn btn-default' type='button' id='add_more_rows'>Add more rows</button></td>
                                            <td style='text-align:right;vertical-align:middle;'>Total Weight</td>
                                            <td><input type="text" class="form-control total_weight" name="total_weight" readonly /></td>
                                            <td>Mode of Payment</td>
                                            <td>
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mode_payment"  value="Cash" checked> Cash </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mode_payment" value="Cheque" > Cheque </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mode_payment" value="Credit" > Credit </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td>Total Price</td>
                                            <td><input type='text' class='form-control total-bill-price' name='total_bill_price' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='3' style='text-align:right;vertical-align:middle;'>Discount</td>
                                            <td><input type='text' class='form-control discount-flat' autocomplete='off' name='discount_flat' placeholder='Discount Amount'/></td>
                                            <td><input type='text' class='form-control discount-percent' autocomplete='off' name='discount_percent' placeholder='Discount percentage'/></td>
                                            <td><input type='text' readonly class='form-control discount-value prevent-enter' placeholder='Discount value' name='discount_value' autocomplete='off'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td>Amount</td>
                                            <td><input type='text' class='form-control amount' name='amount' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td style='vertical-align: middle;'>VAT Type</td>
                                            <td>
                                                <select id='vat_type' name='vat_type' class='form-control'>
                                                    <option value='1'>VAT Excluded</option>
                                                    <option value='2'>VAT Included</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='4' style='text-align:right;vertical-align:middle;'>VAT</td>
                                            <td><input type='text' class='form-control vat-percent' autocomplete='off' placeholder='VAT percentage' name='vat_percent'/></td>
                                            <td><input type='text' readonly class='form-control vat-value prevent-enter' name='vat_value' autocomplete='off' value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td>Total Payable Amount</td>
                                            <td><input type='text' class='form-control total-payable-amount' name='total_payable_amount' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td>Advance</td>
                                            <td><input type='text' class='form-control advance' name='advance' value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='4'>&nbsp;</td>
                                            <td>Balance</td>
                                            <td><input type='text' class='form-control balance' name='balance' readonly value='0'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan='5'>&nbsp;</td>
                                            <td><button class='btn btn-default' type='submit' name='generate_bill'>Generate Bill</button></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-inner">
        2014 &copy; Silvio Casa.
    </div>
    <div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-typeahead/bootstrap-typeahead.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/scripts/custom/components-pickers.js"></script>
<!-- END CORE PLUGINS -->
<script src="assets/scripts/core/app.js"></script>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        ComponentsPickers.init();
        intialize();

        function calculation ()
        {
            var discount_percent = 0;
            if($('.discount-percent').val()!='')
            {
                discount_percent=parseFloat($('.discount-percent').val());
            }

            var total_price=0;
            $(".item-price").each(function(i,data){
                if($(this).val()!='')
                    total_price+=parseFloat($(this).val());
            });

            $(".total-bill-price").val(total_price);

            var vat_percent = 0;
            if($(".vat-percent").val()!='')
            {
                vat_percent=parseFloat($(".vat-percent").val());
            }

            var total_weight=0;

            $(".item-weight").each(function(i,data){
                if($(this).val()!='')
                {
                    var dom=$(this);
                    console.log(dom.parent().parent().find('.item-quantity').val());
                    total_weight+=(parseFloat($(this).val())* parseFloat(dom.parent().parent().find('.item-quantity').val()));
                }
            });

            $(".total_weight").val(total_weight);

            if($("#vat_type").find('option:selected').val()==1)
            {
                var discount_value = 0;

                if(discount_percent!=0)
                    var discount_value = discount_percent*total_price/100;
                else if($(".discount-flat").val()!='')
                {
                    discount_value = parseFloat($(".discount-flat").val());
                }


                $amount = total_price-discount_value;
                $(".amount").val($amount.toFixed(2));
                $(".discount-value").val(discount_value.toFixed(2));
                var vat_value = vat_percent*$amount/100;
                $(".vat-value").val(vat_value.toFixed(2));
                $(".total-payable-amount").val(($amount+vat_value).toFixed(2));
            }
            else
            {

                var discount_value = 0;

                if(discount_percent!=0)
                    var discount_value = discount_percent*total_price/100;
                else if($(".discount-flat").val()!='')
                {
                    discount_value = parseFloat($(".discount-flat").val());
                }

                $amount = total_price-discount_value;

                $(".amount").val($amount.toFixed(2));

                $(".discount-value").val(discount_value.toFixed(2));

                var vat_value = vat_percent*$amount/100;

                var division_num = vat_percent+100;
                $multiply = $amount*100/division_num;

                $(".vat-value").val(($amount-$multiply).toFixed(2));
                $(".total-payable-amount").val($amount.toFixed(2));

                $(".amount").val($multiply.toFixed(2));
            }

            $(".advance").val(0);
            $(".balance").val(0);
        }

        function intialize()
        {
            $('.item-code').typeahead({
                source: function (query, process) {
                    $.getJSON('jquery-type-ahead.php',{one:1,codeValue:query},function(data,success) {
                        process(data);
                    });
                }
            });

            $(".prevent-enter").keypress(function(e){
                if(e.keyCode==13)
                    e.preventDefault();
            });

            $(".item-code").keyup(function(e){
                if(e.keyCode == 13)
                {
                    var dom = $(this);
                    var code_value=$(this).val();
                    $.getJSON('jquery_ajax.php',{getItemData:code_value,BillingDate:$("#billing_date").val()},function(data,success) {
                        if(data.quantity==0)
                        {
                            $.gritter.add({
                                title: 'Information!',
                                text: 'Available Quantity is 0.',
                                image: './assets/img/sign-error-icon.png',
                                sticky: false,
                                time: '2000',
                                class_name: 'my-sticky-class'
                            });
                            return;
                        }
                        console.log(data);
                        dom.parent().parent().find('.item-name').val(data.name);
                        dom.parent().parent().find('.item-weight').val(data.weight);
                        if(data.is_fixed_price=='yes')
                            dom.parent().parent().find('.item-weight').attr('readonly','readonly');
                        else
                        {
                            dom.parent().parent().find('.making_charges').val(data.making_charges);
                        }
                        dom.parent().parent().find('.silver_price').val(data.silver_rate);
                        dom.parent().parent().find('.hidden_original_price').val(data.price);
                        dom.parent().parent().find('.item-price').val(data.price);
                        dom.parent().parent().find('.item-quantity').val(1);
                        calculation();
                    });
                }
            });

            $(".item-quantity").keyup(function(e){
                if(e.keyCode==9)
                    return;
                if(e.shiftKey && e.keyCode == 9) {
                    return;
                }
                var dom = $(this);
                var quantity_value=0;

                if(dom.val()!='')
                    quantity_value=$(this).val();
                else
                    return;

                if(quantity_value<1)
                {
                    $(this).val(1);
                    return;
                }
                var item_code =dom.parent().parent().find('.item-code').val();
                var temp_quantity = dom.parent().parent().find('.item-quantity').val();

                $.getJSON("jquery-qty-check.php",{ItemsExists:item_code,DemandQty:quantity_value},function(data,status){
                    if(data.status!='avail')
                    {
                        $.gritter.add({
                            title: 'Information!',
                            text: 'Quantity exceeds avialable quantity',
                            image: './assets/img/sign-error-icon.png',
                            sticky: false,
                            time: '2000',
                            class_name: 'my-sticky-class'
                        });
                        dom.val(temp_quantity);
                    }
                    else
                    {
                        var parent_row = dom.parent().parent();
                        if(parent_row.find('.silver_price').val()==0)
                        {
                            quantity_value = parent_row.find(".item-quantity").val();
                            parent_row.find('.item-price').val(parseFloat(parent_row.find(".hidden_original_price").val())*parseInt(quantity_value));
                            console.log(quantity_value+"--");
                        }
                        else
                        {
                            var quantity_value = parseFloat(parent_row.find('.item-quantity').val());
                            console.log("Quantity : "+quantity_value);
                            var silver_price = parseFloat(parent_row.find(".silver_price").val());
                            var weight = parseFloat(parent_row.find('.item-weight').val());
                            console.log(quantity_value+" , "+silver_price+" , "+weight);
                            var row_price = (weight*silver_price+weight*parseFloat(parent_row.find('.making_charges').val()))*quantity_value;
                            parent_row.find('.item-price').val(row_price);
                        }
                        calculation();
                    }
                });
            });

            $(".item-weight").keyup(function(e){
                var dom = $(this);
                if(dom.val()=='')
                    return;
                var parent_row = dom.parent().parent();
                if(parent_row.find(".silver_price").val()==0)
                {
                    return;
                }
                var quantity_value = parseFloat(parent_row.find('.item-quantity').val());
                var silver_price = parseFloat(parent_row.find(".silver_price").val());
                var weight = parseFloat(dom.val());
                console.log(quantity_value+" , "+silver_price+" , "+weight);
                var row_price = weight*silver_price+weight*parseFloat(parent_row.find('.making_charges').val())*quantity_value;
                parent_row.find('.item-price').val(row_price);
                calculation();
            });
        }


        $(".discount-percent").keyup(function(e){
            $('.discount-flat').val('');
            calculation();
        });

        $(".discount-flat").keyup(function(e){
            $('.discount-percent').val('');
            calculation();
        });


        $(".vat-percent").keyup(function(e){
            calculation();
        });


        $(".advance").keyup(function(e){
            var advance = 0;
            if($(".advance").val()!='')
            {
                advance=parseFloat($(".advance").val());
            }
            $(".balance").val(($(".total-payable-amount").val()-advance).toFixed(2));
        });

        $("#vat_type").change(function(){
            calculation();
        });

        $("#add_more_rows").click(function(){
            $(".billing-body").append("<tr><th></th><th><input type='text' class='form-control item-code prevent-enter' autocomplete='off' name='item_code[]'/></th><th><input type='text' class='form-control item-name prevent-enter' autocomplete='off' name='item_name[]'/></th><th><input type='text' class='form-control item-weight prevent-enter' autocomplete='off' name='item_weight[]'/></th><th><input type='text' class='form-control item-quantity prevent-enter' autocomplete='off' name='item_quantity[]'/></th><th><input type='text' readonly class='form-control item-price prevent-enter' name='item_price[]'/><input type='hidden' class='hidden_original_price' /><input type='hidden' class='making_charges' /><input type='hidden' class='silver_price' /></th> </tr>");
            intialize();
        });


    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>