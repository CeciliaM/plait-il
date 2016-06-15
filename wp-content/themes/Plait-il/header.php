<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="../favicon.ico">
		<script src="<?php bloginfo('template_directory') ?>/assets/javascript/custom/modernizr.custom.js"></script>
		<?php wp_head(); ?>

	</head>
	<body> <!--<?php body_class(); ?>-->
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

<header>
	<div class="container">
		<div class="row">
			<div class="callout clearfix">
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="float-left"><img src="<?php bloginfo('template_directory') ?>/assets/images/Logo.png"/></a>
				<p class="float-right"><button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

		<!-- open/close -->
		<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<nav id="site-navigation" role="navigation">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li><a href="#agence-home">Agence</a></li>
					<li><a href="#projets-home">Projets</a></li>
					<li><a href="#contact-home">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

		<?php do_action( 'foundationpress_after_header' );
