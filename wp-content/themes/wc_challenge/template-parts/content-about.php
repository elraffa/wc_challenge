<?php
/**
 * Template part for displaying page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wc_challenge
 */

?>

<section class="about">

		<div class="about__container"> 

			<?php the_title( '<span class="about__subtitle">', '</span>'); ?>
			<h1 class="about__title">Meet Our <strong>Team<strong></h1>

			<div class="about__members">

				<?php 
				// Members query
				$args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'members',
					'order'			=> 'ASC'
				);

				// query
				$the_query = new WP_Query( $args );

				?>
				<?php if( $the_query->have_posts() ): ?>
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="about__slider">
							<div class="about__slider__image">
								<?php the_post_thumbnail(); ?>
							</div>							
							<h3 ><?php the_title(); ?></h3>
							<p><?php the_field('position'); ?></p>
						</div><!-- about-slider -->
					<?php endwhile; ?>
				<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			</div><!-- about-members -->

		</div><!-- about-container -->
	
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'wc_challenge' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
