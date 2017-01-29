<h2 class="title"><a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php if(has_post_thumbnail()){?>
  <figure>
    <?php the_post_thumbnail(); ?>
  </figure>
<?php }?>
<div class="crd-content">
  <?php the_content(); ?>
</div>