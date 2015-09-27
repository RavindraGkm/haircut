var CKE = CKE ||{};
CKE.ShowQuotations=function(){
    this.initialize();
}

CKE.ShowQuotations.prototype={
    initialize:function(){
        this.show_quotations();
    },
    show_quotations:function(){
        $.ajax({
            url: "get-all-quotations",
            type: "GET",
            dataType: "JSON",
            beforeSend: function () {
              console.log('calling');
            },
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.quotations.length;i++) {
                    var row = "<tr><td>"+data.quotations[i].id+"</td><td>" + data.quotations[i].client_name + "</td><td>" + data.quotations[i].quotation_date + "</td><td>" + data.quotations[i].total_amount +"</td><td><a href='print-quotation/"+data.quotations[i].id+"'>View Details</a></td></tr>";
                    $("#item-data-json").append(row);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
}
