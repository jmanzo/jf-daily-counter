<?php
/*
*
* Begin Bootstrapping
*
*/

defined( 'ABSPATH' ) or die( 'You can not access here.' );

// Constants
define('JFDCTEXTDOMAIN', 'jf-daily-counter');
define('JFDCPLUGINDIRECTORY', __DIR__.'/../');
define('JFDCPLUGINDIRURL', plugins_url('', realpath(__DIR__.'/../jf-daily-counter.php')));

class JFDC_Bootstrapper{

    public static function Init(){

        self::register_shortcodes();
        self::register_assets();
        self::lang_setup();

    }

    public static function register_assets(){

        wp_register_script('JFDC_functions', JFDCPLUGINDIRURL.'/assets/js/functions.js', array('jquery'));

        wp_register_style('JFDC_styles', JFDCPLUGINDIRURL . '/assets/css/jf-daily-counter.css');

        wp_enqueue_style('JFDC_styles');
        wp_enqueue_script('JFDC_functions');

    }

    private static function register_shortcodes(){

        add_shortcode('jf_daily_counter', array( __CLASS__, 'get_daily_counter' ));

    }

    public static function lang_setup(){

    	load_theme_textdomain( JFDCTEXTDOMAIN, get_template_directory() . '/languages' );

    }

    public static function get_daily_counter() {

        require_once JFDCPLUGINDIRECTORY.'/src/shortcode.php';

    }

}