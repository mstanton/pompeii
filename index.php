<!doctype html>
<html>
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>test street view</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="lib/js/jquery-1.7.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
    <script type="text/javascript" src="lib/js/map.js"></script>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">	
    <script type="text/javascript" src="lib/js/load.js"></script>
	</head>
		
	<body onload="initialize()">
	  <div class="overlay">
        <span class="close" style="font-size:24px; color:#fff; font-weight:bold;">X</span>
    </div>


    <div id="columnModal" class="modal"><img src="assets/images/bar.jpg" width="500"/></div>
		<div id="tunnelModal" class="modal"><img src="assets/images/bank.jpg" width="500"/></div>
		<div id="theatreModal" class="modal"><img src="assets/images/panorama.jpg" width="500"/></div>
    
    <div class="maps_container">
      <div id="map_canvas" style="width:400px; height:300px; position:absolute; bottom:0px; right:0px; z-index:100; border:1px solid #fff;"></div>
      
      <div id="pano" style="width:1280px; height:768px;"></div>

      <div class="jumpmarker_container">
          <ul>
            <li><a href="#" id="jumpRiot" location="riot">Riot Ampitheatre</a></li>
            <li><a href="#" id="jumpBath" location="bath">Bath House</a></li>
            <li><a href="#" id="jumpDio" location="dio">House of Diomedes</a></li>
            <li><a href="#" id="jumpOne" location="theatre">Tunnel</a></li>
            <li><a href="#" id="jumpTwo" location="column">Theatre</a></li>
            <li><a href="#" id="jumpThree" location="tunnel">Column</a></li>

          </ul>
      </div>
    </div>

  </body>
</html>