<?php

namespace ZMT\Theme\Config\Modules;

class configNavToggle extends \ZMT\Theme\DefaultConfig\configNavToggle {

    protected function navbar_toggle_hidden_desktop() {

      parent::navbar();

      $this->args['module_class_visibility'] = array('zm-hidden-desktop');

    }

}
