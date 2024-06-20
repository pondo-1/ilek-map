<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly   ?>
<html>
<?php include 'head.php'; ?>

<body
  class="kulturdatenbank impressum_datenschutz">

  <?php include 'nav_header.php'; ?>
 
 
    <div class="content">
    <a aria-label="zurück" href="/" class="close"><span class="close close_icon"></span></a>    
    <?php echo get_the_content() ?>
    </div>


  <?php include 'nav_footer.php'; ?>


<?php wp_footer(  ); ?>

</body>
</html>