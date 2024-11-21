<?php

if ( !defined( 'ABSPATH' ) ) exit;

?>

<div class="flexypress-scroll-to-top-wrap">
    <h2><?php echo esc_html__( 'FlexyPress Scroll to Top', 'flexypress-scroll-to-top' ); ?></h2>
    <form action="" method="POST">
        <?php wp_nonce_field( 'flexypress_scroll_to_top_nonce', 'flexypress_scroll_to_top_nonce_field' ); ?>

        <input type="hidden" name="FlexyPress_Scroll_To_Top_Menu" value="FlexyPress_Scroll_To_Top_Menu">

        <div class="option-group option-group-type">
            <p><?php echo esc_html__( 'Type', 'flexypress-scroll-to-top' ); ?></p>

            <label for="icon"><?php echo esc_html__( 'Icon', 'flexypress-scroll-to-top' ); ?></label>
            <input type="radio" id="icon" name="fp_scroll_type" value="icon"<?php echo empty( esc_attr ( get_option( 'fp_scroll_to_top_type' ) ) ) || esc_attr( get_option( 'fp_scroll_to_top_type' ) ) == 'icon' ? ' checked' : '' ?>>

            <label for="text"><?php echo esc_html__( 'Text', 'flexypress-scroll-to-top' ); ?></label>
            <input type="radio" id="text" name="fp_scroll_type" value="text"<?php echo esc_attr( get_option( 'fp_scroll_to_top_type' ) ) && esc_attr( get_option( 'fp_scroll_to_top_type' ) ) == 'text' ? ' checked' : '' ?>>
        </div>

        <div class="option-group option-group-text">
            <p><?php echo esc_html__( 'Text', 'flexypress-scroll-to-top' ); ?></p>

            <input type="text" id="fp_scroll_btn_text" name="fp_scroll_btn_text" value="<?php echo esc_attr( get_option( 'fp_scroll_to_top_btn_text' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_btn_text' ) ) :  esc_html__( 'Top', 'flexypress-scroll-to-top' ); ?>">
        </div>

        <div class="option-group option-group-svg">
            <p><?php echo esc_html__( 'SVG/Img URL', 'flexypress-scroll-to-top' ); ?></p>

            <input type="url" id="fp_scroll_svg_url" name="fp_scroll_svg_url" value="<?php echo esc_attr( get_option( 'fp_scroll_to_top_svg_url' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_svg_url' ) ) : '#'; ?>">
        </div>

        <div class="option-group option-group-side">
            <p><?php echo esc_html__( 'Side', 'flexypress-scroll-to-top' ); ?></p>

            <label for="left"><?php echo esc_html__( 'Left', 'flexypress-scroll-to-top' ); ?></label>
            <input type="radio" id="left" name="fp_scroll_side" value="left"<?php echo esc_attr( get_option( 'fp_scroll_to_top_side' ) ) && esc_attr( get_option( 'fp_scroll_to_top_side' ) ) == 'left' ? ' checked' : '' ?>>

            <label for="right"><?php echo esc_html__( 'Right', 'flexypress-scroll-to-top' ); ?></label>
            <input type="radio" id="right" name="fp_scroll_side" value="right"<?php echo empty( esc_attr( get_option( 'fp_scroll_to_top_side' ) ) ) || esc_attr( get_option( 'fp_scroll_to_top_side' ) ) == 'right' ? ' checked' : '' ?>>
        </div>

        <div class="option-group option-group-color">
            <p><?php echo esc_html__( 'Color', 'flexypress-scroll-to-top' ); ?></p>

            <input type="color" id="fp_scroll_color" name="fp_scroll_color" value="<?php echo esc_attr( get_option( 'fp_scroll_to_top_color' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_color' ) ) : '#FFFFFF'; ?>">
        </div>

        <div class="option-group option-group-background">
            <p><?php echo esc_html__( 'Background color', 'flexypress-scroll-to-top' ); ?></p>
            <input type="color" id="fp_scroll_background" name="fp_scroll_background" value="<?php echo esc_attr( get_option( 'fp_scroll_to_top_background' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_background' ) ) : '#0093FF'; ?>">
        </div>

        <div class="option-group option-group-radius">
            <p><?php echo esc_html__( 'Border radius', 'flexypress-scroll-to-top' ); ?></p>

            <input type="number" id="fp_scroll_radius" name="fp_scroll_radius" style="width:60px" min=0 max=300 value="<?php echo esc_attr( get_option( 'fp_scroll_to_top_radius' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_radius' ) ) : '10'; ?>">
            <label for="radius"><?php echo esc_html__( 'px', 'flexypress-scroll-to-top' ); ?></label>
        </div>

        <div class="option-group option-group-css">
            <p><?php echo esc_html__( 'Custom CSS', 'flexypress-scroll-to-top' ); ?></p>

            <textarea name="fp_scroll_css" id="fp_scroll_css" cols="50" rows="10"><?php echo esc_attr( get_option( 'fp_scroll_to_top_css' ) ) ? esc_attr( get_option( 'fp_scroll_to_top_css' ) ) : ''; ?></textarea>
        </div>

        <input type="submit" value="<?php echo esc_html__( 'Save Settings', 'flexypress-scroll-to-top' ); ?>">
    </form>
</div>
