<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly   
?>
<html>
<?php include 'head.php'; ?>

<body class="kulturdatenbank">
  <div class="main_block main_page_left side_wrapper">
    <?php include 'nav_header.php'; ?>

    <div class="main_map_block map_block" id="main_page_map"></div>

    <div class="main_block main_page_right sidebar" id="side_bar">
      <div class="scrolldown_wrapper"><a href="#checkboxes" aria-label="scrolldown"><span class="scrolldown icon"></span></a></div>

      <div id="checkboxes" class="category_filter_section">
        <!--div id checkboxes  -->
        <h2 class="category">Kategorie</h2>
        <button class="all">Select all</button>
        <button class="none">Deselect all</button>
        <?php
        $category_shortname_array  = $ilekdemo->get_category_shortname_array();

        foreach ($category_shortname_array as $name => $shortname) {
          $category_shortname = $category_shortname_array[$name];
          $category_icon = $category_shortname_array[$name] . '.svg';
          $category_icon_src = '/wp-content/plugins/ILEK-Map-App/icons/' . $category_icon;
          echo '<div class="single_category_wrapper"><input class="cat_checkbox" type="checkbox" id="' . $category_shortname . '" value="' . $category_shortname . '" category_name="'
            . $name . '" name="kategory_filter" checked="true">
              <label class="cat_label" for="' . $category_shortname . '"><img class="cat_icon" src="' . $category_icon_src . '"/><span class="cat_name">' . $name . '</span></label></div>';
        }

        ?>
      </div> <!-- closing div id checkboxes  -->

      <div class="sort_options_block">
        <span>Sortieren nach</span>
        <select name="sort_options" id="main_page_list_sort_options">
          <option value="0" selected>Aktuellste zuerst</option>
          <option value="1">Alpabetisch nach Title</option>
          <!-- <option value="2">Alpabetisch nach Autor</option> -->
        </select>
      </div>


      <div class="search">
        <input type="search" id="search" name="search" class="searchTerm" placeholder="Einträge durchsuchen">
        <button type="submit" class="searchButton">
          <svg viewBox="0 0 1024 1024">
            <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
            </path>
          </svg>
        </button>
      </div>

      <!-- <div id="livesearch"></div> -->
      <div class="datenbank_list_block">
        <div class="datenbank_list" id="datenbank_list">
        </div>
      </div>
      <?php
      //$the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 400 ) );

      // $string = ""; // html string

      // $string .= '<div class="datenbank_list_block">';
      // $string .= '	<div class="datenbank_list" id="datenbank_list">';
      //   $string .= '	</div>'; // closeing class datenbank_list

      // /* Restore original Post Data*/
      // //wp_reset_postdata();

      // $string .= '</div>'; // closeing class datenbank list block 

      // echo $string;
      ?>
      <?php include 'nav_footer.php'; ?>
    </div>
  </div>

  <?php include 'foot.php'; ?>

</body>



</html>