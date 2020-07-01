<?php /*Template Name: Services */ ?>

<?php get_header(); ?>
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
<h1  class="h1Services"><?php the_field('titre_page_service') ?></h1>

<div class="content">
  <?php  $args = array(
    'post_type' => 'service',
    'post-status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post(); ?>

      <div class="blocService">
        <h2><?php echo get_the_title() ?></h2>
          <div class="service">
            <?php
              $img_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
             ?>
            <?php the_post_thumbnail('presentation', array('alt' => $alt_text, 'title' => get_the_title() )) ?>
            <p class="description"><?php echo get_the_content() ?></p>
          </div>
      </div>

<?php }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
      // no posts found
    }

  ?>
  <!-- <div class="blocService">
    <h2>Mecanique</h2>

    <div class="service">
      <img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/250.png'))?>" alt="">
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="blocCarosserie">
    <h2>Carosserie</h2>

    <div class="carosserie">
      <img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/250.png'))?>" alt="">
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div> -->
</div>


<?php get_footer(); ?>
