<?php
function ploto_why_choose_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Why Choose  Section
	=========================================*/
	$wp_customize->add_section(
		'why_choose_options', array(
			'title' => esc_html__( 'Why Choose Section', 'desert-companion' ),
			'priority' => 4,
			'panel' => 'ploto_frontpage_options',
		)
	);
	
	/*=========================================
	Why Choose Setting
	=========================================*/
	$wp_customize->add_setting(
		'ploto_why_choose_options_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'ploto_why_choose_options_setting',
		array(
			'type' => 'hidden',
			'label' => __('Why Choose Setting','desert-companion'),
			'section' => 'why_choose_options',
		)
	);
	
	// Hide/Show Setting
	$wp_customize->add_setting(
		'ploto_why_choose_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'ploto_why_choose_options_hide_show',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Section','desert-companion'),
			'section' => 'why_choose_options',
		)
	);
	
	/*=========================================
	Left  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_why_choose_left_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_why_choose_left_options',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','desert-companion'),
			'section' => 'why_choose_options',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting( 
		'ploto_hs_why_choose_left_options' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'ploto_hs_why_choose_left_options', 
		array(
			'label'	      => esc_html__( 'Hide/Show ?', 'desert-companion' ),
			'section'     => 'why_choose_options',
			'type'        => 'checkbox'
		) 
	);	
	
	//  Title // 
	$wp_customize->add_setting(
    	'ploto_why_choose_left_ttl',
    	array(
	        'default'			=> __('Why Choose Us','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_why_choose_left_ttl',
		array(
		    'label'   => __('Title','desert-companion'),
		    'section' => 'why_choose_options',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'ploto_why_choose_left_subttl',
    	array(
	        'default'			=> __('Reason for Choosing Our <br>Digital Agency','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_why_choose_left_subttl',
		array(
		    'label'   => __('Subtitle','desert-companion'),
		    'section' => 'why_choose_options',
			'type'           => 'text',
		)  
	);
	
	// Text // 
	$wp_customize->add_setting(
    	'ploto_why_choose_left_text',
    	array(
	        'default'			=> __('There are many variations of passages of available but the majority have suffered alteration in some form, by injected hum randomised','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_why_choose_left_text',
		array(
		    'label'   => __('Text','desert-companion'),
		    'section' => 'why_choose_options',
			'type'           => 'textarea',
		)  
	);
	
	// Information 
		$wp_customize->add_setting( 'ploto_why_choose_left_info_option', 
			array(
			 'sanitize_callback' => 'ploto_repeater_sanitize',
			 'priority' => 7,
			 'default' => ploto_why_choose_options_default()
			)
		);
		
		$wp_customize->add_control( 
			new Ploto_Repeater( $wp_customize, 
				'ploto_why_choose_left_info_option', 
					array(
						'label'   => esc_html__('Information','desert-companion'),
						'section' => 'why_choose_options',
						'add_field_label'                   => esc_html__( 'Add New Information', 'desert-companion' ),
						'item_name'                         => esc_html__( 'Information', 'desert-companion' ),
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_icon_control' => true
					) 
				) 
			);
	
	// Upgrade
	$wp_customize->add_setting(
	'ploto_why_choose_left_info_option_upsale', 
	array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 7,
    ));
	
	$wp_customize->add_control( 
		new Desert_Companion_Customize_Upgrade_Control
		($wp_customize, 
			'ploto_why_choose_left_info_option_upsale', 
			array(
				'label'      => __( 'Information', 'desert-companion' ),
				'section'    => 'why_choose_options'
			) 
		) 
	);
	
	// Button Label // 
	$wp_customize->add_setting(
    	'ploto_why_choose_left_btn_lbl',
    	array(
	        'default'			=> __('Discover More','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 8,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_why_choose_left_btn_lbl',
		array(
		    'label'   => __('Button Label','desert-companion'),
		    'section' => 'why_choose_options',
			'type'           => 'text',
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'ploto_why_choose_left_btn_url',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',
			'priority' => 8,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_why_choose_left_btn_url',
		array(
		    'label'   => __('Button Link','desert-companion'),
		    'section' => 'why_choose_options',
			'type'           => 'text',
		)  
	);
	
	/*=========================================
	Right  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_why_choose_right_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
	'ploto_why_choose_right_options',
		array(
			'type' => 'hidden',
			'label' => __('Right Content','desert-companion'),
			'section' => 'why_choose_options',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting( 
		'ploto_hs_why_choose_right_options' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control(
	'ploto_hs_why_choose_right_options', 
		array(
			'label'	      => esc_html__( 'Hide/Show ?', 'desert-companion' ),
			'section'     => 'why_choose_options',
			'type'        => 'checkbox'
		) 
	);	
	
	// Image
	$wp_customize->add_setting( 
    	'ploto_why_choose_right_img' , 
    	array(
			'default' 			=> esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/choose-img01.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',	
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'ploto_why_choose_right_img' ,
		array(
			'label'          => __( 'Image', 'desert-companion' ),
			'section'        => 'why_choose_options',
		) 
	));
}
add_action( 'customize_register', 'ploto_why_choose_customize_setting' );