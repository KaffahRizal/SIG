<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Leaflet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
    <style>
        #map { height: 600px; }
    </style>
</head>
<body>


    <div id="map"></div>

    <script>
        var map = L.map('map').setView([-6.2, 106.82], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var loi = {
            "type": "FeatureCollection",
            "features": [
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Gelora Bung Karno",
                        "kota": "Jakarta Pusat"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.80267319009613, -6.218437059709231]
                    },
                    "id": 0
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Monas",
                        "kota": "Jakarta Pusat"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8271657681334, -6.175406236858407]
                    },
                    "id": 1
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "TMII",
                        "kota": "Jakarta Timur"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.89450322470225, -6.302157767724708]
                    },
                    "id": 2
                }
            ]
        };

        L.geoJSON(loi, {
            onEachFeature: function (feature, layer) {
                var popupContent = "<b>" + feature.properties.nama + "</b><br>Kota: " + feature.properties.kota;
                layer.bindPopup(popupContent);
            }
        }).addTo(map);
    </script>
</body>
</html>
