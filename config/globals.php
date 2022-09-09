<?php

namespace ZMT\Theme\Config;

class globals extends \ZMT\Theme\Templates\_globals {

  function __construct(){

    parent::__construct();

    $this->colors  = new \ZMT\Theme\Config\Modules\configCssVars('colors');
    $this->body  = new \ZMT\Theme\Config\Modules\configCssVars('body');
    $this->heading  = new \ZMT\Theme\Config\Modules\configCssVars('heading');
    $this->logo  = new \ZMT\Theme\Config\Modules\configCssVars('logo');
    $this->navbar  = new \ZMT\Theme\Config\Modules\configCssVars('navbar');

  }

}
