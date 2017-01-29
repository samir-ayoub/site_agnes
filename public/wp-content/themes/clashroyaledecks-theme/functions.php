<?php 

add_theme_support( 'post-thumbnails' );



function remove_admin_bar() {
  show_admin_bar(false);
}

function deck_shortcode( $atts, $content = null ) {
  return '<span class="deck" atts="'.$atts['cards'].'">' . $content . '</span>';
}
add_shortcode( 'deck', 'deck_shortcode' );


add_action('after_setup_theme', 'remove_admin_bar');
add_action('after_setup_theme','crd_menu_setup');

function crd_menu_setup(){
  register_nav_menus(array(
    'menu'           => esc_html__('menu','Menu')
  ));
}

function crd_widgets_init() {

  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'clashroyaledecks-theme' ),
    'id' => 'sidebar-1',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'clashroyaledecks-theme' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
    'name' =>__( 'Front page sidebar', 'clashroyaledecks-theme'),
    'id' => 'sidebar-2',
    'description' => __( 'Appears on the static front page template', 'clashroyaledecks-theme' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  }
add_action( 'widgets_init', 'crd_widgets_init' );


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'cards',
    array(
      'labels' => array(
        'name' => __( 'Cards' ),
        'singular_name' => __( 'Card' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'cards'),
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
}

function the_deck($deck){
  $query = new WP_Query( array( 'post_type' => 'cards', 'post__in' => $deck ) );
  if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {
      $query->the_post();
      $slug = basename(get_permalink());
      echo '<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6"><div class="card '.$slug.' '. get_post_meta( get_the_ID(), 'raridade', true ) .'"><div class="elixir">'.get_post_meta( get_the_ID(), 'custo_elixir', true ).'</div><span>' . get_the_title() . '</span>'.get_the_post_thumbnail().'</div></div>';
    }

  }
  wp_reset_postdata();
}