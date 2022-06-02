<?php

namespace ZMT\Theme\Config\Theme;

use ZMT\Theme\Namespaces;
use ZMT\Theme\Build;

class BuildObject {

  function __construct(){

  /**
    * Define Namespace and Alt-Namespaces
    */
    $n = new Namespaces( '\ZMT\Theme\Config\Theme\\', '\ZMT\Theme\Child\Config\Theme\\' );

  /**
    * use Build::newClass to dynamically overwrite default classes
    * default result: $this->theme = new theme();
    */
    $this->theme =  Build::newClass( $n->getClass('theme') );
    $this->welcomepage =  Build::newClass( $n->getClass('welcomepage') );
    $this->startercontent =  Build::newClass( $n->getClass('startercontent') );
    $this->colors =  Build::newClass( $n->getClass('colors') );
    $this->gradients =  Build::newClass( $n->getClass('gradients') );







  }

}
