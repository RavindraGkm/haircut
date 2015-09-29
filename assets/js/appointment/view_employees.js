var HSS = HSS ||{};
HSS.ViewEmployees=function(){
    this.initialize();
}

HSS.ViewEmployees.prototype={
    initialize:function(){
        this.view_employees();
        this.approve();
    },
    view_employees:function(){
        $.ajax({
            url: "show-all-employees-appointment",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i]+"</td><td>"+data[i].id+"</td><td>" + data[i].name + "</td><td>" + data[i].booking_date + "</td><td>" + data[i].booking_with +"</td><td>"+data[i].booking_timing+"</td><td>"+data[i].mobile+"</td><td>"+data[i].status+"</td><td><select class='form-gourp'><option>Booking With</option><option value='"+data[i].id+"'>Approve</option><option value='"+data[i].id+"'>Cancel</option></select></td></tr>";                    
                    $("#employess_data_json").append(row);
                }                   
                
            }
        });
    },
    approve:function(){
        $(".myapprove").click(function(){
            alert(this.id);
        });
    }
}


