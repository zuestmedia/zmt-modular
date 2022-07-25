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

      //widgets
      'widgets' => array(

        /*'header__section_defsidebar' =>
          array('empty'),*/

        'header__section__1_defsidebar' =>
          array(
            'text_about',
          ),

        'center__section__1_defsidebar' =>
          array(
            /*'text_about',
            'text_about',
            'text_about',*/
            // Widget ID
            'zmtext_1' => array(
            	'text' ,//type
          		array(
          		  'title' => 'What we do',
          		  'text'  => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.'
          		)
          	),
            'zmtext_2' => array(
            	'text' ,//type
          		array(
          		  'title' => 'How we do',
          		  'text'  => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.'
          		)
          	),
            'zmtext_3' => array(
            	'text' ,//type
          		array(
          		  'title' => 'Why we do',
          		  'text'  => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.'
          		)
          	),
          ),

      /*  'nav_primary__sidebar' =>
          array(
            'text_business_info',
          ),*/

        /*'sidebar-2' =>
          array(
            'text_business_info',
          ),

        'footer__section_defsidebar' =>
          array(
            'text_about',
            'search',
          ),*/

      ),

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
        'nav__menu' => array(
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
        'nav_primary__menu__1' => array(
          'name' => 'Social Links Menu',
          'items' => array(
            'link_github',
            'link_linkedin',
            'link_facebook',
            'link_twitter',
            'link_instagram',
          ),
        ),
      ),

    );

  }

}
