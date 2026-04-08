<?php  
$ploto_information_options_hide_show 	= get_theme_mod('ploto_information_options_hide_show','1'); 
$ploto_information_option 				= get_theme_mod('ploto_information_option',ploto_information_options_default());
if($ploto_information_options_hide_show=='1'):
?>
<section id="dt_information" class="dt_information dt_information--one dt-py-default">
	<div class="dt-container">
		<div class="dt-row dt-g-4">
			<?php
				if ( ! empty( $ploto_information_option ) ) {
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
				$ploto_information_option = json_decode( $ploto_information_option );
				foreach ( $ploto_information_option as $i=>$item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'ploto_translate_single_string', $item->title, 'Information section' ) : '';
					$text = ! empty( $item->text ) ? apply_filters( 'ploto_translate_single_string', $item->text, 'Information section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'ploto_translate_single_string', $item->link, 'Information section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'ploto_translate_single_string', $item->icon_value, 'Information section' ) : '';
					$image = ! empty( $item->image_url ) ? apply_filters( 'ploto_translate_single_string', $item->image_url, 'Information section' ) : '';
			?>
				<div class="dt-col-lg-3 dt-col-md-6 dt-col-sm-6 wow fadeInLeft" data-wow-delay=".<?php echo esc_attr($i+1); ?>s">
					<div class="dt-information-box">
						<div class="image-box">
							<div class="bg-color-shape"></div>
							<?php if ( ! empty( $image ) ) : ?>
								<div class="inner-img">
									<img src="<?php echo esc_url($image); ?>" alt="<?php if ( ! empty( $title ) ) : echo wp_kses( html_entity_decode( $title ), $allowed_html ); endif; ?>">
								</div>
							<?php endif; ?>
							
							<?php if ( ! empty( $icon ) ) : ?>
								<div class="icon-box">
									<div class="icon">
										<i aria-hidden="true" class="<?php echo esc_attr($icon); ?>"></i>
									</div>
								</div>
							<?php endif; ?>
						</div>
						
						<div class="content-box">
							<?php if ( ! empty( $title ) ) : ?>
								<h4 class="title">
									<?php if ( ! empty( $link ) ) : ?>
										<a href="<?php echo esc_url($link); ?>"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></a>
									<?php else: ?>
										<?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?>
									<?php endif; ?>
								</h4>
							<?php endif; ?>
							
							<?php if ( ! empty( $text ) ) : ?>
								<div class="text">
									<?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?>
								</div>
							<?php endif; ?>
							
							<?php if ( ! empty( $link ) ) : ?>
								<a href="<?php echo esc_url($link); ?>" class="dt-more">
									<i class="fal fa-arrow-right"></i>
								</a>
							<?php endif; ?>
							<div class="count"><?php echo '0'.esc_html($i+1); ?></div>
						</div>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php endif; ?>