<?php

if ( !defined( 'ABSPATH' ) ) exit;

require_once __DIR__ . '/Admin/Admin.php';
require_once __DIR__ . '/Front/Front.php';

class FlexyPress_Scroll_To_Top_Core {

    private $version;

    public function __construct() {
        $this->version = '1.0';
        $this->define_constants();
        $this->load_langs_files();
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_styles' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ] );
        new FlexyPress_Scroll_To_Top_Menu();
        new FlexyPress_Scroll_To_Top_Front();
    }

    public function load_langs_files() {
        load_theme_textdomain( 'fpscrolltotop', get_template_directory() . '/languages' );
    }

    public function define_constants() {
        define( 'FPSTT_VERSION', $this->version );
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'fp_scroll_to_top_css', FPSTT_URL . '/assets/style.css', [], FPSTT_VERSION );
    }

    public function admin_enqueue_styles() {
        wp_enqueue_style( 'fp_scroll_to_top_admin_css', FPSTT_URL . '/assets/admin.css', [], FPSTT_VERSION );
    }

    public function enqueue_scripts() {
        wp_enqueue_script( 'fp_scroll_to_top_js', FPSTT_URL . '/assets/script.js', [ 'jquery' ], FPSTT_VERSION, true );
    }

    public function admin_enqueue_scripts() {
        wp_enqueue_script( 'fp_scroll_to_top_admin_js', FPSTT_URL . '/assets/admin.js', [ 'jquery' ], FPSTT_VERSION, true );
    }

}