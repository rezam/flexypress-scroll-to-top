<?php

if ( !defined( 'ABSPATH' ) ) exit;

class FlexyPress_Scroll_To_Top_Front {

    public function __construct() {
        add_action( 'wp_footer', [ $this, 'add_button' ] );
    }

    public function add_button() {
        require_once FPSTT_BASE . 'app\Front\View.php';
    }
}