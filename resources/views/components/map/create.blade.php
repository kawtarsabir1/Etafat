<div>
    <div id="map" style="height: 500px;width: 100%"></div>
</div>


@push('component-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.6.5/ol.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.6.5/ol.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol-ext@3.2.21/dist/ol-ext.min.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/ol-ext@3.2.21/dist/ol-ext.js"></script>

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
                layers: 
                    [sat, osm, gmap, hybrid]
                ,
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

            const vector = new ol.layer.Vector({
                displayInLayerSwitcher:false,
                source: source,
            });
            map.addLayer(vector);

            const others_vector = new ol.layer.Vector({
                displayInLayerSwitcher:false,
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

            @foreach($otherFeatures as $f)
                @if(!empty($f))
                    source.addFeature(format.readFeature('{{$f}}', {
                        dataProjection: 'EPSG:3857',
                        featureProjection: 'EPSG:3857',
                    }));
                @endif
            @endforeach

            var mainbar = new ol.control.Bar();
            map.addControl(mainbar);
            var editbar = new ol.control.Bar({
                toggleOne: true, // one control active at the same time
                group: false // group controls together
            });
            mainbar.addControl(editbar);

            var sbar = new ol.control.Bar();
            sbar.addControl(new ol.control.Button({
                html: `<i data-feather='trash-2'></i>`,
                title: "Delete",
                handleClick: function() {
                    var features = selectCtrl.getInteraction().getFeatures();
                    if (!features.getLength()) info("Select an object first...");
                    else info(features.getLength() + " object(s) deleted.");
                    for (var i = 0, f; f = features.item(i); i++) {
                        vector.getSource().removeFeature(f);
                    }
                    selectCtrl.getInteraction().getFeatures().clear();
                }
            }));
            sbar.addControl(new ol.control.Button({
                html: `<i data-feather='info'></i>`,
                title: "Show informations",
                handleClick: function() {
                    switch (selectCtrl.getInteraction().getFeatures().getLength()) {
                        case 0:
                            info("Select an object first...");
                            break;
                        case 1:
                            var f = selectCtrl.getInteraction().getFeatures().item(0);
                            info("Selection is a " + f.getGeometry().getType());
                            break;
                        default:
                            info(selectCtrl.getInteraction().getFeatures().getLength() +
                                " objects seleted.");
                            break;
                    }
                }
            }));

            var selectCtrl = new ol.control.Toggle({
                html: `<i data-feather='mouse-pointer'></i>`,
                title: "Select",
                interaction: new ol.interaction.Select({
                    hitTolerance: 2
                }),
                bar: sbar,
                autoActivate: true,
                active: true
            });

            editbar.addControl(selectCtrl);

            @if ($type == 'Point')
                var pedit = new ol.control.Toggle({
                    html: `<i data-feather='map-pin'></i>`,
                    title: 'Point',
                    interaction: new ol.interaction.Draw({
                        type: 'Point',
                        source: vector.getSource()
                    })
                });
                pedit.getInteraction().on("drawend",evt=>{
                    let feature = evt.feature;
                    source.clear();
                    source.addFeature(feature);
                    let wkt = format.writeFeature(feature);
                    $("#shape_text").val(wkt);
                })
                editbar.addControl(pedit);
            @elseif($type == 'LineString')
                var ledit = new ol.control.Toggle({
                    html: '<i class="fa fa-share-alt" ></i>',
                    title: 'LineString',
                    interaction: new ol.interaction.Draw({
                        type: 'LineString',
                        source: vector.getSource(),
                        // Count inserted points
                        geometryFunction: function(coordinates, geometry) {
                            if (geometry) geometry.setCoordinates(coordinates);
                            else geometry = new ol.geom.LineString(coordinates);
                            this.nbpts = geometry.getCoordinates().length;
                            return geometry;
                        }
                    }),
                    bar: new ol.control.Bar({
                        controls: [
                            new ol.control.TextButton({
                                html: 'undo',
                                title: "Delete last point",
                                handleClick: function() {
                                    if (ledit.getInteraction().nbpts > 1) ledit.getInteraction()
                                        .removeLastPoint();
                                }
                            }),
                            new ol.control.TextButton({
                                html: 'Finish',
                                title: "finish",
                                handleClick: function() {
                                    // Prevent null objects on finishDrawing
                                    if (ledit.getInteraction().nbpts > 2) ledit.getInteraction()
                                        .finishDrawing();
                                }
                            })
                        ]
                    })
                });
                editbar.addControl(ledit);
            @elseif($type == 'Polygon')

                var fedit = new ol.control.Toggle({
                    html: `<i data-feather='hexagon'></i>`,
                    title: 'Polygon',
                    interaction: new ol.interaction.Draw({
                        type: 'Polygon',
                        source: vector.getSource(),
                        // Count inserted points
                        geometryFunction: function(coordinates, geometry) {
                            this.nbpts = coordinates[0].length;
                            if (geometry) geometry.setCoordinates([coordinates[0].concat([coordinates[0]
                                [0]
                            ])]);
                            else geometry = new ol.geom.Polygon(coordinates);
                            return geometry;
                        }
                    }),
                    // Options bar ssociated with the control
                    bar: new ol.control.Bar({
                        controls: [new ol.control.TextButton({
                                html: 'undo', //'<i class="fa fa-mail-reply"></i>',
                                title: "undo last point",
                                handleClick: function() {
                                    if (fedit.getInteraction().nbpts > 1) {
                                        fedit.getInteraction().removeLastPoint();
                                    }
                                }
                            }),
                            new ol.control.TextButton({
                                html: 'finish',
                                title: "finish",
                                handleClick: function() {
                                    if (fedit.getInteraction().nbpts > 3) {
                                        fedit.getInteraction().finishDrawing();
                                    } else {
                                        alert("more than 3 points")
                                    }
                                }
                            })
                        ]
                    })
                });
                fedit.getInteraction().on("drawend",evt=>{
                    let feature = evt.feature;
                    source.clear();
                    source.addFeature(feature);
                    let wkt = format.writeFeature(feature);
                    $("#shape_text").val(wkt);
                })
                editbar.addControl(fedit);
            @endif

            var save = new ol.control.Toggle({
                html: `<i data-feather='edit'></i>`,
                title: "Edit",
                interaction: new ol.interaction.Modify({
                    source: vector.getSource(),
                }),
            });
            editbar.addControl(save);

            function info(i) {
                $("#info").html(i || "");
            }

            feather.replace({
                width: 14,
                height: 14
            });
        }
    </script>
@endpush
