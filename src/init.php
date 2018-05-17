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
        self::register_plugin_options();

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

    private static function register_plugin_options() {

        add_action( 'cmb2_admin_init', array( __CLASS__, 'get_plugin_options' ) );

    }

    public static function lang_setup(){

    	load_theme_textdomain( JFDCTEXTDOMAIN, get_template_directory() . '/languages' );

    }

    public static function get_daily_counter() {

        require_once JFDCPLUGINDIRECTORY.'/src/shortcode.php';

    }

    public static function get_plugin_options() {
        /**
         * Registers options page menu item and form.
         */
        $cmb_options = new_cmb2_box( array(
            'id'           => 'jfdc_option_metabox',
            'title'        => esc_html__( 'JF Daily Counter', JFDCTEXTDOMAIN ),
            'object_types' => array( 'options-page' ),
            'option_key'      => 'jfdc_options',
        ) );
        
        $cmb_options->add_field( array(
            'name' => __( 'Quantity Counter', JFDCTEXTDOMAIN ),
            'desc' => __( 'Quantity to show in frontend. Example: 100, 1000, 100000 or whatever you want.', JFDCTEXTDOMAIN ),
            'id'   => 'jdfc_quantity',
            'type' => 'text',
            'default' => '100000',
        ) );
        $cmb_options->add_field( array(
            'name' => 'Date Picker from you want count',
            'id'   => 'jfdc_date_counter',
            'type' => 'text_date',
            'date_format' => 'Y-m-d',
            'default' => '2018-05-01',
        ) );
    }

}