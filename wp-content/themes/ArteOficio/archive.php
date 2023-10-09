<?php
/**
 * The template for displaying archive pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header(); ?>

<?php 
	$current_category = get_queried_object();
	$category_name = $current_category->name;
	$category_slug = $current_category->slug;
?>

<main id="site-content" role="main">
	<section id="posts" class="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo $category_name; ?></h2>
				</div>
			</div>	

			<div class="row publicacoes">
				<?php 
					$time=0.2;
					$loop = new WP_Query(array('post_type' => 'projetos',
									'orderby' => 'post_date',
									'order'	 => 'DESC',
									'posts_per_page' => 100,
									'tax_query' => array(
							            array(
							                'taxonomy'  => 'categorias',
							                'terms'     => $category_slug,
							                'field'     => 'slug',
							                'compare'   => 'LIKE'    
										)
							        ),							
					));
					while ($loop->have_posts()) : $loop->the_post(); 					
				?>
					<div class="col-md-4 publicacao wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $time; ?>s">
						<a href="<?php the_permalink(); ?>">
							<div class="image-destaque">
								<img src="<?php echo get_field('imagem_lista'); ?>">
							</div>
							<div class="content-post">
								<p class="titulo-post white"><?php the_title(); ?></p>
								<p class="titulo-post white"><?php the_field('localizacao'); ?></p>
							</div>
						</a>
					</div>
					<?php $time=$time+0.2; ?>
				<?php endwhile; ?>		
				<?php wp_reset_postdata(); ?>
			</div>		
		</div>		
	</section>	
</main>

<?php get_footer(); ?>