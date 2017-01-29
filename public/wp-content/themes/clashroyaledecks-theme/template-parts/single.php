<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="crd-meta">
  <i class="glyphicon glyphicon-calendar"></i><span class="crd-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</div>

<?php if(get_post_meta( get_the_ID(), 'mostrar_featured_single', true ) == "sim" && has_post_thumbnail()) { ?>
  <figure>
    <?php the_post_thumbnail(); ?>
  </figure>
<?php }?>

<?php if(has_category('decks')){ ?>
  <div class="row crd-thedeck">
    <div class="row">
      <?php 
        for($i=0;$i<=7;$i++){
          $deck[$i] = get_post_meta( get_the_ID(), ('carta_'.($i+1)), true );
        }
        the_deck($deck); 
      ?>
    </div>
  </div>
  <div class="crd-card-levels">
    <strong>Level das cartas</strong>
    <ul>
      <li class="comum">Comum <?= get_post_meta( get_the_ID(), 'carta_comum', true ); ?></li>
      <li class="rara">Rara <?= get_post_meta( get_the_ID(), 'carta_rara', true ); ?></li>
      <li class="epica">Épica <?= get_post_meta( get_the_ID(), 'carta_epica', true ); ?></li>
      <li class="lendaria">Lendária <?= get_post_meta( get_the_ID(), 'carta_lendaria', true ); ?></li>
    </ul>
  </div>
<?php } ?>

<div class="crd-content">
  <?php the_content(); ?>
</div>