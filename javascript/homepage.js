$(document).ready(function () {

	var navBtn = $("#slide-show .navigator");
	$("#slide-show").mouseenter(function(){
		$(this).find(navBtn).fadeIn(200);
	}).mouseleave(function(){
		$(this).find(navBtn).fadeOut(200);
	});

	
	$("#slide-show").tinycarousel({ interval : true, intervaltime: 5000});

});