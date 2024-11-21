<?php

if ( !defined( 'ABSPATH' ) ) exit;

class FlexyPress_Scroll_To_Top_Menu {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'register_sub_menu' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'inline_styles' ] );
    }

    public function register_sub_menu() {
        add_submenu_page( 
            'themes.php', 
            __( 'FP Scroll to Top', 'fpscrolltotop' ), 
            __( 'FP Scroll to Top', 'fpscrolltotop' ), 
            'manage_options', 
            'flexypress-scroll-to-top', 
            [ $this, 'render_menu' ] 
        );
    }

    public function render_menu() {
        $this->render_form();
        require_once FPSTT_BASE . 'app\Admin\View.php';
    }

    public function inline_styles() {
        $custom_css = get_option( 'fp_scroll_to_top_css' );
        if( get_option( 'fp_scroll_to_top_color' ) ):
            $color = get_option( 'fp_scroll_to_top_color' );
            $custom_css .= "#flexypress-scroll-to-top a {color:$color}";
        endif;
        if( get_option( 'fp_scroll_to_top_background' ) ):
            $backgroundColor = get_option( 'fp_scroll_to_top_background' );
            $custom_css .= "#flexypress-scroll-to-top a {background-color:$backgroundColor}";
        endif;
        if( get_option( 'fp_scroll_to_top_side' ) ):
            if( get_option( 'fp_scroll_to_top_side' ) === 'right' ):
                $custom_css .= "div#flexypress-scroll-to-top {right:20px;left:initial}";
            else:
                $custom_css .= "div#flexypress-scroll-to-top {left:20px;right:initial}";
            endif;
        endif;
        if( get_option( 'fp_scroll_to_top_radius' ) ):
            $radius = get_option( 'fp_scroll_to_top_radius' ) . 'px';
            $custom_css .= "#flexypress-scroll-to-top a {border-radius:$radius}";
        endif;
        if ( $custom_css ) { 
            wp_register_style( 'fp_scroll_to_top_inline_css', false );
            wp_enqueue_style( 'fp_scroll_to_top_inline_css' ); 
            wp_add_inline_style( 'fp_scroll_to_top_inline_css', $custom_css );
        }
    }

    public function render_form() {
        if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset( $_POST[ 'FlexyPress_Scroll_To_Top_Menu' ] ) && $_POST[ 'FlexyPress_Scroll_To_Top_Menu' ] === 'FlexyPress_Scroll_To_Top_Menu' ) {
			if( !empty( $_POST[ 'fp_scroll_type' ] ) ) {
				update_option( 'fp_scroll_to_top_type', sanitize_text_field( $_POST[ 'fp_scroll_type' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_btn_text' ] ) ) {
				update_option( 'fp_scroll_to_top_btn_text', sanitize_text_field( $_POST[ 'fp_scroll_btn_text' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_svg_url' ] ) ) {
				update_option( 'fp_scroll_to_top_svg_url', sanitize_textarea_field( $_POST[ 'fp_scroll_svg_url' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_side' ] ) ) {
				update_option( 'fp_scroll_to_top_side', sanitize_text_field( $_POST[ 'fp_scroll_side' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_color' ] ) ) {
				update_option( 'fp_scroll_to_top_color', sanitize_text_field( $_POST[ 'fp_scroll_color' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_background' ] ) ) {
				update_option( 'fp_scroll_to_top_background', sanitize_text_field( $_POST[ 'fp_scroll_background' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_radius' ] ) ) {
				update_option( 'fp_scroll_to_top_radius', sanitize_text_field( $_POST[ 'fp_scroll_radius' ] ) );
			}

			if( !empty( $_POST[ 'fp_scroll_css' ] ) ) {
				update_option( 'fp_scroll_to_top_css', sanitize_textarea_field( $_POST[ 'fp_scroll_css' ] ) );
			}

            if( empty( $_POST[ 'fp_scroll_css' ] ) ) {
				delete_option( 'fp_scroll_to_top_css' );
			}
        }
    }
}
