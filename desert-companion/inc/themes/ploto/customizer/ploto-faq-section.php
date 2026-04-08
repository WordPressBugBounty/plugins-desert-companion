<?php
function ploto_faq_customize_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	FAQ  Section
	=========================================*/
	$wp_customize->add_section(
		'faq_options', array(
			'title' => esc_html__( 'FAQ Section', 'desert-companion' ),
			'priority' => 7,
			'panel' => 'ploto_frontpage_options',
		)
	);
	
	/*=========================================
	FAQ Setting
	=========================================*/
	$wp_customize->add_setting(
		'ploto_faq_options_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'cosmobit_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_faq_options_setting',
		array(
			'type' => 'hidden',
			'label' => __('FAQ Setting','desert-companion'),
			'section' => 'faq_options',
		)
	);
	
	// Hide/Show Setting
	$wp_customize->add_setting(
		'ploto_faq_options_hide_show'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_faq_options_hide_show',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Section','desert-companion'),
			'section' => 'faq_options',
		)
	);
	
	/*=========================================
	Left  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_faq_left_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'ploto_faq_left_options',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','desert-companion'),
			'section' => 'faq_options',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting( 
		'ploto_hs_faq_left_options' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'ploto_hs_faq_left_options', 
		array(
			'label'	      => esc_html__( 'Hide/Show ?', 'desert-companion' ),
			'section'     => 'faq_options',
			'type'        => 'checkbox'
		) 
	);	
	
	//  Title // 
	$wp_customize->add_setting(
    	'ploto_faq_left_ttl',
    	array(
	        'default'			=> __('Faq`s','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_faq_left_ttl',
		array(
		    'label'   => __('Title','desert-companion'),
		    'section' => 'faq_options',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'ploto_faq_left_subttl',
    	array(
	        'default'			=> __('Have Questions? <br>Get Expert Answers','desert-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_faq_left_subttl',
		array(
		    'label'   => __('Subtitle','desert-companion'),
		    'section' => 'faq_options',
			'type'           => 'text',
		)  
	);
	
	
	// FAQ
		$wp_customize->add_setting( 'ploto_faq_option', 
			array(
			 'sanitize_callback' => 'ploto_repeater_sanitize',
			 'priority' => 7,
			 'default' => ploto_faq_options_default()
			)
		);
		
		$wp_customize->add_control( 
			new Ploto_Repeater( $wp_customize, 
				'ploto_faq_option', 
					array(
						'label'   => esc_html__('FAQ','desert-companion'),
						'section' => 'faq_options',
						'add_field_label'                   => esc_html__( 'Add New FAQ', 'desert-companion' ),
						'item_name'                         => esc_html__( 'FAQ', 'desert-companion' ),
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true
					) 
				) 
			);
	
	// Upgrade
	$wp_customize->add_setting(
	'ploto_faq_option_upsale', 
	array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 7,
    ));
	
	$wp_customize->add_control( 
		new Desert_Companion_Customize_Upgrade_Control
		($wp_customize, 
			'ploto_faq_option_upsale', 
			array(
				'label'      => __( 'FAQ', 'desert-companion' ),
				'section'    => 'faq_options'
			) 
		) 
	);
	
	/*=========================================
	Right  Section
	=========================================*/
	$wp_customize->add_setting(
		'ploto_faq_right_options'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_text',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
	'ploto_faq_right_options',
		array(
			'type' => 'hidden',
			'label' => __('Right Content','desert-companion'),
			'section' => 'faq_options',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting( 
		'ploto_hs_faq_right_options' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_checkbox',
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control(
	'ploto_hs_faq_right_options', 
		array(
			'label'	      => esc_html__( 'Hide/Show ?', 'desert-companion' ),
			'section'     => 'faq_options',
			'type'        => 'checkbox'
		) 
	);	
	
	// Image
	$wp_customize->add_setting( 
    	'ploto_faq_right_img' , 
    	array(
			'default' 			=> esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/faq-img01.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_url',	
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'ploto_faq_right_img' ,
		array(
			'label'          => __( 'Image', 'desert-companion' ),
			'section'        => 'faq_options',
		) 
	));
	
	//  Content
	$wp_customize->add_setting(
    	'ploto_faq_right_content',
    	array(
	        'default'			=> '<div class="count">
                                            <span class="count-number odometer" data-count="10">
                                                0
                                            </span>
                                            K<span class="plus">+</span>
                                        </div>
                                        <h4 class="title">Trusted Happy Customers of Worldwide</h4>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'ploto_sanitize_html',
			'priority' => 9
		)
	);	
	
	$wp_customize->add_control( 
		'ploto_faq_right_content',
		array(
		    'label'   => __('Content','desert-companion'),
		    'section' => 'faq_options',
			'type'           => 'textarea',
		)  
	);
}
add_action( 'customize_register', 'ploto_faq_customize_setting' );