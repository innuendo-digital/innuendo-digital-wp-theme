<?php get_header('black'); ?>

<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 1,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  	<div class="featured-blog-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
	</div>
	<div class="page-wrapper">
		<article class="featured-blog-article">			
				<div class="columns">
					<div class="column is-two-thirds">
						<header class="featured-article-header">
							<h5><?php echo get_the_category_list(' / '); ?></h5>
							<h1><?php the_title(); ?></h1>
							<div class="blog-author-image">
					        	<?php echo get_wp_user_avatar(); ?>
					        </div>
					        <h4 class="subtitle">Words by <?php echo get_the_author(); ?> • <?php echo get_the_date( 'd F, Y' ); ?></h4> 
						</header>
						<section class="featured-article-stub">
							<p>
								<?php the_excerpt(); ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="link-button">Read more</a>
						</section>
					</div>
				</div><!-- end columns -->
		</article>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No posts found'); ?></p>
<?php endif; ?>

		<section class="latest-blogs">
			<div class="columns is-multiline">

				<?php
				$counter = 0; 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				?>
				<!-- Need to fix up the grid to avoid stuff like this -->
				<div class="column is-one-third">
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
				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</section>
		<div class="nav-previous"><?php next_posts_link( 'Next page' ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Previous page' ); ?></div>
	</div><!-- end page-wrapper
	 -->
<?php get_footer(); ?>