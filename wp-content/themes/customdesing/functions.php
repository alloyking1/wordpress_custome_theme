<?php 

function theme_option_setup(){
    add_theme_support('menus');  
    register_nav_menu('primary', 'Primary Header Manu Navigation');
    // use register navmenus to add more than one
}

add_action('init', 'theme_option_setup');


// works post type
function get_custom_post_type(){
    register_post_type('work', 
        array(
            'rewrite' => array('slug' => 'works'),
            'labels' => array(
                'name' => 'Works',
                'singular_name' => 'Work',
                'add_new_item' => 'Add New Work',
                'edit_item' => 'Edit Work',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt','comments'
            )
        )
    );
}

add_action('init', 'get_custom_post_type');