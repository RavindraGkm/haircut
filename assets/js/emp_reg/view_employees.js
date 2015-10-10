var HSS = HSS ||{};
HSS.ViewEmployees=function(){
    this.initialize();
}

HSS.ViewEmployees.prototype={
    initialize:function(){
        this.view_employees();
        this.update_status();
    },
    view_employees:function() {
        var self = this;
        $.ajax({
            url: "show-all-employees",
            type: "GET",
            dataType: "JSON",
            beforeSend: function() {
            },
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.length;i++) {
                    var row = "<tr><td class='td-middle-left'>"+[i+1]+"</td><td class='td-middle-left'>" + data[i].name + "</td><td class='td-middle-left'>" + data[i].birth_date + "</td><td class='td-middle-left'>" + data[i].address +"</td><td class='td-middle-left'>"+data[i].mobile+"</td><td class='td-middle-left'>"+data[i].email+"</td><td class='td-middle-left'>"+data[i].status+"</td><td class='td-middle-left'><select class='employees-status form-control' data-employee-id='"+data[i].id+"'><option>Action</option><option value='Working'>Working</option><option value='Archive'>Archive</option></select></td><td><button class='btn btn-primary employees-status-update' id='"+data[i].id+"' type='button'>Update</button></td></tr>";
                    $("#employess_data_json").append(row);
                }
                self.update_status();
            },
            error: function(data) {
                console.log(data);
            }
        });
    },
    update_status:function(){
        $('.employees-status-update').click(function(){
            var button = $(this);
            var row= $(this).closest('tr');
            var select = row.find('.employees-status');
            var status = select.val();
            var employee_tab_id = select.attr('data-employee-id');
            console.log(status+","+employee_tab_id);
            $.ajax({
                url: "employee-status-update-call",
                type: "POST",
                dataType: "JSON",
                beforeSend:function() {
                    button.html('updating..');
                },
                data:{
                    status:  status,
                    employee_tab_id: employee_tab_id
                },
                success: function (data) {
                    if(data.status==200) {
                        $.smallBox({
                            title: data.msg,
                            content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                            color: "#296191",
                            iconSmall: "fa fa-thumbs-up bounce animated",
                            timeout: 4000
                        });
                        row.find('td').eq(6).html(status);
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
                complete:function() {
                    button.html('Update');
                }
            });
        });
    }
}
