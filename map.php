<?php
  include 'inc/header.php';
  ?>

<head>



<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 70%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .bgimg{
        background-image: url(../images/tour-bg.png);

      }
    </style>




  </head>

  <body>

  <div style="background-image: url(images/tour-bg.png); height: 155px; width: 1420px; text-align: center">
  <br>
  <br>
  <h1>gymlocator</h1>
  
    
  </div>
  <div class="container">
  <br>
    <p>Are you looking for a Local Gym? Search for Nearby Gyms. Members enjoy 24/7 access to thousands of convenient and inviting fitness center locations worldwide. Right Click where you need too find your gym.</p>
  </div>


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC1VZOB_LA2ERJm16muUf392AvswFZlBYA"></script>
  <script>
    var map;
    var infoWindow;

    var request;
    var service;
    var markers = [];

    function initialize() {
      var center = new google.maps.LatLng(44.4650331, 26.0689667);

      map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 12
      });

      request = {
        location: center,
        radius: 8047,
        types: ['gym']
      };

      infoWindow = new google.maps.InfoWindow();

      service = new google.maps.places.PlacesService(map);

      service.nearbySearch(request, callback);

      google.maps.event.addListener(map, 'rightclick', function(event) {
        map.setCenter(event.latLng);
        clearResults(markers);

        var request = {
          location: event.latLng,
          radius: 8047,
          types: ['gym']
        };
        service.nearbySearch(request, callback);
      })
    }

    function callback(results, status) {
      if(status == google.maps.places.PlacesServiceStatus.OK){
        for (var i = 0; i < results.length; i++){
          markers.push(createMarker(results[i]));
        }
      }
    }

    function createMarker(place) {
      var placeLoc = place.geometry.location;
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                'Rating: ' + place.rating + ' out of 5 </div>');
        infoWindow.open(map, this);
      });
      return marker;
    }

    function clearResults(markers) {
      for (var m in markers) {
        markers[m].setMap(null)
      }
      markers = []
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>



</body>

  <div id="map">
  </div>





<?php
  include 'inc/footer.php';
  ?>