var HSS = HSS ||{};
HSS.TryHairStyle=function(){
    this.initialize();
    this.selected_hair_style='';
    this.chrome_stream = "";
}

HSS.TryHairStyle.prototype={
    initialize:function(){
        this.super_box();
        this.imageSelection();
        this.fileUploadSetup();
        this.imageUpload();
        this.basicSetup();
        this.dimensionController();
    },
    super_box:function() {
        var self = this;
        var b = $('<div class="superbox-show"></div>'),
        c = $('<img src="" class="superbox-current-img">' +
        '<div id="imgInfoBox" class="superbox-imageinfo inline-block"><h1>Image Title</h1><span><p class="superbox-img-description">Image description</p><p><a href="javascript:void(0);" class="btn btn-primary btn-lg try-hair-style">Try Hair Style</a></p></span> </div>'),
        d = $('<div class="superbox-close txt-color-white"><i class="fa fa-times fa-lg"></i></div>');
        b.append(c).append(d);
        $(".superbox-imageinfo");
        return $('.superbox').each(function() {
            $(".superbox-list").click(function() {
                $this = $(this);
                var d = $this.find(".superbox-img"),
                e = d.data("img"),
                f = d.attr("alt") || "No description",
                g = e,
                h = d.attr("title") || "No Title";
                self.selected_hair_style = d.attr('src');
                c.attr("src", e), $(".superbox-list").removeClass("active"), $this.addClass("active"), c.find("em").text(g), c.find(">:first-child").text(h), c.find(".superbox-img-description").text(f), 0 == $(".superbox-current-img").css("opacity") && $(".superbox-current-img").animate({
                    opacity: 1
                }), $(this).next().hasClass("superbox-show") ? ($(".superbox-list").removeClass("active"), b.toggle()) : (b.insertAfter(this).css("display", "block"), $this.addClass("active")), $("html, body").animate({
                    scrollTop: b.position().top - d.width()
                }, "medium", function() {
                    self.try_hair_style_links()
                })
            }), $(".superbox").on("click", ".superbox-close", function() {
                $(".superbox-list").removeClass("active"), $(".superbox-current-img").animate({
                    opacity: 0
                }, 200, function() {
                    $(".superbox-show").slideUp()
                })
            })
        })
    },
    try_hair_style_links : function() {
        var self = this;
        $(".try-hair-style").unbind('click');
        $(".try-hair-style").click(function() {
            $("#myModal").modal('show');
            $("#hair_style_web_cam").attr('src',self.selected_hair_style);
            self.webCamSetup();
        });
    },
    basicSetup: function() {
        var self= this;
        $(".tabs-anchor").click(function(e) {
            e.preventDefault();
            $(".tabs").removeClass('active');
            $(".upload-tab-content").addClass('hidden');
            $(".web-cam-tab-content").addClass('hidden');
            var tab_id_clicked=$(this).attr('href');
            $(this).parent().addClass('active');
            $(tab_id_clicked).removeClass('hidden');
        });
        $(".change-hair-style").click(function(e) {
            e.preventDefault();
            $("#image_modal").modal('show');
        });
        $("#owl-example").owlCarousel();
        $(".owl-item").click(function() {
            var hair_style_image = $(this).find('img');
            self.selected_hair_style = hair_style_image.attr('src');
            $("#applied_hair_style").attr('src',self.selected_hair_style);
            $("#hair_style_web_cam").attr('src',self.selected_hair_style);
            $("#image_modal").modal('hide');
        });
    },
    imageSelection: function() {
        var self = this;
        $("#file").change(function () {
            $("#message").empty(); // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match = ["image/jpeg", "image/png", "image/jpg"];
            if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
                $('#previewing').attr('src', 'no-image.gif');
                $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                return false;
            }
            else {
                var reader = new FileReader();
                reader.onload = self.imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    },
    imageIsLoaded: function(e) {
        var self = this;
        $("#file").css("color","green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '302px');
        $('#previewing').attr('height', '303px');
        $("#hat-img").draggable({ containment: ".content-wrapper", scroll: false });
        $("#image_preview").draggable({ containment: ".content-wrapper", scroll: false });
    },
    webCamSetup: function() {
        var self=this;
        var canvas = document.getElementById("canvas"), context = canvas.getContext("2d"),video = document.getElementById("video");
        console.log("Called");
        self.chrome_stream = "",
        videoObj = { "video": true },
        errBack = function(error) {
            console.log("Video capture error: ", error.code);
        };
        if(navigator.getUserMedia) { // Standard
            navigator.getUserMedia(videoObj, function(stream) {
                video.src = stream;
                video.play();
                $("#hair_style_web_cam").draggable({ containment: ".snap-wrapper", scroll: false });
            }, errBack);
        } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
            navigator.webkitGetUserMedia(videoObj, function(stream){
                video.src = window.URL.createObjectURL(stream);
                self.chrome_stream = stream;
                video.play();
                $("#hair_style_web_cam").draggable({ containment: ".snap-wrapper", scroll: false });
            }, errBack);
            setTimeout(function(){

            } , 10000);
        }
        else if(navigator.mozGetUserMedia) { // Firefox-prefixed
            navigator.mozGetUserMedia(videoObj, function(stream){
                video.src = window.URL.createObjectURL(stream);
                self.chrome_stream = stream;
                video.play();
                $("#hair_style_web_cam").draggable({ containment: ".snap-wrapper", scroll: false });
            }, errBack);
        }
        $(".btn-take-snap").click(function() {
            context.drawImage(video, 0, 0, $("#canvas").width(), $("#canvas").height());
            $(".hat-image").removeClass('hidden');
        });
        $('#myModal').on('hidden.bs.modal', function (e) {
            self.chrome_stream.stop();
            self.chrome_stream=null;
        });
    },
    fileUploadSetup: function() {
        $('input[type=file]').customFile();
    },
    imageUpload: function() {
        var self = this;
        var progress_bar = $(".progress-bar");
        $('#uploadForm').submit(function(e) {
            if($('#user_image').val()) {
                $(".progress-wrapper").removeClass('hidden');
                e.preventDefault();
                $('#loader-icon').show();
                $(this).ajaxSubmit({
                    target:   '#targetLayer',
                    dataType: 'JSON',
                    beforeSubmit: function() {
                        progress_bar.width('0%');
                    },
                    uploadProgress: function (event, position, total, percentComplete){
                        progress_bar.width(percentComplete + '%');
                        progress_bar.html('Uploading '+percentComplete + '%');
                    },
                    error: function(data) {
                        console.log(data);
                    },
                    success:function (responseText) {
                        console.log(responseText);
                        $("#applied_hair_style").attr('src',self.selected_hair_style);
                        $("#applied_hair_style").removeClass('hidden');
                        $("#applied_hair_style").draggable({ containment: ".user-uploaded-image-wrapper", scroll: false });
                        $("#user_uploaded_image").attr('src',responseText.image_path);
                        $(".uploaded-image-wrapper").removeClass('hidden');
                        $("#uploadForm").addClass('hidden');
                    },
                    resetForm: true
                });
                return false;
            }
        });
    },
    dimensionController: function() {
        var applied_hair_style = $("#applied_hair_style");
        var applied_hair_style_web_cam = $("#hair_style_web_cam");
        $("#hair_style_size_plus").click(function() {
            var hair_style_width= applied_hair_style.width();
            applied_hair_style.width(hair_style_width+10+'px');
        });
        $("#hair_style_size_minus").click(function() {
            var hair_style_width= applied_hair_style.width();
            applied_hair_style.width(hair_style_width-10+'px');
        });
        $("#hair_style_width_plus_web_cam").click(function() {
            var hair_style_width= applied_hair_style_web_cam.width();
            applied_hair_style_web_cam.width(hair_style_width+10+'px');
        });
        $("#hair_style_width_minus_web_cam").click(function() {
            var hair_style_width= applied_hair_style_web_cam.width();
            applied_hair_style_web_cam.width(hair_style_width-10+'px');
        });
    }
}
