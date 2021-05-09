
var circle = L.circle([-5.452728, 105.259752], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 200
}).addTo(mymap);

var polygon = L.polygon([
    [-5.439185, 105.231171],
    [-5.444654, 105.241771],
    [-5.455676, 105.235934],
    [-5.454907, 105.219755],
]).addTo(mymap);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

marker.bindPopup("Rumah").openPopup();
circle.bindPopup("Teluk Betung");
polygon.bindPopup("Lapangan");
</script>
</html>
