var HSS = HSS ||{};
HSS.ViewEmployees=function(){
    this.initialize();
}

HSS.ViewEmployees.prototype={
    initialize:function(){
        this.view_employees();
        this.update_status();
    },
    view_employees:function(){
         var self = this;
        $.ajax({
            url: "show-all-employees",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i+1]+"</td><td>" + data[i].name + "</td><td>" + data[i].birth_date + "</td><td>" + data[i].address +"</td><td>"+data[i].mobile+"</td><td>"+data[i].email+"</td><td>"+data[i].status+"</td><td><select class='employees-status form-control' data-employee-id='"+data[i].id+"'><option>Action</option><option value='Working'>Working</option><option value='Archieve'>Archieve</option></select></td><td><button class='btn btn-primary employees-status-update' id='"+data[i].id+"' type='button'> Update</button></tr>";
                    $("#employess_data_json").append(row);
                }                   
                self.update_status();
            }
        });
    },

    update_status:function(){
        $('.employees-status-update').click(function(){
            var row= $(this).closest('tr');
            var select = row.find('.employees-status');
            var status = select.val();
            var employee_tab_id = select.attr('data-employee-id');
            console.log(status+","+employee_tab_id);
            $.ajax({
                 url: "employee-status-update-call",
                 type: "POST",
                 dataType: "JSON",
                 data:{
                        status:  status,
                        employee_tab_id: employee_tab_id
                     },
                success: function (data) {
                     if(data.status==200) {
                        row.find('td').eq(6).html(status);
                     }
                }
            });
        });
    }
}
