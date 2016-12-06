 <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tarheel Topics</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

 

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
-->
 <link rel="stylesheet" href="styles.css">

</head>



<body>
    
    <A NAME="top">
     <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/NC2Clr_blu.png" width="5%" height="auto" style="display: inline-block; float:left; padding-right: 5px; padding-top: 5px;" >
          <a class="navbar-brand" href="#">Tarheel Topics </a>
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <li><a href="#twitter">Twitter</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#video">Video</a></li>
            <li><a href="#news">News</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            
            <img src="img/mitch.png" width="100%" height= "auto">
        </div>
        <div class="col-sm-7 welcome-text">
            <h1>CAROLINA FOOTBALL</h1>
            <p>Tarheel Topics makes it easy to check in with Tarheel football and get up to date news from the team,
It is a great way to see what current UNC football players are doing along with exploring videos 
and tweets from the team. The map tool lets you see where the team played this season and the 
results from the game.</p>
        </div>
    </div>
</div>

<div class="col-md-12 hidden-xs argyle">
<img  src="img/9_SlvBlu.png" width="33%" height="auto"><img src="img/9_SlvBlu.png" width="33%" height="auto"><img src="img/9_SlvBlu.png" width="33%" height="auto">
</div>
<div class="col-xs-12 hidden-sm hidden-md hidden-lg argyle">
<img  src="img/9_SlvBlu.png" width="100%" height="auto">
</div>

<div class="container">
    <div class="row">
        
    <A NAME="twitter">              
<?php include 'twitter.php';?>

<A NAME="map">
<div class="container">
  <div class="row">
    <div class="col-md-12 maptitle">
      <h2>2016 Season Games</h2>
    </div>
    <div class="col-md-12 maptext">
        <p>Use the map to the right to select a location where the Tarheels played a game this season. Facts about the game will appear on click.</p>
     </div>
      <div id="map" class="col-md-12" width="100%" height="auto"></div>
      
    </div>
  </div>

<A NAME="video">
<div class="container">
  <div class="row">
    <div class="col-md-12 video">
      <h2>UNC Football Video Playlist</h2>
      <p>Click the icon in the upper left corner to select a video from the season.</p>
    </div>
    <div class="col-md-6 video">
      <h2>2016</h2>
       <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL-ZfOcjA86neeHlaZHoSeUhBmMaTQC7dd" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-md-6 video">
      <h2>2015</h2>
       <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL-ZfOcjA86ncN32cuEOPzIKnmooZU0fHh" frameborder="0" allowfullscreen></iframe>
    </div>
   
  </div>
</div>

<A NAME="news">
<div class="container">
  <div class="row">
    <div class="col-md-12 maptitle">
      <h2>Football News</h2>
    </div>
     
      <div class="col-md-12 nytimestext">
        <p>Keep up to date with the New York Times' news articles about Football.</p>
    </div>
       <div id="top-stories-results" class="col-md-12" style="overflow:scroll; height:700px;"></div>
  </div>
</div>

  <footer class="footer">
      <div class="container-fluid">
        <a href="#top">Back to Top</a>
      </div>
    </footer>


    <script>

      function initMap() {
        console.log("initMap()");
        var uluru = {lat: 34.7313525, lng: -84.374927};
        var bounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru,
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
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#9dd6ff"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#9dd6ff"
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
        });
    

   // Multiple Markers
    var markers = [
        ['UNC Chapel Hill', 35.9069337,-79.0500776],
        ['Illinois', 40.0993268,-88.2381456],
        ['FSU', 30.4381738,-84.3065919],
        ['Miami', 25.9579713,-80.2410491],
        ['UVA', 38.0311843,-78.5159784],
        ['Duke', 35.9984059, -78.9443699]
    ];
                         
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>UNC Chapel Hill Home Games</h3>' +
        '<h4>vs. Georgia</h4><p>Final Score: 33-24</p><p>Carolina Loss</p>'  +  '<h4>vs. James Madison</h4><p>Final Score: 28-56</p><p>Carolina Win</p>' + '<h4>vs. Pittsburgh</h4><p>Final Score: 36-37</p><p>Carolina Win</p>'+'<h4>vs. Virgina Tech</h4><p>Final Score: 34-3</p><p>Carolina Loss</p>' + '<h4>vs. Georgia Tech</h4><p>Final Score: 20-48</p><p>Carolina Win</p>'+'<h4>vs. Citadel</h4><p>Final Score: 7-41</p><p>Carolina Win</p>'+'<h4>vs. North Carolina State</h4><p>Final Score: 28-21</p><p>Carolina Loss</p>'+'</div>'],
        ['<div class="info_content">' +
        '<h3>Fighting Illini at Illinois</h3>' +
        '<p>Final Score: 48-23</p><p>Carolina Win</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Seminoles at Florida State</h3>' +
        '<p>Final Score: 37-35</p><p>Carolina Win</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Hurricanes at Miami</h3>' +
        '<p>Final Score: 20-13</p><p>Carolina Win</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Cavaliers at Virgina</h3>' +
        '<p>Final Score: 35-14</p><p>Carolina Win</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Blue Devils at Duke</h3>' +
        '<p>Final Score: 27-28</p><p>Carolina Loss</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    var image = { url: 'img/unclogo.png',
    size: new google.maps.Size(50, 50)
    };
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon: image
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

       
    }
      }
      console.log("end of initMap()");
    </script>


<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcN8_MS7wr1SncdzsnStdiutBOq-3frAU&callback=initMap"
    async defer></script>
  

   
</body>
</html>