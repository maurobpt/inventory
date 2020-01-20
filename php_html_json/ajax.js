var hashFragment;  
  
function findHash() {  
    hashFragment = window.location.hash.replace("#!", "");  
    $.get("ajax.php?_escaped_fragment_=" + hashFragment, function(data) {  
        $("#page").html(data);  
    });  
}  
  
$(document).ready(function() {  
    if(window.location.hash=="")  
        location.replace("http://localhost/php_html_json/#!page1");  
    else  
        findHash();  
});  
  
$(window).bind('hashchange', function() {  
    findHash();  
});  
  
// for other browsers except Internet Explorer  
//if(("onhashchange") in window && !($.browser.msie)){  

//modern browsers 
    //$(window).bind('hashchange', function() {
        //var hash = window.location.hash.replace(/^#/,'');
        //do whatever you need with the hash
    //});
//}  
//else{ // for Internet Explorer  
    //var prevHash = window.location.hash;  
    //window.setInterval(function(){  
        //if(window.location.hash!=prevHash){  
            //prevHash = window.location.hash;  
            //findHash();  
        //}  
    //}, 100);  
//} 
