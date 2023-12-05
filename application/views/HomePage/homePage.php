<!DOCTYPE html>
<html>

<head>
    <title>IMD_DSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrows-expand-right-alt.css' rel='stylesheet'>

    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <!-- leaflet-draw CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
    <!-- Include Leaflet fullscreen CSS -->
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />
    <!-- Include Leaflet LocationSearch CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <!-- Include Leaflet mouseposition CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.css"
        rel="stylesheet">
    <!-- Include Leaflet styleEditor CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/css/Leaflet.StyleEditor.min.css"
        rel="stylesheet">
    <!-- leaflet-panel-layers -->
    <link href="
https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.css
" rel="stylesheet">

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Include Leaflet JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <!-- Include Leaflet fullscreen JS-->
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <!-- leaflet-draw JS -->
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <!-- Include Leaflet LocationSearch JS -->
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <!-- Include Leaflet mouseposition JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.js"></script>
    <!-- Include Leaflet styleEditor JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/javascript/Leaflet.StyleEditor.min.js">
    </script>
    <!-- leaflet-panel-layers -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.js"></script>
    <!-- leaflet-heat-layers -->
    <!-- <script src="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.js"></script> -->
    <!-- <script src="leaflet-heat.js"></script>
    <script src="esri-leaflet-geocoder.js"></script> -->
    <!-- Leaflet AJAX plugin -->
    <script src="https://unpkg.com/leaflet-ajax@2.1.0/dist/leaflet.ajax.js"></script>
    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- adding css -->
    <?php $this->load->view('HomePage/style'); ?>

</head>

