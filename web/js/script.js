$(document).ready(function(){
    var url = window.location.href;
    var done = 0;
    $("nav a").each(function() {
        if(url == (this.href)){
            $(this).closest("li").addClass("active");
            done = 1;
        }
    });
    if (done == 0) {
        if (url.indexOf("/patho/") != -1)
            $("nav li").eq(2).addClass("active");
        else
            $("li:first").addClass("active");
    }

});
