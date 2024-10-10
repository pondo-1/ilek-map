# ilek-map

This Plugin is only used for the ILEK project fraenkischer-sueden-online.de
It is a fork of "kulturdatenbank sinngrund"
For Upcoming Ilek Projects, there is a new Fork - a theme - community-map-theme

Change Map Center

In frontend --> Dynamic Value in Backend Settings
In backend --> /meta_boxes/standort_box.php | Line 102-103
Allowed coordinates for backend post validation --> /meta_boxes/map_in_box.js | Line 5-6

Ignore Pattern for Deploy wit WP Migrate:

.DS_Store
.git
node_modules
!node_modules/simple-lightbox/
!node_modules/leaflet/
!node_modules/leaflet-draw/
!node_modules/leaflet.markercluster/
!node_modules/leaflet.markercluster.layersupport/
