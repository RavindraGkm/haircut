var CK = CK || {};
CK.CreateBill= function(base_url){
    this.base_url=base_url;
    this.initialize();
}
CK.CreateBill.prototype={
    initialize:function() {
        this.autoFillData();
        this.initialSetup();
    },
    initialSetup:function () {
        var self = this;
        $('.billing-date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $(".add-billing-rows").click(function () {
            var template_clone = $(".billing-row-template").clone(false);
            template_clone.removeClass('billing-row-template');
            template_clone.find('input').val('');
            $(".billing-rows").append(template_clone);
            self.autoFillData();
        });
        $('.autocomplete-client-names').autocomplete({
            serviceUrl: self.base_url+'clients/get-all-clients-by-name',
            dataType: 'JSON',
            lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
                var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
                return re.test(suggestion.value);
            },
            onSelect: function(suggestion) {
                $("#client_id").val(suggestion.data);
                $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
            },
            onHint: function (hint) {
                $('#autocomplete-ajax-x').val(hint);
            },
            onInvalidateSelection: function() {
                $('#selction-ajax').html('You selected: none');
            }
        });
    },
    autoFillData:function() {
        var self = this;
        var grand_total_sum=0;
        $(".total").keyup(function() {
            var row = $(this).closest('tr').find('.grand-total').val($(this).val());
            grand_total_sum=0;
            $(".total").each(function(){
                if($(this).val()!='') {
                    grand_total_sum+=parseFloat($(this).val());
                }
            });
            $(".total-bill-price").val(grand_total_sum);
        });
        $(".discount-percent").keyup(function(e){
            self.calculations();
        });
        $(".vat-percent").keyup(function(e){
            self.calculations();
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
            self.calculations();
        });
        $('.autocomplete-item-names').autocomplete({
            serviceUrl: self.base_url+'items/get-all-items-by-name',
            dataType: 'JSON',
            lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
                var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
                return re.test(suggestion.value);
            },
            onSelect: function(suggestion) {
                var inputbox = $(this);
                $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
                $.ajax({
                    url: self.base_url +"items/get-item-by-id",
                    type: "GET",
                    dataType: 'JSON',
                    data: {
                        item_id: suggestion.data
                    },
                    success: function (data) {
                        inputbox.closest('tr').find('.dim-1').val(data.d1);
                        inputbox.closest('tr').find('.dim-2').val(data.d2);
                        inputbox.closest('tr').find('.dim-3').val(data.d3);
                        inputbox.closest('tr').find('.dim-4').val(data.d4);
                    }
                });
            },
            onHint: function (hint) {
                $('#autocomplete-ajax-x').val(hint);
            },
            onInvalidateSelection: function() {
                var inputbox = $(this);
                inputbox.closest('tr').find('input').val('');
            }
        });
    },
    calculations:function() {
        var discount_percent = 0;
        if($('.discount-percent').val()!='') {
            discount_percent=parseFloat($('.discount-percent').val());
        }
        var total_price=0;
        $(".total").each(function(){
            if($(this).val()!='') {
                total_price+=parseFloat($(this).val());
            }
        });
        $(".total-bill-price").val(total_price);
        var vat_percent = 0;
        if($(".vat-percent").val()!='') {
            vat_percent=parseFloat($(".vat-percent").val());
        }
        if($("#vat_type").val()==1) {
            var discount_value = 0;
            if(discount_percent!=0) {
                var discount_value = discount_percent*total_price/100;
            }
            $amount = total_price-discount_value;
            $(".amount").val($amount.toFixed(2));
            $(".discount-value").val(discount_value.toFixed(2));
            var vat_value = vat_percent*$amount/100;
            $(".vat-value").val(vat_value.toFixed(2));
            $(".total-payable-amount").val(($amount+vat_value).toFixed(2));
        }
        else {
            var discount_value = 0;
            if(discount_percent!=0)
                var discount_value = discount_percent*total_price/100;
            else if($(".discount-flat").val()!='') {
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
}
