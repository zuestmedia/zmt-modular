<?php
/**
  * The template for displaying the 404 template in ZM Themes.
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'errorpage__errorpagecontainer' ]->getModule();

  get_footer();
