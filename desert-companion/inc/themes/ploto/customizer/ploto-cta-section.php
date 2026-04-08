<?php
function ploto_cta_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_options', array(
			'title' => esc_html__( 'CTA Section', 'desert-companion' ),
			'priority' => 8,
			'panel' => 'ploto_frontpage_options',
		)
	);
	
	/*=========================================
	CTA Setting
	=========================================*/
	$wp_customize->add_setting(
		'ploto_cta_options_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_cta_options_setting',
		array(
			'type' => 'hidden',
			'label' => __('CTA Setting','desert-companion'),
			'section' => 'cta_options',
		)
	);
	
	// Hide/Show Setting
	$wp_customize->add_setting(
		'ploto_cta_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_cta_options_hide_show',
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
		'ploto_cta_content_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_cta_content_options',
		array(
			'type' => 'hidden',
			'label' => __('CTA Content','desert-companion'),
			'section' => 'cta_options',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'ploto_cta_ttl',
    	array(
	        'default'			=> __('Get in Touch','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_ttl',
		array(
		    'label'   => __('Title','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'ploto_cta_subttl',
    	array(
	        'default'			=> __('Empowering Businesses <br> Innovative Solutions','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_subttl',
		array(
		    'label'   => __('Subtitle','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Button Label // 
	$wp_customize->add_setting(
    	'ploto_cta_btn_lbl',
    	array(
	        'default'			=> __('Browse Works','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_btn_lbl',
		array(
		    'label'   => __('Button Label','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'ploto_cta_btn_link',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_btn_link',
		array(
		    'label'   => __('Button Link','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Open New Tab
	$wp_customize->add_setting( 
		'ploto_cta_btn_target' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'ploto_cta_btn_target', 
		array(
			'label'	      => esc_html__( 'Open in New Tab ?', 'desert-companion' ),
			'section'     => 'cta_options',
			'type'        => 'checkbox'
		) 
	);
	
	// icon // 
	$wp_customize->add_setting(
    	'ploto_cta_contact_icon',
    	array(
	        'default' => 'far fa-phone',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 2
		)
	);	

	$wp_customize->add_control(new Ploto_Icon_Picker_Control($wp_customize, 
		'ploto_cta_contact_icon',
		array(
		    'label'   		=> __('Contact Icon','desert-companion'),
		    'section' 		=> 'cta_options'
		))  
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'ploto_cta_contact_ttl',
    	array(
	        'default'			=> __('Need Help?','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_contact_ttl',
		array(
		    'label'   => __('Contact Title','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'ploto_cta_contact_subttl',
    	array(
	        'default'			=> __('+002 (345) 6789','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_contact_subttl',
		array(
		    'label'   => __('Contact Subtitle','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Link // 
	$wp_customize->add_setting(
    	'ploto_cta_contact_link',
    	array(
	        'default'			=> 'tel:+0023456789',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_cta_contact_link',
		array(
		    'label'   => __('Contact Link','desert-companion'),
		    'section' => 'cta_options',
			'type'           => 'text',
		)  
	);
	
	// Image
	$wp_customize->add_setting( 
    	'ploto_cta_img' , 
    	array(
			'default' 			=> esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/cta-bg01.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',	
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'ploto_cta_img' ,
		array(
			'label'          => __( 'Image', 'desert-companion' ),
			'section'        => 'cta_options',
		) 
	));
}
add_action( 'customize_register', 'ploto_cta_customize_setting' );