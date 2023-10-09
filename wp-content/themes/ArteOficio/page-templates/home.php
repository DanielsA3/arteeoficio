<?php
/**
 * Template Name: Home
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2 class="desktop wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s"><?php the_field('chamada_principal'); ?></h2>	
				</div>				
				<div class="col-md-8 projetos">					
					<div class="projetos-home">
						<?php 
							$repeater = get_field('links');
							foreach($repeater as $i => $row) {
						?>	
							<div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="background-image: url('<?php echo $row['imagem']; ?>');">
								<a class="white" href="<?php echo $row['link']; ?>">
									<div class="overlay"></div>
									<img src="<?php echo $row['imagem']; ?>">
									<div class="content-link">
										<p class="white"><?php echo $row['texto']; ?></p>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>		
				</div>							
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
