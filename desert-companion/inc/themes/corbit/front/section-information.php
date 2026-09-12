<?php  
$ploto_information_options_hide_show 	= get_theme_mod('ploto_information_options_hide_show','1'); 
$ploto_information_option 				= get_theme_mod('ploto_information_option',ploto_information_options_default());
if($ploto_information_options_hide_show=='1'):
?>
<section id="dt_information" class="dt_information dt_information--three dt-py-default">
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
				<div class="dt-col-xl-3 dt-col-lg-6 dt-col-md-6 dt-col-sm-6 wow fadeInLeft" data-wow-delay=".<?php echo esc_attr($i+1); ?>s">
					<div class="dt-information-box">
						<?php if ( ! empty( $image ) ) : ?>
						<div class="image-box">
							<img src="<?php echo esc_url($image); ?>" alt="<?php if ( ! empty( $title ) ) : echo wp_kses( html_entity_decode( $title ), $allowed_html ); endif; ?>"/>
						</div>
						<?php endif; ?>
						<div class="border">
							<svg width="278" height="317" viewBox="0 0 278 317" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M275 85.0627C275 81.5002 273.09 78.2073 269.989 76.4328L143.962 4.31948C140.889 2.56098 137.111 2.56098 134.038 4.31948L8.01074 76.4328C4.90986 78.2073 3 81.5002 3 85.0627V231.938C3 235.5 4.90986 238.793 8.01074 240.568L134.038 312.681C137.111 314.439 140.889 314.439 143.962 312.681L269.989 240.568C273.09 238.793 275 235.5 275 231.938V85.0627ZM278 231.938C278 236.578 275.512 240.864 271.479 243.172L145.452 315.285L145.075 315.492C141.276 317.503 136.724 317.503 132.925 315.492L132.548 315.285L6.52148 243.172C2.48813 240.864 0 236.578 0 231.938V85.0627C0 80.5673 2.33474 76.405 6.14746 74.0509L6.52148 73.8283L132.548 1.71499C136.544 -0.571667 141.456 -0.571661 145.452 1.71499L271.479 73.8283C275.512 76.1362 278 80.4222 278 85.0627V231.938Z" fill="currentColor"/>
							</svg>
						</div>
						<?php if ( ! empty( $icon ) ) : ?>
						<div class="icon-box">
							<div class="icon">
								<i aria-hidden="true" class="<?php echo esc_attr($icon); ?>"></i>
							</div>
						</div>
						<?php endif; ?>
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
						</div>
						<?php if ( ! empty( $link ) ) : ?>
						<a href="<?php echo esc_url($link); ?>" class="dt-more">
							<i class="fal fa-arrow-right"></i>
						</a>
						<?php endif; ?>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php endif; ?>