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

 <div id="primary" class="about-us hero-content">
 	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post();
			$image_text = get_field('image_text');
			$service_name_1 = get_field('service_name_1');
      $service_name_2 = get_field('service_name_2');
      $service_name_3 = get_field('service_name_3');
      $service_name_4 = get_field('service_name_4');
			$description_1 = get_field('description_1');
      $description_2 = get_field('description_2');
      $description_3 = get_field('description_3');
      $description_4 = get_field('description_4');
			$image_1 = get_field('image_1');
      $image_2 = get_field('image_2');
      $image_3 = get_field('image_3');
      $image_4 = get_field('image_4');
			$size = "medium";
			$cta_text = get_field('cta_text');
			$cta_button_text = get_field('cta_button_text');?>

			<p><?php echo $image_text; ?></p>

	</div><!-- .main-content -->
</div><!-- #primary -->

<section class="service-container">
	<div class="site-content">
		<?php the_content(); ?>

    <section class="services">
			<div class="service_text right">
        <h2><?php echo $service_name_1; ?></h2>
		 	  <p><?php echo $description_1; ?></p>
      </div>
      <div class="service_image left">
			  <?php {echo wp_get_attachment_image( $image_1, $size );
				    }?>
      </div>
    </section>

    <section class="services">
      <div class="service_text left">
        <h2><?php echo $service_name_2; ?></h2>
        <p><?php echo $description_2; ?></p>
      </div>
      <div class="service_image right">
        <?php {echo wp_get_attachment_image( $image_2, $size );
            }?>
      </div>
    </section>

    <section class="services">
      <div class="service_text right">
        <h2><?php echo $service_name_3; ?></h2>
        <p><?php echo $description_3; ?></p>
      </div>
      <div class="service_image left">
        <?php {echo wp_get_attachment_image( $image_3, $size );
            }?>
      </div>
    </section>

    <section class="services">
      <div class="service_text left">
        <h2><?php echo $service_name_4; ?></h2>
        <p><?php echo $description_4; ?></p>
      </div>
      <div class="service_image right">
        <?php {echo wp_get_attachment_image( $image_4, $size );
            }?>
      </div>
    </section>

		<?php endwhile; // end of the loop. ?>

    <div class="cta_text">
		    <p><?php echo $cta_text; ?><a class="button"><?php echo $cta_button_text; ?></a></p>
    </div>
	</div>
</section>

<?php get_footer(); ?>
