<?php /* Template Name: TEMPLATE BLOG */ ?>
<?php get_header(); ?>

<section id="blog">
<div class="container">
	<div class="section-content">
				<h2 class="wow fadeInDown" data-wow-duration="1s">Blog</h2>
				<span class="underline"></span>
	</div>
	<div class="posts section-content">
		<div class="row">


			<?php 
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'posts_per_page' => 12,
				'post_type' 	 => 'post',
				'paged'          => $paged
			);
			$the_query = new WP_Query( $args ); 

			$i = 1;

			?>


			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $grid = $i == 1 ? "col-md-4 col-sm-4" : "col-md-4 col-sm-4" ;?>
					<div class="<?php echo $grid; ?> col-sx-12 blog-item blog-item-<?php echo $i; ?>">
						<div class="blog-picture">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
						</div>
						<h4><?php the_title(); ?></h4>
						<h6><?php the_date(); ?></h6>
						<p><?php the_excerpt(); ?></p>
						<div class="read-more">
							<a href="<?php the_permalink(); ?>">Leia Mais</a>
						</div>
					</div>
				<?php $i++; ?>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
				  <nav class="prev-next-posts">
				    <div class="prev-posts-link">
				      <?php echo get_next_posts_link( 'Posts antigos', $the_query->max_num_pages ); // display older posts link ?>
				    </div>
				    <div class="next-posts-link">
				      <?php echo get_previous_posts_link( 'Posts recentes' ); // display newer posts link ?>
				    </div>
				  </nav>
				<?php } ?>

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>
