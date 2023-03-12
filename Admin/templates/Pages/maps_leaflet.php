<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Leaflet Maps')) ?>

        <!-- leaflet Css -->
        <link href="/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->element('menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Maps', 'title' => 'Leaflet Maps')) ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Example</h4>
                                        <div id="leaflet-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers, circles and polygons</h4>
                                        <div id="leaflet-map-marker" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Working with popups</h4>
                                        <div id="leaflet-map-popup" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers with Custom Icons</h4>
                                        <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Interactive Choropleth Map</h4>

                                        <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Layer Groups and Layers Control</h4>
                                        <div id="leaflet-map-group-control" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?= $this->element('footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>
        <!-- leaflet plugin -->
        <script src="/libs/leaflet/leaflet.js"></script>

        <!-- leaflet map.init -->
        <script src="/js/pages/leaflet-us-states.js"></script>
        <script src="/js/pages/leaflet-map.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
