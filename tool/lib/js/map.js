      var map;
      var panorama;
      var pompeii = new google.maps.LatLng(40.754866, 14.446848000000045); // POMPEII START
      var busStop = new google.maps.LatLng(40.748809, 14.488440999999966);
      var bank = new google.maps.LatLng(40.748843, 14.488707999999974)
      var cafe = new google.maps.LatLng(40.748447, 14.489013999999997);


      

      function initialize() {

        $('.close').click(function(){
          $('.modal').hide();
          $('.overlay').hide();
        });


        // Set up the map
        var mapOptions = {
          center: pompeii,
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.SATELLITE,
          streetViewControl: true
        };
        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);



        // Setup the markers on the map
        var cafeMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var cafeMarker = new google.maps.Marker({
            position: cafe,
            map: map,
            icon: cafeMarkerImage,
            title: 'Column'
        });
        // add click function to markers
          google.maps.event.addListener(cafeMarker, 'click', function() {
            $('.overlay').fadeIn(500);
            $('#cafeModal').fadeIn(2000); // shows modal window
        });  


        var bankMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var bankMarker = new google.maps.Marker({
            position: bank,
            map: map,
            icon: bankMarkerImage,
            title: 'Tunnel'
        });
        // add click function to markers
          google.maps.event.addListener(bankMarker, 'click', function() {
            $('.overlay').fadeIn(500);
            $('#bankModal').fadeIn(2000); // shows modal window
        });  



        var busMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var busMarker = new google.maps.Marker({
            position: busStop,
            map: map,
            icon: busMarkerImage,
            title: 'Ampitheatre'
        });
        // add click function to markers
          google.maps.event.addListener(busMarker, 'click', function() {
            $('.overlay').fadeIn(500);
            $('#busModal').fadeIn(2000); // shows modal window
        });


        // Set default streetview
        panorama = map.getStreetView();
        panorama.setPosition(pompeii);
        panorama.setPov({
          heading: 47,
          zoom:1,
          pitch:-7.0875}
        );
       panorama.setVisible(true);


       // display meta info for streetview
        google.maps.event.addListener(panorama, 'pano_changed', function() {
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
        // end
    }

    function toggleStreetView() {
        var toggle = panorama.getVisible();
        if (toggle == false) {
          panorama.setVisible(true);
        } else {
          panorama.setVisible(false);
        }

      }