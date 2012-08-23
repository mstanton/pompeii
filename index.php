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
        <script type="text/javascript" src="lib/js/load.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">

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


    <!-- TWEET MODALS -->
    

    <!-- LOCATION MODALS -->
    <div id="dioModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Diomedes</h3>
        <p>
          Inhabitants of Pompeii buried their dead outside the city walls, often in tombs lining the roads leading away from the city. 
          The House of Diomedes is located along the Via dei Sepolcri (Street of Tombs), outside the Herculaneum Gate. This luxurious, 
          two-story villa had a private bath suite, swimming pool, and sea views. Twenty bodies, including those of richly bejeweled women 
          and children, where discovered in the villa when it was excavated in the early 1770s. 
        </p>
      </div>
    </div>

    <div id="bathModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Bath House</h3>
        <p>
          Bathing was an important activity for the ancient Romans. It was part of the daily regimen for men of all classes, and many women 
          as well. We think of bathing as a very private activity conducted in the home, but bathing in Rome was a communal activity, 
          conducted for the most part in public facilities that in some ways resembled modern spas or health clubs.
        </p>
      </div>
    </div>


    <div id="palestraModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Palestra Grande</h3>
        <p>
          The Large Palaestra (exercise ground) is located next to the Amphitheatre at the far southeastern corner of Pompeii. It was surrounded 
          by a colonnaded portico on three sides and measured 141 x 107 meters. The swimming pool at the center of the Palaestra was continuously 
          supplied with fresh water flowing through the public aqueduct.
        </p>
      </div>
    </div>

    <div id="noceraModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Porta Nocera</h3>
        <p>
          Porta Nocera is a cemetery named after the Nucerian gate leading out of Pompeii near the southeastern corner of the city. All 
          of Pompeii’s cemeteries are located outside the city walls, as Roman law forbade burial within the city. Cemeteries were often 
          bustling public places deliberately placed alongside important roads to and from the city, such that the deceased would be 
          remembered by many for a long time.
        </p>
      </div>
    </div>

    <div id="venusModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>The House of Venus in a Shell</h3>
        <p>
          This house is situated on the Via dell’Abbondanza, the main street of Pompeii. The central panel of a massive mural at the south 
          end of the peristyle (colonnaded porch) shows the Venus, the goddess of love and nature, lying in a shell, surrounded by two 
          dolphin-riding cupids. More statuettes and paintings of Venus have been found in the houses and streets of Pompeii than any 
          other deity. This demonstrates the popular status of Venus as patroness goddess of the town.
        </p>
      </div>
    </div>

    <div id="amptheatreModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Amphitheatre</h3>
        <p>
          The Amphitheatre at Pompeii is the oldest known permanent amphitheatre in Italy, having been constructed shortly after the 
          foundation of the Roman colony at Pompeii, probably around 70 B.C. Built at private expense by Gaius Quinctius Valgus and 
          Marcus Porcius, it was dedicated to the inhabitants of Pompeii and served as a symbol of the new political order. In A.D. 59, a 
          deadly riot pitting inhabitants of Pompeii against those of neighboring Nuceria led Roman authorities to impose a decade-long ban 
          on gladiatorial games in the amphitheatre.
        </p>
      </div>
    </div>    

    <div id="menanderModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Menander</h3>
        <p>
          The estate is referred to as the “House of Menander” because there is a well-preserved fresco of the ancient poet Menander in a 
          niche in the peristyle (columned porch) surrounding a garden. Almost as big as a whole city block, the wall-paintings of the 
          house are predominantly Fourth Style, many of them dating to the period after the earthquake that destroyed much of Pompeii 
          in A.D. 62.
        </p>
      </div>
    </div>

    <div id="vesuModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Mount Vesuvius August 24 A.D. 79</h3>
        <p>
          Mount Vesuvius is the only active volcano on the European continent and was formed as a result of the collision of two 
          <a href="http://en.wikipedia.org/wiki/Tectonic_plate">tectonic plates</a>, the <a href="http://en.wikipedia.org/wiki/African_Plate">African</a> 
          and the <a href="http://en.wikipedia.org/wiki/Eurasian_Plate">Eurasian</a>. Tectonic forces are pushing the African plate under the European plate, causing extreme 
          pressures and temperatures to build deep below the surface. These forces build up through 
          time and occasionally get released via earthquakes or volcanic eruptions. 
        </p>
      </div>
    </div>    

    <div id="misenumModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Misenum</h3>
        <p>
          Misenum, located almost due west of Pompeii across the Bay of Naples, was the base for the largest fleet of the Roman Navy in A.D. 79. It was home to Pliny the Elder, commander of the Roman fleet, and his nephew Pliny the Younger.
          <!--A thermopolium was a typical Roman commercial establishment in which one could purchase ready-to-eat food. It was the forerunner 
          to today’s fast-food restaurants. Their appearance ranged from a neighborhood stand specializing in one item to a more elegant 
          setting with frescoed walls decorating the dining area.-->
        </p>
      </div>
    </div>

    <div id="pompeiiOneModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Pompeii</h3>
        <p>
          Pompeii was a thriving provincial center in the heart of Campania and due south of the long-dormant Mt. Vesuvius. 
          With a cosmopolitan population of approximately 20,000, Pompeii was renowned for its olives, wine and garum, a fermented fish sauce. 
          Much of the city’s prosperity was due to the incredibly fertile volcanic soils of the region, which allowed for two and sometimes 
          three crops to be grown per year. Explore the ruins and search for artifacts here. 
        </p>
      </div>
    </div>

    <div id="pompeiiTwoModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Pompeii</h3>
        <p>
          Pyroclastic surges, or "glowing avalanches" of hot ash, wreaked devastation on the city of Pompeii as they powered down the volcano 
          at intense speeds, wiping out everything their path. Explore the ruins and search for artifacts here.
        </p>
      </div>
    </div>

    <div id="oplontisModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Oplontis</h3>
        <p>
          Rectina's villa was located in the ancient city of Oplontis, a well-developed residential center along the Campanian coast of the 
          Bay of Naples due west of Pompeii. Explore the ruins and search for artifacts here.
        </p>
      </div>
    </div>

    <div id="stabeaModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Stabea</h3>
        <p>
          Located just 4.5 miles south of Pompeii, Staibea was a popular seaside resort town for wealthy Romans. The city was buried in ash 
          during the eruption of Mount Vesuvius.
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
          <p>Destroyed by the eruption of Mount Vesuvius on August 24, 79 AD, Pompeii vanished beneath thick layers of volcanic ash. 
            The city remained virtually untouched for nearly 1,700 years, preserved as if sealed in a time capsule. Pompeii's 
            rediscovery-building by building, street by street, block by block-became one of the greatest archaeological sites 
            ever unearthed.
          </p>
          <p>Explore the ruins of this once prosperous city in the interactive map. You’ll uncover frescos, marble sculptures, pottery, and 
            other priceless artifacts from the exhibit in the environment where they once lived. Along the way, you’ll encounter some of the 
            volcano’s victims eerily preserved in their final moments.
          </p>
          <p>Twitter updates based on the only eyewitness account of the disaster allow you to relive the eruption, hour-by-hour. Follow the 
            courageous journey of Pliny the Elder, as recorded by his nephew in 79 AD. His story remains as one of the most historically 
            significant chronicles of the eruption of Mount Vesuvius.
          </p>

          <p>Learn more about this catastrophic event and see hundreds of rare artifacts in person when you visit A Day in Pompeii at the 
            Denver Museum of Nature &amp; Science September 14th – January 13th.
          </p> 
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
          <div id="scrollbar1">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">
              <div class="overview">
                <?php echo latest_tweets(); ?>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div id="locations_tab_container" class="locations tab_content">
        <div id="scrollbar2">
            
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">
              <div class="overview">

              <div class="jumpmarker_container">
                <ul>
                  <li>
                    <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                    <a href="#" id="jump_bath" location="bath">Bath House</a>
                  </li>
                  <li>
                    <img src="assets/images/bg_location_thumb.jpg" width="70" height="70"/>
                    <a href="#" id="jump_dio" location="dio">House of Diomedes</a>
                  </li>
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
        </div>
        </div>
      </div>

      <!-- coverage/storify tab -->
      <div class="coverage tab_content">
        <div id="scrollbar3">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">
              <div class="overview">
                <?php echo getStory(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
    </div>

    <div class="footer">
      <img src="assets/images/logo.jpg" width="148" height="45" alt="Denver Museum of Nature & Science"/>
      <p><a href="#">Privacy Policy</a>  /  Conditions of Use Copyright © Denver Museum of Nature &amp; Science. All rights reserved.  <a id="credits" href="#">Additional Credits.</a></p>
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