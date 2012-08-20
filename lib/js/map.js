      var map;
      var panorama;
      var pompeii = new google.maps.LatLng(40.748123, 14.489082999999937); // POMPEII START
      
      // marker coords
      var theatre = new google.maps.LatLng(40.748809, 14.488440999999966);
      var tunnel = new google.maps.LatLng(40.748843, 14.488707999999974);
      var column = new google.maps.LatLng(40.748447, 14.489013999999997);

      // JUMP MARKER LOCATIONS
      var riot = new google.maps.LatLng(40.75084, 14.495337000000063); // riot ampitheatre location
      var bath = new google.maps.LatLng(40.751825, 14.48669700000005); // bath house location
      var dio = new google.maps.LatLng(40.752102, 14.47809200000006); // house of diomedes location





      var panoList = []
      panoList[0] = artifactObjOne;


      var artifactObjOne = {
        name: 'Statue',
        location: '40.748447, 14.489013999999997',
        panos: panoSetOne,
        img: 'assets/marker/statue.png'
      }

      var  panoSetOne = [];
      panoSetOne[0] = "Kv1W3qMmh7KqrgS1p3pXTg";
      panoSetOne[1] = "mfskT1va2lMzW9yQ_dDUIA";
      panoSetOne[2] = "yJUi2nsH0Iyotfo8bp_shA";
      panoSetOne[3] = "bOto9tg_GNubWlne7EKTdw";

      


function initialize() {
  // modal close button
  $('.close').click(function(){
    $('.modal').hide();
    $('#overlay').hide();
  });

  // ************************************************************************
  // JUMP MARKERS
  // ************************************************************************

        // riot ampitheatre
        $('#jumpRiot').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(riot);
            map.setCenter(riot);
          return false;
        });

        //bath house
        $('#jumpBath').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(bath);
            map.setCenter(bath);
          return false;
        });

        // house of diomedes jump
        $('#jumpDio').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(dio);
            map.setCenter(dio);
          return false;
        });

        // test jumps
        $('#jumpOne').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(tunnel);
            map.setCenter(tunnel);
          return false;
        });
        $('#jumpTwo').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(theatre);
            map.setCenter(theatre);
          return false;
        });

        $('#jumpThree').click(function(){
          var jumpTo = $(this).attr('location');
          panorama.setPosition(column);
          map.setCenter(column);
          return false;
        });
        // END
        


        


  // ************************************************************************
  //  TOP VIEW
  // ************************************************************************

      // Set up the map top view map
      var mapOptions = {
        center: pompeii,
        zoom: 17,
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

        var riotMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var riotMarker = new google.maps.Marker({
            position: riot,
            map: map,
            icon: riotMarkerImage,
            title: 'Riot Ampitheatre'
        });
        // add click function to markers
          google.maps.event.addListener(riotMarker, 'click', function() {
            map.setCenter(riot);
            panorama.setPosition(riot);
        });

        var bathMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var bathMarker = new google.maps.Marker({
            position: bath,
            map: map,
            icon: bathMarkerImage,
            title: 'Bath House'
        });
        // add click function to markers
          google.maps.event.addListener(bathMarker, 'click', function() {
            map.setCenter(bath);
            panorama.setPosition(bath);
        });


        var dioMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png');
        var dioMarker = new google.maps.Marker({
            position: dio,
            map: map,
            icon: bathMarkerImage,
            title: 'House of Diomedes'
        });
        // add click function to markers
          google.maps.event.addListener(bathMarker, 'click', function() {
            map.setCenter(bath);
            panorama.setPosition(bath);
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
            getCurrentPanoID();
            showArtifact(panoSetOne);
        });

        function getCurrentPanoID(){
          panID = panorama.getPano();

          //alert(panID);
        }




     /*   var panoList = []
      panoList[0] = artifactObjOne;


      var artifactObjOne = {
        name: 'Statue',
        location: '40.748447, 14.489013999999997',
        panos: panoSetOne,
        img: 'assets/marker/statue.png'
      }

      var  panoSetOne = [];
      panoSetOne[0] = "Kv1W3qMmh7KqrgS1p3pXTg";
      panoSetOne[1] = "mfskT1va2lMzW9yQ_dDUIA";
      panoSetOne[2] = "yJUi2nsH0Iyotfo8bp_shA";
      panoSetOne[3] = "bOto9tg_GNubWlne7EKTdw"; */


        function showArtifact(artifact){
            
              var panGet = panorama.getPano();
              // CHECK PANO ID
              for (var i=0; i<artifact.length; i++) {
                
                if( panGet == artifact[i]){ 
                 
                  var artifactMarkerImage = new google.maps.MarkerImage('assets/marker/statue.png'); // artifact image
                  var artifactMarker = new google.maps.Marker({
                      position: column, // artifact position
                      map: panorama,
                      icon: artifactMarkerImage, // artifact streetview image
                      title: 'Column'  // artifact object name
                  });

                  var artifactMarkerImage = new google.maps.MarkerImage('assets/marker/coin.png'); // artifact image
                  var artifactMarker = new google.maps.Marker({
                      position: column, // artifact position
                      map: map,
                      icon: artifactMarkerImage, // artifact streetview image
                      
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

   

    


















    }
