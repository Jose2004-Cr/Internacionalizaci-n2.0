
var map = L.map('location', {
    fullscreenControl: true
}).setView([10.39972, -75.51444], 13);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {

    attribution: false
}).addTo(map);


var locations = [{
    coords: [10.39568, -75.49543],
    name: 'Sede Norte'
},
{
    coords: [33.93911, 67.709953],
    name: "Afghanistan"
},
{
    coords: [41.1533, 20.1683],
    name: "Albania"
},
{
    coords: [28.0339, 1.6596],
    name: "Algeria"
},
{
    coords: [42.5063, 1.5218],
    name: "Andorra"
},
{
    coords: [-11.2027, 17.8739],
    name: "Angola"
},
{
    coords: [17.0608, -61.7964],
    name: "Antigua and Barbuda"
},
{
    coords: [-38.4161, -63.6167],
    name: "Argentina"
},
{
    coords: [40.0691, 45.0382],
    name: "Armenia"
},
{
    coords: [-25.2744, 133.7751],
    name: "Australia"
},
{
    coords: [47.5162, 14.5501],
    name: "Austria"
},
{
    coords: [40.1431, 47.5769],
    name: "Azerbaijan"
},
{
    coords: [25.0343, -77.3963],
    name: "Bahamas"
},
{
    coords: [25.9304, 50.6378],
    name: "Bahrain"
},
{
    coords: [23.6850, 90.3563],
    name: "Bangladesh"
},
{
    coords: [13.1939, -59.5432],
    name: "Barbados"
},
{
    coords: [53.7098, 27.9534],
    name: "Belarus"
},
{
    coords: [50.8503, 4.3517],
    name: "Belgium"
},
{
    coords: [17.1899, -88.4976],
    name: "Belize"
},
{
    coords: [9.3077, 2.3158],
    name: "Benin"
},
{
    coords: [27.5142, 90.4336],
    name: "Bhutan"
},
{
    coords: [-16.2902, -63.5887],
    name: "Bolivia"
},
{
    coords: [43.9159, 17.6791],
    name: "Bosnia and Herzegovina"
},
{
    coords: [-22.3285, 24.6849],
    name: "Botswana"
},
{
    coords: [-14.2350, -51.9253],
    name: "Brazil"
},
{
    coords: [4.5353, 114.7277],
    name: "Brunei"
},
{
    coords: [42.7339, 25.4858],
    name: "Bulgaria"
},
{
    coords: [12.2383, -1.5616],
    name: "Burkina Faso"
},
{
    coords: [-3.3731, 29.9189],
    name: "Burundi"
},
{
    coords: [16.5388, -23.0418],
    name: "Cabo Verde"
},
{
    coords: [12.5657, 104.9910],
    name: "Cambodia"
},
{
    coords: [7.3697, 12.3547],
    name: "Cameroon"
},
{
    coords: [56.1304, -106.3468],
    name: "Canada"
},
{
    coords: [6.6111, 20.9394],
    name: "Central African Republic"
},
{
    coords: [15.4542, 18.7322],
    name: "Chad"
},
{
    coords: [-35.6751, -71.5430],
    name: "Chile"
},
{
    coords: [35.8617, 104.1954],
    name: "China"
},
{
    coords: [4.5709, -74.2973],
    name: "Colombia"
},
{
    coords: [-11.6455, 43.3333],
    name: "Comoros"
},
{
    coords: [-0.2280, 15.8277],
    name: "Congo (Congo-Brazzaville)"
},
{
    coords: [9.7489, -83.7534],
    name: "Costa Rica"
},
{
    coords: [45.1, 15.2],
    name: "Croatia"
},
{
    coords: [21.5218, -77.7812],
    name: "Cuba"
},
{
    coords: [35.1264, 33.4299],
    name: "Cyprus"
},
{
    coords: [49.8175, 15.4730],
    name: "Czechia (Czech Republic)"
},
{
    coords: [-4.0383, 21.7587],
    name: "Democratic Republic of the Congo"
},
{
    coords: [56.2639, 9.5018],
    name: "Denmark"
},
{
    coords: [11.8251, 42.5903],
    name: "Djibouti"
},
{
    coords: [15.4149, -61.370976],
    name: "Dominica"
},
{
    coords: [18.7357, -70.1627],
    name: "Dominican Republic"
},
{
    coords: [-1.8312, -78.1834],
    name: "Ecuador"
},
{
    coords: [26.8206, 30.8025],
    name: "Egypt"
},
{
    coords: [13.7942, -88.8965],
    name: "El Salvador"
},
{
    coords: [1.6508, 10.2679],
    name: "Equatorial Guinea"
},
{
    coords: [15.1794, 39.7823],
    name: "Eritrea"
},
{
    coords: [58.5953, 25.0136],
    name: "Estonia"
},
{
    coords: [9.145, 40.4897],
    name: "Ethiopia"
},
{
    coords: [-17.7134, 178.065],
    name: "Fiji"
},
{
    coords: [61.9241, 25.7482],
    name: "Finland"
},
{
    coords: [46.6034, 1.8883],
    name: "France"
},
{
    coords: [-0.8037, 11.6094],
    name: "Gabon"
},
{
    coords: [13.4432, -15.3101],
    name: "Gambia"
},
{
    coords: [32.1656, -82.9001],
    name: "Georgia"
},
{
    coords: [51.1657, 10.4515],
    name: "Germany"
},
{
    coords: [7.9465, -1.0232],
    name: "Ghana"
},
{
    coords: [39.0742, 21.8243],
    name: "Greece"
},
{
    coords: [12.1165, -61.679],
    name: "Grenada"
},
{
    coords: [15.7835, -90.2308],
    name: "Guatemala"
},
{
    coords: [9.9456, -9.6966],
    name: "Guinea"
},
{
    coords: [11.8037, -15.1804],
    name: "Guinea-Bissau"
},
{
    coords: [4.8604, -58.9302],
    name: "Guyana"
},
{
    coords: [18.9712, -72.2852],
    name: "Haiti"
},
{
    coords: [15.2, -86.2419],
    name: "Honduras"
},
{
    coords: [47.1625, 19.5033],
    name: "Hungary"
},
{
    coords: [64.9631, -19.0208],
    name: "Iceland"
},
{
    coords: [20.5937, 78.9629],
    name: "India"
},
{
    coords: [-0.7893, 113.9213],
    name: "Indonesia"
},
{
    coords: [32.4279, 53.688],
    name: "Iran"
},
{
    coords: [33.2232, 43.6793],
    name: "Iraq"
},
{
    coords: [53.4129, -8.2439],
    name: "Ireland"
},
{
    coords: [31.0461, 34.8516],
    name: "Israel"
},
{
    coords: [41.8719, 12.5674],
    name: "Italy"
},
{
    coords: [18.1096, -77.2975],
    name: "Jamaica"
},
{
    coords: [36.2048, 138.2529],
    name: "Japan"
},
{
    coords: [30.5852, 36.2384],
    name: "Jordan"
},
{
    coords: [48.0196, 66.9237],
    name: "Kazakhstan"
},
{
    coords: [-0.0236, 37.9062],
    name: "Kenya"
},
{
    coords: [-3.3704, -168.734],
    name: "Kiribati"
},
{
    coords: [29.3117, 47.4818],
    name: "Kuwait"
},
{
    coords: [41.2044, 74.7661],
    name: "Kyrgyzstan"
},
{
    coords: [19.8563, 102.4955],
    name: "Laos"
},
{
    coords: [56.8796, 24.6032],
    name: "Latvia"
},
{
    coords: [33.8547, 35.8623],
    name: "Lebanon"
},
{
    coords: [-29.6105, 28.2336],
    name: "Lesotho"
},
{
    coords: [6.4281, -9.4295],
    name: "Liberia"
},
{
    coords: [26.3351, 17.2283],
    name: "Libya"
},
{
    coords: [47.166, 9.5554],
    name: "Liechtenstein"
},
{
    coords: [55.1694, 23.8813],
    name: "Lithuania"
},
{
    coords: [49.8153, 6.1296],
    name: "Luxembourg"
},
{
    coords: [-18.7669, 46.8691],
    name: "Madagascar"
},
{
    coords: [-13.2543, 34.3015],
    name: "Malawi"
},
{
    coords: [4.2105, 101.9758],
    name: "Malaysia"
},
{
    coords: [3.2028, 73.2207],
    name: "Maldives"
},
{
    coords: [17.5707, -3.9962],
    name: "Mali"
},
{
    coords: [35.9375, 14.3754],
    name: "Malta"
},
{
    coords: [7.1315, 171.1845],
    name: "Marshall Islands"
},
{
    coords: [21.0079, -10.9408],
    name: "Mauritania"
},
{
    coords: [-20.3484, 57.5522],
    name: "Mauritius"
},
{
    coords: [23.6345, -102.5528],
    name: "Mexico"
},
{
    coords: [7.4256, 150.5508],
    name: "Micronesia"
},
{
    coords: [47.4116, 28.3699],
    name: "Moldova"
},
{
    coords: [43.7384, 7.4246],
    name: "Monaco"
},
{
    coords: [46.8625, 103.8467],
    name: "Mongolia"
},
{
    coords: [42.7087, 19.3744],
    name: "Montenegro"
},
{
    coords: [31.7917, -7.0926],
    name: "Morocco"
},
{
    coords: [-18.6657, 35.5296],
    name: "Mozambique"
},
{
    coords: [21.9162, 95.956],
    name: "Myanmar (formerly Burma)"
},
{
    coords: [-22.9576, 18.4904],
    name: "Namibia"
},
{
    coords: [-0.5228, 166.9315],
    name: "Nauru"
},
{
    coords: [28.3949, 84.124],
    name: "Nepal"
},
{
    coords: [52.1326, 5.2913],
    name: "Netherlands"
},
{
    coords: [-40.9006, 174.886],
    name: "New Zealand"
},
{
    coords: [12.8654, -85.2072],
    name: "Nicaragua"
},
{
    coords: [17.6078, 8.0817],
    name: "Niger"
},
{
    coords: [9.082, 8.6753],
    name: "Nigeria"
},
{
    coords: [40.3399, 127.5101],
    name: "North Korea"
},
{
    coords: [41.6086, 21.7453],
    name: "North Macedonia"
},
{
    coords: [60.472, 8.4689],
    name: "Norway"
},
{
    coords: [21.4735, 55.9754],
    name: "Oman"
},
{
    coords: [30.3753, 69.3451],
    name: "Pakistan"
},
{
    coords: [7.51498, 134.5825],
    name: "Palau"
},
{
    coords: [31.9474, 35.2272],
    name: "Palestine"
},
{
    coords: [8.538, -80.7821],
    name: "Panama"
},
{
    coords: [-6.314993, 143.9555],
    name: "Papua New Guinea"
},
{
    coords: [-23.4425, -58.4438],
    name: "Paraguay"
},
{
    coords: [-9.19, -75.0152],
    name: "Peru"
},
{
    coords: [12.8797, 121.774],
    name: "Philippines"
},
{
    coords: [51.9194, 19.1451],
    name: "Poland"
},
{
    coords: [39.3999, -8.2245],
    name: "Portugal"
},
{
    coords: [25.3548, 51.1839],
    name: "Qatar"
},
{
    coords: [45.9432, 24.9668],
    name: "Romania"
},
{
    coords: [61.524, 105.3188],
    name: "Russia"
},
{
    coords: [-1.9403, 29.8739],
    name: "Rwanda"
},
{
    coords: [17.3578, -62.783],
    name: "Saint Kitts and Nevis"
},
{
    coords: [13.9094, -60.9789],
    name: "Saint Lucia"
},
{
    coords: [12.9843, -61.2872],
    name: "Saint Vincent and the Grenadines"
},
{
    coords: [-13.759, -172.1046],
    name: "Samoa"
},
{
    coords: [43.9424, 12.4578],
    name: "San Marino"
},
{
    coords: [0.1864, 6.6131],
    name: "Sao Tome and Principe"
},
{
    coords: [23.8859, 45.0792],
    name: "Saudi Arabia"
},
{
    coords: [14.4974, -14.4524],
    name: "Senegal"
},
{
    coords: [44.0165, 21.0059],
    name: "Serbia"
},
{
    coords: [-4.6796, 55.491977],
    name: "Seychelles"
},
{
    coords: [8.460555, -11.779889],
    name: "Sierra Leone"
},
{
    coords: [1.352083, 103.819836],
    name: "Singapore"
},
{
    coords: [48.669, 19.699],
    name: "Slovakia"
},
{
    coords: [46.1512, 14.9955],
    name: "Slovenia"
},
{
    coords: [-9.6457, 160.1562],
    name: "Solomon Islands"
},
{
    coords: [5.1521, 46.1996],
    name: "Somalia"
},
{
    coords: [-30.5595, 22.9375],
    name: "South Africa"
},
{
    coords: [35.9078, 127.7669],
    name: "South Korea"
},
{
    coords: [7.862684, 29.694923],
    name: "South Sudan"
},
{
    coords: [40.4637, -3.7492],
    name: "Spain"
},
{
    coords: [7.8731, 80.7718],
    name: "Sri Lanka"
},
{
    coords: [12.8628, 30.2176],
    name: "Sudan"
},
{
    coords: [3.9193, -56.0278],
    name: "Suriname"
},
{
    coords: [60.1282, 18.6435],
    name: "Sweden"
},
{
    coords: [46.8182, 8.2275],
    name: "Switzerland"
},
{
    coords: [34.8021, 38.9968],
    name: "Syria"
},
{
    coords: [38.861, 71.2761],
    name: "Tajikistan"
},
{
    coords: [-6.369028, 34.888822],
    name: "Tanzania"
},
{
    coords: [15.870032, 100.992541],
    name: "Thailand"
},
{
    coords: [-8.874217, 125.727539],
    name: "Timor-Leste"
},
{
    coords: [8.619543, 0.824782],
    name: "Togo"
},
{
    coords: [-21.178986, -175.198242],
    name: "Tonga"
},
{
    coords: [10.6918, -61.2225],
    name: "Trinidad and Tobago"
},
{
    coords: [33.886917, 9.537499],
    name: "Tunisia"
},
{
    coords: [38.963745, 35.243322],
    name: "Turkey"
},
{
    coords: [38.969719, 59.556278],
    name: "Turkmenistan"
},
{
    coords: [-7.109535, 179.194275],
    name: "Tuvalu"
},
{
    coords: [1.373333, 32.290275],
    name: "Uganda"
},
{
    coords: [48.379433, 31.16558],
    name: "Ukraine"
},
{
    coords: [23.424076, 53.847818],
    name: "United Arab Emirates"
},
{
    coords: [55.378051, -3.435973],
    name: "United Kingdom"
},
{
    coords: [37.09024, -95.712891],
    name: "United States of America"
},
{
    coords: [-32.522779, -55.765835],
    name: "Uruguay"
},
{
    coords: [41.377491, 64.585262],
    name: "Uzbekistan"
},
{
    coords: [-15.376706, 166.959158],
    name: "Vanuatu"
},
{
    coords: [41.902916, 12.453389],
    name: "Vatican City (Holy See)"
},
{
    coords: [6.42375, -66.58973],
    name: "Venezuela"
},
{
    coords: [14.058324, 108.277199],
    name: "Vietnam"
},
{
    coords: [15.552727, 48.516388],
    name: "Yemen"
},
{
    coords: [-13.133897, 27.849332],
    name: "Zambia"
},
{
    coords: [-19.015438, 29.154857],
    name: "Zimbabwe"
}

];

