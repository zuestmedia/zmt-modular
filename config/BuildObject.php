<?php

namespace ZMT\Theme\Config;

use ZMT\Theme\Namespaces;
use ZMT\Theme\Build;

class BuildObject  extends \ZMT\Theme\ExtendTemplates {

  function __construct(){

  /**
    * Define Namespace and Alt-Namespaces
    */
    $n = new Namespaces( '\ZMT\Theme\Config\\', '\ZMT\Theme\Child\Config\\' );

  /**
    * use Build::newClass to dynamically overwrite default classes
    * default result: $this->globals = new globals();
    */

    //do not reorder first two items due to
    //itempos of switcher of template editor!!! / theme admin menu settings page
    //see in zmpro and in zmplugin custo-controlls in order control
    $this->globals     =    Build::newClass( $n->getClass('globals') );//0 = globals , entspricht general settings tab
    $this->extensions  =    Build::newClass( $n->getClass('extensions') );//1 = extensions , entspricht templates tab
    //do not reorder first two items!!

    $this->header      =    Build::newClass( $n->getClass('header') );//2 = header (ab hier reihenfolge automatisch nach default_components obj reihenfolge)
    $this->center      =    Build::newClass( $n->getClass('center') );//3 = center
    $this->footer      =    Build::newClass( $n->getClass('footer') );

    $this->archive     =    Build::newClass( $n->getClass('archive') );
    $this->posts       =    Build::newClass( $n->getClass('posts') );
    $this->single      =    Build::newClass( $n->getClass('single') );
    $this->page        =    Build::newClass( $n->getClass('page') );

    $this->nav         =    Build::newClass( $n->getClass('nav') );
    $this->offcanvas   =    Build::newClass( $n->getClass('offcanvas') );

    $this->comments    =    Build::newClass( $n->getClass('comments') );

    $this->errorpage   =    Build::newClass( $n->getClass('errorpage') );

    //add comgroup_ via other plugins or custom component & module groups!!

    //adds template objects via plugin
    $this->extendTemplates();


  }

}
