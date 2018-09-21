<?php
/**
 * The template for the ABOUT page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

  <div class="about-summary">
    <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
  </div>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

      <?php while ( have_posts() ) : the_post();
        $image_1 = get_field('image_1');
        $service_1 = get_field('service_1');
        $description_1 = get_field('description_1');
        $image_2 = get_field('image_2');
        $service_2 = get_field('service_2');
        $description_2 = get_field('description_2');
        $image_3 = get_field('image_3');
        $service_3 = get_field('service_3');
        $description_3 = get_field('description_3');
        $image_4 = get_field('image_4');
        $service_4 = get_field('service_4');
        $description_4 = get_field('description_4');
        $size = "full"; ?>

    <article class="about">
      <div class="about-title">
        <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
      </div>

      <div class="service1">
        <div class="service1-img">
          <?php echo wp_get_attachment_image( $image_1, $size ); ?>
        </div>
        <div class="service1-text">
          <h3><?php echo $service_1; ?></h3>
          <p><?php echo $description_1; ?></p>
        </div>
      </div>

      <div class="service2">
        <div class="service2-img">
          <?php echo wp_get_attachment_image( $image_2, $size ); ?>
        </div>
        <div class="service2-text">
          <h3><?php echo $service_2; ?></h3>
          <p><?php echo $description_2; ?></p>
        </div>
      </div>

      <div class="service3">
        <div class="service3-img">
          <?php echo wp_get_attachment_image( $image_3, $size ); ?>
        </div>
        <div class="service3-text">
          <h3><?php echo $service_3; ?></h3>
          <p><?php echo $description_3; ?></p>
        </div>
      </div>

      <div class="service4">
        <div class="service4-img">
          <?php echo wp_get_attachment_image( $image_4, $size ); ?>
        </div>
        <div class="service4-text">
          <h3><?php echo $service_4; ?></h3>
          <p><?php echo $description_4; ?></p>
        </div>
      </div>

      <div class="about-contact">
        <div class="about-contact-text">
          <h3>Interested in working with us?</h3>
        </div>
        <div class="about-contact-button">
         <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
        </div>
      </div>

    </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
