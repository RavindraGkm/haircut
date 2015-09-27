<!DOCTYPE html>
<html>
<head>
    <?php
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/custom.css');
    ?>
</head>
<body class='page-header-fixed'>
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <table>
                <tr>
                    <td>
                        <span class='bold block' style="font-size: 22pt">CLASSIC KITCHEN EQUIPMENT</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='bold block' style="font-size: 12pt">
                            MANUFACTURERS &amp; SUPPLIERS OF COMPLETE COMMERCIAL KITCHEN EQUIPMENTS
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='bold'>Office Address:&nbsp;</span><span>528/57, OTC Scheme Chhipa colony, Nr. Charak Hostal, Mulla Talai, Udaipur</span><br/>
                        <span class='bold'>Factory Address:&nbsp;</span><span>Near Piccok Factory,Kodiyat Road, Udaipur</span><br/>
                        <span class='bold'>Contact No:&nbsp;</span><span>+91 98280 78600, 94143 28818</span><br/>
                        <span class='bold'>email:&nbsp;</span><span>classic_naeem@yahoo.com, classictrading02@yahoo.com</span><br/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row" style="padding-top:5px;">
        <div class="col-md-12">
            <br/>
            <span class='bold'>Invoice No:&nbsp;</span>
            <span class=''><?php echo $bill_and_client_details['bill_id']; ?></span><br/>

            <span class='bold'>Bill Date:&nbsp;</span>
            <span class=''><?php echo $bill_and_client_details['bill_date']; ?></span><br/>
<!--        </div>-->
<!--        <div class="col-md-9">-->

<!--            <span class='bold'>Quotation No:&nbsp;</span>-->
            <!--            <span class=''>--><?php //echo $quotation_and_client_details['client_name']; ?><!--</span><br/>-->
<!--            <span class="">1</span> <br/>-->
        </div>
        <div class="col-md-12">
            <br/>
            <span class='bold'>Client Name:&nbsp;</span>
            <span class=''><?php echo $bill_and_client_details['client_name']; ?></span><br/>
            <span class='bold'>Address:&nbsp;</span>
            <span class=""><?php echo $bill_and_client_details['client_address'];?></span><br/>
            <span class='bold'>Contact:&nbsp;</span>
            <span class=""><?php echo $bill_and_client_details['client_contact'];?></span><br/>
        </div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-12">
            <p class="center"><span class='bold' style="font-size: 14px;">Bill Details</span></p>
        </div>
    </div>
    <hr/>
    <div class='row' style='margin-top:10px;'>
        <div class='col-md-12'>
            <table class="table table-bordered table-hover" width='100%'>
                <thead>
                <tr style="font-weight: bolder">
                    <td>
                        Sr. No.
                    </td>
                    <td colspan="3">
                        Description of Goods
                    </td>
                    <td>
                        SIZE
                    </td>
                    <td>
                        Price
                    </td>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 1;
                foreach($bill_details as $bill_row) {
                    $dim_string = $bill_row['dim_1'] . "*" . $bill_row['dim_2'] . "*" . $bill_row['dim_3'];
                    if ($bill_row['dim_4'] != '') {
                        $dim_string .= "+" . $bill_row['dim_4'];
                    }
                    echo "<tr><td>$counter</td><td colspan='3'>$bill_row[item_name]</td><td>$dim_string</td><td>$bill_row[total]</td></tr>";

                    $counter++;
                }
                ?>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        TOTAL : <b> </b>
                    </td>
                    <td>
                        <i class='fa fa-rupee'></i>&nbsp;<?php echo $bill_and_client_details['total_price']; ?>                            </td>
                </tr>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        Discount : <b><?php echo $bill_and_client_details['discount_percent']; ?> % </b>
                    </td>
                    <td>
                        <i class='fa fa-rupee'></i>&nbsp;<?php echo $bill_and_client_details['discount_value']; ?></td>
                </tr>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        Total :
                    </td>
                    <td>
                        <i class='fa fa-rupee'></i>&nbsp;<?php echo $bill_and_client_details['amount']; ?></td>
                </tr>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        VAT : <b><?php echo $bill_and_client_details['vat_percent']; ?> % </b>
                    </td>
                    <td>
                        <i class='fa fa-rupee'></i>&nbsp;<?php echo $bill_and_client_details['vat_value']; ?></td>
                </tr>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        Total :
                    </td>
                    <td>
                        <i class='fa fa-rupee'></i>&nbsp;<?php echo $bill_and_client_details['total_payable_amount']; ?></td>
                </tr>
                <tr>
                    <td colspan='5' style='text-align:right;'>
                        Payment Mode:
                    </td>
                    <td>
                        <?php echo $bill_and_client_details['payment_mode']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <span class="bold">Company VAT TIN:&nbsp;</span><span> 08913907212</span><br>
                    </td>
                </tr>

                <tr>
                    <td colspan="5"></td>
                    <td>
                        For Classic Kitchen Equipment Udaipur
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        Authorised Signatory
                    </td>
                </tr>
                <tr class='print-hide'>
                    <td style='text-align:center;' colspan='6'>
                        <button class='btn btn-success' id='print_invoce'>Print Bill</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<?php
echo script_tag('assets/js/jquery.js');
echo script_tag('assets/js/jquery-1.11.1.min.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#print_invoce").click(function(){
            window.print();
        });
    });
</script>