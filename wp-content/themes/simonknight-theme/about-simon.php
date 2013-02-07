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
 * Template Name: About Simon
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
			
			<div class=media>
				<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-about.jpg" alt="Understand" title="Understanding" height="136" width="159" class="media__img"> 
				<div class="media__body">
				<h3>Background</h3>
				<p>
				I'm based in Cleckheaton (near Leeds) in West Yorkshire and I’ve been a web designer since 1999.</p>
				<p>I'm passionate about what I do, I love the challenges involved and I always have a real appetite for the latest web design techniques and industry topics.
				</p>
				<p>
				After working for a few years as Lead Web Designer at an award-winning Web Agency, I co-founded <a href="http://www.twentyfourten.com" target="blank">Twentyfourten Ltd</a> and have been providing Web Design and Development services for businesses and organisations since 2003. </p>
				<p>
				I also provide Freelance Web Design services to Web Agencies.
				</p>
				<p>First and foremost I am a designer, who can not only create pixel perfect beautiful designs that communicate a positive message, but I can take those designs through to front-end development with solid hand-coded HTML and CSS skills.
				</p>
				<p>
				<a href="http://www.simonknight.co.uk/simon-knight-cv.pdf" target="blank" class="cv pink-button">Download my CV</a>
				</p>
			</div><!-- media body -->
			</div><!-- media -->
			
			<div class=media>
				<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-tools.jpg" alt="Understand" title="Understanding" height="136" width="159" class="media__img"> 
				<div class="media__body">
				<h3>Skills and Tools</h3>
				<h4>Design</h4>
				<ul>
				<li>Expert knowledge of Photoshop</li>
				<li>Grid based layouts</li>
				<li>Style tiles</li>
				<li>Wireframing & Prototyping</li>
				</ul>
			
				<H4>Code</H4>
				<ul>
				<li>HTML & CSS hand-coding</li>
				<li>Sass / Compass CSS Pre-processing</li>
				<li>CSS frameworks; Inuit, Bootstrap, Foundation</li>
				<li>Responsive Web Design</li>
				<li>WordPress customisation</li>
				</ul>
				
			</div><!-- media body -->
			</div><!-- media -->
			
			
			<div class=media>
				<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/icon-awards.jpg" alt="Understand" title="Understanding" height="136" width="159" class="media__img"> 
				<div class="media__body">
				<h3>Recognition</h3>
				<ul>
				<li>2003 – National Library for the Blind “Visionary Design Award"</li>
				<li>2003 – Yorkshire Internet Awards – “Best Web Design Company”, Winner</li>
				<li>2005 – Yorkshire Internet Awards – “Best Web Design Company”, Finalist</li>
				</ul>
			</div><!-- media body -->
			</div><!-- media -->

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
			</div><!-- hire -->
			</div><!-- grid -->
		</div><!-- grid wrapper -->
	
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>