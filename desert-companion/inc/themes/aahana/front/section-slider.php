<?php  
	$cosmobit_slider_options_hide_show		= get_theme_mod('cosmobit_slider_options_hide_show','1'); 
	$cosmobit_slider_option = get_theme_mod('cosmobit_slider_option',cosmobit_slider_options_default());
	$cosmobit_slider_opacity		= get_theme_mod('cosmobit_slider_opacity','0.5'); 
	$cosmobit_slider_overlay		= get_theme_mod('cosmobit_slider_overlay','#000000');
	if($cosmobit_slider_options_hide_show=='1'):	
?>	
<section id="dt__slider" class="dt__slider dt__slider--three style2">
	<div class="dt__slider-main dt__dotstyle--one owl-carousel owl-theme">
		<?php
			if ( ! empty( $cosmobit_slider_option ) ) {
			$cosmobit_slider_option = json_decode( $cosmobit_slider_option );
			foreach ( $cosmobit_slider_option as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'cosmobit_translate_single_string', $item->title, 'slider section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'cosmobit_translate_single_string', $item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'cosmobit_translate_single_string', $item->subtitle2, 'slider section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'cosmobit_translate_single_string', $item->text, 'slider section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'cosmobit_translate_single_string', $item->text2,'slider section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'cosmobit_translate_single_string', $item->link, 'slider section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'cosmobit_translate_single_string', $item->image_url, 'slider section' ) : '';
				$align = ! empty( $item->slide_align ) ? apply_filters( 'cosmobit_translate_single_string', $item->slide_align, 'slider section' ) : '';
		?>
			<div class="dt__slider-item">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>">
				<?php endif; ?>	
				<div class="dt__slider-wrapper">
					<div class="dt__slider-inner">
						<div class="dt__slider-innercell">
							<div class="dt-container">
								<div class="dt-row">
									<div class="dt-col-lg-12 dt-col-md-12 first dt-my-auto">
										<div class="dt__slider-content dt-text-<?php echo esc_attr($align); ?>">
											<?php if ( ! empty( $title ) ) : ?>
												<h3 data-animation="fadeInUp" data-delay="50ms"><?php echo esc_html($title); ?></h3>
											<?php endif; ?>
											<?php if ( ! empty( $subtitle ) || ! empty( $subtitle2 )) : ?>
												<h1 data-animation="fadeInLeft" data-delay="100ms"><?php echo esc_html($subtitle); ?> <span class="text-primary"><?php echo esc_html($subtitle2); ?></span></h1>
											<?php endif; ?>
											
											<?php if ( ! empty( $text ) ) : ?>
												<p data-animation="fadeInLeft" data-delay="150ms"><?php echo esc_html($text); ?></p>
											<?php endif; ?>
											
											<?php if ( ! empty( $button ) ) : ?>
												<a data-animation="fadeInUp" data-delay="200ms" href="<?php echo esc_url($link); ?>" class="dt-btn dt-btn-primary"><?php echo esc_html($button); ?></a>
											<?php endif; ?>	
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