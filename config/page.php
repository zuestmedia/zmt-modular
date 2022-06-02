<?php

namespace ZMT\Theme\Config;

class page extends \ZMT\Theme\Templates\_singular {

  function __construct(){

    parent::__construct();

    //remove taxonomy from page template --> can be readded in child theme if necessary
    unset($this->taxonomy);
    unset($this->taxonomy__1);

  }

}
