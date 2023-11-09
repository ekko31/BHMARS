<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUGUST BOARDING HOUSE ROUTE</title>
     <!--leaflet css-->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
     <!--leaflet routing machine css-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div id="map" style="width:100%; height:100vh"></div>
    
</body>
 <!--leaflet js-->
 <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <!--leaflet routing machine js-->
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
 <script>
    	var markerIcon = L.icon({
			iconUrl: 'img/a (1).jpg',
			iconSize: [30, 30]
		})
    //leaflet map
    var map = L.map('map').setView([16.90519091575569, 121.61306090171387], 15);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);
//popups
var popup = L.popup()
    .setLatLng([16.90519091575569, 121.61306090171387])
    .setContent("AUGUST BOARDING HOUSE")
    .openOn(map);
//marker
 L.marker([16.90519091575569, 121.61306090171387],{icon: markerIcon}).addTo(map);
//map onclick
map.on('click', function (e) {
    console.log(e)


    L.Routing.control({ 
     waypoints: [
         L.latLng(16.90519091575569, 121.61306090171387) ,
        L.latLng(e.latlng.lat, e.latlng.lng)
     ]
}).addTo(map);
var secondMarker = L.marker([e.latlng.lat, e.latlng.lng],).addTo(map);
})
 </script>
</html>