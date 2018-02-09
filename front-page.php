<?php get_header('white'); ?>

	<section class="hero-section">
		<!-- FIXIT - Currently not displaying properly in safari -->
		<video autoplay poster="<?php echo_image_url(); ?>/videos/hero-movie.jpg">
			<source src="<?php the_field('home_page_video'); ?>" type="video/mp4" />
			<source src="<?php echo_image_url(); ?>/videos/hero-movie-2.mp4" type="video/mp4" />
		</video>
		<div class="mobile-home-header">
			<h1>Innuendo Digital delivers results for clients through <strong>innovation, imagination and integrity</strong></h1>
		</div>
	</section>
	<div class="page-wrapper">
	<!-- Our Services Section -->
	<section class="featured-content services-section">
		<h5 class="section-title black"><a href="<?php echo home_url(); ?>/about">Our Services</a></h5>
			<div class="columns">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('home_page_services') ):

				 	// loop through the rows of data
				    while ( have_rows('home_page_services') ) : the_row(); ?>

				    	<article class="column">
							<div class="service-column">
								<header>
									<h5><?php the_sub_field('service_title'); ?></h5>
									<div class="service-column-image" style="background-image: url(<?php the_sub_field('service_image'); ?>);"></div>
								</header>
								<section class="service-column-list">
									<?php the_sub_field('service_list'); ?>
								</section>
							</div>
						</article>

				    <?php endwhile;

				else :

				    // no rows found

				endif;

				?>
			</div>
	</section>
		
	<!-- Our work section -->
		<section class="featured-content">
			<h5 class="section-title black"><a href="<?php echo home_url(); ?>/work">Our work</a></h5>
				<div class="featured-case-articles">
					<ul>
					<?php 
					   // the query
					   $custom_post_query = new WP_Query( array(
					      'posts_per_page' => 4,
					      'post_type' => 'case_studies',
					   )); 
					?>

					<?php if ( $custom_post_query->have_posts() ) : ?>
					  <?php while ( $custom_post_query->have_posts() ) : $custom_post_query->the_post(); ?>
					  	
						
						  	<li>
								<article class="case-study" style="background: <?php the_field('feature_colour'); ?>;">
									<div class="columns">
										<div class="column">
											<div class="image-wrapper">
												<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" 
												alt="Case Study 1 image"/></a>
											</div>
										</div>
										<div class="column">
											<section class="white">
												<h5>Case study</h5>
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<p><?php the_field('subheading'); ?></p>
												<a class="link-button white" href="<?php the_permalink(); ?>">Read more</a>
											</section>
										</div>
									</div>
								</article>
							</li>
							<?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>
						<?php else : ?>
						  <p><?php __('No posts found'); ?></p>
						<?php endif; ?>
					</ul>
				</div>
		</section>

		<!-- Latest blogs section -->
		<section class="latest-blogs">
			<h5 class="section-title black"><a href="<?php echo home_url(); ?>/blog">Our musings</a></h5>
			<div class="columns">
				<?php 
				   // the query
				   $the_query = new WP_Query( array(
				      'posts_per_page' => 3,
				   )); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
				  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				  	<div class="column" style="margin-bottom: 1.5rem;">
						<article class="blog-card">
							<a href="<?php the_permalink(); ?>"><div 
							style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');" 
							class="blog-image">
							</div></a>
							<section>
								<h5>Article</h5>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p><br />
								<i style="color: black;" class="fa fa-newspaper-o" aria-hidden="true"></i> 
								<span class="subtitle"><?php echo get_the_author(); ?>  •  <?php echo get_the_date( 'd F, Y' ); ?></span>
							</section>
						</article>
					</div>
					<?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>

					<?php else : ?>
					  <p><?php __('No posts found'); ?></p>
					<?php endif; ?>
			
			</div>
		</section>
	</div><!-- end page-wrapper -->
<?php get_footer(); ?>