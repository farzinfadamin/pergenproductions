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
	
});
