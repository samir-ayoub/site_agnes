



<?php get_header(); ?>

	<section id="blog">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow fadeInDown" data-wow-duration="1s">Blog</h2>
						<span class="underline"></span>
					</div>

				</div>
			</div>
			<div class="posts section-content">
				<div class="row">


					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							//
					?>

						<div class="col-md-8 col-sm-8 col-sx-12 blog-item">
							<div class="blog-picture"></div>
							<h5><?php the_title(); ?></h5>
							<h6><?php the_date(); ?></h6>
							<p><?php the_excerpt(); ?></p>
							<div class="read-more">
								<a href="<?php the_permalink(); ?>">Leia Mais</a>
							</div>
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
