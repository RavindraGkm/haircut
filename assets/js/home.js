var HSS = HSS || {};

HSS.Home = function (base_url) {
    this.base_url=base_url;
    this.initialize();
    this.appointment_form();
}
HSS.Home.prototype={
    initialize:function(){
        this.contact_form();
        this.suscribe_email();
    },

     appointment_form: function() {
            var self = this;
            $("#appointment-form").validate({
                rules: {
                    appointment_name: {
                        required: true
                    },
                    appointment_mobile:{
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    appointment_email: {
                        required : true,
                        email : true
                    },
                    appointment_services: {
                        required: true
                    },
                    appointment_booking_with: {
                        required: true
                    },
                    appointment_date: {
                        required: true

                    },
                    appointment_time: {
                        required: true
                    }
                },
                messages : {
                    appointment_name: {
                        required: ''
                    },
                    appointment_mobile: {
                        required: '',
                        number: '',
                        minlength: 'Enter minimum 10 digits number',
                        maxlength: 'Enter maximum 10 digits'

                    },
                    appointment_email: {
                        required : 'Enter your email',
                        email : 'Enter valid email'
                    },
                    appointment_services: {
                        required: 'Pls select service'
                    },
                    appointment_booking_with: {
                        required: 'Pls select booking with '
                    },
                    appointment_date:{
                        required: 'Pls select date'

                    },
                    appointment_time:{
                        required: 'Plsselect time'

                    }
                },
                submitHandler: function(form) {
                    //alert('asa');
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
                                $('.appointment_button').html("Book Appointment");
                                if(data.status==200)
                            {
                                $("#appointment_alert_button").removeClass("hidden");
                                $("#appointment_reset_button").click();
                            }
                        }
                        
                    });
                },
                errorPlacement: function(error, element) {
                    //$( element ).closest( "form" ).find( "span[data-error-for='" + element.attr( "id" ) + "']").html(error[0].innerHTML).css('opacity',1);
                    $( element ).addClass('error');
                    if($(element).is('select')) {
                        $(element).parent().css('border','1px solid #f96868');
                    }
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('error');
                    if($(element).is('select')) {
                        $(element).parent().css('border','1px solid trasparent');
                    }
                }
            });
        },

    // appointment:function(){
    //         // $('.appointment_button').click(function(){
    //         //     $.ajax({
    //         //         url:"appointment/book-my-appointment",
    //         //         type:"POST",
    //         //         dataType:"JSON",
    //         //         data:{
    //         //             name:$('#appointment_name').val(),
    //         //             booking_date: $('#appointment_date').val(),
    //         //             booking_with: $('#appointment_booking_with').val(),
    //         //             booking_timing: $('#appointment_time').val(),
    //         //             mobile: $('#appointment_mobile').val(),
    //         //             service: $('#appointment_services').val(),
    //         //             user_email: $('#appointment_email').val()
    //         //         },
    //         //         beforeSend:function(){
    //         //             $('.appointment_button').html("Booking...");
    //         //         },
    //         //         error:function(data){
    //         //             console.log(data);
    //         //         },
    //         //         success:function(data){
    //         //             console.log(data);
    //         //             $('.appointment_button').html("Book Appointment");
    //         //             if(data.status==200)
    //         //         {
    //         //             $("#appointment_alert_button").removeClass("hidden");
    //         //             $("#appointment_reset_button").click();
    //         //         }
    //         //     }
                    
    //         //     });
    //         // });
    // },

        contact_form: function() {
            var self = this;
            $("#contact_form").validate({
                rules: {
                    contact_name: {
                        required: true
                    },
                    contact_mobile:{
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    contact_email: {
                        required : true,
                        email : true
                    },
                    contact_subject: {
                        required: true
                    },
                    contact_message: {
                        required: true
                    }
                },
                messages : {
                    contact_name: {
                        required: 'Enter your name'
                    },
                    contact_mobile: {
                        required: 'Enter your mobile number',
                        number: 'Enter digits only',
                        minlength: 'Enter minimum 10 digits number',
                        maxlength: 'Enter maximum 10 digits'

                    },
                    contact_email: {
                        required : 'Enter your email',
                        email : 'Enter valid email'
                    },
                    contact_subject: {
                        required: 'Enter Subject'
                    },
                    contact_message: {
                        required: 'plz type something for us'
                    }
                },
                submitHandler: function(form) {
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
                            if(data.status==200)
                            {
                                $("#contact_alert_button").removeClass("hidden");
                                $("#reset_contact_button").click();
                            }
                        }
                    });
                },
                errorPlacement: function(error, element) {
                    $( element ).closest( "form" ).find( "span[data-error-for='" + element.attr( "id" ) + "']").html(error[0].innerHTML).css('opacity',1);
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('error');
                    $(element).closest('.input-wrap').find('.error-span').css('opacity',0);
                    $(element).closest('.textarea-wrap').find('.error-span').css('opacity',0);
                }
            });
        },
        // $('.contact_button').click(function(){
        //     $.ajax({
        //         url: "contact/contact_details",
        //         type: "POST",
        //         dataType: "JSON",
        //         data:{
        //             contact_name: $("#contact_name").val(),
        //             contact_mobile: $("#contact_mobile").val(),
        //             contact_email: $("#contact_email").val(),
        //             contact_subject: $("#contact_subject").val(),
        //             contact_message: $('#contact_message').val()
        //         },
        //         beforeSend: function(data) {
        //             $(".contact_button").html('Processing...');
        //         },
        //         error: function(data){
        //             console.log(data);
        //         },
        //         success: function (data) {
        //             console.log(data);
        //             $(".contact_button").html('Send Message');
        //             if(data.status==200)
        //             {
        //                 $("#contact_alert_button").removeClass("hidden");
        //                 $("#reset_contact_button").click();
        //             }
        //         }

        //     });
        // });
        
        suscribe_email : function(){
             var self = this;
            $("#suscribe_email").validate({
                rules: {
                    suscribe_email: {
                        required : true,
                        email : true
                    }
                },
                messages : {
                    
                    contact_email: {
                        required : 'Enter your email',
                        email : 'Enter valid email'
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: "suscribe-email/index",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            
                            suscribe_email: $('.suscribe_email').val()
                        },
                        beforeSend: function(data) {
                            alert('hello');
                            console.log(data);
                            //$(".contact_button").html('Processing...');
                        },
                        error: function(data){
                            console.log(data);
                        },
                        success: function (data) {
                            console.log(data);
                            
                        }
                    });
                }
            });
        }
        
    
}
