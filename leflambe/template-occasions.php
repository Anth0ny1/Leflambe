<?php /*Template Name: Occasions */ ?>

<?php get_header(); ?>

<h1><?php the_field('titre_page_doccasion') ?></h1>


<div class="content">
  <?php

  $args = array(
    'post_type' => 'occasion',
    'post-status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  $the_query = new WP_Query( $args );
  ?>
  <?php

    $terms = get_terms( 'marque' );
    if ( ! empty( $terms )){
      echo '<nav>';
        echo '<ul class="filtre">';
        foreach ( $terms as $term ) {
            echo '<li class="liOccasion"><a href="'. get_term_link($term).'" class="linkOccasion"> Voir toutes les ' . $term->name . '</a></li>';
            // echo $term->name;
            // $terme = $term->slug;
            // echo get_term_link($term);
        }
        echo '</ul>';
      echo '</nav>';

  }
  ?>
  <div class="occasionBloc">
      <?php
      while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
        <div class="occasion polaroid">
          <?php
            $img_id = get_post_thumbnail_id(get_the_ID());
            $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
           ?>
          <a href="<?php echo get_the_permalink();?>"><?php the_post_thumbnail('occasion', array('alt' => $alt_text, 'title' => get_the_title() )); ?></a>
          <h2 class="container"><?php echo get_the_title() ?></h2>
        </div>
      <?php } ?>
  </div>
</div>

<?php get_footer(); ?>
