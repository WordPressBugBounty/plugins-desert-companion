<?php 
$ploto_slider_options_hide_show 	= get_theme_mod('ploto_slider_options_hide_show','1'); 
$ploto_slider_option 				= get_theme_mod('ploto_slider_option',ploto_slider_options_default());
if($ploto_slider_options_hide_show=='1'):		
?>
<section id="dt_slider" class="dt_slider dt_slider--thumbnav dt_slider--one">
	<div class="dt_owl_carousel owl-theme owl-carousel slider" data-owl-options='{
		"loop": true,
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"autoplaySpeed": 1000,
		"smartSpeed": 1000,
		"nav": true,
		"navText": [
		"<i class=\"fal fa-arrow-left\"></i>",
		"<i class=\"fal fa-arrow-right\"></i>"
		],
		"dots": true,
		"margin": 0
		}'>
		<?php
			if ( ! empty( $ploto_slider_option ) ) {
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
			$ploto_slider_option = json_decode( $ploto_slider_option );
			foreach ( $ploto_slider_option as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'ploto_translate_single_string', $item->title, 'slider section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'ploto_translate_single_string', $item->subtitle, 'slider section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'ploto_translate_single_string', $item->text, 'slider section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'ploto_translate_single_string', $item->text2,'slider section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'ploto_translate_single_string', $item->link, 'slider section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'ploto_translate_single_string', $item->image_url, 'slider section' ) : '';
				$align = ! empty( $item->slide_align ) ? apply_filters( 'ploto_translate_single_string', $item->slide_align, 'slider section' ) : '';
		?>
			<div class="dt_slider-item">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>" loading="lazy" alt="<?php if ( ! empty( $title ) ) : echo wp_kses( html_entity_decode( $title ), $allowed_html ); endif; ?>" />
				 <?php endif; ?>
				<div class="dt_slider-wrapper">
					<div class="dt_slider-inner">
						<div class="dt_slider-innercell">
							<div class="dt-container">
								<div class="dt-row dt-text-<?php echo esc_attr($align); ?>">
									<div class="dt-col-lg-12 dt-col-md-12 first dt-my-auto">
										<div class="dt_slider-content">
											<?php if ( ! empty( $title ) ) : ?>
											<h5 class="subtitle animate-subtitle"><i
													class="fas fa-badge-check dt-mr-1"></i> <?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></h5>
											 <?php endif; ?>
											 
											<?php if ( ! empty( $subtitle ) ) : ?>
											<h2 class="title animate-title">
												<?php echo wp_kses( html_entity_decode( $subtitle ), $allowed_html ); ?>
											</h2>
											 <?php endif; ?>
											 
											<?php if ( ! empty( $text ) ) : ?>
											<p class="text animate-text"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
											 <?php endif; ?>
											 
											<div class="dt_btn-group animate-buttons">
												<?php if ( ! empty( $button ) ) : ?>
												<a href="<?php echo esc_url($link); ?>" class="dt-btn dt-btn-primary"><?php echo wp_kses( html_entity_decode( $button ), $allowed_html ); ?> <i
														class="fal fa-arrow-right"></i></a>
												 <?php endif; ?>		
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } } ?>
	</div>
</section>
<?php endif; ?>