<?php

namespace ZMT\Theme\Config\Theme;

class colors {

/**
  * These colors are used to define gutenberg colors
  * need to be the same as static color vars in uikit-css in assets/css.
  * and in configCssVars
  * and in theme.json
  * from wp 5.8, only theme.json is necessary
  * --> colors.php and gradients.php in theme should be removed in future somewhen!
  */

  function __construct(){

    $this->color_palette_array = array(
        array(
            'name' => __( 'Default Color', 'zmtheme' ),
            'slug' => 'default',
            'color' => 'var(--color_background_default, #ffffff)',
        ),
        array(
            'name' => __( 'Default Gradient Color', 'zmtheme' ),
            'slug' => 'default-gradient',
            'color' => 'var(--color_background_gradient_default, #ffffff)',
        ),
        array(
            'name' => __( 'Primary Color', 'zmtheme' ),
            'slug' => 'primary',
            'color' => 'var(--color_background_primary, #075c97)',
        ),
        array(
            'name' => __( 'Primary Gradient Color', 'zmtheme' ),
            'slug' => 'primary-gradient',
            'color' => 'var(--color_background_gradient_primary, #2b77b4)',
        ),
        array(
            'name' => __( 'Secondary Color', 'zmtheme' ),
            'slug' => 'secondary',
            'color' => 'var(--color_background_secondary, #253946)',
        ),
        array(
            'name' => __( 'Secondary Gradient Color', 'zmtheme' ),
            'slug' => 'secondary-gradient',
            'color' => 'var(--color_background_gradient_secondary, #314C5E)',
        ),
        array(
            'name' => __( 'Muted Color', 'zmtheme' ),
            'slug' => 'muted',
            'color' => 'var(--color_background_muted, #f8f8f8)',
        ),
        array(
            'name' => __( 'Muted Gradient Color', 'zmtheme' ),
            'slug' => 'muted-gradient',
            'color' => 'var(--color_background_gradient_muted, #f3f3f3)',
        ),
        array(
            'name' => __( 'Success Color', 'zmtheme' ),
            'slug' => 'success',
            'color' => 'var(--color_background_success, #32d296)',
        ),
        array(
            'name' => __( 'Warning Color', 'zmtheme' ),
            'slug' => 'warning',
            'color' => 'var(--color_background_warning, #faa05a)',
        ),
        array(
            'name' => __( 'Danger Color', 'zmtheme' ),
            'slug' => 'danger',
            'color' => 'var(--color_background_danger, #f0506e)',
        ),
        array(
            'name' => __( 'Default Text Color', 'zmtheme' ),
            'slug' => 'default-text',
            'color' => 'var(--color_text_default, #666)',
        ),
        array(
            'name' => __( 'Emphasis Text Color', 'zmtheme' ),
            'slug' => 'emphasis-text',
            'color' => 'var(--color_text_emphasis, #333)',
        ),
        array(
            'name' => __( 'Muted Text Color', 'zmtheme' ),
            'slug' => 'muted-text',
            'color' => 'var(--color_text_muted, #999)',
        ),
        array(
            'name' => __( 'Inverse Text Color', 'zmtheme' ),
            'slug' => 'inverse-text',
            'color' => 'rgba( var(--color_text_inverse, 255, 255, 255), 1 )',
        ),

    );

  }

}
