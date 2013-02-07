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
			
			<div class="grid one-whole lap-one-third desk-one-third promo no-pad">
			<div class="understand">
			<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-discuss.jpg" alt="Discuss" title="Discuss" height="136" width="220"> 
			<h3>Discuss</h3>
			<p>You can only go on to Design or Code a project successfully if you understand what is required.</p>
			<p>I'll identify the results you are looking to achieve and discuss how your project will deliver them.</p>
			<p>Understanding your projects intended target audience and learning the requirements of those users is always my aim.			</p>			
			</div><!-- understand -->
			</div><!-- grid -->
			
			<div class="grid one-whole lap-one-third desk-one-third promo no-pad">
			<div class="design">
			<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-design.jpg" alt="Design" title="Design" height="136" width="220"> 
			<h3>Design</h3>
			<p>I have an excellent understanding of graphic design, layout and typography for the web.</p>
			<p>I believe in design. I understand the impact a well-executed, customer-focused design can have.</p>
			<p> With user decision-making and commercial choices being based on perceived quality, there are tangible benefits to striving for perfection in design.</p>
			</div><!-- design -->
			</div><!-- grid -->
			
			<div class="grid one-whole lap-one-third desk-one-third promo no-pad">
			<div class="code">
			<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-code.jpg" alt="Code" title="Code" height="136" width="220"> 
			<h3>Code</h3>
			<p>I am a web designer who can go beyond just creating stunning visuals, I also have hand-coding skills to convert my designs into front-end development.</p>
			<p>Responsive design poses new coding challenges, I can meet those challenges with HTML5, CSS3, Sass / Compass frameworks etc.</p>
			<p>My Development skills extend to backend with WordPress.	
			</p>
			</div><!-- code -->
			</div><!-- grid -->

			</div><!-- grid -->
			<div class="grid one-whole lap-one-quarter desk-one-quarter promo ">
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
			</div><!-- hire-->
			</div><!-- grid -->
		</div><!-- grid wrapper -->
		
		
			
			
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>