locations.forEach(function (location) {
    L.marker(location.coords).addTo(map)
        .bindPopup('<b>' + location.name + '</b><br>Universidad Tecnológico Comfenalco.');
});

// Cargar datos GeoJSON para los países y aplicar colores suaves
fetch('https://raw.githubusercontent.com/datasets/geo-countries/master/data/countries.geojson')
    .then(response => response.json())
    .then(data => {
        var colors = {};
        var colorIndex = 0;
        var pastelColors = [ '#FF9A8B', '#798E9B', '#FFC1A6', '#FFD5A5', '#E2F0CB', '#B5EAD7',
            '#C7CEEA'
        ];

        L.geoJson(data, {
            style: function (feature) {
                var countryName = feature.properties.ADMIN;
                if (!colors[countryName]) {
                    colors[countryName] = pastelColors[colorIndex % pastelColors.length];
                    colorIndex++;
                }
                return {
                    color: colors[countryName],
                    weight: 1,
                    fillColor: colors[countryName],
                    fillOpacity: 0.6
                };
            }
        }).addTo(map);
    });

// Datos de ejemplo para la tabla de usuarios
var users = [

    {
        name: "User 1",
        country: "Afghanistan",
        lat: 33.93911,
        lng: 67.709953
    },
    {
        name: "User 2",
        country: "Albania",
        lat: 41.1533,
        lng: 20.1683
    },
    {
        name: "User 3",
        country: "Algeria",
        lat: 28.0339,
        lng: 1.6596
    },
    {
        name: "User 4",
        country: "Andorra",
        lat: 42.5063,
        lng: 1.5218
    },
    {
        name: "User 5",
        country: "Angola",
        lat: -11.2027,
        lng: 17.8739
    },
    {
        name: "User 6",
        country: "Antigua and Barbuda",
        lat: 17.0608,
        lng: -61.7964
    },
    {
        name: "User 7",
        country: "Argentina",
        lat: -38.4161,
        lng: -63.6167
    },
    {
        name: "User 8",
        country: "Armenia",
        lat: 40.0691,
        lng: 45.0382
    },
    {
        name: "User 9",
        country: "Australia",
        lat: -25.2744,
        lng: 133.7751
    },
    {
        name: "User 10",
        country: "Austria",
        lat: 47.5162,
        lng: 14.5501
    },
    {
        name: "User 11",
        country: "Azerbaijan",
        lat: 40.1431,
        lng: 47.5769
    },
    {
        name: "User 12",
        country: "Bahamas",
        lat: 25.0343,
        lng: -77.3963
    },
    {
        name: "User 13",
        country: "Bahrain",
        lat: 25.9304,
        lng: 50.6378
    },
    {
        name: "User 14",
        country: "Bangladesh",
        lat: 23.6850,
        lng: 90.3563
    },
    {
        name: "User 15",
        country: "Barbados",
        lat: 13.1939,
        lng: -59.5432
    },
    {
        name: "User 16",
        country: "Belarus",
        lat: 53.7098,
        lng: 27.9534
    },
    {
        name: "User 17",
        country: "Belgium",
        lat: 50.8503,
        lng: 4.3517
    },
    {
        name: "User 18",
        country: "Belize",
        lat: 17.1899,
        lng: -88.4976
    },
    {
        name: "User 19",
        country: "Benin",
        lat: 9.3077,
        lng: 2.3158
    },
    {
        name: "User 20",
        country: "Bhutan",
        lat: 27.5142,
        lng: 90.4336
    },
    {
        name: "User 21",
        country: "Bolivia",
        lat: -16.2902,
        lng: -63.5887
    },
    {
        name: "User 22",
        country: "Bosnia and Herzegovina",
        lat: 43.9159,
        lng: 17.6791
    },
    {
        name: "User 23",
        country: "Botswana",
        lat: -22.3285,
        lng: 24.6849
    },
    {
        name: "User 24",
        country: "Brazil",
        lat: -14.2350,
        lng: -51.9253
    },
    {
        name: "User 25",
        country: "Brunei",
        lat: 4.5353,
        lng: 114.7277
    },
    {
        name: "User 26",
        country: "Bulgaria",
        lat: 42.7339,
        lng: 25.4858
    },
    {
        name: "User 27",
        country: "Burkina Faso",
        lat: 12.2383,
        lng: -1.5616
    },
    {
        name: "User 28",
        country: "Burundi",
        lat: -3.3731,
        lng: 29.9189
    },
    {
        name: "User 29",
        country: "Cabo Verde",
        lat: 16.5388,
        lng: -23.0418
    },
    {
        name: "User 30",
        country: "Cambodia",
        lat: 12.5657,
        lng: 104.9910
    },
    {
        name: "User 31",
        country: "Cameroon",
        lat: 7.3697,
        lng: 12.3547
    },
    {
        name: "User 32",
        country: "Canada",
        lat: 56.1304,
        lng: -106.3468
    },
    {
        name: "User 33",
        country: "Central African Republic",
        lat: 6.6111,
        lng: 20.9394
    },
    {
        name: "User 34",
        country: "Chad",
        lat: 15.4542,
        lng: 18.7322
    },
    {
        name: "User 35",
        country: "Chile",
        lat: -35.6751,
        lng: -71.5430
    },
    {
        name: "User 36",
        country: "China",
        lat: 35.8617,
        lng: 104.1954
    },
    {
        name: "User 37",
        country: "Colombia",
        lat: 4.5709,
        lng: -74.2973
    },
    {
        name: "User 38",
        country: "Comoros",
        lat: -11.6455,
        lng: 43.3333
    },
    {
        name: "User 39",
        country: "Congo (Congo-Brazzaville)",
        lat: -0.2280,
        lng: 15.8277
    },
    {
        name: "User 40",
        country: "Costa Rica",
        lat: 9.7489,
        lng: -83.7534
    },
    {
        name: "User 41",
        country: "Croatia",
        lat: 45.1,
        lng: 15.2
    },
    {
        name: "User 42",
        country: "Cuba",
        lat: 21.5218,
        lng: -77.7812
    },
    {
        name: "User 43",
        country: "Cyprus",
        lat: 35.1264,
        lng: 33.4299
    },
    {
        name: "User 44",
        country: "Czechia (Czech Republic)",
        lat: 49.8175,
        lng: 15.4730
    },
    {
        name: "User 45",
        country: "Democratic Republic of the Congo",
        lat: -4.0383,
        lng: 21.7587
    },
    {
        name: "User 46",
        country: "Denmark",
        lat: 56.2639,
        lng: 9.5018
    },
    {
        name: "User 47",
        country: "Djibouti",
        lat: 11.8251,
        lng: 42.5903
    },
    {
        name: "User 48",
        country: "Dominica",
        lat: 15.4149,
        lng: -61.370976
    },
    {
        name: "User 49",
        country: "Dominican Republic",
        lat: 18.7357,
        lng: -70.1627
    },
    {
        name: "User 50",
        country: "Ecuador",
        lat: -1.8312,
        lng: -78.1834
    },
    {
        name: "User 51",
        country: "Egypt",
        lat: 26.8206,
        lng: 30.8025
    },
    {
        name: "User 52",
        country: "El Salvador",
        lat: 13.7942,
        lng: -88.8965
    },
    {
        name: "User 53",
        country: "Equatorial Guinea",
        lat: 1.6508,
        lng: 10.2679
    },
    {
        name: "User 54",
        country: "Eritrea",
        lat: 15.1794,
        lng: 39.7823
    },
    {
        name: "User 55",
        country: "Estonia",
        lat: 58.5953,
        lng: 25.0136
    },
    {
        name: "User 57",
        country: "Ethiopia",
        lat: 9.145,
        lng: 40.4897
    },
    {
        name: "User 58",
        country: "Fiji",
        lat: -17.7134,
        lng: 178.065
    },
    {
        name: "User 59",
        country: "Finland",
        lat: 61.9241,
        lng: 25.7482
    },
    {
        name: "User 60",
        country: "France",
        lat: 46.6034,
        lng: 1.8883
    },
    {
        name: "User 61",
        country: "Gabon",
        lat: -0.8037,
        lng: 11.6094
    },
    {
        name: "User 62",
        country: "Gambia",
        lat: 13.4432,
        lng: -15.3101
    },
    {
        name: "User 63",
        country: "Georgia",
        lat: 32.1656,
        lng: -82.9001
    },
    {
        name: "User 64",
        country: "Germany",
        lat: 51.1657,
        lng: 10.4515
    },
    {
        name: "User 65",
        country: "Ghana",
        lat: 7.9465,
        lng: -1.0232
    },
    {
        name: "User 66",
        country: "Greece",
        lat: 39.0742,
        lng: 21.8243
    },
    {
        name: "User 67",
        country: "Grenada",
        lat: 12.1165,
        lng: -61.679
    },
    {
        name: "User 68",
        country: "Guatemala",
        lat: 15.7835,
        lng: -90.2308
    },
    {
        name: "User 69",
        country: "Guinea",
        lat: 9.9456,
        lng: -9.6966
    },
    {
        name: "User 70",
        country: "Guinea-Bissau",
        lat: 11.8037,
        lng: -15.1804
    },
    {
        name: "User 71",
        country: "Guyana",
        lat: 4.8604,
        lng: -58.9302
    },
    {
        name: "User 72",
        country: "Haiti",
        lat: 18.9712,
        lng: -72.2852
    },
    {
        name: "User 73",
        country: "Honduras",
        lat: 15.2,
        lng: -86.2419
    },
    {
        name: "User 74",
        country: "Hungary",
        lat: 47.1625,
        lng: 19.5033
    },
    {
        name: "User 75",
        country: "Iceland",
        lat: 64.9631,
        lng: -19.0208
    },
    {
        name: "User 76",
        country: "India",
        lat: 20.5937,
        lng: 78.9629
    },
    {
        name: "User 77",
        country: "Indonesia",
        lat: -0.7893,
        lng: 113.9213
    },
    {
        name: "User 78",
        country: "Iran",
        lat: 32.4279,
        lng: 53.688
    },
    {
        name: "User 79",
        country: "Iraq",
        lat: 33.2232,
        lng: 43.6793
    },
    {
        name: "User 80",
        country: "Ireland",
        lat: 53.4129,
        lng: -8.2439
    },
    {
        name: "User 81",
        country: "Israel",
        lat: 31.0461,
        lng: 34.8516
    },
    {
        name: "User 82",
        country: "Italy",
        lat: 41.8719,
        lng: 12.5674
    },
    {
        name: "User 83",
        country: "Jamaica",
        lat: 18.1096,
        lng: -77.2975
    },
    {
        name: "User 84",
        country: "Japan",
        lat: 36.2048,
        lng: 138.2529
    },
    {
        name: "User 85",
        country: "Jordan",
        lat: 30.5852,
        lng: 36.2384
    },
    {
        name: "User 86",
        country: "Kazakhstan",
        lat: 48.0196,
        lng: 66.9237
    },
    {
        name: "User 87",
        country: "Kenya",
        lat: -0.0236,
        lng: 37.9062
    },
    {
        name: "User 88",
        country: "Kiribati",
        lat: -3.3704,
        lng: -168.734
    },
    {
        name: "User 89",
        country: "Kuwait",
        lat: 29.3117,
        lng: 47.4818
    },
    {
        name: "User 90",
        country: "Kyrgyzstan",
        lat: 41.2044,
        lng: 74.7661
    },
    {
        name: "User 91",
        country: "Laos",
        lat: 19.8563,
        lng: 102.4955
    },
    {
        name: "User 92",
        country: "Latvia",
        lat: 56.8796,
        lng: 24.6032
    },
    {
        name: "User 93",
        country: "Lebanon",
        lat: 33.8547,
        lng: 35.8623
    },
    {
        name: "User 94",
        country: "Lesotho",
        lat: -29.6105,
        lng: 28.2336
    },
    {
        name: "User 95",
        country: "Liberia",
        lat: 6.4281,
        lng: -9.4295
    },
    {
        name: "User 96",
        country: "Libya",
        lat: 26.3351,
        lng: 17.2283
    },
    {
        name: "User 97",
        country: "Liechtenstein",
        lat: 47.166,
        lng: 9.5554
    },
    {
        name: "User 98",
        country: "Lithuania",
        lat: 55.1694,
        lng: 23.8813
    },
    {
        name: "User 99",
        country: "Luxembourg",
        lat: 49.8153,
        lng: 6.1296
    },
    {
        name: "User 100",
        country: "Madagascar",
        lat: -18.7669,
        lng: 46.8691
    },
    {
        name: "User 101",
        country: "Malawi",
        lat: -13.2543,
        lng: 34.3015
    },
    {
        name: "User 102",
        country: "Malaysia",
        lat: 4.2105,
        lng: 101.9758
    },
    {
        name: "User 103",
        country: "Maldives",
        lat: 3.2028,
        lng: 73.2207
    },
    {
        name: "User 104",
        country: "Mali",
        lat: 17.5707,
        lng: -3.9962
    },
    {
        name: "User 105",
        country: "Malta",
        lat: 35.9375,
        lng: 14.3754
    },
    {
        name: "User 106",
        country: "Marshall Islands",
        lat: 7.1315,
        lng: 171.1845
    },
    {
        name: "User 107",
        country: "Mauritania",
        lat: 21.0079,
        lng: -10.9408
    },
    {
        name: "User 108",
        country: "Mauritius",
        lat: -20.3484,
        lng: 57.5522
    },
    {
        name: "User 109",
        country: "Mexico",
        lat: 23.6345,
        lng: -102.5528
    },
    {
        name: "User 110",
        country: "Micronesia",
        lat: 7.4256,
        lng: 150.5508
    },
    {
        name: "User 111",
        country: "Moldova",
        lat: 47.4116,
        lng: 28.3699
    },
    {
        name: "User 112",
        country: "Monaco",
        lat: 43.7384,
        lng: 7.4246
    },
    {
        name: "User 113",
        country: "Mongolia",
        lat: 46.8625,
        lng: 103.8467
    },
    {
        name: "User 114",
        country: "Montenegro",
        lat: 42.7087,
        lng: 19.3744
    },
    {
        name: "User 115",
        country: "Morocco",
        lat: 31.7917,
        lng: -7.0926
    },
    {
        name: "User 116",
        country: "Mozambique",
        lat: -18.6657,
        lng: 35.5296
    },
    {
        name: "User 117",
        country: "Myanmar (formerly Burma)",
        lat: 21.9162,
        lng: 95.956
    },
    {
        name: "User 118",
        country: "Namibia",
        lat: -22.9576,
        lng: 18.4904
    },
    {
        name: "User 119",
        country: "Nauru",
        lat: -0.5228,
        lng: 166.9315
    },
    {
        name: "User 120",
        country: "Nepal",
        lat: 28.3949,
        lng: 84.124
    },
    {
        name: "User 121",
        country: "Netherlands",
        lat: 52.1326,
        lng: 5.2913
    },
    {
        name: "User 122",
        country: "New Zealand",
        lat: -40.9006,
        lng: 174.886
    },
    {
        name: "User 123",
        country: "Nicaragua",
        lat: 12.8654,
        lng: -85.2072
    },
    {
        name: "User 124",
        country: "Niger",
        lat: 17.6078,
        lng: 8.0817
    },
    {
        name: "User 125",
        country: "Nigeria",
        lat: 9.082,
        lng: 8.6753
    },
    {
        name: "User 126",
        country: "North Korea",
        lat: 40.3399,
        lng: 127.5101
    },
    {
        name: "User 127",
        country: "North Macedonia",
        lat: 41.6086,
        lng: 21.7453
    },
    {
        name: "User 128",
        country: "Norway",
        lat: 60.472,
        lng: 8.4689
    },
    {
        name: "User 129",
        country: "Oman",
        lat: 21.4735,
        lng: 55.9754
    },
    {
        name: "User 130",
        country: "Pakistan",
        lat: 30.3753,
        lng: 69.3451
    },
    {
        name: "User 131",
        country: "Palau",
        lat: 7.51498,
        lng: 134.5825
    },
    {
        name: "User 132",
        country: "Palestine",
        lat: 31.9474,
        lng: 35.2272
    },
    {
        name: "User 133",
        country: "Panama",
        lat: 8.538,
        lng: -80.7821
    },
    {
        name: "User 134",
        country: "Papua New Guinea",
        lat: -6.314993,
        lng: 143.9555
    },
    {
        name: "User 135",
        country: "Paraguay",
        lat: -23.4425,
        lng: -58.4438
    },
    {
        name: "User 136",
        country: "Peru",
        lat: -9.19,
        lng: -75.0152
    },
    {
        name: "User 137",
        country: "Philippines",
        lat: 12.8797,
        lng: 121.774
    },
    {
        name: "User 138",
        country: "Poland",
        lat: 51.9194,
        lng: 19.1451
    },
    {
        name: "User 139",
        country: "Portugal",
        lat: 39.3999,
        lng: -8.2245
    },
    {
        name: "User 140",
        country: "Qatar",
        lat: 25.3548,
        lng: 51.1839
    },
    {
        name: "User 141",
        country: "Romania",
        lat: 45.9432,
        lng: 24.9668
    },
    {
        name: "User 142",
        country: "Russia",
        lat: 61.524,
        lng: 105.3188
    },
    {
        name: "User 143",
        country: "Rwanda",
        lat: -1.9403,
        lng: 29.8739
    },
    {
        name: "User 144",
        country: "Saint Kitts and Nevis",
        lat: 17.3578,
        lng: -62.783
    },
    {
        name: "User 145",
        country: "Saint Lucia",
        lat: 13.9094,
        lng: -60.9789
    },
    {
        name: "User 146",
        country: "Saint Vincent and the Grenadines",
        lat: 12.9843,
        lng: -61.2872
    },
    {
        name: "User 147",
        country: "Samoa",
        lat: -13.759,
        lng: -172.1046
    },
    {
        name: "User 148",
        country: "San Marino",
        lat: 43.9424,
        lng: 12.4578
    },
    {
        name: "User 149",
        country: "Sao Tome and Principe",
        lat: 0.1864,
        lng: 6.6131
    },
    {
        name: "User 150",
        country: "Saudi Arabia",
        lat: 23.8859,
        lng: 45.0792
    },
    {
        name: "User 151",
        country: "Senegal",
        lat: 14.4974,
        lng: -14.4524
    },
    {
        name: "User 152",
        country: "Serbia",
        lat: 44.0165,
        lng: 21.0059
    },
    {
        name: "User 153",
        country: "Seychelles",
        lat: -4.6796,
        lng: 55.491977
    },
    {
        name: "User 154",
        country: "Sierra Leone",
        lat: 8.460555,
        lng: -11.779889
    },
    {
        name: "User 155",
        country: "Singapore",
        lat: 1.352083,
        lng: 103.819836
    },
    {
        name: "User 156",
        country: "Slovakia",
        lat: 48.669,
        lng: 19.699
    },
    {
        name: "User 157",
        country: "Slovenia",
        lat: 46.1512,
        lng: 14.9955
    },
    {
        name: "User 158",
        country: "Solomon Islands",
        lat: -9.6457,
        lng: 160.1562
    },
    {
        name: "User 159",
        country: "Somalia",
        lat: 5.1521,
        lng: 46.1996
    },
    {
        name: "User 160",
        country: "South Africa",
        lat: -30.5595,
        lng: 22.9375
    },
    {
        name: "User 161",
        country: "South Korea",
        lat: 35.9078,
        lng: 127.7669
    },
    {
        name: "User 162",
        country: "South Sudan",
        lat: 7.862684,
        lng: 29.694923
    },
    {
        name: "User 163",
        country: "Spain",
        lat: 40.4637,
        lng: -3.7492
    },
    {
        name: "User 164",
        country: "Sri Lanka",
        lat: 7.8731,
        lng: 80.7718
    },
    {
        name: "User 165",
        country: "Sudan",
        lat: 12.8628,
        lng: 30.2176
    },
    {
        name: "User 166",
        country: "Suriname",
        lat: 3.9193,
        lng: -56.0278
    },
    {
        name: "User 167",
        country: "Sweden",
        lat: 60.1282,
        lng: 18.6435
    },
    {
        name: "User 168",
        country: "Switzerland",
        lat: 46.8182,
        lng: 8.2275
    },
    {
        name: "User 169",
        country: "Syria",
        lat: 34.8021,
        lng: 38.9968
    },
    {
        name: "User 170",
        country: "Tajikistan",
        lat: 38.861,
        lng: 71.2761
    },
    {
        name: "User 171",
        country: "Tanzania",
        lat: -6.369028,
        lng: 34.888822
    },
    {
        name: "User 172",
        country: "Thailand",
        lat: 15.870032,
        lng: 100.992541
    },
    {
        name: "User 173",
        country: "Timor-Leste",
        lat: -8.874217,
        lng: 125.727539
    },
    {
        name: "User 174",
        country: "Togo",
        lat: 8.619543,
        lng: 0.824782
    },
    {
        name: "User 175",
        country: "Tonga",
        lat: -21.178986,
        lng: -175.198242
    },
    {
        name: "User 176",
        country: "Trinidad and Tobago",
        lat: 10.6918,
        lng: -61.2225
    },
    {
        name: "User 177",
        country: "Tunisia",
        lat: 33.886917,
        lng: 9.537499
    },
    {
        name: "User 178",
        country: "Turkey",
        lat: 38.963745,
        lng: 35.243322
    },
    {
        name: "User 179",
        country: "Turkmenistan",
        lat: 38.969719,
        lng: 59.556278
    },
    {
        name: "User 180",
        country: "Tuvalu",
        lat: -7.109535,
        lng: 179.194275
    },
    {
        name: "User 181",
        country: "Uganda",
        lat: 1.373333,
        lng: 32.290275
    },
    {
        name: "User 182",
        country: "Ukraine",
        lat: 48.379433,
        lng: 31.16558
    },
    {
        name: "User 183",
        country: "United Arab Emirates",
        lat: 23.424076,
        lng: 53.847818
    },
    {
        name: "User 184",
        country: "United Kingdom",
        lat: 55.378051,
        lng: -3.435973
    },
    {
        name: "User 185",
        country: "United States of America",
        lat: 37.09024,
        lng: -95.712891
    },
    {
        name: "User 186",
        country: "Uruguay",
        lat: -32.522779,
        lng: -55.765835
    },
    {
        name: "User 187",
        country: "Uzbekistan",
        lat: 41.377491,
        lng: 64.585262
    },
    {
        name: "User 188",
        country: "Vanuatu",
        lat: -15.376706,
        lng: 166.959158
    },
    {
        name: "User 189",
        country: "Vatican City (Holy See)",
        lat: 41.902916,
        lng: 12.453389
    },
    {
        name: "User 190",
        country: "Venezuela",
        lat: 6.42375,
        lng: -66.58973
    },
    {
        name: "User 191",
        country: "Vietnam",
        lat: 14.058324,
        lng: 108.277199
    },
    {
        name: "User 192",
        country: "Yemen",
        lat: 15.552727,
        lng: 48.516388
    },
    {
        name: "User 193",
        country: "Zambia",
        lat: -13.133897,
        lng: 27.849332
    },
    {
        name: "User 194",
        country: "Zimbabwe",
        lat: -19.015438,
        lng: 29.154857
    }
];

