<?php
/**
  * Template Name: Custom Template - Example
  * Template Post Type: post, page
  *
  * This is a custom page template, do not verwechsle mit front-page.php (this is a wp standard template!!!)
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'center__sections' ]->getModule();

  get_footer();
