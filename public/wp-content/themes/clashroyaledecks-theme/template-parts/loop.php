<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="crd-post" data-url="<?php the_permalink(); ?>" data-urlshort="<?php echo wp_get_shortlink(); ?> ">

    <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

    <div class="crd-meta">
      <i class="glyphicon glyphicon-calendar"></i><span class="crd-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
    </div>
  
    <?php if(get_post_meta( get_the_ID(), 'mostrar_featured', true ) == "sim" && has_post_thumbnail()) { ?>
      <figure>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
          <?php if( get_post_meta( get_the_ID(), 'carta_comum', true ) > 0 ) { ?>
            <li class="comum">Comum <?= get_post_meta( get_the_ID(), 'carta_comum', true ); ?></li>
          <?php }?>
          <?php if( get_post_meta( get_the_ID(), 'carta_rara', true ) > 0 ) { ?>
            <li class="rara">Rara <?= get_post_meta( get_the_ID(), 'carta_rara', true ); ?></li>
          <?php }?>
          <?php if( get_post_meta( get_the_ID(), 'carta_epica', true ) > 0 ) { ?>
            <li class="epica">Épica <?= get_post_meta( get_the_ID(), 'carta_epica', true ); ?></li>
          <?php }?>
          <?php if( get_post_meta( get_the_ID(), 'carta_lendaria', true ) > 0 ) { ?>
            <li class="lendaria">Lendária <?= get_post_meta( get_the_ID(), 'carta_lendaria', true ); ?></li>
          <?php }?>
        </ul>
      </div>
    <?php } ?>

      <div class="crd-content">
        <?php if(has_excerpt()){ ?>
          <?php the_excerpt(); ?>
          <a class="veja-mais" href="<?php the_permalink(); ?>">Veja mais...</a>
         <?php }else{ ?>
          <?php the_content(); ?>
        <?php } ?>
      </div>
  </div>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>