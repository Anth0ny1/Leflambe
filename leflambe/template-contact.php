<?php /*Template Name: Contact2 */ ?>

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
<h1>Contactez nous</h1>
  <div class="content">
    <div class="column ">

    <div class="row margin">
      <div class="form">
        <form id="myform" class="cssform" action="">
          <?php echo do_shortcode( '[contact-form-7 id="206" title="Formulaire de contact 1"]' ); ?>

          <!-- <p class="center"><label for="user">Nom :</label>
          <input type="text" id="user" value="" /></p>

          <p class="center"><label for="emailaddress">Email :</label>
          <input type="text" id="emailaddress" value="" /></p>

          <p class="center"><label for="comments">Message :</label>
          <textarea id="comments" rows="5" cols="25"></textarea></p>

          <p class="center"><div style="margin-left: 150px;">
            <input type="submit" value="Envoyer" />
          </div></p> -->
          <form>
      </div>

      <div class="mapsContact">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.505735999575!2d-1.7685234839166406!3d49.531606279359174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c92becd2c26d1%3A0x3d7027c6988e8004!2s28+Route+de+Couville%2C+50340+Beno%C3%AEtville!5e0!3m2!1sfr!2sfr!4v1517449692885" width="90%" height="90%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="coordonees margin">
      <h2>Nos Coordonees</h2>

      <p>Tél : <?php the_field('telephone', 4) ?></p>
      <p>Fax : <?php the_field('fax', 4) ?></p>
      <p>Adresse : <?php the_field('adresse', 4) ?></p>
    </div>
  </div>

  </div>




<?php get_footer(); ?>
