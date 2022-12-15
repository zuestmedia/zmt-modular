=== ZMT Modular ===
Contributors: zuestmedia
Requires at least: 4.7
Tested up to: 6.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

ZMT Modular is a lightweight, fast and fully customizable WordPress theme based on the ZM-Theme-Framework.

== Description ==

[ZMT Modular](https://zmtheme.com/) is a lightweight, fast and fully customizable WordPress theme based on the ZM-Theme-Framework.

This theme combines the new modern features of Gutenberg Block Editor respectively concepts from Full Site Editing (FSE) with the proven classic WordPress theme structure.

= Block Templates =
With Block Templates you can create dynamic or static content with the Gutenberg Editor and embed it at any position on the website using the Template Editor. How about a featured image header or a custom footer menu? All no problem with blocks directly in Gutenberg Editor!

= Design Explorer =
For a quick start, import a preconfigured starter design directly from the Design-Explorer and get started right away.

= Customizer =
Use the Customizer to define global settings like colors, fonts, etc. and customize every part of your website.

= Template Editor <sup>*</sup> =
Thanks to the modular design, header and footer builders are a thing of the past. With the template editor (Pro) or by using a child theme you can easily create as many sections as you need in the header, center or footer area and arrange them as you like and fill them with modules. Or you can create any section with blocks as well.

= Modular structure =
You can move, show or hide all WordPress building blocks (modules) like title, content, category, keyword, post image and all other modules as you like, as well as customize the style and HTML code.

= ZMPlugin Extension (optional) =
To enable theme settings in dashboard and customizer you need ZMPlugin. ZMPlugin is a free WordPress extension to manage theme options and customizer settings of ZM-Theme-Framework based WordPress themes.

After installing the theme and the extension ZMPlugin, you can use all theme features.

The theme can also be used "standalone" in this version and/or programmatically customized via Child-Theme.

<sup>*</sup> only available in combination with ZMPro

== Resources ==

Learn more about ZM WordPress themes and plugins at [zmtheme.com](https://zmtheme.com/).

If you have any questions or need help, visit the [documentation page](https://zmtheme.com/documentation/).

You can also find us on [Github](https://github.com/zuestmedia/)!

== Frequently Asked Questions ==

= Is ZMT Modular Free? =

Yes, the ZMT Modular theme is free of charge forever, and always will be.

= Is there an extension? =

Yes, there is a free extenstion ZMPlugin which includes additional features. Find out more on [zmtheme.com](https://zmtheme.com/).

= How to install this Theme from WordPress? =

Go to Dashboard >> Appearance >> Themes >> Add New.
Enter "ZMT Modular" in the search field, click on install and activate.

= How to install this Theme via Theme-Zip-File =

Go to Dashboard >> Appearance >> Themes >> Add New >> Upload Theme.
Select the previously downloaded Theme-Zip-File and click "Install now".

== Changelog ==

= 1.0.9 =
* Removed: style.css Custom Column Break for Blocks on small screen
* Fix: ThemeJSON Gradient Color mix-up fixed
* Fix: Escaping modErrorpage -> $text_html corrected

= 1.0.8 =
* Fix: Escaping LATEST possible before output in app/modules (getModule())

= 1.0.7 =
* Fix: escape functions added/updated CommentWalker, ThemeJSON, modCommentsCounter, modCommentsList
* Removed: Skewy

= 1.0.6 =
* New: ArticleContainer imageoverlay -wrap and -size args added and new module function to display overlays
* New: Assets/img/placeholder.png
* Update: UIKIT overlay.less and transition.less
* Fix: Element -> wraps with hr or img need close:false, so no closing tag is added (ContainerArticleList, Commentspagination)

= 1.0.5 =
* New: ThemeJSON update theme.json programmatically with pallette and gradient colors
* Update: other Screenshot.png
* Update: style.css removed some styles
* Update: UIKIT Version 3.15.14 (console errors and less/css var updates)
* Update: Translations / only one textdomain
* Update: CommentWalker
* Remove: BlockPatterns.php
* Update: Helpers.php - move functions to ZMPlugin
* Update: TranslationStrings for submodule zmtheme-app
* Update: MenuWalker Accessibility, added Subtitle (Menu Description)
* Update: Only one Textdomain
* Update: Accessibility & Textstrings (Translations) updated mod and config of Authorbox, Autorlink, CommentsCounter, CommentsForms, ...
* Update: Accessibility CSSVars Colors
* Update: Templates - offcanvas below menu, taxonomy cat moved to top


= 1.0.4 =
* Update: Tested up to: 6.1

= 1.0.3 =
* Update: readme and style css
* Update: theme.json updated (v2 additional features)
* Update: added copyright and powered by
* Update: add icons via class with MenuWalker (nav-menus)
* Update: Language Files de_DE
* Fix: Text-Domain Strings
* Removed: Moved Custom Post Type for Block Templates to zmplugin

= 1.0.2 =
* Fix: Change Author URI to submit without error to WordPress Directory

= 1.0.1 =
* Fix: configContainer & configContainerArticleList remove module_inner_attrs hr, but added option in presets

= 1.0.0 =
* Update: readme.txt
* Update: screenshot.png
* Update: CSS wp-block-button no underline
* Update: Language Files
* Update: Comments mod, walker & config
* Update: configImage - remove posts caption
* Update: Authorbox/Commentslist -> Avatarsize & Class Options added & style update (border-circle)
* Remove: Starter Content
* Update: Errormenu text & link to zmplugin download
* Update: accesibility - skip to content link, html5 tags (header, main, footer), aria-label search, screen-reader-text to read-more, underline all content-links

= 0.9.11 =
* Update: Default Blog Style updated (config files)
* Update: style.css "tablet-landscape" class
* Update: UIKIT Version 3.15.10
* Update: modPostMeta not showing empty values anymore (needs update for showing serialized data if necessary in future)

= 0.9.10 =
* New: Background Image - Options for posts featured image and external url added
* New: Add a "MY Block Patterns" folder to your child-theme
* Fix: Block Separator alignment options added in style.css
* Fix: default_config optimizations
* Fix: section_content choices

= 0.9.9 =
* Update: Less/CSS no quotation marks in css vars

= 0.9.8 =
* Update: CSS Buttons / button_dark into folder

= 0.9.7 =
* Update: UIKIT Version 3.15.6
* Update: CSSVars config, presets, style.css and theme.json
* Removed: colors & gradients (kept in theme.json)
* New: CSS Type Selection

= 0.9.6 =
* Fix: Com-Type and Module labels fixed
* Update: Block Templates added assignment column

= 0.9.5
* New: Block Templates (CPT)
* Update: Startercontent simpler
* Update: UIKIT Version 3.15.3
* Update: some configFiles
* Update: Translation Files DE
* Fix: add alignfull / wide JS (to genereate CSS Var --scrollbar-width & --zm-wp-block-width) to head instead of zmtheme.js, to load faster and avoid window jumping
* Fix: update alignfull / wide css in blockeditor to fit always screen
* Fix: getQueryLoop json_decode true; wp_query needs output as array
* Removed: block-template test folders and files

= 0.9.4 =
* Update: ci/cd update
* Update: modQueryTerm added filter group control
* Update: modQueryTerm added filter-controll for portfolio js-filter-menu
* Update: UIKIT CSS overlay.less opacity to overlay-default and -primary
* Update: added var js_array_child_theme to add custom js in child themes (via config/theme.php)

= 0.9.3 =
* Update: Tested up to: 6.0.1
* Fix: post-id and -classes to most outer container
* Update: new cssvars - navbar-dropdown-background
* Removed: ie11 Support
* Update: UIKIT Version 3.15.1
* Update: configNavMenu; uk-drop removed
* Update: MenuWalker; uk-nav-parent-icon options added
* Fix: Block Templates folder renamed
* Update: Internationalization - added ZM Theme framework textdomain
* Update: Internationalization - Moved most translations to framework

= 0.9.2 =
* Update: BBPress compatibilty added

= 0.9.1 =
* Connected with ZM Update API

= 0.9.0 =
* Initial release of ZMT Modular

== The theme uses the following third-party resources ==
* uikit CSS, JS, Icons Framework
License: MIT
Source: https://getuikit.com/

* screenshot.png and placeholder.png
License: GPLv2 or later
Source: own creation of ZuestMedia GmbH, contains Google Font Icon

* Google Font Icons
License: Apache License Version 2.0
Source: https://fonts.google.com/icons

== Copyright ==
ZMT Modular WordPress Theme, Copyright 2022 zmtheme.com
ZMT Modular is distributed under the terms of the GNU GPL
