require(["esri/config", "esri/Map", "esri/views/MapView"], function (
    esriConfig,
    Map,
    MapView
) {
    esriConfig.apiKey =
        "AAPKec28b75036ad4b6980aafb21ec5fca0fIc8OmL2BNc1IxV2PzXbHV_Lr0uN7LyIVIzvHNiOwsv3gARKs7nUH64X5ob0mYyaG";

    const map = new Map({
        // basemap: "arcgis-topographic", // Basemap layer service
        // basemap: "streets-vector",
        basemap: "dark-gray-vector"//, "streets-night-vector", //"dark-gray" // ""
    });

    const view = new MapView({
        map: map,
        center: [74, 32], // Longitude, latitude
        zoom: 8, // Zoom level
        container: "map", // Div element
    });
});
