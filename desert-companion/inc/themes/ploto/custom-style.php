<?php
/**
 * Enqueue User Custom styles.
 */
if( ! function_exists( 'desert_ploto_user_custom_style' ) ):
    function desert_ploto_user_custom_style() {

		$ploto_print_style = '';
		
		/*=========================================
		Slider 
		=========================================*/
		$ploto_slider_overlay 	= get_theme_mod('ploto_slider_overlay','#000000');
		$ploto_slider_opacity	= get_theme_mod('ploto_slider_opacity','0.6');
		list($color1, $color2, $color3) = sscanf($ploto_slider_overlay, "#%02x%02x%02x");
				$ploto_print_style .=".dt_slider .dt_slider-wrapper {
					background-color: rgba($color1, $color2, $color3, $ploto_slider_opacity);
				}\n";	
				
        wp_add_inline_style( 'ploto-style', $ploto_print_style );
    }
endif;
add_action( 'wp_enqueue_scripts', 'desert_ploto_user_custom_style' );