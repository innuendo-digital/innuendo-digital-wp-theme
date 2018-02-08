<?php get_header('black'); ?>
	<div class="page-wrapper">
		<section class="latest-blogs">
			<div class="columns is-multiline">

				<?php
				$counter = 0; 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				if($counter % 3 == 0) {
					echo "</div><div class='columns is-multiline'>";
				}

				?>
				<!-- Need to fix up the grid to avoid stuff like this -->
				<div class="column" style="margin-bottom: 1.5rem;">
					<article class="blog-card">
						<a href="<?php the_permalink(); ?>"><div 
						style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');" 
						class="blog-image">
						</div></a>
						<section>
							<h5><?php echo get_the_category_list(' / '); ?></h5>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?></p><br />
							<i style="color: black;" class="fa fa-newspaper-o" aria-hidden="true"></i> 
							<span class="subtitle"><?php echo get_the_author(); ?>  •  <?php echo get_the_date( 'd F, Y' ); ?></span>
						</section>
					</article>
				</div>
				<?php $counter++; ?>

				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</section>
	</div><!-- end page-wrapper -->

<?php get_footer(); ?>