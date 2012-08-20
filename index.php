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
	  <div id="overlay">
        <span class="close" style="font-size:24px; color:#fff; font-weight:bold;">X</span>
    </div>
    <div class="header">HEADER</div>
    <div class="sidebar">
      <div class="tab_controls">
        <div class="tab"><a href="#" data="about">About</a></div>
        <div class="tab"><a href="#" data="twitter">Pliny's Account</a></div>
        <div class="tab"><a href="#" data="social">Social Feed</a></div>
      </div>
      <div class="about tab_content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut aliquam mi. Fusce enim tortor, imperdiet ut sagittis vitae, blandit sit amet dolor. Pellentesque eu diam velit. Vestibulum ut laoreet arcu. Curabitur tempus ultrices lorem et egestas. Praesent libero nulla, dignissim eu vehicula at, dapibus non orci. Nunc feugiat sodales eros, sed rhoncus odio hendrerit sed. Suspendisse elementum augue sit amet enim congue eu tincidunt risus dictum. Donec ut leo tortor. Curabitur pretium venenatis elit viverra euismod. Nullam convallis eros nec felis malesuada vel iaculis arcu sagittis. Mauris rutrum, augue sit amet rutrum vulputate, quam lorem interdum dolor, vel auctor nunc lectus ut est. Ut bibendum, purus sit amet sagittis accumsan, risus libero ultricies odio, sed pretium sem nisl non nunc. Curabitur vitae nunc ut neque euismod bibendum.</p>
      </div>
      <div class="twitter tab_content">
        <div class="pliny">
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
        </div>
        <?php echo latest_tweets(); ?>
      </div>
      <div class="social tab_content">
        <?php echo getStory(); ?>
      </div>
    </div>

    <div id="columnModal" class="modal"><img src="assets/images/bar.jpg" width="500"/></div>
		<div id="tunnelModal" class="modal"><img src="assets/images/bank.jpg" width="500"/></div>
		<div id="theatreModal" class="modal"><img src="assets/images/panorama.jpg" width="500"/></div>


    <div id="tweetModalOne" class="tweet_modal">
        <a href="#" id="tweetClose">CLOSE</a>
        <p>Tweet text goes here.</p>
        <p>
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" count="false" text="Tweet text goes here...">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </p>
        <div>
          <img src="assets/images/bar.jpg" width="300"/>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut aliquam mi. Fusce enim tortor, imperdiet ut sagittis vitae, 
          blandit sit amet dolor. Pellentesque eu diam velit. Vestibulum ut laoreet arcu. Curabitur tempus ultrices lorem et egestas. 
          Praesent libero nulla, dignissim eu vehicula at, dapibus non orci. Nunc feugiat sodales eros, sed rhoncus odio hendrerit sed. 
          Suspendisse elementum augue sit amet enim congue eu tincidunt risus dictum. Donec ut leo tortor. Curabitur pretium venenatis elit 
          viverra euismod. Nullam convallis eros nec felis malesuada vel iaculis arcu sagittis. Mauris rutrum, augue sit amet rutrum vulputate, 
          quam lorem interdum dolor, vel auctor nunc lectus ut est. Ut bibendum, purus sit amet sagittis accumsan, risus libero ultricies odio, 
          sed pretium sem nisl non nunc. Curabitur vitae nunc ut neque euismod bibendum.</p>
    </div>
    <div id="tweetModalTwo" class="tweet_modal"></div>
    <div id="tweetModalThree" class="tweet_modal"></div>
    <div id="tweetModalFour" class="tweet_modal"></div>
    <div id="tweetModalFive" class="tweet_modal"></div>
    
    <div class="maps_container">
      <div id="map_canvas" style="width:280px; height:280px; position:absolute; bottom:0px; right:0px; z-index:300; border:1px solid #fff;"></div>
      
      <div id="pano" style="width:1000px; height:768px;"></div>
      <div class="jumpmarker_wrap">
      <div class="jumpmarker_container">
          <ul>
            <div><a href="#" id="jumpRiot" location="riot">Riot Ampitheatre</a></div>
            <div><a href="#" id="jumpBath" location="bath">Bath House</a></div>
            <div><a href="#" id="jumpDio" location="dio">House of Diomedes</a></div>
            <div><a href="#" id="jumpOne" location="theatre">Tunnel</a></div>
            <div><a href="#" id="jumpTwo" location="column">Theatre</a></div>
            <!--<div><a href="#" id="jumpThree" location="tunnel">Column</a></div>-->          
          </ul>
      </div>
      </div>
    </div>
    <div class="footer">
      FOOTER
    </div>
  </body>
</html>