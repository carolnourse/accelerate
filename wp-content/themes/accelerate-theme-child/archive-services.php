<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

get_header(); ?>

<div id="primary" class="about-page">
	<div class="main-content" role="main">
		<div class="banner">
			<p>Accelerate is a strategy and marketing agency<br>
				located in the heart of NYC. Our goal is to build<br>
				businesses by making our clients visible and<br>
				marking their customers smile.</p>
		</div>

<section class="our-services">
	<h2>Our Services</h2>
	<p class="services-archive">We take pride in our clients and the content we create for them.<br>
				Here's a brief overview of our offered services.</p>

	<?php while ( have_posts() ) : the_post();
		$serviceimage = get_field("serviceimage");
		$size = "medium";?>
		<?php $odd_or_even = 'odd'; ?>

<div id="service-container">
		<article class="service <?php echo $odd_or_even; ?>">
			<?php $odd_or_even = ( 'odd'==$odd_or_even) ? 'even' : 'odd'; ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>

		<aside class="service-sidebar">
			<div class="service-image">
				<?php {echo wp_get_attachment_image( $serviceimage, $size );
					}?>
				</div>
		</aside>
	</div>
	<?php endwhile; // end of the loop. ?>

	<div class="two-thirds">
		<p><strong>Interested in working with us?</strong></p>
	</div>
	<div class="one-third">
		<div class="button">
			<p><strong><a href="<?php echo $link; ?>">Contact Us</a></strong></p>
		</div>
	</div>
</section>
</div><!-- .main-content -->
</div><!-- #primary -->
<?php get_footer(); ?>
