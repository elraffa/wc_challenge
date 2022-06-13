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
			<h1 class="about__title">Meet Our <strong>Team</strong></h1>

			<div class="about__members">
				<div class="about__image">
					<img class="about__image-line" src="<?php echo get_template_directory_uri(); ?>/img/pencil-one.png">
					<img class="about__image-pen" src="<?php echo get_template_directory_uri(); ?>/img/pencil.png">
				</div>

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
					<div class="about__slider">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="about__slider-member">
								<div class="about__slider-image">
									<?php the_post_thumbnail(); ?>
								</div>							
								<h3 ><?php the_title(); ?></h3>
								<p class="about__slider-position"><?php the_field('position'); ?></p>
							</div><!-- about-slider-member -->

					<?php endwhile; ?>
					</div><!-- about-slider -->
				<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			</div><!-- about-members -->

		</div><!-- about-container -->
	
</section><!-- about -->

<section class="cta">
			<div class="cta-decoration">
				<svg width="1449" height="33" viewBox="0 0 1449 33" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M258.516 26.2132C133.71 43.9594 33.8653 13.3357 0 0.110161H1449C1410.78 11.0734 1344.59 33 1224.68 33C1074.8 33 998.859 -4.06628 848.98 15.772C699.101 35.6103 604.546 29.3456 509.992 15.772C415.437 2.19845 331.947 15.772 258.516 26.2132Z" fill="#F8F8F8"/>
				</svg>
			</div>

		<div class="cta__container">

			<?php
			// CTA Query
			$args = array(
				'numberposts' => -1,
				'post_type'	  => 'cta',

			);

			$the_query = new WP_Query( $args );

			?>

			<?php if( $the_query->have_posts()): ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="cta-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<h2 class="cta-title">
					<?php the_field('heading'); ?>
				</h2>
				<p class="cta-copy">
					<?php the_field('copy'); ?>
				</p>
				<?php endwhile; ?>
			<?php endif; ?>
		<div><!-- cta_container -->

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

</section><!-- cta -->

