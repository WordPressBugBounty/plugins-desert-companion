<?php
/**
 * @package   Ploto
 */

require desert_companion_plugin_dir . 'inc/themes/ploto/customizer-repeater-default.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/custom-style.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-slider-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-information-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-why-choose-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-service-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-faq-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-cta-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-blog-section.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-selective-refresh.php';
require desert_companion_plugin_dir . 'inc/themes/ploto/customizer/ploto-selective-partial.php';

if ( ! function_exists( 'desert_companion_ploto_frontpage_sections' ) ) :
	function desert_companion_ploto_frontpage_sections() {	
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-slider.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-information.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-why-choose.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-service.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-faq.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-cta.php';
		require desert_companion_plugin_dir . 'inc/themes/ploto/front/section-blog.php';
    }
	add_action( 'Desert_Companion_Ploto_frontpage', 'desert_companion_ploto_frontpage_sections' );
endif;