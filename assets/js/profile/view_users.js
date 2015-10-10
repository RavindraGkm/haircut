var HSS = HSS ||{};
HSS.ViewUsers=function(){
    this.initialize();
}

HSS.ViewUsers.prototype={
    initialize:function(){
        this.view_users();
    },
    view_users:function(){
        $.ajax({
            url: "show-all-users-details",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i+1]+"</td><td>" + data[i].name + "</td><td>" + data[i].birth_date + "</td><td>" + data[i].address +"</td><td>"+data[i].mobile+"</td><td>"+data[i].username+"</td></tr>";                    
                    $("#show_user_data_json").append(row);
                }                 
                
            }
        });
    }
}
