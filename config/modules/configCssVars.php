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

      $this->args['color_background_default'] = '#ffffff';
      $this->args['color_background_gradient_default'] = '#ffffff';

      $this->args['color_background_muted'] = '#f8f8f8';
      $this->args['color_background_gradient_muted'] = '#f8f8f8';

      $this->args['color_background_primary'] = '#dd3f8f';
      $this->args['color_background_gradient_primary'] = '#dd3f8f';

      $this->args['color_background_secondary'] = '#4e6e8e';
      $this->args['color_background_gradient_secondary'] = '#4e6e8e';

      $this->args['color_text_emphasis'] = '#2c3e50';
      $this->args['color_text_default'] = '#3a5169';
      $this->args['color_text_muted'] = '#4e6e8e';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['color_text_link'] = '#dd3f8f';
      $this->args['color_text_link_hover'] = '#dd5a9c';

      $this->args['color_border'] = '#eaecef';

      $this->args['logo_color'] = '#dd3f8f';
      $this->args['logo_color_hover'] = '#dd3f8f';
      $this->args['logo_color_inverse'] = '#ffffff';
      $this->args['logo_color_inverse_hover'] = '#ffffff';

      $this->args['navbar_dropdown_background'] = '#f8f8f8';

    }

    //same presets as in ZM Pro Presets!!! if change here, also there!
    protected function colors_light() {
      $this->colors();
    }
    protected function colors_dark() {
      $this->colors();

      $this->args['color_background_default'] = '#3C2E47';
      $this->args['color_background_gradient_default'] = '#3C2E47';

      $this->args['color_background_muted'] = '#32263B';
      $this->args['color_background_gradient_muted'] = '#32263B';

      $this->args['color_text_emphasis'] = '#ffffff';
      $this->args['color_text_default'] = '#eeedef';
      $this->args['color_text_muted'] = '#eeedef';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['navbar_dropdown_background'] = '#32263B';

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
      $this->args['logo_fontsize'] = '32px';
      $this->args['logo_fontweight'] = '600';
    }
    protected function navbar() {
      parent::navbar();
      $this->args['navbar_fontfamily'] = 'Trebuchet MS, sans-serif';
      $this->args['navbar_fontsize'] = '18px';
    }



}
