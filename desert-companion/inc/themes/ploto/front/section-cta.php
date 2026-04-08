<?php  
$ploto_cta_options_hide_show 	= get_theme_mod('ploto_cta_options_hide_show','1'); 
$ploto_cta_ttl			= get_theme_mod('ploto_cta_ttl','Get in Touch');
$ploto_cta_subttl		= get_theme_mod('ploto_cta_subttl','Empowering Businesses <br> Innovative Solutions');
$ploto_cta_btn_lbl		= get_theme_mod('ploto_cta_btn_lbl','Browse Works'); 
$ploto_cta_btn_link		= get_theme_mod('ploto_cta_btn_link','#');
$ploto_cta_btn_target	= get_theme_mod('ploto_cta_btn_target');
$ploto_cta_contact_icon	= get_theme_mod('ploto_cta_contact_icon','far fa-phone');
$ploto_cta_contact_ttl	= get_theme_mod('ploto_cta_contact_ttl','Need Help?');
$ploto_cta_contact_subttl	= get_theme_mod('ploto_cta_contact_subttl','+002 (345) 6789');
$ploto_cta_contact_link		= get_theme_mod('ploto_cta_contact_link','tel:+0023456789');
$ploto_cta_img			= get_theme_mod('ploto_cta_img',esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/cta-bg01.jpg'));
if($ploto_cta_btn_target=='1'): $target='target=_blank'; else: $target=''; endif; 
if($ploto_cta_options_hide_show=='1'):
?>	
<section id="dt_cta" class="dt_cta dt_cta--one overflow-hidden bg-light dt-py-default front-cta">
	<?php if(!empty($ploto_cta_img)): ?>
		<div class="bg-image"><img src="<?php echo esc_url($ploto_cta_img); ?>" alt=""></div>
	<?php endif; ?>
	<div class="overlay">
		<div class="overlay-img" style="background-image: url('<?php echo esc_url(desert_companion_plugin_url . '/inc/themes/ploto/assets/images/cta-bg02.png'); ?>');"></div>
	</div>
	<div class="dt-container">
		<div class="dt-row align-items-center dt-gy-4">
			<div class="dt-col-lg-3 dt-mt-0"></div>
			<div class="dt-col-lg-5 dt-col-md-7">
				<?php if(!empty($ploto_cta_ttl) ||  !empty($ploto_cta_subttl)): ?>
					<div class="title-wrap text-white">
					
						<?php if(!empty($ploto_cta_ttl)): ?>
							<div class="sub-title">
								<i class="fas fa-circle-check dt-mr-2"></i>
								<?php echo wp_kses_post($ploto_cta_ttl); ?>
							</div>
						<?php endif; ?>
						
						<?php if(!empty($ploto_cta_subttl)): ?>
							<h2 class="sec-title"><?php echo wp_kses_post($ploto_cta_subttl); ?></h2>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="dt-col-lg-4 dt-col-md-5">
				<div class="callus-contact dt-text-left dt-text-md-right">
					<?php if(!empty($ploto_cta_btn_lbl)): ?>
						<a href="<?php echo esc_url($ploto_cta_btn_link); ?>" <?php echo esc_attr($target); ?> class="dt-btn dt-btn-white dt-btn-border"><?php echo wp_kses_post($ploto_cta_btn_lbl); ?> <i
							class="fal fa-arrow-right"></i></a>
					<?php endif; ?>	
					
					<aside class="widget_contact">
						<div class="contact__list">
							<?php if(!empty($ploto_cta_contact_icon)): ?>
								<i class="<?php echo esc_attr($ploto_cta_contact_icon); ?> fa-2x" aria-hidden="true"></i>
							<?php endif; ?>	
							<div class="contact__body">
								<?php if(!empty($ploto_cta_contact_ttl)): ?>
									<p class="description"><?php echo wp_kses_post($ploto_cta_contact_ttl); ?></p>
								<?php endif; ?>	
								
								<?php if(!empty($ploto_cta_contact_subttl)): ?>
									<h4 class="title">
										<a href="<?php echo esc_url($ploto_cta_contact_link); ?>" class="title"><?php echo wp_kses_post($ploto_cta_contact_subttl); ?></a>
									</h4>
								<?php endif; ?>	
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>