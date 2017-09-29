<?php
// logo-marca automatica
function m3_customize_register( $wp_customize ) {
    $wp_customize->add_setting('m3_banner-init'); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm3_banner-init', array(
        'label'    => __( 'Banner de Publicidade', 'm3' ),
        'section'  => 'title_tagline',
        'settings' => 'm3_banner-init',
    ) ) );
}
add_action( 'customize_register', 'm3_customize_register' );
?>