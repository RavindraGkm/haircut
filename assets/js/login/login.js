var HSS = HSS || {};

HSS.Login = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Login.prototype={
    initialize:function(){
        this.login();
        this.facebookLogin();
    },
    login:function() {
        var self=this;
        $('#btn-signin').click(function(){
            $.ajax({
                url: self.base_url+"login/login-check",
                type: "POST",
                dataType: "JSON",
                data:{
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                beforeSend: function(data) {
                    $("#btn-signin").html('Processing...');
                },
                error: function(data){
                    console.log(data);
                },
                success: function (data) {
                    console.log(data);
                    if(data.status==200) {
                        if(data.user_type==0) {
                            window.location = self.base_url+"profile/view-profile";
                        }
                        else {
                            window.location=self.base_url+"employee/employee-registration";
                        }
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
                    $("#btn-signin").html('Sign in');
                }
            });
        });
    },
    facebookLogin:function() {
        var self = this;
        self.fbAsyncInit();
        $("#login_with_fb").click(function() {
            FB.login(
                function(response) {
                    if (response.status == 'connected') {
                        FB.api('/me?fields=id,name,email,first_name,gender', function(response) {
                            $.ajax({
                                url: self.base_url+"login/login-with-fb",
                                type: "POST",
                                dataType: 'JSON',
                                data: {
                                    email: response.email,
                                    gender: response.gender
                                },
                                success: function (data) {
                                    console.log(data);
                                    window.location = data.url;
                                },
                                error: function (data) {
                                    console.log(data);
                                }
                            });
                            console.log(response);
                        });
                    }
                }
                ,{
                    scope: "email,public_profile"
                }
            );
        });
    },
    fbAsyncInit:function() {
        FB.init({
            appId:'1520126861611448',
            status:true,
            cookie:true,
            xfbml:true
        });
    }
}
