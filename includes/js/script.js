$(document).ready(function(){
    var url = window.location.href;
    $("#menu a").each(function() {
        console.log("url : " + url);
        console.log("href : " + this.href);
        if(url == (this.href)){
            $(this).closest("li").addClass("active");}

    });
});
