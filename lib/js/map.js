var map;
var panorama;

var Pompeii = function (pompeii) {
    pompeii.point = null;
    pompeii.coords = new Array();
    pompeii.twitterCoords = new Array();

    // marker coords
    //pompeii.coords['pompeii'] = new google.maps.LatLng(40.748123, 14.489082999999937); // POMPEII START ORIGINAL w/ artifact
    pompeii.coords['pompeii'] = new google.maps.LatLng(40.749591, 14.484951000000024);

    // HIDDEN ARTIFACT MARKERS
    pompeii.coords['column'] = new google.maps.LatLng(40.748447, 14.489013999999997);  // test location of hidden artifact

    // JUMP MARKER LOCATIONS
    pompeii.coords['bath'] = new google.maps.LatLng(40.751825, 14.48669700000005); // bath house location
    pompeii.coords['dio'] = new google.maps.LatLng(40.752102, 14.47809200000006); // house of diomedes location   
    pompeii.coords['palestra'] = new google.maps.LatLng(40.751041, 14.494518999999968); // Palestra Grande
    pompeii.coords['nocera'] = new google.maps.LatLng(40.748906, 14.49443199999996); // Porta Nocera
    pompeii.coords['venus'] = new google.maps.LatLng(40.751544, 14.493321000000037); // The House Venus in a Shell
    pompeii.coords['ampitheatre'] = new google.maps.LatLng(40.75084, 14.495337000000063); // Ampitheatre
    pompeii.coords['menander'] = new google.maps.LatLng(40.749972, 14.484770000000026); // House of Menander
    pompeii.coords['thermo'] = new google.maps.LatLng(40.75095, 14.482306999999983); // Thermopolium
    pompeii.coords['misenum'] = new google.maps.LatLng(40.818661, 14.071423999999979); // Misenum
    pompeii.coords['pompeiiOne'] = new google.maps.LatLng(40.749591, 14.484951000000024); // Pompeii - near jupiter temple
    pompeii.coords['pompeiiTwo'] = new google.maps.LatLng(40.748123, 14.489082999999937); // Pompeii - near small ampitheatre
    pompeii.coords['oplontis'] = new google.maps.LatLng(40.754866, 14.446848000000045); // Oplontis 
    pompeii.coords['stabea'] = new google.maps.LatLng(40.690347, 14.458919000000037); // "Stab-e-i"

    pompeii.coords['bath'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // bath house location
    pompeii.coords['dio'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // house of diomedes location   
    pompeii.coords['palestra'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Palestra Grande
    pompeii.coords['nocera'].pov = { heading: 202, zoom:1, pitch:-7.0875 }  // Porta Nocera
    pompeii.coords['venus'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // The House Venus in a Shell
    pompeii.coords['ampitheatre'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Ampitheatre
    pompeii.coords['menander'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // House of Menander
    pompeii.coords['thermo'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Thermopolium
    pompeii.coords['misenum'].pov = { heading: -255, zoom:1, pitch:-7.0875 } // Misenum
    pompeii.coords['pompeiiOne'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Pompeii - near jupiter temple
    pompeii.coords['pompeiiTwo'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Pompeii - near small ampitheatre
    pompeii.coords['oplontis'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // Oplontis 
    pompeii.coords['stabea'].pov = { heading: 202, zoom:1, pitch:-7.0875 } // "Stab-e-i"

    //Twitter Feed Positions
    pompeii.twitterCoords['tweet_2'] = new google.maps.LatLng(40.75497, 14.446585000000027); // double check micenum
    pompeii.twitterCoords['tweet_3'] = new google.maps.LatLng(40.749069, 14.484944000000041); //
    pompeii.twitterCoords['tweet_4'] = new google.maps.LatLng(40.749047, 14.485300999999936); //
    pompeii.twitterCoords['tweet_6'] = new google.maps.LatLng(40.755056, 14.446270000000027); //
    pompeii.twitterCoords['tweet_9'] = new google.maps.LatLng(40.755073, 14.446152999999981); //
    pompeii.twitterCoords['tweet_16'] = new google.maps.LatLng(40.748723, 14.48889399999996); //
    pompeii.twitterCoords['tweet_19'] = new google.maps.LatLng(40.752007, 14.478159000000005); //
    pompeii.twitterCoords['tweet_22'] = new google.maps.LatLng(40.690149, 14.45877500000006); //

    pompeii.twitterCoords['tweet_2'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_3'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_4'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_6'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_9'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_16'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_19'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //
    pompeii.twitterCoords['tweet_22'].pov = { heading: 202, zoom:1, pitch:-7.0875 } //

    // Set additional Properties
    pompeii.coords['column'].artifact = {
        name: 'Statue',
        location: '40.748447, 14.489013999999997',
        panos: ["Kv1W3qMmh7KqrgS1p3pXTg", "mfskT1va2lMzW9yQ_dDUIA", "yJUi2nsH0Iyotfo8bp_shA", "bOto9tg_GNubWlne7EKTdw"],
        img: 'assets/artifacts/thumb_statueofAphrodite.png',
        coin: 'assets/marker/marker_small.png',
        loaded: false
    }

    /* Not sure if this is needed */
    pompeii.getCurrentPanoID = function () {
        panID = panorama.getPano();
    }

   
    //Init Pompeii
    pompeii.init = function () {
        $('.close').click(function () {
            $('.modal').fadeOut(500);
            $('#overlay').fadeOut(1000);
        });

        //Check to see if we have a point value passed in the URL
        pompeii.point = pompeii.getParameterByName('point');

        //Setup the coordinates
        for (key in pompeii.coords) {
            $('#jump_' + key).on('click', function () {
                pompeii.loadModalInfo($(this)[0]);
                return false;
            });
        }


        // Set up the map top view map
        var mapOptions = {
            center: pompeii.coords['pompeii'],
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.SATELLITE,
            streetViewControl: true,
        };

        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

        var panoramaOptions = {
            position: pompeii.coords['pompeii'],
            pov: {
                heading: -34.28125,
                pitch: -0.337500000000003,
                zoom: 1
            },
            visible: true,
            enableCloseButton: false,
            panControl: true,
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            }
        };
        panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), panoramaOptions);

        map.setStreetView(panorama);

        //Now that we have a map object set the markers
        pompeii.coords['bath'].marker = new google.maps.Marker({
            position: pompeii.coords['bath'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Bath House',
            id: 'bath'
        });
        pompeii.coords['dio'].marker = new google.maps.Marker({
            position: pompeii.coords['dio'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'House of Diomedes',
            id: 'dio'
        });
        pompeii.coords['palestra'].marker = new google.maps.Marker({
            position: pompeii.coords['palestra'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Palestra Grande',
            id: 'palestra'
        });
        pompeii.coords['nocera'].marker = new google.maps.Marker({
            position: pompeii.coords['nocera'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Porta Nocera',
            id: 'nocera'
        });
        pompeii.coords['venus'].marker = new google.maps.Marker({
            position: pompeii.coords['venus'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'The House of Venus in a Shell',
            id: 'venus'
        });
        pompeii.coords['ampitheatre'].marker = new google.maps.Marker({
            position: pompeii.coords['ampitheatre'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Amphitheatre',
            id: 'ampitheatre'
        });
        pompeii.coords['menander'].marker = new google.maps.Marker({
            position: pompeii.coords['menander'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'House of Menander',
            id: 'menander'
        });
        pompeii.coords['thermo'].marker = new google.maps.Marker({
            position: pompeii.coords['thermo'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Thermopolium',
            id: 'thermo'
        });
        pompeii.coords['misenum'].marker = new google.maps.Marker({
            position: pompeii.coords['misenum'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Misenum',
            id: 'misenum'
        });
        pompeii.coords['pompeiiOne'].marker = new google.maps.Marker({
            position: pompeii.coords['pompeiiOne'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Pompeii Location One',
            id: 'pompeiiOne'
        });
        pompeii.coords['pompeiiTwo'].marker = new google.maps.Marker({
            position: pompeii.coords['pompeiiTwo'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Pompeii Location Two',
            id: 'pompeiiTwo'
        });
        pompeii.coords['oplontis'].marker = new google.maps.Marker({
            position: pompeii.coords['oplontis'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Oplontis',
            id: 'oplontis'
        });
        pompeii.coords['stabea'].marker = new google.maps.Marker({
            position: pompeii.coords['stabea'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Stabea',
            id: 'stabea'
        });
        
        //Define Twitter Markers, the below method simplifies the above code...
        pompeii.twitterCoords['tweet_2'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_2'], 'tweet_2', 'Enjoying lunch on the balcony after a cold bath.');
        pompeii.twitterCoords['tweet_3'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_3'], 'tweet_3', 'A strange cloud is rising in the distance.');
        pompeii.twitterCoords['tweet_4'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_4'], 'tweet_4', 'A cloud made of ash and dirt appears to be coming from Mount Vesuvius.');
        pompeii.twitterCoords['tweet_6'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_6'], 'tweet_6', 'Asked my nephew to join me, but he\'s intent on studying. ');
        pompeii.twitterCoords['tweet_9'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_9'], 'tweet_9', 'Setting out across the Bay of Naples. Ash and pumice are pummeling our boat.');
        pompeii.twitterCoords['tweet_16'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_16'], 'tweet_16', 'Walking through town. We can see broad sheets of flames rising from Pompeii.');
        pompeii.twitterCoords['tweet_19'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_19'], 'tweet_19', 'Woke up to violent shaking. The courtyard is full of ash and pumice.');
        pompeii.twitterCoords['tweet_22'].markerSetup = pompeii.getMarkerSetup(pompeii.twitterCoords['tweet_22'], 'tweet_22', ' It\'s daytime, but blacker than any night.');
        
        for (key in pompeii.coords) {
            var marker = pompeii.coords[key].marker;
            if (marker != null)
            {
                marker.icon = marker.sv_icon;
                marker.map = panorama;
                pompeii.coords[key].panoMarker = new google.maps.Marker(marker);
            }            
        }

        //Loop through all the objects and setup the markers
        for (key in pompeii.coords) {
            if (pompeii.coords[key].marker != null) {
                google.maps.event.addListener(pompeii.coords[key].marker, 'click', function () {
                    pompeii.loadModalInfo(this);
                });
            }

            if (pompeii.coords[key].panoMarker != null) {
                google.maps.event.addListener(pompeii.coords[key].panoMarker, 'click', function () {
                    pompeii.loadModalInfo(this);
                });
            }

            google.maps.event.addListener(panorama, 'pano_changed', function () {
                var panGet = panorama.getPano();
                for (key in pompeii.coords) {
                    if (pompeii.coords[key].artifact != null && pompeii.coords[key].artifact.panos != null && pompeii.coords[key].artifact.panos.length > 0) {
                        for (var i = 0; i < pompeii.coords[key].artifact.panos.length; i++) {
                            if (pompeii.coords[key].artifact.panos[i] == panGet && !pompeii.coords[key].artifact.loaded) {
                                
                                var artifactMarkerImage = new google.maps.MarkerImage(pompeii.coords[key].artifact.img);
                                var artifactMarker = new google.maps.Marker({
                                    position: pompeii.coords[key],
                                    map: panorama,
                                    icon: artifactMarkerImage,
                                    title: pompeii.coords[key].artifact.name,
                                    id: key
                                });

                                google.maps.event.addListener(artifactMarker, 'click', function () {
                                    pompeii.loadModalInfo(this);
                                });

                                var artifactMarkerImage = new google.maps.MarkerImage(pompeii.coords[key].artifact.coin);
                                var artifactMarker = new google.maps.Marker({
                                    position: pompeii.coords[key],
                                    map: map,
                                    icon: artifactMarkerImage,
                                    title: pompeii.coords[key].artifact.name,
                                    id: key
                                });

                                google.maps.event.addListener(artifactMarker, 'click', function () {
                                    pompeii.loadModalInfo(this);
                                });

                                pompeii.coords[key].artifact.loaded = true;
                            }
                        };
                    }
                }
            });
        }

        if (pompeii.point != '') {
            if (pompeii.point == 'about') {
                $('#about-tab a').click();
            } else {
                pompeii.loadModalInfo({ id: pompeii.point });
            }
        }

        //Figure out the tweets shown
        for (var i = 0; i < $('#tweets > li').length; i++) {
            var index = i + 1;
            if (pompeii.twitterCoords['tweet_' + index] != null) {
                pompeii.addMarkerForCoord(pompeii.twitterCoords['tweet_' + index]);
            }
        }
    }

    pompeii.addMarkerForCoord = function (coord) {
        coord.marker = new google.maps.Marker(coord.markerSetup);                          

        var marker = coord.marker;
        if (marker != null)
        {
            marker.icon = marker.sv_icon;
            marker.map = panorama;
            coord.panoMarker = new google.maps.Marker(marker);
        }

        google.maps.event.addListener(coord.marker, 'click', function () {
            pompeii.loadModalInfo(this);
        });

        google.maps.event.addListener(coord.panoMarker, 'click', function () {
            pompeii.loadModalInfo(this);
        });
    }

    pompeii.loadModalInfo = function (item) {
        var key = item.id.replace('jump_', '');
        var coord = null;

        if (pompeii.coords[key] != null)
            coord = pompeii.coords[key];
        else if (pompeii.twitterCoords[key] != null) {
            coord = pompeii.twitterCoords[key];
            //We're coming from a twitter link so programmatically add the marker on tweet click
            pompeii.addMarkerForCoord(coord);
        }
		else
			return;
			
		map.setCenter(coord);
        panorama.setPosition(coord);
        panorama.setPov(coord.pov);
        $('#overlay').fadeIn(500);
        $('#' + key + 'Modal').fadeIn(2000); // shows modal window
    }

    pompeii.getParameterByName = function(name)
    {
      name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
      var regexS = "[\\?&]" + name + "=([^&#]*)";
      var regex = new RegExp(regexS);
      var results = regex.exec(window.location.search);
      if(results == null)
        return "";
      else
        return decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    pompeii.getMarkerSetup = function (coord, key, title) {
        return { position: coord,
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            sv_icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: title,
            id: key};
    }



    return pompeii;
} (Pompeii || {});

$(function () {
    Pompeii.init();
});
