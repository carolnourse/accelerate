<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
				$serviceimage = get_field('serviceimage');
				$link = get_field('site_link');
				$size = "medium"; ?>
				<?php while ( have_posts() ) : the_post();
	<?php $i = 0; ?>
	<?php foreach ($service as $service) : ?>
	<?php $i++; ?>
	<div class="service-<?php service_ID() ?>"<?php if($i&) { echo 'class="odd"';} else {echo 'class="even"';} ?>>

				<article class="service">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>


										<div class="service-image">
											<?php if($serviceimage){
												echo wp_get_attachment_image( $serviceimage, $size );
											}?>
										</div>
				</article>										
										<p><strong><a href="<?php echo $link; ?>">Visit Live Site ></a></strong></p>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/services/') ?>">← <span>Back to Work</span></a></div>
	</nav>

<?php get_footer(); ?>
