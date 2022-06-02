<?php

/**
  * Posts Static Template
  * Use this template to create custom post layouts
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  global $zmtheme;

  echo $zmtheme[ 'posts__articlecontainer' ]->getModuleStart();

    echo $zmtheme[ 'posts__title' ]->getModule();

    echo $zmtheme[ 'posts__date' ]->getModule();
    echo $zmtheme[ 'posts__authorlink' ]->getModule();
    echo $zmtheme[ 'posts__taxonomy' ]->getModule();
    echo $zmtheme[ 'posts__commentscounter' ]->getModule();
    echo $zmtheme[ 'posts__editlink' ]->getModule();

    echo $zmtheme[ 'posts__image' ]->getModule();

    echo $zmtheme[ 'posts__the_content' ]->getModule();

    echo $zmtheme[ 'posts__readmore' ]->getModule();

  echo $zmtheme[ 'posts__articlecontainer' ]->getModuleEnd();
