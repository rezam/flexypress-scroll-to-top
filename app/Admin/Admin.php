<?php

if ( !defined( 'ABSPATH' ) ) exit;

class FlexyPress_Scroll_To_Top_Menu {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'register_sub_menu' ] );
    }

    public function register_sub_menu() {
        add_submenu_page( 
            'themes.php', 
            'FP Scroll to Top', 
            'FP Scroll to Top', 
            'manage_options', 
            'flexypress-scroll-to-top', 
            [ $this, 'render_menu' ] 
        );
    }

    public function render_menu() {
        $this->render_form();
        require_once FPSTT_BASE . 'app\Admin\View.php';
    }

    public function render_form() {
        if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset( $_POST[ 'FlexyPress_Scroll_To_Top_Menu' ] ) && $_POST[ 'FlexyPress_Scroll_To_Top_Menu' ] === 'FlexyPress_Scroll_To_Top_Menu' ) {
			if( !empty( $_POST[ 'fp_scroll_type' ] )) {
				update_option( 'fp_scroll_to_top_type', sanitize_text_field( $_POST[ 'fp_scroll_type' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_side' ] )) {
				update_option( 'fp_scroll_to_top_side', sanitize_text_field( $_POST[ 'fp_scroll_side' ] ) );
			}
        }
    }
}
