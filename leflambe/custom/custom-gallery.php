<?php
add_action('init', 'my_custom_gallery');
function my_custom_gallery(){

register_post_type(
  'gallery',
  array(
    'label' => 'gallery',
    'labels' => array(
      'name' => 'gallery',
      'singular_name' => 'gallery',
      'all_items' => 'Toutes les gallery',
      'add_new_item' => 'Ajouter une gallery',
      'edit_item' => 'Éditer une gallery',
      'new_item' => 'Nouvelle gallery',
      'view_item' => 'Voir les gallery',
      'search_items' => 'Rechercher parmi les gallery',
      'not_found' => 'Pas d\'gallery trouvé',
      'not_found_in_trash'=> 'Pas d\'gallery dans la corbeille'
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
