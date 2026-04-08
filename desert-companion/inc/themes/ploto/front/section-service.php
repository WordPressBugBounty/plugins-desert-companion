<?php  
$ploto_service_options_hide_show = get_theme_mod('ploto_service_options_hide_show','1');
$ploto_service_ttl		  = get_theme_mod('ploto_service_ttl','Services'); 
$ploto_service_subttl	  = get_theme_mod('ploto_service_subttl','Comprehensive, scalable it services <br> empower growing businesses');
$ploto_service_text	  	  = get_theme_mod('ploto_service_text','There are many variations of passages of available but the majority have suffered alteration in some form, by injected hum randomised'); 
$ploto_service_btn_lbl	  = get_theme_mod('ploto_service_btn_lbl','See All Service');	
$ploto_service_btn_url	  = get_theme_mod('ploto_service_btn_url','#');
$ploto_service_option     = get_theme_mod('ploto_service_option',ploto_service_options_default());
do_action('ploto_service_option_before');
if($ploto_service_options_hide_show=='1'):
?>
<section id="dt_service" class="dt_service dt_service--one bg-secondary dt-py-default front-services">
	<div class="dt-container-fluid">
		<?php if ( ! empty( $ploto_service_ttl )  || ! empty( $ploto_service_subttl )  || ! empty( $ploto_service_text )) : ?>
			<div class="dt-row dt-gy-4 align-items-center">
				<div class="dt-col-lg-12">
					<div class="title-wrap dt-text-center text-white dt-mb-5" data-wow-duration="1.5s"
						data-wow-delay=".4s">
						<?php if ( ! empty( $ploto_service_ttl ) ) : ?>
							<div class="sub-title">
								<i class="fas fa-circle-check dt-mr-2"></i>
								<?php echo wp_kses_post($ploto_service_ttl); ?>
							</div>
						<?php endif; ?>	
						
						<?php if ( ! empty( $ploto_service_subttl ) ) : ?>
							<h2 class="sec-title"><?php echo wp_kses_post($ploto_service_subttl); ?></h2>
						<?php endif; ?>	
						
						<?php if ( ! empty( $ploto_service_text ) ) : ?>	
							<p class="sec-text"><?php echo wp_kses_post($ploto_service_text); ?></p>
						<?php endif; ?>		
					</div>
				</div>
			</div>
		<?php endif; ?>	
		<div class="dt-row dt-gy-4 service-wrap">
			<?php
				if ( ! empty( $ploto_service_option ) ) {
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
				$ploto_service_option = json_decode( $ploto_service_option );
				foreach ( $ploto_service_option as $i=>$item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'ploto_translate_single_string', $item->title, 'Service section' ) : '';
					$text = ! empty( $item->text ) ? apply_filters( 'ploto_translate_single_string', $item->text, 'Service section' ) : '';
					$button = ! empty( $item->text2 ) ? apply_filters( 'ploto_translate_single_string', $item->text2, 'Service section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'ploto_translate_single_string', $item->link, 'Service section' ) : '';
					$image = ! empty( $item->image_url ) ? apply_filters( 'ploto_translate_single_string', $item->image_url, 'Service section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'ploto_translate_single_string', $item->icon_value, 'Service section' ) : '';
			?>
				<div class="dt-col-xl-3 dt-col-lg-4 dt-col-md-6 dt-col-sm-6">
					<div class="service-box">
						<div class="service-top">
							<?php if ( ! empty( $icon ) ) : ?>
								<div class="icon"><i class="<?php echo esc_attr($icon); ?>"></i></div>
							<?php endif; ?>	
							
							<?php if ( ! empty( $link ) ) : ?>
								<h4 class="title"><a href="<?php echo esc_url($link); ?>"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></a></h4>
							<?php else: ?>	
								<h4 class="title"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></h4>
							<?php endif; ?>
						</div>
						
						<?php if ( ! empty( $image ) ) : ?>
							<div class="thumb overlay-anim4 overflow-hidden"><img
									src="<?php echo esc_url($image); ?>">
							</div>
						<?php endif; ?>	
						
						<?php if ( ! empty( $text ) ) : ?>
							<div class="text"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?>
							</div>
						<?php endif; ?>	
						<div class="border dt-my-4"></div>
						
						<?php if ( ! empty( $button ) ) : ?>
							<a href="<?php echo esc_url($link); ?>" class="dt-btn dt-btn-gray dt-btn-border"><?php echo wp_kses( html_entity_decode( $button ), $allowed_html ); ?> <i
								class="fal fa-arrow-right"></i></a>
						<?php endif; ?>			
					</div>
				</div>
			<?php } } ?>
		</div>
		<div class="dt-row dt-gy-4 align-items-center  dt-mt-5">
			<div class="dt-col-lg-12">
				<div class="view-all-btn dt-text-center">
					<?php if ( ! empty( $ploto_service_btn_lbl ) ) : ?>
						<a href="<?php echo esc_url($ploto_service_btn_url); ?>" class="dt-btn dt-btn-primary"><?php echo wp_kses_post($ploto_service_btn_lbl); ?> <i
								class="fal fa-arrow-right"></i></a>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; do_action('ploto_service_option_after'); ?>