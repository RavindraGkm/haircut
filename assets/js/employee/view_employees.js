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
                for(var i=0;i<data.length;i++) {
                    var row = "<tr><td class='td-middle-left'>"+[i+1]+"</td><td class='td-middle-left'>" + data[i].name + "</td><td class='td-middle-left'>" + data[i].birth_date + "</td><td class='td-middle-left'>" + data[i].address +"</td><td class='td-middle-left'>"+data[i].mobile+"</td><td class='td-middle-left'>"+data[i].joining_date+"</td><td class='td-middle-left'>"+data[i].leaving_date+"</td><td class='td-middle-left'>"+data[i].status+"</td><td class='td-middle-left'><select class='employees-status form-control' data-employee-id='"+data[i].id+"'><option>Action</option><option value='Working'>Working</option><option value='Archive'>Archive</option></select></td><td><button class='btn btn-primary employees-status-update' id='"+data[i].id+"' type='button'>Update</button></td></tr>";
                    $("#employess_data_json").append(row);
                }
                self.update_status();
            },
            complete: function () {
                self.table_filter($("#datatable_fixed_column"));
            },
            error: function(data) {
                console.log(data);
            }
        });
    },
    table_filter:function(table_id) {
        var responsiveHelper_datatable_fixed_column = undefined;
        var breakpointDefinition = {
            tablet : 1024,
            phone : 480
        };
        var otable = table_id.DataTable({
            "sDom": ""+
            "t"+
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "autoWidth" : true,
            "preDrawCallback" : function() {
                if (!responsiveHelper_datatable_fixed_column) {
                    responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper(table_id, breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_datatable_fixed_column.respond();
            }
        });
        table_id.find("thead th input[type=text]").on( 'keyup change', function () {
            otable
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();
        } );
    },
    update_status:function(){
        $('.employees-status-update').click(function(){
            var button = $(this);
            var row= $(this).closest('tr');
            var select = row.find('.employees-status');
            var status = select.val();
            var employee_tab_id = select.attr('data-employee-id');
            //console.log(status+","+employee_tab_id);
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
                        row.find('td').eq(7).html(status);
                        row.find('td').eq(6).html(data.leaving_date);
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
                complete:function() {
                    button.html('Update');
                }
            });
        });
    }
}
