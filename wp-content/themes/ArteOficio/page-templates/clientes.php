<?php
/**
 * Template Name: Clientes
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="clientes">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p><?php echo get_field('texto_descritivo'); ?></p>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12 center">
					<?php 
						$time=0.1;
						$loop = new WP_Query(array('post_type' => 'cliente',
										'orderby' => 'post_date',
										'order'	 => 'DESC',
										'posts_per_page' => 100		
						));
						while ($loop->have_posts()) : $loop->the_post(); 					
					?>
						<div class="image-destaque publicacao wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $time; ?>s">
							<img src="<?php echo get_field('logo'); ?>">
						</div>
						<?php $time=$time+0.1; ?>
					<?php endwhile; ?>		
					<?php wp_reset_postdata(); ?>
				</div>
			</div>	
		</div>
	</section>

</main>

<?php get_footer(); ?>
