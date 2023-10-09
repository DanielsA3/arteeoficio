<?php
/**
 * Template Name: Sobre
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="conteudo-post wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
						<?php the_field('conteudo'); ?>
					</div>
				</div>
			</div>			

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3 class="center">O time</h3>
					<div class="time">
					<?php 
						$time=0.2;
						$loop = new WP_Query(array('post_type' => 'time',
										'orderby' => 'post_date',
										'order'	 => 'DESC',
										'posts_per_page' => 12
						));
						while ($loop->have_posts()) : $loop->the_post(); 					
					?>
						<div class="col-md-3 publicacao wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $time; ?>s">
							<div class="image-destaque">
								<img src="<?php echo get_field('foto'); ?>">
							</div>
							<div class="content-post">
								<h4 class="titulo-post center"><?php the_title(); ?></h4>
								<div class="conteudo">
									<?php echo get_field('descricao'); ?>
								</div>
							</div>
						</div>
						<?php $time=$time+0.2; ?>
					<?php endwhile; ?>		
					<?php wp_reset_postdata(); ?>					
					</div>
				</div>
			</div>	
		</div>
	</section>

</main>

<?php get_footer(); ?>
