AOS.init();


      var map = L.map('map').setView([-6.588197,106.8021882], 14);
    
      var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
      }).addTo(map);
    
        var LeafIcon = L.Icon.extend({
        options: {
          iconSize:     [40, 40],
          shadowSize:   [50, 64],
          iconAnchor:   [22, 94],
          shadowAnchor: [4, 62],
          popupAnchor:  [-3, -76]
        }
      });
    
      var cctvIcon = new LeafIcon({iconUrl: 'img/cctv.png'});
    
        var marker = L.marker([-6.581105018888809, 106.79690372857164], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.59035466983971, 106.78778571929172], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.596097448036554, 106.77942213351346], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.595540727281899, 106.7875108922062], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.595855778955543, 106.78962445995967], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.596163160776711, 106.79080179219879], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.607070968301045, 106.79180858234722], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.602709337371062, 106.79650943634199], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.602967153414715, 106.79899830936242], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.601446986537417, 106.80508436762699], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.600477134681313, 106.80515946947804], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.604142595091997, 106.80748743624095], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.607314546752247, 106.80945883014614], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
        var marker = L.marker([-6.627568185255654, 106.81025329752775], {icon: cctvIcon}).bindPopup('I am a green leaf.').addTo(map);
    
    
      map.on('click', onMapClick);
    