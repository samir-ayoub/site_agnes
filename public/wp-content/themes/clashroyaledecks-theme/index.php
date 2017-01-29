<?php get_header();?>
<div class="index-content">
  <div class="container">
    <?php if(is_archive()){?>
      <h2 class="crd-page-title"><?php single_cat_title(); ?></h2>
    <?php }?>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
        <?php get_template_part('template-parts/loop')?>
        <div class="crd-navigation">
          <?php posts_nav_link(' ','< Página anterior','Próxima página >'); ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar();?>
      </div>
    </div>

  </div>
</div>
<?php get_footer();?>