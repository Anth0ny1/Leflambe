<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leflambe
 */

get_header();
?>
<?php $terms = get_terms('marque'); ?>

<div class="content">
  <nav class="listOfTerm">
    <ul class="filtre">
    <?php
    foreach ( $terms as $term ) {
      echo '<li class="liOccasion"><a href="'. get_term_link($term).'" class="linkOccasion">Voir toutes les ' . $term->name . '</a></li>';
    }
    ?>
    </ul>
  </nav>


  <?php
  if ( have_posts() ) :
  ?>
  <h1 class="termName"><?php echo get_queried_object()->name; ?></h1>
    <div class="blocFiltre">
  <?php
  	while ( have_posts() ) : the_post();

  ?>
  <div class="filtreContent">
    <h2><?php echo get_the_title(); ?></h2>
    <?php
      $img_id = get_post_thumbnail_id(get_the_ID());
      $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
    ?>
      <a href="<?php echo get_the_permalink() ?>" class="imgMarque"><?php the_post_thumbnail('imgFiltrer', array('alt' => $alt_text, 'title' => get_the_title()) ); ?></a>
      <p class="descriptionVoiture"><?php echo get_the_content() ?></p>
  </div>
  <?php
  	endwhile;
  ?>
</div>
  <?php
  endif;
  ?>
</div>


<?php
get_footer();
