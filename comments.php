<?php
/**
  * The template file for displaying the comments and comment form for ZM Themes
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  global $zmtheme;

/**
  * If the current post is protected by a password and
  * the visitor has not yet entered the password we will
  * return early without loading the comments.
  */
  if ( post_password_required() ) {
    return;
  }

	echo $zmtheme[ 'comments__commentscontainer' ]->getModule();
