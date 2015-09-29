var HSS = HSS ||{};
HSS.ViewEmployees=function(){
    this.initialize();
}

HSS.ViewEmployees.prototype={
    initialize:function(){
        this.view_employees();
    },
    view_employees:function(){
        $.ajax({
            url: "show-all-employees",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //console.log(data);
                for(var i=0;i<data.length;i++) 
                {             
                    var row = "<tr><td>"+[i]+"</td><td>" + data[i].name + "</td><td>" + data[i].birth_date + "</td><td>" + data[i].address +"</td><td>"+data[i].mobile+"</td><td>"+data[i].email+"</td></tr>";                    
                    $("#employess_data_json").append(row);
                }                   
                
            }
        });
    }
}
