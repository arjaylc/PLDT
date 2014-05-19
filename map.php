<!DOCTYPE html>
<html>
  <head>
        <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">
    <title>PLDT EGMM</title>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />    

  
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjkXNb5Vc15cPq8otOGFqzqlM6lkgT8nc&sensor=TRUE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(14.5688522, 121.0711736),
          zoom: 15
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </head>
  <body>
    <div class="container-fluid">
       <div class="row-fluid">
        <div class="span2">
          <a href="index.php"><img src="assets/pldt logo.png" height="80px"/></a>
          <br> <h2  style="color: black; font: impact;"> EGMM Node Map </h2>
        </div>
        <div class="span10">
          <a href="index.php"><img src="assets/pldt logo.png" height="80px"/></a>
            <br> <h2  style="color: black; font: impact;"> EGMM Node Map </h2>
        </div>
      </div>
    </div>
    <div id="map-canvas" style="width: 100%; height: 70.5%"/>
  </body>
</html>