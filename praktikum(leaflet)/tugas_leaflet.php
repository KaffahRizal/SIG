<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Praktikum 5 (leaflet)</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
    <style>
        #map { height: 600px; }
    </style>
</head>
<body>
    <h2>Peta Lokasi Kampus di depok</h2>
    <div id="map"></div>

    <script>
        // Langkah 1: Inisialisasi ukuran tampilan awal peta
        var map = L.map('map').setView([-6.35, 106.83], 13);

        // Langkah 2: Tambahkan tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Langkah 3: Data GeoJSON dengan properti "kampus" dan "kota"
        var Kampus = {
            "type": "FeatureCollection",
            "features": [
                
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Kampus B STT-NF",
                        "kota": "Srengseng Sawah, Jakarta Selatan"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.83268996964205, -6.3528652528360965]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Kampus A STT-NF",
                        "kota": "Kelapa Dua, Depok"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.84438500644, -6.362735356783986]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Kampus UI",
                        "kota": "Depok"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8227, -6.3625]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Universitas Pancasila",
                        "kota": "Lenteng Agung, Jakarta Selatan"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8332, -6.3396]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Universitas Gunadarma",
                        "kota": "Kelapa Dua, Depok"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8436, -6.3545]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "kampus": "Polimedia",
                        "kota": "Srengseng Sawah, Jakarta Selatan"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8271, -6.3472]
                    }
                }
            ]
        };

        // Langkah 4: Tampilkan data GeoJSON pada peta
        L.geoJSON(Kampus, {
            onEachFeature: function (feature, layer) {
                var popupContent = "<b>" + feature.properties.kampus + "</b><br>Kota: " + feature.properties.kota;
                layer.bindPopup(popupContent);
            }
        }).addTo(map);
    </script>
</body>
</html>