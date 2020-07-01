<?php
add_action('init', 'my_custom_slider');
function my_custom_slider(){

register_post_type(
  'slider',
  array(
    'label' => 'slider',
    'labels' => array(
      'name' => 'slider',
      'singular_name' => 'slider',
      'all_items' => 'Toutes les slides',
      'add_new_item' => 'Ajouter une slides',
      'edit_item' => 'Éditer une slides',
      'new_item' => 'Nouvelle slides',
      'view_item' => 'Voir les slides',
      'search_items' => 'Rechercher parmi les slides',
      'not_found' => 'Pas d\'slides trouvé',
      'not_found_in_trash'=> 'Pas d\'slides dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
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
