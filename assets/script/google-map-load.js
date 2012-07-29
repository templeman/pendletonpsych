function initialize() {
	var latLng = new google.maps.LatLng(45.673432, -118.787103);
	var myOptions = {
		center: latLng,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
			myOptions);
	var marker = new google.maps.Marker({
		position: latLng,
		map: map,
		clickable: false,
		title: "Psychological Services of Pendleton",
		icon: '/image/marker.png'
	});
}
