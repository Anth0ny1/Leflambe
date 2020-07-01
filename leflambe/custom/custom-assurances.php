<?php
add_action('init', 'my_custom_assurance');
function my_custom_assurance(){

register_post_type(
  'assurance',
  array(
    'label' => 'assurance',
    'labels' => array(
      'name' => 'assurance',
      'singular_name' => 'assurance',
      'all_items' => 'Toutes les assurance',
      'add_new_item' => 'Ajouter une assurance',
      'edit_item' => 'Éditer une assurance',
      'new_item' => 'Nouvelle assurance',
      'view_item' => 'Voir les assurance',
      'search_items' => 'Rechercher parmi les assurance',
      'not_found' => 'Pas d\'assurance trouvé',
      'not_found_in_trash'=> 'Pas d\'assurance dans la corbeille'
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
