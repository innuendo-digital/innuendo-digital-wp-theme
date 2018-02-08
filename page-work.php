<?php
	
	// Template name: Work index

?>

<?php get_header('white'); ?>
<section class="page-hero-section">
		<div class="columns white">
			<div class="column is-half">
				<header class="page-header animate-in-half-sec">
					<h1>Here's some work we're super proud of.</h1>
				</header>
				<section class="page-header-text animate-in-one-sec">
					<p>
						We're always working to make sure our projects are top notch every time. But sometimes we make something that we're just so chuffed about that we have to tell everyone all about it. 
					</p>
				</section>
			</div>
		</div><!-- end columns -->
	</section>
<div class="page-wrapper">
<h5 class="section-title black">Our work</h5>
	<div class="case-articles">
		<ul>
		<?php 
		   // the query
		   $custom_post_query = new WP_Query( array(
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
</div><!-- end page-wrapper
	 -->
<?php get_footer(); ?>