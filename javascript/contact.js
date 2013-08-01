$(document).ready(function(){
	
	var address = '8206 Leesburg Pike ,Suite 209, Vienna, VA 22182';
	var map = $("#map_canvas").gMap({
		address: address,
		zoom: 16,
		mapType: 'SATELLITE'
	});
	map.getLatLng(address,function( latLng, success, error  ){
	  	map.addMarkers([{
			click: function(){},
			latitude: latLng.lat(),
			longitude: latLng.lng()
	  	 }]);
	});
	
});
