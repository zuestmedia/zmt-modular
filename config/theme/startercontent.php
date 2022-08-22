<?php

namespace ZMT\Theme\Config\Theme;

class startercontent {

  function __construct(){

    $this->content = array(

      /**
      * See here:
      * https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
      * https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyseventeen/functions.php?rev=39373#L106
      * https://core.trac.wordpress.org/browser/trunk/src/wp-includes/theme.php?rev=39373#L1910
      * https://www.ibenic.com/create-starter-content-wordpress-themes/
      */

      //posts
      'posts' => array(
         'home',
         'about',
         'blog',
         'contact',
       ),

      //options
      'options' => array(
        'show_on_front' => 'page',
        'page_on_front' => '{{home}}',
        'page_for_posts' => '{{blog}}',
      ),

      //theme_mods header__section_viewstatus
      //only working if theme settings-status >=2
    /*  'theme_mods' => array(
        'header__section_viewstatus' => 1,//works only if settings status is 2 or higher! --> hm... ev set object directly!
      ),*/

      //nav
      'nav_menus' => array(
        'nav__menu__1' => array(
          'name' => 'Main Menu',
          'items' => array(
            'page_home',
            'page_about',
            'page_blog',
            'page_contact',
          ),
        ),
        'offcanvas__menu' => array(
          'name' => 'Main Menu',
          'items' => array(
            'page_home',
            'page_about',
            'page_blog',
            'page_contact',
          ),
        ),
      ),

    );

  }

}
