<?php
/**
  * The main woocommerce template file
  * file is needed to use woocommerce_content function!
  * is a copy of index.php
  * frontend template routing is handled by render.php 
  * @package zmtheme
  * @since 1.0.0
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'center__sections' ]->getModule();

  get_footer();
