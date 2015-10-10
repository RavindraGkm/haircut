var HSS = HSS || {};

HSS.AddEmployee = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.AddEmployee.prototype={
    initialize:function(){
        this.add_employee();
    },
    add_employee:function() {
        var self=this;
        $('.birth_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('.myaddemp').click(function(){
            $.ajax({
                url: "add-employee",
                type: "POST",
                dataType: "JSON",
                data:{
                    name: $("#name").val(),
                    birth_date: $("#birth_date").val(),
                    address: $("#address").val(),
                    mobile: $("#mobile").val(),
                    email: $('#email').val()
                },
                beforeSend: function(data) {
                    $(".myaddemp").html('Processing...');
                },
                error: function(data){
                    console.log(data);
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
                        $("#reset_employee_add_form").click();
                    }
                    else if(data.status==401) {
                        $.smallBox({
                            title: data.msg,
                            content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                            color: "#c26565",
                            iconSmall: "fa fa-thumbs-down bounce animated",
                            timeout: 4000
                        });
                    }
                    $(".myaddemp").html('Add Employee');
                }

            });
        });
    }
}
