<?php
/**
Plugin Name: Jayfencing Daily Counter
Plugin URI: https://jayfencing.com/
Description: Daily counter for jayfencing site
Author: Alex Leuchner - Jean Manzo
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