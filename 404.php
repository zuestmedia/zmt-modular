<?php
/**
 * The template for displaying the 404 template in the ZM Master Theme.
 *
 * @package zmtheme
 * @since 1.0.0
 */

get_header();

echo $zmtheme[ 'errorpage__errorpagecontainer' ]->getModule();

get_footer();
