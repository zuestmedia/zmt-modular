<?php

namespace ZMT\Theme\Config\Theme;

class gradients {

/**
  * These colors are used to define gutenberg colors
  * need to be the same as static color vars in uikit-css in assets/css.
  * and in configCssVars
  * and in theme.json
  * from wp 5.8, only theme.json is necessary
  * --> colors.php and gradients.php in theme should be removed in future somewhen!
  */

  function __construct(){

    $this->gradient_palette_array = array(
        array(
          'name'     => esc_attr__( 'Default Gradient', 'zmtheme' ),
          'gradient' => 'linear-gradient(
            var(--color_background_gradient_deg_default, 0deg),
            var(--color_background_default, #ffffff)
            var(--color_background_gradient_colstop_default, 0%),
            var(--color_background_gradient_default, #ffffff)
            var(--color_background_gradient_colstop2_default, 100%)
          )',
          'slug'     => 'gradient_default'
        ),
        array(
          'name'     => esc_attr__( 'Primary Gradient', 'zmtheme' ),
          'gradient' => 'linear-gradient(
            var(--color_background_gradient_deg_primary, 0deg),
            var(--color_background_primary, #075c97)
            var(--color_background_gradient_colstop_primary, 0%),
            var(--color_background_gradient_primary, #2b77b4)
            var(--color_background_gradient_colstop2_primary, 100%)
            )',
          'slug'     => 'gradient_primary'
        ),
        array(
          'name'     => esc_attr__( 'Secondary Gradient', 'zmtheme' ),
          'gradient' => 'linear-gradient(
            var(--color_background_gradient_deg_secondary, 0deg),
            var(--color_background_secondary, #253946)
            var(--color_background_gradient_colstop_secondary, 0%),
            var(--color_background_gradient_secondary, #314C5E)
            var(--color_background_gradient_colstop2_secondary, 100%)
            )',
          'slug'     => 'gradient_secondary'
        ),
        array(
          'name'     => esc_attr__( 'Muted Gradient', 'zmtheme' ),
          'gradient' => 'linear-gradient(
            var(--color_background_gradient_deg_muted, 0deg),
            var(--color_background_muted, #f8f8f8)
            var(--color_background_gradient_colstop_muted, 0%),
            var(--color_background_gradient_muted, #f3f3f3)
            var(--color_background_gradient_colstop2_muted, 100%)
            )',
          'slug'     => 'gradient_muted'
        ),
    );

  }

}
