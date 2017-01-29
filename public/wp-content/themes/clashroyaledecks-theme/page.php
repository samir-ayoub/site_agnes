<?php get_header();?>
<div class="index-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="crd-post">
            <?php get_template_part('template-parts/page')?>
          </div>
          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>