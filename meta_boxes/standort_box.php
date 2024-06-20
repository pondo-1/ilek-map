<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly   ?>
<!-- Search box reference https://stackoverflow.com/questions/15919227/get-latitude-longitude-as-per-address-given-for-leaflet -->

<meta charset="utf-8">
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" /> -->
<!-- <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script> -->
<style type="text/css">
/* html, body { width:100%;padding:0;margin:0; } */
/* .container { width:95%;max-width:980px;padding:1% 2%;margin:0 auto } */
#lat,
#lon {
  text-align: right
}

#map {
  width: 100%;
  height: 400px;
  padding: 0;
  margin: 0;
}

.address {
  cursor: pointer
}

.address:hover {
  color: #AA0000;
  text-decoration: underline
}

.metadata_save_here {
  width: 300px;
  border-style: solid;
  border-color: green;
  padding: 10px;
}
</style>

<div class="container" style="clear:both;">
  <div id="map" style="width:50%; float:right;"></div>
  <p>Es gibt drei Möglichkeiten die genauen geografischen Koordinaten zu ermitteln und zu speichern:</p>
<ol>
  <li>
  Ziehen sie die blaue Markierung auf der Karte auf die gewünschte Position. Klicken sie mehrfach auf das Plus-Symbol, um einen detaillierteren Kartenabschnitt zu sehen. Dadurch können sie die Markierung genauer an die richtige Stelle ziehen.
  </li>
  <li>
    Verwenden sie die Adresssuche.
  </li>
  <li>
    Geben sie die Koordinaten direkt ein.  <br>
  </li>
</ol> 
  <div class="metadata_save_here">
    <div><b>Breitengrad</b><input id="latitude" type="text" name="latitude" size=12
      value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'latitude', true ) ); ?>">
    </div>
    <div>
    <b>Längengrad</b><input id="longitude" type="text" name="longitude" size=12
      value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'longitude', true ) ); ?>">
    </div>
  </div>
  <br>

  <h3>Suchen</h3>
  <b>Koordinaten</b>
  <form>
    <input type="text" name="lat" id="lat" size=12 value="">
    <input type="text" name="lon" id="lon" size=12 value="">
    <button type="button" onclick="save_geocode_metadata();">verwenden</button>
  </form>
  <br>

  <b>Adresssuche</b>
  <div id="search">
    <input type="text" name="addr" value="" id="addr" size="58" />
    <button type="button" onclick="addr_search();">Suchen</button>
    <div id="results"></div>
  </div>
  <br>

</div>


<script type="text/javascript">
function save_geocode_metadata() {
  document.getElementById("longitude").value = document.getElementById("lon").value;
  document.getElementById("latitude").value = document.getElementById("lat").value;
}


// Sinngrund
let saved_longi = document.getElementById("longitude").value;
let saved_lati = document.getElementById("latitude").value;
var startlon;
var startlat;

if (saved_longi.length == 0) {
  startlat = 50.30195210;
startlon = 10.46935490;
} else {
  startlon = saved_longi;
 startlat = saved_lati;
}




// if ((50.15 < saved_lati && saved_lati < 50.21) && (9.54 < saved_longi && saved_longi < 9.69)) {
 // startlon = saved_longi;
 // startlat = saved_lati;
// } else {
//   console.log("here");
//   startlat = 50.17203438669854;
//   startlon = 9.639869965557914;
// }

var options = {
  center: [startlat, startlon],
  zoom: 12
}



document.getElementById('lat').value = startlat;
document.getElementById('lon').value = startlon;


var map = L.map('map', options);
var nzoom = 16;

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: 'OSM'
}).addTo(map);

var myMarker = L.marker([startlat, startlon], {
  title: "Coordinates",
  alt: "Coordinates",
  draggable: true
}).addTo(map).on('dragend', function() {
  var lat = myMarker.getLatLng().lat.toFixed(8);
  var lon = myMarker.getLatLng().lng.toFixed(8);
  //  var czoom = map.getZoom();
  //  if(czoom < 18) { nzoom = czoom + 2; }
  //  if(nzoom > 18) { nzoom = 18; }
  //  if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
  document.getElementById('lat').value = lat;
  document.getElementById('lon').value = lon;
  myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
});

function chooseAddr(lat1, lng1) {
  myMarker.closePopup();
  map.setView([lat1, lng1], 18);
  myMarker.setLatLng([lat1, lng1]);
  lat = lat1.toFixed(8);
  lon = lng1.toFixed(8);
  document.getElementById('lat').value = lat;
  document.getElementById('lon').value = lon;
  myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
}

function myFunction(arr) {
  var out = "<br />";
  var i;

  if (arr.length > 0) {
    for (i = 0; i < arr.length; i++) {
      out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " +
        arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
    }
    document.getElementById('results').innerHTML = out;
  } else {
    document.getElementById('results').innerHTML = "Sorry, no results...";
  }

}

function addr_search() {
  var inp = document.getElementById("addr");
  var xmlhttp = new XMLHttpRequest();
  var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var myArr = JSON.parse(this.responseText);
      myFunction(myArr);
    }
  };
  xmlhttp.open("GET", url, true);
  xmlhttp.send();
}


setTimeout(function() {
  map.invalidateSize();
}, 1000);
</script>


  