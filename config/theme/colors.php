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
            'name' => 'Default Color',
            'slug' => 'default',
            'color' => 'var(--color_background_default, #ffffff)',
        ),
        array(
            'name' => 'Default Gradient Color',
            'slug' => 'default-gradient',
            'color' => 'var(--color_background_gradient_default, #ffffff)',
        ),
        array(
            'name' => 'Primary Color',
            'slug' => 'primary',
            'color' => 'var(--color_background_primary, #075c97)',
        ),
        array(
            'name' => 'Primary Gradient Color',
            'slug' => 'primary-gradient',
            'color' => 'var(--color_background_gradient_primary, #2b77b4)',
        ),
        array(
            'name' => 'Secondary Color',
            'slug' => 'secondary',
            'color' => 'var(--color_background_secondary, #253946)',
        ),
        array(
            'name' => 'Secondary Gradient Color',
            'slug' => 'secondary-gradient',
            'color' => 'var(--color_background_gradient_secondary, #314C5E)',
        ),
        array(
            'name' => 'Muted Color',
            'slug' => 'muted',
            'color' => 'var(--color_background_muted, #f8f8f8)',
        ),
        array(
            'name' => 'Muted Gradient Color',
            'slug' => 'muted-gradient',
            'color' => 'var(--color_background_gradient_muted, #f3f3f3)',
        ),
        array(
            'name' => 'Success Color',
            'slug' => 'success',
            'color' => 'var(--color_background_success, #32d296)',
        ),
        array(
            'name' => 'Warning Color',
            'slug' => 'warning',
            'color' => 'var(--color_background_warning, #faa05a)',
        ),
        array(
            'name' => 'Danger Color',
            'slug' => 'danger',
            'color' => 'var(--color_background_danger, #f0506e)',
        ),
        array(
            'name' => 'Default Text Color',
            'slug' => 'default-text',
            'color' => 'var(--color_text_default, #666)',
        ),
        array(
            'name' => 'Emphasis Text Color',
            'slug' => 'emphasis-text',
            'color' => 'var(--color_text_emphasis, #333)',
        ),
        array(
            'name' => 'Muted Text Color',
            'slug' => 'muted-text',
            'color' => 'var(--color_text_muted, #999)',
        ),
        array(
            'name' => 'Inverse Text Color',
            'slug' => 'inverse-text',
            'color' => 'rgba( var(--color_text_inverse, 255, 255, 255), 1 )',
        ),

    );

  }

}
