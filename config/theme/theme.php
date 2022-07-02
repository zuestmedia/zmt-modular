<?php

namespace ZMT\Theme\Config\Theme;

class theme {

  function __construct(){

    $this->displayname = __( 'Modular', 'zmtheme' );

    $this->version = '0.9.2';
    $this->version_notice = __( 'Warning: Versions of ZMTheme are not consistent!', 'zmtheme' );

    $this->framework = 'zm-uikit';

    $this->css = '/assets/css/uikit.zmtheme.css';
    $this->css_rtl = '/assets/css/uikit.zmtheme-rtl.css';

    $this->js = '/assets/js/uikit.min.js';
    $this->icons = '/assets/js/uikit-icons.min.js';

    $this->js_array = array(
      array(
        'js_slug' => 'zmtheme-js',
        'js_url' => '/assets/js/zmtheme.js',
        'js_deps' => array('jquery','zm-uikit-js','zm-uikit-icons'),
        'js_ver' => '1.0.0',
        'js_in_footer' => NULL
      )
    );

    $this->ie11_support = '/assets/js/ie11CustomProperties.js';

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
