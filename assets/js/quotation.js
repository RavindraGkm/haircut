var CK = CK || {};
CK.Quotations= function(base_url){
    this.base_url=base_url;
    this.initialize();
}
CK.Quotations.prototype={
    initialize:function() {
        this.autoFillData();
        this.initialSetup();
    },
    initialSetup: function () {
        var self = this;
        $(".add-quotation-rows").click(function () {
            var template_clone = $(".quotation-row-template").clone(false);
            template_clone.removeClass('quotation-row-template');
            template_clone.find('input').val('');
            $(".quotation-rows").append(template_clone);
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
            $("#grand_total_sum").val(grand_total_sum);
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
    }
}
