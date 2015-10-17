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
        $('.birth_date').datepicker({ autoclose: true,
            format: 'dd-mm-yyyy'})
            .on('changeDate', function(e) {
                $(this).closest('.col-6').find('label.error').remove();
                $(this).removeClass('error');
        });
            $('.joining_date').datepicker({ autoclose: true,
            format: 'dd-mm-yyyy'})
            .on('changeDate', function(e) {
                $(this).closest('.col-6').find('label.error').remove();
                $(this).removeClass('error');
        });
       
        $("#booking-form").validate({
                rules: {
                    name: {
                        required: true
                    },
                    birth_date: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    mobile:{
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        required : true,
                        email : true
                    },
                    
                    joining_date: {
                        required: true
                    }
                },
                messages : {
                    name: {
                        required: 'Enter employee name'
                    },
                    birth_date: {
                        required: 'Pls select date of birth'
                    },
                    address: {
                        required: 'Enter employee address'
                    },
                    mobile: {
                        required: 'Enter employee mobile number',
                        number: '10 digits number required',
                        minlength: 'Enter minimum 10 digits number',
                        maxlength: 'Enter maximum 10 digits'

                    },
                    email: {
                        required : 'Enter your email',
                        email : 'Enter valid email'
                    },
                    joining_date: {
                        required: 'Pls select date of joining'
                    }
                },
                submitHandler: function(form) {
                    //alert('asa');
                    $.ajax({
                        url: "add-employee",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            name: $("#name").val(),
                            birth_date: $("#birth_date").val(),
                            address: $("#address").val(),
                            mobile: $("#mobile").val(),
                            email: $('#email').val(),
                            joining_date: $('#joining_date').val(),
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
                },
                errorPlacement: function(error, element) {
                    // //$( element ).closest( "form" ).find( "span[data-error-for='" + element.attr( "id" ) + "']").html(error[0].innerHTML).css('opacity',1);
                    // $( element ).addClass('error');
                    // if($(element).is('select')) {
                    //     $(element).parent().css('border','1px solid #f96868');
                    // }
                    error.insertAfter(element.parent());
                }
                
            });
        },
        // $('.myaddemp').click(function(){
        //     $.ajax({
        //         url: "add-employee",
        //         type: "POST",
        //         dataType: "JSON",
        //         data:{
        //             name: $("#name").val(),
        //             birth_date: $("#birth_date").val(),
        //             address: $("#address").val(),
        //             mobile: $("#mobile").val(),
        //             email: $('#email').val(),
        //             joining_date: $('#joining_date').val(),
        //         },
        //         beforeSend: function(data) {
        //             $(".myaddemp").html('Processing...');
        //         },
        //         error: function(data){
        //             console.log(data);
        //         },
        //         success: function (data) {
        //             if(data.status==200) {
        //                 $.smallBox({
        //                     title: data.msg,
        //                     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
        //                     color: "#296191",
        //                     iconSmall: "fa fa-thumbs-up bounce animated",
        //                     timeout: 4000
        //                 });
        //                 $("#reset_employee_add_form").click();
        //             }
        //             else if(data.status==401) {
        //                 $.smallBox({
        //                     title: data.msg,
        //                     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
        //                     color: "#c26565",
        //                     iconSmall: "fa fa-thumbs-down bounce animated",
        //                     timeout: 4000
        //                 });
        //             }
        //             $(".myaddemp").html('Add Employee');
        //         }

        //     });
        // });
}

