var HSS = HSS ||{};
HSS.EditUser=function(){
    this.initialize();
}

HSS.EditUser.prototype={
    initialize:function(){
        this.edit_user();
        this.updateClients();
    },
    edit_user:function(){
        $('.birth_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $.ajax({
            url: "show-user",
            type: "GET",
            dataType: "JSON",
            data:{
                user_email: $("#user_email").val()
            },
            success: function (data) {
                //console.log(data);
                $(".name").val(data.name);
                $(".birth_date").val(data.mydate);
                $(".address").val(data.address);
                $(".mobile").val(data.mobile);
                $(".username").val(data.username);
                $(".password").val(data.password);
            }
        });
    },

    updateClients:function(){
        var self=this;
        $('.birth_date').datepicker({ autoclose: true,
            format: 'dd-mm-yyyy'})
            .on('changeDate', function(e) {
                $(this).closest('.col-6').find('label.error').remove();
                $(this).removeClass('error');
        });
        $("#edit-profile-form").validate({
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
                    password: {
                        required : true
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
                    password: {
                        required : 'Enter your password'
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url:"edit-user",
                        type:"POST",
                        dataType:"JSON",
                        data:{
                            name:$('#name').val(),
                            birth_date: $('#birth_date').val(),
                            address: $('#address').val(),
                            mobile: $('#mobile').val(),
                            email: $('#user_email').val(),
                            password: $('#password').val()
                        },
                        beforeSend:function(){
                            $('.myupdate').html("Updating...");
                        },
                        error:function(data){
                            console.log(data);
                        },
                        success:function(data){
                            //console.log(data);
                            if(data.status == 200) {
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
                        complete: function() {
                            $('.myupdate').html("Update Profile Info");
                        }
                    });
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element.parent());
                }
                
        });
    }
}
