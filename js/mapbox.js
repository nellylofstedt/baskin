window.onload = start;

function start() {
    mapboxgl.accessToken =
    'pk.eyJ1IjoibmVsbHlsb2ZzdGVkdCIsImEiOiJjanBheTFzcHUyZGQyM2tweG9yeHI5Y21qIn0.QaDv8olZzwlTZxD1itq7Pg';
    var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
    center: [18.050028, 59.337097], // starting position [lng, lat]
    zoom: 14 // starting zoom
});
}