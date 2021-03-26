<?php 
function moina_custom_css() {
    $header_text_color = get_header_textcolor();
    $moina_custom_css = '';
    $moina_custom_css .= '
        .site-title a,
        .site-description,
        .site-title a:hover {
            color: #'.esc_attr( $header_text_color ).' ;
        }
    ';
    wp_add_inline_style( 'moina-custom', $moina_custom_css );
}
add_action( 'wp_enqueue_scripts', 'moina_custom_css' );