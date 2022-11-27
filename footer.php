<?php
/**
 * The template for displaying the footer
 */
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

global $zmtheme;

echo $zmtheme[ 'footer__sections' ]->getModule();

wp_footer();

?>

	</body>
</html>
