var CKE = CKE ||{};
CKE.ShowBills=function(){
    this.initialize();
}

CKE.ShowBills.prototype={
    initialize:function(){
        this.show_bills();
    },
    show_bills:function(){
        $.ajax({
            url: "get-all-bills",
            type: "GET",
            dataType: "JSON",
            beforeSend: function () {
              console.log('calling');
            },
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.bills.length;i++) {
                    var row = "<tr><td>"+data.bills[i].id+"</td><td>" + data.bills[i].client_name + "</td><td>" + data.bills[i].bill_date + "</td><td>" + data.bills[i].total_payable_amount +"</td><td><a href='print-bill/"+data.bills[i].id+"'>View Details</a></td></tr>";
                    $("#item-data-json").append(row);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
}
