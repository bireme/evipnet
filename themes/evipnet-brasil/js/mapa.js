var map;
var points = [];
var infoWindows = [];

initialize();
 
function initialize() {
    var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
 
    var options = {
        zoom: 4,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("mapa"), options);

    carregarPontos();
} 

function carregarPontos() {
 	
 	$.getJSON("?mode=json", function(data){
 		
 		$.each(data, function(index, ponto){

 			marker = new google.maps.Marker({
			    position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
			    title: ponto.name,
			    map: map,
			    name: ponto.ID,
			});

            points.push(marker);
 			console.log(ponto);
			var infowindow = new google.maps.InfoWindow();
			infoWindows.push(infowindow);

			google.maps.event.addListener(marker, 'mouseover', (function(marker) {
			    return function() {
			        infowindow.setContent('<div style=" height:30px;"><a href="'+ponto.permalink+'">'+ponto.name+'</a></div>');
			        infowindow.open(map, marker);
			    }
			})(marker));

 		});

        for (var i=0;i<points.length;i++) {
            (function(i) {
                google.maps.event.addListener(points[i], 'mouseover', function() {
                    closeInfoWindows(i);
                });
            })(i);
        }
 	});
 
}

function closeInfoWindows(item) {
    for (var i=0;i<infoWindows.length;i++) {
        if (i != item) infoWindows[i].close();
    }
}