<?php

namespace ZMT\Theme\Config\Modules;

class configSectionNewHTML extends \ZMT\Theme\DefaultConfig\configSectionNewHTML {

  protected function sections_powered() {

    parent::sections();

    $this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"},"content":"© '.date('Y').' Modular"},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zuestmedia.com/themes/","target":"_blank","rel":"nofollow noopener noreferrer","uk-tooltip":"title:'.__('Opens in new tab','zmt-modular').';pos: right"},"content":[{"tag":"span","attributes":{"class":""},"content":" | ZuestMedia WordPress Themes","close":true},{"tag":"i","attributes":{"class":"uk-margin-left-small","uk-icon":"link","aria-hidden":"true"},"close":true},{"tag":"span","attributes":{"class":"screen-reader-text"},"content":" ('.__('Opens in new tab','zmt-modular').')","close":true}],"close":true}]';

    $this->args['section_class_section'] = 'uk-section uk-section-xsmall';

  }

}
