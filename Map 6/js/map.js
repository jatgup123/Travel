var platform = new H.service.Platform({
    'apikey': window.hereCreds.JS_KEY
  });
  
  var defaultLayers = platform?.createDefaultLayers();
  //var style = new H.map.render.harp.Style('https://heremaps.github.io/maps-api-for-javascript-examples/change-harp-style-at-load/data/night.json');
  // 'https://js.api.here.com/v3/3.1/styles/omv/'
  var map = new H.Map(
    document.getElementById('mapContainer'),
    defaultLayers.vector.normal.map,
    {
      zoom: 11,
      center: {lat: 1.29088, lng: 103.85239} 
    });

var ui = H.ui.UI.createDefault(map, defaultLayers);
var mapSettings = ui.getControl('mapsettings');
mapSettings.setAllignment('top-right');

map.getViewModel().setLookAtData({
  tilt: 60
});
var provider = map.getBaseLayer().getProvider();
var style = new H.map.Style('json-to-yaml.yaml','https://js.api.here.com/v3/3.1/styles/omv/');
provider.setStyle(style);

var mapEvents = new H.mapevents.MapEvents(map);
var behaviour = new H.mapevents.Behaviour(mapEvents);

if(navigator.geolocation){
  navigator.geolocation.getCurrentPosition(
    position => {
      console.log(position);
      let browserPosition = {lat:position.coords.latitude,lng:position.coords.longitude};
      let marker = new H.Marker(browserPosition);
      
      map.addObject(marker);
    }
  );
}else{
  alert("Geolocation not supported");
}

map.addEventListener('tap', function(evt){
  if(evt.target instanceof H.map.Marker){
       var bubble = new H.ui.InfoBubble(evt.target.getGeometry(), {
             content: evt.target.getData()
       });

       ui.addBubble(bubble);
  }

  let pointer = evt.currentPointer;

  let pointerPosition = map.screenToGeo(pointer.viewportX, pointer.viewportY);
  let pointerMarker = new H.map.Marker(pointerPosition);
  pointerMarker.setData("Hi, I'm HERE!");
  map.addObject(pointerMarker);
  
});