<?php

class FlexyPress_Scroll_To_Top_Core {

    private $version;

    public function __construct() {
        $this->version = '1.0.0';
        $this->define_constants();
        $this->load_langs_files();
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
    }

    public function load_langs_files() {
        load_theme_textdomain( 'fpscrolltotop', get_template_directory() . '/languages' );
    }

    public function define_constants() {
        define( 'FPSTT_VERSION', $this->version );
        define( 'FPSTT_BASE', plugin_dir_url( __DIR__ ) );
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'fp_scroll_to_top_css', FPSTT_BASE . '/assets/style.css', true );
    }

    public function enqueue_scripts() {
        wp_enqueue_script( 'fp_scroll_to_top_js', FPSTT_BASE . '/assets/script.js', [ 'jquery' ] , true );
    }

}