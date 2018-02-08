<?php get_header('white'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="case-study-hero-section" style="background: #1787fb; background: <?php the_field('feature_colour'); ?>">
		<?php
			$thumbnail_id = get_post_thumbnail_id( $post->ID );
			$thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
		?>
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $thumbnail_alt; ?>"/>
	</section>
		
		<article class="case-study-article">
			<header class="case-study-header">
				<h1><?php the_title(); ?></h1>
				<h3 class="subtitle"><?php the_field('subheading'); ?></h3><br />
				<!-- <a href="#" class="link-button tag">Wordpress</a>
				<a href="#" class="link-button tag">Web design</a>
				<a href="#" class="link-button tag">Blog</a> -->
			</header>
			<section class="case-study-content">
				<?php the_content(); ?>
			</section>
			<footer>
				<div class="sharing">
		        	<!-- <a class="share-button facebook" href="#">
						<i class="fa fa-facebook" aria-hidden="true"></i><span class="share-count">55</span>
					</a>

					<a class="share-button twitter" href="#">
						<i class="fa fa-twitter" aria-hidden="true"></i><span class="share-count">0</span>
					</a>

					<a class="share-button linkedin" href="#">
						<i class="fa fa-linkedin" aria-hidden="true"></i><span class="share-count">4</span>
					</a> -->
		        </div>
			</footer>
		</article>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>