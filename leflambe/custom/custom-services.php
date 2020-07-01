<?php
add_action('init', 'my_custom_service');
function my_custom_service(){

register_post_type(
  'service',
  array(
    'label' => 'service',
    'labels' => array(
      'name' => 'service',
      'singular_name' => 'service',
      'all_items' => 'Toutes les service',
      'add_new_item' => 'Ajouter une service',
      'edit_item' => 'Éditer une service',
      'new_item' => 'Nouvelle service',
      'view_item' => 'Voir les service',
      'search_items' => 'Rechercher parmi les service',
      'not_found' => 'Pas d\'service trouvé',
      'not_found_in_trash'=> 'Pas d\'service dans la corbeille'
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
