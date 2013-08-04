$(document).ready(function(){
	
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