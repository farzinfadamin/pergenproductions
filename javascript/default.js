$(function(){

   $("#main-menu li:has(ul)").hover(function(){
    
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
    
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    
    });
    
    $("#main-menu li ul li:has(ul)").find("a:first").addClass('has-arrow');

});