$(document).ready(function () {

	var navBtn = $("#slide-show .navigator");
	$("#slide-show").mouseenter(function(){
		$(this).find(navBtn).fadeIn(200);
	}).mouseleave(function(){
		$(this).find(navBtn).fadeOut(200);
	});

	
	$("#slide-show").tinycarousel({ interval : true, intervaltime: 5000});
	$("#testimonial-section").tinycarousel({ interval : true, intervaltime: 5000});
	$("#portfolio-section").tinycarousel({ interval : false, intervaltime: 5000});
	
	enableFancyBox();

});

function enableFancyBox(){

	$('a[data-fancybox-group]').fancybox({
		padding 		: 0,
		openEffect		: 'elastic',
		openOpacity 	: 'true',
		helpers	: {
			title	: {
				type: 'outside'
			},
			overlay	: {
				opacity : 0.8,
				css : {
					'background' : 'rgba(0,0,0,0.8)'
				}
			},
			thumbs	: {
				width	: 80,
				height	: 50
			},
			media : {}
		}
	});
}