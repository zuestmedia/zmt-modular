<?php

namespace ZMT\Theme\Config;

class footer extends \ZMT\Theme\Templates\_footer {

  public $section_html__1;

  function __construct(){

    parent::__construct();

    $this->section_html__1  = new \ZMT\Theme\Config\Modules\configSectionNewHTML('sections_powered',99,'sections');
    $this->section_html__1->com_lock_status = 1;
    
  }

}
