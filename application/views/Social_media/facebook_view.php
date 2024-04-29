<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <!-- Bootstrap starts here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ends here -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Leaflet AJAX Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>

    <!-- html2canvas / canvas2image -->
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/html2canvas/html2canvas.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/canvas2image/canvas2image.js">
    </script>

    <style>
    body {
        width: 100%;
        height: 100vh;
        zoom: 80%;
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    .text {
        font-family: 'Archivo', sans-serif;
        font-size: 2em;
        font-weight: 600;
        color: white;
        letter-spacing: 3px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fixedHead {
        background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 60px;
        width: 100%;
        position: relative;
    }

    .sidebar {
        height: 54rem;
        width: 11%;
        background-color: #2c5383;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 13px;
        color: white;
        display: block;
        width: max-content;
    }

    .sidebar a:hover {
        color: white;
    }

    .dropdown-content {
        display: none;
        padding-left: 20px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    #map {
        margin-top: 1%;
        height: 100vh;
        width: 100%;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <div style="height: 100%;">
        <div class="fixedHead">
            <!-- Landing_page title logo> -->
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>


        <div class="row">
            <!-- Landing_page sidebar> -->
            <?php $this->load->view('Menu/Landing_page_side'); ?>


            <!-- editing content starts here -->
            <div class="col-9" style="width: 88%">
                <div id="map" class="map-canvas"></div>
                <h2>Post to Facebook</h2>
                <button class="btn btn-primary" id="getPic">Get Picture</button>
                <button class="btn btn-primary" id="postToFacebookBtn">Facebook</button>
                <!-- <a href="http://www.facebook.com/sharer.php?u=[EncodedURL-URl you want to share]"
                    target="_blank">share</a> -->

            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    var map = L.map('map').setView([22.79459, 80.06406], 5);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Add the GeoJSON data to the map
    _dist_geojson = "DATA/INDIA_STATE.json";
    var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
        style: function(feature) {
            return {
                color: 'black',
                fillColor: 'transparent',
                opacity: 0.5,
                fillOpacity: 0.0,
                weight: 2
            };
        }
    });

    geojson.on('data:loaded', function() {
        geojson.addTo(map);
    });
    // 

    var red_icon = L.icon({
        iconUrl: '<?= base_url('assets/lightning/images/map-marker-red.png')?>',
        iconSize: [20, 20], // size of the icon
        iconAnchor: [10, 20], // point of the icon which will correspond to marker's location
        popupAnchor: [0, -20] // point from which the popup should open relative to the iconAnchor
    });
    var yellow_icon = L.icon({
        iconUrl: '<?= base_url('assets/lightning/images/map-marker-yellow.png')?>',
        iconSize: [20, 20], // size of the icon
        iconAnchor: [10, 20], // point of the icon which will correspond to marker's location
        popupAnchor: [0, -20] // point from which the popup should open relative to the iconAnchor
    });
    var green_icon = L.icon({
        iconUrl: '<?= base_url('assets/lightning/images/map-marker-green.png')?>',
        iconSize: [20, 20], // size of the icon
        iconAnchor: [10, 20], // point of the icon which will correspond to marker's location
        popupAnchor: [0, -20] // point from which the popup should open relative to the iconAnchor
    });
    var orange_icon = L.icon({
        iconUrl: '<?= base_url('assets/lightning/images/map-marker-orange.png')?>',
        iconSize: [20, 20], // size of the icon
        iconAnchor: [10, 20], // point of the icon which will correspond to marker's location
        popupAnchor: [0, -20] // point from which the popup should open relative to the iconAnchor
    });

    var _legend = L.control({
        position: 'bottomright'
    });
    _legend.onAdd = function(mymap) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
        labels.push(
            '<img src="<?= base_url('assets/fb_legends/map-marker-red.png')?>" width="25px" height="25px" >' +
            " Warning" + '<br>');
        labels.push(
            '<img src="<?= base_url('assets/fb_legends/map-marker-orange.png')?>" width="25px" height="25px" >' +
            " Alert" + '<br>');
        labels.push(
            '<img src="<?= base_url('assets/fb_legends/map-marker-yellow.png')?>" width="25px" height="25px" >' +
            " Watch" + '<br>');
        labels.push(
            '<img src="<?= base_url('assets/fb_legends/map-marker-green.png')?>" width="25px" height="25px">' +
            " No Warning" + '<br>');
        div.innerHTML = labels.join('<br>');
        return div;
    };
    _legend.addTo(map);

    //
    document.getElementById('getPic').addEventListener('click', function() {
        html2canvas($("#map"), {
            useCORS: true,
            allowTaint: false,
            onrendered: function(canvas) {
                var image = Canvas2Image.convertToPNG(canvas);
                var image_data = $(image).attr('src');
                var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
                var filename = "map_img_" + random_name + ".jpeg";

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>Facebook_post/getPic",
                    data: {
                        base64: image_data,
                        r_file_name: random_name
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log(data.status, "data.status");
                        if (data.status === 'success') {
                            console.log("Post button");
                        } else {
                            alert("Something went wrong, please check it later");
                        }
                    }
                });
            }
        });
    });

    document.getElementById('postToFacebookBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url("Facebook_post/post_info"); ?>', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.error('Request failed. Error: ' + xhr.status);
            }
        };
        xhr.send();
    });
    </script>
</body>


</html>