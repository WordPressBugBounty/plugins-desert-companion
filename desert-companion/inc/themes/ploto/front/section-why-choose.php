<?php  
$ploto_why_choose_options_hide_show = get_theme_mod('ploto_why_choose_options_hide_show','1');
$ploto_hs_why_choose_left_options	= get_theme_mod('ploto_hs_why_choose_left_options','1');
$ploto_why_choose_left_ttl			= get_theme_mod('ploto_why_choose_left_ttl','Why Choose Us'); 
$ploto_why_choose_left_subttl		= get_theme_mod('ploto_why_choose_left_subttl','Reason for Choosing Our <br>Digital Agency');$ploto_why_choose_left_text		 = get_theme_mod('ploto_why_choose_left_text','There are many variations of passages of available but the majority have suffered alteration in some form, by injected hum randomised');  
$ploto_why_choose_left_info_option			= get_theme_mod('ploto_why_choose_left_info_option',ploto_why_choose_options_default());
$ploto_why_choose_left_btn_lbl		= get_theme_mod('ploto_why_choose_left_btn_lbl','Discover More');
$ploto_why_choose_left_btn_url		= get_theme_mod('ploto_why_choose_left_btn_url','#');	
$ploto_hs_why_choose_right_options	= get_theme_mod('ploto_hs_why_choose_right_options','1');								
$ploto_why_choose_right_img			= get_theme_mod('ploto_why_choose_right_img',esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/choose-img01.jpg'));	
if($ploto_why_choose_options_hide_show=='1'):						
?>	
<section id="dt_choose" class="dt_choose dt_choose--one bg-light dt-py-default front-why-choose">
	<div class="dt-container">
		<div class="dt-row dt-g-4">
			<?php if($ploto_hs_why_choose_left_options=='1'): ?>
				<div class="dt-col-lg-<?php if($ploto_hs_why_choose_right_options=='1'): esc_attr_e('6','desert-companion'); else: esc_attr_e('12','desert-companion'); endif; ?> dt-col-12">
					<?php if(!empty($ploto_why_choose_left_ttl)  ||  !empty($ploto_why_choose_left_subttl)  ||  !empty($ploto_why_choose_left_text)): ?>
						<div class="title-wrap dt-mb-6" data-wow-duration="2s" data-wow-delay=".0s">
							<?php if(!empty($ploto_why_choose_left_ttl)): ?>
								<div class="sub-title">
									<i class="fas fa-circle-check dt-mr-2"></i>
									<?php echo wp_kses_post($ploto_why_choose_left_ttl); ?>
								</div>
							<?php endif; ?>
							
							<?php if(!empty($ploto_why_choose_left_subttl)): ?>
								<h2 class="sec-title">
									<?php echo wp_kses_post($ploto_why_choose_left_subttl); ?>
								</h2>
							<?php endif; ?>	
							
							<?php if(!empty($ploto_why_choose_left_text)): ?>
								<p class="sec-text"><?php echo wp_kses_post($ploto_why_choose_left_text); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="dt-choose-boxs">
						<?php
							if ( ! empty( $ploto_why_choose_left_info_option ) ) {
								$allowed_html = array(
									'br'     => array(),
									'em'     => array(),
									'strong' => array(),
									'span'   => array(
										'class' => array(),
									),
									'b'      => array(),
									'i'      => array(),
									);
							$ploto_why_choose_left_info_option = json_decode( $ploto_why_choose_left_info_option );
							foreach ( $ploto_why_choose_left_info_option as $i=>$item ) {
								$title = ! empty( $item->title ) ? apply_filters( 'ploto_translate_single_string', $item->title, 'Why Choose section' ) : '';
								$text = ! empty( $item->text ) ? apply_filters( 'ploto_translate_single_string', $item->text, 'Why Choose section' ) : '';
								$link = ! empty( $item->link ) ? apply_filters( 'ploto_translate_single_string', $item->link, 'Why Choose section' ) : '';
								$icon = ! empty( $item->icon_value ) ? apply_filters( 'ploto_translate_single_string', $item->icon_value, 'Why Choose section' ) : '';
						?>
							<div class="dt-choose-single-box two wow <?php if ($i % 2 == 0):esc_attr_e('fadeInLeft','desert-companion');  else: esc_attr_e('fadeInRight','desert-companion'); endif; ?>" data-wow-delay=".<?php echo esc_attr($i+1); ?>s">
								<div class="box-top-content">
									<?php if ( ! empty( $icon ) ) : ?>
										<div class="icon-top"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i></div>
									<?php endif; ?>
									
									<?php if ( ! empty( $title ) ) : ?>
										<h5 class="title">
											<?php if ( ! empty( $link ) ) : ?>
												<a href="<?php echo esc_url($link); ?>"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></a>
											<?php else: ?>
												<?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?>
											<?php endif; ?>
										</h5>
									<?php endif; ?>
								</div>
								<?php if ( ! empty( $text ) ) : ?>
									<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
								<?php endif; ?>
								
								<?php if ( ! empty( $link ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="dt-more">
										<i class="fal fa-arrow-right"></i>
									</a>
								<?php endif; ?>
								
								<div class="choose-box box-1"></div>
								<div class="choose-box box-2"></div>
								<div class="choose-box box-3"></div>
								<div class="choose-box box-4"></div>
							</div>
						<?php } } ?>
					</div>
					<?php if(!empty($ploto_why_choose_left_btn_lbl)): ?>	
						<a href="<?php echo esc_url($ploto_why_choose_left_btn_url); ?>" class="dt-btn dt-btn-primary dt-mt-5"><?php echo wp_kses_post($ploto_why_choose_left_btn_lbl); ?> <i
							class="fal fa-arrow-right"></i></a>
					<?php endif; ?>	
				</div>
			<?php endif; ?>
			
			<?php if($ploto_hs_why_choose_right_options=='1'): ?>
				<div class="dt-col-lg-<?php if($ploto_hs_why_choose_left_options=='1'): esc_attr_e('6','desert-companion'); else: esc_attr_e('12','desert-companion'); endif; ?> dt-col-12">
					<div class="dt-choose-right-box">
						<svg width="622" height="596" viewBox="0 0 622 596" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M357.462 1.82761C377.89 4.63118 409.132 14.2434 433.965 25.5912C495.781 53.4934 551.323 102.356 581.096 154.956C630.095 241.6 634.234 350.538 592.044 436.248C549.32 523.025 471.616 576.56 365.473 592.713C345.046 595.784 300.185 595.784 278.957 592.58C216.072 583.368 158.261 556.134 103.254 510.075C76.1508 487.379 56.3909 464.016 38.5002 433.31C11.7977 387.652 -2.6217 330.112 1.78422 286.991C6.99122 234.657 34.7619 194.473 82.0254 170.576C98.0469 162.566 113.935 157.092 139.436 151.218C177.22 142.407 199.25 133.061 219.277 117.175C238.235 102.222 250.786 85.4007 266.54 54.4279C271.747 44.1482 277.622 33.3344 279.624 30.3973C288.837 17.047 301.921 7.70176 317.141 3.56316C326.487 1.02659 345.98 0.225571 357.462 1.82761ZM322.081 5.83271C310.599 8.23577 298.717 14.6439 290.439 22.9211C284.431 28.9288 280.826 34.6694 272.415 51.0904C254.123 87.1363 238.903 107.162 218.208 122.381C197.914 137.334 180.291 144.676 142.774 153.888C111.131 161.631 100.717 165.236 82.8265 174.314C32.4922 199.947 4.58799 245.338 4.58799 301.276C4.58799 378.04 44.1078 457.208 108.861 510.342C159.863 552.128 213.001 577.494 270.946 587.907C286.166 590.711 292.442 591.111 322.348 591.111C351.988 590.978 358.664 590.577 373.751 587.907C440.641 576.026 491.109 551.728 533.165 511.009C565.609 479.636 588.973 442.389 603.126 399.534C613.54 368.428 617.412 343.329 617.412 307.817C617.412 258.955 607.265 215.299 585.235 170.576C559.601 118.376 514.607 73.2519 455.194 40.1431C430.627 26.3922 393.511 12.1074 370.947 7.83526C365.206 6.76724 359.198 5.56571 357.729 5.2987C352.122 4.09717 328.89 4.49768 322.081 5.83271Z"
								fill="currentColor" />
						</svg>
						<?php if(!empty($ploto_why_choose_right_img)): ?>		
							<div class="image">
								<img src="<?php echo esc_url($ploto_why_choose_right_img); ?>">
							</div>
						<?php endif; ?>
						<div class="right-img-shape">
							<div class="img-anim-right">
								<svg xmlns="http://www.w3.org/2000/svg" width="92" height="60"
									viewBox="0 0 92 60">
									<path fill="currentColor"
										d="M51.743 60c-13.03-5.473-39.09-18.41-50.62-8.459-2.702 2.332-.265 5.75 4.51 6.469 16.54 2.488 35.585-.498 46.11 1.99m21.552-4.977C68.283 35.618 47.232 5.268 22.173 12.731c-4.877 1.452-3.486 4.73 1.503 8.955 17.04 14.43 39.595 22.889 49.619 33.337M82.82.79c-2.877-2.115-5.015.182-5.015 4.976 0 15.976 5.206 33.241 4.512 43.786 11.53-15.922 14.034-38.81.503-48.762" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>