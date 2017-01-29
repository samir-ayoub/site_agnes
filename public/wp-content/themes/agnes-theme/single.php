<?php get_header(); ?>

	<section id="single">
		<div class="container">

			<div class="single-section-content">
				<div class="row">


					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							//
					?>

						<div class="col-md-12 col-sm-12 col-sx-12 blog-item">
							<h5><?php the_title(); ?></h5>
							<p><?php the_content(); ?></p>
						</div>

					<?php 
							//
						} // end while
					} // end if
					?>

				</div>
			</div>
		</div>

	</section>

<?php get_footer(); ?>
