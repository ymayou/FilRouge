$(document).ready(function(){
    var url = window.location.href;
    $("#menu a").each(function() {
        if(url == (this.href)) {
            $(this).closest("li").addClass("active");
        }
    });
});
