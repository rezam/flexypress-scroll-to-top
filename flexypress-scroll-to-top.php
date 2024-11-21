<?php

/**
 * Plugin Name: FlexyPress Scroll to Top
 * Plugin URI: https://flexypress.com/
 * Description: Customizable scroll to top button.
 * Version: 1.0
 * Author: rezamas
 * Author URI: https://flexypress.com/flexypress-scroll-to-top
 * Text Domain: flexypress-scroll-to-top
 * Domain Path: /languages
 * Requires at least: 6.0
 * Licence: GPL v2 or later
 * Requires PHP: 7.4
 * License: GPL v2 or later
 * Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( !defined( 'ABSPATH' ) ) exit;

define( 'FPSTT_BASE', plugin_dir_path( __FILE__ ) );
define( 'FPSTT_URL', plugin_dir_url( __FILE__ ) );

require_once 'app/Core.php';

new FlexyPress_Scroll_To_Top_Core();