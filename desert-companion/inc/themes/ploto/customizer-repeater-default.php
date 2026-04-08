<?php
if ( ! function_exists( 'ploto_after_before' ) ) { 
	function ploto_after_before($ploto_page) {	
		if( !empty($ploto_page)){
			?>
			<div class="dt-container">
				<?php 
					$ploto_page_query = new wp_query('page_id='.$ploto_page); 
					if($ploto_page_query->have_posts() ){ 
					   while( $ploto_page_query->have_posts() ) { $ploto_page_query->the_post();
							//the_title();
							the_content();
						}
					} wp_reset_postdata(); 
				?>
			</div>
		<?php }
	}
}

if ( ! function_exists( 'ploto_service_option_before' ) ) { 
	function ploto_service_option_before() {	
		$ploto_page	= get_theme_mod('ploto_service_option_before');
		ploto_after_before($ploto_page);
	}
	add_action('ploto_service_option_before','ploto_service_option_before');
}	


if ( ! function_exists( 'ploto_service_option_after' ) ) { 
	function ploto_service_option_after() {	
		$ploto_page	= get_theme_mod('ploto_service_option_after');
		ploto_after_before($ploto_page);
	}
	add_action('ploto_service_option_after','ploto_service_option_after');
}

/*
 *
 * Slider Default
 */
 function ploto_slider_options_default() {
	return apply_filters(
		'ploto_slider_options_default', json_encode(
				 array(
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/slider01.jpg'),
					'title'           => esc_html__( 'Welcome to IT Solutions !', 'desert-companion' ),
					'subtitle'         => esc_html__( 'Grow Your Business Bigger & <span class="text-primary">Better</span>', 'desert-companion' ),
					'text'            => esc_html__( 'The goal of IT services is to provide efficient and effective technology solutions that help businesses achieve their objectives.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					"slide_align" => "left", 
					'id'              => 'ploto_customizer_repeater_slider_001',
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/slider02.jpg'),
					'title'           => esc_html__( 'We’re 100% Trusted Agency', 'desert-companion' ),
					'subtitle'         => esc_html__( 'Bridging the Gap in Your IT <span class="text-primary">Solutions</span>', 'desert-companion' ),
					'text'            => esc_html__( 'The goal of IT services is to provide efficient and effective technology solutions that help businesses achieve their objectives.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					"slide_align" => "center", 
					'id'              => 'ploto_customizer_repeater_slider_002',
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/slider03.jpg'),
					'title'           => esc_html__( 'Welcome to IT Solutions !', 'desert-companion' ),
					'subtitle'         => esc_html__( 'Affordable Big IT & Technology <span class="text-primary">Solutions</span>', 'desert-companion' ),
					'text'            => esc_html__( 'The goal of IT services is to provide efficient and effective technology solutions that help businesses achieve their objectives.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					"slide_align" => "right", 
					'id'              => 'ploto_customizer_repeater_slider_003',
				)
			)
		)
	);
}

/*
 *
 * Ploto Information Default
 */
 function ploto_information_options_default() {
	return apply_filters(
		'ploto_information_options_default', json_encode(
				 array(
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/info-img01.jpg'),
					'icon_value'       => 'fas fa-compass',
					'title'           => esc_html__( 'Tech Innovation', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Developing a comprehensive IT strategy that aligns.', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_information_001'					
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/info-img02.jpg'),
					'icon_value'       => 'fas fa-users',
					'title'           => esc_html__( 'Market Analysis', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Developing a comprehensive IT strategy that aligns.', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_information_002'
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/info-img03.jpg'),
					'icon_value'       => 'fas fa-life-ring',
					'title'           => esc_html__( 'Web & App Design', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Developing a comprehensive IT strategy that aligns.', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_information_003'
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/info-img04.jpg'),
					'icon_value'       => 'fas fa-chart-pie',
					'title'           => esc_html__( 'Data Security', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Developing a comprehensive IT strategy that aligns.', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_information_004'	
				)
			)
		)
	);
}

/*
 *
 * Ploto Why Choose Default
 */
 function ploto_why_choose_options_default() {
	return apply_filters(
		'ploto_why_choose_options_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fas fa-code',
					'title'           => esc_html__( 'Cutting-Edge Technology', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Pontificate turnkey processes competitive testing', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_why_choose_001'					
				),
				array(
					'icon_value'       => 'fas fa-users',
					'title'           => esc_html__( 'Proven Client Satisfaction', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Pontificate turnkey processes competitive testing', 'desert-companion' ),
					'link'            => '#',
					'id'              => 'ploto_customizer_repeater_why_choose_002'
				)
			)
		)
	);
}


/*
 *
 * Service Default
 */
 function ploto_service_options_default() {
	return apply_filters(
		'ploto_service_options_default', json_encode(
				 array(
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/service-img01.jpg'),
					'title'           => esc_html__( 'Business <br> Analysis', 'desert-companion' ),
					'text'         => esc_html__( 'There are many variation of passages of Lorem Ipsum available form.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Explore More', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					'icon_value' => 'far fa-chart-mixed-up-circle-dollar',
					'id'              => 'ploto_customizer_repeater_service_001',
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/service-img02.jpg'),
					'title'           => esc_html__( 'Strategic <br> Planning', 'desert-companion' ),
					'text'         => esc_html__( 'There are many variation of passages of Lorem Ipsum available form.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Explore More', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					'icon_value' => 'far fa-bullhorn',
					'id'              => 'ploto_customizer_repeater_service_002',
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/service-img03.jpg'),
					'title'           => esc_html__( 'Business <br> Consulting', 'desert-companion' ),
					'text'         => esc_html__( 'There are many variation of passages of Lorem Ipsum available form.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Explore More', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					'icon_value' => 'far fa-chart-pie-simple',
					'id'              => 'ploto_customizer_repeater_service_003',
				),
				array(
					'image_url'       => esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/service-img04.jpg'),
					'title'           => esc_html__( 'Marketing <br> Strategy', 'desert-companion' ),
					'text'         => esc_html__( 'There are many variation of passages of Lorem Ipsum available form.', 'desert-companion' ),
					'text2'	  =>  esc_html__( 'Explore More', 'desert-companion' ),
					'link'	  =>  esc_html__( '#', 'desert-companion' ),
					'icon_value' => 'far fa-layer-group',
					'id'              => 'ploto_customizer_repeater_service_004',
				)
			)
		)
	);
}

/*
 *
 * Ploto FAQ Default
 */
 function ploto_faq_options_default() {
	return apply_filters(
		'ploto_faq_options_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Can I offer my items for promotional basis?', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Creating an engaging and user-friendly site has the ability to reduce churn rate and create more conversions consisting of both new and returning users.<br /> This depends on your goals, but there are a few digital marketing tools which are relevant business.', 'desert-companion' ),
					'id'              => 'ploto_customizer_repeater_faq_001'					
				),
				array(
					'title'           => esc_html__( 'How can I safely use My Business?', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Creating an engaging and user-friendly site has the ability to reduce churn rate and create more conversions consisting of both new and returning users.<br /> This depends on your goals, but there are a few digital marketing tools which are relevant business.', 'desert-companion' ),
					'id'              => 'ploto_customizer_repeater_faq_002'
				),
				array(
					'title'           => esc_html__( 'What type of company is measured?', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Creating an engaging and user-friendly site has the ability to reduce churn rate and create more conversions consisting of both new and returning users.<br /> This depends on your goals, but there are a few digital marketing tools which are relevant business.', 'desert-companion' ),
					'id'              => 'ploto_customizer_repeater_faq_003'
				),
				array(
					'title'           => esc_html__( 'How can I safely use My Business?', 'desert-companion' ),
					'text'	  =>  esc_html__( 'Creating an engaging and user-friendly site has the ability to reduce churn rate and create more conversions consisting of both new and returning users.<br /> This depends on your goals, but there are a few digital marketing tools which are relevant business.', 'desert-companion' ),
					'id'              => 'ploto_customizer_repeater_faq_003'
				)
			)
		)
	);
}