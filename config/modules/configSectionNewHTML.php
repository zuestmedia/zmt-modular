<?php

namespace ZMT\Theme\Config\Modules;

class configSectionNewHTML extends \ZMT\Theme\DefaultConfig\configSectionNewHTML {

    protected function sections_powered() {

      parent::sections();

      /*$this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"}},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zmtheme.com","target":"_blank","rel":"nofollow"},"content":"© 2022 ZMT Modular","close":true,"content_end":" | Built with ZM Theme Framework"}]';*/

      $this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"},"content":"© 2022 Modular WordPress Theme"},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zmtheme.com","target":"_blank","rel":"nofollow"},"content":" | Built with ZMTheme","close":true}]';

      $this->args['section_class_section'] = 'uk-section uk-section-xsmall';
      $this->args['section_class_color_background'] = 'uk-section-muted';

    }

}
