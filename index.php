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
    <script type="text/javascript" src="lib/js/jquery.tinyscrollbar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">
    <script type="text/javascript" src="lib/js/load.js"></script> 
  </head>
    
  <body>
    <!-- CREDITS MODAL -->
    <div id="credits" class="modal">
      <p>This exhibit is based on the design and presentation developed by the Gulf Coast Exploreum, 
      the Science Museum of Minnesota, the San Diego Natural History Museum, and Discovery Place. 
      Organized by Soprintendenza Speciale per i Beni Archeologici di Napoli e Pompei. </p>

      <p>Artifact Photo Credits:</p>
      <ul>
        <li>William Starling, photographer.</li>
        <li>Artifact descriptions: The Complete Pompeii. Thames &amp; Hudson: New York. 2007.</li>
      </ul>
    </div>

    <!-- ARTIFACT MODALS -->
    

    <!-- LOCATION MODALS -->
    <div id="dioModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Diomedes</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. 
          Donec congue lacinia dui. quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, 
          a porttitor lectus condimentum laoreet. Nunc eu. <a href="#">www.linkout.com</a>
        </p>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="bathModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Bath House</h3>
        <p>
          Bathing was an important activity for the ancient Romans. It was part of the daily regimen for men of all classes, and many women as well. 
          We think of bathing as a very private activity conducted in the home, but bathing in Rome was a communal activity, conducted for the 
          most part in public facilities that in some ways resembled modern spas or health clubs.
        </p>
      </div>
    </div>


    <div id="palestraModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Palestra Grande</h3>
        <p>
          The Large Palaestra (exercise ground) is located next to the Amphitheatre at the far southeastern corner of Pompeii. It was 
          surrounded by a colonnaded portico on three sides and measured 141 x 107 meters. The swimming pool at the center of the Palaestra 
          was continuously supplied with fresh water flowing through the public aqueduct. 
        </p>
      </div>
    </div>

    <div id="noceraModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Porta Nocera</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="venusModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>The House of Venus in a Shell</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="amptheatreModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Venus in a Shell</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>    

    <div id="menanderModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Menander</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="vesuModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Mount Vesuvius</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>    

    <div id="misenumModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Misenum</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="pompeiiOneModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Pompeii</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="pompeiiTwoModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Pompeii</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="oplontisModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Oplontis</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>

    <div id="stabeaModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Stabea</h3>
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
        </p>
      </div>
    </div>
  <!-- // END MODALS -->

 

    <div class="top"></div>
     
    <div id="overlay"></div>



    <div class="maps_container">
      <div id="pano" style="height:862px;"></div>
      <div id="map_canvas" style="width:320px; height:220px; position:absolute; bottom:3%; right:1%; z-index:300; border:1px solid #fff;"></div>
    </div> 


    <div class="sidebar">
      <div class="tab_controls">
        <div id="about-tab" class="tab"><a href="#" data="about">About</a></div>
        <div id="pliny-tab" class="tab"><a href="#" data="twitter">Pliny's Account</a></div>
        <div id="locations-tab" class="tab"><a href="#" data="locations">Locations</a></div>
        <div id="coverage-tab" class="tab"><a href="#" data="coverage">Coverage</a></div>
      </div>
      
      <!-- about tab -->
      <div class="about tab_content">
        <p>
          Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. 
          Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis 
          porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. 
          Donec congue lacinia dui. quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, 
          a porttitor lectus condimentum laoreet. Nunc eu. <a href="#">www.linkout.com</a>
        </p>
      </div>

      <!-- twitter tab -->
      <div class="twitter tab_content">
        <div class="pliny">
          <img src="assets/images/pliny.jpg" width="73" height="73" alt="Pliny the Elder"/> 
          <div class="pliny_detail">
            <p><a href="http://www.twitter.com/plinyelder">@plinyelder</a></p>
            <h3>Pliny the Elder</h3>
            <p>Roman scholar, encyclopedist, nationalist, and commander of the Roman fleet at Misenum.</p>
          </div>
          <div class="tweets_container">
            <?php echo latest_tweets(); ?>
          </div>
        </div>
      </div>

      <div id="locations_tab_container" class="locations tab_content">
        <div class="jumpmarker_container">
            <ul>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_bath" location="bath">Bath House</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_dio" location="dio">House of Diomedes</a>
              </liv>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_palestra" location="palestra">Palestra Grande</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_nocera" location="nocera">Porta Nocera</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_venus" location="venus">House of Venus in a Shell</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_ampitheatre" location="ampitheatre">Amphitheatre</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_menander" location="menander">House of Menander</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_vesu" location="vesu">Mount Vesuvius</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_misenum" location="misenum">Misenum</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_pompeiiOne" location="pompeiiOne">Pompeii 1st Location</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_pompeiiTwo" location="pompeiiTwo">Pompeii 2nd Location</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_oplontis" location="oplontis">Oplontis</a>
              </li>
              <li>
                <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                <a href="#" id="jump_stabea" location="stabea">Stabea</a>
              </li>
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
      <p><a href="#">Privacy Policy</a>  /  Conditions of Use Copyright © Denver Museum of Nature &amp; Science. All rights reserved.</p>
    </div>


        <div class="social_buttons">
        <ul>
          <li>
            <!-- twitter button -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.dayinpompeii.com" data-text="A Day In Pompeii - The Last XXIV Hours" data-via="elderpliny" data-hashtags="pompeii24">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </li>
          <li>
            <!-- facebook like button -->
            <div class="fb-like" data-href="http://www.dayinpompeii.com" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
              </script>
          </li>
        </ul>
    </div>

    
  </body>
</html>