<?php
add_action('init', 'my_custom_occasion');
function my_custom_occasion(){

register_post_type(
  'occasion',
  array(
    'label' => 'Occasions',
    'labels' => array(
      'name' => 'Occasions',
      'singular_name' => 'Occasions',
      'all_items' => 'Toutes les occasions',
      'add_new_item' => 'Ajouter une occasions',
      'edit_item' => 'Éditer une occasions',
      'new_item' => 'Nouvelle occasions',
      'view_item' => 'Voir les occasions',
      'search_items' => 'Rechercher parmi les occasions',
      'not_found' => 'Pas d\'occasions trouvé',
      'not_found_in_trash'=> 'Pas d\'occasions dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
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
register_taxonomy(
  'marque',
  'occasion',
  array(
    'label' => 'marque',
    'labels' => array(
    'name' => 'marque',
    'singular_name' => 'marque',
    'all_items' => 'Tous les marque',
    'edit_item' => 'Éditer la marque',
    'view_item' => 'Voir la marque',
    'update_item' => 'Mettre à jour la marque',
    'add_new_item' => 'Ajouter une marque',
    'new_item_name' => 'nouvelle marque',
    'search_items' => 'Rechercher parmi les marque',
    'popular_items' => 'marque les plus utilisés'
  ),
  'hierarchical' => true
  )
);
register_taxonomy_for_object_type( 'marque', 'occasion' );
}
