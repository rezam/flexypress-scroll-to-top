jQuery(window).on('scroll', function(){
    let height = jQuery(window).scrollTop();

    if(height > 100) {
        jQuery('#flexypress-scroll-to-top').fadeIn();
    } else {
        jQuery('#flexypress-scroll-to-top').fadeOut();
    }
})