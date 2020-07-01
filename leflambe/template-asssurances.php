<?php /*Template Name: Assurances */ ?>

<?php get_header(); ?>

  <h1><?php the_field('titre_page_dassurance') ?></h1>

<!-- Place somewhere in the <body> of your page -->
<div class="carousel">
  <ul class="slides">
    <?php  $args = array(
      'post_type' => 'carousel',
      'post-status' => 'publish',
      'posts_per_page' => 15,
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>

        <li class="blank">
          <?php the_post_thumbnail('carousel', array('class' => 'carouselImg')) ?>
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

  <div class="content">
    <?php  $args = array(
      'post_type' => 'assurance',
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
              <!-- <h1 class="entry-title"><?php echo $alt_text; ?></h1> -->
              <?php the_post_thumbnail('presentation', array('alt' => $alt_text, 'title' => get_the_title()) ) ?>
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
    <!-- <div class="blocServiceDomicile">
      <h2>Service à domicile</h2>
        <div class="serviceDomicile">
          <img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/250.png'))?>" alt="">
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>


    <div class="blocServicePareBrise">
      <h2>Service pare-brise</h2>

      <div class="servicePareBrise">
        <img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/250.png'))?>" alt="">
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div> -->
  </div>


<?php get_footer(); ?>
