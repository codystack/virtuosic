<?php
include "./components/header.php";
include "./components/navbarlight.php";
?>


  <section class="py-15 py-xl-20">
    <div class="container mt-5 mt-lg-10">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1>Interested in working together? Contact!</h1>
          <p>Need support?<br>
            Have a question? Running into a problem?<br>
            We’re here to help.<br>
            Our support team is on hand to take your queries and offer prompt resolutions.</p>
          <hr class="my-4 fw-25 ml-0">
          <ul class="list-group list-group-minimal">
            <li class="list-group-item d-flex align-items-center">
              <span class="w-25 text-muted">Email</span>
              info@virtuosicagency.com
            </li>
            <li class="list-group-item d-flex align-items-center">
              <span class="w-25 text-muted">Phone</span>
              +1 (438) 700-5314
            </li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="media equal-1-1">
            <div id="map1" class="map"></div>
          </div>
          <div class="card bg-black text-white">
            <div class="card-body">
              <h5>2569 Rue Tillemont Montreal QC <span class="font-weight-bold d-block">Canada H2A 1C3</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section class="py-15 py-xl-20 border-top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <h2>Let's make something big. <span class="d-block">Together.</span></h2>
        </div>
        <div class="col-lg-8">
          <form action="#" class="row g-3">
            <div class="col-md-12">
              <label for="yourName" class="form-label">Full Name</label>
              <input type="text" class="form-control" required name="fullName" placeholder="Full Name">
            </div>
            <div class="col-md-6">
              <label for="yourEmail" class="form-label">Email</label>
              <input type="email" class="form-control" required name="email" placeholder="Email Address">
            </div>
            <div class="col-md-6">
              <label for="yourPhone" class="form-label">Phone</label>
              <input type="tel" class="form-control" required name="phone" placeholder="Phone Number">
            </div>
            <div class="col-md-12">
              <label for="yourMessage" class="form-label">Message</label>
              <textarea class="form-control" required name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="col-md-8">
              <div class="form-check">
                <input class="form-check-input" required type="checkbox" id="gridCheck">
                <label class="form-check-label text-muted small" for="gridCheck">
                  I accept the <a href="" class="underline">Terms
                    & Conditions</a> and acknowledge that my information will be used in accordance with Privacy
                  Policy.
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <a href="" class="btn btn-block btn-black">Get in touch</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


    <script>
        function initMap() {
        var latlng = new google.maps.LatLng(45.558658656051186, -73.61062717116481);

        var myOptions = {
            zoom: 16,
            center: latlng,
            disableDefaultUI: true,
            styles: [
            {
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#f5f5f5"
                }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                {
                    "visibility": "off"
                }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#616161"
                }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                {
                    "color": "#f5f5f5"
                }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#bdbdbd"
                }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#eeeeee"
                }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#757575"
                }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#e5e5e5"
                }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#9e9e9e"
                }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#ffffff"
                }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#757575"
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#dadada"
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#616161"
                }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#9e9e9e"
                }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#e5e5e5"
                }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#eeeeee"
                }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#c9c9c9"
                }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "color": "#9e9e9e"
                }
                ]
            }
            ]
        };

        var map = new google.maps.Map(document.getElementById("map1"), myOptions);

        map.panBy(-100, -40);

        var myMarker = new google.maps.Marker(
            {
            position: latlng,
            map: map,
            icon: 'assets/images/svg/pin.svg'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAME5wJgLdn1aQSxC7-iWxJ3isuveK9Rv4&amp;callback=initMap" async defer></script>

<?php include "./components/footer.php";?>