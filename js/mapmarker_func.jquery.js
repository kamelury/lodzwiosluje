		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "24.555736", "longitude":"-81.782654", "icon": "img/map-marker2.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 12,
			center	: 'Florida Keys Key West',
			markers	: myMarkers
		});

