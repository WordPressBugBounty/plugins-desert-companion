<?php 
$chromax_cta_options_hide_show	= get_theme_mod('chromax_cta_options_hide_show','1');
$chromax_cta_ttl	= get_theme_mod('chromax_cta_ttl','Grab up to 35% off');
$chromax_cta_subttl	= get_theme_mod('chromax_cta_subttl','Have any project to work with us');
$chromax_cta_text	= get_theme_mod('chromax_cta_text',"Limited time offer, don't miss the opportunity");
$chromax_cta_btn_lbl= get_theme_mod('chromax_cta_btn_lbl','Contact With Us'); 
$chromax_cta_btn_link= get_theme_mod('chromax_cta_btn_link','#');
$chromax_cta_img	= get_theme_mod('chromax_cta_img',esc_url(desert_companion_plugin_url . '/inc/themes/chromax/assets/images/cta-img.jpg'));
if($chromax_cta_options_hide_show=='1'):
?>	
<div id="dt_cta" class="dt_cta dt_cta--one front-cta">
	<div class="dt-container">
		<div class="dt-row dt-g-0">
			<div class="dt_cta-inner">
				<div class="dt-row dt-g-0">
					<div class="dt-col-lg-<?php if(!empty($chromax_cta_img)): esc_attr_e('6','chromax-pro'); else: esc_attr_e('12','chromax-pro'); endif; ?> dt-col-md-6 dt-my-auto">
						<div class="cta-area">
							<div class="section-title text-white">
								<?php if(!empty($chromax_cta_ttl)): ?>
									<div class="sub-title">
										<span class="text-animate"><?php echo wp_kses_post($chromax_cta_ttl); ?></span>
										<div class="anime-dots"><span></span></div>
									</div>
								<?php endif; ?>
								
								<?php if(!empty($chromax_cta_subttl)): ?>
									<h2 class="title text-animate"><?php echo wp_kses_post($chromax_cta_subttl); ?></h2>
								<?php endif; ?>
								
								<?php if(!empty($chromax_cta_text)): ?>
									<div class="desc"><?php echo wp_kses_post($chromax_cta_text); ?></div>
								<?php endif; ?>
								
								<?php if(!empty($chromax_cta_btn_lbl)): ?>
									<div class="dt-mt-5 wow fadeInUp" data-wow-delay=".3s"><a href="<?php echo esc_url($chromax_cta_btn_link); ?>" class="dt-btn dt-btn-secondary"><?php echo wp_kses_post($chromax_cta_btn_lbl); ?> <i class="fal fa-arrow-right-long"></i></a></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<?php if(!empty($chromax_cta_img)): ?>
						<div class="dt-col-lg-6 dt-col-md-6">
							<div class="shape-mockup"><img src="<?php echo esc_url($chromax_cta_img); ?>" alt=""/></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>