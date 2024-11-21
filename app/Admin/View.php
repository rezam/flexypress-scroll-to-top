<?php

if ( !defined( 'ABSPATH' ) ) exit;

?>

<div class="flexypress-scroll-to-top-wrap">
    <h2><?php echo __( 'FlexyPress Scroll to Top', 'fpscrolltotop' ); ?></h2>
    <form action="" method="POST">
        <input type="hidden" name="FlexyPress_Scroll_To_Top_Menu" value="FlexyPress_Scroll_To_Top_Menu">

        <div class="option-group option-group-type">
            <p><?php echo __( 'Type', 'fpscrolltotop' ); ?></p>

            <label for="icon"><?php echo __( 'Icon', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="icon" name="fp_scroll_type" value="icon"<?php echo empty( get_option( 'fp_scroll_to_top_type' ) ) || get_option( 'fp_scroll_to_top_type' ) == 'icon' ? ' checked' : '' ?>>

            <label for="text"><?php echo __( 'Text', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="text" name="fp_scroll_type" value="text"<?php echo get_option( 'fp_scroll_to_top_type' ) && get_option( 'fp_scroll_to_top_type' ) == 'text' ? ' checked' : '' ?>>
        </div>

        <div class="option-group option-group-text">
            <p><?php echo __( 'Text', 'fpscrolltotop' ); ?></p>

            <input type="text" id="fp_scroll_btn_text" name="fp_scroll_btn_text" value="<?php echo get_option( 'fp_scroll_to_top_btn_text' ) ? get_option( 'fp_scroll_to_top_btn_text' ) :  __( 'Top', 'fpscrolltotop' ); ?>">
        </div>

        <div class="option-group option-group-svg">
            <p><?php echo __( 'SVG/Img URL', 'fpscrolltotop' ); ?></p>

            <input type="url" id="fp_scroll_svg_url" name="fp_scroll_svg_url" value="<?php echo get_option( 'fp_scroll_to_top_svg_url' ) ? get_option( 'fp_scroll_to_top_svg_url' ) : '#'; ?>">
        </div>

        <div class="option-group option-group-side">
            <p><?php echo __( 'Side', 'fpscrolltotop' ); ?></p>

            <label for="left"><?php echo __( 'Left', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="left" name="fp_scroll_side" value="left"<?php echo get_option( 'fp_scroll_to_top_side' ) && get_option( 'fp_scroll_to_top_side' ) == 'left' ? ' checked' : '' ?>>

            <label for="right"><?php echo __( 'Right', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="right" name="fp_scroll_side" value="right"<?php echo empty( get_option( 'fp_scroll_to_top_side' ) ) || get_option( 'fp_scroll_to_top_side' ) == 'right' ? ' checked' : '' ?>>
        </div>

        <div class="option-group option-group-color">
            <p><?php echo __( 'Color', 'fpscrolltotop' ); ?></p>

            <input type="color" id="fp_scroll_color" name="fp_scroll_color" value="<?php echo get_option( 'fp_scroll_to_top_color' ) ? get_option( 'fp_scroll_to_top_color' ) : '#FFFFFF'; ?>">
        </div>

        <div class="option-group option-group-background">
            <p><?php echo __( 'Background color', 'fpscrolltotop' ); ?></p>
            <input type="color" id="fp_scroll_background" name="fp_scroll_background" value="<?php echo get_option( 'fp_scroll_to_top_background' ) ? get_option( 'fp_scroll_to_top_background' ) : '#0093FF'; ?>">
        </div>

        <div class="option-group option-group-radius">
            <p><?php echo __( 'Border radius', 'fpscrolltotop' ); ?></p>

            <input type="number" id="fp_scroll_radius" name="fp_scroll_radius" style="width:60px" min=0 max=300 value="<?php echo get_option( 'fp_scroll_to_top_radius' ) ? get_option( 'fp_scroll_to_top_radius' ) : '10'; ?>">
            <label for="radius"><?php echo __( 'px', 'fpscrolltotop' ); ?></label>
        </div>

        <div class="option-group option-group-css">
            <p><?php echo __( 'Custom CSS', 'fpscrolltotop' ); ?></p>

            <textarea name="fp_scroll_css" id="fp_scroll_css" cols="50" rows="10"><?php echo get_option( 'fp_scroll_to_top_css' ) ? get_option( 'fp_scroll_to_top_css' ) : ''; ?></textarea>
        </div>

        <input type="submit" value="<?php echo __( 'Save Settings', 'fpscrolltotop' ); ?>">
    </form>
</div>
