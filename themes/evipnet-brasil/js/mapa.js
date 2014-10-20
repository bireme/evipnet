var map;
var infowindow = [];
 
function initialize() {
    var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
 
    var options = {
        zoom: 5,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("mapa"), options);
}
 
initialize();

function carregarPontos() {
 	
 	points = []
 	$.getJSON("?mode=json", function(data){

 		
 		$.each(data, function(index, ponto){

 			marker = new google.maps.Marker({
			    position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
			    title: ponto.name,
			    map: map,
			    name: ponto.ID,
			});

 			console.log(ponto);
			
			var infowindow = new google.maps.InfoWindow(), marker;
			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
			    return function() {
			        infowindow.setContent('<div style=" height:30px;"><a href="'+ponto.permalink+'">'+ponto.name+'</a></div>');
			        infowindow.open(map, marker);
			    }
			})(marker))
 		}) 
 	});
 	
 
}
carregarPontos();