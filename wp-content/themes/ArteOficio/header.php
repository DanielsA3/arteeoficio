<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

	    <!-- CSS -->
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/delay.min.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	    <link rel="icon" href="/favicon.ico" type="image/x-icon">		

	</head>

	<body <?php body_class(); ?>>

	<div class="no-margin no-padding">
		<header class="desktop">
			<div class="row bg-black">
				<div class="container">
					<div class="col-md-4 nopdg">
						<div class="logo">
							<a href="<?php echo get_bloginfo('url'); ?>" target="_top">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-Arte-Oficio.png" height="auto" />
							</a>
					  </div>
					</div>
					<div class="col-md-8 right">
						<div class="redes-sociais">
							<a href="" target="_blank">
								<i class="fab fa-linkedin-in"></i>
							</a>
							<a href="" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</div>

						<?php 						
							wp_nav_menu( array( 'theme_location' => $theme_location, 'container' => 'nav' ) );
						?>								
					</div>
				</div>				
			</div>
		</header>

		<header class="mobile">
			<div class="container">
				<div class="row no-padding">
					<div class="col-xs-6 no-padding logo-mobile">
						<a href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-Arte-Oficio-mob.png">
						</a>
					</div>
					<div class="col-xs-6 right">
						<div class="menu-hbg">
							<a class="menu_interno" data-toggle="modal" href="#MenuModalInt">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-mobile.png">
							</a>
						</div>
					</div>										
				</div>
			</div>
		</header>
	</div>

	<div id="MenuModalInt" class="modal modal-fullscreen in">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-1">
	            <button class="close white" data-dismiss="modal">
	              X
	            </button>
	          </div>     
				<?php 						
					wp_nav_menu( array( 'theme_location' => $theme_location, 'container' => 'nav' ) );
				?>        	
	        </div>
	      </div>
	    </div>
	  </div>
	</div>