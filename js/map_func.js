// This example creates a simple polygon representing the Bermuda Triangle.

function initialize() {
	
"use strict";

  var mapOptions = {
    zoom: 13,
	scrollwheel: false,
    center: new google.maps.LatLng(24.583849,-81.804886),
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };

  var bermudaTriangle;

  var map = new google.maps.Map(document.getElementById('map_canvas'),
      mapOptions);

  // Define the LatLng coordinates for the polygon's path.
  var triangleCoords = [
    new google.maps.LatLng(24.584005,-81.814671),
    new google.maps.LatLng(24.589937,-81.800766),
    new google.maps.LatLng(24.573077,-81.800594)
  ];

  // Construct the polygon.
  bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });

  bermudaTriangle.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);