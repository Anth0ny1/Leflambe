<?php
add_action('init', 'my_custom_presentation');
function my_custom_presentation(){

register_post_type(
  'presentation',
  array(
    'label' => 'presentation',
    'labels' => array(
      'name' => 'presentation',
      'singular_name' => 'presentation',
      'all_items' => 'Toutes les presentation',
      'add_new_item' => 'Ajouter une presentation',
      'edit_item' => 'Éditer une presentation',
      'new_item' => 'Nouvelle presentation',
      'view_item' => 'Voir les presentation',
      'search_items' => 'Rechercher parmi les presentation',
      'not_found' => 'Pas d\'presentation trouvé',
      'not_found_in_trash'=> 'Pas d\'presentation dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      // 'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true,
    'menu_position' => 82,
    'menu_icon' => 'dashicons-format-gallery',
    // 'rewrite' => array(
    //   'slug' => 'taxonomy-marque',
    // )
  )
);
}
