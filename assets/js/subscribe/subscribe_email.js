var HSS = HSS || {};

HSS.ShowSubscribe = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.ShowSubscribe.prototype={
    initialize:function(){
        this.show_subscribe_details();
    },
    show_subscribe_details:function(){
        $.ajax({
            url: "show-all-subscribe-details",
            type: "GET",
            dataType: "JSON",
            data:{
                user_email: $(".user_email").val()
            },
            success: function (data) {
                //console.log(data);
                 for(var i=0;i<data.length;i++) {
                     var row = "<tr><td>" + [i+1] + "</td><td>" + data[i].email + "</td><td>"+data[i].date+"</td><td>" + data[i].status + "</td></tr>";
                     $("#show_subscribe_details").append(row);
                 }
            }
        });

    }
}
