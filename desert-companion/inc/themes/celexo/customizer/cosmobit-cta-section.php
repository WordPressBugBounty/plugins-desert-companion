<?php
function cosmobit_cta3_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta3_options', array(
			'title' => esc_html__( 'CTA Section', 'desert-companion' ),
			'priority' => 7,
			'panel' => 'cosmobit_frontpage2_options',
		)
	);
	
	/*=========================================
	CTA Setting
	=========================================*/
	$wp_customize->add_setting(
		'cosmobit_cta2_options_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'cosmobit_cta2_options_setting',
		array(
			'type' => 'hidden',
			'label' => __('CTA Setting','desert-companion'),
			'section' => 'cta3_options',
		)
	);
	
	// Hide/Show Setting
	$wp_customize->add_setting(
		'cosmobit_cta2_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'cosmobit_cta2_options_hide_show',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Section','desert-companion'),
			'section' => 'cta3_options',
		)
	);
	
	/*=========================================
	Content  Section
	=========================================*/
	$wp_customize->add_setting(
		'cosmobit_cta3_content_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cosmobit_cta3_content_options',
		array(
			'type' => 'hidden',
			'label' => __('CTA Content','desert-companion'),
			'section' => 'cta3_options',
		)
	);
	
	//  Text // 
	$wp_customize->add_setting(
    	'cosmobit_cta3_text',
    	array(
	        'default'			=> __('“Some of the History of Our Company is that We are Catching up through Video”','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cosmobit_cta3_text',
		array(
		    'label'   => __('Text','desert-companion'),
		    'section' => 'cta3_options',
			'type'           => 'textarea',
		)  
	);
	
	// Button Label // 
	$wp_customize->add_setting(
    	'cosmobit_cta3_btn_lbl',
    	array(
	        'default'			=> 'Get An Appoinment',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cosmobit_cta3_btn_lbl',
		array(
		    'label'   => __('Button Label','desert-companion'),
		    'section' => 'cta3_options',
			'type'           => 'text',
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'cosmobit_cta3_btn_link',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_url',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cosmobit_cta3_btn_link',
		array(
		    'label'   => __('Button Link','desert-companion'),
		    'section' => 'cta3_options',
			'type'           => 'text',
		)  
	);
	
	
	
	/*=========================================
	Background  Section
	=========================================*/
	$wp_customize->add_setting(
		'cosmobit_cta3_bg_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'cosmobit_cta3_bg_options',
		array(
			'type' => 'hidden',
			'label' => __('Background','desert-companion'),
			'section' => 'cta3_options',
		)
	);
	
	// Image
	$wp_customize->add_setting( 
    	'cosmobit_cta3_bg_img' , 
    	array(
			'default' 			=> esc_url(desert_companion_plugin_url . '/inc/themes/celexo/assets/images/cta-two-bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_url',	
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cosmobit_cta3_bg_img' ,
		array(
			'label'          => __( 'Background Image', 'desert-companion' ),
			'section'        => 'cta3_options',
		) 
	));
	
	
	// opacity
	if ( class_exists( 'Cosmobit_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'cosmobit_cta3_opacity',
			array(
				'default'	      => '0.85',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'cosmobit_sanitize_range_value',
				'priority' => 7,
			)
		);
		$wp_customize->add_control( 
		new Cosmobit_Customizer_Range_Control( $wp_customize, 'cosmobit_cta3_opacity', 
			array(
				'label'      => __( 'opacity', 'desert-companion' ),
				'section'  => 'cta3_options',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 0,
							'max'           => 0.9,
							'step'          => 0.1,
							'default_value' => 0.85,
						),
					),
			) ) 
		);
	}
	
	 // Overlay Color
	$wp_customize->add_setting(
	'cosmobit_cta3_overlay', 
	array(
		'default'	      => '#161C2D',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 8,
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'cosmobit_cta3_overlay', 
			array(
				'label'      => __( 'Overlay Color', 'desert-companion' ),
				'section'    => 'cta3_options'
			) 
		) 
	);
	
}
add_action( 'customize_register', 'cosmobit_cta3_customize_setting' );