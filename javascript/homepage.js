$(window).load(function(){

	$("#slide-show").carousel({
		prev: '.prev-button',
		next:  '.next-button',
		limit: 1,
		time: 500,
		loop: true
	});

})