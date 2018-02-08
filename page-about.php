<?php

/* 
* Template Name: About Us
*/

?>

<?php get_header('white'); ?>

<section class="page-hero-section">
		<div class="columns white">
			<div class="column is-half">
				<header class="page-header animate-in-half-sec">
					<h1><?php the_field('heading'); ?></h1>
				</header>
				<section class="page-header-text animate-in-one-sec">
					<?php the_field('subheading'); ?>
				</section>
			</div>
		</div><!-- end columns -->
	</section>

	<div class="about-page-wrapper">
		
		<section class="about-us">
		<?php
			if( have_rows('content_section') ):

		 	// loop through the rows of data
		    while ( have_rows('content_section') ) : the_row(); ?>

		    <h5 class="section-title black"><?php the_sub_field('heading'); ?></h5>
		    <?php the_sub_field('content'); ?>

		    <?php
		    endwhile;
		    endif;
		    ?>
		</section>
	</div>
	<div class="dream-team-wrapper">
		<section class="about-team">
			<h5 class="section-title white">The Dream Team</h5>
			<div class="columns is-mobile is-multiline">
			<?php

			if( have_rows('staff_members') ):

		 	// loop through the rows of data
		    while ( have_rows('staff_members') ) : the_row(); ?>

		    	<div class="column is-half-mobile is-one-quarter-desktop is-one-quarter-tablet">
					<div class="staff-image-wrapper">
						<img src="<?php the_sub_field('staff_photo'); ?>" alt="<?php the_sub_field('staff_name'); ?>" />
						<div class="staff-name-title white">
						<h4><?php the_sub_field('staff_name'); ?></h4>
						<h4 class="subtitle"><?php the_sub_field('staff_title'); ?></h4>
						</div> 
					</div>
				</div>

		    <?php
		    endwhile;

		    endif;

			?>
			</div>

		</section>
	</div>
	<div class="about-page-wrapper">
		<section class="about-process">
			<h5 class="section-title black">our process</h5>
			<div class="process-slider">
					<ul>
					<?php

					if( have_rows('our_process') ):

				 	// loop through the rows of data
				    while ( have_rows('our_process') ) : the_row(); ?>

				    	<li>
							<article class="process-point">
								<div class="columns">
									<div class="column is-half">
										<section>
											<h2><?php the_sub_field('heading'); ?></h2>
											<p><?php the_sub_field('content'); ?></p>
										</section>
									</div>
									<div class="column">
										<div class="image-wrapper">
											<img class="svg" height="170" width="100%;" src="<?php the_sub_field('image'); ?>" />
										</div>
									</div>
								</div>
							</article>
						</li>

				    <?php
				    endwhile;

				    endif;

					?>
					
						
					</ul>
				</div>
		</section>
		
		<section class="about-clients">
			<h5 class="section-title black">We've worked with</h5>
			<div class="columns is-multiline">
			<?php

			if( have_rows('client_logos') ):

		 	// loop through the rows of data
		    while ( have_rows('client_logos') ) : the_row(); ?>

		    	<div class="column is-3">
					<div class="client-logo-wrapper">
						<img src="<?php the_sub_field('client_logo_image'); ?>" alt="<?php the_sub_field('client_name'); ?>" />
					</div>
				</div>

		    <?php
		    endwhile;

		    endif;

			?>
			</div>
		</section>



	</div>

<?php get_footer(); ?>