<?php

namespace ZMT\Theme\Config\Modules;

class configCssVars extends \ZMT\Theme\DefaultConfig\configCssVars {

  /**
    * This is an example and not implemented.
    *
    * the following line has to be added to config/globals.php to work:
    * $this->colors = new \ZMT\Theme\Config\Modules\configCssVars('colors');
    * ----
    * Important! use a child theme if you are NOT creating
    * a new base theme!!! --> and make overwrites there.
    * use namespace/class: "ZMT\Theme\Child\Config\configCssVars"
    * in folder "config/modules" of your child theme
    * ----
    */
    protected function colors() {

      //get original values if not overwriting all
      parent::colors();

      //overwrite color_text_inverse
      $this->args['color_text_inverse'] = '#ffffff';

    }

}
