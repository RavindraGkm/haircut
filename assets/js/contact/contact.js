var HSS = HSS || {};

HSS.Contact = function (base_url) {
    this.base_url=base_url;
    this.get_employees_name_at_home_page();
    this.initialize();
}
HSS.Contact.prototype={
    initialize:function(){
        this.contact();
    },
    
    get_employees_name_at_home_page:function() {
        $.ajax({
                url:"employee/get-employees-name",
                type:"GET",
                dataType:"JSON",
                success:function(data){
                    //console.log(data);
                    for(var i=0;i<data.length;i++) {
                        var row = "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                        $("#booking_with").append(row);
                }
            }
        });
    },
    contact:function() {
        var self=this;
        
        $('.contact_button').click(function(){
            $.ajax({
                url: "contact/contact_details",
                type: "POST",
                dataType: "JSON",
                data:{
                    contact_name: $("#contact_name").val(),
                    contact_mobile: $("#contact_mobile").val(),
                    contact_email: $("#contact_email").val(),
                    contact_subject: $("#contact_subject").val(),
                    contact_message: $('#contact_message').val()
                },
                beforeSend: function(data) {
                    $(".contact_button").html('Processing...');
                },
                error: function(data){
                    console.log(data);
                },
                success: function (data) {
                    console.log(data);
                    /*if(data.status==200) {
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
                    }*/
                    $(".contact_button").html('Send Message');
                    $(".contact_name").html();
                    $(".contact_mobile").html();
                    $(".contact_email").html();
                    $(".contact_subject").html();
                    $(".contact_message").html();
                }

            });
        });
    }
}
