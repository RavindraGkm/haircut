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
                console.log(data);
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
        $('.myupdate').click(function(){
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
                    console.log(data);
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
            })
        });
    }
}
