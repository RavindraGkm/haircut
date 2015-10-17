var HSS = HSS ||{};
HSS.BookAppointment=function(){
    this.initialize();
}
HSS.BookAppointment.prototype={
    initialize:function(){
        this.get_employees_name();
        this.book_appointment();
    },
    get_employees_name:function() {
        $.ajax({
                url:"../employee/get-employees-name",
                type:"GET",
                dataType:"JSON",
                success:function(data){
                    //console.log(data);
                    for(var i=0;i<data.length;i++) {
                        var row = "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                        $("#booking_with").append(row);
                }
            }
        });
    },
    
    book_appointment:function(){
        var self=this;
        $('.booking_timing').timepicker({
            autoclose: true,
            minuteStep: 5
        });
        $('.booking_date').datepicker({ autoclose: true,
            format: 'dd-mm-yyyy'})
            .on('changeDate', function(e) {
                $(this).closest('.col-6').find('label.error').remove();
                $(this).removeClass('error');
        });
        $("#book-form-validate").validate({
                rules: {
                    name: {
                        required: true
                    },
                    booking_date: {
                        required: true
                    },
                    booking_with: {
                        required: true
                    },
                    mobile:{
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    service: {
                        required : true
                    }
                },
                messages : {
                    name: {
                        required: 'Enter employee name'
                    },
                    booking_date: {
                        required: 'Pls select date of birth'
                    },
                    booking_with: {
                        required: 'Pls select barber name'
                    },
                    mobile: {
                        required: 'Enter employee mobile number',
                        number: '10 digits number required',
                        minlength: 'Enter minimum 10 digits number',
                        maxlength: 'Enter maximum 10 digits'

                    },
                    service: {
                        required : 'Pls select service'
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url:"book-my-appointment",
                        type:"POST",
                        dataType:"JSON",
                        data:{
                            name:$('#name').val(),
                            booking_date: $('#booking_date').val(),
                            booking_with: $('#booking_with').val(),
                            booking_timing: $('#booking_timing').val(),
                            mobile: $('#mobile').val(),
                            service: $('#service').val(),
                            user_email: $('#user_email').val()
                        },
                        beforeSend:function(){
                            $('.mybooking').html("Booking...");
                        },
                        error:function(data){
                            console.log(data);
                        },
                        success:function(data){
                            //console.log(data);
                            if(data.status == 200) {
                                $.smallBox({
                                    title: data.msg,
                                    content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                                    color: "#296191",
                                    iconSmall: "fa fa-thumbs-up bounce animated",
                                    timeout: 4000
                                });
                            }
                            else {
                                $.smallBox({
                                    title: data.msg,
                                    content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                                    color: "#c26565",
                                    iconSmall: "fa fa-thumbs-down bounce animated",
                                    timeout: 4000
                                });
                            }
                        },
                        complete: function() {
                            $('.mybooking').html("Book new appointment");
                            $("#reset_appointment_form").click();
                        }
                    });
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element.parent());
                }
                
        });
        // $('.mybooking').click(function(){
        //     $.ajax({
        //         url:"book-my-appointment",
        //         type:"POST",
        //         dataType:"JSON",
        //         data:{
        //             name:$('#name').val(),
        //             booking_date: $('#booking_date').val(),
        //             booking_with: $('#booking_with').val(),
        //             booking_timing: $('#booking_timing').val(),
        //             mobile: $('#mobile').val(),
        //             service: $('#service').val(),
        //             user_email: $('#user_email').val()
        //         },
        //         beforeSend:function(){
        //             $('.mybooking').html("Booking...");
        //         },
        //         error:function(data){
        //             console.log(data);
        //         },
        //         success:function(data){
        //             //console.log(data);
        //             if(data.status == 200) {
        //                 $.smallBox({
        //                     title: data.msg,
        //                     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
        //                     color: "#296191",
        //                     iconSmall: "fa fa-thumbs-up bounce animated",
        //                     timeout: 4000
        //                 });
        //             }
        //             else {
        //                 $.smallBox({
        //                     title: data.msg,
        //                     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
        //                     color: "#c26565",
        //                     iconSmall: "fa fa-thumbs-down bounce animated",
        //                     timeout: 4000
        //                 });
        //             }
        //         },
        //         complete: function() {
        //             $('.mybooking').html("Book new appointment");
        //             $("#reset_appointment_form").click();
        //         }
        //     })
        // });
    }

}
