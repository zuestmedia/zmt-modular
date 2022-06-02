<?php
/**
 * The template for displaying the footer
 *
 * @package zmtheme
 * @since 1.0.0
 */

global $zmtheme;

echo $zmtheme[ 'footer__sections' ]->getModule();

wp_footer();

?>

	</body>
</html>
