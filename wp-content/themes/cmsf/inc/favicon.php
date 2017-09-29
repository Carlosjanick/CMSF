<?php

// fav-icon automatico automatica
function m2_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm2_favicon' ); 
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm2_favicon', array(
        'label'    => __( 'FavIcon do Site', 'm2' ),
        'section'  => 'title_tagline',
        'settings' => 'm2_favicon',
    ) ) );
}
add_action( 'customize_register', 'm2_customize_register' );

?>