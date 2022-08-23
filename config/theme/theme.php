<?php

namespace ZMT\Theme\Config\Theme;

class theme {

  function __construct(){

    $this->displayname = __( 'ZM Modular', 'zmtheme' );

    $this->version = '0.9.6';

    $this->framework = 'zm-uikit';

    $this->css = '/assets/css/uikit.zmt-modular.min.css';//Version 3.15.1
    $this->css_rtl = '/assets/css/uikit.zmt-modular-rtl.min.css';//Version 3.15.1

    $this->js = '/assets/js/uikit.min.js';//Version 3.15.1
    $this->icons = '/assets/js/uikit-icons.min.js';//Version 3.15.1

    $this->js_array = array(
      array(
        'js_slug' => 'zmtheme-js',
        'js_url' => '/assets/js/zmtheme.js',
        'js_deps' => array('jquery','zm-uikit-js','zm-uikit-icons'),
        //'js_ver' => '1.0.0',//get auto version!
        'js_in_footer' => NULL
      )
    );

    $this->head_modules = array(
      'globals__colors',
      'globals__body',
      'globals__heading',
      'globals__navbar',
      'globals__logo'
    );

    $this->menu_active_class = 'uk-active';
    $this->menu_parent_class = 'uk-parent';

  }

}
