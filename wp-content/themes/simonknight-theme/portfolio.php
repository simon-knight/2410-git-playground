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
 * Template Name: Portfolio
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
			
			<div class="grid one-whole lap-one-half desk-one-half no-pad portfolio">
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-we.jpg" alt="">
						<figcaption>
							<h3>Walk England</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS <br/>
							<a href="http://www.walkengland.org.uk" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-wl.jpg" alt="">
						<figcaption>
							<h3>Walk London</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS<br/>
							<a href="http://www.walklondon.org.uk" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-2410.jpg" alt="">
						<figcaption>
							<h3>Twentyfourten</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS <span>|</span> WordPress Build <br/>
							<a href="http://www.twentyfourten.com" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-vpw.jpg" alt="">
						<figcaption>
							<h3>VPWSYS (UK) Ltd</h3>  
							<p>Design/UI <span>|</span> HTML Templates <span>|</span> CSS <br/>
							<a href="http://www.vpwsys.net" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
					
					
					</div><!-- grid -->
					
					<div class="grid one-whole lap-one-half desk-one-half no-pad portfolio">
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-dgh.jpg" alt="">
						<figcaption>
							<h3>Daley Golf Holidays</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS <span>|</span> WordPress Build <br/>
							<a href="http://www.daleygolfholidays.co.uk" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-w4l.jpg" alt="">
						<figcaption>
							<h3>Walk4Life</h3>  
							<p>Design/UI <br/>
							<a href="http://www.walk4life.info" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-gs.jpg" alt="">
						<figcaption>
							<h3>Gerry Sutcliffe MP</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS <span>|</span> WordPress Build <br/>
							<a href="http://www.gerrysutcliffe.org.uk" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
						<figure class="cap-bot">
						<img src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/images/th-ge.jpg" alt="">
						<figcaption>
							<h3>Green Exercise</h3>  
							<p>Design/UI <span>|</span> HTML <span>|</span> CSS <span>|</span> WordPress Build <br/>
							<a href="http://www.greenexercise.org.uk" target="_blank">Visit Site</a>
						</figcaption>
						</figure>
						
					
					</div><!-- grid  -->

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
		
		
		
		
			<div class="grid one-whole lap-three-quarters desk-three-quarters about-promo">
			
				<div class="grid-wrapper">
				
										
				
				
			</div><!-- grid wrapper -->

			
			
			
		</div><!-- grid wrapper -->
			
			
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>