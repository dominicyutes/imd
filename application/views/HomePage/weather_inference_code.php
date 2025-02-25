<?php if ($this->session->userdata('is_loggedin') == TRUE) { ?>


<!-- HTML <head> -->
<?php $this->load->view('HomePage/header'); ?>

<!-- HTML <body> -->
<?php $this->load->view('HomePage/body'); ?>

<!-- adding JS -->
<?php $this->load->view('HomePage/scripts'); ?>

<script type="text/javascript">

    window.onload = function () {
        var element = document.querySelector('.leaflet-panel-layers-list.leaflet-control-layers-scrollbar');

        if (element) {
            element.style = null;
            element.style.overflow = 'hidden';
        }
    };


    //################################################################################################+
    //------------------------------------------------------------------------------------------------+
    // GRID LINE CODE START
    //------------------------------------------------------------------------------------------------+

    $("body").addClass("sidebar-collapse");
    var wea = L.marker([22.21, 61.56], {
        icon: L.divIcon({
            html: 'NWA',
            className: 'text-marker',
        })
    }).bindTooltip('NORTH WEST ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var nea = L.marker([21.69, 67.34], {
        icon: L.divIcon({
            html: 'NEA',
            className: 'text-marker',
        })
    }).bindTooltip('NORTH EAST ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var wca = L.marker([15.77, 60.68], {
        icon: L.divIcon({
            html: 'WCA',
            className: 'text-marker',
        })
    }).bindTooltip('WEST CENTRAL ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var eca = L.marker([17.37, 67.95], {
        icon: L.divIcon({
            html: 'ECA',
            className: 'text-marker',
        })
    }).bindTooltip('EAST CENTRAL ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var swa = L.marker([8.50, 59.87], {
        icon: L.divIcon({
            html: 'SWA',
            className: 'text-marker',
        })
    }).bindTooltip('SOUTH WEST ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var sea = L.marker([8.87, 68.25], {
        icon: L.divIcon({
            html: 'SEA',
            className: 'text-marker',
        })
    }).bindTooltip('SOUTH EAST ARABIAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var lak = L.marker([9.67, 73.45], {
        icon: L.divIcon({
            html: 'LAK',
            className: 'text-marker',
        })
    }).bindTooltip('LAKSHADWEEP AREA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var mal = L.marker([6.07, 72.85], {
        icon: L.divIcon({
            html: 'MAL',
            className: 'text-marker',
        })
    }).bindTooltip('MALDIVES AREA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var com = L.marker([6.42, 76.68], {
        icon: L.divIcon({
            html: 'COM',
            className: 'text-marker',
        })
    }).bindTooltip('COMORIN AREA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var swb = L.marker([8.23, 83.20], {
        icon: L.divIcon({
            html: 'SWB',
            className: 'text-marker',
        })
    }).bindTooltip('SOUTH WEST BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var seb = L.marker([8.33, 89.36], {
        icon: L.divIcon({
            html: 'SEB',
            className: 'text-marker',
        })
    }).bindTooltip('SOUTH EAST BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var sas = L.marker([7.48, 95.42], {
        icon: L.divIcon({
            html: 'SAS',
            className: 'text-marker',
        })
    }).bindTooltip('SOUTH ANDAMAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var wcb = L.marker([15.09, 84.66], {
        icon: L.divIcon({
            html: 'WCB',
            className: 'text-marker',
        })
    }).bindTooltip('WEST CENTRAL BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var ecb = L.marker([15.19, 90.87], {
        icon: L.divIcon({
            html: 'ECB',
            className: 'text-marker',
        })
    }).bindTooltip('EAST CENTRAL BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var nas = L.marker([11.85, 96.07], {
        icon: L.divIcon({
            html: 'NAS',
            className: 'text-marker',
        })
    }).bindTooltip('NORTH ANDAMAN SEA', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var nwb = L.marker([19.00, 87.59], {
        icon: L.divIcon({
            html: 'NWB',
            className: 'text-marker',
        })
    }).bindTooltip('NORTH WEST BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);
    var neb = L.marker([18.70, 91.83], {
        icon: L.divIcon({
            html: 'NEB',
            className: 'text-marker',
        })
    }).bindTooltip('NORTH EAST BAY OF BENGAL', {
        permanent: false,
        direction: 'auto'
    }).addTo(map);

    var oc =
        '{"type": "FeatureCollection","name": "bob","crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },"features": [{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 63.2, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 57.8, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 83.6, 18.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 90.0, 22.0 ], [ 90.0, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 88.5, 18.0 ], [ 88.5, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 80.27, 13.0 ], [ 92.97, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 93.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 13.0 ], [ 86.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 25.2 ], [ 65.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.0, 8.0 ], [ 75.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 5.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 7.0 ], [ 86.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 7.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 75.0, 8.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.5, 12.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.497353553605507, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 5.0 ], [ 95.36, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 9.0 ], [ 98.2, 9.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 98.26, 8.0 ], [ 96.0, 5.38 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 8.9 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 8.9 ], [ 79.0, 9.260000000000105 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 48.6, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.2, 12.000000000000114 ], [ 52.000000000000114, 12.000000000000114 ], [ 50.715135973047325, 11.999682222026195 ] ] } }]}';
    ocean1 = L.geoJson((JSON.parse(oc)), {
        color: 'grey',
    }).addTo(map);

    function createGrid() {
        var gridLines = [];

        // Create latitude lines passing through longitude 0
        for (var lat = -90; lat <= 90; lat += 10) {
            var line = {
                "type": "Feature",
                "properties": {
                    "Id": 0
                },
                "geometry": {
                    "type": "LineString",
                    "coordinates": [
                        [0, lat],
                        [180, lat]
                    ]
                }
            };
            gridLines.push(line);
        }

        // Create longitude lines passing through latitude 0
        for (var lon = -180; lon <= 180; lon += 10) {
            var line = {
                "type": "Feature",
                "properties": {
                    "Id": 0
                },
                "geometry": {
                    "type": "LineString",
                    "coordinates": [
                        [lon, 0],
                        [lon, 90]
                    ]
                }
            };
            gridLines.push(line);
        }

        return gridLines;
    }
    //------------------------------------------------------------------------------------------------+
    // GRID LINE CODE END
    //------------------------------------------------------------------------------------------------+
    //################################################################################################+
</script>






<script>
    //################################################################################################+
    //------------------------------------------------------------------------------------------------+
    // weather inference code start
    //------------------------------------------------------------------------------------------------+
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("start_dates").addEventListener("change", fetchNames);
    });

    function fetchNames() {
        var selectedDate = document.getElementById("start_dates").value;
        // console.log("Selected date:", selectedDate);
        var ajaxUrl = "";

        <?php if (isset($name)): ?>
            if ('<?php echo $name; ?>' === "Super_Admin_HQ") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/fetch_names'); ?>";
            } else if ('<?php echo $name; ?>' === "MC_Bhubaneswar") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/fetch_names_odisha'); ?>";
            } else if ('<?php echo $name; ?>' === "RMC_NewDelhi") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/fetch_names_delhi'); ?>";
            }
        <?php endif; ?>
        if (ajaxUrl !== "") {
            $.ajax({
                url: ajaxUrl,
                type: "GET",
                data: {
                    date: selectedDate
                },
                // dataType: "json",
                success: function (names) {
                    // console.log("Response:", names);
                    populateDropdown(names);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("Error:", errorThrown);
                }
            });
        } else {
            console.error('Invalid name or AJAX URL not determined.');
        }
    }

    function populateDropdown(names) {
        var dropdown = document.getElementById("subparameter");
        dropdown.innerHTML = "";

        names.forEach(function (item) {
            var option = document.createElement("option");
            option.text = item.name;
            dropdown.add(option);
        });
    }

    var markerDataArray = [];

    // Leaflet draw event listener for drawing layers
    map.on('draw:created', function (e) {
        const layer = e.layer;
        const userText = prompt('Enter Name:');

        if (userText !== null) {
            const geoJSONData = layer.toGeoJSON();
            const lat = geoJSONData.geometry.coordinates[1];
            const lon = geoJSONData.geometry.coordinates[0];
            const fontSize = '20px';
            const tooltipContent = `
                    <div style="
                        background-color: black; 
                        color: white; 
                        padding: 5px; 
                        border: 1px solid white; 
                        border-radius: 3px;
                    ">
                        <p style="font-size: ${fontSize}; margin: 0;">${userText}</p>
                    </div>
                `;
            layer.bindTooltip(tooltipContent, {
                permanent: true,
                direction: 'top',
                opacity: 0.7
            });

            drawnItems.addLayer(layer);

            markerDataArray.push({
                latitude: lat,
                longitude: lon,
                tooltipText: userText
            });

            // console.log(markerDataArray);

            setTimeout(function () {
                layer.openTooltip();
                const tooltip = layer.getTooltip();
                const tooltipContainer = tooltip._container;

                L.DomUtil.addClass(tooltipContainer, 'leaflet-tooltip-draggable');
                L.DomEvent.on(tooltipContainer, 'mousedown', function () {
                    L.DomUtil.addClass(tooltipContainer, 'leaflet-grab');
                });

                const tooltipDraggable = new L.Draggable(tooltipContainer, tooltipContainer);
                tooltipDraggable.enable();
            }, 0);
        }
    });




    var clearLayers = false;

    function toggleDrawing() {
        clearLayers = !clearLayers;

        if (!clearLayers) {
            active_multiple();
            alert("Multiple drawings are now active.");
        } else {
            alert("Only one drawing is now active.");
        }
    }
    var maxDistanceThreshold = 1000000;

    var drawnPolylines = [];
    var drawnMarkers = [];
    function drawPolyline(latitudes, longitudes, name, markersData) {
        // Clear existing data if clearLayers is false
        if (!clearLayers) {
            drawnPolylines.forEach(function (polyline) {
                map.removeLayer(polyline);
            });
            drawnPolylines = [];

            drawnMarkers.forEach(function (marker) {
                map.removeLayer(marker);
            });
            drawnMarkers = [];
        }

        var polylineCoords = [];
        var prevLatLng;

        for (var i = 0; i < latitudes.length; i++) {
            var lat = parseFloat(latitudes[i]);
            var lng = parseFloat(longitudes[i]);
            var currentLatLng = L.latLng(lat, lng);

            if (prevLatLng) {
                var distance = prevLatLng.distanceTo(currentLatLng);

                if (distance >= maxDistanceThreshold) {
                    if (polylineCoords.length > 1) {
                        var polyline = L.polyline(polylineCoords, {
                            color: getRandomColor(),
                            weight: 3,
                            opacity: 0.7,
                            name: name
                        });
                        drawnPolylines.push(polyline);
                        polyline.addTo(map);

                        polylineCoords = [];
                    }
                }
            }

            polylineCoords.push([lat, lng]);

            prevLatLng = currentLatLng;
        }

        if (polylineCoords.length > 1) {
            var polyline = L.polyline(polylineCoords, {
                color: getRandomColor(),
                weight: 3,
                opacity: 0.7,
                name: name
            });
            drawnPolylines.push(polyline);
            polyline.addTo(map);
        }

        if (markersData && markersData.length > 0) {
            markersData.forEach(function (marker) {
                var latLng = L.latLng(marker.latitude, marker.longitude);
                var markerText = marker.tooltipText;
                const fontSize = '20px';

                var customMarker = L.marker(latLng).addTo(map);

                var tooltipContent = `
                                            <div style="
                                                background-color: black; 
                                                color: white; 
                                                padding: 5px; 
                                                border: 1px solid white; 
                                                border-radius: 3px;
                                            ">
                                                <p style="margin: 0; font-size: ${fontSize};">${markerText}</p>
                                            </div>
                                        `;

                customMarker.bindTooltip(tooltipContent, {
                    permanent: true,
                    direction: 'top',
                    opacity: 0.7
                });

                drawnMarkers.push(customMarker);
            });
        }
    }


    function eraseDrawing() {
        var drawnPolylinesLength = drawnPolylines.length;

        if (drawnPolylinesLength > 0) {
            var lastDrawnPolyline = drawnPolylines[drawnPolylinesLength - 1];

            var latlngs = lastDrawnPolyline.getLatLngs();

            if (latlngs.length > 0) {
                latlngs.pop();
                lastDrawnPolyline.setLatLngs(latlngs);
            } else {
                map.removeLayer(lastDrawnPolyline);

                drawnPolylines.pop();
            }
        }
    }




    // Function to handle form submission
    function SubmitForm() {
        var selectedDate = document.getElementById("start_dates").value;
        var selectedSubparameter = document.getElementById("subparameter").value;
        var ajaxUrl;
        <?php if (isset($name)): ?>
            if ('<?php echo $name; ?>' === "Super_Admin_HQ") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/get_lat_long'); ?>";
            } else if ('<?php echo $name; ?>' === "MC_Bhubaneswar") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/get_lat_long_odisha'); ?>";
            } else if ('<?php echo $name; ?>' === "RMC_NewDelhi") {
                ajaxUrl = "<?php echo base_url('Drawings/Drawing/get_lat_long_delhi'); ?>";
            }
        <?php endif; ?>

        if (ajaxUrl) {
            $.ajax({
                type: 'POST',
                url: ajaxUrl,
                data: {
                    date: selectedDate,
                    name: selectedSubparameter
                },
                success: function (response) {
                    // console.log(response);
                    try {
                        var data = JSON.parse(response);

                        // Extract latitudes, longitudes, and markers from the response data
                        var latitudes = data.latitudes.replace(/[{}]/g, '').split(',');
                        var longitudes = data.longitudes.replace(/[{}]/g, '').split(',');
                        var markersData = JSON.parse(data.markers);

                        // Draw polyline on the map using the extracted latitudes, longitudes, and markers data
                        drawPolyline(latitudes, longitudes, selectedSubparameter, markersData);
                    } catch (error) {
                        console.error('Error parsing JSON response:', error);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        } else {
            console.error('Invalid name or AJAX URL not determined.');
        }
    }

    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete?");

        if (confirmation) {
            deleteDrawing();
        }
    }

    function deleteDrawing() {
        var selectedDate = document.getElementById("start_dates").value;
        var selectedSubparameter = document.getElementById("subparameter").value;

        // Make AJAX request to server to delete row data
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Drawings/Drawing/delete_row'); ?>",
            data: {
                date: selectedDate,
                name: selectedSubparameter
            },
            success: function (response) {
                // console.log(response, 'asjbfadkshbk');
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }




    // Weather Inference 
    var WeatherInferenceControl = L.Control.extend({
        options: {
            position: 'topleft'
        },
        onAdd: function () {
            var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');


            container.style.top = '-574px';
            container.style.left = '54px';
            container.style.display = 'flex';

            var weatherInferenceControl = L.DomUtil.create('span', 'custom-btn5', container);
            weatherInferenceControl.innerHTML = 'Weather Inference';
            weatherInferenceControl.style.fontSize = '15px';
            weatherInferenceControl.style.fontFamily = 'Times New Roman'



            var entryCount = 0;
            var firstEntryDate = null;
            var savedData = [];

            L.DomEvent.on(weatherInferenceControl, 'click', function () {
                weatherinference();


                var layerNoneDiv = document.getElementById('layerNone');
                var layerAvaDiv = document.getElementById('layerAva');

                if (layerNoneDiv) {
                    if (layerNoneDiv.style.display === 'none' || layerNoneDiv.style.display === '') {
                        layerNoneDiv.style.display = 'flex';
                        if (layerAvaDiv) {

                            layerAvaDiv.style.display = 'none';

                        }
                    } else {
                        layerNoneDiv.style.display = 'none';
                        if (layerAvaDiv) {
                            layerAvaDiv.style.display = 'flex';
                        }
                    }
                }
            });

            return container;
        }
    });

    new WeatherInferenceControl().addTo(map);


    (function () {
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        var isFreehandMode = false;
        var isDrawing = false;
        var polyline = null;
        var eraseMode = false;
        var selectedColor = 'red';
        var drawnItems = L.featureGroup().addTo(map);

        function startDrawing() {
            isDrawing = true;
            polyline = L.polyline([], {
                weight: 4,
                color: eraseMode ? 'transparent' : selectedColor,
                dashArray: '5, 5'
            }).addTo(drawnItems);
        }

        function stopDrawing() {
            isDrawing = false;
            polyline = null;
        }

        var freehandButton = L.control({
            position: 'topleft'
        });

        freehandButton.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-bar');
            div.style.top = '-162px';
            div.innerHTML = `
                            <button id="freehandButton" style="font-family: 'Times New Roman'; background-color: white; border: 1px solid black; position: relative; ">Freehand</button>
                            <input type="color" id="colorPicker" style="position: relative; display: none;width: 69px;" value="#ff0000">
                        `;

            setTimeout(function () {
                var freehandBtn = document.getElementById('freehandButton');
                var colorPicker = document.getElementById('colorPicker');

                freehandBtn.addEventListener('click', function () {
                    if (isFreehandMode) {
                        isFreehandMode = false;
                        map.dragging.enable();
                        freehandBtn.style.backgroundColor = 'white';
                        colorPicker.style.display = 'none';
                    } else {
                        isFreehandMode = true;
                        map.dragging.disable();
                        freehandBtn.style.backgroundColor = 'green';
                        colorPicker.style.display = 'block';
                    }
                });

                colorPicker.addEventListener('input', function () {
                    selectedColor = this.value;
                });
            }, 0);

            return div;
        };

        freehandButton.addTo(map);

        var eraseButton = L.control({
            position: 'topleft'
        });
        eraseButton.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-bar');
            div.innerHTML =
                '<button id="eraseButton" style="background-color: white; border: 0px solid black; position: absolute; top: -163px;">Erase</button>';

            div.firstChild.addEventListener('click', function () {
                eraseMode = !eraseMode;
                if (eraseMode) {
                    document.getElementById('eraseButton').style.backgroundColor = 'green';
                } else {
                    document.getElementById('eraseButton').style.backgroundColor = 'red';
                }
            });
            return div;
        };
        eraseButton.addTo(map);

        var clearLayersButton = L.control({
            position: 'topleft'
        });
        clearLayersButton.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-bar');
            div.innerHTML =
                '<button id="clearLayersButton" style="background-color: white; border: 0px solid black; position: absolute; top: -138px; white-space: nowrap;">Clear All</button>';

            div.firstChild.addEventListener('click', function () {
                // Remove all layers from the map
                drawnItems.clearLayers();
                markerDataArray = [];
                console.log(markerDataArray);

            });
            return div;
        };
        clearLayersButton.addTo(map);


        // Leaflet control for the download button
        var getCoordinatesButton = L.control({
            position: 'topleft'
        });

        getCoordinatesButton.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-bar');
            div.innerHTML =
                '<button id="getCoordinatesButton" style="background-color: white; border: 0px solid black; position: absolute; top: -212px; right: -96px;"><i class="fa fa-download"></i></button>';

            div.firstChild.addEventListener('click', function () {
                var name = prompt('Enter a name for the coordinates:');
                if (name !== null && name.trim() !== '') {
                    var allCoordinates = {
                        latitudes: [],
                        longitudes: [],
                        markers: markerDataArray,
                    };

                    drawnItems.eachLayer(function (layer) {
                        if (layer instanceof L.Polyline) {
                            var coordinates = layer.getLatLngs();
                            coordinates.forEach(function (latlng) {
                                allCoordinates.latitudes.push(latlng.lat);
                                allCoordinates.longitudes.push(latlng.lng);
                            });
                        }
                    });

                    if (allCoordinates.latitudes.length > 0 && allCoordinates.longitudes.length > 0) {
                        var currentDate = new Date().toISOString().split('T')[0];
                        var data = {
                            name: name,
                            latitudes: allCoordinates.latitudes,
                            longitudes: allCoordinates.longitudes,
                            markers: allCoordinates.markers,
                            date: currentDate
                        };

                        var jsonData = JSON.stringify(data);

                        var ajaxUrl;
                        <?php if (isset($name)): ?>
                            if ('<?php echo $name; ?>' === "Super_Admin_HQ") {
                                ajaxUrl = "<?php echo base_url('Drawings/Drawing/save_coordinates'); ?>";
                            } else if ('<?php echo $name; ?>' === "MC_Bhubaneswar") {
                                ajaxUrl = "<?php echo base_url('Drawings/Drawing/save_coordinates_odisha'); ?>";
                            } else if ('<?php echo $name; ?>' === "RMC_NewDelhi") {
                                ajaxUrl = "<?php echo base_url('Drawings/Drawing/save_coordinates_delhi'); ?>";
                            }
                        <?php endif; ?>

                        if (ajaxUrl) {
                            $.ajax({
                                type: 'POST',
                                url: ajaxUrl,
                                data: jsonData,
                                success: function (response) {
                                    console.log(response);
                                },
                                error: function (xhr, status, error) {
                                    console.error('Error:', error);
                                }
                            });
                        } else {
                            console.error('Invalid name or AJAX URL not determined.');
                        }
                    } else {
                        alert('No coordinates available. Draw a polyline first.');
                    }
                }
            });

            return div;
        };

        getCoordinatesButton.addTo(map);
        //drawing co-ordinates end


        map.on('mousedown', function (event) {
            if (isFreehandMode && event.originalEvent.button === 0) {
                if (!isDrawing) {
                    startDrawing();
                    map.dragging.disable();
                }
            }
        });

        map.on('mousemove', function (event) {
            if (isDrawing) {
                polyline.addLatLng(event.latlng);
            }
        });

        document.addEventListener('mouseup', function (event) {
            if (isDrawing && event.button === 0) {
                stopDrawing();
                map.dragging.enable();
            }
        });

        map.on('click', function (event) {
            if (eraseMode) {
                var layers = drawnItems.getLayers();
                var lastLayerIndex = layers.length - 1;

                if (lastLayerIndex >= 0) {
                    var lastLayer = layers[lastLayerIndex];
                    if (lastLayer instanceof L.Polyline) {
                        var latlngs = lastLayer.getLatLngs();
                        if (latlngs.length > 0) {
                            latlngs.pop(); // Remove the last point from the polyline
                            lastLayer.setLatLngs(latlngs);
                        } else {
                            // If no points are left, remove the entire layer
                            drawnItems.removeLayer(lastLayer);
                        }
                    }
                }
            }
        });



    })();


    //------------------------------------------------------------------------------------------------+
    // weather inference code end
    //------------------------------------------------------------------------------------------------+
    //################################################################################################+

