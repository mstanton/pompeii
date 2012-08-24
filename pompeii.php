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
    <script type="text/javascript" src="lib/js/load.js"></script> 
    <script type="text/javascript" src="lib/js/map.js"></script>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">


  </head>
    
  <body>
    <!-- CREDITS MODAL -->
    <div id="creditsModal" class="modal">
      <div class="close"></div>
      <h3>Credits:</h3>
      <p>This exhibit is based on the design and presentation developed by the Gulf Coast Exploreum, the Science Museum of Minnesota, 
      the San Diego Natural History Museum, and Discovery Place. Organized by Soprintendenza Speciale per i Beni Archeologici di Napoli e Pompei. 
      Artifact Photo Credits: William Starling, photographer. Artifact descriptions: The Complete Pompeii. Thames &amp; Hudson: New York. 2007.</p> 
    </div>

    <!-- ARTIFACT MODALS -->
    <div id="columnModal" class="modal">
        <div class="close"></div>
        <h3>Statue of Aphrodite</h3>
        <img src="assets/images/img_holder_overlay.jpg"/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tellus felis, interdum quis imperdiet vel, mollis eu nunc. Nunc iaculis urna 
          nec odio lacinia at pretium dui luctus. Curabitur lacus augue, aliquet nec tincidunt in, posuere id dui. Vestibulum laoreet ipsum sollicitudin 
          sapien auctor a congue massa malesuada. Etiam condimentum ultrices nunc at ultricies. Praesent ultricies nulla semper lectus euismod et blandit 
          nulla vehicula. Suspendisse ac arcu ligula, eu sollicitudin massa. Proin rhoncus, arcu eget auctor bibendum, metus ipsum pretium dolor, ut 
          consectetur eros nibh id turpis.</p>
    </div>


    <!-- TWEET MODALS -->
    <div id="tweet_2Modal" class="modal tweet_modal"> <!-- tweet_2 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0005_food.jpg" width="658" height="425"/>
      <div class="detail">
        <h3>Lunch in AD 79</h3>
        <p>In ancient Pompeii three meals a day were common. Lunch often consisted of bread and cheese and was eaten on the run. Dinner was the 
          main meal prepared at home or picked up at a thermopolium.</p>
        <div class="tweet_txt">
          <p>Enjoying lunch on the balcony after a cold bath. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>

    <div id="tweet_3Modal" class="modal tweet_modal"> <!-- tweet_3 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0004_tree.jpg" width="406" height="566"/>
      <div class="detail">
        <h3>Umbrella Pine</h3>
        <p>Pliny the Younger described the cloud's shape by likening it to an umbrella pine –with a very long "trunk" 
          from which spread some "branches".</p>
        <div class="tweet_txt">
          <p>A strange cloud is rising in the distance. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>


    <div id="tweet_4Modal" class="modal tweet_modal"> <!-- tweet_4 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0000_mountVesuvius_recreation.jpg" width="648" height="420"/>
      <div class="detail">
        <h3>Mount Vesuvius August 24 AD 79</h3>
        <p>Mount Vesuvius is the only active volcano on the European continent and was formed as a result of the collision of two tectonic plates, 
          the African and the Eurasian. Tectonic forces are pushing the African plate under the European plate, causing extreme pressures 
          and temperatures to build deep below the surface. These forces build up through time and occasionally get released via earthquakes or 
          volcanic eruptions.</p>
        <div class="tweet_txt">
          <p>A cloud made of ash and dirt appears to be coming from Mount Vesuvius. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>


    <div id="tweet_6Modal" class="modal tweet_modal"> <!-- tweet_6 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0000_mountVesuvius_recreation.jpg" width="648" height="420"/>
      <div class="detail">
        <h3>Pliny the Younger (AD 61-113)</h3>
        <p>Roman historian, author and magistrate. Raised and educated by his uncle Pliny the Elder, he was witness to the eruption of Mount Vesuvius and author of two detailed letters recounting the day's events. 
          The story of his uncle's journey remains one of the most historically significant chronicles of the disaster. </p>
        <div class="tweet_txt">
          <p>Asked my nephew to join me, but he's intent on studying. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>


    <div id="tweet_8Modal" class="modal tweet_modal"> <!-- tweet_8 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0000_plinyYounger.jpg" width="406" height="566"/>
      <div class="detail">
        <h3>Pliny the Younger (AD 61-113)</h3>
        <p>Roman historian, author and magistrate. Raised and educated by his uncle Pliny the Elder, he was witness to the eruption of Mount Vesuvius and author of two detailed letters recounting the day's events. 
          The story of his uncle's journey remains one of the most historically significant chronicles of the disaster. </p>
        <div class="tweet_txt">
          <p>Asked my nephew to join me, but he's intent on studying. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>

    <div id="tweet_9Modal" class="modal tweet_modal"> <!-- tweet 9 -->
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0005_plinysRoute.jpg" width="908" height="437"/>
      <div class="detail">
        <h3>Pliny the Elder's Route </h3>
        <p>Map of Pliny's route from Misenum to Stabiae. Location dot is on the shore at Misenum. </p>
        <div class="tweet_txt">
          <p>Setting out across the Bay of Naples. Ash and pumice are pummeling our boat.   <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>    

    <div id="tweet_16Modal" class="modal tweet_modal"> 
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0002_pompeiiOnFire2.jpg" width="648" height="420"/>
      <div class="detail">
        <h3>Illustration of Pompeii Burning</h3>
        <p>Pyroclastic surges, or “glowing avalanches” of hot ash, wreaked devastation on the city of Pompeii as they moved down the volcano at intense speeds.</p>
        <div class="tweet_txt">
          <p>Walking through town. We can see broad sheets of flames rising from Pompeii. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>

    <div id="tweet_19Modal" class="modal tweet_modal"> 
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0000_mountVesuvius_recreation.jpg" width="648" height="420"/>
      <div class="detail">
        <h3>Mount Vesuvius, August 25 AD 79</h3>
        <p>The eruption of Mount Vesuvius in AD 79 was roughly 10 times larger than the eruption of Mount St. Helens in 1980. At the peak of the eruption, magma, ash and gas were released from the volcano at a rate of 100,000 tons every second.</p>
        <div class="tweet_txt">
          <p>Woke up to violent shaking. The courtyard is full of ash and pumice. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>


    <div id="tweet_22Modal" class="modal tweet_modal"> 
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0006_blackedOut.jpg" width="908" height="437"/>
      <div class="detail">
        <h3>Streets of Stabiae</h3>
        <p>When Mount Vesuvius erupted it sent a column of ash and pumice into the atmosphere. Just hours later, the immense cloud would block out the sun completely, leaving the area in total darkness.</p>
        <div class="tweet_txt">
          <p>It's daytime, but blacker than any night. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>

    <div id="tweet_25Modal" class="modal tweet_modal"> 
      <div class="close"></div>
      <img src="assets/twitter/Pompeii_modal_0007_ashMap.gif" width="908" height="437"/>
      <div class="detail">
        <h3>Ash Map of Eruption</h3>
        <p>During the eruption of AD 79, volcanic ash fell as far away as Africa. The dark, shaded area shows the approximate area most heavily 
          affected by the eruption.</p>
        <div class="tweet_txt">
          <p>The air is thick with ash. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div> 

    <div id="tweet_26Modal" class="modal tweet_modal">
      <div class="close"></div> 
      <img src="assets/twitter/Pompeii_modal_0007_ashMap.jpg" width="704" height="436"/>
      <div class="detail">
        <h3>Letter from Pliny the Younger</h3>
        <p>"There my uncle lay down on a sail that had been spread for him, and called twice for some cold water, which he drank. 
          Then a rush of flame, with the reek of sulfur, made everyone scatter, and made him get up. He stood with the help of his servants, 
          but at once fell down dead, suffocated, as I suppose, by some potent, noxious vapor." Pliny the Younger </p>
        <div class="tweet_txt">
          <p>Breathing now impossible. <a href="https://twitter.com/#!/search/realtime/%23pompeii24">#pompeii24</a></p>
        </div>
      </div>
    </div>       
    <!-- // END TWEET MODALS -->






    

    <!-- LOCATION MODALS -->
    <div id="dioModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>House of Diomedes</h3>
        <p>
          The devastation of Mount Vesuvius was experienced by all social classes. When the House of Diomedes was excavated in the early 1770's 
          twenty bodies were discovered inside, some were richly bejeweled women and children. This house is located along the Via dei Sepolcri 
          (Street of Tombs), outside the Herculaneum Gate. It had a private bath suite, swimming pool, and sea views. 
        </p>
      </div>
    </div>

    <div id="bathModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Bath House</h3>
        <p>
          This is the site of a popular Roman bath house, much like the one visited by Pliny the Elder. Bathing was an important activity for 
          the citizens of Pompeii. It was part of the daily regimen for men of all classes, and many women as well. The facilities in some ways 
          resembled modern spas or health clubs. 
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
          All of Pompeii's cemeteries were located outside the city walls, as Roman law forbade burial within the city. Porta Nocera, 
          located just beyond the tree-lined sidewalk, was named after the Nucerian gate leading out of the city. Cemeteries were often 
          bustling public places deliberately placed alongside important roads, so the deceased would be remembered by all who passed by. 
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

    <div id="misenumModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Misenum</h3>
        <p>
         Located just steps away from the Bay of Naples, the ancient city of Misenum was once home to Pliny the Elder and his nephew Pliny the Younger. 
         It is located almost due west of Pompeii and was the base for the largest fleet of the Roman Navy in AD 79. 
        </p>
      </div>
    </div>

    <div id="pompeiiOneModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Ancient Pompeii</h3>
        <p>
          Pompeii was a thriving provincial center in the heart of Campania and due south of the long-dormant Mt. Vesuvius. With a cosmopolitan 
          population of approximately 20,000, it was renowned for its olives, wine and garum, a fermented fish sauce. Much of the city’s prosperity 
          was due to the incredibly fertile volcanic soils of the region.  
        </p>
      </div>
    </div>

    <div id="pompeiiTwoModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Pompeii Ruins</h3>
        <p>
          Pompeii was lost for nearly 1700 years before its rediscovery in 1748. With more than 2 million visitors every year, it is one of the 
          most popular tourist attractions in Italy today. Explore the ruins of this once prosperous city. 
        </p>
      </div>
    </div>

    <div id="oplontisModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Oplontis</h3>
        <p>
          In ancient times, the city of Oplontis was a well-developed residential center along the Campanian coast of the Bay of Naples due 
          west of Pompeii. It was home to Rectina, the sister-in-law of Pliny the Elder. Take a moment to explore the city. You'll 
          find two artifacts located near this point. 
        </p>
      </div>
    </div>

    <div id="stabeaModal" class="modal location">
      <div class="close"></div>
      <div class="detail">
        <h3>Stabiae</h3>
        <p>
          Pliny the Elder was forced to land on these shores in AD 79. Located just 4.5 miles south of Pompeii, the seaside resort town of 
          Stabiae was almost completely buried in ash during the eruption of Mount Vesuvius. 
        </p>
      </div>
    </div>
  <!-- // END MODALS -->

 

    <div class="top">
      <a href="http://dayinpompeii.com" style="display:block; width:500px; height:150px;">&nbsp;</a>
    </div>
     
    <div id="overlay"></div>



    <div class="maps_container">
      <div id="pano" style="height:863px; margin:0 0 0 15px;"></div>
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
        <img src="assets/images/about.jpg" width="267" height="113"/>
      <p>Destroyed by the eruption of Mount Vesuvius on August 24, AD 79, Pompeii vanished beneath thick layers of volcanic ash. The city remained 
        virtually untouched for nearly 1,700 years, preserved as if sealed in a time capsule. Pompeii's unearthing –structure by structure, 
        street by street, block by block--revealed one of the greatest archaeological sites ever excavated. </p>
      <p>Explore the ruins of this once prosperous city in the interactive map. You’ll uncover frescos, marble sculptures, pottery, and other priceless 
        artifacts from the exhibit in the environment where they once lived. Along the way, you'll encounter some of the volcano’s victims eerily 
        preserved in their final moments.</p>
      <p>Twitter updates based on the only eyewitness account of the disaster allow you to relive the eruption, hour-by-hour. Follow the courageous 
        journey of Pliny the Elder, as recorded by his nephew in AD 79. His story remains as one of the most historically significant chronicles of 
        the eruption of Mount Vesuvius. </p>
      <p>Learn more about this catastrophic event and see hundreds of rare artifacts in person when you visit A Day in Pompeii at the Denver 
        Museum of Nature &amp; Science, September 14th – January 13th.</p> 

      <a href="http://secure1.dmns.org/category/1-exhibitions.aspx" target="_blank">BUY TICKETS</a>
      </div>

      <!-- twitter tab -->
      <div class="twitter tab_content">
        <div class="pliny">
            <a href="http://www.twitter.com/elder_pliny" target="_blank"><img src="assets/images/pliny.jpg" width="73" height="73" alt="Pliny the Elder"/></a>
            <div class="pliny_detail">
              <p><a href="http://www.twitter.com/elder_pliny" target="_blank">@elder_pliny</a></p>
              <a href="http://www.twitter.com/elder_pliny" target="_blank"><h3>Pliny the Elder</h3></a>
              <p>Roman scholar, encyclopedist, nationalist, and commander of the Roman fleet at Misenum.</p>

            </div>
            <div class="clear"></div>
            <hr/>
        </div>
        <div class="clear"></div>
        <div class="tweets_container">
            <?php echo latest_tweets(); ?>
        </div>
      </div>

      <div id="locations_tab_container" class="locations tab_content">
          <div class="detail">
            <h3>Locations</h3>
            <p>Explore the locations that Pliny the Elder visited during the eruption of Mount Vesuvius and other sites affected by the disaster. Along the way, discover artifacts in the area where they were found.</p>
            <p>See what people are saying about the anniversary of the eruption of Mount Vesuvius and the last 24 hours of Pompeii. </p>
            <hr/>
          </div>
          <div class="jumpmarker_container">
            <ul>
              <li>  
                <a href="#" id="jump_bath" location="bath">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Bath House</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_dio" location="dio">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">House of Diomedes</span>
                </a>
              </li>
              <li>  
                <a href="#" id="jump_palestra" location="palestra">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Palestra Grande</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_nocera" location="nocera">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Porta Nocera</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_venus" location="venus">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">House of Venus in a Shell</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_ampitheatre" location="ampitheatre">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Amphitheatre</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_menander" location="menander">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">House of Menander</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_misenum" location="misenum">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Misenum</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_pompeiiOne" location="pompeiiOne">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">South Pompeii</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_pompeiiTwo" location="pompeiiTwo">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">North Pompeii</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_oplontis" location="oplontis">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Oplontis</span>
                </a>
              </li>
              <li>
                <a href="#" id="jump_stabea" location="stabea">
                  <img src="assets/images/bg_location_thumb.jpg" width="70" height="70" alt=""/>
                  <span class="loc_title">Stabiae</span>
                </a>
              </li>
            </ul>
            <div class="clear"></div>
        </div>
      </div>

      <!-- coverage/storify tab -->
      <div class="coverage tab_content">
        <h3>Coverage</h3>
        <p>See what other people are saying about Pompeii, its anniversary and Pliny's account of the eruption at Mount Vesuvius.</p>
        <hr/>
        <?php echo getStory(); ?>
      </div>
    </div>
          
    <div class="footer" style="position:relative;">
      <img src="assets/images/logo.jpg" width="148" height="45" alt="Denver Museum of Nature & Science"/>
      <p style="padding:45px 0 0 0;"><a href="http://www.dmns.org/privacy-policy" target="_blank">Privacy Policy</a>  /  <a href="http://www.dmns.org/conditions-of-use" target="_blank">Conditions of Use</a> Copyright &copy Denver Museum of Nature &amp; Science. All rights reserved.  <a id="link_credit" href="#">Additional Credits.</a></p>
      



      <div class="social_buttons" style="position:absolute; right:-500px;">
        <ul>
          <li>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.dayinpompeii.com" data-text="A Day In Pompeii - The Last XXIV Hours" data-via="elderpliny" data-hashtags="pompeii24">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </li>
          <li>
            <div class="fb-like" data-href="http://www.dayinpompeii.com" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="arial"></div>
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
    </div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34277833-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


    
  </body>
</html>