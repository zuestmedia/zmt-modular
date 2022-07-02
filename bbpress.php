<?php
/**
  * The main bbpress template file
  * file is needed to check if bbpress.php is loaded
  * in render.php to serve the right module!
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'center__sections' ]->getModule();

  get_footer();
