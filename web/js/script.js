$(document).ready(function(){
    var url = window.location.href;
    var done = 0;
    $("#menu a").each(function() {
        if(url == (this.href)){
            $(this).closest("li").addClass("active");
            done = 1;
        }
    });
    if (done == 0)
        $("li:first").addClass("active");
});
