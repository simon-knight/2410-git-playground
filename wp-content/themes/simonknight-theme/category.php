<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
		
		<div class="grid-wrapper">
		
		
			<div class="grid one-whole lap-three-quarters desk-three-quarters about-promo">
			<div class=media>

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h2 class="archive-title"><?php printf( __( '%s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
			</div><!-- #media -->
			
			
			</div><!-- #grid -->
			
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
			</div><!-- grid -->

			</div><!-- #grid wrapper -->
		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>