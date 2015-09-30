var HSS = HSS ||{};
HSS.ViewEmployees=function(){
    this.initialize();
}

HSS.ViewEmployees.prototype={
    initialize:function(){
        this.view_employees();
    },
    view_employees:function(){
        var self = this;
        $.ajax({
            url: "show-all-employees-appointment",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i]+"</td><td>"+data[i].id+"</td><td>" + data[i].name + "</td><td>" + data[i].booking_date + "</td><td>" + data[i].booking_with +"</td><td>"+data[i].booking_timing+"</td><td>"+data[i].mobile+"</td><td>"+data[i].status+"</td><td><select class='appointment-status form-control' data-appointment-id='"+data[i].id+"'><option>Action</option><option value='Approved'>Approve</option><option value='Canceled'>Cancel</option></select></td><td><button class='btn btn-primary appintment-status-update' id='"+data[i].id+"' type='button'> Update</button></tr>";
                    $("#employess_data_json").append(row);
                }    

                self.update_status();
            }
        });
    },
    
    update_status:function(){
        $('.appintment-status-update').click(function(){
            var row= $(this).closest('tr');
            var select = row.find('.appointment-status');
            var status = select.val();
            var appointment_tab_id = select.attr('data-appointment-id');
            //console.log(status+","+appointment_tab_id);
            $.ajax({
                 url: "appointment-status-update-call",
                 type: "POST",
                 dataType: "JSON",
                 data:{
                        status:  status,
                        appointment_tab_id: appointment_tab_id
                     },
                 success: function (data) {
                     if(data.status==200) {
                        row.find('td').eq(7).html(status);
                     }
                }
            });
        });
    }
}


