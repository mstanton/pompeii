<?php require(dirname(__FILE__)."/lib/php/tweets.php"); ?>
<?php require(dirname(__FILE__)."/lib/php/storify.php"); ?>
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
	  <div id="overlay"></div>

      <div id="pano" style="height:75%;"></div>

      <div id="map_canvas" style="width:480px; height:300px; position:absolute; bottom:0px; right:0px; z-index:300; border:1px solid #fff;"></div>
      

    <div class="footer">
      <div class="tab_controls">
                <div class="tab"><a href="#" data="twitter">Pliny's Account</a></div>
                <div class="tab"><a href="#" data="locations">Locations</a></div>
                <div class="tab"><a href="#" data="coverage">Coverage</a></div>
                <div class="tab"><a href="#" data="about">About This Site</a></div>
      </div>
      
      <!-- twitter tab -->
      <div class="twitter tab_content" style="overflow:hidden; overflow-y: scroll; ">
        <div class="pliny" style="height:580px; ">
          <p>avatar image</p>
          <a href="https://twitter.com/elderpliny" class="twitter-follow-button" data-show-count="false">Follow @elderpliny</a>
          <!-- official twitter follow button -->
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          <p>@elderpliny</p>
          <h3>Pliny the Elder</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut aliquam mi. Fusce enim tortor, imperdiet ut sagittis vitae, 
            blandit sit amet dolor. Pellentesque eu diam velit. Vestibulum ut laoreet arcu. Curabitur tempus ultrices lorem et egestas. Praesent 
            libero nulla, dignissim eu vehicula at, dapibus non orci. Nunc feugiat sodales eros, sed rhoncus odio hendrerit sed. Suspendisse 
            elementum augue sit amet enim congue eu tincidunt risus dictum. Donec ut leo tortor. Curabitur pretium venenatis elit viverra euismod. 
            </p>
            <?php echo latest_tweets(); ?>
        </div>
      </div>



      <div class="locations tab_content">
        <div class="buttons">
          <a href="#" id="prev" style="background:#000; color:#fff;">prev</a>
          <a href="#" id="next" style="background:#0f0; color:#fff;">next</a>
        </div>
      
        <div id="carousel" class="jumpmarker_container">
          <div id="slides"> 
            <ul>
              <li><a href="#" id="jump_riot" location="riot">Riot Ampitheatre</a></li>
              <li><a href="#" id="jump_bath" location="bath">Bath House</a></li>
              <li><a href="#" id="jump_dio" location="dio">House of Diomedes</a></liv>
              <li><a href="#" id="jump_tunnel" location="tunnel">Tunnel</a></li>
              <li><a href="#" id="jump_theatre" location="theatre">Theatre</a></li>
              <li><a href="#" id="jump_column" location="column">Column</a></li>
              <li>SLIDE 7</li>
              <li>SLIDE 8</li>
              <li>SLIDE 9</li>
              <li>SLIDE 10</li>
              <li>SLIDE 11</li>
              <li>SLIDE 12</li>
            </ul>
          </div>
        </div>
        </div>





      <!-- coverage/storify tab -->
      <div class="coverage tab_content">
        <?php echo getStory(); ?>
      </div>

      <!-- about this site -->
      <div class="about tab_content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut aliquam mi. Fusce enim tortor, imperdiet ut sagittis vitae, blandit sit amet dolor. Pellentesque eu diam velit. Vestibulum ut laoreet arcu. Curabitur tempus ultrices lorem et egestas. Praesent libero nulla, dignissim eu vehicula at, dapibus non orci. Nunc feugiat sodales eros, sed rhoncus odio hendrerit sed. Suspendisse elementum augue sit amet enim congue eu tincidunt risus dictum. Donec ut leo tortor. Curabitur pretium venenatis elit viverra euismod. Nullam convallis eros nec felis malesuada vel iaculis arcu sagittis. Mauris rutrum, augue sit amet rutrum vulputate, quam lorem interdum dolor, vel auctor nunc lectus ut est. Ut bibendum, purus sit amet sagittis accumsan, risus libero ultricies odio, sed pretium sem nisl non nunc. Curabitur vitae nunc ut neque euismod bibendum.</p>
      </div>

    </div>

    </body>
    </html>