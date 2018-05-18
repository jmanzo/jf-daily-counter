<?php
/**
Plugin Name: JF Daily Counter
Plugin URI: https://about.me/jeanmanzo
Description: WP Plugin that shows a daily counter with a shortcode. Simple and fast, just put your shortcode where you want and replace the styles with yours.
Author: Jean Manzo
Version: 0.1
Author URI: https://about.me/jeanmanzo
*/

defined( 'ABSPATH' ) or die( 'You can not access here.' );

/**
 * Load initializer
 * 
 */
require_once __DIR__.'/src/init.php';
require_once __DIR__ . '/vendor/CMB2/init.php';

JFDC_Bootstrapper::Init();