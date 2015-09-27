var CKE = CKE || {};
CKE.ShowClients=function(){
    this.initialize();
}

CKE.ShowClients.prototype={
    initialize:function(){
        this.show_clients();
    },
    show_clients:function(){
        $.ajax({
            url: "show-all-client",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                for(var i=0;i<data.length;i++) {
                    $("#client-data-json").append("<tr><td>"+data[i].id+"</td><td>" + data[i].client_name + "</td><td>" + data[i].client_contact + "</td><td>" + data[i].client_address + "</td><td><a href='edit-clients/"+data[i].id+"'>Edit Client</a></td></tr>");
                }
            }
        });
    }
}

