var HSS = HSS || {};

HSS.Home = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Home.prototype={
    initialize:function(){
        this.contact();
    },
    contact:function() {
        var self=this;
        $('.contact_button').click(function(){
            $.ajax({
                url: "contact/contact_details",
                type: "POST",
                dataType: "JSON",
                data:{
                    contact_name: $("#contact_name").val(),
                    contact_mobile: $("#contact_mobile").val(),
                    contact_email: $("#contact_email").val(),
                    contact_subject: $("#contact_subject").val(),
                    contact_message: $('#contact_message').val()
                },
                beforeSend: function(data) {
                    $(".contact_button").html('Processing...');
                },
                error: function(data){
                    console.log(data);
                },
                success: function (data) {
                    console.log(data);
                    $(".contact_button").html('Send Message');
                    $(".contact_name").html();
                    $(".contact_mobile").html();
                    $(".contact_email").html();
                    $(".contact_subject").html();
                    $(".contact_message").html();
                }

            });
        });
    }
}
