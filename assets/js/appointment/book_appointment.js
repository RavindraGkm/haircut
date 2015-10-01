var HSS = HSS ||{};
HSS.BookAppointment=function(){
    this.initialize();
}

HSS.BookAppointment.prototype={
    initialize:function(){
        this.book_appointment();
    },
    book_appointment:function(){

        var self=this;

        $('.booking_timing').timepicker({
            autoclose: true,
            minuteStep: 5
        });

        $('.booking_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });

        $('.mybooking').click(function(){
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
                    user_email: $('#user_email').val()
                },
                beforeSend:function(){
                    $('.mybooking').html("Booking...");
                },
                error:function(data){
                    console.log(data);
                },
                success:function(data){
                    console.log(data);
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
            })
        });
    }

}
