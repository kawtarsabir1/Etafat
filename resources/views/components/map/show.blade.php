<div>
    <div id="map" style="height: 500px;width: 100%"></div>
</div>


@push('component-script')
<script src="https://cdn.jsdelivr.net/npm/ol@v7.1.0/dist/ol.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.1.0/ol.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol-ext@4.0.4/dist/ol-ext.css">
<script src="https://cdn.jsdelivr.net/npm/ol-ext@4.0.4/dist/ol-ext.js"></script>

    <script type="text/javascript">
        function initMap() {
            var osm = new ol.layer.Tile({
                title: "OSM",
                // baseLayer: true,
                source: new ol.source.OSM(),
                visible: true
            });

            var sat = new ol.layer.Tile({
                title: "Google Satellite",
                // baseLayer: true,
                source: new ol.source.XYZ({
                    url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'
                }),
                visible: false
            });
            var gmap = new ol.layer.Tile({
                title: "Topo",
                // baseLayer: true,
                source: new ol.source.XYZ({
                    url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}'
                }),
                visible: false
            });
            var hybrid = new ol.layer.Tile({
                title: "Google Satellite Hybrid",
                // baseLayer: true,
                source: new ol.source.XYZ({
                    url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'
                }),
                visible: false
            });

            var map = new ol.Map({
                target: 'map',
                layers: [sat, osm, gmap, hybrid],
                view: new ol.View({
                    center: ol.proj.fromLonLat([-7, 33]),
                    zoom: 4
                })
            });

            map.addControl(new ol.control.LayerSwitcherImage());

            var ov = new ol.control.Overview({
                layers: [new ol.layer.Tile({
                    source: new ol.source.OSM()
                })],
                minZoom: 2,
                maxZoom: 12,
                rotation: true,
                align: "bottom-left",
                panAnimation: "elastic"
            });
            map.addControl(ov);

            var bm = new ol.control.GeoBookmark({
                marks: {
                    Paris: {
                        pos: ol.proj.transform([2.351828, 48.856578], 'EPSG:4326', 'EPSG:3857'),
                        zoom: 11,
                        permanent: true
                    },
                    London: {
                        pos: ol.proj.transform([-0.1275, 51.507222], 'EPSG:4326', 'EPSG:3857'),
                        zoom: 11,
                        permanent: true
                    },
                    Geneve: {
                        pos: ol.proj.transform([6.149985, 46.200013], 'EPSG:4326', 'EPSG:3857'),
                        zoom: 13,
                        permanent: true
                    },
                    Bruxelles: {
                        pos: ol.proj.transform([4.35, 50.83], 'EPSG:4326', 'EPSG:3857'),
                        zoom: 12,
                        permanent: true
                    },
                    Berlin: {
                        pos: ol.proj.transform([13.383333, 52.516667], 'EPSG:4326', 'EPSG:3857'),
                        zoom: 12,
                        permanent: true
                    },
                }
            });
            map.addControl(bm);

            const format = new ol.format.WKT();
            const source = new ol.source.Vector({
                wrapX: false
            });
            const iconStyle = new ol.style.Style({
                image: new ol.style.Icon({
                    anchor: [0.5, 64],
                    anchorXUnits: 'fraction',
                    anchorYUnits: 'pixels',
                    src: '{{asset("images/marker-building.png")}}',
                }),
            });

            const vector = new ol.layer.Vector({
                displayInLayerSwitcher: false,
                source: source,
                style : iconStyle,
            });
            map.addLayer(vector);

            const others_vector = new ol.layer.Vector({
                displayInLayerSwitcher: false,
                source: new ol.source.Vector({
                    wrapX: false
                }),
            });
            map.addLayer(others_vector);

            @if (!empty($wkt))
                const feature = format.readFeature('{{ $wkt }}', {
                    dataProjection: 'EPSG:3857',
                    featureProjection: 'EPSG:3857',
                });
                source.addFeature(feature);
                var extent = source.getExtent();
                map.getView().fit(extent, map.getSize());
                map.getView().setZoom(14);

            @endif 


            // iconFeature.setStyle(iconStyle);

            @foreach ($otherFeatures as $f)
                @if (!empty($f))
                    source.addFeature(format.readFeature('{{ $f }}', {
                        dataProjection: 'EPSG:3857',
                        featureProjection: 'EPSG:3857',
                    }));
                @endif
            @endforeach 
        }
        $(document).ready(function() {
            initMap();
        });
    </script>
@endpush
