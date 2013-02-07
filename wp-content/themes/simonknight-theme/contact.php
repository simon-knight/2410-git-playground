<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template Name: Contact
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
		<div class="grid-wrapper">
			<div class="grid one-whole lap-three-quarters desk-three-quarters">
			<div class="hero"
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			</div><!-- hero -->
			
			<div class="get-in-touch">
						<a href=# class=icon-text>
				<i class="icon-text__icon  e"></i>simon@simonknight.co.uk
        	</a>
        	<span class=icon-text>
				<i class="icon-text__icon  p"></i>07884 363 073
        	</span>
			</div><!-- get in touch -->
			
			<div class="form">
			<?php echo do_shortcode('[gravityform id="1" name="Contact Simon" title="false" description="false"]'); ?>
			</div><!-- form-->

			</div><!-- grid -->
			
			<div class="grid one-whole lap-one-quarter desk-one-quarter promo">
			<div class="portrait">
			<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/simon-knight.jpg" alt="Simon Knight - Web Designer" title="Simon Knight - Web Designer" height="332" width="220"> 
			</div><!-- portrait -->
			<div class="hire">
			<h3>For Hire!</h3>
			<h4>Freelance Availability</h4>
			<p>If you are an Agency & you’d like to hire me - I’m currently available for new projects from: <br/>
			<span>Start of Feb 2013</span>
			</p>
			</div><img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/hire-trim.png" id="trim" alt="" title="" height="10" width="220">
			</div>
			</div><!-- grid -->
		</div><!-- grid wrapper -->
		
					
			
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>