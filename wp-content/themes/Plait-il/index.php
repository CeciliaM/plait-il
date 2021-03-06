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

	<div id="slider-home">
		<?php putRevSlider( 'slider-home' ); ?>
	</div> <!--Fin Slider -->

	<div id="agence-home">
		<div class="container">
			<div class="row">
				<h1>Agence Plait-il?</h1>
				<hr>
				<h2>Exploratrice en web depuis 2005</h2>
			</div>

			<div class="row">
				<div class="small-12 meduim-6 large-6 columns">
					<div><img src='<?php bloginfo('template_directory') ?>/assets/images/img-agence.png' alt="agence-plaitil?" /></div>
				</div>
				<div class="small-12 meduim-6  large-6 columns">
					<p>Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.</br>

						L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.</br>

						Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
						</p>
						<a href="#" class="button" id="btn-projets"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Projets</a> <a href="#" class="button" id="btn-contact"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Contacter-nous</a>
				</div>
			</div>
		</div>
	</div> <!--Fin Agence -->

	<div id="projets-home">
			<div class="row">
				<h1>Projets</h1>
				<hr>
				<h2>Quelques unes de nos réalisations</h2>
				<p>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</p>
			</div>


			<div class="row small-up-1 meduim-up-3 large-up-3">
				<?php if (have_posts()) : ?><br />
					<?php while (have_posts()) : the_post(); ?>
						<div class="column text-center projets">
						<?php if (in_category('1')) continue; ?>
				<img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>" width="370" height="230"/>
				<figcaption>
					<h3><?php the_title(); ?></h3>
					<a href="<?php the_permalink(); ?>" class="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Voir plus</a>
				</figcaption>
				</div>
			<?php endwhile; ?>
			<?php endif; // End have_posts() check. ?>
			</div>
		</div><!--Fin column -->
	</div><!--Fin Projets -->

	<div id="contact-home">
			<div id="contour-jaune" class="container">
				<div class="row">
					<h1>Nous contacter</h1>
					<hr id="contact-hr">
					<h2>Ne soyez pas timide !</h2>
					<p>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</p>
				</div>

				<div class="row">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<!-- Si l'Article est dans la Catégorie que nous souhaitons exclure, nous passons à l'Article suivant. -->
 						 <?php if (in_category('3')) continue; ?>
							<?php the_content(); ?>
						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; // End have_posts() check. ?>
				</div>
			</div>
	</div> <!--Fin Contact -->

</div> <!--Fin MAIN -->

<?php get_footer();
