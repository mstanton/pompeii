      var map;
      var panorama;
      var pompeii = new google.maps.LatLng(40.748123, 14.489082999999937); // POMPEII START
      
      // marker coords
      var theatre = new google.maps.LatLng(40.748809, 14.488440999999966);
      var tunnel = new google.maps.LatLng(40.748843, 14.488707999999974);
      var column = new google.maps.LatLng(40.748447, 14.489013999999997);






      var  Artifact_1 = [];
      Artifact_1[0] = "Kv1W3qMmh7KqrgS1p3pXTg";
      Artifact_1[1] = "mfskT1va2lMzW9yQ_dDUIA";
      Artifact_1[2] = "yJUi2nsH0Iyotfo8bp_shA";

      

      function initialize() {
        // modal close button
        $('.close').click(function(){
          $('.modal').hide();
          $('.overlay').hide();
        });



        

        $('.jumpmarker').click(function(){
          var jumpTo = $(this).attr('data');

          if(jumpTo = tunnel) {
            panorama.setPosition(tunnel);
          }

          return false;
        });

        /*function jumptoMarker(location) {
          alert(location);
          panorama.setPosition(tunnel);
        }*/

        


        


  // ************************************************************************
  //  TOP VIEW
  // ************************************************************************

      // Set up the map top view map
      var mapOptions = {
        center: pompeii,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        streetViewControl: true
      };

      map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);



      // static markers
       var tunnelMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var tunnelMarker = new google.maps.Marker({
            position: tunnel,
            map: map,
            icon: tunnelMarkerImage,
            title: 'Tunnel'
        });
        // add click function to markers
          google.maps.event.addListener(tunnelMarker, 'click', function() {
            map.setCenter(tunnel);
            panorama.setPosition(tunnel);
        }); 

        var theatreMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var theatreMarker = new google.maps.Marker({
            position: theatre,
            map: map,
            icon: theatreMarkerImage,
            title: 'Ampitheatre'
        });
        // add click function to markers
          google.maps.event.addListener(theatreMarker, 'click', function() {
            map.setCenter(theatre);
            panorama.setPosition(theatre);
        });

  // ************************************************************************
  // STREET VIEWS
  // ************************************************************************
        var panoramaOptions = {
            position: pompeii,
            pov: {
              heading: 47,
              pitch: -7.0875,
              zoom: 1
            },
            visible: true,
            enableCloseButton: false
          };
         var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), panoramaOptions);

         map.setStreetView(panorama);


        google.maps.event.addListener(panorama, 'pano_changed', function() {
            showArtifact(Artifact_1);
        });



        function showArtifact(artifact){
              // CHECK PANO ID
              for (var i=0; i<artifact.length; i++) {
                var panGet = panorama.getPano();
                if( panGet == artifact[i]){ 
                  // Setup the markers on the map
                  var columnMarkerImage = new google.maps.MarkerImage('assets/marker/statue.png'); // artifact image
                  var columnMarker = new google.maps.Marker({
                      position: column, // artifact position
                      map: panorama,
                      icon: columnMarkerImage, // artifact streetview image
                      title: 'Column'  // artifact object name
                  });
                }                
            }
        }


              // add click function to markers
                  google.maps.event.addListener(columnMarker, 'click', function() {
                      map.setCenter(column)
                      $('.overlay').fadeIn(500);
                      $('#columnModal').fadeIn(2000); // shows modal window
                  }); 

                  var columnMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
                  var columnMarker = new google.maps.Marker({
                      position: column,
                      map: map,
                      icon: columnMarkerImage,
                      title: 'Column'
                  });

   

    

















      // ************************************************************************
      // META INFO STREEVIEW
      // ************************************************************************


        google.maps.event.addListener(panorama, 'pano_changed', function() {
            // display current Pano ID
            var panoCell = document.getElementById('pano_cell');
            panoCell.innerHTML = panorama.getPano();
        });

        google.maps.event.addListener(panorama, 'links_changed', function() {
            var linksTable = document.getElementById('links_table');
            while(linksTable.hasChildNodes()) {
              linksTable.removeChild(linksTable.lastChild);
            };
            var links =  panorama.getLinks();
            for (var i in links) {
              var row = document.createElement('tr');
              linksTable.appendChild(row);
              var labelCell = document.createElement('td');
              labelCell.innerHTML = '<b>Link: ' + i + '</b>';
              var valueCell = document.createElement('td');
              valueCell.innerHTML = links[i].description;
              linksTable.appendChild(labelCell);
              linksTable.appendChild(valueCell);
            }
        });

        google.maps.event.addListener(panorama, 'position_changed', function() {
            var positionCell = document.getElementById('position_cell');
            positionCell.firstChild.nodeValue = panorama.getPosition();
        });

        google.maps.event.addListener(panorama, 'pov_changed', function() {
            var headingCell = document.getElementById('heading_cell');
            var pitchCell = document.getElementById('pitch_cell');
            headingCell.firstChild.nodeValue = panorama.getPov().heading;
            pitchCell.firstChild.nodeValue = panorama.getPov().pitch;
        });
        // END META INFO
        // ************************************************************************



    }
