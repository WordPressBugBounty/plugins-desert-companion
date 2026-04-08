<?php
function ploto_blog_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Blog  Section
	=========================================*/
	$wp_customize->add_section(
		'blog_options', array(
			'title' => esc_html__( 'Blog Section', 'desert-companion' ),
			'priority' => 24,
			'panel' => 'ploto_frontpage_options',
		)
	);
	
	/*=========================================
	Blog Setting
	=========================================*/
	$wp_customize->add_setting(
		'ploto_blog_options_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_blog_options_setting',
		array(
			'type' => 'hidden',
			'label' => __('Blog Setting','desert-companion'),
			'section' => 'blog_options',
		)
	);
	
	// Hide/Show Setting
	$wp_customize->add_setting(
		'ploto_blog_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_blog_options_hide_show',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Section','desert-companion'),
			'section' => 'blog_options',
		)
	);
	
	/*=========================================
	Header  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_blog_header_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_blog_header_options',
		array(
			'type' => 'hidden',
			'label' => __('Header','desert-companion'),
			'section' => 'blog_options',
		)
	);
	
	
	
	//  Title // 
	$wp_customize->add_setting(
    	'ploto_blog_ttl',
    	array(
	        'default'			=> __('Blog & News','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_blog_ttl',
		array(
		    'label'   => __('Title','desert-companion'),
		    'section' => 'blog_options',
			'type'           => 'text',
		)  
	);
	
	
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'ploto_blog_subttl',
    	array(
	        'default'			=> __('Get Update Blog & News','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_blog_subttl',
		array(
		    'label'   => __('Subtitle','desert-companion'),
		    'section' => 'blog_options',
			'type'           => 'text',
		)  
	);
	
	
	//  Description // 
	$wp_customize->add_setting(
    	'ploto_blog_text',
    	array(
	        'default'			=> __('There are many variations of passages of available but the majority have <br> suffered alteration in some form, by injected hum randomised.','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_blog_text',
		array(
		    'label'   => __('Description','desert-companion'),
		    'section' => 'blog_options',
			'type'           => 'textarea',
		)  
	);
	
	
	/*=========================================
	Content  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_blog_content_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'ploto_blog_content_options',
		array(
			'type' => 'hidden',
			'label' => __('Content','desert-companion'),
			'section' => 'blog_options',
		)
	);
	// Select Blog Category
	$wp_customize->add_setting(
    'ploto_blog_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 4,
		)
	);	
	$wp_customize->add_control( new Ploto_Post_Category_Control( $wp_customize, 
	'ploto_blog_cat', 
		array(
		'label'   => __('Select category for Blog','desert-companion'),
		'section' => 'blog_options',
		) 
	) );	
	
	// No. of Blog Display
	if ( class_exists( 'Ploto_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'ploto_blog_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ploto_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Ploto_Customizer_Range_Control( $wp_customize, 'ploto_blog_num', 
			array(
				'label'      => __( 'Number of Blog Display', 'desert-companion' ),
				'section'  => 'blog_options',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 100,
							'step'   => 1,
							'default_value' => 3,
						),
					),
			) ) 
		);
	}
}
add_action( 'customize_register', 'ploto_blog_customize_setting' );