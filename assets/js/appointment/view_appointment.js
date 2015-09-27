var HSS = HSS ||{};
HSS.ViewAppointment=function(){
    this.initialize();
}

HSS.ViewAppointment.prototype={
    initialize:function(){
        this.view_appointment();
    },
    view_appointment:function(){
        $.ajax({
            url: "show-all-appointment",
            type: "GET",
            dataType: "JSON",
            data:{
                    user_id: $(".user_id").val()
                },
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i]+"</td><td>" + data[i].name + "</td><td>" + data[i].booking_date + "</td><td>" + data[i].booking_with +"</td><td>"+data[i].booking_time+"</td><td>"+data[i].mobile+"</td><td>"+data[i].status+"</td></tr>";                    
                    $("#appontment_data_json").append(row);
                }

                    
                
            }
        });
    }
}