</script>





<script>
    //################################################################################################+
    //------------------------------------------------------------------------------------------------+
    // print code start
    //------------------------------------------------------------------------------------------------+
    //function generate_report_and_save() {
    $(".printbutton").click(function () {
        $(".printbutton").addClass('running');
        html2canvas($("#map"), {
            useCORS: true,
            allowTaint: false,
            onrendered: function (canvas) {
                var image = Canvas2Image.convertToPNG(canvas);
                var image_data = $(image).attr('src');
                var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>Welcome/saveReportImg",
                    data: {
                        base64: image_data,
                        r_file_name: random_name
                    },
                    success: function (data, status) {
                        var _status = status;
                        if (_status == 'success') {
                            var win = window.open('<?php echo base_url() ?>' + data,
                                '_blank');
                            if (win) {
                                win.focus();
                            } else {
                                alert('Please allow popups for this website');
                            }
                        } else {
                            alert("Something wrong with your please check it later");
                        }
                    }
                });
            }
        });

    });
</script>

<script>
    $(document).ready(function () {
        $(".printbutton").on("click", function () {
            let printlegenddata = document.getElementById('printlegend').innerHTML;
            // console.log("printasdjkhcvjks", printlegenddata);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('welcome/legends'); ?>",
                data: {
                    content: printlegenddata
                }, // Changed userId to content
                success: function (response) {
                    console.log("resp", response);
                },
                error: function (error) {
                    console.error('error', error);
                }
            });
        })
    });
</script>

<script src="leaflet.browser.print.min.js"></script>
<script>
    var browserControl = L.control.browserPrint().addTo(map);

    // css
    browserControl.getContainer().style.top = '-119px';
    //------------------------------------------------------------------------------------------------+
    // print code end
    //------------------------------------------------------------------------------------------------+
    //################################################################################################+
</script>


<?php } ?>