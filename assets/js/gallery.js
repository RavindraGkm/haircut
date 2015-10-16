var HSS = HSS || {};

HSS.Gallery = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Gallery.prototype={
    initialize:function(){
        this.suscribe_email();
    },

    
        suscribe_email : function(){
            $("#subscribe-form").validate({
                rules: {
                    suscribe_email: {
                        required : true,
                        email : true
                    }
                },
                messages : {
                    
                    contact_email: {
                        required : 'Enter your email',
                        email : 'Enter valid email'
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: "subscribe",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            
                            subscribe_email: $('#subscribe-email').val()
                        },
                        error: function(data){
                            console.log(data);
                        },
                        success: function (data) {
                            console.log(data);
                            
                        }
                    });
                }
            });
        }
        
    
}
