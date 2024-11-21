<?php

if ( !defined( 'ABSPATH' ) ) exit;

?>

<div id="flexypress-scroll-to-top">
    <a href="#">
        <?php if( esc_attr( get_option( 'fp_scroll_to_top_type' ) ) === 'icon' ): ?>
            <img src="<?php echo esc_attr( get_option( 'fp_scroll_to_top_svg_url' ) ); ?>" alt="<?php esc_html__( 'Go to top icon', 'flexypress-scroll-to-top' ) ?>">
        <?php else: ?>
            <?php echo esc_attr( get_option( 'fp_scroll_to_top_btn_text' ) ); ?>
        <?php endif; ?>
    </a>
</div>

<?php
