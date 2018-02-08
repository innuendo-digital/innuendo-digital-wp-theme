<?php get_header('black'); ?>
<div class="blog-wrapper">
	<div class="columns">
		<div class="column is-three-quarters">
		<article class="blog-article">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="blog-article-featured-image">
					<?php
						$thumbnail_id = get_post_thumbnail_id( $post->ID );
						$thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					?>
					<img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $thumbnail_alt; ?>" />
				</div>
			
				<header>
					<h5 class="tag"><?php echo get_the_category_list(' / '); ?></h5>
			        <h1><?php the_title(); ?></h1>
			        <div class="blog-author-image">
			        	<?php echo get_wp_user_avatar(); ?>
			        </div>
			        <h5 class="subtitle">Words by <?php echo get_the_author(); ?>  •  <?php the_date('F j, Y'); ?></h5>
			        
				</header>

				<section class="blog-content">
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
		</div>
		<div class="column">
			<aside class="blog-sidebar">
			<!-- This section can be implemented when we can incorporate stats
				<button class="sidebar-toggle active">Recent Posts</button>
				<button class="sidebar-toggle">Popular posts</button> 
			-->
				<ul class="recent-posts active">
					<?php 
					   // the query
					   $the_query = new WP_Query( array(
					      'posts_per_page' => 5,
					   )); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					  	<li>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
							<span><i style="color: black;" class="fa fa-newspaper-o" aria-hidden="true"></i>  </span><span class="subtitle"><?php echo get_the_date( 'd F, Y' ); ?></span>
						</li>

					  <?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>

					<?php else : ?>
					  <p><?php __('No posts found'); ?></p>
					<?php endif; ?>
					
				</ul>
			</aside>
		</div>
	</div><!-- end columns -->
	
	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div> <!-- end page-wrapper -->
<?php get_footer(); ?>