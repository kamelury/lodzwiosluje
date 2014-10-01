// This example creates a simple polygon representing the Bermuda Triangle.

function initialize() {
	
"use strict";

  var mapOptions = {
    zoom: 20,
	scrollwheel: false,
    center: new google.maps.LatLng(51.777688, 19.463990),
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };

  var bermudaTriangle;

  var map = new google.maps.Map(document.getElementById('map_canvas'),
      mapOptions);

  var marker = ['Miejski Punkt Kultury Prexer-UŁ', 51.777688, 19.463990];

  var position = new google.maps.LatLng(marker[1], marker[2]);
  marker = new google.maps.Marker({
      position: position,
      map: map,
      title: marker[0]
  });
    
  google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
          infoWindow.setContent(infoWindowContent[i][0]);
          infoWindow.open(map, marker);
      }
  })(marker, i));
}

google.maps.event.addDomListener(window, 'load', initialize);