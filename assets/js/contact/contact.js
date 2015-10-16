var HSS = HSS || {};

HSS.Contact = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Contact.prototype={
    initialize:function(){
        this.contact_form();
        tihs.suscribe_email();
    },

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
    suscribe_email : function(){
            $("#subscribe-form").validate({
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
                        url: "subscribe",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            
                            subscribe_email: $('#subscribe-email').val()
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
