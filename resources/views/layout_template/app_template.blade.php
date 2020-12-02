<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://peta-mahulu.herokuapp.com/assets/template_components/img/Mahakam_Ulu.ico">
    <!-- Author Meta -->
    <meta name="author" content="Gusna">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>KAB. MAHAKAM ULU</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS============================================= -->
    {{-- <link rel="stylesheet" href="{{url('assets/template_components/css/Linearicons.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    {{-- <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/linearicons.css"> --}}
    {{-- <link rel="stylesheet" href="{{url('assets/template_components/css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{url('assets/template_components/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/bootstrap.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/magnific-popup.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/nice-select.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/hexagons.min.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/animate.min.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/owl.carousel.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/main.css">
    <link rel="stylesheet" href="https://peta-mahulu.herokuapp.com/assets/template_components/css/styleMe.css">

     <!-- Leaflet Map -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
     integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
     crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
    <style>
        .legenda{
            color: black;
            background-color:lightgray;
            padding: 10px;
            border-radius: 5px;
            opacity: 60%;
        }
    </style>
</head>

<body>
    @yield('header')

    @yield('content')

    @yield('footer')

    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/vendor/bootstrap.min.js"></script>

    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> --}}
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/easing.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/hoverIntent.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/superfish.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/jquery.ajaxchimp.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/jquery.magnific-popup.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/owl.carousel.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/hexagons.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/jquery.nice-select.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/jquery.counterup.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/waypoints.min.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/mail-script.js"></script>
    <script src="https://peta-mahulu.herokuapp.com/assets/template_components/js/main.js"></script>
</body>

</html>

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
        return  d == 'Perkebunan'       ? 'green' :
                d == 'HL'               ? 'red' :
                d == 'HPT'              ? 'purple' :
                d == 'HP'               ? 'yellow' :
                d == 'Pertanian Lahan Basah'   ? '#FD8D3C' :
                d == 'HPK'              ? '#FEB24C' :
                d == 'Tubuh Air'        ? 'blue' :
                d == 'Kawasan Industri' ? 'pink' :
                d > 10                  ? '#FED976' :
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
        // div.innerHTML = '<button type="button" style="width: 150px;" class="btn btn-sm btn-block btn-default" id="btn_home" onclick="resetMap();"><i class="fa fa-home"></i>&nbsp;Semua Wilayah</button>';
        div.innerHTML = '<button type="button" style="width: 150px;" class="btn btn-sm btn-block btn-default" id="btn_home" onclick="resetMap();">&nbsp;Semua Wilayah</button>';
        div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
        return div;
    };
    home.addTo(mymap);

    var ddKec = L.control({position: 'topleft'});
    ddKec.onAdd = function () {
        var div = L.DomUtil.create('div', 'kecamatan');
        div.innerHTML = '<select class="form-select" id="select_kecamatan" style="width: 150px;height: 25px;"></select>';
        div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
        return div;
    };
    ddKec.addTo(mymap);

    var legend = L.control({position: 'bottomleft'});
    legend.onAdd = function (mymap) {
        var div = L.DomUtil.create('div', 'legenda');
        labels = ['<div style="margin-bottom:-17px;font-size:11pt;"><strong>Legenda Zona Peta</strong></div>'],
        categories = ['Perkebunan','HL','HPT','HP','Pertanian Lahan Basah','HPK','Tubuh Air','Kawasan Industri'];

        for (var i = 0; i < categories.length; i++) {
                div.innerHTML +=
                labels.push(
                    '<i class="fa fa-square" style="color:' + getColor(categories[i]) + '"></i> ' +
                (categories[i] ? categories[i] : '+'));

            }
            div.innerHTML = labels.join('<br>');
        return div;
    };
    legend.addTo(mymap);

    $(document).ready(function() {
        $("#select_kecamatan").append('<option value="0">Pilih Kecamatan</option>');
        $("#select_kecamatan").append('<option value="1">Long Pari</option>');
        $("#select_kecamatan").append('<option value="2">Long Pahangai</option>');
        $("#select_kecamatan").append('<option value="3">Long Bagun</option>');
        $("#select_kecamatan").append('<option value="4">Long Hubung</option>');
        $("#select_kecamatan").append('<option value="5">Laham</option>');
    });

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

    $('#select_kecamatan').on('change', function() {
        var kecamatan = $('#select_kecamatan option:selected').val();
        if(kecamatan!=0){
            chooseKecamatan(kecamatan);
        }
    });
</script>
