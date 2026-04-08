<?php  
$ploto_faq_options_hide_show= get_theme_mod('ploto_faq_options_hide_show','1');
$ploto_hs_faq_left_options	= get_theme_mod('ploto_hs_faq_left_options','1');
$ploto_faq_left_ttl			= get_theme_mod('ploto_faq_left_ttl','Faq`s'); 
$ploto_faq_left_subttl		= get_theme_mod('ploto_faq_left_subttl','Have Questions? <br>Get Expert Answers');
$ploto_faq_option			= get_theme_mod('ploto_faq_option',ploto_faq_options_default());
$ploto_hs_faq_right_options	= get_theme_mod('ploto_hs_faq_right_options','1');
$ploto_faq_right_content	= get_theme_mod('ploto_faq_right_content','<div class="count">
                                            <span class="count-number odometer" data-count="10">
                                                0
                                            </span>
                                            K<span class="plus">+</span>
                                        </div>
                                        <h4 class="title">Trusted Happy Customers of Worldwide</h4>'); 										
$ploto_faq_right_img		= get_theme_mod('ploto_faq_right_img',esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/faq-img01.jpg'));							
if($ploto_faq_options_hide_show=='1'):									
?>	
<section id="dt_faq" class="dt_faq overflow-hidden bg-light dt-py-default front-faq">
	<div class="dt-container">
		<div class="dt-row dt-g-5">
			<?php if($ploto_hs_faq_left_options=='1'): ?>
				<div class="dt-col-lg-<?php if($ploto_hs_faq_right_options=='1'): esc_attr_e('6','desert-companion'); else: esc_attr_e('12','desert-companion'); endif; ?>">
					<?php if(!empty($ploto_faq_left_ttl)  ||  !empty($ploto_faq_left_subttl)): ?>
						<div class="title-wrap dt-mb-6" data-wow-duration="1.5s" data-wow-delay=".4s">
							<?php if(!empty($ploto_faq_left_ttl)): ?>
								<div class="sub-title">
									<i class="fas fa-circle-check dt-mr-2"></i>
									<?php echo wp_kses_post($ploto_faq_left_ttl); ?>
								</div>
							<?php endif; ?>
							
							<?php if(!empty($ploto_faq_left_subttl)): ?>
								<h2 class="sec-title">
									<?php echo wp_kses_post($ploto_faq_left_subttl); ?>
								</h2>
							<?php endif; ?>	
						</div>
					<?php endif; ?>
					<div class="accordion-outer">
						<?php
							if ( ! empty( $ploto_faq_option ) ) {
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
							$ploto_faq_option = json_decode( $ploto_faq_option );
							foreach ( $ploto_faq_option as $i=>$item ) {
								$title = ! empty( $item->title ) ? apply_filters( 'ploto_translate_single_string', $item->title, 'FAQ section' ) : '';
								$text = ! empty( $item->text ) ? apply_filters( 'ploto_translate_single_string', $item->text, 'FAQ section' ) : '';
						?>
							<div class="accordion <?php if($i === 0): esc_attr_e('accordion--open','desert-companion'); endif; ?>">
								<?php if ( ! empty( $title ) ) : ?>
									<h4 class="accordion__title">
										<?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?> <i class="accordion__icon"></i>
									</h4>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>
									<div class="accordion__content" style="<?php if($i === 0): esc_attr_e('display: block','desert-companion'); endif; ?>">
										<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
									</div>
								<?php endif; ?>
							</div>
						<?php } } ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if($ploto_hs_faq_right_options=='1'): ?>
				<div class="dt-col-lg-<?php if($ploto_hs_faq_left_options=='1'): esc_attr_e('6','desert-companion'); else: esc_attr_e('12','desert-companion'); endif; ?>">
					<div class="faq-image-wrapper">
						<?php if ( ! empty( $ploto_faq_right_img ) ) : ?>
							<div class="faq-image overlay-anim4 img-anim-left wow fadeInLeft">
								<img src="<?php echo esc_url($ploto_faq_right_img); ?>" alt="">
							</div>
						<?php endif; ?>
						<div class="shape dt-d-none dt-d-xl-block">
							<img src="<?php echo esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/faq-dots-shape.png'); ?>" alt="">
						</div>
						<div class="faq-single-card">
							<div class="faq-car-inner">
								<div class="bg-image">
									<img src="<?php echo esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/faq-bg01.jpg'); ?>" alt="">
								</div>
								<div class="dt-top-right wow slideInRight">
									<img src="<?php echo esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/faq-shape.png'); ?>" alt="">
								</div>
								<?php if(!empty($ploto_faq_right_content)):  echo do_shortcode($ploto_faq_right_content); endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>