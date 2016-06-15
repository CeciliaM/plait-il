<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">
<div class="large-12 columns">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="small-12 large-12 columns">
				<div class="img-post small-12 large-12 columns">
					<?php
						$image = get_field('image-couv');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</br>
				</div>
		</div> <!-- IMG A LA UNE -->

		<div class="row"> <!-- PARTIE BASE  -->
				<div id="article-projet" class="small-12 large-8 columns">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<hr>
					<h2><?php the_field('sous-titre'); ?></h2>

					<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
					<?php the_content(); ?>
				</div>
				<div id="caract" class="small-12 large-4 columns">
						<!--champs perso-->
							<h4>Caractéristique</h4>
							<p><?php the_field('caracteristique'); ?></p>

							<h4>Date</h4>
							<p><?php the_field('date'); ?></p>
							<br>
							<a target="_blank" href="<?php the_field('visitez_site'); ?>" class="visite-site"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Visiter site</a>
							</br>
							</br>
							</br>

							<?php echo do_shortcode("[juiz_sps buttons='facebook, twitter, pinterest, github']"); ?>

					</div>
				</div> <!-- FIN ROW -->

				<div id="images-bas" class="small-12 large-12 columns">
					<?php
						$image = get_field('image-bas');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<?php
							$image = get_field('image-bas2');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</br>
				</div>

				<div id="btn-bas" class="small-12 large-12 columns">
					<a target="_blank" href="<?php the_field('visitez_site'); ?>" class="visite-site"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Visiter site</a>	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="retour-accueil"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Retour accueil</a>
				</div>

		</div>

	 <?php endwhile;?>

</div>
</div>
<?php get_footer();
