<?php

/**
  * ZMTheme functions.php is an Psr4AutoloaderClass
  * Important: Create a child theme to customize theme-files like functions.php
  * @package zmtheme
  * @since 1.0.0
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  zmStartUp();

  function zmStartUp(){

    $autoloader = new ZMThemePsr4AutoloaderClass;
    $autoloader->register();

    //$mainthemedir = __DIR__; //before used __DIR__ (results in different, but working, path on local / server env)
    $mainthemedir = get_template_directory();

    //Core Classes
    $autoloader->addNamespace('ZMT\Theme', $mainthemedir . '/app/');
    $autoloader->addNamespace('ZMT\Theme\Modules', $mainthemedir . '/app/modules/');
    $autoloader->addNamespace('ZMT\Theme\Templates', $mainthemedir . '/app/templates/');
    $autoloader->addNamespace('ZMT\Theme\DefaultConfig', $mainthemedir . '/app/default_config/');

    //Config Files
    $autoloader->addNamespace('ZMT\Theme\Config', $mainthemedir . '/config/');
    $autoloader->addNamespace('ZMT\Theme\Config\Modules', $mainthemedir . '/config/modules/');
    $autoloader->addNamespace('ZMT\Theme\Config\Theme', $mainthemedir . '/config/theme/');
    $autoloader->addNamespace('ZMT\Theme\Config\Presets', $mainthemedir . '/config/presets/');

    if(is_child_theme()){

      $childthemedir = get_stylesheet_directory();

      $autoloader->addNamespace('ZMT\Theme\Child', $childthemedir . '/app/');
      $autoloader->addNamespace('ZMT\Theme\Child\Modules', $childthemedir . '/app/modules/');

      $autoloader->addNamespace('ZMT\Theme\Child\Config', $childthemedir . '/config/');
      $autoloader->addNamespace('ZMT\Theme\Child\Config\Modules', $childthemedir . '/config/modules/');
      $autoloader->addNamespace('ZMT\Theme\Child\Config\Theme', $childthemedir . '/config/theme/');
      $autoloader->addNamespace('ZMT\Theme\Child\Config\Presets', $childthemedir . '/config/presets/');

    }

    new \ZMT\Theme\Init();

  }


  class ZMThemePsr4AutoloaderClass {

  /**
    * An associative array where the key is a namespace prefix and the value
    * is an array of base directories for classes in that namespace.
    *
    * @var array
    */
    protected $prefixes = array();

  /**
    * Register loader with SPL autoloader stack.
    *
    * @return void
    */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

  /**
    * Adds a base directory for a namespace prefix.
    *
    * @param string $prefix The namespace prefix.
    * @param string $base_dir A base directory for class files in the
    * namespace.
    * @param bool $prepend If true, prepend the base directory to the stack
    * instead of appending it; this causes it to be searched first rather
    * than last.
    * @return void
    */
    public function addNamespace($prefix, $base_dir, $prepend = false)
    {
        // normalize namespace prefix
        $prefix = trim($prefix, '\\') . '\\';

        // normalize the base directory with a trailing separator
        $base_dir = rtrim($base_dir, DIRECTORY_SEPARATOR) . '/';

        // initialize the namespace prefix array
        if (isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = array();
        }

        // retain the base directory for the namespace prefix
        if ($prepend) {
            array_unshift($this->prefixes[$prefix], $base_dir);
        } else {
            array_push($this->prefixes[$prefix], $base_dir);
        }
    }

  /**
    * Loads the class file for a given class name.
    *
    * @param string $class The fully-qualified class name.
    * @return mixed The mapped file name on success, or boolean false on
    * failure.
    */
    public function loadClass($class)
    {
        // the current namespace prefix
        $prefix = $class;

        // work backwards through the namespace names of the fully-qualified
        // class name to find a mapped file name
        while (false !== $pos = strrpos($prefix, '\\')) {

            // retain the trailing namespace separator in the prefix
            $prefix = substr($class, 0, $pos + 1);

            // the rest is the relative class name
            $relative_class = substr($class, $pos + 1);

            // try to load a mapped file for the prefix and relative class
            $mapped_file = $this->loadMappedFile($prefix, $relative_class);
            if ($mapped_file) {
                return $mapped_file;
            }

            // remove the trailing namespace separator for the next iteration
            // of strrpos()
            $prefix = rtrim($prefix, '\\');
        }

        // never found a mapped file
        return false;
    }

  /**
    * Load the mapped file for a namespace prefix and relative class.
    *
    * @param string $prefix The namespace prefix.
    * @param string $relative_class The relative class name.
    * @return mixed Boolean false if no mapped file can be loaded, or the
    * name of the mapped file that was loaded.
    */
    protected function loadMappedFile($prefix, $relative_class)
    {
        // are there any base directories for this namespace prefix?
        if (isset($this->prefixes[$prefix]) === false) {
            return false;
        }

        // look through base directories for this namespace prefix
        foreach ($this->prefixes[$prefix] as $base_dir) {

            // replace the namespace prefix with the base directory,
            // replace namespace separators with directory separators
            // in the relative class name, append with .php
            $file = $base_dir
                  . str_replace('\\', '/', $relative_class)
                  . '.php';

            // if the mapped file exists, require it
            if ($this->requireFile($file)) {
                // yes, we're done
                return $file;
            }
        }

        // never found it
        return false;
    }

  /**
    * If a file exists, require it from the file system.
    *
    * @param string $file The file to require.
    * @return bool True if the file exists, false if not.
    */
    protected function requireFile($file)
    {
        if (file_exists($file)) {
            require $file;
            return true;
        }
        return false;
    }

  }


