var map;
$(document).ready(function(){
	map = new GMaps({
		div: '#map_container',
		lat: 43.173135,
        lng: 10.995667,
        zoom: 8
	});
	map.addMarker({
		lat: 43.776548,
		lng: 11.247202,
		title: 'Firenze',
		icon: '/bundles/zobaholidaysmanager/images/cramschool-combined.png',
		details: {
			database_id: 42,
			author: 'HPNeo'
		},
		click: function(e){
			if(console.log)
				console.log(e);
			alert('You clicked in this marker');
		}
	});
	map.addMarker({
		lat: 43.725336,
		lng: 10.402139,
		title: 'Pisa',
		infoWindow: {
			content: '<p>Hai cliccato su Pisa</p>'
		}
	});
});