<?php
add_action('init', 'my_custom_carousel');
function my_custom_carousel(){

register_post_type(
  'carousel',
  array(
    'label' => 'carousel',
    'labels' => array(
      'name' => 'carousel',
      'singular_name' => 'carousel',
      'all_items' => 'Toutes les carousel',
      'add_new_item' => 'Ajouter une carousel',
      'edit_item' => 'Éditer une carousel',
      'new_item' => 'Nouvelle carousel',
      'view_item' => 'Voir les carousel',
      'search_items' => 'Rechercher parmi les carousel',
      'not_found' => 'Pas d\'carousel trouvé',
      'not_found_in_trash'=> 'Pas d\'carousel dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      // 'editor',
      'thumbnail'
    ),
    'has_archive' => true,
    'menu_position' => 83,
    'menu_icon' => 'dashicons-format-gallery',
    // 'rewrite' => array(
    //   'slug' => 'taxonomy-marque',
    // )
  )
);
}
