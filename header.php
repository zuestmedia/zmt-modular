<?php
/**
 * Header file for the ZMTheme Master Theme.
 *
 * @package zmtheme
 * @since 1.0.0
 */

global $zmtheme;

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php	wp_body_open(); ?>

		<?php echo $zmtheme[ 'header__sections' ]->getModule(); ?>
