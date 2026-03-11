<?php
function chromax_cta_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_options', array(
			'title' => esc_html__( 'CTA Section', 'desert-companion' ),
			'priority' => 8,
			'panel' => 'chromax_frontpage_options',
		)
	);
	
	/*=========================================
	CTA Setting
	=========================================*/
	$wp_customize->add_setting(
		'cta_options_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'cta_options_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('CTA Setting','desert-companion'),
			'section' => 'cta_options',
		)
	);

	// Hide/Show Setting
	$wp_customize->add_setting(
		'chromax_cta_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'chromax_cta_options_hide_show',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Section','desert-companion'),
			'section' => 'cta_options',
		)
	);
	
	/*=========================================
	Content  Section
	=========================================*/
	$wp_customize->add_setting(
		'chromax_cta_content_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'chromax_cta_content_options',
		array(
			'type' => 'hidden',
			'label' => __('CTA Content','desert-companion'),
			'section' => 'cta_options',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'chromax_cta_ttl',
    	array(
	        'default'			=> __('Grab up to 35% off','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'chromax_cta_ttl',
		array(
		    'label'   => __('Title','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'chromax_cta_subttl',
    	array(
	        'default'			=> __('Have any project to work with us','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'chromax_cta_subttl',
		array(
		    'label'   => __('Subtitle','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	

	//  Text // 
	$wp_customize->add_setting(
    	'chromax_cta_text',
    	array(
	        'default'			=> __("Limited time offer, don't miss the opportunity",'desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'chromax_cta_text',
		array(
		    'label'   => __('Text','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Button Label // 
	$wp_customize->add_setting(
    	'chromax_cta_btn_lbl',
    	array(
			'default'			=> __('Contact With Us','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'chromax_cta_btn_lbl',
		array(
		    'label'   => __('Button Label','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'chromax_cta_btn_link',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'chromax_cta_btn_link',
		array(
		    'label'   => __('Button Link','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	
	// Image
	$wp_customize->add_setting( 
    	'chromax_cta_img' , 
    	array(
			'default' 			=> esc_url(desert_companion_plugin_url . '/inc/themes/chromax/assets/images/cta-img.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'chromax_sanitize_url',	
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'chromax_cta_img' ,
		array(
			'label'          => __( 'Image', 'desert-companion' ),
			'section'        => 'cta_options',
		) 
	));	
}
add_action( 'customize_register', 'chromax_cta_customize_setting' );