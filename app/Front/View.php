<?php

if ( !defined( 'ABSPATH' ) ) exit;

?>

<div id="flexypress-scroll-to-top">
    <a href="#">
        <?php if( get_option( 'fp_scroll_to_top_type' ) === 'icon' ): ?>
            <img src="<?php echo get_option( 'fp_scroll_to_top_svg_url' ); ?>" alt="<?php __( 'Go to top icon', 'fpscrolltotop' ) ?>">
        <?php else: ?>
            <?php echo get_option( 'fp_scroll_to_top_btn_text' ); ?>
        <?php endif; ?>
    </a>
</div>

<?php
