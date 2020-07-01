<?php /*Template Name: Accueil */ ?>

<?php get_header(); ?>
<?php
  $occasion_image_id = get_field('imageOccasion', 4);
  $service_image_id = get_field('imageServices', 4);
  $assurance_image_id = get_field('imageAssurance', 4);

  $taille_image_triple = 'presentation';
 ?>
<div class="flexslider">

<ul class="slides">
  <?php  $args = array(
    'post_type' => 'slider',
    'post-status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post(); ?>
      <li>
        <?php the_post_thumbnail('slider') ?>
        <p class="flex-caption"><?php echo get_the_content() ?></p>
      </li>
<?php }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
      // no posts found
    }

  ?>
</ul>
</div>

    <h1><?php the_field('titre_page_daccueil') ?></h1>
    <div class="content">

      <?php  $args = array(
        'post_type' => 'presentation',
        'post-status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $the_query = new WP_Query( $args );

      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post(); ?>

          <div class="blocTxtImg">
            <!-- <?php the_post_thumbnail('presentation') ?> -->
            <p class="description center"><?php echo get_the_content() ?></p>
          </div>

      <?php }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          // no posts found
        }

      ?>


      <div class="row">
        <div>
          <h1><?php the_field('titre_page_dassurance',8) ?></h1>
          <a href="<?php echo esc_url( home_url( '/assurances' ) ); ?>"><?php echo wp_get_attachment_image($assurance_image_id, $taille_image_triple);?></a>
        </div>
        <div>
          <h1><?php the_field('titre_page_doccasion',10) ?></h1>
          <a href="<?php echo esc_url( home_url( '/occasions' ) ); ?>"><?php echo wp_get_attachment_image($occasion_image_id, $taille_image_triple);?></a>
        </div>
        <div>
          <h1><?php the_field('titre_page_service',6) ?></h1>
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php echo wp_get_attachment_image($service_image_id, $taille_image_triple);?></a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
