<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<?php 
	$id = get_the_ID();
	$terms = get_the_terms($id, 'categorias');
	foreach($terms as $term){
	    $slug_categoria = $term->slug;
	}
?>

<main id="site-content" role="main" class="spacing-main">
	<section id="posts" class="posts single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<a class="voltar" href="/categorias/<?php echo $slug_categoria; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voltar.png"> Voltar
					</a>
					<h2 class="center">
						<?php the_title(); ?>
						<p><?php the_field('localizacao'); ?></p>
					</h2>				
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="conteudo-post">
						<?php the_field('conteudo'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>		
</main><!-- #site-content -->
<?php get_footer(); ?>