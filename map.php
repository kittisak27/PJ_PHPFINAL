<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/mapcss.css">
  </head>
  <body>
  <div class="container">
  <div id="map"></div>
    <script>
      function initMap() {
			var mapOptions = {
			  center: {lat: 7.314424, lng: 99.252029},
			  zoom: 14,
			}	
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
			var marker, info;
			$.getJSON( "json.php", function( jsonObj ) {
					//*** loop
					$.each(jsonObj, function(i, item){
						marker = new google.maps.Marker({
						   position: new google.maps.LatLng(item.LAT, item.LNG),
						   map: maps,
						   title: item.LOC_NAME
						});
					  info = new google.maps.InfoWindow();
					  google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  info.setContent(item.LOC_NAME);
						  info.open(maps, marker);
						}
					  })(marker, i));

					}); // loop

			 });
		}
    </script>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLSksYbV3mgwrUzg6nTxwG6DypTtEBi1w&callback=initMap" async defer></script>
  </body>
</html>