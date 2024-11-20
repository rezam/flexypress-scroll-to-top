<?php

/**
 * Plugin Name: FlexyPress Scroll to Top
 * Description: Customizable scroll to top button.
 * Author: rezamas
 * Author URI: https://flexypress.com/flexypress-scroll-to-top
 * Requires at least: 5.0
 * Version: 1.0
 * Licence: GPL v2 or later
 * Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fpscrolltotop
 * Domain Path: /languages
 */

if ( !defined( 'ABSPATH' ) ) exit;

define( 'FPSTT_BASE', plugin_dir_path( __FILE__ ) );
define( 'FPSTT_URL', plugin_dir_url( __FILE__ ) );

require_once 'app/Core.php';

new FlexyPress_Scroll_To_Top_Core();