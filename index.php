<?php require(dirname(__FILE__)."/lib/php/tweets.php"); ?>
<?php require(dirname(__FILE__)."/lib/php/storify.php"); ?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>A Day In Pompeii - The Last XXIV Hours</title>
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
    
  <body>
    <div class="top"></div>
     
    <div id="overlay"></div>

    <div class="maps_container">
      <div id="pano" style="height:862px;"></div>
      <div id="map_canvas" style="width:320px; height:220px; position:absolute; bottom:3%; right:2%; z-index:300; border:1px solid #fff;"></div>
    </div> 


      <div class="sidebar">
      <div class="tab_controls">
        <div class="tab"><a href="#" data="twitter">Pliny's Account</a></div>
        <div class="tab"><a href="#" data="locations">Locations</a></div>
        <div class="tab"><a href="#" data="coverage">Coverage</a></div>
      </div>
      
      <!-- twitter tab -->
      <div class="twitter tab_content" style="overflow:hidden; overflow-y: scroll; ">
        <div class="pliny">
          <img src="assets/images/pliny.jpg" width="" height="" alt="Pliny the Elder"/>
          
          <div class="pliny_detail">
          <p><a href="#">@elderpliny</a></p>
          <h3>Pliny the Elder</h3>
          <p>Roman scholar, encyclopedist, nationalist, and commander of the Roman fleet at Misenum.</p>
        </div>
            <div class="tweets_container">
              <?php echo latest_tweets(); ?>
            </div>
        </div>
      </div>


      <div class="locations tab_content">

      
        <div class="jumpmarker_container">

            <ul>
              <li><a href="#" id="jump_bath" location="bath">Bath House</a></li>
              <li><a href="#" id="jump_dio" location="dio">House of Diomedes</a></liv>
              <li><a href="#" id="jump_palestra" location="palestra">Palestra Grande</a></li>
              <li><a href="#" id="jump_nocera" location="nocera">Porta Nocera</a></li>
              <li><a href="#" id="jump_venus" location="venus">The House of Venus in a Shell</li>
              <li><a href="#" id="jump_ampitheatre" location="ampitheatre">Amphitheatre</li>
              <li><a href="#" id="jump_menander" location="menander">House of Menander</li>
              <li><a href="#" id="jump_vesu" location="vesu">Mount Vesuvius</li>
              <li><a href="#" id="jump_misenum" location="misenum">Misenum</li>
              <li><a href="#" id="jump_pompeiiOne" location="pompeiiOne">Pompeii 1st Location</li>
              <li><a href="#" id="jump_pompeiiTwo" location="pompeiiTwo">Pompeii 2nd Location</li>
              <li><a href="#" id="jump_oplontis" location="oplontis">Oplontis</li>
              <li><a href="#" id="jump_stabea" location="stabea">Stabea</li>
            </ul>

        </div>
        </div>





        <!-- coverage/storify tab -->
        <div class="coverage tab_content">
          <?php echo getStory(); ?>
        </div>

        <div>
    </div>
    <div class="footer">
      <img src="assets/images/logo.jpg" width="148" height="45" alt="Denver Museum of Nature & Science"/>
     <p><a href="#">Privacy Policy</a>  /  Conditions of Use Copyright © Denver Museum of Nature &amp; Science. All rights reserved.
<a href="http://www.VisitDenver.com">www.VisitDenver.com</a> is the official source for destination and visitor information.</p>
    </div>
    </body>
    </html>