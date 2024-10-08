<?php  
$cosmobit_slider_options_hide_show		= get_theme_mod('cosmobit_slider_options_hide_show','1');
$cosmobit_slider3_option = get_theme_mod('cosmobit_slider3_option',cosmobit_slider3_options_default());
$cosmobit_slider3_opacity		= get_theme_mod('cosmobit_slider3_opacity','0.5'); 
$cosmobit_slider3_overlay		= get_theme_mod('cosmobit_slider3_overlay','#000000');
if($cosmobit_slider_options_hide_show=='1'):
?>	
<section id="dt__slider" class="dt__slider dt__slider--three">
	<div class="dt__slider-main owl-carousel owl-theme">
		<?php
			if ( ! empty( $cosmobit_slider3_option ) ) {
			$cosmobit_slider3_option = json_decode( $cosmobit_slider3_option );
			foreach ( $cosmobit_slider3_option as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'cosmobit_translate_single_string', $item->title, 'slider 3 section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'cosmobit_translate_single_string', $item->subtitle, 'slider 3 section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'cosmobit_translate_single_string', $item->subtitle2, 'slider 3 section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'cosmobit_translate_single_string', $item->text, 'slider 3 section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'cosmobit_translate_single_string', $item->text2,'slider 3 section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'cosmobit_translate_single_string', $item->link, 'slider 3 section' ) : '';
				$button2 = ! empty( $item->button_second) ? apply_filters( 'cosmobit_translate_single_string', $item->button_second,'slider 3 section' ) : '';
				$link2 = ! empty( $item->link2 ) ? apply_filters( 'cosmobit_translate_single_string', $item->link2, 'slider 3 section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'cosmobit_translate_single_string', $item->image_url, 'slider 3 section' ) : '';
				$align = ! empty( $item->slide_align ) ? apply_filters( 'cosmobit_translate_single_string', $item->slide_align, 'slider 3 section' ) : '';
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