<body>
    <!-- nav start here -->
    <div style="width: 100%;" class="mx-auto">
        <div class="text-end pr-2">
            <span class="minsistry-text">WEATHER DECISION SUPPORT SYSTEM</span>
        </div>
    </div>

    <!-- <div style="width: 92%; margin-bottom:1em; background-color:#ffffff;" class="mx-auto">
        <div class="text-center"
            style="background-image: linear-gradient(to right top, #eae0e0, #efe8ea, #f3f0f2, #f9f7f9, #ffffff); padding: 10px 0px 10px 0px;">
            <span class="minsistry-text">Weather Decison Support System</span>
        </div> -->

    <!-- navbar -->
    <div style="width: 100%; margin-bottom:1em; background-color:#fff;" class="mx-auto">
        <div style="display:flex;padding:0.2em 0.2em 0.2em 1.3em" class="mx-auto heightChange">
            <div style="width: 100%;display: flex;">
                <div class="d-flex flex-wrap w-100 gx-3 gy-3 mt-1" id="parent" style="justify-content: space-between">

                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="exposure">Exposure</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="metar">Metar</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="synop">Synop</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="radar">Radar</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="satellite">Satellite</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="lightning">Lightining</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="sounding">Sounding</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="ship_and_buoy">Ship and Buoy</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="mesolscale">Mesolscale Forecast</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="medium_range">Medium Range</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val">Export Polygon</p>
                        <div class="underline"></div>
                    </button>
                    <!-- <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" onclick="toggleObservation()">Observation
                        </p>
                        <div class="underline"></div>
                    </button> -->
                </div>
            </div>
            <!-- <div style="width:12%; flex-direction:column;padding-top: 0.5em;" class="d-flex expo-polygon-parent btn">
                <p class="exp_poly " id="export_polygon">Export Polygon</p>
            </div>

            <div style="width:12%; flex-direction:column; padding-top: 0.5em; margin-left:0.6em;"
                class="d-flex expo-polygon-parent btn">
                <p class="exp_poly " id="export_polygon" onclick="toggleObservation()">OBSERVATION</p>
            </div> -->
            <!-- <div class="row optionsMap" style="display: contents;"> -->
            <!-- <button id="observationBtn expo-polygon-parent btn" style="margin-left:0.6em; text-align:center;color:#fff;width:12%; flex-direction:column;padding-top: 0.5em;" class="d-flex expo-polygon-parent btn"  onclick="toggleObservation()">OBSERVATION</button> -->
            <!-- </div> -->
        </div>
    </div>
    <!-- nav ends here -->
    <!-- <div id="particles-js"></div> -->

    <!--Observation BTN , LEAFLETJS -->

    <!-- </br> -->
    <!-- <div class="row"> -->
    <!-- <div class="col-9" style="z-index: 999;"> -->
    <!-- </div>
            <div class="col-3">
                <div class=" wrapper bar" onclick="toggleFunction()">
                    <i class="gg-arrows-expand-right-alt"></i>
                </div>
                <div id="toggleImage">
                    <img id="legend1" src="http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png" alt="legend"
                        class="legend1" />
                    <img id="legend2" src="http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png" alt="legend"
                        class="legend2" />
                </div>

            </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- style="width: 7em;color: #00aa55; background-color:#00aa55 ; cursor: pointer;border: none;height: 2em;margin-top: 2px;margin-left: 1.35em; margin-bottom:2px;color: white;" -->

    <!-- <button id="popup" class="submitBtn">Legend</button> -->

    <div class="row">
        <div id="map" class="col-10"></div>
        <div id="ObservationContainer" class="hidden col-2">
            <!-- model -->
            <div>
                <label for="modelNames" class="firstDDLabel">Model:</label>
                <select class="firstDD" id="modelNames" onchange="showParameterNames(this.value)" &nbsp;>
                </select>
            </div>
            <span>&nbsp;</span>
            <!-- parameter -->
            <div>
                <label for="parameter" class="secondDDLabel">parameter:</label>
                <select class="secondDD" id="parameterNames" class="dropdownSelect"
                    onchange="showSubParameterNames(this.value)" &nbsp;>
                </select>
            </div>
            <span>&nbsp;</span>
            <!-- SubParameter -->
            <div>
                <label for="subparameter" class="thirdDDLabel">SubParameter</label>
                <select class="thirdDD" id="subparameter" class="dropdownSelect" &nbsp;>
                </select>
            </div>
            <span>&nbsp;</span>


            <div>
                <!-- Date -->
                <label for="start_date" class="dateDDLabel">Start Date:</label>
                <input type="date" id="start_date" onchange="logSelectedDate()" class="dateDD">
            </div>
            <span>&nbsp;</span>
            <div>
                <label for="end_date" class="dateDDLabel">End Date:</label>
                <input type="date" id="end_date" onchange="logSelectedDate()" class="dateDD">
            </div>
            <span>&nbsp;</span>
            <div>
                <span style="display: contents;">
                    <label for="hourSelect" class="TimeLabel">Time:</label>
                    <select id="hourSelect" class="TimeHR">
                    </select>
                    <select id="minuteSelect" class="TimeMin">
                    </select>
                </span>
            </div>
            </select>

            <!-- Submit -->
            <button id="submitButton" onclick="submitForm()" class="submitBtn">Submit</button>
        </div>

        </form>
    </div>
    </div>

    <div style="background-color: white;">Legend2</div>

    <!-- model popup -->
    <div class="model" style="display: none; left: 253px; top: 94px; height:0;">
        <div class="model-body" style="position: relative;">
            <div
                style="z-index: 999 ;display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 10px; border-radius: 10px; align-items: center;">
                <legend style="font-size: 12px; cursor: pointer;">❌</legend>
                <h4 style="margin: 0 auto;">Selected Parameters</h4>
            </div>

            <div class="row" id="Light_RadarRow" style="display: none;">
                <div>
                    <!-- HomePage-Lightning -->
                    <h5 id="panelLayer-Lightning-Title"></h5>
                    <p id="panelLayer-Lightning-lists"></p>

                    <!-- HomePage-Radar -->
                    <h5 id="panelLayer-radar-Title"></h5>
                    <p id="panelLayer-radar-lists" style="display: flex; flex-wrap: wrap;"></p>
                </div>
            </div>

            <div style="display: flex; flex-wrap: wrap;">
                <!-- Exposure -->
                <div id="ExposureRow" style="display: none; ">
                    <h4 id="EXPOSURE" style=" border-radius: 8px; background-color: yellow;  text-align: center;">
                        EXPOSURE
                    </h4>
                    <h5 id="exposure-layers-Title" style="color: red;"></h5>
                    <p id="exposure-layers-lists" style="display: flex; flex-wrap: wrap;">
                </div>

                <!-- METAR -->
                <div id="METAR_Row">
                    <!-- <div class="col-5"> -->
                    <!-- HomePage-Lightning -->
                    <h4 id="METAR" style=" border-radius: 8px; background-color: yellow; text-align: center;"></h4>
                    <!-- METAR00UTC -->
                    <h5 id="METAR00UTC-Title" style="color: red;"></h5>
                    <p id="METAR00UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR01UTC-Title" style="color: red;"></h5>
                    <p id="METAR01UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR02UTC-Title" style="color: red;"></h5>
                    <p id="METAR02UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR03UTC-Title" style="color: red;"></h5>
                    <p id="METAR03UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR04UTC-Title" style="color: red;"></h5>
                    <p id="METAR04UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR05UTC-Title" style="color: red;"></h5>
                    <p id="METAR05UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR06UTC-Title" style="color: red;"></h5>
                    <p id="METAR06UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR07UTC-Title" style="color: red;"></h5>
                    <p id="METAR07UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR08UTC-Title" style="color: red;"></h5>
                    <p id="METAR08UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR09UTC-Title" style="color: red;"></h5>
                    <p id="METAR09UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR10UTC-Title" style="color: red;"></h5>
                    <p id="METAR10UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR11UTC-Title" style="color: red;"></h5>
                    <p id="METAR11UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR12UTC-Title" style="color: red;"></h5>
                    <p id="METAR12UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR13UTC-Title" style="color: red;"></h5>
                    <p id="METAR13UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR14UTC-Title" style="color: red;"></h5>
                    <p id="METAR14UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR15UTC-Title" style="color: red;"></h5>
                    <p id="METAR15UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR16UTC-Title" style="color: red;"></h5>
                    <p id="METAR16UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR17UTC-Title" style="color: red;"></h5>
                    <p id="METAR17UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR18UTC-Title" style="color: red;"></h5>
                    <p id="METAR18UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR19UTC-Title" style="color: red;"></h5>
                    <p id="METAR19UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR20UTC-Title" style="color: red;"></h5>
                    <p id="METAR20UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR21UTC-Title" style="color: red;"></h5>
                    <p id="METAR21UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR22UTC-Title" style="color: red;"></h5>
                    <p id="METAR22UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                    <h5 id="METAR23UTC-Title" style="color: red;"></h5>
                    <p id="METAR23UTC-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>
                    <!-- METAR01UTC -->
                    <!-- <h5 id="METAR01UTC-Title"></h5>
                        <p id="METAR01UTC-lists"></p> -->
                    <!-- </div> -->
                    <!-- <div class="col-7">
                        <img id="legendModelMetar" alt="legendMetar" style="width: 72%; height: 35vh;" />
                    </div> -->
                </div>

                <!-- SYNOP -->
                <div class="row" id="SYNOP_Row" style="display: none;">
                    <h4 id="SYNOP" style=" border-radius: 8px; background-color: yellow; text-align: center;"></h4>

                    <h5 id="SYNOP00UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP00UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP03UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP03UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP06UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP06UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP09UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP09UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP12UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP12UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP15UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP15UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP18UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP18UTC-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SYNOP21UTC-Title" style="color: red;"></h5>
                    <p id="SYNOP21UTC-lists" style="display: flex; flex-wrap: wrap;"></p>
                </div>

                <!-- Radar -->
                <div class="row" id="RADAR_Row" style="display: none;">
                    <h4 id="RADARPRODUCTS" style=" border-radius: 8px; background-color: yellow; text-align: center;">
                    </h4>

                    <h5 id="RADARPRODUCTS-Title" style="color: red;"></h5>
                    <p id="RADARPRODUCTS-lists" style="display: flex; flex-wrap: wrap;"></p>
                </div>

                <!-- SATELLITE -->
                <div class="row" id="SATELLITE_Row" style="display: none;">
                    <h4 id="SATELLITE" style=" border-radius: 8px; background-color: yellow; text-align: center;">
                    </h4>

                    <h5 id="SATELLITE-Title" style="color: red;"></h5>
                    <p id="SATELLITE-lists" style="display: flex; flex-wrap: wrap;"></p>

                </div>

                <!-- LIGHTINING -->
                <div class="row" id="LIGHTINING_Row" style="display: none;">
                    <h4 id="LIGHTINING" style=" border-radius: 8px; background-color: yellow; text-align: center;">
                    </h4>

                    <h5 id="LIGHTINING-Title" style="color: red;"></h5>
                    <p id="LIGHTINING-lists" style="display: flex; flex-wrap: wrap;"></p>

                </div>
                <!-- SOUNDING -->
                <div class="row" id="SOUNDING_Row" style="display: none;">
                    <h4 id="SOUNDING" style=" border-radius: 8px; background-color: yellow; text-align: center;"></h4>

                    <h5 id="SOUNDING00UTCWIND-Title" style="color: red;"></h5>
                    <p id="SOUNDING00UTCWIND-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SOUNDING12UTCWIND-Title" style="color: red;"></h5>
                    <p id="SOUNDING12UTCWIND-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SOUNDING00UTCTEMP-Title" style="color: red;"></h5>
                    <p id="SOUNDING00UTCTEMP-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SOUNDING12UTCTEMP-Title" style="color: red;"></h5>
                    <p id="SOUNDING12UTCTEMP-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SOUNDING00UTCDEWPOINT-Title" style="color: red;"></h5>
                    <p id="SOUNDING00UTCDEWPOINT-lists" style="display: flex; flex-wrap: wrap;"></p>

                    <h5 id="SOUNDING12UTCDEWPOINT-Title" style="color: red;"></h5>
                    <p id="SOUNDING12UTCDEWPOINT-lists" style="display: flex; flex-wrap: wrap;"></p>

                </div>
                <!-- SHIPANDBUOY -->
                <div class="row" id="SHIPANDBUOY_Row" style="display: none;">
                    <h4 id="SHIPANDBUOY" style=" border-radius: 8px; background-color: yellow; text-align: center;">
                    </h4>
                    <h5 id="SHIPANDBUOY-Title" style="color: red;"></h5>
                    <p id="SHIPANDBUOY-lists"></p>
                </div>
                <!-- MESOLSCALE -->
                <div class="row" id="MESOLSCALE_Row" style="display: none;">
                    <h4 id="MESOLSCALE" style=" border-radius: 8px; background-color: yellow; text-align: center;"></h4>

                    <h5 id="WRFReflectivity-Title" style="color: red;"></h5>
                    <p id="WRFReflectivity-lists"></p>

                    <h5 id="WRFlightningProduct-Title" style="color: red;"></h5>
                    <p id="WRFlightningProduct-lists"></p>

                    <h5 id="WRFAccumlatedRainfall-Title" style="color: red;"></h5>
                    <p id="WRFAccumlatedRainfall-lists"></p>

                    <h5 id="lightningPotentialindex-Title" style="color: red;"></h5>
                    <p id="lightningPotentialindex-lists"></p>

                    <h5 id="NCUMRlightningProduct-Title" style="color: red;"></h5>
                    <p id="NCUMRlightningProduct-lists"></p>

                    <h5 id="NCUMRWindGust-Title" style="color: red;"></h5>
                    <p id="NCUMRWindGust-lists"></p>

                    <h5 id="NCUMRRainfall-Title" style="color: red;"></h5>
                    <p id="NCUMRRainfall-lists"></p>

                    <h5 id="HRRR_SPHourlyDBZ-Title" style="color: red;"></h5>
                    <p id="HRRR_SPHourlyDBZ-lists"></p>

                    <h5 id="HRRR_NEHourlyDBZ-Title" style="color: red;"></h5>
                    <p id="HRRR_NEHourlyDBZ-lists"></p>

                    <h5 id="HRRR_NWHourlyDBZ-Title" style="color: red;"></h5>
                    <p id="HRRR_NWHourlyDBZ-lists"></p>

                    <h5 id="EWRFMaxZ-Title" style="color: red;"></h5>
                    <p id="EWRFMaxZ-lists"></p>

                    <h5 id="EWRFLightning-Title" style="color: red;"></h5>
                    <p id="EWRFLightning-lists"></p>

                </div>
                <!-- MEDIUM -->
                <div class="row" id="MEDIUM_Row" style="display: none;">
                    <h4 id="MEDIUM" style=" border-radius: 8px; background-color: yellow; text-align: center;"></h4>

                    <h5 id="RainfallIntensityDay1-Title" style="color: red;"></h5>
                    <p id="RainfallIntensityDay1-lists"></p>

                    <h5 id="RainfallIntensityDay2-Title" style="color: red;"></h5>
                    <p id="RainfallIntensityDay2-lists"></p>

                    <h5 id="RainfallIntensityDay3-Title" style="color: red;"></h5>
                    <p id="RainfallIntensityDay3-lists"></p>

                    <h5 id="RainfallIntensityDay4-Title" style="color: red;"></h5>
                    <p id="RainfallIntensityDay4-lists"></p>

                    <h5 id="RainfallIntensityDay5-Title" style="color: red;"></h5>
                    <p id="RainfallIntensityDay5-lists"></p>

                    <h5 id="MSLPDay1-Title" style="color: red;"></h5>
                    <p id="MSLPDay1-lists"></p>

                    <h5 id="MSLPDay2-Title" style="color: red;"></h5>
                    <p id="MSLPDay2-lists"></p>

                    <h5 id="MSLPDay3-Title" style="color: red;"></h5>
                    <p id="MSLPDay3-lists"></p>

                    <h5 id="MSLPDay4-Title" style="color: red;"></h5>
                    <p id="MSLPDay4-lists"></p>

                    <h5 id="MSLPDay5-Title" style="color: red;"></h5>
                    <p id="MSLPDay5-lists"></p>

                    <h5 id="mWINDDay1-Title" style="color: red;"></h5>
                    <p id="mWINDDay1-lists"></p>

                    <h5 id="mWINDDay2-Title" style="color: red;"></h5>
                    <p id="mWINDDay2-lists"></p>

                    <h5 id="mWINDDay3-Title" style="color: red;"></h5>
                    <p id="mWINDDay3-lists"></p>

                    <h5 id="mWINDDay4-Title" style="color: red;"></h5>
                    <p id="mWINDDay4-lists"></p>

                    <h5 id="mWINDDay5-Title" style="color: red;"></h5>
                    <p id="mWINDDay5-lists"></p>

                </div>

            </div>
        </div>

        <!-- adding JS -->
        <?php $this->load->view('HomePage/scripts'); ?>
</body>

</html>