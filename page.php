<?php

/* 
* Template Name: About Page
*/

?>

<?php get_header('white'); ?>

<section class="page-hero-section">
		<div class="columns white">
			<div class="column is-half">
				<header class="page-header animate-in-half-sec">
					<h1><?php the_title(); ?></h1>
				</header>
				
			</div>
		</div><!-- end columns -->
	</section>

	<div class="about-page-wrapper">
		
		<section class="about-us">
			<?php the_content(); ?>
		</section>
		
	</div>
	
	</div>

<?php get_footer(); ?>