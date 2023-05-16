<?php

namespace ZMT\Theme\Config\Modules;

class configSectionNewHTML extends \ZMT\Theme\DefaultConfig\configSectionNewHTML {

  protected function sections_powered() {

    parent::sections();

    $this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"},"content":"© 2023 Modular"},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zuestmedia.com/themes/","target":"_blank","rel":"nofollow"},"content":" | ZuestMedia WordPress Themes","close":true}]';

    $this->args['section_class_section'] = 'uk-section uk-section-xsmall';

  }

}
