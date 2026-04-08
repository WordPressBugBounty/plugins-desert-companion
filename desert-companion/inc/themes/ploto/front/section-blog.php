<?php  
$ploto_blog_options_hide_show 	= get_theme_mod('ploto_blog_options_hide_show','1');
$ploto_blog_ttl		= get_theme_mod('ploto_blog_ttl','Blog & News'); 
$ploto_blog_subttl	= get_theme_mod('ploto_blog_subttl','Get Update Blog & News'); 
$ploto_blog_text	= get_theme_mod('ploto_blog_text','There are many variations of passages of available but the majority have <br> suffered alteration in some form, by injected hum randomised.'); 
$ploto_blog_cat		= get_theme_mod('ploto_blog_cat'); 
$ploto_blog_num		= get_theme_mod('ploto_blog_num','3'); 
$tax = 'blog_categories'; 
$tax_terms = get_terms($tax);
if($ploto_blog_options_hide_show=='1'):
?>
<section id="dt_post" class="dt_post dt_post--one bg-light dt-py-default front-blog">
	<div class="dt-container">
		<?php if ( ! empty( $ploto_blog_ttl )  || ! empty( $ploto_blog_subttl )  || ! empty( $ploto_blog_text )) : ?>
				<div class="dt-row">
					<div class="dt-col-lg-7 dt-col-12 dt-text-center dt-mx-auto">
						<div class="title-wrap dt-mb-5" data-wow-duration="2s" data-wow-delay=".0s">
							<?php if ( ! empty( $ploto_blog_ttl ) ) : ?>
								<div class="sub-title">
									<i class="fas fa-circle-check dt-mr-2"></i>
									<?php echo wp_kses_post($ploto_blog_ttl); ?>
								</div>
							<?php endif; ?>	
							
							<?php if ( ! empty( $ploto_blog_subttl ) ) : ?>
								<h2 class="sec-title"><?php echo wp_kses_post($ploto_blog_subttl); ?></h2>
							<?php endif; ?>	
							
							<?php if ( ! empty( $ploto_blog_text ) ) : ?>	
								<p class="sec-text"><?php echo wp_kses_post($ploto_blog_text); ?></p>
							<?php endif; ?>	
						</div>
					</div>
				</div>
		<?php endif; ?>	
		<div class="dt-row dt-g-4">
			<?php 
				$ploto_post_args = array( 'post_type' => 'post', 'category__in' => $ploto_blog_cat, 'posts_per_page' => $ploto_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				
				$ploto_wp_query = new WP_Query($ploto_post_args);
				if($ploto_wp_query)
				{	
				$i = 0;
				while($ploto_wp_query->have_posts()):$ploto_wp_query->the_post();
			?>
			<div class="dt-col-lg-4 dt-col-sm-6 dt-col-12 wow fadeInUp animated" data-wow-delay="<?php echo esc_attr(($i+1)*100); ?>ms" data-wow-duration="1500ms">
				<?php get_template_part('template-parts/content','page');  ?>
			</div>
			<?php $i=(int)$i + 1; endwhile; } wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif; ?>