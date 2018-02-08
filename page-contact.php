<?php

/* 
* Template Name: Contact Page
*/

?>
<?php get_header('white'); ?>
<section class="page-hero-section">
		<div class="columns white">
			<div class="column is-half">
				<header class="page-header animate-in-half-sec">
					<h1>Come on, come on. Let's work together.</h1>
				</header>
				<section class="page-header-text animate-in-one-sec">
					<p>
						We're always up for new projects big or small. Got a project in the pipeline that you're crazy excited about? Quit holding out on us, let us at it!
					</p>
				</section>
			</div>
		</div><!-- end columns -->
	</section>

	<div class="contact-page-wrapper">
		<section class="contact-cards">
			<h5 class="section-title black">Who you gonna call?</h5>
			<div class="columns">
				<div class="column">
					<article class="contact-card">
						<h5>General Enquiries</h5>
						<h2>Sophie Smit</h2>
						<p><a class="pretty-link" href="mailto:sophie@innuendodigital.com.au">sophie@innuendodigital.com.au</a></p>
						<p>+61 2 9151 4879</p>
					</article>
				</div>
				<div class="column">
					<article class="contact-card">
						<h5>New Business</h5>
						<h2>James Gourley</h2>
						<p><a class="pretty-link" href="mailto:james@innuendodigital.com.au">james@innuendodigital.com.au</a></p>
						<p>+61 2 9151 4879</p>
					</article>
				</div>
				<div class="column">
					<article class="contact-card">
						<h5>Technical enquiries</h5>
						<h2>Gabe Grieve</h2>
						<p><a class="pretty-link" href="mailto:gabe@innuendodigital.com.au">gabe@innuendodigital.com.au</a></p>
						<p>+61 2 9151 4879</p>
					</article>
				</div>
			</div>
		</section>
	</div>
	<div id="map" style="width: 100%; height: 600px;"></div>
    <script>
      function initMap() {
        var innuendo = {lat: -33.8864134, lng: 151.2087046};
        var map = new google.maps.Map(document.getElementById('map'), {
          scrollwheel: false,
          center: innuendo,
          zoom: 15,
          styles: [
					  {
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#212121"
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
					        "color": "#757575"
					      }
					    ]
					  },
					  {
					    "elementType": "labels.text.stroke",
					    "stylers": [
					      {
					        "color": "#212121"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#757575"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative.country",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#9e9e9e"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative.land_parcel",
					    "stylers": [
					      {
					        "visibility": "off"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative.land_parcel",
					    "elementType": "labels",
					    "stylers": [
					      {
					        "visibility": "off"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative.locality",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#bdbdbd"
					      }
					    ]
					  },
					  {
					    "featureType": "poi",
					    "elementType": "labels.text",
					    "stylers": [
					      {
					        "visibility": "off"
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
					        "color": "#181818"
					      }
					    ]
					  },
					  {
					    "featureType": "poi.park",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#616161"
					      }
					    ]
					  },
					  {
					    "featureType": "poi.park",
					    "elementType": "labels.text.stroke",
					    "stylers": [
					      {
					        "color": "#1b1b1b"
					      }
					    ]
					  },
					  {
					    "featureType": "road",
					    "elementType": "geometry.fill",
					    "stylers": [
					      {
					        "color": "#2c2c2c"
					      }
					    ]
					  },
					  {
					    "featureType": "road",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#8a8a8a"
					      }
					    ]
					  },
					  {
					    "featureType": "road.arterial",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#373737"
					      }
					    ]
					  },
					  {
					    "featureType": "road.highway",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#3c3c3c"
					      }
					    ]
					  },
					  {
					    "featureType": "road.highway.controlled_access",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#4e4e4e"
					      }
					    ]
					  },
					  {
					    "featureType": "road.local",
					    "elementType": "labels",
					    "stylers": [
					      {
					        "visibility": "off"
					      }
					    ]
					  },
					  {
					    "featureType": "road.local",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#616161"
					      }
					    ]
					  },
					  {
					    "featureType": "transit",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#757575"
					      }
					    ]
					  },
					  {
					    "featureType": "water",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#000000"
					      }
					    ]
					  },
					  {
					    "featureType": "water",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#3d3d3d"
					      }
					    ]
					  }
					]
          
        });
        var marker = new google.maps.Marker({
          position: innuendo,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSf7CJOsXTT7pSKu_we-Ospq9Zcm2m0xA&callback=initMap">
    </script>
<?php get_footer(); ?>