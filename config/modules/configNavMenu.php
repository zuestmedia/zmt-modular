<?php

namespace ZMT\Theme\Config\Modules;

class configNavMenu extends \ZMT\Theme\DefaultConfig\configNavMenu {

    protected function navbar_menu_visible_desktop() {

      parent::navbar();

      $this->args['module_class_visibility'] = array('zm-hidden-mobile', 'zm-hidden-tablet');

    }

}