var currentPage = 1;
var rowsPerPage = 8;

function displayUsers(users, rowsPerPage, page) {
    const startIndex = (page - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const paginatedUsers = users.slice(startIndex, endIndex);

    var tableBody = document.getElementById('user-table');
    tableBody.innerHTML = "";

    paginatedUsers.forEach(user => {
        var row = document.createElement('tr');
        row.innerHTML =
            `<td class="px-4 py-2 border">${user.country}</td>
        <td class="px-4 py-2 border"><button class="details-button" onclick="showOnMap(${user.lat}, ${user.lng})">Ver</button></td>`;
        tableBody.appendChild(row);
    });

    document.getElementById('prev').disabled = page === 1;
    document.getElementById('next').disabled = endIndex >= users.length;
}

function showOnMap(lat, lng) {
    map.setView([lat, lng], 6);
}

displayUsers(users, rowsPerPage, currentPage);

document.getElementById('prev').addEventListener('click', function () {
    if (currentPage > 1) {
        currentPage--;
        displayUsers(users, rowsPerPage, currentPage);
    }
});

document.getElementById('next').addEventListener('click', function () {
    if (currentPage * rowsPerPage < users.length) {
        currentPage++;
        displayUsers(users, rowsPerPage, currentPage);
    }
});

document.getElementById('search').addEventListener('input', function (e) {
    var searchTerm = e.target.value.toLowerCase();
    var filteredUsers = users.filter(user => user.country.toLowerCase().includes(searchTerm));
    displayUsers(filteredUsers, rowsPerPage, 1);
});

// Mejorar la funcionalidad del mapa
map.scrollWheelZoom.disable();
map.on('click', function () {
    map.scrollWheelZoom.enable();
});
map.on('mouseout', function () {
    map.scrollWheelZoom.disable();
});
