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


      <div class="map_content_wrap">
      <ul>
        <li><a class="startPosition" href="#" data="40.748447, 14.489013999999997">Position 1</a></li>
        <li><a class="startPosition" href="#" data="tunnel">Position 2</a></li>
        <li><a class="startPosition" href="#" data="theatre">Position 3</a></li>
      </ul>
    </div>



	  <div class="overlay">
        <span class="close" style="font-size:24px; color:#fff; font-weight:bold;">X</span>
    </div>
     <div id="toggle"><input type="button" id="streetview_click" value="Toggle Street View"></input></div>

    <div id="columnModal" class="modal"><img src="assets/images/bar.jpg" width="500"/></div>
		<div id="tunnelModal" class="modal"><img src="assets/images/bank.jpg" width="500"/></div>
		<div id="theatreModal" class="modal"><img src="assets/images/panorama.jpg" width="500"/></div>
    
    <div id="ministreetview" style="width:200px; height:200px;"></div>
    <div id="map_canvas" style="width: 1024px; height: 400px"></div>
    <div id="pano" style="width: 1024px; height: 400px"></div>

    

  

    <div id="panoInfo" style="width:425px; height:240px; float:left">
      <table>
        <tr>
          <td><b>Position</b></td><td id="position_cell">&nbsp;</td>
        </tr>
        <tr>
          <td><b>POV Heading</b></td><td id="heading_cell">0</td>
        </tr>
        <tr>
          <td><b>POV Pitch</b></td><td id="pitch_cell">0.0</td>
        </tr>
        <tr>
          <td><b>Pano ID</b></td><td id="pano_cell">&nbsp;</td>
        </tr>
        <table id="links_table"></table>
      </table>
    </div>
  </body>
</html>