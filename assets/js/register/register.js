var CKE = CKE || {};

CKE.Register = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
CKE.Register.prototype={
    initialize:function(){
        this.register();
    },
    register:function() {
        var self=this;
        $('.birth_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('.mysignup').click(function(){
            $.ajax({
                url: "registration/user-registration",
                type: "POST",
                dataType: "JSON",
                data:{
                    name: $("#name").val(),
                    mydate: $("#birth_date").val(),
                    address: $("#address").val(),
                    mobile: $("#mobile").val(),
                    email: $('#email').val(),
                    password: $("#password").val()
                },
                beforeSend: function(data) {
                    $(".mysignup").html('Processing...');
                },
                error: function(data){
                    console.log(data);
                },
                success: function (data) {
                    console.log(data);
                     if(data.status==200) {
                         $.smallBox({
                             title: data.msg,
                             content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                             color: "#296191",
                             iconSmall: "fa fa-thumbs-up bounce animated",
                             timeout: 4000
                         });
                         setTimeout(function(){
                             window.location= window.location = self.base_url+"login";
                         },4000);
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
                    $(".mysignup").html('Sign Up');
                }

            });
        });
    }
}
