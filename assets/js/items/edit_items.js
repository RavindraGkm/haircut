var CKE = CKE || {};

CKE.EditItems = function(base_url){
    this.base_url=base_url;
    this.initialize();
}

CKE.EditItems.prototype={
    initialize:function() {
        this.bootstrapElementsSetup();
        this.editItems();
        this.updateItems();
    },
    bootstrapElementsSetup: function() {
        $("#d4").attr("disabled", "disabled");
        $("#chkd4").click(function () {
            if ($(this).is(":checked")) {
                $("#d4").removeAttr("disabled");
                $("#d4").removeAttr("value");
                $("#d4").focus();
            } else {
                $("#d4").val("");
                $("#d4").attr("disabled", "disabled");
            }
        });
    },
    editItems:function(){
        var self=this;
        $.ajax({
            url: self.base_url+'items/get-item-by-id',
            type: 'GET',
            dataType:'JSON',
            data:{
                item_id: $("#item_id").val()
            },
            success:function(data) {
                if(data.count==1) {
                    $("#select-category").val(data.item_category);
                    $("#itemname").val(data.item_name);
                    $("#itemcode").val(data.item_code);
                    $("#d1").val(data.d1);
                    $("#d2").val(data.d2);
                    $("#d3").val(data.d3);
                    $("#d4").val(data.d4);
                    if($("#d4").val()!="") {
                        $("#chkd4").attr('checked','true');
                        $("#d4").removeAttr('disabled');
                    }
                }
            }
        });
    },
    updateItems:function() {
        var self=this;
        $('#btn-update_item').click(function(){
            $.ajax({
                url:self.base_url+'items/update-item',
                type:"POST",
                dataType:"JSON",
                data:{
                    item_id:$('#item_id').val(),
                    category:$('#select-category').val(),
                    item_name: $('#itemname').val(),
                    item_code: $('#itemcode').val(),
                    d1: $('#d1').val(),
                    d2:$('#d2').val(),
                    d3:$('#d3').val(),
                    d4:$('#d4').val()
                },
                beforeSend:function(){
                    $('#btn-update_item').html("Updating...");
                },
                error:function(data){
                    console.log(data);
                },
                success:function(data){
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
                    $('#btn-update_item').html("Update Client");
                }
            })
        });
    }
}
