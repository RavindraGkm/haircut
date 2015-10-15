var HSS = HSS || {};

HSS.Contact = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Contact.prototype={
    initialize:function(){
        this.show_contact_details();
    },
    show_contact_details:function(){
        $.ajax({
            url: "show-all-contact-details",
            type: "GET",
            dataType: "JSON",
            data:{
                user_email: $(".user_email").val()
            },
            success: function (data) {
                //console.log(data);
                 for(var i=0;i<data.length;i++) {
                     var row = "<tr><td>" + [i+1] + "</td><td>" + data[i].name + "</td><td>"+data[i].mobile+"</td><td>" + data[i].email + "</td><td>" + data[i].subject +"</td><td>"+data[i].message+"</td></tr>";
                     $("#show_contact_details").append(row);
                 }
            }
        });

    }
}
