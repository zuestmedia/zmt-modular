<?php

namespace ZMT\Theme\Config\Modules;

class configSectionNewHTML extends \ZMT\Theme\DefaultConfig\configSectionNewHTML {

    protected function sections_powered() {

      parent::sections();

      $this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"}},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zmtheme.com","target":"_blank","rel":"nofollow"},"content":"Modular","close":true,"content_end":" | Built with ZMTheme"}]';

      $this->args['section_class_section'] = 'uk-section uk-section-xsmall';
      $this->args['section_class_color_background'] = 'uk-section-muted';

    }

}
