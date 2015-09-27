
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
                        <span class='bold'>Factory Address:&nbsp;</span><span>Near Piccok Factory, Kodiyat Road, Udaipur</span><br/>
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
            <span class='bold'>Client Name:&nbsp;</span>
            <span class=''><?php echo $quotation_and_client_details['client_name']; ?></span><br/>
            <span class=""></span><br/>
        </div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-12">
            <p class="center"><span class='bold' style="font-size: 14px;">Quotation List</span></p>
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
                    <td>
                        ITEM NAME
                    </td>
                    <td>
                        SIZE
                    </td>
                    <td>
                        AMOUNT
                    </td>
                    <td>
                        GRAND TOTAL
                    </td>

                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 1;
                foreach($quotation_details as $quotation_row) {
                    $dim_string = $quotation_row['dim_1']."*".$quotation_row['dim_2']."*".$quotation_row['dim_3'];
                    if($quotation_row['dim_4']!='') {
                        $dim_string.="+".$quotation_row['dim_4'];
                    }
                    echo "<tr><td>$counter</td><td>$quotation_row[item_name]</td><td>$dim_string</td><td>$quotation_row[total]</td><td>$quotation_row[total]</td></tr>";
                    $counter++;
                }
                ?>
                <tr>
                    <td colspan="5">
                        <span class="bold">Company VAT TIN:&nbsp;</span><span> 08913907212</span><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
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
                    <td style='text-align:center;' colspan='5'>
                        <button class='btn btn-success' id='print_invoce'>Print Quotation</button>
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