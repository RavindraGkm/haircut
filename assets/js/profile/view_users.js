var HSS = HSS ||{};
HSS.ViewUsers=function(){
    this.initialize();
}

HSS.ViewUsers.prototype={
    initialize:function(){
        this.view_users();
    },
    view_users:function(){
        var self= this;
        $.ajax({
            url: "show-all-users-details",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                for(var i=0;i<data.length;i++) {
                    var row = "<tr><td>"+[i+1]+"</td><td>" + data[i].name + "</td><td>" + data[i].birth_date + "</td><td>" + data[i].address +"</td><td>"+data[i].mobile+"</td><td>"+data[i].username+"</td></tr>";                    
                    $("#show_user_data_json").append(row);
                }
            },
            complete: function() {
                self.table_filter($("#datatable_fixed_column"));
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
}
