<?php

namespace ZMT\Theme\Config;

class nav extends \ZMT\Theme\Templates\_nav {

  public $menu__1;
  public $search__1;
  public $menu__2;

  function __construct(){

    parent::__construct();

    $this->menu__1  = new \ZMT\Theme\Config\Modules\configNavMenu( 'navbar_menu_visible_desktop', 1,'navcontainer' );

    $this->search__1  = new \ZMT\Theme\Config\Modules\configNavSearch( 'navbar_search_visible_desktop', 2,'navcontainer' );

    $this->menu__2  = new \ZMT\Theme\Config\Modules\configNavMenu( 'navbar_dropdown_nav_hidden_desktop', 3,'navcontainer' );

  }

}
