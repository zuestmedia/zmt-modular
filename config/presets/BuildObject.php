<?php

namespace ZMT\Theme\Config\Presets;

class BuildObject extends \ZMP\Plugin\Config\ZMTheme\Presets\BuildObject{

  function __construct(){

    parent::__construct();

    //start theme specific presets with an underline!
    //it will be sorted to first position then!

    $this->section_html->_powered  = new \ZMT\Theme\Config\Modules\configSectionNewHTML('sections_powered',false);

  }

}
