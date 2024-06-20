<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly   ?>
<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) . 'meta_boxes.css'?>">


<div class="route_container" id="route_container" style="clear:both;">
  <div id="route_map" style="width:70%; float:right;"></div>
  <div id="route_input_text" class="route_input_text" style="width:27%; float:left;">
    <!-- meta data save here, with id: sad_route -->
    <input id="sad_route" type="text" name="route" value="<?php echo get_post_meta( get_the_ID(), 'route', true ); ?>"
      style="display:none">
    <!-- <div id="display_route_encoded" style="display:none"><?php //echo get_post_meta( get_the_ID(), 'route', true ); ?>
    </div> -->
    <div id="display_route">

      <?php 
        $encode_data = get_post_meta( get_the_ID(), 'route', true );
        $decode_data = urldecode($encode_data);
        //$data = substr($decode_data, 1, -1);
        $serialized = json_encode($decode_data);
        //echo gettype($decode_data);
        ?>
    </div>
    <div id="content_sinn"></div>
    <a href='#' id='export'> Koordinaten der Route als GeoJson exportieren </a>
  </div>

</div>

<!-- 
<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ) . 'map_in_box.js'?>"></script>
 -->