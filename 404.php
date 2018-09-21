<?php
/**
 * The template for displaying the 404 page!
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

      <div class="container404">
        <h1>Ohhh Nooo</h1>
        <img src="https://media.giphy.com/media/fAykJdJ6SYSYw/giphy.gif" />
        <p>Sorry, this page no longer exists, never existed or has been moved.</p>
        <p>But don't freak out! Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p> 
      </div>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
