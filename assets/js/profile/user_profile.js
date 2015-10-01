var HSS = HSS ||{};
HSS.ShowUser=function(){
    this.initialize();
}

HSS.ShowUser.prototype={
    initialize:function(){
        this.show_user();
    },
    show_user:function(){
        $.ajax({
            url: "show-user",
            type: "GET",
            dataType: "JSON",
            data:{
                user_email: $("#user_email").val()
            },
            success: function (data) {
                //console.log(data);
                $(".name").html(data.name);
                $(".birth-date").html(data.mydate);
                $(".address").html(data.address);
                $(".mobile").html(data.mobile);
                $(".email").html(data.email);
                $(".password").html(data.password);
            }
        });
    }
}
