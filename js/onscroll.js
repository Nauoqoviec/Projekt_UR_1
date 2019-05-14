$(function() {
    var header = $("header");
    var img = $("#logo")
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 1) {
            header.attr("style","background: rgba(0,0,0,0.9); position: fixed; top: 0px; width: 100%; height: 50px;");
            img.attr("style","height: 45px;")
        } else {
            header.removeAttr("style");
            img.removeAttr("style");
        }
    });
});