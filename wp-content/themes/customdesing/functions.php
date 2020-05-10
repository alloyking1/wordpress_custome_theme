<?php 

function theme_option_setup(){
    add_theme_support('menus');  
    register_nav_menu('primary', 'Primary Header Manu Navigation');
    // use register navmenus to add more than one
}

add_action('init', 'theme_option_setup');

function add_theme_scripts() { 
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/theme/assets/vendor/bootstrap/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'background', get_template_directory_uri() . '/theme/assets/js/particleCDN.js', array( 'jquery' ) );
    wp_enqueue_script( 'background', get_template_directory_uri() . '/theme/assets/js/particle.js', array( 'jquery' ) );
}

add_action('init','add_theme_scripts');


// works post type
// function get_custom_post_type(){
//     register_post_type('work', 
//         array(
//             'rewrite' => array('slug' => 'works'),
//             'labels' => array(
//                 'name' => 'Works',
//                 'singular_name' => 'Work',
//                 'add_new_item' => 'Add New Work',
//                 'edit_item' => 'Edit Work',
//             ),
//             'menu-icon' => 'dashicons-clipboard',
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array(
//                 'title', 'thumbnail', 'editor', 'excerpt','comments'
//             )
//         )
//     );
// }

// add_action('init', 'get_custom_post_type');


// function my_taxonomies_work() {
//     $labels = array(
//       'name'              => _x( 'Work Categories', 'taxonomy general name' ),
//       'singular_name'     => _x( 'Work Category', 'taxonomy singular name' ),
//       'search_items'      => __( 'Search Work Categories' ),
//       'all_items'         => __( 'All Work Categories' ),
//       'parent_item'       => __( 'Parent Work Category' ),
//       'parent_item_colon' => __( 'Parent Work Category:' ),
//       'edit_item'         => __( 'Edit Work Category' ), 
//       'update_item'       => __( 'Update Work Category' ),
//       'add_new_item'      => __( 'Add New Work Category' ),
//       'new_item_name'     => __( 'New Work Category' ),
//       'menu_name'         => __( 'Work Categories' ),
//     );
//     $args = array(
//       'labels' => $labels,
//       'hierarchical' => true,
//     );
//     register_taxonomy( 'Work_category', 'Work', $args );
//   }
//   add_action( 'init', 'my_taxonomies_Work', 0 );