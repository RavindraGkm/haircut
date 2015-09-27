var CKE = CKE ||{};
CKE.AddItems=function(){
    this.initialize();
}

CKE.AddItems.prototype={
    initialize:function(){
        this.addItems();
    },
    addItems:function(){
        $("#d4").attr("disabled", "disabled");

        $("#chkd4").click(function () {
            if ($(this).is(":checked")) {
                $("#d4").removeAttr("disabled");
                $("#d4").removeAttr("value");
                $("#d4").focus();
            } else {
                $("#d4").attr("disabled", "disabled");
                $("#d4").removeAttr("value");
            }
        });

        $('#btn_save_Item').click(function(){
            $.ajax({
                url: "add-new-item",
                type: "POST",
                dataType: 'JSON',
                data: {
                    itemAdd: true,
                    category:$('#select-category').val(),
                    item_name: $('#itemname').val(),
                    item_code: $('#itemcode').val(),
                    d1: $('#d1').val(),
                    d2:$('#d2').val(),
                    d3:$('#d3').val(),
                    d4:$('#d4').val()
                },
                beforeSend: function () {
                    $('#btn_save_Item').html("Adding Item...");
                },
                error: function (data) {
                    console.log(data);
                },
                success: function (data) {
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
                        console.log(data);
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
                    $("#reset_item_form").click();
                    $('#btn_save_Item').html("Add Item");
                }
            });

        });
    }
}

