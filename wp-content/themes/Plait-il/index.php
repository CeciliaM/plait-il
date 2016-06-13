<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div role="main">
	<section id="slider-home">
		<div class="row">

		</div>
	</seciton>

	<section id="agence-home">
		<div class="container">
			<div class="row">
				<h1>Agence Plait-il?</h1>
				<hr>
				<h2>Exploratrice en web depuis 2005</h2>
			</div>

			<div class="row">
				<div class="large-6 columns">
					<div><img src='<?php bloginfo('template_directory') ?>/assets/images/img-agence.png' alt="agence-plaitil?" /></div>
				</div>
				<div class="large-6 columns">
					<p>Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.</br>

						L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.</br>

						Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
						</p>
						<a href="#" class="button" id="btn-projets"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Projets</a> <a href="#" class="button" id="btn-contact"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Contacter-nous</a>
				</div>
			</div>
		</div>
	</section>

	<section id="projets-home">

			<div class="row">
				<h1>Projets</h1>
				<hr>
				<h2>Quelques unes de nos réalisation</h2>
				<p>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</p>
			</div>

			<div class="row small-up-1 meduim-up-3 large-up-3">
				<div class="column text-center projets">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/projet-1.png">
					<figcaption>
						<h3>PROJET 1</h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>

				<div class="column text-center projets">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/projet-2.png"/>
					<figcaption>
						<h3></h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>

				<div class="column text-center projets">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/projet-3.png"/>
					<figcaption>
						<h3></h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>
			</div>

			<div class="row small-up-1 meduim-up-3 large-up-3">
				<div class="column text-center projets">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/projet-4.png">
					<figcaption>
						<h3></h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>

				<div class="column text-center projets">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/projet-5.png">
					<figcaption>
						<h3></h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>

				<div class="column text-center projets">
					<img src="">
					<figcaption>
						<h3></h3>
						<a href="" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
					</figcaption>
				</div>
			</div>
	</section>

	<section id="contact-home" class="row">
		<div class="container">
			<div id="contour-jaune">
				<div class="row">
					<h1>Nous contacter</h1>
					<hr>
					<h2>Ne soyez pas timide !</h2>
					<p>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</p>
				</div>

				<div class="row">
					<form>
					</form>
				</div>
		</div>
	</section>

</div>


<!--	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>-->
	<!--<?php get_sidebar(); ?>-->

</div>

<?php get_footer();
