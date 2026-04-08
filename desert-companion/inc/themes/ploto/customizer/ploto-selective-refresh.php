<?php
function desert_ploto_site_selective_partials( $wp_customize ){		
	// ploto_information_option
	$wp_customize->selective_refresh->add_partial( 'ploto_information_option', array(
		'selector'            => '.dt_information .dt-row.dt-g-4',
	) );
	
	// ploto_why_choose_left_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_why_choose_left_ttl', array(
		'selector'            => '.front-why-choose .title-wrap .sub-title',
		'settings'            => 'ploto_why_choose_left_ttl',
		'render_callback'  => 'ploto_why_choose_left_ttl_render_callback',
	) );
	
	// ploto_why_choose_left_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_why_choose_left_subttl', array(
		'selector'            => '.front-why-choose .title-wrap .sec-title',
		'settings'            => 'ploto_why_choose_left_subttl',
		'render_callback'  => 'ploto_why_choose_left_subttl_render_callback',
	) );
	
	// ploto_why_choose_left_text
	$wp_customize->selective_refresh->add_partial( 'ploto_why_choose_left_text', array(
		'selector'            => '.front-why-choose .title-wrap .sec-text',
		'settings'            => 'ploto_why_choose_left_text',
		'render_callback'  => 'ploto_why_choose_left_text_render_callback',
	) );
	
	// ploto_why_choose_left_info_option
	$wp_customize->selective_refresh->add_partial( 'ploto_why_choose_left_info_option', array(
		'selector'            => '.front-why-choose .dt-choose-boxs',
	) );
	
	// ploto_why_choose_left_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'ploto_why_choose_left_btn_lbl', array(
		'selector'            => '.front-why-choose .dt-btn',
		'settings'            => 'ploto_why_choose_left_btn_lbl',
		'render_callback'  => 'ploto_why_choose_left_btn_lbl_render_callback',
	) );
	
	// ploto_service_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_service_ttl', array(
		'selector'            => '.front-services .title-wrap .sub-title',
		'settings'            => 'ploto_service_ttl',
		'render_callback'  => 'ploto_service_ttl_render_callback',
	) );
	
	// ploto_service_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_service_subttl', array(
		'selector'            => '.front-services .title-wrap .sec-title',
		'settings'            => 'ploto_service_subttl',
		'render_callback'  => 'ploto_service_subttl_render_callback',
	) );
	
	// ploto_service_text
	$wp_customize->selective_refresh->add_partial( 'ploto_service_text', array(
		'selector'            => '.front-services .title-wrap .sec-text',
		'settings'            => 'ploto_service_text',
		'render_callback'  => 'ploto_service_text_render_callback',
	) );
	
	// ploto_service_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'ploto_service_btn_lbl', array(
		'selector'            => '.front-services .view-all-btn .dt-btn',
		'settings'            => 'ploto_service_btn_lbl',
		'render_callback'  => 'ploto_service_btn_lbl_render_callback',
	) );
	
	// ploto_service_option
	$wp_customize->selective_refresh->add_partial( 'ploto_service_option', array(
		'selector'            => '.front-services .service-wrap',
	) );
	
	// ploto_cta_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_cta_ttl', array(
		'selector'            => '.front-cta .title-wrap .sub-title',
		'settings'            => 'ploto_cta_ttl',
		'render_callback'  => 'ploto_cta_ttl_render_callback',
	) );
	
	// ploto_cta_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_cta_subttl', array(
		'selector'            => '.front-cta .title-wrap .sec-title',
		'settings'            => 'ploto_cta_subttl',
		'render_callback'  => 'ploto_cta_subttl_render_callback',
	) );
	
	// ploto_cta_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'ploto_cta_btn_lbl', array(
		'selector'            => '.front-cta .callus-contact .dt-btn',
		'settings'            => 'ploto_cta_btn_lbl',
		'render_callback'  => 'ploto_cta_btn_lbl_render_callback',
	) );
	
	// ploto_cta_contact_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_cta_contact_ttl', array(
		'selector'            => '.front-cta .widget_contact .description',
		'settings'            => 'ploto_cta_contact_ttl',
		'render_callback'  => 'ploto_cta_contact_ttl_render_callback',
	) );
	
	// ploto_cta_contact_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_cta_contact_subttl', array(
		'selector'            => '.front-cta .widget_contact .title a',
		'settings'            => 'ploto_cta_contact_subttl',
		'render_callback'  => 'ploto_cta_contact_subttl_render_callback',
	) );
	
	// ploto_faq_left_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_faq_left_ttl', array(
		'selector'            => '.front-faq .title-wrap .sub-title',
		'settings'            => 'ploto_faq_left_ttl',
		'render_callback'  => 'ploto_faq_left_ttl_render_callback',
	) );
	
	// ploto_faq_left_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_faq_left_subttl', array(
		'selector'            => '.front-faq .title-wrap .sec-title',
		'settings'            => 'ploto_faq_left_subttl',
		'render_callback'  => 'ploto_faq_left_subttl_render_callback',
	) );
	
	// ploto_faq_option
	$wp_customize->selective_refresh->add_partial( 'ploto_faq_option', array(
		'selector'            => '.front-faq .accordion-outer'
	) );
	
	// ploto_blog_ttl
	$wp_customize->selective_refresh->add_partial( 'ploto_blog_ttl', array(
		'selector'            => '.front-blog .title-wrap .sub-title',
		'settings'            => 'ploto_blog_ttl',
		'render_callback'  => 'ploto_blog_ttl_render_callback',
	) );
	
	// ploto_blog_subttl
	$wp_customize->selective_refresh->add_partial( 'ploto_blog_subttl', array(
		'selector'            => '.front-blog .title-wrap .sec-title',
		'settings'            => 'ploto_blog_subttl',
		'render_callback'  => 'ploto_blog_subttl_render_callback',
	) );
	
	// ploto_blog_text
	$wp_customize->selective_refresh->add_partial( 'ploto_blog_text', array(
		'selector'            => '.front-blog .title-wrap .sec-text',
		'settings'            => 'ploto_blog_text',
		'render_callback'  => 'ploto_blog_text_render_callback',
	) );
	}
add_action( 'customize_register', 'desert_ploto_site_selective_partials' );