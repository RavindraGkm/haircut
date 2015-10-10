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
<<<<<<< HEAD
            url:"../employee/get-employees-name",
            type:"GET",
            dataType:"JSON",
            success:function(data) {
                for(var i=0;i<data.length;i++) {
=======
                url:"../employee/get-employees-name",
                type:"GET",
                dataType:"JSON",
                success:function(data){
                    console.log(data);
                    for(var i=0;i<data.length;i++) 
                    {             
>>>>>>> c8af774b546820d9fe0b409c28de88912d6054fd
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
            })
        });
    }

}
