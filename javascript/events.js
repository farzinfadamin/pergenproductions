$(document).ready(function(){
	
	$links = $(".event-list ul a");
	$links.click(function(e){
		e.preventDefault();
		if($(this).is(".current")){
			return;
		}
		$links.filter(".current").removeClass("current");
		$this = $(this);
		$(".event-content > div:visible").fadeOut(function(){
			$($this.attr("href")).fadeIn();
		});
		$(this).addClass("current");
	});

	$($links.filter(".current").attr("href")).fadeIn();
	
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