/**
* Hook everything!!!!
*
* alles ist in classes via add_actions definiert...!
*
* after_setup_theme	Generally used to initialize theme settings/options.
* This is the first action hook available to themes, triggered immediately
* after the active theme's functions.php file is loaded. add_theme_support()
* should be called here, since the init action hook is too late to add some
* features. At this stage, the current user is not yet authenticated.*
*
* so wird theme zuerst, dann plugins geladen (--> plugins bei action init, ein paar actions später)
*
**/

/**
* Place your custom code after here:
*/

/**
* ZMTheme Framework Hooks in functions.php
*
* Please Note: --> If ZM Theme "extended theme settings" are activated in admin panel, most ZMTheme
* Framework hooks don't work because $zmtheme Object Values will be overwritten in a later stage
* with options defined on settingspage.
*
* If settings are set inactive, hooks you set will overwrite default settings.
*
* Some Examples how you could use ZMTheme Framework hooks below:
*/

/**
* Always! use "global $zmtheme" variable, to be able to define theme settings!
* one time is enough :)
*
*    global $zmtheme;
*
*/
//global $zmtheme;

/**
* set theme default direction to rtl! without zmtoolbox installed.
* this hook works only, if zmtoolbox plugin is not activated!
* else, if zmtb is installed, use the 2 most default settings for css and settings onoff switch!
*
*     $zmtheme['main']->setCss('/core/assets/css/uikit-core-rtl.min.css');
*
*/
//$zmtheme['main']->setCss('/core/assets/css/uikit-core-rtl.min.css');

/**
* set custom styling for section header_bot
*
*     $zmtheme['header_bot']->setSectionClassStyle('uk-section-secondary');
*
*/
//$zmtheme['header_bot']->setSectionClassStyle('uk-section-secondary');


//to add another nav objects
/*
  global $zmtheme;
  $zmtheme['default_settings']->settings->config_prepare_nav_choices = array(
    array('option'=> __( 'Default', 'zmplugin' ),'value'=>'nav'),//always required!!!
    array('option'=> __( 'Primary', 'zmplugin' ),'value'=>'nav_primary'),
    array('option'=> __( 'Secondary', 'zmplugin' ),'value'=>'nav_secondary'),
    array('option'=> __( 'Secondarssy', 'zmplugin' ),'value'=>'nav_sssecondary'),
  );
*/
