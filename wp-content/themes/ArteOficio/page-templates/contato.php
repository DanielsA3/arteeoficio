<?php
/**
 * Template Name: Contato
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
							<p class="right texto-descritivo"><?php echo get_field('texto_descritivo'); ?></p>
							<div class="contatos right">
								<p class="phones">
									<a href="http://api.whatsapp.com/send?phone=5521981829476" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp-ctt.png"> (21) 98182-9476 
									</a>
								</p>								
								<p class="phones">
									<br />
									<a href="http://api.whatsapp.com/send?phone=5521995994888" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp-ctt.png"> (21) 99599-4888 
									</a>
								</p>								

								<p class="contact-mail">
									<a href="mailto:contato@arteeoficio.arq.br" target="_blank">contato@arteeoficio.arq.br </a>
								</p>

								<div class="redes-sociais">
									<a href="" target="_blank">
										<i class="fab fa-linkedin-in"></i>
									</a>
									<a href="" target="_blank">
										<i class="fab fa-instagram"></i>
									</a>
								</div>									
							</div>
						</div>

						<div class="col-md-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
							<div class="formulario-contato">
								<form id="form-contato" class="center">
									<input type="text" name="nome" id="nome" class="required" placeholder="Nome">
									<p class="error">Campo nome é obrigatório.</p>
									<input type="text" name="email" id="email" class="required" placeholder="E-mail">
									<p class="error error-email">Campo e-mail é obrigatório.</p>
									<textarea name="mensagem" id="mensagem" class="required" placeholder="Mensagem"></textarea>
									<p class="error">Por favor, digite uma mensagem.</p>
									<input type="button" name="btn-enviar" class="btn-yw" value="Enviar" onclick="EnviaEmail();">
								</form>
								<div id="sucesso">
									<p class="center">Mensagem enviada com sucesso.</p> 
									<p class="center">Em breve retorno o contato.</p> 
									<p class="center">Obrigado!</p>
								</div>	
							</div>							
						</div>	
					</div>
				</div>
			</div>	
		</div>
	</section>

</main>

<?php get_footer(); ?>
