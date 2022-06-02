<?php
/**
  * The main index archive template file
  *
  * @package zmtheme
  * @since 1.0.0
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'center__sections' ]->getModule();

  get_footer();
