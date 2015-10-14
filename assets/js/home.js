var HSS = HSS || {};

HSS.Home = function (base_url) {
    this.base_url=base_url;
    this.initialize();
    this.appointment();
}
HSS.Home.prototype={
    initialize:function(){
        this.contact();
    },

    appointment:function(){
            $('.appointment_button').click(function(){
                $.ajax({
                    url:"appointment/book-my-appointment",
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        name:$('#appointment_name').val(),
                        booking_date: $('#appointment_date').val(),
                        booking_with: $('#appointment_booking_with').val(),
                        booking_timing: $('#appointment_time').val(),
                        mobile: $('#appointment_mobile').val(),
                        service: $('#appointment_services').val(),
                        user_email: $('#appointment_email').val()
                    },
                    beforeSend:function(){
                        $('.appointment_button').html("Booking...");
                    },
                    error:function(data){
                        console.log(data);
                    },
                    success:function(data){
                        console.log(data);
                    },
                    complete: function() {
                        $('.appointment_button').html("Appointment");
                        $(".appointment_reset_button").click();
                    }
                });
            });
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
