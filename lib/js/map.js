var map;
var panorama;

var Pompeii = function (pompeii) {
    pompeii.coords = new Array();

    // marker coords
    pompeii.coords['pompeii'] = new google.maps.LatLng(40.748123, 14.489082999999937); // POMPEII START

    // HIDDEN ARTIFACT MARKERS
    pompeii.coords['column'] = new google.maps.LatLng(40.748447, 14.489013999999997);  // test location of hidden artifact

    // JUMP MARKER LOCATIONS
    pompeii.coords['bath'] = new google.maps.LatLng(40.751825, 14.48669700000005); // bath house location


    pompeii.coords['dio'] = new google.maps.LatLng(40.752102, 14.47809200000006); // house of diomedes location   
    pompeii.coords['palestra'] = new google.maps.LatLng(); // Palestra Grande
    pompeii.coords['nocera'] = new google.maps.LatLng(40.748906, 14.49443199999996); // Porta Nocera
    pompeii.coords['venus'] = new google.maps.LatLng(40.751544, 14.493321000000037); // The House Venus in a Shell
    pompeii.coords['ampitheatre'] = new google.maps.LatLng(40.75084, 14.495337000000063); // Ampitheatre
    pompeii.coords['menander'] = new google.maps.LatLng(40.749972, 14.484770000000026); // House of Menander
    pompeii.coords['thermo'] = new google.maps.LatLng(40.75095, 14.482306999999983); // Thermopolium
    pompeii.coords['vesu'] = new google.maps.LatLng(40.749063, 14.48506599999996); // Mount Vesuvius temple of Jupiter shot
    pompeii.coords['misenum'] = new google.maps.LatLng(40.818661, 14.071423999999979); // Misenum
    pompeii.coords['pompeiiOne'] = new google.maps.LatLng(40.748262, 14.485725000000002); // Pompeii - near jupiter temple
    pompeii.coords['pompeiiTwo'] = new google.maps.LatLng(40.749087, 14.486775999999963); // Pompeii - garden area
    pompeii.coords['oplontis'] = new google.maps.LatLng(40.754866, 14.446848000000045); // Oplontis 
    pompeii.coords['stabea'] = new google.maps.LatLng(40.690347, 14.458919000000037); // "Stab-e-i"

    // Set additional Properties
    pompeii.coords['column'].artifact = {
        name: 'Statue',
        location: '40.748447, 14.489013999999997',
        panos: ["Kv1W3qMmh7KqrgS1p3pXTg", "mfskT1va2lMzW9yQ_dDUIA", "yJUi2nsH0Iyotfo8bp_shA", "bOto9tg_GNubWlne7EKTdw"],
        img: 'assets/marker/statue.png',
        coin: 'assets/marker/marker.png',
        loaded: false
    }

    /* Not sure if this is needed */
    pompeii.getCurrentPanoID = function () {
        panID = panorama.getPano();
    }

   
    //Init Pompeii
    pompeii.init = function () {
        $('.close').click(function () {
            $('.modal').hide();
            $('#overlay').hide();
        });

        //Setup the coordinates
        for (key in pompeii.coords) {
            $('#jump_' + key).on('click', function () {
                var key = $(this)[0].id.replace('jump_', '');
                var jumpTo = $(this).attr('location');
                panorama.setPosition(pompeii.coords[key]);
                map.setCenter(pompeii.coords[key]);
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
                heading: 47,
                pitch: -7.0875,
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
            title: 'Bath House',
            id: 'bath'
        });
        pompeii.coords['dio'].marker = new google.maps.Marker({
            position: pompeii.coords['dio'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'House of Diomedes',
            id: 'dio'
        });
        pompeii.coords['palestra'].marker = new google.maps.Marker({
            position: pompeii.coords['palestra'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Palestra Grande',
            id: 'palestra'
        });
        pompeii.coords['nocera'].marker = new google.maps.Marker({
            position: pompeii.coords['nocera'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Porta Nocera',
            id: 'nocera'
        });
        pompeii.coords['venus'].marker = new google.maps.Marker({
            position: pompeii.coords['venus'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'The House of Venus in a Shell',
            id: 'venus'
        });
        pompeii.coords['ampitheatre'].marker = new google.maps.Marker({
            position: pompeii.coords['ampitheatre'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Amphitheatre',
            id: 'ampitheatre'
        });
        pompeii.coords['menander'].marker = new google.maps.Marker({
            position: pompeii.coords['menander'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'House of Menander',
            id: 'menander'
        });
        pompeii.coords['thermo'].marker = new google.maps.Marker({
            position: pompeii.coords['thermo'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Thermopolium',
            id: 'thermo'
        });
        pompeii.coords['vesu'].marker = new google.maps.Marker({
            position: pompeii.coords['vesu'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Mount Vesuvius',
            id: 'vesu'
        });
        pompeii.coords['misenum'].marker = new google.maps.Marker({
            position: pompeii.coords['misenum'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Misenum',
            id: 'misenum'
        });
        pompeii.coords['pompeiiOne'].marker = new google.maps.Marker({
            position: pompeii.coords['pompeiiOne'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Pompeii Location One',
            id: 'pompeiiOne'
        });
        pompeii.coords['pompeiiTwo'].marker = new google.maps.Marker({
            position: pompeii.coords['pompeiiTwo'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Pompeii Location Two',
            id: 'pompeiiTwo'
        });
        pompeii.coords['oplontis'].marker = new google.maps.Marker({
            position: pompeii.coords['oplontis'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Oplontis',
            id: 'oplontis'
        });
        pompeii.coords['stabea'].marker = new google.maps.Marker({
            position: pompeii.coords['stabea'],
            map: map,
            icon: new google.maps.MarkerImage('assets/marker/marker_small.png'),
            title: 'Stabea',
            id: 'stabea'
        });                                    


        //Loop through all the objects and setup the markers
        for (key in pompeii.coords) {
            if (pompeii.coords[key].autoLoad && pompeii.coords[key].marker != null) {
                google.maps.event.addListener(pompeii.coords[key].marker, 'click', function () {
                    var key = $(this)[0].id.replace('jump_', '');
                    map.setCenter(pompeii.coords[key]);
                    panorama.setPosition(pompeii.coords[key]);
                    $('#overlay').fadeIn(500);
                    $('#' + key + 'Modal').fadeIn(2000);
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
    }

    pompeii.loadModalInfo = function (item) {
        var key = item.id.replace('jump_', '');
        map.setCenter(pompeii.coords[key]);
        panorama.setPosition(pompeii.coords[key]);
        $('#overlay').fadeIn(500);
        $('#' + key + 'Modal').fadeIn(2000); // shows modal window
    }

    return pompeii;
} (Pompeii || {});

$(function () {
    Pompeii.init();
});
