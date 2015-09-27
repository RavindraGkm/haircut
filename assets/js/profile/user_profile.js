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
                    id: $("#user_id").val()
                },
            success: function (data) {
                console.log(data);
                $(".name").html(data.name);
                $(".birth-date").html(data.mydate);
                $(".address").html(data.address);
                $(".mobile").html(data.mobile);
                $(".username").html(data.username);
                $(".password").html(data.password);
            }
        });
    }
}
