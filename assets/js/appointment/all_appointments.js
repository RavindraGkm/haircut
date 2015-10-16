var HSS = HSS ||{};
HSS.Appointments=function() {
    this.initialize();
}

HSS.Appointments.prototype={
    initialize:function(){
        this.load_appointments();
    },
    load_appointments:function(){
        var self = this;
        $.ajax({
            url: "show-all-employees-appointment",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.length;i++) {
                    var row = "<tr><td class='td-middle-left'>"+[i+1]+"</td><td class='hidden'>"+data[i].id+"</td><td class='td-middle-left'>" + data[i].customer_name + "</td><td class='td-middle-left'>" + data[i].booking_date + "</td><td class='td-middle-left'>" + data[i].booking_with +"</td><td class='td-middle-left'>"+data[i].booking_timing+"</td><td class='td-middle-left'>"+data[i].mobile+"</td><td>"+data[i].service+"</td><td class='td-middle-left'>"+data[i].status+"</td><td class='td-middle-left'><select class='appointment-status form-control' data-appointment-id='"+data[i].id+"'><option>Action</option><option value='Approved'>Approve</option><option value='Canceled'>Cancel</option></select></td><td><button class='btn btn-primary appintment-status-update' id='"+data[i].id+"' type='button'> Update</button></td></tr>";
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
        table_id.find("thead th input[type=text], thead th select").on( 'keyup change', function () {
            otable
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();
        } );
        $('.booking-date').datepicker({
            autoclose: true,
            format: 'dd-M-yyyy'
        });
    },
    update_status:function() {
        $('.appintment-status-update').click(function() {
            var button_clicked = $(this);
            var row= $(this).closest('tr');
            var select = row.find('.appointment-status');
            var status = select.val();
            var appointment_tab_id = select.attr('data-appointment-id');
            $.ajax({
                url: "appointment-status-update-call",
                type: "POST",
                dataType: "JSON",
                data:{
                    status:  status,
                    appointment_tab_id: appointment_tab_id
                },
                beforeSend: function() {
                    button_clicked.html('Updating..');
                },
                success: function (data) {
                    if(data.status==200) {
                        row.find('td').eq(8).html(status);
                        $.smallBox({
                            title: data.msg,
                            content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                            color: "#296191",
                            iconSmall: "fa fa-thumbs-up bounce animated",
                            timeout: 4000
                        });
                        button_clicked.html('Update');
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
                }
            });
        });
    }
}
