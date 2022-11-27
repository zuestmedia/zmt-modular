<?php

namespace ZMT\Theme\Config\Modules;

class configCssVars extends \ZMT\Theme\DefaultConfig\configCssVars {

  /**
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

      //same presets as in ZM Pro Presets!!! if change here, also there!

      //get original values if not overwriting all
      parent::colors();

      $this->args['color_background_body'] = '#fcfcfa';

      $this->args['color_background_default'] = '#eaedea';
      $this->args['color_background_gradient_default'] = '#eaedea';

      $this->args['color_background_muted'] = '#d5d6d2';
      $this->args['color_background_gradient_muted'] = '#d5d6d2';

      $this->args['color_background_primary'] = '#3a5199';
      $this->args['color_background_gradient_primary'] = '#3a5199';

      $this->args['color_background_secondary'] = '#2f2e33';
      $this->args['color_background_gradient_secondary'] = '#2f2e33';

      $this->args['color_text_emphasis'] = '#111111';
      $this->args['color_text_default'] = '#222222';
      $this->args['color_text_muted'] = '#444444';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['color_text_link'] = '#3a5199';
      $this->args['color_text_link_hover'] = '#294086';

      $this->args['color_border'] = '#999999';

      $this->args['logo_color'] = '#111111';//global-emphasis-color
      $this->args['logo_color_hover'] = '#111111';//global-emphasis-color

      $this->args['navbar_item_color'] = '#444444';//global-muted-color
      $this->args['navbar_item_color_hover'] = '#222222';//global-color
      $this->args['navbar_item_color_active_onclick'] = '#111111';//global-emphasis-color

      $this->args['navbar_dropdown_background'] = '#fcfcfa';//color_background_body

    }

    //same presets as in ZM Pro Presets!!! if change here, also there!
    protected function colors_light() {
      $this->colors();
    }
    protected function colors_dark() {
      $this->colors();

      $this->args['color_background_body'] = '#111111';

      $this->args['color_background_default'] = '#222222';
      $this->args['color_background_gradient_default'] = '#222222';

      $this->args['color_background_muted'] = '#444444';
      $this->args['color_background_gradient_muted'] = '#444444';

      $this->args['color_text_emphasis'] = '#ffffff';
      $this->args['color_text_default'] = '#eeedef';
      $this->args['color_text_muted'] = '#e3e3e3';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['color_text_link'] = '#eeedef';
      $this->args['color_text_link_hover'] = '#ffffff';

      $this->args['color_border'] = '#999999';

      $this->args['logo_color'] = '#ffffff';//global-emphasis-color
      $this->args['logo_color_hover'] = '#ffffff';//global-emphasis-color

      $this->args['navbar_item_color'] = '#e3e3e3';//global-muted-color
      $this->args['navbar_item_color_hover'] = '#eeedef';//global-color
      $this->args['navbar_item_color_active_onclick'] = '#ffffff';//global-emphasis-color

      $this->args['navbar_dropdown_background'] = '#111111';

    }
    protected function body() {
      parent::body();
      $this->args['body_font_family'] = 'Arial, sans-serif';
    }
    protected function heading() {
      parent::heading();
      $this->args['heading_font_family'] = 'Trebuchet MS, sans-serif';
      $this->args['heading_font_weight'] = '600';
    }
    protected function logo() {
      parent::logo();
      $this->args['logo_fontfamily'] = 'Trebuchet MS, sans-serif';
    }
    protected function navbar() {
      parent::navbar();
      $this->args['navbar_fontfamily'] = 'Arial, sans-serif';
      $this->args['navbar_fontsize'] = '15px';
      $this->args['navbar_fontweight'] = '600';
      $this->args['navbar_text_transform'] = 'uppercase';
    }



}
