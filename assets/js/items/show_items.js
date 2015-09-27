var CKE = CKE ||{};
CKE.ShowItems=function(){
    this.initialize();
}

CKE.ShowItems.prototype={
    initialize:function(){
        this.show_items();
    },
    show_items:function(){
        $.ajax({
            url: "show-all-item",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                for(var i=0;i<data.length;i++) {
                    if(data[i].d4!='') {
                        var row = "<tr><td>"+data[i].id+"</td><td>" + data[i].item_name + "</td><td>" + data[i].item_category + "</td><td>" + data[i].item_code +"</td><td>"+data[i].d1+"'X"+data[i].d2+"'X"+data[i].d3+"'+"+data[i].d4+"'"+"</td><td><a href='edit-items/"+data[i].id+"'>Edit Item</a></td></tr>";
                    }
                    else {
                        var row = "<tr><td>"+data[i].id+"</td><td>" + data[i].item_name + "</td><td>" + data[i].item_category + "</td><td>" + data[i].item_code +"</td><td>"+data[i].d1+"'X"+data[i].d2+"'X"+data[i].d3+"'"+"</td><td><a href='edit-items/"+data[i].id+"'>Edit Item</a></td></tr>";
                    }

                    $("#item-data-json").append(row);
                }
            }
        });
    }
}
