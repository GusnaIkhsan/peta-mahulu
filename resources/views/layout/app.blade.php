<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peta Mahakam Ulu</title>
    <meta name="keywords" content="Peta Mahakam Ulu" />
    <meta name="description" content="Peta Mahakam Ulu">
    <meta name="author" content="Gusna Ikhsan">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Leaflet Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>

    <!-- jQuery 3 -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <style type="text/css">
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
        }

        .form-group {
            margin-bottom: 0 !important;
        }

        .pointer {
            cursor: pointer;
        }

        a[href^="http://maps.google.com/maps"],
        a[href^="https://maps.google.com/maps"] {
            display: none !important
        }

        .gmnoprint a,
        .gmnoprint span,
        .gm-style-cc {
            display: none;
        }

        .gmnoprint div {
            background: none !important;
        }

        /*
            a[href^="http://maps.google.com/maps"],
            a[href^="https://maps.google.com/maps"],
            a[href^="https://www.google.com/maps"] {
                display: none !important;
            }
            .gm-bundled-control .gmnoprint {
                display: block;
            }
            .gmnoprint:not(.gm-bundled-control) {
                display: none;
            }
    */
        .map-control {
            margin-top: 10px;
            margin-left: 0;
            /* Hide the control initially, to prevent it from appearing
                before the map loads. */
            display: none;
        }

        /* Display the control once it is inside the map. */
        .map-layer .map-control {
            display: block;
        }

        .selector-control {
            font-size: 20px;
            line-height: 30px;
            vertical-align: baseline;
        }

        @media (min-width: 768px) {
            .row.equal {
                display: flex;
                flex-wrap: wrap;
            }
        }

        .pac-container .pac-item {
            z-index: 2147483647 !important;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @yield('header')
        @yield('sidebar')
        @yield('content')
        @yield('footer')
    </div>
    <!-- ./wrapper -->


    {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initialize">
    </script> --}}

    <script>

        var mymap = L.map("map", {
            zoomControl: false
            //... other options
        }).setView([0.73524841, 114.94885683], 10);
        loadMap();

        function loadMap(){
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                zoomControl: false,
                accessToken: 'pk.eyJ1IjoiZ3VzbmFpa2hzYW4iLCJhIjoiY2thOTQzdmpwMDNwNTJzcnlnbXI3NnVpbyJ9.CUjlMAE9OI7NRGkMvkmAPg'
            }).addTo(mymap);
        }
        // var map;
        // function initialize() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 9,
        //         center: {
        //             lat: 0.73524841,
        //             lng: 114.94885683
        //         },
        //         styles: [{
        //             featureType: 'poi',
        //             stylers: [{
        //                 visibility: 'off'
        //             }]
        //         }],
        //         mapTypeControl: false,
        //         mapTypeId: 'hybrid'
        //     });

        //     var styleControl = document.getElementById('style-selector-control');
        //     map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);

        //     map.data.setStyle({
        //         fillColor: 'white',
        //         strokeColor: 'white',
        //         strokeWeight: 1
        //     });

        loadGeoJson("{{url('/all')}}");

        function loadGeoJson(url){
            $.getJSON(url,function(data){
                geoLayer = L.geoJSON(data,{
                    style: function(feature){
                        return{
                            fillColor: getColor(feature.properties.pola_ruang),
                            fillOpacity: 0.5,
                            weight: 1,
                            opacity: 1,
                            // color: "#1a3540",
                            color: 'black',
                        };
                    },
                    onEachFeature: function(feature, layer){
                        // layer.on("click", function(){
                        //     // alert(feature.properties.polygon_type);
                        //     polygonTypeChoose(feature, layer);
                        // });

                        layer.on('mouseover', function (e) {
                            var featureValue = [feature.properties.pola_ruang,feature.properties.kecamatan,feature.properties.desa,feature.properties.luas,feature.properties.sumber,feature.properties.keterangan];
                            layer.bindPopup(popUpView(featureValue), popUpOptions()).openPopup();
                        });
                        layer.on('mouseout', function (e) {
                            layer.closePopup();
                        });
                    }
                }).addTo(mymap);

                mymap.fitBounds(geoLayer.getBounds(),{
                    padding: [40, 40]
                });
            });
        }

        function getColor(d) {
            return d == 'Perkebunan' ? 'green' :
                d =='HL'  ? 'red' :
                d == 'HPT'  ? 'purple' :
                d == 'HP'  ? 'yellow' :
                d == 'Pertanian Lahan Basah'   ? '#FD8D3C' :
                d == 'HPK'   ? '#FEB24C' :
                d == 'Tubuh Air'   ? 'blue' :
                d == 'Kawasan Industri'   ? 'pink' :
                d > 10   ? '#FED976' :
                            '#FFEDA0';
        }

        function popUpView(data){
            popup = "<table class=\"table\"><tbody><tr><td>PR</td><td>"+data[0]+"</td></tr><tr><td>Kecamatan</td><td>"+data[1]+"</td></tr><tr><td>Desa</td><td>"+data[2]+"</td></tr><tr><td>Luas</td><td>"+data[3]+"</td></tr><tr><td>Sumber</td><td>"+data[4]+"</td></tr><tr><td>Keterangan</td><td>"+data[5]+"</td></tr></tbody></table>"
            return popup;
        }

        function popUpOptions(){
            var customOptions =
            {
                'maxWidth': '400',
                'width': '200',
                'className' : 'table'
            }
            return customOptions;
        }

        var home = L.control({position: 'topleft'});
        home.onAdd = function () {
            var div = L.DomUtil.create('div', 'home');
            div.innerHTML = '<button type="button" style="width: 150px;" class="btn btn-sm btn-block btn-default" id="btn_home" onclick="resetMap();"><i class="fa fa-home"></i>&nbsp;Semua Wilayah</button>';
            div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
            return div;
        };
        home.addTo(mymap);

        L.control.zoom({
            position:'bottomright'
        }).addTo(mymap);

        function centerLocAndZoom(lat, long, zoom){
            mymap.flyTo([lat, long], zoom, {
                    animate: true,
                    duration: 1.5
            });
        }

        function chooseKecamatan(data){
            mymap.eachLayer(function (layer) {
                mymap.removeLayer(layer);
            });
            loadMap();
            loadGeoJson("{{url('/kecamatan/')}}"+"/"+data);
        }

        function resetMap(){
            mymap.eachLayer(function (layer) {
                mymap.removeLayer(layer);
            });
            loadMap();
            loadGeoJson("{{url('/all')}}");
        }
    </script>


    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- SlimScroll -->
    <script src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/dist/js/demo.js')}}"></script>
    <!-- page script -->
</body>

</html>
