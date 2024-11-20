<?php

if ( !defined( 'ABSPATH' ) ) exit;

?>

<div class="flexypress-scroll-to-top-wrap">
    <h2><?php echo __( 'FlexyPress Scroll to Top', 'fpscrolltotop' ); ?></h2>
    <form action="" method="POST">
        <input type="hidden" name="FlexyPress_Scroll_To_Top_Menu" value="FlexyPress_Scroll_To_Top_Menu">

        <div class="option-group">
            <p><?php echo __( 'Type', 'fpscrolltotop' ); ?></p>

            <label for="icon"><?php echo __( 'Icon', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="icon" name="fp_scroll_type" value="icon"<?php echo get_option( 'fp_scroll_to_top_type' ) && get_option( 'fp_scroll_to_top_type' ) == 'icon' ? ' checked' : '' ?>>

            <label for="text"><?php echo __( 'Text', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="text" name="fp_scroll_type" value="text"<?php echo get_option( 'fp_scroll_to_top_type' ) && get_option( 'fp_scroll_to_top_type' ) == 'text' ? ' checked' : '' ?>>
        </div>

        <div class="option-group">
            <p><?php echo __( 'Side', 'fpscrolltotop' ); ?></p>

            <label for="right"><?php echo __( 'Right', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="right" name="fp_scroll_side" value="right"<?php echo get_option( 'fp_scroll_to_top_side' ) && get_option( 'fp_scroll_to_top_side' ) == 'right' ? ' checked' : '' ?>>

            <label for="left"><?php echo __( 'Left', 'fpscrolltotop' ); ?></label>
            <input type="radio" id="left" name="fp_scroll_side" value="left"<?php echo get_option( 'fp_scroll_to_top_side' ) && get_option( 'fp_scroll_to_top_side' ) == 'left' ? ' checked' : '' ?>>
        </div>

        <input type="submit" value="<?php echo __( 'Send', 'fpscrolltotop' ); ?>">
    </form>
</div>
